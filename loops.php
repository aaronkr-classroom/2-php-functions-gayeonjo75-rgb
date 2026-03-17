
<!--loops.php-->
<?php
//WHILE(DO...WHILE)
$counter=10;
$packs=5;
$price=1.99;


$products=[
    'Toffee' =>2.99,
    'Mints'  =>1.99,
    'Fudge'  =>3.49,
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>while, for, foreach</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        
        <h1> The candy store </h1>
        
        <h2>Chcollate</h2>
        <ol>
        <?php
        do{
            echo'<li>';
            echo "$counter packs cost |$($price*$counter)" ;
            echo 'packs cost $';
            echo $price ^$counter;
            echo'</li>';
            $counter++;

        } while ($counter <=$packs)
        ?>
        </ol>

         <h2>mints</h2>
        <ul>
        <?php
        for ($i=1; $i <=100; $i=$i+10){
            echo'<li>';
            echo "$i packs codt $" ;
            echo $price *$i;
            echo'</li>';
          

        }
        ?>
        </ul>

        <h2>$products</h2> 
        <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item=>$price) { ?>
       <tr>
        <td><?=$item; ?></td>
        <td><?=$price; ?></td>
      </tr>
      <?php } ?>
    </table>
 </body>
</html>
