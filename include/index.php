<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
Add New User



    
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "";
        echo "";
        echo "";
        echo "";    
        echo "";        
    }
    ?>
</body>
</html>