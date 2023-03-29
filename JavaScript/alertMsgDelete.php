<!doctype html>
<html>
    <head>

    <!--......................... Delete Alert msg ....................... -->

        <script>
            function myfun()
            {
               var con = confirm ("Are you sure");
            
                if(con == true)
                {
                    alert ("Data deleted");
                }
                else
                {
                    alert ("Please try again");
                }
            }
        </script>
    </head>
    <body>
        <a href = "#" OnClick ="myfun()">Delete</a>
    </body>
</html>