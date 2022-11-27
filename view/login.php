
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    
<div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="../actions/login_action.php" method="POST">
            <div class="main-user-info">
                
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email" required/>
                </div>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required/>
                </div>


                <div class="form-submit-btn">
                    <input type="submit" value="Login" name="submit"/>
                </div>
                
        </form>
    </div>



</body>
</html>