<!DOCTYPE html>
<html>

<head>
    <script>
        function validateForm() 
        {
            var x = document.forms["userForm"]["fname"].value;
            var y = document.forms["userForm"] ["lname"].value;
            
            if (x == "" || y == "") 
            {
                alert("Name must be filled out");
                return false;
            }
            
             if(x.length <= 2 || y.length <= 2)
                {
                    alert("First and last name should be greaterthan 2 characters");
                    return false;
                }
            
            else if(x == "Ram" && y == "Kumar")
                {
                    alert("Welcome " + (x + y));
                    document.forms["userForm"] ["fname"].value = "";
                    document.forms["userForm"] ["lname"].value = "";
                    return false;
                }
        }
        
        function validateNum()
        {
            var n = document.forms["userForm"]["mobile"].value;
           
            if(n == "")
               {
                   document.getElementById("err_mobile").innerHTML = "Mobile Field should not empty";
                   setTimeout(function()
                        {
                            document.getElementById('err_mobile').style.visibility = "hidden";    
                        },2000);
                   return false;
               }
            
            else if(n.length < 10 || n.length > 10)
                {
                    document.getElementById("err_mobile").innerHTML = "Mobile Number should be 10 digit";
                     document.forms["userForm"]["mobile"].value = "";
                     setTimeout(function()
                        {
                            document.getElementById('err_mobile').style.visibility = "hidden";    
                        },2000);
                return false;
            }
                    return false;
                }
            else
            {
                 document.getElementById("valid_mobile").innerHTML = "Valid Mobile Number"; 
                setTimeout(function()
                        {
                            document.getElementById('valid_mobile').style.visibility = "hidden";    
                        },2000);
                 return false;
            }
        }
        
        function validateEmail()
        {
            var e = document.forms["userForm"]["email"].value;
            
            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e))
                {
                    document.getElementById("valid_email").innerHTML= "Valid E-Mail address";
                    setTimeout(function()
                        {
                            document.getElementById('valid_email').style.visibility = "hidden";    
                        },2000);
                    return false;
                }
            else
            {
                document.getElementById("err_email").innerHTML = "Invalid Email id";
                document.forms["userForm"]["email"].value = "";
                setTimeout(function()
                        {
                            document.getElementById('err_email').style.visibility = "hidden";    
                        },2000);
                return false;
            }
        }

    </script>
   
</head>

<body>

    <form name="userForm" action="prg27.php" onsubmit="return validateForm()" method="post" autocomplete="off">
        <fieldset>
            <legend>Input Form</legend>
            <label>First Name:</label> 
                <input type="text" name="fname" placeholder="Enter firstname">
            <br><br>
            <label>Last Name:</label> 
                <input type="text" name="lname" placeholder="Enter lastname">
            <br><br>
            <label>Mobile:</label> 
                <input type="text" name="mobile" placeholder="Enter mobile number" onblur="return validateNum()">
                <span id="err_mobile" style="color:red;"></span><span id="valid_mobile" style="color:green;"></span>
            <br><br>
            <label>Email id:</label> 
                <input type="text" name="email" placeholder="Enter Email number" onblur="return validateEmail()">
                <span id="err_email" style="color:red;"></span><span id="valid_email" style="color:green;"></span>
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

</body>

</html>
