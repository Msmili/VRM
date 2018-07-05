<table id="progUser" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nom programme</th>
            <th>Description</th>
            <th>Prix</th>
			<th>Coach</th>
			<th>Date achat</th>
        </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($liste);$i++){
                    echo '<tr>
                        <td><a href="'.site_url('user/seanceP').'/'.$liste[$i]['IdP'].'">' . $liste[$i]['IntituleP'] . '</a></td>
                        <td>' . $liste[$i]['DescriptifP'] . '</td>
                        <td>' . $liste[$i]['PrixP'] . '</td>
						<td>' . $liste[$i]['NomC'].' '. $liste[$i]['PrenomC']. '</td> 
						<td>' . $liste[$i]['DateA'].'</td> 
                       </tr>';
            }
            ?>
        </tbody>
</table>
