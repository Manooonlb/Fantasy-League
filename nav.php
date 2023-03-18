<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <!-- Left links -->
        <?php if (!isset($_SESSION['username'])) { ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a onclick=" lang('fr')" class="nav-link" href="?lang=fr">FR</a>
            </li>
            <li class="nav-item">
                <a onclick="setLanguage('en')" class="nav-link" href="?lang=en">EN</a>
            </li>
        </ul>
        <?php } else { ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><?= TXT_NAV_LEAGUES ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?= TXT_NAV_MY_PROFILE ?></a>
            </li>
        </ul>
        <?php } ?>
    </div>
    </div>
</nav>
<!-- Navbar -->