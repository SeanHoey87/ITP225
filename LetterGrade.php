<?php
while(true){
    $scoreInput = readline("Input score (0-100 | 'exit' to end program):");
    $letterGrade = '';
    $currentDate = date("Y-m-d");

    if($scoreInput == 'exit'){
        echo "Program Closing....";
        exit();
    }

    try{
        if(!is_numeric($scoreInput)){
            throw new Exception("\nInvalid input. enter a new score. | 'exit' to end program");
        }

        if($scoreInput <0 || $scoreInput >100){
            throw new Exception("\nScore out of Range!");
        }

        if($scoreInput >= 90){
            $letterGrade = 'A';
        }
        else if($scoreInput >=80){
            $letterGrade = 'B';
        }
        else if($scoreInput >=70){
            $letterGrade = 'C';
        }
        else if($scoreInput >=60){
            $letterGrade = 'D';
        }
        else{
            $letterGrade = 'F';
        }

        echo ("This students score of $scoreInput is a.... $letterGrade. Todays date is: $currentDate\n");
    }
    catch(Exception $e){
        echo $e->getMessage() . "\n";
    }
}

?>