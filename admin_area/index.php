<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>
    <link rel="stylesheet" href="../index.css">
    <!-- Bootstrap Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONT AWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid p-0">
        <!----- First Child-----> 
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <img src="../Images/BF.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class= "navbar-nav">
                        <li class= "nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!----Second Child---->
        <div class="bg-light">
            <h3 class="text-center p-2">Manager Details</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-mid-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3 m-3">
                    <a href="#"><img src="../images/Tomato.jpeg" alt ="" class="admin-image"></a>
                    <p class="text-light text-center">Admin-Name</p>
                </div>
                <div class="button text-center p-4">
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">Insert Products</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">View Products</a></button>
                    <button class="my-3 p-2"><a href="index.php?insert_category" class="nav-link my-1">Insert Categories</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">View Categories</a></button>
                    <button class="my-3 p-2"><a href="index.php?insert_Brands" class="nav-link my-1">Insert Brands</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">View Brands</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">All orders</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">All payments</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">List Users</a></button>
                    <button class="my-3 p-2"><a href="" class="nav-link my-1">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth child -->

    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        else if(isset($_GET['insert_Brands'])){
            include('insert_brands.php');
        }
        ?>
    </div>
    <!-- last Child -->
    <div class="bg p-3 text-center bg-dark text-light footer">
            <p>Designed by Sadgi Jakhar</p>
        </div>
    <!-- Bootstrap Script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>