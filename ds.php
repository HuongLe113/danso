<?php
    include("simple_html_dom.php");
    $url="https://www.worldometers.info/world-population/population-by-country/?fbclid=IwAR0puiKTYB4lVwIGe2KoCXaDVz7CUkH52VWSdHKa6lMOmYxbM774tUSYY4Y";
    $html= file_get_html($url);
    // $tieude= $html-> find("h1",0);
    
    // echo $html->find("#example2",0);
   
    foreach($html->find("thead th") as $t){
            echo $t->text();
    }
?>