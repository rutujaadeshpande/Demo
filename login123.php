<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">

            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">

                <div class="form-group my-4">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>


                    <div class="form-group my-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>


                   
                    <br>

                    <button type="submit" class="btn btn-primary">Login</button>
                    

                
                </form>
            </div>




            <div class="col-md-6  login-left">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">

                <div class="form-group my-4">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>


                    <div class="form-group my-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>


                   
                    <br>

                    <button type="submit" class="btn btn-primary">Register</button>
                    

                
                </form>
            </div>

        </div>

        </div>
    </div>
    
</body>
</html>