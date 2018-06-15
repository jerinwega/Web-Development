<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <script>
        var a = [0,1];
        document.write(a[0] +" " + a[1] + " ");
        
        for(i=0;i<10;i++)
            {
                a[i+2] = a[i] + a[i+1];
                    document.write(a[i+2] + " ");
                a[i] = a[i+1];
                a[i+1] = a[i+2];
            }

    </script>

</body>

</html>
