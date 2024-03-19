<?php

// connect to database
 $conn = mysqli_connect('localhost','Myk','yaseen123','laylo pizza');


 // check connections
 if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
 };

 // write query for all pizzas
 $sql = ' SELECT title, ingrediants, id FROM pizzas';

 //make query & get result
 $result = mysqli_query($conn,$sql);

 // fetch the resulting rows as an array
 // MYSQLI_ASSOC is used to convert the table data in associative array
 $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);


 //free result from memory
 mysqli_free_result($result);

 //close connection
 mysqli_close($conn);

 // print_r is used to show the associative array in output
//  print_r($pizzas);


// ----------Explode function -------------
// explode is used to seprate the sting into sting
// print_r(explode(',',$pizzas[0]['ingrediants']));
?>




<!DOCTYPE html>
<html lang="en">

<?php include('template/header.php'); ?>
<h4 class="center grey-text ">Pizzas!</h4>
<div class=" container">
    <div class="row">
        <?php foreach($pizzas as $pizza): ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach( explode(',', $pizza['ingrediants']) as $ing): ?>
                                <li><?php echo htmlspecialchars($ing) ?></li>
                            
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">more info</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if(count($pizzas) >= 3): ?>
                <p>there are 3 or more pizzas</p>
                <?php else: ?>
                    <p>there are less then 3 pizzas</p>
                <?php endif; ?>
    </div>

</div>

<?php include('template/footer.php'); ?>




</html>