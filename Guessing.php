<?php
//The player can pick the upper bound of the random number that is to be guessed
$maxNum = readline("Enter the maximum number to be generated: ");
//Generate a random number between 0 and the upper bound
$randNum = rand(0, $maxNum);
//Set the number of attempts the player can guess the number
$guessAttempts = 10;
//Value to keep track of if the game is over
$gameOver = false;
//The game loop that repeats while $gameOver is false
while ($gameOver == false) {
    //Get the player's guess of a number
    $guess = readline("Guess a number between 0 and $maxNum: ");
    //Check if the guess is the same as the random number
    if ($guess == $randNum) {
        //Winner text if you've guessed the number
        echo "You guessed the number!\n";
        //Sets the game over value to true
        $gameOver = true;
        //Else block that runs if the guess is incorrect
    } else {
        //Decrement the times the player can guess
        $guessAttempts--;
        //Text that says the guess was incorrect and the number of attempts they have left
        echo "Incorrect guess. You have $guessAttempts attempts left.\n";
        //Check if the player has run out of attempts to guess
        if ($guessAttempts == 0) {
            //Loser text that also displays the correct number
            echo "You've lost'. The correct number was $randNum.\n";
            //Sets the game over value to true
            $gameOver = true;
        }
    }
}
