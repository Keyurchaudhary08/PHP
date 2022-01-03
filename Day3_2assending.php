<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day3_2</title>
</head>

<?php

if(isset($_POST['submit']))
{
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $no3 = $_POST['no3'];

    if($no1<$no2 && $no1<$no3)
    {
        if($no2<$no3)
        {
            echo $no1.$no2.$no3;
        }
        else
        {
            echo $no1.$no3.$no2;
        }
    }

    if($no2<$no1 && $no2<$no3)
    {
        if($no3<$no1)
        {
            echo $no2.$no3.$no1;
        }
        else
        {
            echo $no2.$no1.$no3;
        }
    }

    if($no3<$no1 && $no3<$no2)
    {
        if($no2<$no1)
        {
            echo $no3.$no2.$no1;
        }
        else
        {
            echo $no3.$no1.$no2;
        }
    }

    


}
?>

<body>
    <form action="" method="POST">
    <center>
    <table>
        <tr>
            <td>Enter no1:</td>
            <td><input type="text" name="no1"></td>
        </tr>
        <tr>
            <td>Enter no2:</td>
            <td><input type="text" name="no2"></td>
        </tr>
        <tr>
            <td>Enter no3</td>
            <td><input type="text" name="no3"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="SUBMIT"></td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>
