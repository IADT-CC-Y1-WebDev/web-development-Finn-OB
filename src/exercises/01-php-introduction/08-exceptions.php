<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/08-exceptions.php">View Example &rarr;</a>
    </div>

    <h1>Exceptions Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Basic Exception Handling</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>calculateSquareRoot($number)</code> that throws an
        exception if the number is negative (you cannot take the square root of a negative number).
        If the number is valid, return its square root using <code>sqrt()</code>.
        Test it with values 16, 25, and -9, catching any exceptions.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function calculateSquareRoot($number){
            if ($number < 0){
                throw new Exception(" you cannot take the square root of a negative number");
            }
            return sqrt($number);
        }
 
        try {
            $test1 = calculateSquareRoot(16);
            echo "The square root of 16 is: " . $test1 . "<br>" . "<br>";
 
            $test2 = calculateSquareRoot(25);
            echo "The square root of 25 is: " . $test2 . "<br>" . "<br>";
 
            $test3 = calculateSquareRoot(-9);
           
        }
       
        catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Validating User Input</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>validateEmail($email)</code> that checks if an email
        address contains an "@" symbol. If it doesn't, throw an exception with the message
        "Invalid email: missing @ symbol". Test it with "user@example.com", "invalid-email",
        and "test@test.ie".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function validateEmail($email){
            $result = str_contains($email, "@");
 
        try{
             if ($result == false){
                throw new Exception("Email is invalid");
            }
 
            echo "The email is valid". "<br>";
        }
 
        catch (Exception $e){
            echo "Error: " . $e->getMessage() . "<br>";
        }
    }
 
    validateEmail("user@example.com");
    validateEmail("invalid-email") ;
    validateEmail("test@test.ie");
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Using Finally</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>processFile($filename)</code> that throws an exception
        if the filename is empty. Use a try/catch/finally block where the finally block
        always prints "Processing complete". Test with both a valid filename and an empty string.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
          function processFile($filename){
           
 
            try{
                if (empty($filename)){
                    throw new Exception("File name invalid");
                }
 
                echo "File name is valid: $filename" . "<br>";
            }
 
            catch (Exception $e){
                echo "Error: " . $e->getMessage() . "<br>";
            }
            finally{
                echo "Processing complete<br><br>"
            }
        }
 
        processFile("Finn.txt");
        processFile(" ");
        ?>
    </div>

</body>
</html>
