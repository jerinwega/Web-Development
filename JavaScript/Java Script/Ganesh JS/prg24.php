<!DOCTYPE HTML>
<html>
    <head>
        <title>Property Flags as false</title>
    </head>

<body>
  <script>
    'use strict';
    let user = {};
      
    Object.defineProperty(user, "name", {
      value: "Amith"
    });
      
       Object.defineProperty(user, "email", {
      value: "amith@gmail.com"
    });
      
      
    
   
      function display(first,last)
      {
          
          this.first = first;
          this.last = last;
          
          Object.defineProperty(this,'firstname',{
              get()
              {
                  return this.first;
              }
          });
          Object.defineProperty(this,'lastname',{
              get()
              {
                  return this.last;
              }
          });
          
          Object.defineProperty(this,'fullname',{
              get()
              {
                  var res =  this.first + this.last;
                  return res;
              }
          });
      };
    
     let descriptor = Object.getOwnPropertyDescriptor(user, 'name');
     let descriptor1 = Object.getOwnPropertyDescriptor(user, 'email');
      
       alert( JSON.stringify(descriptor, null, 2 ) );
       alert( JSON.stringify(descriptor1, null, 2 ) );
      
      var obj = new display('Keshav','Manohar');
      alert(obj.firstname);
      alert(obj.lastname);
      alert(obj.fullname);
    /*
    {
      "value": "",
      "writable": false,
      "enumerable": false,
      "configurable": false
    }
     */
  </script>
</body>

</html>