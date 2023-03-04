$(document).ready(function () {
    console.log("hello");
  
   
    $.getJSON("http://localhost/internship-enrollment_system/student/inc/com.php",
    function (data, textStatus, jqXHR) {
       for (let i = 0; i < data.length; i++) {
        const obj = data[i];
        $(".posts").append(`
        <div class="post">
                    <div class="post-profile">
                        <img src="./assets/students/signup.png" alt="student profile pic">
                    <div class="div">
                        <h4 class="tp">Henry Ngata</h4>
                        <p>Student</p>
                    </div>
                    </div>
                    <div class="post-heading">
                        <h5 class="MT head-post">${obj['heading']}</h5>
                        <div class="date">${Date(obj['date'])}</div>
                    </div>
                    <p class="paragraph">
                        ${obj['body']}
                    </p>
                </div>
        
        `);
       }
       
    $("h3").text(data[0]['heading'])
    }
); 
});