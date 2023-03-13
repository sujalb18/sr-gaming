<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>

<body>
    <?php
    include "includes/header_menu.php"
        ?>
    <?php if (isset($_GET['error'])) {
        echo "<span class='text-danger'>" . $_GET['error'] . "</span> <script> alert('Please Enter Correct Email and Password');</script>";
    } ?>
    <div class="authenticationform w-50  ">
    <div class="d-flex justify-content-center">
        <img src="https://cdn.pixabay.com/photo/2016/12/23/07/00/game-1926906__340.png" width="200px" alt="">
    </div>
    <form action="login_script.php" method="post">
        <div class="w-50 m-auto d-flex flex-column align-items-center">
            <div class="mb-3 mt-5 w-100">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control w-100" id="exampleFormControlInput1" name="email" placeholder="someone@example.com">
            </div>

            <div class="mb-3 w-100">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control w-100" id="password">
            </div>

            <div class="mb-3 w-100 d-flex justify-content-center">
                <button class="btn btn-warning text-white w-100">Login</button>
                

            </div>

            <div class="mb-3 w-100">
                <a href="signup.php">Didn't have an account?Sign Up</a>
            </div>

        </div>
    </form>
    </div>
</body>


</html>