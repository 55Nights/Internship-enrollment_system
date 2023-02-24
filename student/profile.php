<?php
require("./profile-header.php")
?>
        <main class="main-about">
            <h3>Update your profile</h3>
            <hr>
            <section class="about">
                <form action="./home.php" method="post">
            <div class="contain">
                <section class="about-info">
                    <h4>About</h4>
                    <p>Tell use about yourself</p>
                </section>
                <section class="about-text">
                        <input style="width: 250px;" class="name" type="text" name="First" id="first" placeholder="First Name">
                        <input style="width: 250px;" type="text" name="First" id="first" placeholder="First Name">
                        <section class="about-pic">
                            <img src="./assets/students/home.png" alt="">
                            <input type="file" name="file" id="" >
        
                        </section>
                        <input type="email" name="" id="" placeholder="email"><br>
                        <input type="text" name="" id="" value="where are you based" ><br>
                        <input type="text" name="" id="" placeholder="Primary role e.g software development"><br>
                        <input type="text" name="" id="" placeholder="Other roles e.g software development"><br>
                        <input type="number" name="" id="" placeholder="Years of experience"> years<br>
                        <textarea name="" id="" cols="30" rows="10" placeholder="your Bio" ></textarea><br>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your Achievement and experience"></textarea>
        
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
                            <input type="url" name="" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/ggit.png" alt="">
                                <p>github</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/linked.png" alt="">
                                <p>LinkedIn</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>
                        <div class="urls">
                            <div class="url-icon">
                                <img src="./assets/students/twitter.png" alt="">
                                <p>Twiter</p>
                            </div>
                            <input type="url" name="" id="" placeholder="https://">
                        </div>        
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Your Skills</h4>
                   
                </section>
                <section class="about-text">
                  <input type="text" name="" id="" placeholder="E.g python, Java">
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Your Achievement</h4>
                   
                </section>
                <section class="about-text">
                <textarea name="" id="" cols="30" rows="10" placeholder="I have launched facebook like application with a milion users"></textarea>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Resume/CV</h4>
                   
                </section>
                <section class="about-text">
                    <input type="file" name="" id="">
                </section>
            </div>
            <button type="submit" class="button-profile">update profile</button>
            </form>
            </section>
        </main>
    </div>
    
</body>
</html>