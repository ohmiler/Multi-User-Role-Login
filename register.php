<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-3">Register Form</h1>
        <hr>
    
        <form action="register_db.php" method="post" class="form-horizontal my-5">

        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-12">
                <input type="text" name="txt_username" class="form-control" required placeholder="Enter username">
            </div>
        </div>
        
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-12">
                <input type="text" name="txt_email" class="form-control" required placeholder="Enter email">
            </div>
        </div>
        
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-12">
            <input type="password" name="txt_password" class="form-control" required placeholder="Enter password">
        </div>

        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">Select Type</label>
            <div class="col-sm-12">
                <select name="txt_role" class="form-control">
                    <option value="" selected="selected">- Select Role -</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 mt-3">
                <input type="submit" name="btn_register" class="btn btn-primary" style="width: 100%;" value="Register">
            </div>
        </div>

        <div class="form-group text-center">
            <div class="col-sm-12 mt-3">
                Already have an account ? 
                <p><a href="index.php">Login</a></p>
            </div>
        </div>

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
</body>
</html>