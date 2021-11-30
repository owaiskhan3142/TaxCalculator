<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .container2 {
            display: block;
            padding: 25px;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-radius: 10px;
            text-align: center;
            background-color: lightgrey;
        }

        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            display: flex;
            flex-direction: row;
        }

        li {
            padding: 15px;
        }

        .head button {
            padding: 10px 20px;
            height: 35px;
            background: #AB2316;
            border-radius: 3px;
            text-transform: capitalize;
            transition: linear .3s;
            margin-right: 0px;
            border: 1px solid #AB2316;
            font-style: normal;
            font-weight: 600;
            font-size: 10px;
            line-height: 15px;
            text-align: center;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #FFFFFF;
            margin-left: 10px;
        }

        .banner {
            background-position: top right;
            background-repeat: no-repeat;
            background-size: contain;
            height: 100vh;
        }

        .banner h1 {
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 45px;
            line-height: 123.5%;
            text-transform: capitalize;
            color: #26283E;
            margin-bottom: 30px;
        }

        .head img {
            width: auto;
            height: 60px;

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
            <label for="myText" style="font-size: larger;">Insert your amount £</label><br>
            <input type="text" id="myText" name="income" placeholder="£">
            <button style="background-color: blue; color: white; border-radius: 5px;"">Calculate</button>
        </form>
        <?php
        if (isset($_POST["income"])) {
            echo "<div class='result_heading'>Your Results are as Follows:</div>";
        }
        ?>
        <div class='annul_tx'><?php echo "Your total payable annual tax is = " . $result; ?></div>
        <div class='results'>
            <?php
            if (isset($_POST["income"])) {
                echo "<br>Your Total earnings = " . $slary;
                if ($subtotal > 37700) {
                    echo "<div>Your Total earnings after tax deduction = </div>" . ($slary - $result);
                }
            }
            ?>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>