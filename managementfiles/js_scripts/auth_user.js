'use strict';
document.addEventListener('DOMContentLoaded', function () {

  toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: 'toast-top-right', // Change the position if needed
    preventDuplicates: true,
    newestOnTop: true
  };

  const formAuthentication = document.querySelector('#formAuthentication');
  const form_sign_up = document.querySelector('#form_sign_up');

  const toggleFormFields = (form, state) => {
    const fields = form.querySelectorAll('input, textarea, select, button');
    fields.forEach(field => {
      field.disabled = state;
    });
  };
  
  //sign in a user
  if (formAuthentication) {
    formAuthentication.addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent default form submission

      // Collect form data
      const username = formAuthentication.querySelector('[name="username"]');
      const password = formAuthentication.querySelector('[name="password"]');

      let isValid = true;

      // Clear previous toastr messages
      toastr.clear();

      // Validate username
      if (!username || username.value.trim().length < 3) {
        toastr.error('Username must be at least 3 characters long.');
        isValid = false; 
      }

      // Validate password
      if (!password || password.value.trim().length < 3) {
        toastr.error('Password must be at least 3 characters long.');
        isValid = false; 
      }

      // Stop further execution if there are validation errors
      if (!isValid) {
        return;
      }

      // Prepare form data for submission
      const formData = new FormData(formAuthentication);

      // Submit form via AJAX
      $.ajax({
        url: 'managementfiles/json_data/login.php', // Adjust your URL if needed
        method: 'POST',
        data: Object.fromEntries(formData.entries()),
        dataType: 'json',
        success: function (response) {
          const message = response.message;
          const data = response.data;
          if (message.includes('Success')) {
            toastr.success(data, 'Success');
            setTimeout(function () {
              window.location.reload();
            }, 6000); // Adjust the reload timing as necessary
          } else if (message.includes('Error')) {
            toastr.error(data, 'Error');
          }
          formAuthentication.reset();
        },
        error: function () {
          toastr.error('An error occurred during form submission.', 'Error');
        }
      });
    });
  }

  if(form_sign_up){
    form_sign_up.addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent default form submission

      const formData = new FormData(form_sign_up);
      toastr.clear(); 

      // Define Validation Rules
      const validations = [
        { name: 'client_title', message: 'Please select a title', type: 'select' },
        { name: 'first_name', message: 'Please enter your first name', type: 'text', minLength: 2, maxLength: 50, pattern: /^[a-zA-Z\s]+$/, patternMessage: "First name can only contain letters and spaces" },
        { name: 'last_name', message: 'Please enter your last name', type: 'text', minLength: 2, maxLength: 50, pattern: /^[a-zA-Z\s]+$/, patternMessage: "Last name can only contain letters and spaces" },
        { name: 'client_sex', message: 'Please select a gender', type: 'select' },
        { name: 'userzid', message: 'Please enter a username', type: 'text', minLength: 3, maxLength: 20, patternMessage: "Username can only contain letters, numbers, and underscores" },
        { name: 'user_email', message: 'Please enter a valid email', type: 'text', pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/, patternMessage: "Enter a valid email address (e.g., example@domain.com)" },
        { name: 'user_tel', message: 'Please enter a valid telephone number', type: 'text', pattern: /^[0-9]{7,15}$/, patternMessage: "Telephone must be 7-15 digits" },
        { name: 'user_pass', message: 'Please enter a password', type: 'password', minLength: 3 }

      ];

      // Generic Validation Function
      const validateField = (validation) => {
        const inputElement = document.getElementById(validation.name);
        if (!inputElement) return false;

        let value = inputElement.value.trim();

        // Required Field Check
        if (!value) {
          toastr.error(validation.message);
          return false;
        }

        // Select Field Validation
        if (validation.type === 'select' && value === 'default') {
          toastr.error(validation.message);
          return false;
        }

        // Text Field Validations
        if (validation.type === 'text' || validation.type === 'password') {
          if (validation.minLength && value.length < validation.minLength) {
            toastr.error(`${validation.message} - Minimum ${validation.minLength} characters required.`);
            return false;
          }

          if (validation.maxLength && value.length > validation.maxLength) {
            toastr.error(`${validation.message} - Maximum ${validation.maxLength} characters allowed.`);
            return false;
          }

          if (validation.pattern && !validation.pattern.test(value)) {
            toastr.error(validation.patternMessage);
            return false;
          }
        }

        return true;
      };

      // Validate the Form
      const validateForm = () => {
        for (const validation of validations) {
          if (!validateField(validation)) {
            return false; // Stop validation on the first error
          }
        }
        
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
        toggleFormFields(form_sign_up, true);
  

       // Send form data via AJAX
       $.ajax({
        url: 'managementfiles/php_scripts/reg_client.php',
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
          toggleFormFields(form_sign_up, false); // Re-enable form fields
        }
      });


    });
  }
});
