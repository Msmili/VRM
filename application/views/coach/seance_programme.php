<table id="seanceTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Nom séance</th>
        <th>Description</th>
        <th>Durée</th>
    </tr>
    </thead>
    <tbody>
    <?php
        for($i=0;$i<count($detail);$i++){
            echo '<tr>
                        <td> ' . $detail[$i]['IntituleS'] .'</td>
                        <td>' . $detail[$i]['DescriptifS'] . '</td>
                        <td>' . $detail[$i]['DureeS'] . '</td>             
                   </tr>';
        }
    ?>
</table>
