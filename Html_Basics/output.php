<?php
    if(isset($_POST))
    {
        $myName = $_POST['username'];
        $myPass = $_POST['pass'];
        
// echo "<h1>" .$myName. "</h1>";
// echo "<h1>" .$myPass. "</h1>";
        
if($myName == "jerin" && $myPass == "jaja")
{
    echo "<h1>Welcome" . $myName . "</h1>";
}else {
    echo "<h2>Invalid username and password</h2>";
}
echo "<a href='p10.html'>back</a>";
    }
?>

