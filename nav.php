<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <div class="container">
        <!-- Left links -->
        <?php if (!isset($_SESSION['username'])) {
        ?>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a onclick=" lang('fr')" class="nav-link" href="?lang=fr">FR</a>
                </li>
                <li class="nav-item">
                    <a onclick="setLanguage('en')" class="nav-link" href="?lang=en">EN</a>
                </li>
            </ul>
        <?php } else {
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

                <div class="container justify-content-center">
                    <img class="py-3 w-25" src="assets\fantasyLeague2_trans.png" alt="<?= TXT_LOGO_ALT ?>" />
                </div>

                <!-- Right elements -->
                <div class="">

                    <!-- Notifications -->
                    <img src="assets/pink_diamond.png" height="25">
                    <span class="badge">1524</span>
                    <img src="assets/money.png" height="25">
                    <span class="badge">80</span>

                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
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

            </ul>
    </div>
    </div>

    <div class="">
        <li class="nav-item">
            <a class="nav-link" href="#"><?= TXT_NAV_LEAGUES ?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><?= TXT_NAV_LOGOUT ?>
        </li></a>

    </div>

<?php } ?>
</div>
</nav>