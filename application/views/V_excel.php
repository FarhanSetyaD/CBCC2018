<?php
 
 header("Content-type: application/vnd.ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
                <th>index</th>
                <th>id unique</th>
                <th>nama tim</th>
                <th>universitas</th>
                <th>judul ide bisnis</th>
                <th>bidang bisnis</th>
                <th>link video</th>
                <th>deskripsi</th>
                <th>nama ketua</th>
                <th>tanggal lahir ketua</th>
                <th>email ketua</th>
                <th>no hp ketua</th>
                <th>id line ketua</th>
                <th>nama anggota 1</th>
                <th>tanggal lahir anggota 1</th>
                <th>email anggota 1</th>
                <th>no hp anggota 1</th>
                <th>id line anggota 1</th>
                <th>nama anggota 2</th>
                <th>tanggal lahir anggota 2</th>
                <th>email anggota 2</th>
                <th>no hp anggota 2</th>
                <th>id line anggota 2</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=0; foreach($peserta as $peserta) { ?>
 
           <tr>
 
                <td><?php echo $peserta->ID_TIM; ?></td>
                <td><?php echo $peserta->ID_UNIQUE; ?></td>
                <td><?php echo $peserta->NAMA_TIM; ?></td>
                <td><?php echo $peserta->UNIV; ?></td>
                <td><?php echo $peserta->NAMA_BISNIS; ?></td>
                <td><?php echo $peserta->BIDANG_BISNIS; ?></td>
                <td><?php echo $peserta->LINK_VIDEO; ?></td>
                <td><?php echo $peserta->DESKRIP; ?></td>
                <td><?php echo $peserta->NAMA1; ?></td>
                <td><?php echo $peserta->TTL1; ?></td>
                <td><?php echo $peserta->EMAIL1; ?></td>
                <td><?php echo $peserta->HP1; ?></td>
                <td><?php echo $peserta->LINE1; ?></td>
                <td><?php echo $peserta->NAMA2; ?></td>
                <td><?php echo $peserta->TTL2; ?></td>
                <td><?php echo $peserta->EMAIL2; ?></td>
                <td><?php echo $peserta->HP2; ?></td>
                <td><?php echo $peserta->LINE2; ?></td>
                <td><?php echo $peserta->NAMA3; ?></td>
                <td><?php echo $peserta->TTL3; ?></td>
                <td><?php echo $peserta->EMAIL3; ?></td>
                <td><?php echo $peserta->HP3; ?></td>
                <td><?php echo $peserta->LINE3; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>