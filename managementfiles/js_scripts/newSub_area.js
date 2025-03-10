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
   
    const campaignForm = document.getElementById('saveSub_area');
  
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

      // Validate the dropdown field (e.g., 'client_type')
      const clientType = formData.get('practice_area');
  
      if (!clientType || clientType === 'default') {
        toastr.error('Please select a practice area');
        return; // Stop further validation if the dropdown is not selected or has the default value
      }
  
      // Validate the textbox field (e.g., 'client_tag')
      const clientTag = formData.get('subPractice')?.trim();
  
      if (!clientTag) {
        toastr.error('Please enter a sub practice');
        return; // Stop further validation if the textbox is empty
      }
  
      // Disable form fields before AJAX submission 
      toggleFormFields(campaignForm, true);
  
      // Send form data via AJAX
      $.ajax({
        url: '../managementfiles/php_scripts/createSub_practice.php',
        method: 'POST',
        data: formData, // Directly send FormData (not an object)
        contentType: false, // Important for file uploads
        processData: false, // Prevent jQuery from processing the FormData
        success: function (response) {
          if (response?.message?.includes('Success')) {
            toastr.success(response.data || 'Tag has been added ', 'Success');
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
        url: '../managementfiles/json_data/getSub_practices.php',
        dataSrc: function (json) {
          if (!json || !json.data) {
            console.error('Invalid JSON response:', json);
            toastr.error('Failed to load registered client tags.');
            return [];
          }
          return json.data;
        },
        error: function (xhr) {
          console.error('Error loading registered:', xhr.responseText);
          toastr.error('An error occurred while fetching registered client tags.');
        }
      },
      columns: [
        { data: 'id' },
        { data: 'area_id' },
        { data: 'sub_area' },
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