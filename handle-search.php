<?php include 'connector.php';

    if (isset($_GET['key']) && isset($_GET['pageNum']) && isset($_GET['maxItemPerPage'])) {
        $query1 = "SELECT count(*) AS searchCount FROM chocolate WHERE name LIKE '%" .  $_GET['key'] . "%'";
        $query2 = "
            WITH x AS (
                SELECT chocolate.id AS chocoID, name, price, image, description, chocolate.amount AS amount,
                    COALESCE(SUM(transaction.amount), 0) AS amountSold
                FROM chocolate LEFT OUTER JOIN transaction
                ON transaction.chocolate_id = chocolate.id
                WHERE name LIKE '%" .  $_GET['key'] . "%' 
                GROUP BY chocoID
                ORDER BY name ASC LIMIT " . ($_GET['pageNum'] * $_GET['maxItemPerPage']) .
            "), y AS (
                SELECT * FROM x ORDER BY name DESC LIMIT " . ($_GET['maxItemPerPage']) .
                ") SELECT * FROM y ORDER BY name ASC
        ";
        $connector = new Connector();
        $result1 = $connector->getAllData($query1);
        $result2 = $connector->getAllData($query2);
        if (count($result1) > 0) {
            echo json_encode(array('searchCount' => $result1['0']['searchCount'], 'items' => $result2));
        }
        $connector->close();
    }

?>
