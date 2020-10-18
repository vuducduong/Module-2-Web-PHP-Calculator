<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset{
            width: 300px;
        }
        select {
            width: 157px;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Simple calculator</legend>
        <table>
            <tr>
                <td>Number 1:</td>
                <td><input type="number" name="one"></td>
            </tr>
            <tr>
                <td>Choose</td>
                <td><select name="add">
                        <option value="plus">+</option>
                        <option value="minus">-</option>
                        <option value="multil">x</option>
                        <option value="division">/</option>
                    </select></td>
            </tr>
            <tr>
                <td>Number 2:</td>
                <td><input type="number" name="two"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
<h2>Result:</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_number = $_REQUEST["one"];
    $second_number = $_REQUEST["two"];
    $add = $_POST["add"];
    if ($add === 'plus') {
        echo $result = $first_number + $second_number;
    }
    if ($add === 'minus') {
        echo $result = $first_number - $second_number;
    }
    if ($add === 'multil') {
        echo $result = $first_number * $second_number;
    }
    if ($add === 'division') {
        if ($second_number === '0') {
            echo "Mẫu số không thể bằng 0";
        } else {
            echo $result = $first_number / $second_number;
        }
    }
}
?>


</body>
</html>

