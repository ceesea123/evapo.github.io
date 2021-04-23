
<html style="background-image:url('WATER.png')">
<?php error_reporting(E_NOTICE^E_WARNING^E_ALL);

ini_set ('display_errors ',0);
if ( isset ( $_REQUEST ['calculate'] ))
{

$C = $_REQUEST['C1'];   
$W = $_REQUEST['W2'];
$Rn = $_REQUEST['Rn3'];
$U = $_REQUEST['U4'];
$ea = $_REQUEST['ea5'];
$Rmax = $_REQUEST['Rmax6'];
$Rmin = $_REQUEST['Rmin7'];


if(!empty($C) && !empty($W) && !empty($Rn)&& !empty($U)&& !empty($ea)&& !empty($Rmax)&& !empty($Rmin))
{
    
	$WR = $W*$Rn;
	$sub = 1-$W;
	$fu=0.27 *(1 + ($U/100));
	$RHmean= ($Rmax+$Rmin)/2;
	$ed = (($ea*$RHmean)/100);
	$diff  = $ea-$ed;

	$et = $C * ($WR+($sub*$fu*$diff));	
	
}
else
{
	echo "<script language=javascript> alert(\"Please Enter values. All fields are required!!!\");</script>";
}

}

?>



	
<center><img src="WATER2.png" height="90" width="100%"></center>

	<head>
	<style type= "text/css">
	.p {
		color: white;
		border: 2px solid yellow;
		width: 500px;
		background-color: #9ACD32;
		font-family: cursive;
		font-size: 30px;
		border-bottom-right-radius: 1em;
		border-bottom-left-radius: 1em;


	}
	.header {
		border: 2px solid yellow;
		color:black;
	}
	.p{
		text-align: center;
	}

	}

	</style>
	</head>
	<body>
		<form>

				<table border="0" align= "center" class= "p">
			<th class= "header"> EVAPOTRANSPIRATION CALCULATOR </th>
			<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for C </td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="C1"
type ="text" value="<?php echo  $C ?>"  style ="color : red "/></td>
</tr>

	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for W</td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="W2"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td> 
<!--<value="<?php echo $_GET['third-Rn'];?>"" -->
</tr>

	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for R<sub>n</sub> </td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="Rn3"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td>
</tr>

	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for U</td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="U4"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td>
</tr>

	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for e<sub>a</sub> </td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="ea5"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td>
</tr>
	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for R<sub>max</sub></td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="Rmax6"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td>
</tr>

	<tr>
				<td align= "center" style ="background-color : ;>


color : blac; font-family :''"> Enter value for R<sub>min</sub></td>
</tr>
<tr align= "center">
<td colspan="10">
<input name ="Rmin7"
type ="text" value="<?php echo  $C ?>" style ="color : red "/></td>
</tr>
	

	

	
<tr>
<td ></td>
</tr>
<tr>
<td ></td>
</tr>
<tr>
<td ></td>
</tr>

				



<tr align="center">
	<td>
	<input type="submit"
name="calculate" value="CALCULATE"
style ="color:white; background-color:gray; height:30px; width:100; border-radius:1em" />

&nbsp;&nbsp;

<input name="reset" type="submit" value="RESET" src="" clas="reset_button" style ="color: white; background-color:gray; height:30px; 
width:100; border-radius:1em" 
onlick="reset();" />
</td>
</tr>

<tr>
<td ></td>
</tr>
<tr>
<td ></td>
</tr>
<tr>
<td ></td>
</tr>

				

<tr>

			<td style ="background-color : gray; color : white; font-size: 20px; class="p";>
	
<?php
echo "<b>f(u)</b>= $fu"; 
?> 

&nbsp; &nbsp; &nbsp;

<?php
echo "<b>R<sub>Hmean</sub></b>= $RHmean"; 
?>  

&nbsp; &nbsp; &nbsp;

<?php
echo "<b>e<sub>d</sub></b>= $ed"; 
?>  
</td>

</tr>


<tr>
<td style ="background-color : white; color : black"><center>
<?php
echo "<b>ET<sub>0</sub> </b>= $et"; 
?>
</center>
</td>
</tr>

<tr>
<td align="center" style="font-family:cursive"> 
<br>
	
	<font color="black" size="5">ET<sub>0</sub> = C[(W*R<sub>n</sub>) + (1-W) * f(u) * (e<sub>a</sub> - e<sub>d</sub>)]
	</font>
	<br>
<font color="black"  >NOTE:</font>
<BR>
	<font color="white"  >
	C =  Adjustable factor
	<br>W = Temperature
	<br>R<sub>n</sub> = Net radiation
	<br>f(u) = Wind related function -aerodynamic term
	<br>W*R<sub>n</sub> = Radiation term 
	<br>e<sub>a</sub>-e<sub>d</sub> = Difference between saturated vapour pressure at mean air temperature and
	<br> ET<sub>0</sub> = Reference crop evapotranspiration in mm per day
	
	<!-- <hr class="hr" /> -->

	
</td>
</tr>
		



				</table>
			</form>
					</body>
				
</html>
