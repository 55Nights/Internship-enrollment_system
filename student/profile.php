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
    <p class="logo">InternQuest</p>
</section>
    
        <main class="main-about">
            <h3>Update your profile</h3>
            <hr>
            <section class="about">
                <form action="" method="post" enctype="multipart/form-data" id="student-form">
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
                        <input type="email" name="email" id="email" placeholder="email"><br>
                        <input type="text" name="location" id="location" value="where are you based" ><br>
                        <input type="text" name="primaryrole" id="prole" placeholder="Primary role e.g software development"><br>
                        <input type="password" name="password" id="pass" placeholder="password">
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
                    <select name="industry" id="ind">
                        <option value="computing">Computing and Information Technology</option>
                        <option value="Housing">Housing</option>
                        <option value="hospitality">hospitality</option>
                        
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
                            <input type="url" name="twiter" id="" placeholder="https://">
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
    <script src="./js/student.js"></script>
</body>
</html>