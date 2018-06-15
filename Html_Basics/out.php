
<?php
    if(isset($_GET))
    {
        $myName = $_GET['username'];
        $myPass = $_GET['password'];
        $myGender = $_GET['gender'];
if($myName == "jerin" && $myPass == "jaja" && $myGender == "male")
{
    echo "<h1> Welcome &nbsp;" . $myName . "</h1>";
}
    else {
    echo "<h2>Invalid username and password</h2>";
}
echo "<a href='form_rough.html'>Back</a>";
    }
?>
    
    
