<!DOCTYPE html>
<html>

<head>
    <script>
        function getOptions() 
        {
            var x = document.getElementById("mySelect");
            var txt = "";
            var i=0;
             while(i < x.length) 
            {
                txt = txt + " " + x.options[i].text;
                i++;
            }
            document.getElementById("demo").innerHTML = txt;
            console.log(txt);
        }

    </script>
</head>

<body>

    <form>
<select id="mySelect">
  <option>Php</option>
  <option>Javascript</option>
  <option>Java</option>
  <option>Html</option>
</select>
        <br><br>
        <input type="button" onclick="getOptions()" value="Output all options">
    </form>

    <p id="demo"></p>

</body>

</html>
