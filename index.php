
<?php 
//jedyny plik ktory widzi przegladarka, trzeba tutaj pobrac podstrone i ja zaladowac

$page = $_GET["page"] ?? 'home'; // pobiera strone ktora ma wyswietlic, jesli nie podano strony to wczytuje home
$podstrony = ['home', 'omnie', 'kontakt']; // podstrony ktore istnieja 


if (!in_array($page, $podstrony)) { // sprawdza czy pobrane page jest w tablicy podstrony, jesli nie jest to wczytuje home
    $page = 'home';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.php?page=home">Strona główna</a>
        <a href="index.php?page=omnie">O mnie</a>
        <a href="index.php?page=kontakt">Kontakt </a>
        

    </nav>
    <?php include __DIR__ . "/../pages/$page.php" ?> <!-- include - laduje podstrone, __dir__ katalog pliku, czyli /pages/{podstrona}.php zmienna podstrona zmieniajac sie zmienia sciezke, odpalajac tym samym podstrone ktora chcemy-->
</body>
</html>