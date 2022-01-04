<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop/do while</title>
</head>
<body>
</body>
<center>
    <h1>1 TO 100</h1>

<style>
table,td {
  border: 1px solid blueviolet;
  width: 500px;
  height: 30px;
}
</style> 

<table>
<?php
    for ($i=1; $i <= 100; $i++){
        if($i%10 ==1) {
            echo "<tr>";
        }
        echo "<td>" . $i . "</td>" ;
    }
?>
</table>
</center>

</body>
</html>


