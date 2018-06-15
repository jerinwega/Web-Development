<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using of Compatibility in JS</title>
</head>
<body>
    <script>
        function user(name,age)
        {
            this.name = name;
            this.age = age;
        }

        function user1(name,birthday)
        {
            this.name = name;
            this.birthday = birthday;
        }

        function user2(name,birthday)
        {
            this.name = name;
            this.birthday  = birthday;

             Object.defineProperty(this, "age", {

            get()
            {
                let todayYear = new Date().getFullYear(); //2017
                return todayYear - this.birthday.getFullYear(); //2017-1992 = 25 age = 25
            }
        });
        }

       

        let person = new user("John",25);
        console.log(person.name);
        console.log(person.age);

        let person1 = new user1("Mohith",new Date(1992, 6, 1));
        console.log(person1.name);
        console.log(person1.birthday);
        document.write("<h1 style='color:deeppink;'>Hi i am " + person1.name +",My Date of Birth is =" + person1.birthday + "</h1>");


        let person2 = new user2("Mohith",new Date(1994,6,1));

            alert(person2.birthday);
            alert(person2.age);
            console.log(person2.birthday);
            console.log(person2.age);


    </script>
</body>
</html>