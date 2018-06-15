<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>JavaScript creating cookies</title>
</head>

<body>
    <h1 style="color: red">JavaScript creating cookies</h1>
    <hr />
    <script type="text/javascript">
        //This is done to make the following JavaScript code compatible to XHTML. <![CDATA[
        function CookieSet(cName, cValue, cPath, cExpires) 
        {
            cvalue = encodeURIComponent(cValue);
            if (cExpires == "") 
            {
                var cdate = new Date();
                cdate.setMonth(cdate.getMonth() + 1);
                cExpires = cdate.toUTCString();
            }
            if (cPath != "") 
            {
                cPath = ";Path=" + cPath;
            }
            document.cookie = cName + "=" + cValue + "expires=" + cExpires + cPath;
        }
        CookieSet("Name", "Bepractical", "", "");
        alert(document.cookie);
        //]]>

    </script>
</body>

</html>
