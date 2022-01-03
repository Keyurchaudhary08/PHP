<!-- find type -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>findtype</title>
</head>
<body>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Enter Float number:</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>

    <?php

if(isset($_POST['submit']))
{
    $no = $_POST['number'];

    echo gettype($no);
}

?>

</body>
</html>