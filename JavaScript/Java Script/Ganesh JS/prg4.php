<!DOCTYPE HTML>
<html>

<head>
    <title>Pattern using nested loop</title>
</head>

<body>
    <button onclick="pattern()">Create Pattern</button>
    <script>
     /*   function pattern()
        {
        var a = window.prompt("Enter the Pattern Size in number");
            var p = parseInt(a);
            var q = p-1;
            
        for (i = 0; i <= p; i++) 
        {
            for (k = p; k >= i; k--) 
            {
                document.write("<span>&nbsp;&nbsp;</span>");
            }
            for (j = 1; j <= i; j++) 
            {
                document.write("<img src='images/face.jpg'><span>&nbsp;</span>");
            }
                document.write("<br>");
        }
        for (i = q; i >= 1; i--) 
        {
            for (k = p; k >= i; k--) 
            {
               document.write("<span>&nbsp;&nbsp;</span>");
            }
            for (j = 1; j <= i; j++) 
            {
                document.write("<img src='images/face.jpg'><span>&nbsp;&nbsp;</span>");
            }
          document.write("<br>");
        }
      }*/
        
        function pattern()
        {
            var a = window.prompt("Enter the Pattern Size in number");
            var p = parseInt(a);
            var q = p-1;
            
        for (i = 0; i <= p; i++) 
        {
            for (k = p; k >= i; k--) 
            {
                document.write("<span>&nbsp;&nbsp;</span>");
            }
            for (j = 1; j <= i; j++) 
            {
                document.write("* <span>&nbsp;</span>");
            }
                document.write("<br>");
        }
             for (i = q; i >= 1; i--) 
        {
            for (k = p; k >= i; k--) 
            {
               document.write("<span>&nbsp;&nbsp;</span>");
            }
            for (j = 1; j <= i; j++) 
            {
                document.write("* <span>&nbsp;&nbsp;</span>");
            }
          document.write("<br>");
        }
            
        }
    </script>

</body>

</html>
