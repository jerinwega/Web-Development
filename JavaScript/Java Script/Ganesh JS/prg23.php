<!DOCTYPE html>
<html>
    <head>
        <title>Property Flags</title>
    </head>
<body>
  <script>
    'use strict';
    let user = {
     name: "Amith"
    };
    
    let descriptor = Object.getOwnPropertyDescriptor(user, 'name');
    
    alert( JSON.stringify(descriptor, null, 2 ) );
    /* property descriptor:
    {
      "value": "",
      "writable": true,
      "enumerable": true,
      "configurable": true
    }
    */
  </script>
</body>

</html>