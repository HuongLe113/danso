<style>
table, th, td {
  border:1px solid black;
}
</style>
<?php
        include("get_html.php");       
                   
    ?>  
<h1>
    <?php
        $tieude= $html-> find("h1",0);
        echo $tieude->text();
    ?>
</h1>

<table style="width:100%">
    <thead>
        <tr>
            <th>Thứ tự</th>
            <th>Quốc gia</th>
            <th>Dân số</th>
            <th>Thay đổi hằng năm</th>
            <th>Net change</th>
            <th>Mật độ(người/ Km²)</th>
            <th>Diện tích đất (Km²)</th>
            <th>Người di cư</th>
            <th>Fert tỷ lệ</th>
            <th>Già đi</th>
            <th>Thành thị</th>
            <th>Chia sẻ với thế giới</th>
        </tr>
    </thead>
    <tbody>
        <?php            
            foreach($html->find("#example2 tbody tr") as $tr){
                echo "<tr>";
                    foreach($tr->find("td") as $td){
                        $data= $td->text();
                        echo "<td>{$data}</td>";
                    }    
                echo "</tr>";            
            }
        ?>  
    </tbody>
  
</table>


