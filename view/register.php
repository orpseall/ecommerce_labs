
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href= "../css/register.css" />
    
</head>
<body>
    
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="../actions/register_action.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name" required/>
                </div><br>
                
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email" required/>
                </div><br>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create Password" required/>
                </div><br>

                <div class="user-input-box">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" placeholder="Country"/>
                </div><br>

                <div class="user-input-box">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City"/>
                </div><br>

                <div class="user-input-box">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="contact" placeholder="Enter Phone Number" required/>
                </div><br>

                <div class="form-submit-btn">
                    <input type="submit" value="Register" name="submit"/>
                </div><br>
                
                
                </div class="after-btn">
                
                </div>
        </form>
    </div>


</body>
</html>