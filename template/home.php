
<?php ob_start() ?>
<?php $titre = "Inscription"; ?>

?>
<!-- ligne de boutons Carnet et forum -->
<section class="wrapper">
    <article>
        <div class="titreBoutonCarnet">
            <span>votre</span>
            <h2>CARNET</h2>
            <span>personnel</span>
        </div>

        <ul class="pricing-table-list">
            <li>Multi activités</li>
            <li>Entraînement/Compét'</li>
            <li>Suivi</li>
            <li>...</li>
        </ul>

        <button name="accesCarnet" href="/index.php/login" class="button-choose pure-button button-carnet" >Accès</button>
    </article>

    <article>
        <div class="titreBoutonForum">
            <span>votre</span>
            <h2>FORUM</h2>
            <span>communautaire</span>
        </div>

        <ul class="pricing-table-list">
            <li>Entraide</li>
            <li>Infos</li>
            <li>Compte-Rendus</li>
            <li>Bonnes affaires</li>
        </ul>

        <button name="accesForum" class="button-choose pure-button button-forum" >Accès</button>
    </article>
</section>

<!-- ligne de pavés de textes explicatifs sur Carnet et forum -->
<!-- <section class="wrapper">
    <article>
                    <div class="l-box">
                <h3 class="information-head">Le CARNET en détails</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
    </article>
    <article>
                        <div class="l-box">
                <h3 class="information-head">Le CARNET en détails</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
    </article>
</section> -->


<?php $content = ob_get_clean() ?>
<?php include "layoutBase.php" ?>
