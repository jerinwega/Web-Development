<!DOCTYPE HTML>
<html>
    <head>
        <title>Events</title>
        
        <script>
            function onclk(a,b)
            {
                alert("onclick method");
                alert(a*b);
            }
            
            function ondbclk()
            {
                alert("double click");
            }
            function mouseover()
            {
                document.getElementById('btn').innerHTML = "Loading..";
                document.getElementById('btn').style.backgroundColor = "green";
                document.getElementById('btn').style.color = "white";
                
            }
        </script>
    </head>
    <body>
        <button onclick="onclk(12,13)">Onclick</button>
        <br><br>
        <button ondblclick="ondbclk()">dblclick</button>
         <br><br>
        <button onmouseover="mouseover()" id="btn">Mouseover</button>
        <button></button>
    </body>
</html>