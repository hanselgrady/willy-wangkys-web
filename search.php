<?php
    include_once 'connector.php';
    include_once 'validate-auth.php';

    $skey = "";
    if (isset($_GET['key'])) {
        $skey = $_GET['key'];
    }
?>

<!doctype html>
<html>
    <head>
        <title>Search Result - Willy-Wanky</title>
        <link rel="stylesheet" type="text/css" href="/assets/styles/common.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/common-navbar.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/common-search.css">
    </head>
    <body>
        <?php include 'get-header.php';?>
        <div class="thread">
            <h1>Search result for: <?php echo $skey; ?></h1>
            <p id="search-count"></p>
            <div class="pagination-centering">
                <div class="pagination">
                </div>
            </div>
            <div class="search-listing-container" id="search-results">
            </div>
            <div class="pagination-centering">
                <div class="pagination">
                </div>
            </div>
        </div>
        <?php include 'get-footer.php';?>
        <script src="/assets/scripts/handle-search.js"></script>
    </body>
</html>
