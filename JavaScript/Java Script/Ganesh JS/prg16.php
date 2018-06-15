<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=-1">
    <script>
        function getOption() 
        {
            var obj = document.getElementById("mySelect");
            document.getElementById("demo").innerHTML =
                obj.options[obj.selectedIndex].text;
        }

    </script>
</head>

<body>

    <form>
        <select id="mySelect" onchange="getOption()">
          <option value="0">Choose any one Fruit</option>
          <option value="app1">Apple</option>
          <option value="orag">Orange</option>
          <option value="pine">Pineapple</option>
          <option value="bana">Banana</option>
        </select>
        <br><br>
        <input type="button" onclick="getOption()" value="Click Me!">
    </form>

    <p id="demo"></p>

</body>

</html>
