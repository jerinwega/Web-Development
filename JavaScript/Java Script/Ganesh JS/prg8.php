<!DOCTYPE HTML>
<html>

<head>
    <title>Program 8</title>
</head>

<body>
    <button onclick="display()">Click me</button>
    <script>
        function biodata(name, email, mob) 
        {
            this.name = name;
            this.email = email;
            this.mob = mob;
        }

        var p1 = new biodata("Rohit", "rohit@gmail.com", "9874561230");
        var p2 = new biodata("Mohit", "mohit@gmail.com", "9878585230");

        function display() 
        {
            document.write("My Name is  " + p1.name + "<br>" + "My Email " + p1.email + "<br>" + 
                           "My Mobile number " + p1.mob + ".<br>");
            document.write("<br>");
            document.write("My Name is  " + p2.name + "<br>" + "My Email " + p2.email + "<br>" + 
                           "My Mobile number " + p2.mob + ".");

        }

    </script>
</body>

</html>
