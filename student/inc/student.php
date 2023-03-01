<?php
require("./db.php");

class Student {
    public $firstName;
    public $lastName;
    public $pic;
    public $email;
    public $password;
    public $studentId;
    public $location;
    public $primaryRole;
    public $otherRoles;
    public $expYear;
    public $bio;
    public $achievement;
    public $industry;
    public $skills;
    public $resume;

      public function addToDatabase($conn) {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO students (firstname, lastname, pic, email, password, studentid, location, primaryrole, otherroles, exp_year, bio, acheivement, industry, skills, resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        // Bind parameters to statement
        $stmt->bind_param("sssssssssssssss", $this->firstName, $this->lastName, $this->pic, $this->email, $this->password, $this->studentId, $this->location, $this->primaryRole, $this->otherRoles, $this->expYear, $this->bio, $this->achievement, $this->industry, $this->skills, $this->resume);
    
        // Execute the statement and return success/failure
        if ($stmt->execute()) {
          return true;
        } else {
          return false;
        }
      }
  }
