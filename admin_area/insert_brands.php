<?php
include('../includes/connect.php');

if(isset($_POST['insert_brands'])){
    $brand_title = $_POST['brand_title'];

    // select from database
    $select_query = "Select * from `Brands` where Brand_name = '$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0){
        echo "<script>alert('This Brand name is already present inside database' )</script>";
    }
    else{
        $insert_query = "insert into `Brands` (Brand_name) values ('$brand_title')";
        $result = mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Brand name has been inserted successfully' )</script>";
        }
    }
}
?>


<h2 class ="text-center pb-2">Insert Brands</h2>

<form action =" " method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-primary" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert_Brands" aria-label="Brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-success text-light p-2 my-3 border-0" name = "insert_brands" value="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1" class = "bg-primary">
        <!-- <button class="bg-success text-light p-2 my-3 border-0 ">Insert_Brands</button> -->
    </div>
</form>