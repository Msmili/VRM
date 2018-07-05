<table id="example" class="table table-striped table-bordered" style="width:100%">
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
                        <a href="'.echo site_url('user/list_prog').'"><td>' . $liste[$i]['IntituleP'] . '</td></a>
                        <td>' . $liste[$i]['DescriptifP'] . '</td>
                        <td>' . $liste[$i]['Prix'] . '</td>
						<td>' . $liste[$i]['NomC'].' '. $liste[$i]['PrenomC']. '</td> 
						<td>' . $liste[$i]['DateA'].'</td> 
                        <td>
                            <span id="'. $liste[$i]['IdP'].'" class="remove"><i class="fa fa-trash"></i></span>';
                        if($liste[$i]['ActifP'] == 1) {
                            echo '<span id="' . $liste[$i]['IdP'] . '" class="unactive"><i class="fa fa-exclamation-triangle"></i></span>';
                        }else{
                            echo '<span id="' . $liste[$i]['IdP'] . '" class="active"><i class="fa fa-check"></i></span>';
                        }
                    echo '</td>
                       </tr>';
                }
            ?>
			
			Faire lien vers page View/User/seance.php