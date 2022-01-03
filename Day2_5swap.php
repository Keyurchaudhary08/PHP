<!-- swap no -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swaping_numbers</title>
</head>
<style>

</style>
<body>
    <form action="" method="POST">
        <center>
        <table>
            <tr>
                <td>Enter value 1:</td>
                <td><input type="text" name="val1"></td>
            </tr>
            <tr>
                <td>Enter value 2:</td>
                <td><input type="text" name="val2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SWAP"></td>
                
                <td>
                    <input type="text" name="answer" id="ans" placeholder="Answer will print here" value= "

                    <?php

                    if(isset($_POST['submit']))
                    {
                    $val1 = $_POST['val1'];
                    $val2 = $_POST['val2'];
                    
                    $temp = $val1;
                    $val1 = $val2;
                    $val2 = $temp;
                    
                    echo "$val1$val2";

                    } 

                    ?>"
                >
                </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
