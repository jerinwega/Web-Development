<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JavaScript form validation - checking IP address</title>
    <style>
        li {
            list-style-type: none;
            font-size: 16pt;
        }

        .mail {
            margin: auto;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 400px;
            background: #D8F1F8;
            border: 1px soild silver;
        }

        .mail h2 {
            margin-left: 38px;
        }

        input {
            font-size: 20pt;
        }

        input:focus,
        textarea:focus {
            background-color: lightyellow;
        }

        input submit {
            font-size: 12pt;
        }

        .rq {
            color: #FF0000;
            font-size: 10pt;
        }
        #msg_status{
            font-size: 12px;
        }
        

    </style>
    <script>
        function validateIp() 
        {
            var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
            
            var inputText = document.forms["form1"]["text1"].value;
            
            if (inputText.match(ipformat)) 
            {
                document.getElementById("msg_status").innerHTML = "Valid Ip Address";
                 document.getElementById("msg_status").style.color = "green";
                 
                setTimeout(function()
                {
                    document.getElementById("msg_status").style.visibility = "hidden";
                        document.forms["form1"]["submit"].disabled =false; 
                         document.forms["form1"]["submit"].style.color ="green";  
                },2000);
                return true;
            } 
                else 
            {
               document.getElementById("msg_status").innerHTML = "You have entered an invalid IP address!";
               document.getElementById("msg_status").style.color = "red";
                document.form1.text1.focus();
                 setTimeout(function()
                {
                    document.getElementById("msg_status").style.visibility = "hidden";
                      document.forms["form1"]["text1"].value = "";
                },2000);
                    return false;
            }
        }

    </script>
</head>

<body>
    <div class="mail">
        <h2>Input an IP address and Submit</h2>
        <form name="form1" action="#" autocomplete="off">
            <ul>
                <li><input type='text' name='text1' onblur="return validateIp()"/></li>
                <li>&nbsp;<span id="msg_status"></span></li>
                <li class="submit">
            <input type="submit" name="submit" value="Submit" disabled="true"></li>
                <li>&nbsp;</li>
            </ul>
        </form>
    </div>

</body>

</html>
