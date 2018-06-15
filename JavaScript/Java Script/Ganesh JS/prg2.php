<!DOCTYPE HTML>
<html>
    <head>
        <title>Program 2</title>
        <script>
            function product()
            {
                var a = window.prompt("Enter the first number"); 
                var b = window.prompt("Enter the second number");
                
                var a1 = parseInt(a);
                var b1 = Number(b);
                
                var res = a1 + b1;
                document.getElementById('result').innerHTML = res;    
                
            }
        </script>
        
    </head>
    <body onload="product()">
        <div>
            <h1>Result is =<span id="result"> </span> </h1>
                   
        </div>
       
    </body>
</html>