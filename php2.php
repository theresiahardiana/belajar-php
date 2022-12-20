<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mobil</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Merek Mobil</label>
        <input type="text" name="mobil">
        <label>Total</label>
        <input type="text" name="total">
        <input type="submit" name="submit">
    </form>

    <?php
    if (!empty($_POST['submit'])) {

        switch ($_POST['mobil']) {
            case "Avanza";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            case "Lamborghini";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            case "Panther";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            default:
                $pesan = "Mobilmu ga terkenal";
        }

        for ($i = 0; $i < $_POST['total']; $i++) {
            $n = $i + 1;
            echo $pesan . " total : $n mobil." . "<br>";
        }
    } else {
        echo "Kamu belum punya mobil ya?";
    }
    ?>
</body>

</html>