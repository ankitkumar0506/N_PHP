<?php

// $n = 12;

// Conditional Statement: 

// if  ==> for 1 condition 

// if(condition) 
// {
//     ..code;
// }

// if else  ==> for 2 conditions

// // () ? t : f

// if(condition) 
// {
//     ..code;
// }

// else 
// {
//     ..code;
// }

// if else if else  ==> for more than 2 conditions

// if() 
// {

// }

// else if() 
// {

// }

// else 

// {

// }

// nested    ==> for more than 2 conditions

// if()
// {
//     if()
//     {
//         if()
//         {
//             if()
//             {

//             }
//             else{
//                 if()
//                 {
                    
//                 }
//             }
//         }
//     }
// }


// switch : when we have multiple choices and we need output as per entered choice

// $ch = 20
// switch($ch)
// {
//     case 1: ..code;
//     break;

//     case 2: ..code;
//     break;

//     case 3: ..code;
//     break;


//     case 4: ..code;
//     break;

//     case 5: ..code;
//     break;

//     default: ..code
// }
$x=0;

if(true) 
{
    echo "inside if"."<br>";
}

if($x) 
{
    echo "inside if"."<br>";
}

echo "Outside if...!";


 $ch = "+";
switch($ch)
{
    case 1: echo "case 1<br>";
    break;

    case "+":  echo "case 2<br>";
    break;

    case 3:  echo "case 3<br>";
    break;


    case 4:  echo "case 4<br>";
    break;

    case 5:  echo "case 5<br>";
    break;

    default:  echo "invlid case 1<br>";
}

?>