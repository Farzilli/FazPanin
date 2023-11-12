<?php
include("./inc/chisiamo.php");

$contatti = "";
foreach ($data as $e) {
    $contatti .= <<< HTML
        <a class="contatto" href="$e[link]">
            <i id="icon" style="background-image: url($e[img])"></i>
            <h2 id="name">$e[nome]</h2>
        </a>
    HTML;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi Siamo</title>
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

    <section id="chisiamo-mainsec">
        <h1>i nostri social e contatti</h1>
        <div id="social"><?= $contatti ?></div>
    </section>

    <footer>
        <h1>sito a cura di Francesco Arzilli 5G</h1>
    </footer>
</body>

<script src="./script.js"></script>

</html>