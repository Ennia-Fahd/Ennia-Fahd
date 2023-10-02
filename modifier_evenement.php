<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php
 $ids_ev=$_POST["row-check"];
 $all = implode(",", $ids_ev);
 $i=0;
foreach($ids_ev as $val){
$i=$i+1;
};
echo $i;
?>