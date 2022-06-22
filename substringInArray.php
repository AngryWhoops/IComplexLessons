<?php
    //Исходный массив со строками 
    $inputArrayStrings = ["white", "red", "blue", "yellow", "green", "black", "purple"];
    $A_array = [];
    $B_array = [];
    //Цвет, который ищем
    $missingColour = "green";
    //В этой функции пробегаемся по массиву только с
    //одной стороны и последовательно. Но можно 
    //разделить массив пополам и пробежаться с 
    //двух сторон. Если число элементов нечётное,
    //то учесть это округлив до меньшего.
    
    function FindSubstr($arr, $searchStr){
        $A_array = [];
        $B_array = [];
        foreach($arr as $element){
            if($element == $searchStr){
                $A_array[] = $element;
            } else {
                $B_array[] = $element;
            }
        }
        print_r($A_array);
        echo "<br>";
        print_r($B_array);
    }
    
    FindSubstr($inputArrayStrings, $missingColour);
?>