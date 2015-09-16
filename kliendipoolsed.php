<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Mihhailova</title>
</head>
<body>
<button onclick="alert('Tere Maailm!')">Tere Maailm!</button>

<a href="http://www.khk.ee" onclick="alert('Tere Maailm!')">Tere Maailm!</a>

<a href="#" onclick="alert('Jääme siia!')">Jääme siia!</a>

<!--<img id="cat" onclick=getElementById("cat").src="ASSETS/pictures/dog.jpg" src="ASSETS/pictures/cat.jpg">-->
<img id="pic1" src="ASSETS/pictures/cat.jpg "/>

<span class="bg_buttons">
    <button id="button1">Red</button>
    <button id="button2">Green</button>
    <button id="button3">Blue</button>
</span>


<script>
    $(document).ready(function () {
        $('#pic1').click(function () {
            $(this).replaceWith('<img src="ASSETS/pictures/dog.jpg"/>');
        });
        $('#button1').click(function () {
            $('body').css('backgroundColor', 'red');
        });
        $('#button2').click(function () {
            $('body').css('backgroundColor', 'green');
        });
        $('#button3').click(function () {
            $('body').css('backgroundColor', 'blue');
        });
    });

</script>


</body>
</html>