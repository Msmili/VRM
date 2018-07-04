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
                            <span id="'. $liste[$i]['IdP'].'" class="unactive"><i class="fa fa-exclamation-triangle"></i></span>
                        </td>
                       </tr>';
                }
            ?>
    </table>
<!--Mettre un if pour icon activer ou desactiver regarder pour les couleurs-->
<!--    Vor avec Vissarut pour modal ajout programme-->
    <a class="btn btn-success" href="'.site_url('coach/add').'">Ajouter un programme</a>