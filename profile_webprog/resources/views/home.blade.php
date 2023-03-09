<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <style>
        /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background-image: url("./img/home_bg.gif");
    background-size: 100% 100%;
}

.container {
    margin-top: 100px;
}

.container .row .col-lg-4 {
    display: flex;
    justify-content: center;
}

.card {
    position: relative;
    padding: 0;
    margin: 0 !important;
    border-radius: 20px;
    overflow: hidden;
    max-width: 280px;
    max-height: 340px;
    cursor: pointer;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

}

.card .card-image {
    width: 100%;
    max-height: 340px;
}

.card .card-image img {
    width: 100%;
    max-height: 340px;
    object-fit: cover;
}

.card .card-content {
    position: absolute;
    bottom: -180px;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(15px);
    min-height: 140px;
    width: 100%;
    transition: bottom .4s ease-in;
    box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.card:hover .card-content {
    bottom: 0px;
}

.card:hover .card-content h4,
.card:hover .card-content h5 {
    transform: translateY(10px);
    opacity: 1;
}

.card .card-content h4,
.card .card-content h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-40px);
    transition-delay: 0.2s;
}

.card .card-content h5 {
    transition: 0.5s;
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 2px;
}

.card .card-content .social-icons {
    list-style: none;
    padding: 0;
}


.card .card-content .social-icons li {
    margin: 10px;
    transition: 0.5s;
    transition-delay: calc(0.15s * var(--i));
    transform: translateY(50px);
}


.card:hover .card-content .social-icons li {
    transform: translateY(20px);
}

.card .card-content .social-icons li a {
    color: #fff;
}

.card .card-content .social-icons li a span {
    font-size: 1.3rem;
}

@media(max-width: 991.5px) {
    .container {
        margin-top: 20px;
    }

    .container .row .col-lg-4 {
        margin: 20px 0px;
    }
}
    </style>
<div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="img/ivo.jpg"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Ivo Herid</h4>
                            <h5>Binus University Student</h5>
                            <h5>2440019844</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="profile/ivo">
                                        Click Here
                                    </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="img/ken_1.jpg" alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Kenzio</h4>
                            <h5>Binus University Student</h5>
                            <h5>2440022025</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="profile/kenzio">
                                        Click Here
                                    </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="img/gred_1.jpg"  
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Grady</h4>
                            <h5>Binus University Student</h5>
                            <h5>2440009093</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="profile/grady">
                                        Click Here
                                    </a>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>