<?php
// include "./include/functions.php";<---pkai yang landing page 
$soalan = query("SELECT * FROM soalan AS q INNER JOIN topik AS t ON t.idtopik=q.idtopik GROUP BY jenis ORDER BY t.idtopik desc limit 0,10");
?>
<style>
  .ss {
    font-size: 20px;
  }
</style>
<table align="center" width="100%">
  <tr class="ss">
    <td width="3%"><b>Bil.</b></td>
    <td width="70%"><b>Topik</b></td>
    <td width="27%">Jenis</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach ($soalan as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $row["topik"]; ?></td>
      <td><?php
          if ($row['jenis'] == 1) {
            echo "MCQ/TF";
          } else {
            echo "FIB";
          }
          ?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
</table>