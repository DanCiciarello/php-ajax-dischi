<?php

$dbDischi = [
    [
    "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
    "title" => "New Jersey",
    "author" => "Bon Jovi",
    "genre" => "Rock",
    "year" => "1988"
    ],
    [
    "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
    "title" => "Live at Wembley 86",
    "author" => "Queen",
    "genre" => "Pop",
    "year" => "1992"
    ],
    [
    "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
    "title" => "Ten's Summoner's Tales",
    "author" => "Sting",
    "genre" => "Pop",
    "year" => "1993"
    ],
    [
    "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
    "title" => "Steve Gadd Band",
    "author" => "Steve Gadd Band",
    "genre" => "Jazz",
    "year" => "2018"
    ],
    [
    "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
    "title" => "Brave new World",
    "author" => "Iron Maiden",
    "genre" => "Metal",
    "year" => "2000"
    ],
    [
    "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
    "title" => "One more car, one more raider",
    "author" => "Eric Clapton",
    "genre" => "Rock",
    "year" => "2002"
    ],
    [
    "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
    "title" => "Made in Japan",
    "author" => "Deep Purple",
    "genre" => "Rock",
    "year" => "1972"
    ],
    [
    "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
    "title" => "And Justice for All",
    "author" => "Metallica",
    "genre" => "Metal",
    "year" => "1988"
    ],
    [
    "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
    "title" => "Hard Wired",
    "author" => "Dave Weckl",
    "genre" => "Jazz",
    "year" => "1994"
    ],
    [
    "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
    "title" => "Bad",
    "author" => "Michael Jackson",
    "genre" => "Pop",
    "year" => "1987"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi - Milestone 1</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header -->
    <nav class="d-flex align-items-center justify-content-between">
        <img src="./img/logo.webp" alt="Nav Logo" width="40">
    </nav>

    <!-- Main -->
    <div class="cdDisksListsContainer py-5">
        <div class="container">

            <!-- Lista dischi -->
            <div class="row row-cols-5 gx-5 gy-4 mt-3">

                <!-- Ciclo i dischi -->
                <?php foreach($dbDischi as $disco){ ?>
                    <div class="col">
                        <div class="cdDiskItemContainer text-center">
                            <img src="<?php echo $disco["poster"] ?>" alt="<?php echo $disco["title"] ?>" class="cdDiskPoster mb-3">
                            <h6 class="text-uppercase text-white"><strong><?php echo $disco["title"] ?></strong></h6>
                            <span class="cdDiskSubtitle"><?php echo $disco["author"] ?></span>
                            <span class="cdDiskSubtitle"><?php echo $disco["year"] ?></span>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </div>


</body>

</html>