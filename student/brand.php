<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="student.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <title>STUDENT | Jobs</title>
    <style>

      .job-description{
        width: 100%;
        padding: 1em;
      }
      .brand{
        width: 30%;
        margin: auto;
      }
      .board{
        width: 60%;
        height: 70vh;
        overflow: auto;
      }
      .job-but{
        display: flex;
      }
      .branding{
        display: flex;
        justify-content: space-between;
        margin-top: 3em;
      }
      .hiring-brander{
        margin-right: 10em;
        text-align: center;
        width: 15%;
       
      }
      .img{
        height: 60px;
        width: 60px;
        margin-left: 4.5em;
      }
      img{
        width: 100%;
        height: 100%;
        border-radius: 50%;

      }
      .hiring-brander a{
        display: inline-flexbox;
        padding: .5em 1em;
        color: white;
        background-color: blueviolet;
        margin-top: 5em;
      }
    </style>
</head>
<body class="profile-body">
    <p class="logo">InternQuest</p>
</section>
<div class="brand">
    <div class="brand-logo">
        <img src="../organizations/assets/logo/icons8-espn-48.png" alt="" width="100%" height="100%">
    </div>
    <div class="brand-name">
        <p>espn</p>
        <img src="./assets/bluetick.png" alt="bluetick">
    </div>
</div>
<main class="branding">
    <div class="board">
        <h3>Jobs Board</h3>
        <ul>
            <li>
                <div class="job-description">
                        <div class="new">
                        <p class="job-title">Frontend Engineering</p>
                        <p class="job-location">Remote only</p>
                        <p class="job-salary">$0-$130k</p>
                        <p class="job-date">Yesterday</p>
                        </div>
                        <div class="job-but">
                            <a href="" class="description-a">Save</a>
                            <a class="black description-a" href="">apply</a>
                        </div>
                    </li>
                    <li>
                <div class="job-description">
                        <div class="new">
                        <p class="job-title">Frontend Engineering</p>
                        <p class="job-location">Remote only</p>
                        <p class="job-salary">$0-$130k</p>
                        <p class="job-date">Yesterday</p>
                        </div>
                        <div class="job-but">
                            <a href="" class="description-a">Save</a>
                            <a class="black description-a" href="">apply</a>
                        </div>
                    </li>
        </ul>
    </div>
    <div class="hiring-brander">
        <div class="img">
            <img src="../organizations/assets/SIGN UP.png" alt="">
        </div>
        <p style="font-weight:bold; margin-top:1em;">Hiring Manager</p>
        <p style="margin-bottom: 2em;">Henry Ngata</p>
        <a href="./chat.php">Message</a>
    </div>

</main>
</body>
</html>