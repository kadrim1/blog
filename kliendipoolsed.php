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

<button id="allow_click">Luba parem klõps</button>

<button id="hide_cat">Peida/näita kassiga pilt</button>


<script>

    $(document).ready(function () {
        //pildivahetus

        $('#pic1').click(function () {
            $(this).replaceWith('<img src="ASSETS/pictures/dog.jpg"/>');
        });

        //buttonite värvivahetus
        $('#button1').click(function () {
            $('body').css('backgroundColor', $('#button1').text());
        });
        $('#button2').click(function () {
            $('body').css('backgroundColor', $('#button2').text());
        });
        $('#button3').click(function () {
            $('body').css('backgroundColor', $('#button3').text());
        });

        //paremakliki keelamine
        $(document).on("contextmenu", function () {
            return false;

            //parema kliki taaslubamine
        });
        $("#allow_click").click(function () {
            $(document).unbind();
        });
        $('#hide_cat').click(function () {
            $('#pic1').toggle();
        });

    });


</script>


</body>
</html>