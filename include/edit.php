<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id_event'];

    $nama=$_POST['name'];
    $tempatt=$_POST['tempat'];
    $tanggal=$_POST['tanggal'];
    $kisaran=$_POST['kisaran'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $_POST['id_event'];

    $nama=$tambah_event['name'];
    $tempatt=$tambah_event['tempat'];
    $tanggal=$tambah_event['tanggal'];
    $kisaran=$tambah_event['kisaran'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    Home
    



    <form name="update_user" method="post" action="edit.php">
        
Name	<input type="text" name="nama" value=<?php echo $nama;?>>
Tempat	<input type="text" name="tempat" value=<?php echo $tempat;?>>
Tanggal	<input type="text" name="tanggal" value=<?php echo $tanggal;?>>
Kisaran <input type="text" name="kisaran" value=<?php echo $kisaran;?>>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>	<input type="submit" name="update" value="Update">

    </form>
</body>
</html>