<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap-5.3.3/bootstrap.min.css"/>

    <!-- JS -->
    <script src="../Js/jquery/jquery.min.js" ></script>
    <!-- C:\xampp\htdocs\TP_PWD\Vista\Js\jquery\jquery-3.7.1.slim.min.js -->
     <script src="../Js/jquery/jquery.validate.min.js" ></script>
    <script src="../Js/validacion/validate.js" ></script>


    <title>Login</title>
</head>
<body>
    
<div class="container position-relative">
    <div class="card p-3 text-bg-secondary mx-auto my-2" style="width: 30rem;">
        <div class="card p-3">
            <div class="m-4 ">
                <form action="verificaPass.php" method="post" id="login">
                    <p class="h3 m-4 text-center">Member Login</p>
                    <!-- <span class="input-group-text">@</span> -->
                    <div class="mb-4">
                        <div class=" form-floating">
    
                            <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                            <label for="user">Usuario</label>
                            
    
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Login" class="btn btn-success col-12">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>p