$(document).ready(function() {
  $('#student-form').submit(function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Get form data
    var formData = new FormData(this);

    // Send form data using AJAX
    $.ajax({
      url: 'http://localhost/internship-enrollment_system/student/inc/poststudents.php', // URL of the PHP file that will process the form data
      type: 'POST',
      data: formData,
      contentType: false, // Set content type to false, because jQuery will automatically set the correct content type based on the file extension
      processData: false, // Set processData to false, because jQuery will automatically process the data for us
      success: function(response) {
        // Handle success response
       if (response == "success") {
        window.location.href = "home.php"
       } else {
        alert(response)
       }
      },
      error: function(xhr, status, error) {
        // Handle error response
        console.log(xhr.responseText);
      }
    });
  });
});
