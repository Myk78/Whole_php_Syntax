<?php
 $conn = mysqli_connect('localhost','Myk','yaseen123','laylo pizza');

 if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
 };

?>




<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php'); ?>

<?php include('template/footer.php'); ?>




</html>