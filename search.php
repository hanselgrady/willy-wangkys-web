<?php
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
            <h1>Pencarian untuk: <?php echo $skey; ?></h1>
            <p id="search-count"></p>
            <div class="pagination-centering">
                <div class="pagination">
                    <a href="#" id="page-l">&laquo</a>
                    <a href="#" id="page-i1">1</a>
                    <a href="#" id="page-i2">2</a>
                    <a href="#" id="page-i3">3</a>
                    <a href="#" id="page-i4">4</a>
                    <a href="#" id="page-i5">5</a>
                    <a href="#" id="page-r">&raquo</a>
                </div>
            </div>
            <div class="search-listing-container" id="search-results">
                <a href="#c" class="search-card-container">
                    <div class="search-card">
                        <div class="search-card-image"></div>
                        <div class="search-card-text">
                            <h2>Product Card</h2>
                            <p>Description</p>
                        </div>
                    </div>
                </a>
                <a href="#c" class="search-card-container">
                    <div class="search-card">
                        <div class="search-card-image"></div>
                        <div class="search-card-text">
                            <h2>Product Card</h2>
                            <p>Descriptions
                                Chocolate is a preparation of roasted and ground cacao seeds that is made in the form of a liquid, paste, or in a block, which may also be used as a flavoring ingredient in other foods. The earliest signs of use are associated with Olmec sites (within what would become Mexico’s post-colonial territory) suggesting consumption of chocolate beverages, dating from 19 centuries BCE. The majority of Mesoamerican people made chocolate beverages, including the Maya and Aztecs. The word chocolate is derived from the Spanish word chocolate, deriving in turn from the Classical Nahuatl word xocolātl.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#c" class="search-card-container">
                    <div class="search-card">
                        <div class="search-card-image"></div>
                        <div class="search-card-text">
                            <h2>Product Card</h2>
                            <p>Description</p>
                        </div>
                    </div>
                </a>
                <a href="#c" class="search-card-container">
                    <div class="search-card">
                        <div class="search-card-image"></div>
                        <div class="search-card-text">
                            <h2>Product Card</h2>
                            <p>Description</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="pagination-centering">
                <div class="pagination">
                    <a href="#page=1" id="page-l">&laquo</a>
                    <a href="#page=2" id="page-i1">1</a>
                    <a href="#page=3" id="page-i2">2</a>
                    <a href="#page=4" id="page-i3">3</a>
                    <a href="#page=5" id="page-i4">4</a>
                    <a href="#page=6" id="page-i5">5</a>
                    <a href="#page=7" id="page-r">&raquo</a>
                </div>
            </div>
        </div>
        <?php include 'get-footer.php';?>
        <script src="/assets/scripts/handle-search.js"></script>
    </body>
</html>
