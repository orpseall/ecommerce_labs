<?php
include('../controllers/admin_cat_controller.php');

$category_id = $_GET['cat_id'];

$category = viewOneCategory_ctr($category_id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand</title>
    <link rel="stylesheet" href="../css/admin.css">  
</head>

<body>

    
    <div class="container">
        <div class="admin-product-form-container">

            <form action = "../actions/editCategory_action.php" method="post">
                <h3>Edit category</h3>
                <input type="text" placeholder="category name" name="cat_name" value ="<?php echo $category['cat_name']?>'" class="box" required/>
                <input type="submit" class="btn" name="editcat" value="Edit">
            </form>
            
        </div>
    </div>
    


    
    
</body>
</html>