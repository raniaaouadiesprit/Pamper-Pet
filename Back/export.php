<?php
require('database.php');
$sql="select * from evenment";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>Id evenement</td><td>nombre invités</td><td>nom evenement</td><td>date evenement</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr>
	<td>'.$row['id'].'</td><td>'
	.$row['nbr_invt'].'</td><td>'.$row['nom_evn'].'</td><td>'.$row['date_evn'].'</td><td>'.$row['type_evn'].
	'
	</td>
	</tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>