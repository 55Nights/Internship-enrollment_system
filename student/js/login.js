$(document).ready(function () {
  $("#s_login").submit(function (event) {
    var formData = {
      password: $("#pwd").val(),
      email: $("#email").val(),
    };

    $.ajax({
      type: "POST",
      url: "http://localhost/internship-enrollment_system/student/inc/login.php",
      data: (formData),
      encode: true,
      headers: {  'Content-Type': 'application/x-www-form-urlencoded' },
      success: function(response) {
        // Handle the API response
        if (response == 'success') {
          // Login successful
          window.location.href = "./profile.php";
          $("#pwd-error").append(response);
        } else {
          // Login failed
          $("#pwd-error").append(response);
        }
      }
    })

    event.preventDefault();
    console.log("hello");
   
  });
});