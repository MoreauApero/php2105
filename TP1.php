<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<?php
echo("hello world !");
echo "vous êtes sur la page n°" . $_GET["message"]; 
?>
    <!--<form method="GET">
        <input type="text" name="message"/>
        <input type="submit" value="envoyer">
    
    </form>-->
<a href="?message=toto">afficher toto</a>
<br>
<a href="?message=fille">afficher fille</a><br>
    
<a href="?message=bierre">afficher bierre</a>
</body>
</html>

