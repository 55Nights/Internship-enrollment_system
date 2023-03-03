<?php
session_start();
if(!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}

$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="student.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>STUDENT | update your profile</title>
</head>
<body class="profile-body">
<h1>Welcome <?php echo $email; ?>!</h1>
    <p class="logo">InternQuest</p>
</section>
    
        <main class="main-about">
            <h3>Update your profile</h3>
            <hr>
            <section class="about">
                <form action="./inc/poststudents.php" method="post" enctype="multipart/form-data" id="student-form">
            <div class="contain">
                <section class="about-info">
                    <h4>About</h4>
                    <p>Tell use about yourself</p>
                </section>
                <section class="about-text">
                        <input style="width: 250px;" class="name" type="text" name="firstname" id="first" placeholder="First Name">
                        <input style="width: 250px;" type="text" name="lastname" id="first" placeholder="Last Name">
                        <section class="about-pic">
                            <img src="./assets/students/home.png" alt="">
                            <input type="file" name="profilepic" id="ppic" >
        
                        </section>
                        <input type="email" name="email" id="email" placeholder="email" <?php echo "value =" .$email; ?> readonly><br>
                        <input type="text" name="location" id="location" value="where are you based" ><br>
                        <input type="text" name="primaryrole" id="prole" placeholder="Primary role e.g software development"><br>
                        <input type="text" name="otherroles" id="oroles" placeholder="Other roles e.g software development"><br>
                        <input type="number" name="experience" id="exp" placeholder="Years of experience"> years<br>
                        <textarea name="bio" id="Bio" cols="30" rows="10" placeholder="your Bio" ></textarea><br>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Industry</h4>
                    <p>Which industry do you operate in</p>
                </section>
                <section class="about-text">
                <label for="industry">Industry:</label>
<select name="industry" id="industry">
  <option value="IT">IT</option>
  <option value="Finance">Finance</option>
  <option value="Marketing">Marketing</option>
  <option value="Healthcare">Healthcare</option>
  <option value="Education">Education</option>
</select>

<label for="job">Job:</label>
<select name="job" id="job">
  <optgroup label="IT">
    <option value="Web Developer">Web Developer</option>
    <option value="Software Engineer">Software Engineer</option>
    <option value="Data Analyst">Data Analyst</option>
  </optgroup>
  <optgroup label="Finance">
    <option value="Accountant">Accountant</option>
    <option value="Financial Analyst">Financial Analyst</option>
    <option value="Investment Banker">Investment Banker</option>
  </optgroup>
  <optgroup label="Marketing">
    <option value="Marketing Manager">Marketing Manager</option>
    <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
    <option value="Market Research Analyst">Market Research Analyst</option>
  </optgroup>
  <optgroup label="Healthcare">
    <option value="Registered Nurse">Registered Nurse</option>
    <option value="Physician Assistant">Physician Assistant</option>
    <option value="Medical Technologist">Medical Technologist</option>
  </optgroup>
  <optgroup label="Education">
    <option value="Teacher">Teacher</option>
    <option value="Guidance Counselor">Guidance Counselor</option>
    <option value="Professor">Professor</option>
  </optgroup>
</select>

                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    
                    <h4>Social Profiles</h4>
                    <p>Where can we find you online</p>
                </section>
                <section class="about-text">
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/google.png" alt="">
                                <p>Website</p>
                            </div>
                            <input type="url" name="website" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/ggit.png" alt="">
                                <p>github</p>
                            </div>
                            <input type="url" name="github" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/linked.png" alt="">
                                <p>LinkedIn</p>
                            </div>
                            <input type="url" name="LinkedIn" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/twitter.png" alt="">
                                <p>Twiter</p>
                            </div>
                            <input type="url" name="twitter" id="" placeholder="https://">
                        </div>        
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Your Skills</h4>
                   
                </section>
                <section class="about-text">
                  <input type="text" name="skills" id="skills" placeholder="E.g python, Java">
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Your Achievement</h4>
                   
                </section>
                <section class="about-text">
                <textarea name="achievement" id="achv" cols="30" rows="10" placeholder="I have launched facebook like application with a milion users"></textarea>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Resume/CV</h4>
                   
                </section>
                <section class="about-text">
                    <input type="file" name="resume" id="cv" required>
                </section>
            </div>
            <button type="submit" class="button-profile">update profile</a></button>
            </form>
            </section>
        </main>
    </div>
    <script src=""></script>
</body>
</html>