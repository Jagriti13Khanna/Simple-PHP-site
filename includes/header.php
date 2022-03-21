<?php
$the_page = basename($_SERVER['PHP_SELF']);

switch ($the_page) {
    case 'index.php':
        $page_title = "Kalypso Media";
        $img_path = "<img src='img/logo.png' alt='Kalypso Logo' class='logo'>";
        break;
    case 'tropico1.php':
        $page_title = "Tropico 1";
        break;
    case 'tropico2.php':
        $page_title = "Tropico 2";
        break;
    case 'tropico3.php':
        $page_title = "Tropico 3";
        break;
    case 'tropico4.php':
        $page_title = "Tropico 4";
        break;
    case 'tropico5.php':
        $page_title = "Tropico 5";
        break;
    default:
        $page_title = "Tropico 6";
        break;
}

switch ($the_page) {
    case 'index.php':
        $img_path = "<img src='img/logo.png' alt='Kalypso Logo' class='logo'>";
        break;
    case 'tropico1.php':
        $img_path = "<img src='img/tropico1.jpg' alt='Tropico 1'>";
        break;
    case 'tropico2.php':
        $img_path = "<img src='img/tropico2.jpg' alt='Tropico 2'>";
        break;
    case 'tropico3.php':
        $img_path = "<img src='img/tropico3.jpg' alt='Tropico 3'";
        break;
    case 'tropico4.php':
        $img_path = "<img src='img/tropico4.jpg' alt='Tropico 4'";
        break;
    case 'tropico5.php':
        $img_path = "<img src='img/tropico5.jpg' alt='Tropico 5'";
        break;
    default:
        $img_path = "<img src='img/tropico6.jpg' alt='Tropico 6'";
        break;
}



//<?php echo $img_path; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu sticky">
                <li><a href="index.php">Home</a></li>
                <li><a href="tropico1.php">Tropico 1</a></li>
                <li><a href="tropico2.php">Tropico 2</a></li>
                <li><a href="tropico3.php">Tropico 3</a></li>
                <li><a href="tropico4.php">Tropico 4</a></li> 
                <li><a href="tropico5.php">Tropico 5</a></li>
                <li><a href="tropico6.php">Tropico 6</a></li>
            </ul>
       </nav> 
       <h1>Tropico</h1>
       <h2>Video Game</h2>
    </header>