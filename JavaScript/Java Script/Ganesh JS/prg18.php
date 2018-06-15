<!DOCTYPE html>
<html>

<head>
    <script>
        function getOptions() 
        {
             console.log(document.getElementById("mySelect").selectedIndex);  
             console.log(document.getElementById("mySelect").value);  
        }

    </script>
</head>

<body>

    <form>
        <select id="mySelect" onchange="getOptions()">
          <option>Php</option>
          <option>Javascript</option>
          <option>Java</option>
          <option>Html</option>
        </select>
        <br><br>
       
    </form>

    <p id="demo"></p>

</body>

</html>
