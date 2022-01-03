<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2_3</title>
</head>
<body>
<script>
    var msg= "Hi!! How are you ";
    var fname,lname,mname;
    function myfun()
    {
        fname = document.getElementById('fname').value;
        lname = document.getElementById('lname').value;
        mname = document.getElementById('mname').value;

        msg +=`${fname}  ${lname}  ${mname}`;
        alert(msg);
        document.getElementById('data').innerHTML = msg;

        return false;
    }
</script> 
    <form action="" onsubmit="return  myfun()">
        <table border="2px">
            <tr>
                <td>Fname</td>
                <td><input type="text" id="fname"></td>
            </tr>
            <tr>
                <td>Lname</td>
                <td><input type="text" id="lname"></td>
            </tr>
            <tr>
                <td>Mname</td>
                <td><input type="text" id="mname"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT" ></td>
            </tr>
        </table>
    </form>
</body>

<div id="data">

</div>
</html>