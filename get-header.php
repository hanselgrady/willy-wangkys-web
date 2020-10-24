<?php
echo '
        <div class="header">
            <ul class="navbar menu-left">
                <li><a href="/dashboard.php" id="wwc-title">Willy Wanky Choco Factory</a></li>
                <li><a href="#">Transaksi</a></li>
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
