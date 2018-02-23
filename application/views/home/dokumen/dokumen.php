    <script src="<?php echo base_url(); ?>assets/dashboard_template/adminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- START PAGE META -->
<div id="page-meta" class="container">
   <!-- SLOGAN -->
    <div class="slogan">
        <h2>Dokumen</h2><h3>Document Collection Business</h3><br>
    </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dokumen_home">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Icon</th>
            <th>Nama File</th>
            <th>Kategori Dokumen</th>
            <th>Tanggal Dibuat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($dokumen->result() as $r) {
            echo '<tr>
              <td>'.$no.'</td>
              <td>'.$r->judul.'</td>
              ';
              $img='';
               if($r->ekstensi=="ppt" || $r->ekstensi=="pptx")
               {
                $img=base_url('assets/img/template/ppt.png');
               }
               else if($r->ekstensi=="pdf")
               {
                $img=base_url('assets/img/template/pdf.png');
               }
               else if($r->ekstensi=="xlsx" || $r->ekstensi=="xls")
               {
                $img=base_url('assets/img/template/excel.png');
               }
               else if($r->ekstensi=="rar" || $r->ekstensi=="zip")
               {
                $img=base_url('assets/img/template/rar.png');
               }
               else if($r->ekstensi=="doc" || $r->ekstensi=="docx")
               {
                $img=base_url('assets/img/template/word.png');
               }
               else
               {
                $img=base_url('assets/img/template/default_girl.png');  
               }

              echo '<td><img class="aligncenter size-full wp-image-828" title="unlimitedcolors" src="'.$img.'" alt="" width="25" height="25" /></td>';
              echo '
              <td> <a href="'.base_url('assets/dokumen/'.$r->namafile).'">'.$r->namafile.'</a></td>
              <td>'.$r->deskripsi.'</td>
              <td>'.$r->tgl_dibuat.'</td>
            </tr>';
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- END PAGE META -->
