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
   
    const campaignForm = document.getElementById('saveUser');
  
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

        function isValidEmail(email) {
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return emailPattern.test(email);
        }
  
        // Validate Fields
        const validations = [
          //{ name: 'user_img', message: 'I dont see an image added for this user', type: 'file' },
          { name: 'user_fullnames', message: 'Please enter Full Names' },
          { name: 'usernames', message: 'Username will be used to Login' },
          { name: 'user_email', message: 'Email is important....', type: 'email' },
          { name: 'user_phone', message: 'Please enter user phone number' },
          { name: 'user_pass', message: 'A password is a requirement' },
          { name: 'user_cpass', message: 'Please confirm the password' },
          { name: 'user_role', message: 'Please select a user role', type: 'select' },
          { name: 'user_state', message: 'Please select state of this user', type: 'radio' }
        ];
  
        // Loop through validations and check for missing values
        for (const validation of validations) {
          const value = formData.get(validation.name);
      
          if (validation.type === 'file') {
            // Special handling for file inputs
            const fileInput = document.querySelector('input[name="user_img"]');
            if (!value || !(value instanceof File) || value.size === 0) {
              // If no image, set a default image (default.jpg)
              formData.set('user_img', 'user-06.jpg');
            }
          }  // Handle select inputs
          else if (validation.type === 'select') {
            if (!value || value === 'default') {
              toastr.error(validation.message);
              return; // Stop further validation
            }
          } else if (validation.type === 'radio') {
            // Special handling for radio buttons
            const radioButton = document.querySelector('input[name="user_state"]:checked');
            if (!radioButton) {
              toastr.error(validation.message);
              return; // Stop further validation if no radio button is selected
            }
          }else if (validation.type === 'email') {
            // Email validation
            if (!value || !value.trim()) {
                toastr.error('Email is important....');
                return; // Stop further validation if email is empty
            } else if (!isValidEmail(value)) {
                toastr.error('Please enter a valid email address.');
                return; // Stop further validation if email is invalid
            }
        }else if (validation.name === 'user_cpass') {
            // Password mismatch check
            const password = formData.get('user_pass');
            const confirmPassword = formData.get('user_cpass');
            if (!confirmPassword || !confirmPassword.trim()) {
                toastr.error('Please confirm the password.');
                return; // Stop further validation if confirm password is empty
            } else if (password !== confirmPassword) {
                toastr.error('Passwords do not match.');
                return; // Stop further validation
            }
        }else {
              // General validation for other input types
              if (!value?.trim()) {
                  toastr.error(validation.message);
                  return; // Stop further validation
              }
          }
        }
  
        // Disable form fields before AJAX submission 
        toggleFormFields(campaignForm, true);
  
        // Send form data via AJAX
        $.ajax({
          url: 'http://localhost/WCSPortal/managementfiles/php_scripts/createUser.php',
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
      ajax: {
        url: 'http://localhost/WCSPortal/managementfiles/json_data/getUser.php',
        dataSrc: function (json) {
          if (!json || !json.data) {
            console.error('Invalid JSON response:', json);
            toastr.error('Failed to load appeals.');
            return [];
          }
          return json.data;
        },
        error: function (xhr) {
          console.error('Error loading appeals:', xhr.responseText);
          toastr.error('An error occurred while fetching appeals.');
        }
      },
      columns: [
        { data: 'id' },
        { data: 'recordedBy' },
        { data: 'phone' },
        { data: 'role' },
        { data: 'fullnamed' },
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