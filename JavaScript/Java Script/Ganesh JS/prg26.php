<!DOCTYPE html>
<html>
    <head>
        <title>Non Em</title>
    </head>
<body>
  <script>
    'use strict';
    let user = {
       name: "Amith",
       myMethod() {
        return this.name;
      }
    };
      
      Object.defineProperty(user, "myMethod", {
            enumerable: true
        });
    
   
    for (let key in user)
        {
            alert(key); // name, toString
        }
      
    
    
      
  </script>
</body>

</html>