<!DOCTYPE HTML>
<html>

<head>
    <title>Program 7</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <button onclick="calMeth()">Click Me</button>
    <script>
    function calMeth()
        {
        var a = new Object();
        var b = new Object();

        a.name = "Rohit";
        b.name = "Sudeep";

        a.display = function() 
        {
            return a.name;
           
        };

        b.display = function() {
            var x = a.display();
            document.write(x + " " + b.name);
            return b.name;
        };

        document.write(b.display()); 
         console.log(a.name);
         console.log(b.name);
        }
    </script>
</body>

</html>
