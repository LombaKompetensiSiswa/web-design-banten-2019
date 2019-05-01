<nav class="header home">
    <a href="/01" class="nav-brand"><img src="public/img/bantenlogo.png" class="logo" alt="LOGO"></a>
    <ul class="navbar-nav">
        <li class="nav-item <?php echo(!empty($_SESSION['status'])?'hide':'') ?>">
            <a href="?page=login" class="nav-link">Login</a>
        </li>
        <li class="nav-item <?php echo(empty($_SESSION['status'])?'hide':'') ?>">
            <a href="?page=logout" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
            <a href="?page=operator" class="nav-link">Operator</a>
        </li>
        <li class="nav-item">
            <a href="?page=partai" class="nav-link">Partai</a>
        </li>
        <li class="nav-item">
            <a href="?page=saksi" class="nav-link">Saksi</a>
        </li>
        <li class="nav-item">
            <a href="?page=news-edit" class="nav-link">Add News</a>
        </li>
    </ul>
</nav>