<div class="profil">
    <h2>Évaluation de la séance du client <?php echo $infos['NomU'].' '. $infos['PrenomU']; ?></h2>

    <?php

    $attributes = array('class' => 'form-horizontal', 'id' => 'eval', 'method'=> 'POST');
    echo form_open('coach/add_eval', $attributes);
    ?>
    <div class="row">
        <div class="col-md-3">Accomplissement</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="accomplissement">Accomplissement</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <select name="accomplissement">
                        <option value="25">25%</option>
                        <option value="50">50%</option>
                        <option value="75">75%</option>
                        <option value="100">100%</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Commentaire</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="comm">Commentaire</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="comm">
                    <textarea id="comm" name="comm" placeholder="Avis sur la séance et la performance du client"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">Valider la séance</div>
        <div class="col-md-6">
            <div class="form-group has-danger field">
                <label class="sr-only" for="valider">Valider la séance</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="valider">
                    <input type="checkbox" name="choix" value="oui"/>Oui &nbsp;
                    <input type="checkbox" name="choix" value="non"/>Non

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $infos['IdE']; ?>"/>
    <button type="submit" class="btn btn-primary" id="modif">Validez l'évaluation</button>

    <?php
        echo form_close();
    ?>
</div>
