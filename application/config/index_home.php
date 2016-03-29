<div class="konten">
    	<div class="slider"><img src="<?php echo base_url(); ?>assets/images/web-development.png" width="624" height="326"></div>
    <!-- form login -->
    
        <div class="anggota">
          <h3>wadah 1</h3>
       
      </div>  
    <!-- end form login-->
  </div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
    <div class="konten">
      <div class="posting">
        <h3>Berita terbaru</h3>
        
        <?php foreach($berita as $list) { ?>
        <div class="ringkasan">
          <h3><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></h3>
          <?php echo $list['ringkasan']; ?>
        </div>
<?php } ?> 

      </div>
      <div class="anggota">
       <h3>Berita lama</h3>
      
        <ul>
        <?php foreach($berita as $list) { ?>
          <li><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></li>
		  <?php } ?>
        </ul>
           
<p>&nbsp;</p>
        <p>
        </p>
              </div>
    </div>

