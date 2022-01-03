<!-- simpleCalculator -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple_calculator</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</head>
<style>
table
{
    border: 4px solid;
    padding: 10px;
}
</style>
<?php
$ans ="";
$no1 ="";
$no2 ="";
$ope ="Select OPe";

if(isset($_POST['submit']))
{
    if(isset($_POST['no1']) && isset($_POST['no2']))
    {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $ope = $_POST['cal'];

        switch($ope)
        {
            case'+':
                $ans = $no1 + $no2;
                break;

            case'-':
                $ans = $no1 - $no2;
                break;

            case'*':
                $ans = $no1 * $no2;
                break;

            case'/':
                $ans = $no1 / $no2;
                break;
        }
    }
}

?>
<body>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <td>Enter number 1:</td>
                    <td><input type="text" name="no1" value="<?php echo$no1; ?>"></td>
                </tr>
                <tr>
                    <td>Enter number 2:</td>
                    <td><input type="text" name="no2" value="<?php echo$no2; ?>"></td>
                </tr>
                <tr>
                    <td>Select OPeration:</td>
                    <td>
                        <select name="cal" id="cal">
                        <option value="<?php echo $ope ?>"><?php echo $ope ?></option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>OUTPUT:</td>
                    <td><input type="text" name="output" value="<?php echo $ans; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SUBMIT" name="submit"></td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>