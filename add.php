<?php
    include_once 'validate-auth.php';
    include_once 'accdetail.php';
    if (!isSuperuser($_COOKIE['username'])) {
        header('Location: /dashboard.php');
    }
?>

<!doctype html>
<html>
    <head>
        <title>Add Chocolate - Willy-Wanky</title>
        <link rel="stylesheet" type="text/css" href="/assets/styles/common.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/common-navbar.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/DetailUserAdmin.css">

    </head>
    <body>
        <?php include 'get-header.php';?>
        <div class="thread">
            <div class="opacity-layer clearfix">
                <div class="main-container clearfix">
                    <div class="secondary-container clearfix">
                        <form action="handle-add.php" method="post" enctype="multipart/form-data">
                            <div class = "content-label">
                                <label for="name">Name</label><br><br>
                            </div>
                            <input class = "name-box" type="text" name="name" required><br><br>
                            <div class = "content-label">
                                <label for="price">Price</label><br><br>
                            </div>
                            <input class = "amount-box" type="number" name="price" required min= "0" ><br><br>
                            <div class = "content-label">
                                <label for="description">Description</label><br><br>
                            </div>
                            <textarea class ="description-box" name="description" rows="10" cols="30" required placeholder="Description"></textarea><br><br>
                            <div class="form-row">
                                <div class = "content-label">
                                    <label for="file-input">Choose image</label><br><br>
                                </div>
                                <div>
                                    <input type="file" class="file-input" name="file-input">
                                </div>
                            </div>
                            <br>
                            <div class = "content-label">
                                <label for="amount">Amount</label><br><br>
                            </div>
                            <input class="amount-box" type="number" name="amount" required min ="0"><br>
                            <div id = "insert-row">
                                <div class = "content-label">
                                    <br>
                                    <label for="recipe">Recipe</label><br><br>
                                    <br>
                                    <div class = "content-label">
                                        <label for="recipe">Ingredients Name</label><br><br>
                                    </div>
                                    <input class = "name-box" type="text" name="ingredientsname" required><br><br>
                                    <div class = "content-label">
                                        <label for="amount-ingredients">Ingredients Amount</label><br><br>
                                    </div>
                                    <input class="amount-box" type="number" name="ingredientsamount" required min ="0"><br>
                                </div>
                            </div>
                            <br>
                            <button onclick="insertRow()">Insert New Ingredients</button>
                            <div class ="button-container">
                            <br>
                            <input type="submit" value ="Add Chocolate" name = "upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($response)) { ?>
            <div class="response <?php echo $response["type"]; ?>
                ">
                <?php echo $response["message"]; ?>
            </div>
        <?php }?>
        <script src='/assets/scripts/add.js'></script>

    </body>
</html>
