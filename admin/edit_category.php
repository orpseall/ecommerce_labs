<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="../css/admin.css">

    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>      
    .table-container{
    padding: 0 10%;
    margin: 40px auto 0;
}
.table{
    width: 100%;
    border-collapse: collapse;

}

.table thead{
    background-color: #d10000;
}

.table thead tr th{
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.35px;
    color: #ffff;
    opacity: 1;
    padding: 12px;
    vertical-align: top;
    border: 1px solid #dee2e685;
}

.table tbody tr td{
    font-size: 14px;
    letter-spacing: 0.35px;
    font-weight: normal;
    padding: 8px;
    text-align: center;
    border: 1px solid #dee2e685;
}

.table tbody tr td .bttn{
    width: 130px;
    text-decoration: none;
    line-height: 35px;
    display: inline-block;
    background-color: #1663be;
    font-weight: medium;
    color: #ffff;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    font-size: 14px;
    opacity: 1;
}
    </style>

<?php include '../controllers/admin_controller.php';?>
</head>

<body>
    
    
<!-- ----------------------display categories------------------ -->
    <div class="table-container">
        <a href="../index.php">
            <button type="submit" class="btn btn-primary">Home</button>
        </a>

        <br>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category-Name</th>
                    <th>#</th>

                </tr>
            </thead>
            <tbody>
                <?php
               $categories =selectAllCategory_ctr();

               if($categories){
                foreach((array)$categories as $acategory){
                    $cat_id = $acategory['cat_id'];
                    $cat_name = $acategory['cat_name'];

                    echo"
                        <tr>
                            <td>$cat_id</td>
                            <td>$cat_name</td>
                            <td>
                                <a href='../view/edit_category.php' class= 'btn btn-primary'>Edit</a>
                            </td>
                            
                        </tr>
                    ";
                    
                }
               }
                

            

                ?>
                
            </tbody>
        </table>
    </div>
    
</body>
</html>