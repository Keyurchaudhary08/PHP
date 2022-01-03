<!-- Discount of bill  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<?php

$amount = "";
$discount ="";
?>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Enter Amount: </td>
                <td><input type="text" name="amount" value=""></td>
            </tr>
            <tr>
                <td>Output: </td>
                <td><label for="">
                    <?php  
                        
                        if(isset($_POST['submit']))
                        {
                            $amount = $_POST['amount'];
                            if($amount>=5000)
                            {
                                $discount = $amount*20/100;
                                echo "Amount: ".$amount."<br>Discount 20%"."<br>Discount Rs: -/".$discount."<br>Total: Rs -/".$amount-$discount;
                            }
                            elseif($amount>=2000)
                            {
                                $discount = $amount*10/100;
                                echo "Amount: ".$amount."<br>Discount 10%"."<br>Discount Rs: -/".$discount."<br>Total: Rs -/".$amount-$discount;
                            }
                            elseif($amount>=1000)
                            {
                                $discount = $amount*5/100;
                                echo "Amount: ".$amount."<br>Discount 5%"."<br>Discount Rs: -/".$discount."<br>Total: Rs -/".$amount-$discount;
                            }
                            else
                            {
                                $discount = $amount*0/100;
                                echo "Amount: ".$amount."<br>Discount 0%"."<br>Discount Rs: -/".$discount."<br>Total: Rs -/".$amount-$discount;
                            }
                        }        

                    ?>
                </label></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
</body>
</html>