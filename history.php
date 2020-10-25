<?php
    include_once 'validate-auth.php';
    include_once 'accdetail.php';
    if (isSuperuser($_COOKIE['username'])) {
        header('Location: /dashboard.php');
    }
?>

<?php 
    $query = "
    SELECT chocolate.id as chocoID, chocolate.name AS name,  transaction.amount AS amount, total_price, DATE(transaction.time) as date, time(transaction.time) as time, address
    from transaction join chocolate ON transaction.chocolate_id = chocolate.id 
    join user ON transaction.user_id = user.id
    ORDER BY transaction.time;
";
    $connector = new Connector();
    $result = $connector->getAllData($query); 
    $historyItemHTML = '';
    foreach ($result as $row) {
        $dashboardItemHTML .= '
                <tr>
                <td> <a href="/detail.php?itemID=' . $row['chocoID'] . '"> ' . $row['name'] .
                '<td>' . $row['amount'] . '</td>' .
                '<td>' . $row['total_price'] . '</td>' .
                '<td>' . $row['date'] . '</td>' .
                '<td>' . $row['time'] . '</td>' .

                '<td>' . $row['address'] . '</td>' 
                ;

    }

    $connector->close();        
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
        <table border='1'>
        <tr>
            <b>
            <th>Chocolate Name</th>
            <th>Amount</th>
            <th>Total Price</th>
            <th>Date</th>
            <th>Time</th>
            <th>Address</th>
            </b>
        </tr>
        <?php echo $dashboardItemHTML; ?>
        </table>
        <?php include 'get-footer.php';?>
        <script src="/assets/scripts/handle-search.js"></script>
    </body>
</html>