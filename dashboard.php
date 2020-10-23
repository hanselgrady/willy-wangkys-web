<?php include 'connector.php';    

    $query = "SELECT * FROM chocolate limit 10";
    $connector = new Connector();
    $data = $connector->getAllData($query);

    $dashboardItemHTML = '';
    foreach ($data as $row) {
        $dashboardItemHTML .= '
                 <a href="#c" class="dashboard-card-container">
                    <div class="dashboard-card">
                        <div class="dashboard-card-image"></div>
                        <div class="dashboard-card-text">
                            <h2>' . $row['name'] . '</h2>
                            <p>Rp' . $row['price'] . '</p>
                        </div>
                    </div>
                </a>';
    }

?>

<!doctype html>
<html>
    <head>
        <title>Dasboard - Willy-Wanky</title>
        <link rel="stylesheet" type="text/css" href="/assets/styles/common.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/common-navbar.css">
    </head>
    <body>
        <?php include 'get-header.php';?>
        <div class="thread">
            <h1>Produk Terlaris</h1>
            <p>Content</p>
            <div class="dashboard-listing-container">
                <?php echo $dashboardItemHTML; ?>
            </div>
        </div>
        <?php include 'get-footer.php';?>
    </body>
</html>
