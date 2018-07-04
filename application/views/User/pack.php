<?php
//    var_dump($list);
    for($i=0;$i<count($list);$i++){
        echo '<div class="packs">
                <div class="little">
                    <img class="miniature" src="'.add_img('images.jpg').'" alt="pack'.$list[$i]['IdP'].'"/>
                </div>
                <div class="overflow">
                    <h5>Description</h5>
                    <p>'.$list[$i]['DescriptifP'].'</p>
                 </div>
                 <div class="infos">
                    <span class="nb">Séance : '.$list[$i]['nbSeance'].'</span>';
                    if(isset($_SESSION['id_user'])) {
                        echo '<a class="btn btn-primary centre" href="' . site_url('user/detail') . '/' . $list[$i]['IdP'] . '">Détail</a>';
                    }
                    echo'<span class="prix">'.$list[$i]['Prix'].'€</span>
                 </div>
            </div>';
    }
?>