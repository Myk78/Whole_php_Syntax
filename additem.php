<?php

// $_GET method is a super variable is used for to check the value go form the from to server or not

// but get have security issue so it's show the value in url that's why developer used $_POST


// *********GET
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingrediants'];
    // }

// *********POST
// is hide the value in url and it's secure then get
    $title = $email = $ingrediants = '';
    $error = array('email' =>'', 'title' =>'', 'ingrediants' =>'');


    if(isset($_POST['submit'])){

        // htmlspecialchars is used to convert the in script curelbrakets{} colens. into html for pervent the XSS Attacks

        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']) ;
        // echo htmlspecialchars( $_POST['ingrediants']);


        // **********Simple Validation Check

        if(empty($_POST['email'])){
            $error['email'] = 'Email is required <br/>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error['email'] = 'email must be a valid email address';
            }
            
            // echo htmlspecialchars($_POST['email']);
        }

        if(empty($_POST['title'])){
            $error['title'] ='  title is required <br/>';
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                $error['title'] =' Title only contain letter and spaces ';
            }
            // echo htmlspecialchars($_POST['title']);
        }

        if(empty($_POST['ingrediants'])){
            $error['ingrediants'] = 'Plz give atleast one ingrediants <br/>';
        }else{
            $ingrediants = $_POST['ingrediants'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingrediants)){
                $error['ingrediants'] =' ingrediants must contain comma seperated ';
            }
            // echo htmlspecialchars($_POST['ingrediants']);
        }

    


        //  ------------ Checking for and redirect function ---------------
        if(array_filter($error)){
            echo ' error in the form';
        }else{
            echo ' form is valid';
            // we use to header builen function to redirect the user
            header('location: miniproject.php');
        }

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
        <div class="red-text"><?php echo $error['email']; ?></div>
        <input type="text" name="email" value="<?php echo  htmlspecialchars($email) ?>">
        <label> Pizza Title</label>
        <div class="red-text"><?php echo $error['title']; ?></div>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title)  ?>">
        <label >Ingrediants (comma separeted):</label>
        <div class="red-text"><?php echo $error['ingrediants']; ?></div>
        <input type="text"  name="ingrediants" value="<?php echo  htmlspecialchars($ingrediants) ?>">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('template/footer.php'); ?>




</html>