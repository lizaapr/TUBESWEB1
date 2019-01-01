<?php  
    include("../include/config.php");  
    $delete_id=$_GET['del'];  
    $delete_query="DELETE from event WHERE id='$delete_id'"; 
    $result=mysqli_query($conn,$delete_query);  
    if($result)  
    {   
        echo "<script>window.open('events.php?deleted=pengguna has been deleted','_self')</script>";  
    }  
      
    ?>