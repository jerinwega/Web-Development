<?php

 if($_GET)
    {
        $myGender = $_GET['gender'];
     echo '<h1>You have selected <span style="color:coral;">'. $myGender . '</span></h1>';
 }
?>