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
    </head>
    <body>
        <?php include 'get-header.php';?>
        <div class="thread">
            <form action="handle-add.php" method="post" enctype="multipart/form-data">
                <label for="name">Name</label><br>
                <input type="text" name="name" required><br>
                <label for="price">Price</label><br>
                <input type="number" name="price" required><br>
                <textarea name="description" rows="10" cols="30" required>Description</textarea><br>
                <h2>PHP Image Upload with Size Type Dimension Validation</h2>
                <div class="form-row">
                    <div>Choose Image file:</div>
                    <div>
                        <input type="file" class="file-input" name="file-input">
                    </div>
                </div>
            
                <label for="amount">Amount</label><br>
                <input type="number" name="amount" required><br>
                <input type="submit" name = "upload">
            </form>
        </div>
        <?php if(!empty($response)) { ?>
            <div class="response <?php echo $response["type"]; ?>
                ">
                <?php echo $response["message"]; ?>
            </div>
            <?php }?>
    </body>
</html>
