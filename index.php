<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .container {
            display: block;
            padding: 25px;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-radius: 10px;
            text-align: center;
        }
    </style>

    <title>Calculate your Income tax</title>
</head>
<?php
$result = 0;
$third = 0;
if (isset($_POST["income"])) {
    $slary = $_POST["income"];
    $slave = 12570;
    if ($slary > 100000) {
        if ($slary < 125140) {
            $newValue = $slary - 100000;
            $newValue = $newValue / 2;
            $slave = $slave - $newValue;
        } elseif ($slary >= 125140) {
            $slave = 0;
        }
    }
    $subtotal = $slary - $slave;
    echo "<br>".$subtotal;
    if ($subtotal < 37700) {
        $result = 'Not Tax Applied';
    } elseif ($subtotal >= 37700 && $subtotal <= 150000) {
        $first = 37700;
        $second = $subtotal - $first;
        $totol1 = $first * 0.2;
        $totol2 = $second * 0.4;
        $result = $totol1 + $totol2;
    } elseif ($subtotal > 150000) {
        $first = 37700;
        $second = $subtotal - $first;
        if ($second <= 150000) {
            $second = $second * 0.4;
        } elseif ($second > 150000) {
            $third = $second - 150000;
            $second = 150000;
            $second = $second * 0.4;
            $third = $third * 0.45;
        }
        $first = $first * 0.2;
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
        <h3 id="here"><?php echo "<br>Your total payable annual tax is = " . $result; ?></h3>
        <h3>
            <?php
            if (isset($_POST["income"])) {
                echo "Your Total earnings = " . $slary;
                if ($subtotal > 37700) {
                    echo "<br>Your Total earnings after tax deduction = " . ($slary - $result);
                }
            }
            ?>
        </h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>