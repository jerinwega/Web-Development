<!DOCTYPE HTML>
<html>

<head>
    <title>Program 11</title>
</head>

<body>
    <script>
        class User 
        {

            constructor(name) 
            {
                // invokes the setter
                this.name = name;
            }

            get name() 
            {
                return this._name;
            }

            set name(value) 
            {
                if (value.length < 4) 
                {
                    alert("Name is too short.");
                    return;
                }
                this._name = value;
            }

        }

        let user = new User("Sudeep");
            alert(user.name); // Sudeep

           user = new User("pru"); // Name too short.

    </script>
</body>

</html>
