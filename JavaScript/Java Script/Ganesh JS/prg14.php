<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getter and Setters</title>
</head>
<body>
    <script>
        let user ={
            get name()
            {
                return this._name;
            },

            set name(value)
            {
                if(value.length < 4)
                {
                    error = "Name is too short need atleast 4 and above characters";
                    alert(error);
                        console.log(error);
                    return;
                }

                this._name = value;
            }
        };
        
       

        user.name = "Mohith";
        alert(user.name);
        console.log(user.name);
        user.name = "Raj";
        
    </script>
</body>
</html>