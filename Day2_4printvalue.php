<!-- print value with for loops -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit and print value</title>
<style>

table
{
    border: 5px solid black;
    padding: 10px;
}

</style>
</head>
<body>
    <form action="" method="POST">
        <center>
        <table>
            <tr>
                <td>First name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="Cricket">Cricket
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>PinCode:</td>
                <td><input type="text" name="pin"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="SUBMIT">
                        &nbsp;&nbsp;
                    <input type="reset" value="RESET">
                </td>
            </tr>
        </table>
        </center>
        
    </form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $con = $_POST['con'];
    $hobby = $_POST['hobby'];

    echo $fname."<br>".$lname."<br>".$dob."<br>".$address."<br>".$pin."<br>".$con." ";
    
    for($i = 0;$i<sizeof($hobby);$i++)
    {
        echo $hobby[$i]."<br>";
    }
}

?>