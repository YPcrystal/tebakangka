<?php

// include a separate for utility function
include 'functions.php';

//display a welcom massage
echo "welcom to the 'guess the Number' game!\n";
echo "i have picked a random number between 1 and 100\n";
echo "can you guess it?\n";

// generate a random member between 1 and 100
$randomNumber = generaterandomNumber(1,100);
// initialize variables
$attempts = 0;
$guessedCorrectly = false;

// main game loop
while(!$guessedCorrectly) {
    // get user input
    echo "Enter your guess : ";
    $input = trim(fgets(STDIN)); //using super global 'STDIN' for CLI input

    // validate input
    if (!is_Numeric($input)) {
        echo "please enter a valid number.\n";
        continue;
    }

    $guess = (int) $input;
    $attempts++;

    // check the guess 
    if ($guess === $randomNumber) {
        $guessedCorrectly = true;
        echo "congratulation You guessed number in $attemps attemps.\n";
    } elseif ($guess > $randomNumber) {
        echo "Too High! Try Again.\n";
    } else {
        echo "Too Low try Again.\n";
    }
}

// save game stats
saveGameStats($attempts);

// Display stats 
echo "Thank You for Playing! Here are your Stats :\n";
displayGameStats();