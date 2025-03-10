'use strict';

document.addEventListener('DOMContentLoaded', function () {
    // Toastr Options
    toastr.options = {
      closeButton: true,
      progressBar: true,
      positionClass: 'toast-top-right',
      preventDuplicates: true,
      newestOnTop: true
    };
   
    const campaignForm = document.getElementById('savePractice');
  
    // Function to toggle the disabled state of all form fields
const toggleFormFields = (form, state) => {
    const fields = form.querySelectorAll('input, textarea, select, button');
    fields.forEach(field => {
      field.disabled = state;
    });
  };
  
  // Form Submission Logic
  if (campaignForm) {
    campaignForm.addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent default form submission
  
      const formData = new FormData(campaignForm);
      toastr.clear(); // Clear any previous Toastr messages
  
      // Validate the specific text field (e.g., 'practice_name')
      const practiceName = formData.get('practice_name')?.trim();
  
      if (!practiceName) {
        toastr.error('Please enter a valid practice name');
        return; // Stop further validation if the field is empty
      }
  
      // Disable form fields before AJAX submission 
      toggleFormFields(campaignForm, true);
  
      // Send form data via AJAX
      $.ajax({
        url: '../managementfiles/php_scripts/createPractice.php',
        method: 'POST',
        data: formData, // Directly send FormData (not an object)
        contentType: false, // Important for file uploads
        processData: false, // Prevent jQuery from processing the FormData
        success: function (response) {
          if (response?.message?.includes('Success')) {
            toastr.success(response.data || 'User has been created ', 'Success');
            setTimeout(() => {
              window.location.reload();
            }, 5000); // Reload the page after 5 seconds
          } else {
            toastr.error(response?.data || 'An error occurred', 'Error');
          }
        },
        error: function (xhr) {
          console.error('AJAX Error:', xhr.responseText);
          toastr.error('An error occurred during the request.', 'Error');
        },
        complete: function () {
          toggleFormFields(campaignForm, false); // Re-enable form fields
        }
      });
    });
  }
  

  // Initialize DataTable
    $(document).ready(function () {
    // Destroy any existing DataTable instance
    if ($.fn.DataTable.isDataTable('.userDatatable')) {
      $('.userDatatable').DataTable().destroy();
    }

    // Reinitialize DataTable
    $('.userDatatable').DataTable({
      ajax: {//WCSPortal/managementfiles/json_data/getUser.php
        url: '../managementfiles/json_data/getPractices.php',
        dataSrc: function (json) {
          if (!json || !json.data) {
            console.error('Invalid JSON response:', json);
            toastr.error('Failed to load registered users.');
            return [];
          }
          return json.data;
        },
        error: function (xhr) {
          console.error('Error loading registered:', xhr.responseText);
          toastr.error('An error occurred while fetching registered Practices.');
        }
      },
      columns: [
        { data: 'id' },
        { data: 'area' },
        { data: 'userid' },
        { data: 'date' },
        {
          data: null,
          render: function (data, type, row) {
            return `
              <div class="table-actions d-flex">
                <a class="edit-appeal me-2" href="edit-subcategories.html">
                  <img src="./../assets/img/icons/edit.svg" alt="Edit">
                </a>
                <a class="delete-appeal" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                  <img src="./../assets/img/icons/delete.svg" alt="Delete">
                </a>
              </div>
            `;
          }
        }
      ],
      responsive: true,
      order: [[4, 'desc']],
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search Appeal'
      },
      initComplete: function (settings, json) {
        console.log('Data successfully loaded:', json);
      }
    });
  });
});