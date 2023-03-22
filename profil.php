<?php
require_once('header.php');
?>

<body id=profil>
    <?php
    include_once('nav.php');
    ?>
    <main>
        <div class="d-flex justify-content-between">
            <section class="bg-image">
                <img src="assets/arena.jpg" class="w-100" alt="Arène" />
                <div class="mask d-flex" style="background-color: hsla(0, 0%, 0%, 0.6)">
                    <div class="container py-4">
                        <h1 class="h1 text-center" id="pageHeaderTitle"><?= $_SESSION['username'] ?></h1>

                        <article class="postcard dark red">
                            <div class="postcard__img_link">
                                <img class="postcard__img" src="https://mdbcdn.b-cdn.net/img/new/avatars/16.webp" alt="Photo de profil" />
                            </div>
                            <div class="postcard__text">
                                <div>
                                    <?= date('d F Y') ?>
                                </div>
                                <div class="postcard__bar"></div>
                                <h2>REWARDS OBTENUES</h2>
                                <ul class="postcard__tagbox">
                                    <img class="rewardIcon" src="assets/pink_diamond.png">
                                    <li class="tag__item"> 1809 Points de leagues</li>
                                    <img class="rewardIcon" src="assets/money.png">
                                    <li class="tag__item"> <img>480 Golds de victoire</li>
                                </ul>
                                <h2>LEAGUE FAVORITE</h2>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item">LEAGUE OF LEGENDS</li>
                                </ul>
                            </div>
                            <div class="postcard__text">
                                <div class="postcard__bar"></div>
                                <h2>DERNIERS MATCHS</h2>
                                <table class="table table-striped">
                                    <tr>
                                        <th>DATE</th>
                                        <th>LEAGUE</th>
                                        <th>MODE</th>
                                        <th>RANK</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                            // //foreach ($matches as $match) {
                                            //     echo '<td>'. $match->date. '</td>';
                                            // //}
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            // foreach ($matches as $match) {
                                            //     echo '<td>'. $match->league->name. '</td>';
                                            // }
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            // foreach ($matches as $match) {
                                            //     echo '<td>'. $match->mode. '</td>';
                                            // }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            // foreach ($matches as $match) {
                                            //     echo '<td>'. $match->rank. '</td>';
                                            // }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>



    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <?php
    require_once('footer.php');
    ?>

</body>