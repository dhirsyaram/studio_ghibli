<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/css/style-navbar.css" rel="stylesheet" />
        <link href="../assets/css/style-banner.css" rel="stylesheet" />
        <link href="../assets/css/style-footer.css" rel="stylesheet" />
        <title>Ponyo</title>
        <style>
            .hero-banner {
                position: relative;
                background-image: url("../assets/images/ponyo-landscape.jpg");
                background-size: cover;
                background-position: center;
                height: 70vh;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <audio autoplay hidden loop>
            <source src="../assets/audio/17. A New Family Member.mp3" type="audio/mpeg">
        </audio>

        <?php include('navbar.php'); ?>

        <div class="hero-banner">
            <div class="hero-overlay">
                <h1>Ponyo on the Cliff by the Sea</h1>
                <p>A magical journey beneath the waves</p>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <!-- Video Trailer -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="ratio ratio-16x9">
                        <video src="../assets/video/Ponyo - Official Trailer.mp4" title="Ponyo Trailer" autoplay loop
                            muted controls></video>
                    </div>
                </div>


                <!-- Sinopsis -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Sinopsis</h2>
                        <p>
                            Ponyo adalah kisah seorang ikan kecil yang ingin menjadi manusia.
                            Ia berteman dengan seorang anak laki-laki bernama Sosuke, dan bersama-sama mereka mengalami
                            petualangan magis yang mengguncang dunia mereka.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <?php include('footer.php'); ?>


        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/navbar.js"></script>
    </body>

</html>