<?php
/* If, switch, match */
$stock=0;
$ordered=3;

if($stock>0){
    $messge="In stock";
} elseif($ordered>0){
    $messge="Coming soon";
} else{
    $messge="Sold out!";
}

$day='Tuesday';

switch($day) {
    case 'Monday':
        $offer='20% off chocollatees';
        break;
    case 'Tuesday':
        $offer='20% off mints';
        break;
    default:
        $offer='3+1 mints';
}

//matck문
$month='Match';

$mth_offer=match($month){
    'january, February' => '20% off mints',
    'March, April'      => '30% off chocollatees ', 
    default             => '10% off sold out',
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>If, switch, match</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <h1> The candy store </h1>
        
        <h2>Chcollate</h2>
        <p><?= $messge; ?></p>

        <h2>Offer on <?=$day; ?></h2>
        <p><?= $offer; ?></p>

       <h2>Offer on <?=$month; ?></h2>
       <p><?= $mth_offer;?></p>
    </body>
</html>


