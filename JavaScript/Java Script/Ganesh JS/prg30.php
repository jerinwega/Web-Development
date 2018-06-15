<!DOCTYPE HTML>
<html>

<head>
    <title></title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=-1">
    <script>
        
        function validatePassword() 
        {
            var chars = /^[A-Za-z0-9*/&%$@]+$/;
            var n = document.forms["userForm"]["inputtxt"].value;
            if (n.match(chars)) 
            {
                document.getElementById('msg').innerHTML = "Valid Password";
                document.getElementById('msg').style.color = "green";
                document.getElementById('btn').disabled = false;
               
                
                setTimeout(function()
                {
                     document.getElementById('msg').style.visibility = "hidden";    
                },3000);
                return true;
            } else 
            {
                document.getElementById('msg').innerHTML = "Password should contain only these ( A-Za-z0-9*/&%$@ ) characters.";
                document.getElementById('msg').style.color = "red";
                
                document.forms["userForm"]["inputtxt"].value = "";
                setTimeout(function()
                {
                     document.getElementById('msg').style.visibility = "hidden";    
                },3000);
                return false;
            }
        }

    </script>
</head>
    <body>
        <h1>Password Validation</h1>
        <form action="" name="userForm" autocomplete="off">
            <label>Enter Password</label>
            <input type="password" name="inputtxt" placeholder="Enter Input text" onblur="return validatePassword()">
                        <span id="msg"></span>
            <br><br>
            <input type="submit" name="submit" id="btn" disabled="true">
        </form>
    </body>

</html>
