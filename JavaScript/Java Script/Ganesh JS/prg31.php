<!DOCTYPE HTML>
<html>
    <head>
        <title>Limit the length</title>
        <script>
            function validateNumLim()
            {
                var num = document.forms["numForm"]["input_num"].value;
                
                if(num.length < 10 || num.length > 10)
                    {
                        document.getElementById("status_msg").innerHTML = "Mobile Number should be 10-digit";
                        document.getElementById("status_msg").style.color = "#ff2200";
                        document.getElementById("status_msg").style.visibility = "visible";
                        setTimeout(function()
                                  {
                            document.getElementById("status_msg").style.visibility = "hidden";
                             document.forms["numForm"]["input_num"].value = "";
                        },2000);
                        
                    }
                else 
                {
                     document.getElementById("status_msg").innerHTML = "Valid Mobile Number";
                        document.getElementById("status_msg").style.color = "green";
                        document.getElementById("status_msg").style.visibility = "visible";
                        setTimeout(function()
                                  {
                            document.getElementById("status_msg").style.visibility = "hidden";
                            document.forms["numForm"]["submit"].disabled = false;
                        },2000);
                }
            }
        </script>
    </head>
    <body>
        <h1>Mobile Number Validation</h1>
        <form name="numForm">
            <label>Enter Number</label>
            <input type="number" name="input_num" placeholder="Enter Number" onblur="return validateNumLim()">
            <span id="status_msg"></span>
            <br><br>
            <input type="submit" name="submit" value="submit" disabled="true">
        </form>
    </body>
</html>