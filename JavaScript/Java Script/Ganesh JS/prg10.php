<!DOCTYPE HTML>
<html>
<head>
    <title>Program 10</title>
</head>

<body>
    <script>
        class User 
        {
            constructor(name) 
            {
                this.name = name;
                console.log(this.name);
            }

            sayHi() 
            {
                document.writeln( "Hi i am " + this.name + "<br>");
            }

        }

        let user = new User("Sudeep");
        let user1 = new User("Dilip");
        let user2 = new User("Tushar");
        
        user.sayHi();
        user1.sayHi();
        user2.sayHi();
        
    </script>
</body>

</html>
