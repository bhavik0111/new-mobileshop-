<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <script>
        function myfun()
        {
            document.getElementById("image").src= "../../image/img/scorpio.jfif";
        }
        function myfun1()
        {
            document.getElementById("image").src= "../../image/img/image.jfif" ;
        }
    </script>
</head>
<body>
    <image src ="" width ="500" height ="500" id="image" OnMouseOver ="myfun()" OnMouseOut ="myfun1()" />
</body>
</html>