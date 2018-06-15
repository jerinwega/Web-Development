<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=-1">
    </head>
    <body>
        <form  onsubmit="display()">
            <input type="text" name="myname" >
            <input type="submit">
        </form>
        
        <input type="button" onclick="display()" value="Click me">
        <script>
            function display()
            {
                alert("Hi i am using js");
            }
        </script>
    </body>
</html>