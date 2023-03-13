<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time();?>">
    <title>sr-gaming</title>
</head>
<?php
include "includes/header_menu.php";
require "includes/common.php";
?>

<body>
    
    <div class="main-container">
        <div class="esportssection">
            <div class="headingesports">
                <h2>Esports and Gaming</h2>
            </div>
            <?php 
                $sql= "SELECT * from blog";
                $query = mysqli_query($con,$sql);
                if (mysqli_num_rows($query) > 0){
            ?>
            <?php
                    while ($row = mysqli_fetch_array($query)) {
                        $blogimage = $row['blogimage'];
                        $blogdesc = $row['blogquestion'];
            ?>
            <div class="blog-container">
                <div class="imagecontainer">         
                    <img src="./images/<?php echo $blogimage?>" alt="">
                </div>
                <div class="content-blog">
                    <h3><a href="" class="aref"><?php echo $blogdesc?></a></h3>  
                    <div class="lcs">
                        <a href="" class="mocb"><i class="fa-sharp fa-regular fa-thumbs-up"></i> Like</a>
                        <a href="" class="mocb"><i class="fa-sharp fa-regular fa-comment"></i> Comment</a>
                        <a href="" class="mocb"><i class="fa-sharp fa-solid fa-share"></i> Share</a>
                    </div> 
                </div>
            </div>
            <?php 
                      }
                }else{
                    echo "<p>Enter Something</p>";
                }
            ?> 
            
        </div>
        <div class="borderp advertisment">

        </div>
    </div>
    <p></p>
</body>

</html>