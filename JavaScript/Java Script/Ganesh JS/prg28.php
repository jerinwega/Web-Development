<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <script>
        function allLetter() 
        {
            var letters = /^[A-Za-z]+$/;
            var n = document.forms["userForm"]["inputtxt"].value;
            
            if (n.match(letters)) 
            {
                return true;
            } else 
            {
                document.getElementById('err').innerHTML = "Enter only letters";
                document.forms["userForm"]["inputtxt"].value = "";
                setTimeout(function()
                {
                     document.getElementById('err').style.visibility = "hidden";    
                },3000);
                return false;
            }
        }

    </script>
</head>
    <body>
        <h1>Letter Validation</h1>
        <form action="" name="userForm">
            <label>Input</label>
            <input type="text" name="inputtxt" placeholder="Enter Input text" onblur="return allLetter()">
                        <span id="err" style="color:red;"></span>
            <br><br>
            <input type="submit" name="submit">
        </form>
    </body>

</html>
