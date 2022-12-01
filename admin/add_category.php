<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <div class="container">
        <div class="admin-product-form-container">

            <form action = "../actions/addCategory_action.php" method="get">
                <h3>Add new category</h3>
                <input type="text" placeholder="enter category name" name="category_name" class="box">
                <input type="submit" class="btn" name="submit" value="ADD">
            </form>
            
        </div>
    </div>
    
</body>
</html>