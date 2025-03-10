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
// Validate Fields
const validations = [
  { name: 'user_role', message: 'Please select a case category', type: 'select' },
  { name: 'lawyer_sub', message: 'Please select a case sub-category', type: 'select' },
  { name: 'choice_of_lawyer', message: 'Please select a lawyer', type: 'select' },
  { name: 'appointment_date', message: 'Incorrect Date set', type: 'datetime' },
  { name: 'description', message: 'Please enter a description', type: 'textarea' }
];

// Generic validation function
const validateField = (validation) => {
  const inputElement = document.getElementById(validation.name);
  let value = inputElement ? inputElement.value.trim() : "";  // Trim value

  // Check if the textarea is empty
  if (!value) {
    toastr.error(validation.message || "This field is required.");
    return false;
  }

  console.log("Textarea Value:", value); 

  // Specific validation based on the type of field
  if (validation.type === 'textarea') {


    console.log("Length of Textarea Value:", value.length);
 
    // Example: Check if the value length is at least 10 characters
    if (value.length < 10) {
      toastr.error("Text must be at least 10 characters long.");
      return false;
    }

    if (value.length > 500) {
      toastr.error("Text must not be more than 500 characters long.");
      return false;
    }

    // Example: Check for a specific regex pattern (no special characters)
    const regex = /^[\s\S]*$/;  // Only letters and spaces
    if (!regex.test(value)) {
      toastr.error("Text can only contain letters, numbers and spaces.");
      return false;
    }
  }

  if (validation.type === 'select') {
    // If the value is the default option (assuming 'default' is used for an unselected state)
    if (value === 'default') {
      toastr.error(validation.message);
      return false;
    }
  }

  if (validation.type === 'datetime') {
    // For datetime fields, check if the value exists
    if (!value) {
      toastr.error("Please select a valid date and time.");
      return false;
    }

    // Ensure input follows the correct format (YYYY-MM-DDTHH:mm)
    const isoDatetimeRegex = /^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$/;
    if (!isoDatetimeRegex.test(value)) {
      toastr.error("Invalid date format. Expected YYYY-MM-DDTHH:mm.");
      return false;
    }

    // Try to create a Date object to validate the date
    const date = new Date(value);
    if (isNaN(date.getTime())) {
      toastr.error("The selected date is invalid.");
      return false;
    }
  }

  // If all validations pass, return true
  return true;
};

// Example: Iterate through each field to validate
const validateForm = () => {
  for (const validation of validations) {
    if (!validateField(validation)) {
      return false; // Stop validation if any field fails
    }
  }
  
  // If all validations passed, proceed
  toastr.success("Form is valid!");
  return true;
};

// Loop through validations and check for missing values
for (const validation of validations) {
  const value = formData.get(validation.name);
  if (!validateField(validation, value)) {
    return; // Stop further validation
  }
}
// Loop through validations and check for missing values
for (const validation of validations) {
  const value = formData.get(validation.name);
  if (!validateField(validation, value)) {
    return; // Stop further validation
  }
}
  
        // Disable form fields before AJAX submission 
        toggleFormFields(campaignForm, true);
  
        // Send form data via AJAX
        $.ajax({
          url: '../managementfiles/php_scripts/confirmBooking.php',
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
        url: '../managementfiles/json_data/getAppointments.php',
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
          toastr.error('An error occurred while fetching registered.');
        }
      },
      columns: [ 
        { data: 'id' },
        { data: 'desc' },
        { data: 'prac_area' },
        { data: 'subPrac_area' },
        { data: 'client' },
        { data: 'lawyer' },
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