<form>
		<table border="1" width="15%">
			<tr>
				<th bgcolor="lightblue">No</th>
				<th bgcolor="lightblue">Nama</th>
				<th bgcolor="lightblue">Kelas</th>
			</tr>
<?php 
    for ($no = 1, $i=1, $a=10; $i<=10, $a>0 ; $i++, $a--) { 
 ?>
			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama ke $i"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>
		<?php $no++; } ?>
		</table>
	</form>