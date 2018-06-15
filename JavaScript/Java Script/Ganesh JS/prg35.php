<!DOCTYPE HTML>
<html>
    <head>
        <title>Delete Cookie</title>
        <script>
            function deleteCookie()
            {
                document.cookie = "mycookie='',Expires=Fri,15Dec2017:01:58:00 PM";
                document.write("Cookie expired time set successfully");
                return true;
            }
            
            /*document.cookie = "name='value',Expires="*/
        </script>
    </head>
    <body>
        <button onclick="deleteCookie()">Delete Cookie</button>
    </body>
</html>