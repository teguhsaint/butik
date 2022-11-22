<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">

    <title>Boutique</title>
</head>

<body>
    <div class="navmenu">
        <a href="" class="LOGO">Boutique</a>
        <a href="index.php?p=home"> New Arival</a>
        <a href="index.php?p=shop">Shop</a>
        <a href="index.php?p=about">About Us</a>
        <a href="index.php?p=contact">Contact Us</a>

        <a href="#" onclick="showMenu()" class="icon"><i class="fas fa-bars"></i></a>
    </div>
    <div class="container">
        <?php
        $pages_dir = 'pages'; //pages merupakan nama folder
        if (!empty($_GET['p'])) { //kondisi apakan ada parameter p didalam url
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo "Halaman tidak ditemukan!";
            }
        } else {
            include($pages_dir . '/home.php');
        }
        ?>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous'></script>

    <script>
        function showMenu() {
            $('.navmenu').toggleClass('responsive')
        }
    </script>

</body>

</html>