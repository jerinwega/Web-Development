<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getter and Setter Metho0 with KEY Value PAIR</title>
</head>
<body>
    <script>
        let user = 
        {
                name : "Sudeep",
             surname : "Mehtha",

            get FullName()
            {
                return `${this.name} ${this.surname}` ;
            },

            set FullName(value)
            {
                [this.name,this.surname] = value.split(" ");
            }
        };

        
       alert(user.name);
       alert(user.surname);

       // user.FullName = "Radha Mohan";
        console.log(user.name);
        console.log(user.surname);
    </script>
</body>
</html>