<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    
    <!-- Bootstrap CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <!-- FONT AWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="Images/BF.png" alt ="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Total Price: 100/-</a>
                </li>
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
        <!-- second child -->
        <nav class = "navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>
        <!-- third  child -->
        <div class="bg-light">
            <h3 class = "text-center">Hidden Store</h3>
            <p class="text-center">Communications is at the heart of e-commerce and community</p>
        </div>

        <!-- forth child -->
        <div class="row">
            <div class="col-md-10">
                <!-- products -->
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/apples.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fresh Apples</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/capsicum.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Spicy Capsicum</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/Tomato.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Juicy Tomato</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/onion.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Juicy Tomato</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/Grapes.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Juicy Tomato</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="Images/SweatPotato.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Juicy Tomato</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                <a href="#" class="btn btn-dark">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <ul class ="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light "><h4>Delivery Brands</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Brand 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Brand 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Brand 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Brand 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Brand 5</a>
                    </li>
                </ul>
                <ul class ="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light "><h4>Categories</h4></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Category 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Category 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Category 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Category 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Category 5</a>
                    </li>
                </ul>
                <!-- sidenav -->
            </div>
        </div>
        <!-- last Child -->
        <div class="bg p-3 text-center bg-dark text-light">
            <p>Designed by Sadgi Jakhar</p>
        </div>
    </div>
    <!-- BOOTSTRAP CSS LINK  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>