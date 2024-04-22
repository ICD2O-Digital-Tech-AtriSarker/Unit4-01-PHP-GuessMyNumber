<b>
  <?php
    // Code
    if(isset($_POST['guess'])) 
    {

      // Random number
      $correctGuess = rand(1,6);
      
      // Get the guessed number
      $guessedNumber = intval($_POST['guess']);

      // If statement to check if guessed number matches random number
      if ($guessedNumber == $correctGuess) {
        // Congratulations
        echo "The correct Number was {$correctGuess}, congratulations on guessing correctly!";
      }
      else {
        // Better Luck next time
        echo "The correct Number was {$correctGuess}, you guessed {$guessedNumber}! Better Luck next time!";
      }

    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 