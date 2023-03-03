<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="student.css">
    <title>InternQuest | LOG IN</title>
</head>
<body class="body-login">
    
        <form action="./inc/signup.php" method="post"  id="signup" >
            <input type="email" name="email" id="email" 
            placeholder="studentid@students.uni" required><br>
            <p id="email-error"></p>
            <input type="password" name="password" 
            placeholder="password" id="password" required>
            <br>
            <input type="password" name="pwd" 
            placeholder=" confirm password" id="pwd" required>
            <button type="submit" class="button-login" id="studentlogin">Sign Up</button>
        </form>
        <p id="pwd-error"></p>
        <a href="#">forgot password </a>
        <a href="./login.php">Login </a>
        <script src="./js/signup.js"></script>
</body>
</html>