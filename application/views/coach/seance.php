<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
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
                        <td>' . $liste[$i]['LibelleS'] . '</td>
                        <td>' . $liste[$i]['DescriptifS'] . '</td>
                        <td>' . $liste[$i]['Dateheure'] . '</td>
                        <td>' . $liste[$i]['DureeS'] . '</td>
                        <td>' . $liste[$i]['NomU'].' '. $liste[$i]['PrenomU']. '</td>
                   </tr>';
        }
    ?>
</table>