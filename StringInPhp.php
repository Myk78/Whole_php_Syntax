<?php 

$stringOne = 'my email is ';

$stringtwo = "xyz@gmal134";
//contcatenate " . "

// echo $stringOne.$stringtwo;

$name = 'Yaseen';

// echo "hi $stringtwo";

// the differ of single cot sting is you contcatenate 
// but in double cot you write in direct in this

// Escaping 
// echo "how i can help you"Ali""; // its show bcz before "Ali" the quotion is closed so we backslash '\'

// echo "how i can help you\"Ali\""; 

//  echo 'how i can help you"Ali"';






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section >
    <h3 class="text-center fs-5 fst-italic">Concatenate and single quote and double qoute difference</h3>
    <div class="text-start mb-3  "> the differ of single cot sting is you <b>contcatenate</b> the variable with print statement <p class="d-block text-uppercase fw-bold
    "><?php echo 'My name is ' . $name ?></p></div>
    <div>
    but in double cot you write direct in statement it's <b>automatically replace the variable</b> in their value
    <p class="d-block fw-bold"><?php echo "My name is $name" ?></p>
    </div>
    </section>
    
    <!-- // Escaping -->
    <section>
    <h3 class="text-center fs-5 fst-italic"> Escaping</h3>
        <div>
            If you used double quote and also write something in double quote inside of double quote statement so directly <b>it's show error e.g </b>
            <p class="d-block">// echo "how i can help you"Ali""; </p>
            the Correct Syntax is 
            <p class="fw-bold"> echo "how i can help you\"Ali\""</p>
        </div>
        <div>
            If you used single quote and also write something in double quote inside of single quote statement  <b>so it's work e.g </b>
            <p class="d-block">// echo "how i can help you"Ali""; </p>
            the Correct Syntax is 
            <p class="fw-bold"> echo 'how i can help you"Ali"'</p>
        </div>
    </section>

    <!-- define function -->
    <section>
    <h3 class="text-center fs-5 fst-italic"> define Function</h3>
        <div>
            <p class="d-block"><b>echo $name[1]</b> is used for find index value</p>
            <p class="d-block"><b>echo strlen($name)</b> is used for find length of variable</p>
            <p class="d-block"><b>echo strtouppercase()</b> is used for to write the value in upper case</p>
            <p class="d-block"><b>echo strtouppercase()</b> is used for find index value</p>
            <p class="d-block"><b>echo str_replace('e','a',$name)</b> is used to replace the value with other first para is replace variable second para is with that and third para is in this </p>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>