<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
        }
 
        .container {
            padding: 25px;
            margin-top: 8%;
            margin-left: 10%;
            margin-right: 20%;
            border: 1px solid black;
            border-radius: 10px;
            text-align: center;
        }
    </style>
 
    <title>Calculate your Income tax</title>
</head>
<?php
$result = 0;
if (isset($_POST["income"])) {
     $slary=$_POST["income"];
     $slave = 12570;
     if($salary > 100000){
            echo "<h1>hehe</h1>";
         if($salary <= 125140){
             $newValue = $salary - 100000;
             $newValue = $newValue/2;
             $slave = $slave - $newValue;
            }
            elseif($salary > 125140){
                $slave = 0;
            }    
        }
        $subtotal = $slary - $slave;
       if($subtotal < 37700){
        $result = 'Not Tax Applied';
       }
       elseif($subtotal >= 37700 && $subtotal <= 150000){
        $first = 37700;
        $second= $subtotal - $first;
        $totol1= $first * 0.2;
        $totol2= $second * 0.4;
        $result = $totol1 + $totol2;  
     }elseif($subtotal > 150000){
        $first = 37700;
        $first = $first * 0.2;
        $second = $subtotal - $first;
        if($second <= 150000){
            $second = $second * 0.4;
        }
        elseif($second > 150000){
            $third = $second - 150000;
            $second = 150000;
            $second = $second * 0.4;
            $third = $third * 0.45;
        }
        $result = $first + $second + $third;
     }
}
?>
 
<body>
    <h1 style="font-size:60px; text-align: center; font-family: 'Oswald', sans-serif; margin-top: 5%;">Tax Calculator</h1>
    <div class="container"> 
        <form action="" method="post">
            <label for="myText">Insert your amount</label><img src="./outline_euro_symbol_black_24dp.png" alt=""><br>
            <input type="text" id="myText" name="income" placeholder="EURO">
            <button style="background-color: blue; color: white; border-radius: 5px;" onclick="myFunction()">Calculate</button>
        </form>
        <h3 id="here"><?php echo $result; ?></h3>
        <?php
        if (isset($_POST["income"])){
            echo "<h4>Your Total earnings = </h4>" . $salary;
    }
        ?>
    </div>

</body>