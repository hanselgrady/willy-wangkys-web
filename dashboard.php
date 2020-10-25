<?php 
    include_once 'validate-auth.php'; 
    include_once 'connector.php';    

    $query = "
        SELECT chocolate.id AS chocoID, name, price, image,
            COALESCE(SUM(transaction.amount), 0) AS amountSold
        FROM chocolate LEFT OUTER JOIN transaction
        ON transaction.chocolate_id = chocolate.id
        GROUP BY chocoID
        ORDER BY amountSold DESC
        LIMIT 10
    ";
    $connector = new Connector();
    $data = $connector->getAllData($query);

    $dashboardItemHTML = '';
    foreach ($data as $row) {
        $dashboardItemHTML .= '
                 <a href="/detail.php?itemID=' . $row['chocoID'] . '" class="dashboard-card-container">
                    <div class="dashboard-card">
                        <div class="dashboard-card-image"style="background-image: url(\'/image/' . 
                            $row['image'] .'\')"></div>
                        <div class="dashboard-card-text">
                            <h2>' . $row['name'] . '</h2>
                            <p>Sold: ' . $row['amountSold'] . '</p>
                            <p>Rp' . $row['price'] . '</p>
                        </div>
                    </div>
                </a>';
    }

    $username = $_COOKIE['username'];

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
            <div class="clearfix">
                <div class="dashboard-welcome">
                    <span>Welcome, <?php echo $username; ?></span>
                </div>
                <div class="dashboard-list-all">
                    <span><a href="/search.php?key=#page=1">View all products</a></span>
                </div>
            </div>
            <h1>Top Selling</h1>
            <div class="dashboard-listing-container">
                <?php echo $dashboardItemHTML; ?>
            </div>
        </div>
        <?php include 'get-footer.php';?>
    </body>
</html>
