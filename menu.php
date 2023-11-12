<?php
include("./inc/menu.php");

$menuList = "";
foreach ($data as $e) {
    $menuList .= <<<HTML
        <div class="product">
            <div class="product-img" style="background-image: url($e[img]);"></div>
            <h2>$e[nome]</h2>
            <h3>$e[descrizione]</h3>
            <div class="price">$e[prezzo]€</div>
        </div>
    HTML;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="shortcut icon" href="./icon.png" type="image/x-icon" />
</head>

<body>
    <nav>
        <div class="left-nav">
            <h1 id="name">FAZ</h1>
        </div>
        <div class="right-nav">
            <a href="index.html" class="nav-element">home</a>
            <a href="menu.php" class="nav-element">menù</a>
            <a href="prenota.html" class="nav-element">prenota</a>
            <a href="chisiamo.php" class="nav-element">chi siamo</a>
            <a href="dovesiamo.html" class="nav-element">dove siamo</a>

            <input type="checkbox" name="sidebar-state" id="sidebar-state" />
            <label for="sidebar-state" class="side-elem side-icon" style="background-image: url('./icon/menu.png')"></label>
            <div id="sidebar" class="side-elem">
                <label for="sidebar-state" class="side-elem side-icon" style="background-image: url('./icon/reject.png')"></label>
                <hr />
                <a href="index.html" class="side-element">home</a>
                <a href="menu.php" class="side-element">menù</a>
                <a href="prenota.html" class="side-element">prenota</a>
                <a href="chisiamo.php" class="side-element">chi siamo</a>
                <a href="dovesiamo.html" class="side-element">dove siamo</a>
            </div>
        </div>
    </nav>

    <section id="menu-mainsec">
        <h1 id="menu-title">il nostro menù</h1>
        <div id="menulist"><?= $menuList ?></div>
    </section>

    <footer>
        <h1>sito a cura di Francesco Arzilli 5G</h1>
    </footer>
</body>

<script src="./script.js"></script>

</html>