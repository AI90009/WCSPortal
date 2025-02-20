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
});
