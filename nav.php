<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <!-- Left links -->
        <?php //if (!isset($_SESSION['username'])) { 
    ?>
        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a onclick=" lang('fr')" class="nav-link" href="?lang=fr">FR</a>
            </li>
            <li class="nav-item">
                <a onclick="setLanguage('en')" class="nav-link" href="?lang=en">EN</a>
            </li>
        </ul> -->
        <?php //}
    //else { 
    ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a onclick=" lang('fr')" class="nav-link" href="?lang=fr">FR</a>
                </li>
                <li class="nav-item">
                    <a onclick="setLanguage('en')" class="nav-link" href="?lang=en">EN</a>
                </li>
            </ul>

            <!-- Right elements -->


            <li class="nav-item">
                <a class="nav-link" href="#"><?= TXT_NAV_LEAGUES ?></a>
            </li>

            <!-- a modif -->
            <div class="dropdown">
                <a class="text-reset me-3  " href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <li class="nav-link dropdown-toggle" href="#"><?= TXT_NAV_MY_PROFILE ?></li>

                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                    <li>
                        <a class="dropdown-item" href="#"><?= TXT_NAV_MY_LEAGUES ?></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><?= TXT_NAV_MY_STATS ?></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><?= TXT_NAV_MY_REWARDS ?></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><?= TXT_NAV_MY_FRIENDS ?></a>
                    </li>

                </ul>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#"><?= TXT_NAV_LOGOUT ?>
            </li></a>
        </ul>
        <?php //}
    ?>
    </div>

</nav>
<!-- Navbar -->