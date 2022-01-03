<!-- Grade making switch cases -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<?php

$c = "";
$foc = "";
$dm = "";
$adbms = "";
$php = "";

?>
<body>
    <form action="" method="POST">
        <center>
        <table>
            <tr>
                <td>Enter marks of C:</td>
                <td><input type="text" name="c" value="<?php echo $c; ?>"></td>
            </tr>
            <tr>
                <td>Enter marks of FOC:</td>
                <td><input type="text" name="foc" value="<?php echo $foc; ?>"></td>
            </tr>
            <tr>
                <td>Enter marks of DM:</td>
                <td><input type="text" name="dm" value="<?php echo $dm; ?>"></td>
            </tr>
            <tr>
                <td>Enter marks of ADBMS:</td>
                <td><input type="text" name="adbms" value="<?php echo $adbms; ?>"></td>
            </tr>
            <tr>
                <td>Enter marks of PHP:</td>
                <td><input type="text" name="php" value="<?php echo $php; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT" name="submit"></td>
            </tr>
            <tr>
                <td>OutPut:</td>
                <td><label for="">
<?php

if(isset($_POST['submit']))
{
    $c = $_POST['c'];
    $foc = $_POST['foc'];
    $dm = $_POST['dm'];
    $adbms = $_POST['adbms'];
    $php = $_POST['php'];

    $per = (($c + $foc + $dm + $adbms + $php)*100)/500;

    if($per>=60)
    {
        echo $per."%"." :First Division";
    }
    elseif($per>=45 && $per<60)
    {
        echo $per."%"." :Second Division";
    }
    elseif($per>=33 && $per<45)
    {
        echo $per."%"." :Third Division";
    }
    else
    {
        echo $per."%"." :Student is fail";
    }
}

?>
                </label></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
