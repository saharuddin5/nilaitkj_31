<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Nilai by Saharuddin</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
    <link rel="shortcut icon" href="images/aql.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: #6F2C91;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white;">Aplikasi Nilai</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="." style="color: white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=jurusan" style="color: white;">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=santri" style="color: white;">santri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=matadiklat" style="color: white;">Mata Diklat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=instruktur" style="color: white;">Instruktur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=nilai" style="color: white;">Nilai</a>
                </li>
            </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

     <div class="container mt-2 mb-4">
        <?php include_once('tkj.php'); ?>
    </div>
    <div class="fixed-bottom">
    <div class="card">
        <div class="card-body" style="background-color: #32CD32; color: white;">
            &copy; 2024-<?=date("Y")?> - Web Dev Stiba Arrayah
            <span class="float-end">
                Versi 1.0 by <a href="http://tkjj13.rf.gd" target="blank" rel="noopener noreferrer" style="color: white;">Saharuddin</a>
            </span>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
