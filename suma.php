<?php
$Cosis1=$_GET['Cosi1'];
$Cosis2=$_GET['Cosi2'];
$Cosis3=$_GET['Cosi3'];
$Chulis1=$_GET['Chuli1'];
$Chulis2=$_GET['Chuli2'];
$Chulis3=$_GET['Chuli3'];
$Mariposiita1=$_GET['Mari1'];
$Mariposiita2=$_GET['Mari2'];
$Mariposiita3=$_GET['Mari3'];
?>
<html>
    <body>
<center><h1>SUMA</h1></center>
<br>
<br>
    <center><table>
    		<tr>
    			<th>Producto</th>
    			<th>Total</th>
    		</tr>
    		
              <tr>

    			<td><?php echo $Mariposiita1; ?></td>
    			<td><?php $Resultado1=$Cosis1*$Chulis1; echo $Resultado1; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Mariposiita2; ?></td>
    			<td><?php $Resultado2=$Cosis2*$Chulis2; echo $Resultado2; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Mariposiita3; ?></td>
    			<td><?php $Resultado3=$Cosis3*$Chulis3; echo $Resultado3; ?></td>
    		</tr>
    		<tr>
    			<td>Subtotal</td>
    			<td><?php  $Subtotal=$Resultado3+$Resultado2+$Resultado1; echo $Subtotal; ?></td>
    		</tr>
    		<tr>
    			<td>IVA</td>
    			<td><?php $Iva=$Subtotal*.16; echo $Iva?></td>
    		</tr>
    		<tr>
    			<td>TOTAL</td>
    			<td><?php $Total=$Subtotal*1.16;
 echo $Total; ?></td>
    		</tr>
    	</table></center>
    </body>

</html>

?>