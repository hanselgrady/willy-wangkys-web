<?php include_once 'connector.php';

    function isSuperuser($username) {
        
        $su = False;
        $query = "SELECT superuser from user where username='" . $username . "'";
        $connector = new Connector();
        $result = $connector->getAllData($query);
        if (count($result) > 0) {
            if ($result[0]['superuser'] == '1' || $result[0]['superuser'] == 1) {
                $su = True;
            }
        } 
        $connector->close();
        return $su;
    }

?>
