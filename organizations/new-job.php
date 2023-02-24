<?php
require("./header.php")
?>
        <main>
            <h3>Job Details</h3>
            <hr>
            <form action="" method="post">
            <div class="contain">
                <section class="about-info">
                    <h4>Job Title</h4>
                </section>
                <section class="about-text">
                      
                        <input type="text" name="" id="" placeholder="E.g Frontend Development"><br>
                       
                    </form>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Job Description</h4>
                </section>
                <section class="about-text">
                      <textarea name="" id="" cols="30" rows="10" placeholder="E.g The employee will be required to work on projects "></textarea>
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Job Type </h4>
        
                </section>
                <section class="about-text">
                    <div class="radio">
                        <input type="radio" name="jobtype" id="internship">
                        <label for="internship"> internship</label>        
                        <input type="radio" name="jobtype" id="parttime">
                        <label for="parttime"> part time</label>
                        <input type="radio" name="jobtype" id="fulltime">
                        <label for="fulltime"> full time</label>
                    </div>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Location </h4>
        
                </section>
                <section class="about-text">
                    <input type="text" name="" id="" placeholder="E.g Nairobi Kenya">
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Hires </h4>
        
                </section>
                <section class="about-text" >
                    <div class="radio">
                        <input type="radio" name="hires" id="remote">
                        <label for="remote"> remote</label>
                        <input type="radio" name="hires" id="onsite">
                        <label for="onsite"> onsite</label>
                        <input type="radio" name="hires" id="hybrid">
                        <label for="hybrid"> hybrid</label>
                    </div>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Skills</h4>
                   
                </section>
                <section class="about-text">
                        <input  class="name" type="text" name="First" id="first" placeholder="Eg Python, JavaScript" max="5">
                      
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Experience</h4>
                   
                </section>
                <section class="about-text">
                        <input  class="name" type="number" name="First" id="first" placeholder="3 years" max="5">
                      
                </section>
            </div>
            <hr>
            <div class="contain">
                <section class="about-info">
                    <h4>Salary</h4>
                </section>
                <section class="about-text">
                    <input  class="name" type="number" name="First" id="first" placeholder="$10000" max="5">
                      
                </section>
            </div>
            <hr>
            <button type="submit" class="button-profile"><a href="./home.html">Post Job</a></button>
        </form>
        </main>
        </body>
        </html>