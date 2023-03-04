$(document).ready(function () {
    $.getJSON("http://localhost/internship-enrollment_system/student/inc/convo.php",
        function (mails, textStatus, jqXHR) {
            for (let i = 0; i < mails.length; i++) {
                const mail = mails[i];
                $(".messages").append(`
                <li onclick="getMail(${mail})"><div class="message">
                    <div class="dp" style="width: 40px; height: 40px;"></div>
                    <div class="message-body">
                        <a href="http://localhost/internship-enrollment_system/student/chat.php?mail=${mail}"><p class="student-name">${mail}</p>
                        <p class="text">Helllooooooooooo</p>
                        </a>
                    </div>
                </div>
                </li>
            `);
            }
        }
    );

   
});