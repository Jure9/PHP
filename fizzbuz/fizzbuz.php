<?php header('Content-type: text/plain; charset=utf-8');
  


$num=$_POST["test"];

if (is_numeric($num) && $num>0)
   for($i=1; $i <= $num; $i++)
   {
        if($i%3 == 0 && $i%5 == 0)
            echo "fizzbuz ";
    
        else if($i%3 == 0)
            echo "fizz ";
    
        else if($i%5 == 0)
            echo "buz ";
    
        else
            echo $i . " ";
       
        if($i < $num)
           echo ",";
   }

else
    echo 'Positive numbers only!';


?>
