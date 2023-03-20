<?php
require_once('header.php');
?>

<body>
    <?php
    include_once('nav.php');
    ?>
    <style>
    form {
        color: lightblue;
    }
    </style>
    <form action="thanks.php" method="post">
        <div class="row">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <!-- Name input -->
                <div class="form-outline">
                    <input type="text" id="username" class="form-control" name="username" />
                    <label class="form-label" for="username">Username</label>
                </div>

                <!-- Email input -->
                <div class="form-outline">
                    <input type="email" id="email" class="form-control" name="email" />
                    <label class="form-label" for="email">Email address</label>
                </div>
                <div>
                    <label class="form-outline" for="sujet" name="sujet">Sujet :</label>
                    <select id="sujet" name="Sujet">
                        <option value="leagues"><?= TXT_FOOTER_LEAGUES ?></option>
                        <option value="matchup"><?= TXT_FOOTER_MATCHUP ?></option>
                        <option value="rewards"><?= TXT_FOOTER_REWARDS ?></option>
                    </select>
                </div>
                <div class="form-outline">
                    <input type="text" id="message" class="form-control" name="message" />
                    <label for="message">Your message</label>
                </div>

                <!-- Checkbox -->
                <div class="">
                    <input class="form-check-input" type="checkbox" value="" id="form5Example3" name="terms" checked />
                    <label class="form-check-label" for="form5Example3">
                        I have read and agree to the terms
                    </label>
                </div>
            </div>
        </div>
        <!-- Submit button -->

        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
    </form>


    <?php
    include_once('footer.php');
    ?>
</body>