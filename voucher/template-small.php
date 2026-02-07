																																										<?php

if (substr($validity, -1) == "d") {
  $validity = "Aktif: " . substr($validity, 0, -1) . " Hari";
} else if (substr($validity, -1) == "h") {
  $validity = "Aktif: " . substr($validity, 0, -1) . " Jam";
}
if (substr($timelimit, -1) == "d" & strlen($timelimit) > 3) {
  $timelimit = "Durasi: " . ((substr($timelimit, 0, -1) * 7) + substr($timelimit, 2, 1)) . " Hari";
} else if (substr($timelimit, -1) == "d") {
  $timelimit = "Durasi: " . substr($timelimit, 0, -1) . " Hari";
} else if (substr($timelimit, -1) == "h") {
  $timelimit = "Durasi: " . substr($timelimit, 0, -1) . " Jam";
} else if (substr($timelimit, -1) == "w") {
  $timelimit = "Durasi: " . (substr($timelimit, 0, -1) * 7) . " Hari";
}

if($getsprice == "1000"){ $color = "#20a8d8";} // jika harga == "1000" maka warna = "#2196F3"
elseif($getsprice == "2000"){ $color = "#4dbd74";}
elseif($getsprice == "3000"){ $color = "#ffc107";}
elseif($getsprice == "5000"){ $color = "#f86c6b";} // ini yang dicopy untuk menambah warna berdarsarkan harga, kemudian paste di atas baris // else color

// else color
else{ $color = "#FFFFFF";}

?>
<table class="voucher" style=" width: 170px;">
  <tbody>
    <tr>
      <td style="text-align: left; font-size: 14px; font-weight:bold; border-bottom: 1px black solid;"><img src="<?= $logo; ?>" style="height:15px;border:0;"> <?php echo $hotspotname;?><span id="num" style="font-size: 9px;"><?php echo " [$num]";?></span></td>
    </tr>
    <tr>
      <td>
    <table style=" text-align: center; width: 163px;">
  <tbody>
    <tr style="color: black; font-size: 11px;">
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if($usermode == "vc"){?>
        <tr>
          <td >Kode Voucher</td>
        </tr>
        <tr style="color: black; font-size: 17px;">
          <td style="width:100%; border: 1px solid black; font-weight:bold; background-color:<?php echo $color;?>;"><?php echo $username;?></td>
        </tr>
        <tr>
          <td colspan="2"  style="border: 1px solid black; font-weight:bold;"><?php echo date("d/m/Y"); ?></td>
        </tr>
		<tr>
			<td colspan="2" style="border: 1px solid black; font-size: 14px; font-weight:bold;"><?php echo $price;?> </td>
		</tr>
<!-- /  -->
<!-- Username & Password  -->
<?php }elseif($usermode == "up"){?>
          <tr>
          <td style="width: 50%">Username</td>
          <td>Password</td>
        </tr>
        <tr style="color: black; font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $username;?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $password;?></td>
        </tr>
        <tr>
          <td colspan="2" style="border: 1px solid black; font-weight:bold;"><?php echo $validity;?> <?php echo $timelimit;?></td>
        </tr>
		<tr>
			<td colspan="2" style="border: 1px solid black; font-size: 13px; font-weight:bold;"><?php echo $price;?> </td>
		</tr>
<?php }?>
<!-- /  -->
        </table>
      </td>
    </tr>
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	            	          	           	          	           	          	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        