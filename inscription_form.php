<!-- <div class="l-content">
    <div class="containerBouton pricing-tables pure-g">
        <div class="containerBloc pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free"> -->



            <form id="inscription" method="POST" class="pure-form pure-form-aligned"  action="/index.php/inscription_post">



                <div>

                    <legend>Inscription</legend> 



                    <p>
<!--                         <label for="password">password</label> -->
                        <input type="text" name="nom" placeholder="Nom">
                    </p>

                    <p>
<!--                         <label for="password">password</label> -->
                        <input type="text" name="prenom" placeholder="Prenom">
                    </p>

                    <p>
<!--                     <p><label for="login">Login</label></p> -->
                        <input type="email" name="email" placeholder="email">
                    </p>
                    <p>
                        <input type="text" placeholder="<?php $_SESSION['erreur']['inscription'] ?>" disabled>
                    </p>
                </div>


                <div>

                    <p>
<!--                     <p><label for="login">Login</label></p> -->
                        <input type="email" name="email" placeholder="email">
                    </p>

                    <p>
<!--                         <label for="password">password</label> -->
                        <input type="password" name="password" placeholder="password">
                    </p>

                    <p>
<!--                         <label for="password">password</label> -->
                        <input type="password" name="passwordConfirm" placeholder="Confirmer le password">
                    </p>
                        

                    <p>
                        <button type="submit" name ="Inscription" class="pure-button pure-button-primary buttonGo">Inscription</button>
                    </p>
                </div>

            </form>


<!--             </div>
        </div> -->