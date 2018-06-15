<!DOCTYPE HTML>
<html>
    <head>
        <title>Program 13</title>
    </head>
    <body>
        <h1 id="demo"></h1>
        <!-- <p id="demo1"></p>-->
        <script>
            
            function Course(name,duration,price)
            {
                this.Name = name;
                this.Duration = duration;
                this.Price = price;
            }
            
            var ob1 = new Course("Php","2months","12000");
            var ob2 = new Course("Javascript","1months","15100");   
            
        document.getElementById("demo").innerHTML = "Course Name is " + ob1.Name + ",duration is " + ob1.Duration + ",price is " + ob1.Price + ".";
            
            setTimeout(function()
            {
                var status = confirm("Are you sure to replace the data?");
                    if(status == true)
                    {
                document.getElementById("demo").innerHTML = "Course Name is " + ob2.Name + ",duration is " + ob2.Duration + ",price is " + ob2.Price + ".";
                    }
                else
                {
                    document.getElementById("demo").innerHTML = "Course Name is " + ob1.Name + ",duration is " + ob1.Duration + ",price is " + ob1.Price + ".";
              
                }
            },3000);
            
            
        </script>
        
    </body>
</html>