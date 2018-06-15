<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program 9</title>
</head>

<body>
    <p id="demo"></p>
    <script>
        var myVar = '{ "bepractical" : [' +
            '{ "name":"Javascript" , "duration":"1month","price":"12000" },' +
            '{ "name":"Core Php" , "duration":"2month","price":"25000" },' +
            '{ "name":"Angular JS" , "duration":"2month","price":"33000" }]}';

        obj = JSON.parse(myVar);
        
        document.write(obj.bepractical[1].duration + " ," + obj.bepractical[1].price + "<br>");
        
        document.getElementById("demo").innerHTML = obj.bepractical[0].name;
        
        for (var i = 0; i < 3; i++) 
        {
            document.write("<strong>Course Name is = </strong>" + obj.bepractical[i].name + ",<strong>duration is = </strong>" + obj.bepractical[i].duration + "<strong> and price is = </strong>" + obj.bepractical[i].price + "<br>");
        }

    </script>

</body>

</html>
