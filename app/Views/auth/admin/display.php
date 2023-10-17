 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Upload File Gaji</h2>
      </div>
      <div class="row padall border-bottom">  
      <div class="col-lg-12">
      <div class="float-right">  
          <a href="<?=site_url('admin/phpspreadsheet')?>" class="btn btn-info btn-sm"><i class="fa fa-file-upload"></i>Kembali Ke Dashboard</a>
        </div> 
      </div>
      </div>
      <div class="row padall">
        
        <table class="table table-striped">
          <thead>
            <tr class="table-primary">
              <th scope="col">No. Pegawai</th>
              <th scope="col">Gaji Pokok</th>
              <th scope="col">Period</th>
             
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataInfo as $key=>$element) { ?>
            <tr>
              <td><?php print $element['nopeg'];?></td>
              <td><?php print $element['gapok'];?></td>
              <td><?php print $element['bulan'];?>/<?php print $element['tahun'];?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        
      </div>
    </div>
  </section>