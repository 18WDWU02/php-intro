<?php



// This is a comment
# This is another single line comment

/*
    this is a multi line comment
    can use as many lines as we want
*/

/*
    Varibales in PHP are very similar to JS. One of the main differences is that they don't need to be declared at first.
    With variables, there are some rules. The variable name can't be a number and and they have to either start with a
    letter or a underscore.
*/
$hello = "Hello World";
$_hello = "hello with underscore";

$number = 10;
$boolean = false;
/*
    Things like arrays act the same way as in js but are just worded differently.
*/
$array = array(10,20,30,40);


/*
    Echo and print are two ways which you can view variables onto the screen.
    They also both have two different ways of writing them.
*/
// echo "Hello";
// echo("Hello with Brackets");
// echo $_hello;
// print("This is using Print");
// print "this is from print with no brackets";

/*
    var_dump is a method to output a variable as a whole and also see the type.
    This is a development tool like console.log so you dont want to use this one in production
*/
// var_dump("This is from a Var Dump");
// var_dump($array);

/*
    Die is like the previous methods, but if it gets triggered then nothing after it will run
*/
// die("this is from a die");

$list = array("apples", "bannanas", "pears");

?>


<!--
    PHP can be interlaced with HTML. Bellow there are multiple ways in which you can add php into your html.
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1 class="heading_1 <?php echo "classname"; ?>">This is running from a PHP file</h1>
        <?php echo "<h2>This is from an echo</h2>"; ?>
        <h2><?php
        $newVar = "newvar";
        echo $newVar; ?>
        </h2>
        <h3><?= "this is from the shortcode"; ?></h3>



        <!--
            Functions like if, else, for, foreach can also be used in php, they are just written slightly diferently.
            Bellow there are two ways you can do a foreach loop as well as an if else statement
        -->
        <ul>
            <?php
                foreach ($list as $listItem) {
                    echo "<li>".$listItem."</li>";
                }
             ?>
        </ul>
        <ul>
            <?php foreach($list as $listItem): ?>
                <li><?= $listItem; ?></li>
            <?php endforeach; ?>
        </ul>


        <?php
            $scores = array(0,58,15,89,100,45,54,80,0 ,0);
         ?>
         <h2>The total number of people are <?= count($scores); ?></h2>
         <ul>
             <?php foreach($scores as $score): ?>
                 <li>This person got <?= $score; ?></li>
             <?php endforeach; ?>
         </ul>
         <?php
            $totalScore = 0;
            foreach($scores as $score){
                $totalScore += $score;
            }
            $averageScore = $totalScore / count($scores);
          ?>
          <h3>The average score is <?= $averageScore; ?></h3>
          <?php if($averageScore > 50): ?>
              <p>The class has passed</p>
          <?php else: ?>
              <p>The class has failed</p>
          <?php endif; ?>

          <?php
            if($averageScore > 50){
                echo "<p>The class has passed</p>";
            } else {
                echo "<p>The class has failed</p>";
            }
           ?>










    </body>
</html>
