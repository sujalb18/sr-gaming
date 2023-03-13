<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include "includes/header_menu.php";
    require "includes/common.php";
    ?>

    <?php
    if(isset($_POST['blogdesc'])){
        $blogimage = $_POST['blogimg'];
        $blogdesc = $_POST['blogdesc'];
        $sql = "INSERT into `blog` value ('$blogimage','$blogdesc')";
        $result = mysqli_query($con , $sql);
    }
    ?>

    <form action="" method="post">
        <div class="mb-3 mx-5">
            <label for="formFile" class="form-label">Blog Photo</label>
            <input class="form-control w-50" type="file" name="blogimg" id="formFile">
        </div>
        <div class="mb-3 mx-5">
            <label for="exampleFormControlTextarea1" class="form-label">Question</label>
            <textarea class="form-control w-50" id="exampleFormControlTextarea1" name="blogdesc" rows="3"></textarea>
        </div>
        <button class="btn btn-primary mx-5" name='submit'>Submit</button>
    </form>
</body>

</html>