<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to php</title>
</head>
<body>
<?php 
    // print("Hello world, welcome to php <br> <br>"); 
    // echo ("Its pleasure having you");
    // $x = 50;
    // $y = 10;

    // function myTest() {
    //     global $x, $y;
    //     $y = $x + $y;
    // }
    // myTest();
    // echo  $y;
    

// $date = date("h:i:sA");
// $date2 = idate("H");
//     switch ($date2){
//         case (idate("H")<=11);
//             echo $date."<br> Good Morning";
//             break;

//         case (idate("H")>=11);
//             echo $date." <br> Good Afternoon";
//             break;

//         case (idate("H")>=6);
//             echo $date."<br> Good Evening";
//             break;

//         default:
//             echo "The Time is" . $date("h:i:sa");
// }

// date_default_timezone_set("Africa/Lagos");
//     switch(date_default_timezone_set("Africa/Lagos")){
//         case(date("H:i:sA") <= 11);
//             echo date("H:i:s A"). "<br> Good Morning Boss";
//             break;

//         case(date("H:i:sA") <= 16  );
//             echo date("H:i:s A"). "<br> Good Afternoon Boss";
//             break;

//         case(date("H:i:sA") > 16 );
//             echo date("H:i:s A"). "<br> Good Evening Boss";
//             break;

//         default:
//             echo "The time is not responding, please set a 24hrs time on your system";
//     }
    
// function givenValue($value1, $value2, $value3){
//     $sumValue = $value1 / $value2  * $value3;
//     return $sumValue;
// }
// echo(givenValue(1000,100,30));


// another pattern but same answer
// function givenValue(){
//     $sumValue = 1000 / 100 * 30;
//     return $sumValue;
// }
// echo(givenValue());


function givenValue($myVal){
    $value1 = 1000;
    $value2 = 30;
    $addBothValues = $value1 * $value2;
    $calculateValue = $addBothValues / $myVal;
    return $calculateValue;
}
echo(givenValue(100));
?>

</body>
</html>