<div class="profil">
    <h2>Évaluation de la séance <?php echo $infos['NomU'].' '. $infos['PrenomU']; ?></h2>

    <?php
    // var_dump($infos);
    $attributes = array('class' => 'form-horizontal', 'id' => 'login', 'method'=> 'POST');
    echo form_open('user/add_eval', $attributes);
    ?>
    <div class="row">
        <div class="col-md-3">Ressenti</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="sex">Ressenti</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <select name="ressenti">
                        <option value="Trop facile">Trop facile</option>
                        <option value="Facile">Facile</option>
                        <option value="Correct">Correct</option>
                        <option value="Difficile">Difficile</option>
                        <option value="Trop difficile">Trop difficile</option>
                    </select>
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
                    <textarea name="difficulte" id="difficulté" placeholder="Quelles ont été vos difficultés durant la séance?"></textarea>
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
                    <textarea name="avis" id="avis" placeholder="Quel avis avez vous sur la séance et sur le coach?"></textarea>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $infos['IdE']; ?>"/>
    <button type="submit" class="btn btn-primary" id="modif">Validez les infos</button>

    <?php
    echo form_close();
    ?>
</div>
