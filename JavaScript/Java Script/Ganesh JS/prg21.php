<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        function myage(birthday)
        {
            this.birthday = birthday;

            Object.defineProperty(this,"myage",{

                get()
                {
                    let ye = new Date().getFullYear();
                    console.log(ye);
                    return ye - this.birthday.getFullYear();
                }
            });
        };

            var res =new  myage(new Date(1994,11,3));
            console.log(res.myage);
    </script>
    
</body>
</html>