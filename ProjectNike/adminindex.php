<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminindex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <!-- slider -->
    <section id="slider">
        <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
            <ol class="carousel-indicators">
                <button data-bs-target="#mySlider" data-bs-slide-to="0"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="1" class="active"></button>
                <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-1">Welcome to Admin</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-1">Welcome to Admin</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-1">Welcome to Admin</h1>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <br>
    <center><div class="spinner-border text-primary" role="status">
        <span class="visually-hidden"></span>
    </div>
    <div class="spinner-border text-secondary" role="status">
        <span class="visually-hidden"></span>
    </div>
    <div class="spinner-border text-success" role="status">
        <span class="visually-hidden"></span>
    </div></center>
    <!-- service section -->
    <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <a href="Insertdata.php" class="btn btn-secondary active">กรอกข้อมูล</a>

                </div>
            </div>
        </div>
    </section>

</body>
<section class="footer">
        <p>ผู้จัดทำ 64039309 ธรรมธร สุดใจ </p>
        <p>Copyright &copy; บริษัท Nike จำกัด</p>
    </section>
</html>