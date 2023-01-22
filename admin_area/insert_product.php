<?php
include('../includes/connect.php');

if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyboard = $_POST['product_keyboard'];
    $product_categories = $_POST['product_categories'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // accessing image
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accessing image temp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // checming empty condition

    if($product_title=='' or $product_description=='' or $product_keyboard=='' or $product_categories=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2 =='' or $product_image3==''){
        echo"<script>alert('Please fill the all avaiable fields')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // insert the products
        $insert_products = "insert into `products` (Product_title,Product_description,Product_keywords,category_id,brand_id,Product_image1,Product_image2,Product_image3,Product_price,date,status) values('$product_title','$product_description','$product_keyboard','$product_categories','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con,$insert_products);
        if($result_query){
            echo"<script>alert('Succesfully inserted the Products')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_Products-Admin DashBoard</title>
    <link rel="stylesheet" href="../index.css">
    <!-- Bootstrap Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONT AWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class ="bg-light">
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Product Title" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyboard" class="form-label">Product Keyboard</label>
                <input type="text" name="product_keyboard" id="product_keyboard" class="form-control" placeholder="Product Keyboard" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <select name = "product_categories" id = "product_categories" class="form-select">
                    <option value="">Select a category</option>
                    <?php
                    $select_category = "Select * from `categories`";
                    $result_category = mysqli_query($con,$select_category);
                    while($row_data = mysqli_fetch_assoc($result_category)){
                        $category_name = $row_data['category_title'];
                        $category_id = $row_data['category_id'];
                        echo "<option value='$category_id'>$category_name</option>";
                    }
                    ?>
                    <!-- <option value="">Fruits</option>
                    <option value="">Vegetables</option>
                    <option value="">Dairy</option>
                    <option value="">Books</option>
                    <option value="">Shoes</option>
                    <option value="">Laptop</option> -->
                </select> 
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <select name = "product_brands" id = "product_brands" class="form-select">
                    <option value="">Select a brands</option>
                    <?php
                    $select_query = "Select * from `Brands`";
                    $result_query = mysqli_query($con,$select_query);
                    while($row_data = mysqli_fetch_assoc($result_query)){
                        $brand_name = $row_data['Brand_name'];
                        $brand_id = $row_data['Brand_id'];
                        echo "<option value='$brand_id'>$brand_name</option>";
                    }
                    ?>
                </select> 
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="Product Image 1" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="Product Image 2" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" placeholder="Product Image 3" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" id="insert_product" class="btn btn-success mb-3 px-3" value = "Insert Products">
            </div>
            
        </form>
        
    </div>
    
 <!-- Bootstrap Script link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>