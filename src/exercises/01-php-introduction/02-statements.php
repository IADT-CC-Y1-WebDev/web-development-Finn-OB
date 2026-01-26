<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/02-statements.php">View Example &rarr;</a>
    </div>

    <h1>Statements Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Age Classifier</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for age. Use if/else statements to classify and 
        display the age group: "Child" (0-12), "Teenager" (13-19), "Adult" 
        (20-64), or "Senior" (65+).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $age = rand(0, 100);
        echo "you are $age years old" . "<br>";

        if ($age <= 12 ){
            echo "you are a child";
        }

        elseif ($age <= 19){
            echo "you are a teenager";
        }

        elseif ($age <=64){
            echo "you are an adult";
        }

        elseif ($age > 64){
            echo "tou are a senior";
        }

        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Day of the Week</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for the day of the week (use a number 1-7). Use 
        a switch statement to display whether it's a "Weekday" or "Weekend", 
        and the day name.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $day = rand (1,7);

        $days = [
            1=> "Mon",
            2=> "Tues",
            3=> "Weds",
            4=> "Thurs",
            5=> "Fri",
            6=> "Sat",
            7=> "Sun",
        ];
        echo "today is $days[$day] " . "<br>";
        switch(true){
            case($day <= 5):
            echo $days[$day] . "- weekday";
            break;
            case($day<=7):
            echo  $days[$day] ."- weekend";
            break;
        }
        
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Multiplication Table</h2>
    <p>
        <strong>Task:</strong> 
        Use a for loop to create a multiplication table for a number of your 
        choice (1 through 10). Display each line in the format "X × Y = Z".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $number = rand (1,10);

        for($i =1; $i <= 10; $i++){
            $result = $number * $i;
            echo"$number x $i = $result<br>";
        }

        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Countdown Timer</h2>
    <p>
        <strong>Task:</strong> 
        Create a countdown from 10 to 0 using a while loop. Display each number, 
        and when you reach 0, display "Blast off!"
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $seconds = (10 - 0);
            echo " t-minus $seconds seconds. ";
            while ($seconds > 0) {
            echo " $seconds left till take off ";
        $seconds = $seconds - 1;
           
         }
         echo " BLAST OFF!! ";
        ?>
    </div>

</body>
</html>
