<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spider</title>
    <?php require_once VIEWS. '/layouts/partials/site/_head.php';?>
</head>
<body>
    <div class="overlay"></div>
    <?php require_once VIEWS. '/layouts/partials/site/_nav.php';?>
    <?php require_once VIEWS. '/layouts/partials/site/_sidebar.php';?>
    <?php require_once VIEWS. '/layouts/partials/site/_wish.php';?>
    <div class="container color">
        <!-- HERO SECTION-->
        
        <?php include_once VIEWS.'/'.$template;?>

    </div>
    <?php require_once VIEWS. '/layouts/partials/site/_footer.php';?>
</body>
<!-- <script src="assets/js/data.js"></script>  -->
<!-- <script src="assets/js/app.js"></script>  -->
<script src="assets/js/main.js"></script> 
</html>