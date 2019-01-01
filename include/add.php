<html>
<head>
    <title>Add Users</title>
</head>

<body>
    Go to Home
    



    <form action="add.php" method="post" name="form1">
        
Name	<input type="text" name="name">
Tempat	<input type="text" name="email">
Tanggal	<input type="date" name="tanggal">
Kisaran <input type="text" name="kisaran">
<input type="submit" name="Submit" value="Add">

    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['name'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $kisaran = $_POST['kisaran'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(id_event,nama,tempat,tanggal,kisaran) VALUES('$nama','$tempat','$tanggal','$kisaran')");

        // Show message when user added
        echo "User added successfully. View Users";
    }
    ?>
</body>
</html>