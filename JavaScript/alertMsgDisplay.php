<!doctype html>
<html>
    <head>
        <script>
            function myfun()
            {
                var con = prompt ("Enter value")

                document.getElementById("p1").innerHTML= con;
            
            }
        </script>
    </head>
    <body>
        <a href ="#" onclick="myfun()">Enter value </a>
        <p id = "p1"></p>
    </body>
</html>