<?php
include __DIR__ . '/partials/database8.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        $banners = [];
        foreach ($ads as $ad){
            ($ad["is_active"]) ? $banners[] =  $ad : null;
        }
        $randomNumber = count($banners) - 1;
        $i = rand(0, $randomNumber);
        $banner = $banners[$i];
        
            echo '<a href="' .$banners[$i]["link"] .'"><img src="' . $banners[$i]["image_path"] . '"></a>'
        ?>   
    </div>
</body>
</html>