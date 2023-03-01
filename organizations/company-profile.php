<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../student/student.css">
    <link rel="stylesheet" href="organizations.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <title>STUDENT | Jobs</title>
</head>
<body class="profile-body">
    <p class="logo">InternQuest</p>
</section>
   
<main>
            <h3>Company Profile</h3>
            <hr>
            <form action="./home.php" method="post">
            <div class="contain">
                <section class="about-info">
                    <h4>Company Name</h4>
                    <p>This will be the company's public profile</p>
                </section>
                <section class="about-text">
                    <input type="text" name="" id="" placeholder="E.g Google">
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Tagline</h4>
                    <p>A quick snapshot of the companies mission</p>
                </section>
                <section class="about-text">
                      
                        <input type="text" name="" id="" placeholder="E.g Nike: Just do it"><br>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Industry</h4>
                    <p>Which industry do you operate in</p>
                </section>
                <section class="about-text">
                    <select name="industry" id="">
                        <option value="computing">Computing and Information Technology</option>
                        <option value="Housing">Housing</option>
                        <option value="hospitality">hospitality</option>
                        
                    </select>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Company Logo</h4>
                    <p>company's mark</p>
                </section>
                <section class="about-text">
                      
                    <section class="about-pic">
                        <img src="./assets/students/home.png" alt="">
                        <input type="file" name="file" id="" >
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    
                    <h4>Company Social Profiles</h4>
                    <p>Your online presence</p>
                </section>
                <section class="about-text">
                        <div class="urls">
                            <div class="url-icon">
                                <img src="../student/assets/students/google.png" alt="">
                                <p>Website</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>
                        
                        <div class="urls">
                            <div class="url-icon">
                                <img src="../student/assets/students/linked.png" alt="">
                                <p>LinkedIn</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="../student/assets/students/twitter.png" alt="">
                                <p>Twiter</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>        
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Hiring Manager</h4>
                    <p>Tell use about yourself</p>
                </section>
                <section class="about-text">
                        <input  class="name" type="text" name="First" id="first" placeholder="First Name">
                        <input type="text" name="First" id="first" placeholder="Last Name">
                        <section class="about-pic">
                            <img src="../student/assets/students/home.png" alt="">
                            <input type="file" name="file" id="" >
                        </section>
                </section>
            </div>
            <hr>
            <button type="submit" class="button-profile">update profile</button>
        </form>
        </main>
        </body>
        </html>