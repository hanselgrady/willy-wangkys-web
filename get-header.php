<?php
    include_once 'accdetail.php';

    /* function isSuperuser($username) { */
        
    /*     $su = False; */
    /*     $query = "SELECT superuser from user where username='" . $username . "'"; */
    /*     $connector = new Connector(); */
    /*     $result = $connector->getAllData($query); */
    /*     if (count($result) > 0) { */
    /*         if ($result[0]['superuser'] == '1' || $result[0]['superuser'] == 1) { */
    /*             $su = True; */
    /*         } */
    /*     } */ 
    /*     $connector->close(); */
    /*     return $su; */
            
    /* } */
echo '
        <div class="header">
            <ul class="navbar menu-left">
                <li><a href="/dashboard.php" id="wwc-title">Willy Wanky Choco Factory</a></li>';
if (isset($_COOKIE['username']) && isSuperuser($_COOKIE['username'])) {
    echo '
                <li><a href="/add.php">Tambah Coklat</a></li>';
} else {
    echo '
                <li><a href="#">Transaksi</a></li>';
}
echo '
            </ul>
            <ul class="navbar menu-right">
                <li><a href="/logout.php">Logout</a></li>
            </ul>
            <form action="search.php" method="GET">
                <input class="searchbox" type="text" name="key" placeholder="Search tasty choco..."></input>
            </form>
        </div>
'
?>
