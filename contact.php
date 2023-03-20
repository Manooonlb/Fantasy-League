<?php
require_once('header.php');
?>

<body>
    <?php
    include_once('nav.php');
    ?>
<form>
  <div class="form-outline mb-4">
      <input type="text" id="name" class="" />
      <label for="username">Username</label>
  </div>
  <div class="form-outline mb-4">
      <input type="email" id="email" class="" />
      <label for="email">Votre Email</label>
  </div>
  <div class="form-outline mb-4">
      <input type="text" id="message" class="" />
      <label for="message">Votre message</label>
  </div>

</form>    
      <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
    </form>

    <?php
    include_once('footer.php');
    ?>
</body>