<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/style-navbar.css" rel="stylesheet" />
    <link href="../assets/css/style-footer.css" rel="stylesheet" />
</head>

<body>

    <?php include('navbar.php'); ?>

    <div class="container mt-4">
        <h1 class="fw-bold">Music</h1>

        <div class="row mt-4">
            <!-- Music Card 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Deep Sea Pastures</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/01. Deep Sea Pastures.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Music Card 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Mother Sea</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/02. Mother Sea.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Music Card 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">The First Meeting</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/03. The First Meeting.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Music Card 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Town by a Cove</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/04. Town by a Cove.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Music Card 5 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kumiko</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/05 - Kumiko.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Music Card 6 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Ponyo and Sosuke</h5>
                        <p class="card-text text-muted">Joe Hisaishi</p>
                        <audio controls class="w-100" controlsList="nodownload">
                            <source src="../assets/audio/06 - Ponyo and Sosuke.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php include('footer.php'); ?>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/navbar.js"></script>
</body>

</html>
