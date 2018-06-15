<!DOCTYPE HTML>
<html>
    <head>
        <title>JS</title>
    </head>
    <body>
        <script>
            function al()
            {
                window.alert('Hi this is an alert');
            }
            
            function con()
            {
                var x = window.confirm("Are you sure you want to close the window?");
                    
                    if(x == true)
                        {
                            window.alert("Object has deleted successfully");
                        }
                    else
                        {
                            window.alert("Try Again..");
                        }
            }
        </script>
        
        <button onclick="al();">Alert</button>
        <br>
        <button onclick="con()">Confirm</button>
    </body>
</html>