<table id="seanceTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Programme</th>
        <th>Nom séance</th>
        <th>Description</th>
        <th>Date</th>
        <th>Durée</th>
        <th>Coach</th>
        <th>Évaluation</th>
    </tr>
    </thead>
    <tbody>
    <?php
        for($i=0;$i<count($liste);$i++){
            echo '<tr>
                        <td> <a href="'.site_url('User/pack').'/'.$liste[$i]['IdS'].'">' . $liste[$i]['IntituleP'] . '</a></td>
                        <td> <span id="'.$liste[$i]['IdS'].'" class="title_seance">' . $liste[$i]['IntituleS'] . '</span></td>
                        <td>' . $liste[$i]['DescriptifS'] . '</td>
                        <td>' . $liste[$i]['DateheureE'] . '</td>
                        <td>' . $liste[$i]['DureeS'] . '</td>
                        <td>' . $liste[$i]['NomC'].' '. $liste[$i]['PrenomC']. '</td>';
                if($liste[$i]['DateheureE'] > date('Y-m-d H:i:s')){
                    echo '<td><a href="'.site_url('user/evaluation').'/'.$liste[$i]['IdS'].'" class="btn btn-success disabled" id="evaluer">Évaluer la séance</a></td>';
                }else {
                    echo '<td><a href="'.site_url('user/evaluation').'/'.$liste[$i]['IdS'].'" class="btn btn-success" id="evaluer">Évaluer la séance</a></td>   ';
                }
                 echo '</tr>';
        }
    ?>
</table>