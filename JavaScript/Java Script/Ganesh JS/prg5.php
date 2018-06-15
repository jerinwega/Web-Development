<!DOCTYPE HTML>
<html>

<head>
    <title>Program 5</title>
</head>

<body>
    <script language="javascript" type="text/javascript">
        <!--

        // Object Literals

        timObject = {
            property1: "Hello",
            property2: "MmmMMm",
            property3: ["mmm", 2, 3, 6, "kkk"],
            method1: function() {
                alert("Method had been called" + this.property1);
            }
        };

        timObject.method1();
        
        console.log(timObject.property3[2]) // will yield 3

        var circle = 
            {
            x: 0,
            y: 0,
            radius: 2
        }; // another example

        // nesting is no problem.
        var rectangle = 
        {
            upperLeft: 
            {
                x: 2,
                y: 2
            },
            lowerRight: 
            {
                x: 4,
                y: 4
            }
        }

        alert(rectangle.upperLeft.x) // will yield 2

        //-->

    </script>

</body>

</html>
