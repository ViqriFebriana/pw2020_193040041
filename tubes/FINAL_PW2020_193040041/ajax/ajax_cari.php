<?php
require '../php/functions.php';

$elektronik = cari($_GET['keyword']);
?>
<table cellpadding="8" cellspacing="0" style="text-align : center ">
   <tr>
      <th>ID</th>
      <th>gambar</th>
      <th>Model Laptop</th>
      <th>Processor</th>
      <th>Harga</th>
   </tr>


   <?php if (empty($elektronik)) : ?>
      <tr>
         <td colspan="5">
            <h1>Data tidak di temukan</h1>
         </td>
      </tr>
   <?php else : ?>


      <?php $i = 1 ?>
      <?php foreach ($elektronik as $elektro) : ?>
         <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?= $elektro["cover"]; ?>" height="100px"></td>
            <td>
               <p class="cover">
                  <a href="php/detail.php?id=<?= $elektro['id'] ?>">
                     <?= $elektro['model_laptop'] ?>
                  </a>
               </p>
            </td>
            <td><?= $elektro["processor"]; ?></td>
            <td><?= $elektro["harga"]; ?></td>
         </tr>
         <?php $i++ ?>
      <?php endforeach; ?>
   <?php endif; ?>
</table>