<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login and registration</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="main">
        <h1 style="text-align:center">Wedding Hall Booking System</h1>
    </div>
   
    <div class="login-box">
   
        <div class="row">  
        
            <div class="column1">
                <h2>Login Here</h2>

                <form action="validation.php" method="post">

                    
                    <div class="form-group my-4">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>


                    <div class="form-group my-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>


                   
                    <br>

                    <button type="submit" class="btn btn-primary">Login</button>
                    
                </form>
            </div>  
            
            <div class="column2">
               <h2>Register Here</h2>

                <form action="registration.php" method="post">

                    <div class="form-group my-4">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>

                    <div class="form-group my-4">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>

                    
                   

                    <div class="form-group my-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary" required >Register</button>
                    
                </form>
            </div> 
    
        </div>
    </div>
</body>
</html>
