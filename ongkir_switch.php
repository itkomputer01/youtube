
<style type="text/css">
	
.ongkir label { width: 100px; float:left;  }

</style>
<form method="post" action="#" class="ongkir">
	<label>Nama barang</label>  <input type="text" name="nama"> <p>
	<label>Harga</label>        <input type="text" name="harga"> <p>
	<label>QTY</label>         <input type="text" name="qty"><p>
 
    <label>Kota</label>	         <select name="kota">
    	                         <option value="">   Pilih Kota</option>
                                 <option value="Jakarta">Jakarta</option>
                                 <option value="Bandung">Bandung</option>
                                 <option value="Surabaya">Surabaya</option>


                                </select><p>

	<label>&nbsp</label>    <input type="submit" name="send"> <p>


</form>
<?php
if (isset($_POST['send']))
{
   $nama=$_POST['nama'];
   $harga=$_POST['harga'];
   $qty=$_POST['qty'];
   $kota=$_POST['kota'];

switch ($kota) {
	case 'Jakarta':
		$ongkir=1000;
		break;

    case 'Bandung':
		$ongkir=2000;
		break;		
	case 'Surabaya':
		$ongkir=9000;
		break;		
			
	default:
	$ongkir=0;
		break;
   }

/*
   if ($kota=="Jakarta")
   {
     $ongkir=2000;
    }
   elseif ($kota=="Bandung") {
	   $ongkir=5000;
     }

 elseif ($kota=="Surabaya") {
	   $ongkir=10000;
     }

  else
  {

  	$ongkir=0;
  }

*/

  $total=$harga * $qty + $ongkir;

  $totalharga=number_format($total)  ;
  echo"$totalharga";







}


?>