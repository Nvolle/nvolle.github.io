<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nicolas Volle</title>
</head>
<body>
    <center>
        <div>
            Menu - 
            <a href="index.php?page=0">Accueil</a> - 
            <a href="index.php?page=1">Page 1</a> - 
            <a href="index.php?page=2">Page 2</a> - 
            <a href="index.php?page=3">Page 3</a> - 
            <a href="index.php?page=4">Page 4</a> - 
        </div>
        <?php
            if(isset($_GET['page'])) $page = $_GET['page'];
            else $page = 0;
            switch ($page) {
                case 0: require_once ("accueil.php"); break;
                case 1: require_once (""); break;
                case 2: require_once (""); break;
                case 3: require_once (""); break;
                case 4: require_once (""); break;
            }
        ?>
    </center>
</body>
</html>