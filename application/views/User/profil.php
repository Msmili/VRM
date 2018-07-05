<div class="profil">
    <h2>Bienvenue <?php echo $infos['NomU'].' '. $infos['PrenomU']; ?></h2>

    <?php
   // var_dump($infos);
    $attributes = array('class' => 'form-horizontal', 'id' => 'login', 'method'=> 'POST');
    echo form_open('user/modification', $attributes);
    ?>
        <div class="row">
            <div class="col-md-3">Sexe</div>
            <div class="col-md-6">
                <div class="form-group has-danger field">
                    <label class="sr-only" for="sex">Sexe</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="text" name="sex" class="form-control" id="sex" placeholder="<?php echo $infos['SexeU']; ?>">
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
                    <input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $infos['EmailU']; ?>">
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
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Mot de passe">
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
                    <input type="text" name="tel" class="form-control" id="tel" placeholder="<?php echo $infos['TelephoneU']; ?>">
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
                    <input type="text" name="adr" class="form-control" id="adr" placeholder="<?php echo $infos['AdresseU']; ?>">
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
                    <input type="text" name="ville" class="form-control" id="ville" placeholder="<?php echo $infos['VilleU']; ?>">
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
                    <input type="text" name="cp" class="form-control" id="cp" placeholder="<?php echo $infos['CodePostalU']; ?>">
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
                    <input type="text" name="poids" class="form-control" id="poids" placeholder="<?php echo $infos['PoidsU']; ?>">
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" id="modif">Validez les infos</button>

    <?php
    echo form_close();
    ?>
</div>