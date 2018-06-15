<!DOCTYPE html>
<html>
    <head>
        <title>Readonly </title>
    </head>
<body>
  <script>
    'use strict';
    let user = {
      name: "Amith"
    };
    
    Object.defineProperty(user, "name", {
      writable: true,  // Error: Cannot assign to read only property 'name'...
      enumerable : false
    });
    
    user.name = "Kiran"; 
    alert(user.name);
  </script>
</body>

</html