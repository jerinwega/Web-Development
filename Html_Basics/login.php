<?php
    if(isset($_POST))
    {
        $myName = $_POST['username'];
        $myPass = $_POST['password'];
        
if($myName == "jerin" && $myPass == "jaja")
{
    echo "<h1>Welcome " . $myName . "</h1>";
}else {
    echo "<h2>Invalid username and password</h2>";
}
echo "<a href='p17.html'>Back</a>";
    }
?>
