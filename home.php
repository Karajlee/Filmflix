<?php 
	session_start();
    $host = "127.0.0.1";
	$user = "root"; 
	$pass = "csci201";
	$db = "filmflix"; 

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}
    if (!isset($_SESSION["username"])) {
        $error = "Login First Please.";
    }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmflix</title>
    <meta name="title" content="Filmflix">
    <meta name="description" content="Filmflix is a movie app similar to the format of Netflix">

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/js/global.js" defer></script>
    <script src="./assets/js/index.js" type="module"></script>
</head>

<body>
    <header class="header">
        <a href="./home.php" class="logo">
            <img src="./assets/images/logos.png" width="50" height="22" alt="Filmflix home">
        </a>
        <a href="logout.php" class="btn-login"><span>Log Out</span></a>
        <button id="tog" onclick="theme()"><img src="./assets/images/toggle.png" width="50"></button>
        <div class="search-box" search-box>
            <div class="search-wrapper" search-wrapper>
                <input type="text" name="search" aria-label="search movies" placeholder="Search any movies..." class="search-field" autocomplete="off" search-field>
                <img src="./assets/images/search.png" width="24" height="24" alt="search" class="leading-icon">
            </div>
            <button class="search-btn" search-toggler>
                <img src="./assets/images/close.png" width="24" height="24" alt="close search box">
            </button>
        </div>

        <button class="search-btn" search-toggler menu-close>
            <img src="./assets/images/search.png" width="24" height="24" alt="open search box">
        </button>
        <button class="menu-btn" menu-btn menu-toggler>
            <img src="./assets/images/menu.png" width="24" height="24" alt="open menu" class="menu">
            <img src="./assets/images/menu-close.png" width="24" height="24" alt="close menu" class="close">

        </button>
    </header>

    <main>
        <nav class="sidebar" sidebar></nav>
        <div class="overlay" overlay menu-toggler></div>

        <article class="container" page-content></article>
    </main>
</body>
<script>
    function theme() { 
        console.log("toggle");
        var element = document.body;
        var el = document.main;
        element.classList.toggle("dark-mode");
        el.classList.toggle("dark-mode");
    }
</script>

</html>