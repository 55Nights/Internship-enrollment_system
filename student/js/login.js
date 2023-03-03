$(document).ready(function () {
  $("#ln").submit(function (e) { 
    e.preventDefault();
    var formData = {
      'email': $('input[name=email]').val(),
      'password': $('input[name=password]').val()
    };

    // send the form data using AJAX
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: formData,
      dataType: 'json',
      encode: true
    })
    .done(function(response) {
      // handle the response from the server
      console.log(response);
    });
  });
});
