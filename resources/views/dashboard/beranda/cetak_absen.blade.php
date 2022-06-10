
 <style>
 	body{
 		font-family: arial;
 	}
 </style>
 <table width="100%">
 	<tr>
 		<td>
 			<img src="{{asset('admin/assets/img/ailcc.png')}}" width="100">
 		</td>
 		<td>
 			<center>
 				
 				<h1>
 					ABSENSI SISWA <br>
 					<small> AILC SURABAYA</small>
 				</h1>
 				<hr>
 				<em>
				 	Jl. Petukangan Tengah No 12 <br> Provinsi Jawa Timur<br>
 				<b>Telepon 081615075516 E-mail ailc.course@yahoo.com</b> 
 				</em>
 	
 			</center>
 		</td>
 		<td>

 			<table width="100%">
  <tr>

  </td>
    <td rowspan="2">
    	<ul>
    		<li>H= Hadir</li>
    		<li>T = Tidak Hadir</li>
    		<li>I = Izin</li>
    	</ul>

</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
 		</td>
 	</tr>
 </table>

<hr style="height: 3px;border: 1px solid;">


<table width="100%" border="1" cellpadding="2" style="border-collapse: collapse;">
  <tr>
    <td rowspan="2" bgcolor="#EFEBE9" align="center">NO</td>
    <td rowspan="2" bgcolor="#EFEBE9" align="center">NAMA</td>
	<td colspan="3" style="padding: 8px;"align="center"><b> KETERANGAN</b></td>
    <td colspan="1" align="center" bgcolor="#EFEBE9">JUMLAH</td>
  </tr>
  <tr>

	<td bgcolor='#EFEBE9' align='center'>H</td>
	<td bgcolor="#FFC107" align="center">T</td>
	<td bgcolor="#4CAF50" align="center">I</td>
 
  </tr>
  <?php 

	  foreach($kelas as $e=>$dt){
	  	$warna = ($e % 2 == 1) ? "#ffffff" : "#f0f0f0";
		$hadir = \App\Absensi::where('users', $dt->user_r->id)->where('keterangan','H')->count();
		$tidak = \App\Absensi::where('users', $dt->user_r->id)->where('keterangan','T')->count();
        $ijin = \App\Absensi::where('users', $dt->user_r->id)->where('keterangan','I')->count();
        $total = $hadir + $tidak + $ijin;
		?>

		<tr bgcolor="<?=$warna; ?>">
			<td align="center">{{ $e+1 }}</td>
			<td>{{ $dt->user_r->name }}</td>
			<td align="center">{{ $hadir }}</td>
			<td align="center">{{ $tidak }}</td>
			<td align="center">{{ $ijin }}</td>
			<td align="center">{{ $total }}</td>
		</tr>
	  <?php } ?>
	  
</table>

<p></p>
<table width="100%">
	<tr>
	<!-- 	<td align="left">
			<p>
				Mengetahui
			</p>
			<p>
				Kepala Sekolah
				<br>
				<br>
				<br>
				<br>
				<br>
				-----------------------------
			</p>
		</td> -->
		<td align="right">
			<p>
				Surabaya, <?php echo date('d-F-Y'); ?>
			</p>
			<p>
				Direktur
				<br>
				<br>
				<br>
				<br>
				<br>
					Azizah Handayani, S.S. <br>
				-------------------------------
				
			</p>
		</td>
	</tr>
</table>

<script>
	window.print();
</script>