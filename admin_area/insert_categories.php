<?php
include('../includes/connect.php');

if(isset($_POST['insert_categories'])){
    $category_title = $_POST['cat_title'];

    // select data from database
    $select_query = "Select * from `categories` where category_title='$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0){
        echo "<script>alert('This Category is present inside database' )</script>";
    }
    else{
        $insert_query = "insert into `categories` (category_title) values ('$category_title')";
        $result = mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Category has been inserted successfully' )</script>";
        }
    }
    
}
?>

<h2 class ="text-center pb-2">Insert Categories</h2>
<form action =" " method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-primary" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert_Categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-success text-light p-2 my-3 border-0" name = "insert_categories" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1" class = "bg-primary">
        <!-- <button class="bg-success text-light p-2 my-3 border-0 ">Insert_Categories</button> -->
    </div>
</form>