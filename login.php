<img class="py-3" src="assets\fantasyLeague2_trans.png" style="width: 50%;" alt="<?=TXT_LOGO_ALT?>">

<?php
if (!isset($_REQUEST['how'])) { ?>
    <form class="container">
        <input type="submit" value="<?=TXT_CONNECTION_TWITCH?>" class="btn btn-warning btn-twitch">
    </form>
    <form class="container">
        <input type="submit" value="<?=TXT_CONNECTION_GOOGLE?>" class="btn btn-danger">
    </form>
    <form action="?how=email" method="post" class="container">
        <button type="submit" name="login" value="false" class="btn btn-primary"><?=TXT_CONNECTION_MAIL?></button>
    </form>
<?php } elseif($_REQUEST['how'] == 'email') { ?>
    <form action="index.php" method="post" class="container">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="userEmail" class="form-control" />
        <label class="form-label" for="userEmail"><?=TXT_USER_EMAIL?></label>
      </div>
    
      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" name="username" class="form-control" />
        <label class="form-label" for="username"><?=TXT_USER_USERNAME?></label>
      </div>

      <!-- Favorite game input -->
      <div class="form-outline mb-4">
        <input type="text" name="favoriteGame" class="form-control" />
        <label class="form-label" for="favoriteGame"><?=TXT_USER_FAVE_GAME?></label>
      </div>
    
      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="form1Example3"
              checked
            />
            <label class="form-check-label" for="form1Example3">
              <?=TXT_USER_REMEMBER_ME?>
            </label>
          </div>
        </div>
    
        <div class="col">
          <!-- Simple link -->
          <a href="#!"><?=TXT_USER_FORGOT_PASSWORD?></a>
        </div>
      </div>
    
      <!-- Submit button -->
      <button type="submit" name="login" value="true" class="btn btn-primary btn-block"><?=TXT_USER_SIGN_IN?></button>
    </form>
<?php } ?>

<div>
    <p><?=TXT_NOT_SIGNED_UP_YET?> <a href="inscription.php"><?=TXT_THIS_WAY?></a></p>
</div>

