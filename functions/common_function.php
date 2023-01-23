<?php
include('./includes/connect.php');

//getting products
function getproducts(){
    global $con;

    // condition to check isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_product = "Select * from `products` order by rand() limit 0,9 ";
    $result_product = mysqli_query($con, $select_product);
    while($row_data = mysqli_fetch_assoc($result_product)){
        $product_id = $row_data['Product_id'];
        $product_name = $row_data['Product_title'];
        $product_description = $row_data['Product_description'];
        $product_Keywords = $row_data['Product_keywords'];
        $category_id = $row_data['category_id'];
        $brand_id = $row_data['brand_id'];
        $product_image1 = $row_data['Product_image1'];
        $product_image2 = $row_data['Product_image2'];
        $product_image3 = $row_data['Product_image3'];
        $product_price = $row_data['Product_price'];
        echo "<div class='col-md-4 mb-4'>
            <div class='box m-2' style='width: 20rem;'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_name</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='#' class='btn btn-dark'>View More</a>
                </div>
            </div>
        </div>";

    }
}}
}

// getting unique categories

function get_unique_category(){
    global $con;
    if(isset($_GET['category'])){
        $category_id = $_GET['category'];
        $select_product = "Select * from `products` where category_id = $category_id";
        $result_product = mysqli_query($con, $select_product);
        $num_of_rows = mysqli_num_rows($result_product);
        if($num_of_rows == 0){
            echo"<h2 class='text-center text-danger'>Oops! Sorry<br>No Stock available right now.</h2>";
        }
        while($row_data = mysqli_fetch_assoc($result_product)){
            $product_id = $row_data['Product_id'];
            $product_name = $row_data['Product_title'];
            $product_description = $row_data['Product_description'];
            $product_Keywords = $row_data['Product_keywords'];
            $category_name = $row_data['category_id'];
            $brand_name = $row_data['brand_id'];
            $product_image1 = $row_data['Product_image1'];
            $product_image2 = $row_data['Product_image2'];
            $product_image3 = $row_data['Product_image3'];
            $product_price = $row_data['Product_price'];
            echo "<div class='col-md-4 mb-4'>
                <div class='box m-2' style='width: 20rem;'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to Cart</a>
                        <a href='#' class='btn btn-dark'>View More</a>
                    </div>
                </div>
            </div>";

        }
    }
}
function get_unique_brand(){
    global $con;
    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
        $select_product = "Select * from `products` where brand_id = $brand_id";
        $result_product = mysqli_query($con, $select_product);
        $num_of_rows = mysqli_num_rows($result_product);
        if($num_of_rows == 0){
            echo"<h2 class='text-center text-danger'>Oops! Sorry<br>No Stock available right now.</h2>";
        }
        while($row_data = mysqli_fetch_assoc($result_product)){
            $product_id = $row_data['Product_id'];
            $product_name = $row_data['Product_title'];
            $product_description = $row_data['Product_description'];
            $product_Keywords = $row_data['Product_keywords'];
            $category_name = $row_data['category_id'];
            $brand_name = $row_data['brand_id'];
            $product_image1 = $row_data['Product_image1'];
            $product_image2 = $row_data['Product_image2'];
            $product_image3 = $row_data['Product_image3'];
            $product_price = $row_data['Product_price'];
            echo "<div class='col-md-4 mb-4'>
                <div class='box m-2' style='width: 20rem;'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-primary'>Add to Cart</a>
                        <a href='#' class='btn btn-dark'>View More</a>
                    </div>
                </div>
            </div>";

        }
    }
}


function getBrands(){
    global $con;
    $select_brands = "Select * from `Brands`";
    $result_brands = mysqli_query($con, $select_brands);
    while($row_data = mysqli_fetch_assoc($result_brands)){
        $brand_name = $row_data['Brand_name'];
        $brand_id = $row_data['Brand_id'];
        echo "<li class='nav-item'>
        <a href= 'index.php?brand=$brand_id' class='nav-link text-light '>$brand_name</a>
        </li>" ;
    }
}

function getcategory(){
    global $con;
    $select_category = "Select * from `categories`";
    $result_category = mysqli_query($con, $select_category);
    while($row_data = mysqli_fetch_assoc($result_category)){
        $category_name = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item'>
        <a href= 'index.php?category=$category_id' class='nav-link text-light '>$category_name</a>
        </li>" ;
    }
                    
}
?>