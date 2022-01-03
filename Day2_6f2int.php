<!-- convert flot to int -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flot_to_int</title>
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

    settype($no,"Integer");
    echo var_dump($no);
}

?>

</body>
</html>