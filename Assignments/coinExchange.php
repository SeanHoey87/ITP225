<?php

    echo "Program Running type 'Quit' the end program\n";
    while(true){
        $userInput = readline("Enter a dollar amount $");
        if($userInput == 'quit'){
            echo "Program Closing...";
            exit();
        }

        try{
            if(!is_numeric($userInput)){
                throw new Exeption('\nInvalid input try again $');
            }
            if($userInput <0){
                throw new Exception('\nInput can not be negative try again');
            }

            $cents = (int) round($userInput * 100);
            $quarters =0;
            $dimes =0;
            $nickels =0;
            $pennies =0;

            if($cents >=25){
                $quarters = (int) ($cents / 25);
                $cents %= 25;
            }
            if($cents >=10){
                $dimes = (int) ($cents / 10);
                $cents %= 10;
            }
            if($cents >=5){
                $nickels = (int) ($cents / 5);
                $cents %= 5;
            }
            if($cents >=1){
                $pennies = $cents;
            }

            echo "Calculating Coin Exchange for $$userInput......";
            echo "\nQuarters: $quarters";
            echo "\nDimes: $dimes";
            echo "\nNickels: $nickels";
            echo "\nPennies: $pennies\n";

        }catch(Exception $e){
            echo $e->getMessage() . '\n';
        }

    }

?>