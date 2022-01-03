<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day1_informationpage</title>

<style>
body{
    text-align: center;
}
table{
    border: 2px solid red;
}
</style>
</head>

<script>
    var name;
    var dob;
    var hobby,cricket;
    var favcolor;
    var email;
    var pass;
    var rpass;

    function onsub()
    {
        // Name validation--------------------------------->
        name = document.getElementById('name').value;
        if(name.length<=0)
        {
            alert("Please enter your name");
            return false;
        }
        else
        {
            var valid = /^[A-z a-z]+$/;
            if(name.match(valid)==null)
            {
                alert("Please enter valid name");
                return false;
            }
        }

        // Dob validation------------------------------------>
        dob = document.getElementById('dob').value;
        if(dob.length<=0)
        {
            alert("Please select dob");
            return false;
        }

        // Gender validation--------------------------------->
        
        // hobby validation---------------------------------->

        // favcolor validation-------------------------------->

        // Email validation----------------------------------->
        email = document.getElementById('email').value;
        if(email.length<=0)
        {
            alert("Please enter email");
            return false;
        }
        else
        {
            var valid = /[A-za-z0-9]+@[a-z]+\.+[a-z]{2,3}/;
            if(email.match(valid)==null)
            {
                alert("Please enter valid email");
                return false;
            }

        }

        // Passowrd validation-------------------------------->
        pass = document.getElementById('pass').value;
        rpass = document.getElementById('rpass').value;
        if(pass.length<=0 || rpass.length<=0)
        {
            alert("Please enter password");
            return false;
        }
        else
        { 
            if(pass != rpass)
            {
                alert("Password not match");
                return false;
            }
        }
        return true;
    }

    function validate()
    {
        if(onsub())
        {
            alert("Form submit successfuly");
            document.getElementById('nm').innerHTML = name;
            
            document.getElementById('db').innerHTML = dob;
            
            gen = document.getElementById('gen').value;
            document.getElementById('g').innerHTML = gen;
            
            cricket = document.getElementById('cricket').value;
            document.getElementById('k').innerHTML = cricket;
            football = document.getElementById('football').value;
            document.getElementById('f').innerHTML = football;

            favcolor = document.getElementById('color').value;
            document.getElementById('c').innerHTML = favcolor;

            document.getElementById('e').value;
    
            return false;
        }
        else id=""
        {
            alert("from not submit");
        }
    }
</script>

<body>
    <center>
    <form action=""  method="">
        <h1>Personal Information Page</h1>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" id="name"></td>
            </tr>
            <tr>
                <td>Dob:</td>
                <td><input type="date" id="dob"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                   <input type="radio" name="gen" id="gen" value="Male">Male
                   <input type="radio" name="gen" id="gen" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" id="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="pass"></td>
            </tr>
            <tr>
                <td>Re-Password:</td>
                <td><input type="password" id="rpass"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT" onclick="return validate()"></td>
            </tr>
        </table>
    </form>
    </center>

<div>
<h2 id="nm"></h2>
<h2 id="db"></h2>
<h2 id="g"></h2>
<h2 id="k"></h2>
<h2 id="f"></h2>
<h2 id="c"></h2>
<h2 id="e"></h2>
</div>    
</body>
</html>

