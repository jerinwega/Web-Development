<!DOCTYPE HTML>
<html>

<head>
    <title></title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=-1">
    <script>
        
        function allNumber() 
        {
            var numbers = /^[0-9]+$/;
            var n = document.forms["userForm"]["inputtxt"].value;
            if (n.match(numbers)) 
            {
                document.getElementById('msg').innerHTML = "Valid Input";
                document.getElementById('msg').style.color = "green";
                document.getElementById('btn').disabled = false;
               
                
                setTimeout(function()
                {
                     document.getElementById('msg').style.visibility = "hidden";    
                },3000);
                return true;
            } else 
            {
                document.getElementById('msg').innerHTML = "Enter only Numbers";
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
        <h1>Number Validation</h1>
        <form action="" name="userForm" autocomplete="off">
            <label>Input</label>
            <input type="text" name="inputtxt" placeholder="Enter Input text" onblur="return allNumber()">
                        <span id="msg"></span>
            <br><br>
            <input type="submit" name="submit" id="btn" disabled="true">
        </form>
    </body>

</html>
