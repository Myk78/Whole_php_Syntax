<?php

// $_GET method is a super variable is used for to check the value go form the form to server or not

// but get have security issue so it's show the value in url that's why developer used $_POST


// *********GET
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingrediants'];
    // }

// *********POST
// is hide the value in url and it's secure then get

    if(isset($_POST['submit'])){
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingrediants'];
    }
?>






<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"> Add a Laylo pizza</h4>

    <!-- // action is used to show the changes will done with her -->
    <form class="white" action="additem.php" method="POST">
        <label for=""> Your Email:</label>
        <input type="text" name="email">
        <label> Pizza Title</label>
        <input type="text" name="title">
        <label >Ingredients (comma separeted):</label>
        <input type="text"  name="ingrediants">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('template/footer.php'); ?>




</html>