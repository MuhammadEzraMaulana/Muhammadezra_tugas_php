<?Php 
$file = "data.json";
$json_string = File_get_contents($file);
$json = Json_decode($json_string, True);
?>
<!DOCTYPE Html>
<Html>
<Head>
    <Title>Daftar nilai</Title>
</Head>
<Body>
<H1 align ='left'>Daftar nilai</H1>
<Table Border="1" Style="Width: 50%">
    <Thead>
        <Tr>
            <Th>No</Th>
            <Th>Nama</Th>
            <Th>Tanggal lahir</Th>
            <Th>Umur</Th>
            <Th>Alamat</Th>
            <Th>Kelas</Th>
            <Th>Nilai</Th>
            <Th>Hasil</Th>
           
   <?php
     // Variable $no berperan sebagai penomoran
     $no = 1;
    foreach ($json as $row) { // Perulangan foreach
         $lahir = new DateTime($row['tanggal_lahir']);
         $today = new DateTime();
         $Umur = $today->diff($lahir);
    // Operasi Switch-case membuat rentang nilai
       switch ($row['nilai']) {
       case $row['nilai'] >= 90 && $row['nilai'] <= 100:
       $grade = 'A';
       break;
       case $row['nilai'] >= 85 && $row['nilai'] <= 89.9:
       $grade = 'B';
       break;
       case $row['nilai'] >= 80 && $row['nilai'] <= 84.9:
       $grade = 'B';
       break;
       case $row['nilai'] >= 75 && $row['nilai'] <= 79.9:
       $grade = 'C';
       break;
       case $row['nilai'] >= 70 && $row['nilai'] <= 74.9:
       $grade = 'C';
       break;
       case $row['nilai'] >= 65 && $row['nilai'] <= 69.9:
       $grade = 'D';
       break;
       case $row['nilai'] >= 60 && $row['nilai'] <= 64.9:
       $grade = 'D';
       break;
       case $row['nilai'] >= 55 && $row['nilai'] <= 59.9:
       $grade = 'D';
       break;
       case $row['nilai'] >= 50 && $row['nilai'] <= 54.9:
       $grade = 'E';
       break;
       case $row['nilai'] >= 0 && $row['nilai'] <= 49.9:
       $grade = 'E';
       break;
      default:
      $grade = 'NaN';
      break;
 } ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['tanggal_lahir'] ?></td>
      <td><?php echo $Umur->y;echo "tahun"; ?></td>
      <td><?php echo $row['alamat'] ?></td>
      <td><?php echo $row['kelas'] ?></td>
      <td class="text-center"><?= number_format($row['nilai']) ?></td>
      <td class="text-center"><?= $grade ?></td>
      
      </tr>

    <?php } ?>

 </table>
</body>
</html>
