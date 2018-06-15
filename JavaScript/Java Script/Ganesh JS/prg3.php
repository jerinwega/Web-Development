<!DOCTYPE HTML>
<html>
    <head>
        <title>SetTimeOut</title>
        <script>
            function myProg()
            {
                var a = prompt("Kindly Enter the Name?");
                    
                    if(a == "Ganesh")
                        {
                             window.alert("Please wait for 5 seconds..we are validating user name..");
                            setTimeout(function(){
                                document.write("Hi " + a + " Welcome to Your Home Page.");
                            },5000);
                            
                        }
                  else   if(a == "Rohit")
                        {
                             window.alert("Please wait for 5 seconds..we are validating user name..");
                            setTimeout(function()
                            {
                                document.write("Hi " + a + " Welcome to Your Home Page.");
                            },5000);
                            
                        }
                    else
                    {
                          window.alert("Please wait for 5 seconds..we are validating user name..");
                        setTimeout(function()
                            {
                                 document.write("Invalid username..Refresh the page.."); 
                                // window.open("prg1.php");
                            },5000);
                              
                    }
            }
            
            /*setTimeout(function(){
                
            },delay);*/
        </script>
    </head>
    <body onload="myProg()">
        <script>
        
        </script>
    </body>
</html>