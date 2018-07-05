<div class="profil">
    <h2>Évaluation de la séance <?php echo $infos['NomU'].' '. $infos['PrenomU']; ?></h2>

    <?php
    // var_dump($infos);
    $attributes = array('class' => 'form-horizontal', 'id' => 'login', 'method'=> 'POST');
    echo form_open('user/evaluation', $attributes);
    ?>
    <div class="row">
        <div class="col-md-3">Ressenti</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="sex">Ressenti</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <ul>
                        <li>Trop facile</li>
                        <li>Facile</li>
                        <li>Correct</li>
                        <li>Difficile</li>
                        <li>Trop difficile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Difficulté</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="difficulte">Difficulté</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <textarea id="difficulté" placeholder="Quelles ont été vos difficultés durant la séance?"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Avis</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="avis">Avis</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <textarea id="avis" placeholder="Quel avis avez vous sur la séance et sur le coach?"></textarea>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" id="modif">Validez les infos</button>

    <?php
    echo form_close();
    ?>
</div>
