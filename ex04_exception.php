<!-- <?php
    $num1 = 20;
    $num2 = 4;

    $result = $num1 / $num2; 
    
    echo $result;
?> -->




<?php
    $num1 = 20;
    $num2 = 0;



    try{
        if ($num2==0) {
          throw  new Exception ("ห้ามใช้ 0 เป็นตัวหารนะจ๊ะ");
        }
        $result = $num1 / $num2; 
        echo $result;


    }catch(Exception $e){
        echo $e->getMessage();
    }

?>