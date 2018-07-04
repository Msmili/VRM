    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nom programme</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($liste);$i++){
                    echo '<tr>
                        <td>' . $liste[$i]['IntituleP'] . '</td>
                        <td>' . $liste[$i]['DescriptifP'] . '</td>
                        <td>' . $liste[$i]['Prix'] . '</td>
                        <td>
                            <span id="'. $liste[$i]['IdP'].'" class="remove"><i class="fa fa-trash"></i></span>
                            ';
                        if($liste[$i]['ActifP'] == 1) {
                            echo '<span id="' . $liste[$i]['IdP'] . '" class="unactive"><i class="fa fa-exclamation-triangle"></i></span>';
                        }else{
                            echo '<span id="' . $liste[$i]['IdP'] . '" class="active"><i class="fa fa-check"></i></span>';
                        }

                    echo '</td>
                       </tr>';
                }
            ?>
    </table>

    <form class="modal multi-step" id="demo-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Step 1/2</h4>
                    <h4 class="modal-title step-2" data-step="2">Step 2/2</h4>
                    <h4 class="modal-title step-3" data-step="3">Step 3</h4>
                </div>
                <div class="modal-body step step-1">
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" name="titre" class="form-control" id="titre" placeholder="Titre du programme" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <textarea name="description" class="form-control text-left" id="description" placeholder="Description du programme" required autofocus></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" name="prix" class="form-control" id="prix" placeholder="Prix du programme" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body step step-2">
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" name="titre_seance" class="form-control" id="titre_seance" placeholder="Titre de la séance" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <textarea name="description_seance" class="form-control text-left" id="description_seance" placeholder="Description de la séance" required autofocus></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" name="date_seance" class="form-control" id="date_seance" placeholder="Date de la séance" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" name="duree_seance" class="form-control" id="duree_seance" placeholder="Durée de la séance" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body step step-3">
                    <div id="prvw"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary step step-1" data-step="1" onclick="sendEvent()">Continue</button>
                    <button type="button" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent()" id="final">Continue</button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center">
        <button class="btn btn-success" data-toggle="modal" data-target="#demo-modal">Ajouter un programme</button>
    </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->

<!--Mettre un if pour icon activer ou desactiver regarder pour les couleurs-->
<!--    Vor avec Vissarut pour modal ajout programme-->
    <!--'.site_url('coach/add').' --!>