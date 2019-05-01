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
            <a href="?page=news" class="nav-link">News</a>
        </li>
        <li class="nav-item">
            <a href="?page=suara" class="nav-link">Suara</a>
        </li>
    </ul>
</nav>