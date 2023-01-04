<?php

/*
-------------------------------------------
 Functions wrap up reusable pieces of code .
they help you apply the "Do Not Repeat Yourself"
        ** DRY principle. **
-------------------------------------------
functions.php file could contains almost every
function you use during your coding process .

*/

// fancy way to display your array (Type, Length, Key ,Value ) ;
function throwData ($data){
    echo "<pre>" ;
        var_dump($data) ;
    echo "</pre>" ;
}