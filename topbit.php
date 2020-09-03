<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start();
    include("config.php");
    include("functions.php"); // include data sanatising
    
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,
    DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
         exit;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Reviews">
    <meta name="keywords" content="Book, Book Reviews">
    <meta name="author" content="Trent Rust">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
             
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Click here to go to the Home Page">
            <img class="img-circle" src="Images/beach_logo.jpg" width="160" height="91" alt="beach logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Beachside Book Reviews</h1>
        </div>

            