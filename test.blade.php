<?php            
            foreach($html->find("thead th") as $d){
                $data= $d->text();
                echo "<td>{$data}</td>";
            }
        ?>    

