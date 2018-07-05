<table id="seanceTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Programme</th>
        <th>Nom séance</th>
        <th>Description</th>
        <th>Date</th>
        <th>Durée</th>
        <th>Client</th>
    </tr>
    </thead>
    <tbody>
    <?php
        for($i=0;$i<count($liste);$i++){
            echo '<tr>
                        <td> <a href="'.site_url('coach/detail').'/'.$liste[$i]['IdS'].'">' . $liste[$i]['IntituleP'] . '</a></td>
                        <td> <a href="'.site_url('coach/evaluation').'/'.$liste[$i]['IdS'].'">' . $liste[$i]['IntituleS'] . '</a></td>
                        <td>' . $liste[$i]['DescriptifS'] . '</td>
                        <td>' . $liste[$i]['DureeS'] . '</td>
                        <td>' . $liste[$i]['DureeS'] . '</td>
                        <td>' . $liste[$i]['NomU'].' '. $liste[$i]['PrenomU']. '</td>                        
                   </tr>';
        }
    ?>
</table>
