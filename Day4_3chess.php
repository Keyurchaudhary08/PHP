<!-- making chess bord using for loop -->

<!DOCTYPE html>
<html>

<head>
      <title></title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
      <center>
            <h2>Chess Board</h2>
            <table width="600px" cellspacing="0px" cellpadding="0px" border="1px">

                  <?php
                  for ($i = 1; $i <= 8; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= 8; $j++) {
                              $total = $i + $j;
                              if ($total % 2 == 0) {
                                    echo "<td height=70px width=60px bgcolor=#FFFFFF></td>";
                              } else {
                                    echo "<td height=70px width=60px bgcolor=#000000></td>";
                              }
                        }
                        echo "</tr>";
                  }
                  ?>
            </table>
      </center>

</body>

</html>




<!-- <table width="400px" border="1px" cellspacing="0px">
      <h1>Chess</h1>
        <?php
            $i = 0;
            $j = 0;

            while ($j < 8) {
                  $row = 0;
                  echo "<tr>";
                  $i = $j;

                  while ($row < 8) {
                        if ($i % 2 == 0) {
                              echo
                              "<td height=40px width=20px bgcolor=black></td>";
                              $i++;
                        } else {
                              echo
                              "<td height=40px width=20px bgcolor=white></td>";
                              $i++;
                        }
                        $row++;
                  }
                  echo "</tr>";
                  $j++;
            }
            ?>
    </table> -->