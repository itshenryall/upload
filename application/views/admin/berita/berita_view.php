<div class="konten">
	<h1>Manajemen berita</h1>
    
    <div align="right">
    	<a href="<?php echo base_url() ?>admin/berita/tambah" class="tambah">Tambah berita</a>
    </div>
    
    <p>Daftar berita</p>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="myform" style="background-color:#cfd8dc;">
  <tr >
    <th style="background-color:#90a4ae; scope="col">Judul</th>
    <th style="background-color:#90a4ae; scope="col">Status</th>
    <th style="background-color:#90a4ae; scope="col">Penulis</th>
    <th style="background-color:#90a4ae; scope="col">Tanggal</th>
    <th style="background-color:#90a4ae; scope="col">Aksi</th>
    <th style="background-color:#90a4ae; scope="col">&nbsp;</th>
  </tr>
  <?php foreach($berita as $list) { ?>
  <tr>
    <td>
	<a href="<?php echo base_url() ?>home/read/<?php echo $list['slug'] ?>" target="_blank">
	<?php echo $list['judul']; ?></a></td>
    <td><?php echo $list['status_berita']; ?></td>
    <td><?php echo $list['nama']; ?></td>
    <td><?php echo $list['tanggal']; ?></td>
    <td>
    <a href="<?php echo base_url() ?>admin/berita/edit/<?php echo $list['id_berita'] ?>">EDIT</a> |  <a href="<?php echo base_url() ?>admin/berita/delete/<?php echo $list['id_berita'] ?>">DELETE</a></td>
  </tr>
  <?php } ?>
</table>
</div>