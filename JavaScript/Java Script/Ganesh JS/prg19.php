<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci</title>
</head>

<body>
    <script>
        var n1 = prompt("Enter the first number");
        var n2 = prompt("Enter the second number");
        
        var a = Number(n1);
        var b = Number(n2);
        var num = 0;
        
            document.write(a  + " " + b + " ");
            
        while(num < 5)
              {
                var c = a + b;
                 document.write(c + " ");
                  a = b;
                  b = c;
                  num = num + 1;
              }
    </script>

</body>

</html>