<!dctype html>
<html>
    <head>

        <script>
 
    //  <!--......................... Dropdown choosed and get msg ....................... -->
            

            function myfun(arg)
            {
                if(arg==1)
                {
                   document.getElementById("p1").innerHTML="this is my country";
                }
                else
                {
                    document.getElementById("p1").innerHTML = "this is not my country"; 
                }
            }
        </script>
    </head>
    <body>
        <select onchange = "myfun(value)">
          <option value="0">--select--</option>
          <option value="1">India</option>
          <option value="2">UAE</option>
        </select>
        
        <p id = "p1"> </p>

    </body>
</html>