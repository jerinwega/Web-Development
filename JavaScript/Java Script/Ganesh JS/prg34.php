<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>JavaScript Cookie</title>
    <script type="text/javascript">
        //This is done to make the following JavaScript code compatible to XHTML. <![CDATA[
        function register(name) {
            var curdate = new Date();
            curdate.setMonth(curdate.getMonth() + 9);
            cookieExpires = curdate.toUTCString();
            final_cookie = "mycookie=" + encodeURIComponent(name) + ";expires_on = " + cookieExpires;
            document.cookie = final_cookie;
        }

        function getCookie(cookie_name) {
            var search_cookie = cookie_name + "="
            if (document.cookie.length > 0) {
                start_position = document.cookie.indexOf(search_cookie)
                if (start_position != -1) {
                    start_position += search_cookie.length
                    end_position = document.cookie.indexOf(";", start_position)
                    if (end_position == -1) end_position = document.cookie.length
                    return (decodeURIComponent(document.cookie.substring(start_position, end_position)))
                }
            }
        }
        //]]>
    </script>
</head>

<body>
    <h1 style="color: red">JavaScript Cookie</h1>
    <hr />
    <script type="text/javascript">
        //This is done to make the following JavaScript code compatible to XHTML. <![CDATA[
        var username = getCookie("mycookie")
        if (username) {
            document.write("Welcome Back, ", username)
        }
        if (username == null) {
            document.write("You haven't been here in the last nine months...")
            document.write("When you return to this page in next nine months, ");
            document.write("your name will be displayed...with Welcome.");
            document.write('<form onsubmit = "return false">');
            document.write('<p>Enter your name: </p>');
            document.write('<input type="text" name="username" size="40">');
            document.write('<input type = "button" value= "Register"');
            document.write('onClick="register(this.form.username.value); history.go(0)">');
            document.write('</form>');
        }
        //]]>
    </script>
</body>

</html>