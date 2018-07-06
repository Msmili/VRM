<?php
// var_dump($infos);
$attributes = array('class' => 'form-horizontal', 'id' => 'login', 'method'=> 'POST');
echo form_open('user/inscription', $attributes);
?>
    <div class="row">
        <div class="col-md-3">Nom</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="nom">Nom</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre Nom">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Prenom</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="prenom">Prenom</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre Prenom">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Sexe</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="sex">Sexe</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <?php
                        echo '<input type="radio" name="sex" value="F">F&nbsp;';
                        echo '<input type="radio" name="sex" value="M">M';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Date de naissance</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="naiss">Date de naissance</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="naiss" class="form-control" id="naiss" placeholder="Votre date de naissance">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Email</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="email">Login</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Votre E-mail">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Mot de passe</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="pass">Mot de passe</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Votre mot de passe">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Telephone</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="tel">Telephone</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="Votre telephone">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Adresse</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="adr">Adresse</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="adr" class="form-control" id="adr" placeholder="Votre adresse">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Ville</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="ville">Ville</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="ville" class="form-control" id="ville" placeholder="Votre ville">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Code postal</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="cp">Code postal</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="cp" class="form-control" id="cp" placeholder="Votre code postale">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Poids</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="poids">Poids</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="poids" class="form-control" id="poids" placeholder="Votre poids">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Taille</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="taille">Taille</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="text" name="taille" class="form-control" id="taille" placeholder="Votre taille">
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" id="inscription">Validez</button>

<?php
echo form_close();
?>