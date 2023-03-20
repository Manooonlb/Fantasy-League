<!-- Navbar -->
<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container navbar-nav">
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
      <?php }
      else { ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><?=TXT_NAV_LEAGUES?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?=TXT_NAV_MY_PROFILE?></a>
        </li>
      </ul>
      <?php }?>
    </div>
  </div>

  <div class="container justify-content-center">
      <img class="py-3 w-25" src="assets\fantasyLeague2_trans.png" alt="<?=TXT_LOGO_ALT?>"/>
  </div>
  <div class="container">
      <!-- Left links -->
      <?php if (!isset($_SESSION['username'])) { ?>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a onclick=" lang('fr')" class="nav-link" href="?lang=fr">FR</a>
        </li>
        <li class="nav-item">
          <a onclick="setLanguage('en')" class="nav-link" href="?lang=en">EN</a>
        </li>
      </ul>
      <?php }
      else { ?>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><?=TXT_NAV_LEAGUES?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?=TXT_NAV_MY_PROFILE?></a>
        </li>
      </ul>
      <?php }?>
    </div>
  </div>
</nav>
<!-- Navbar -->