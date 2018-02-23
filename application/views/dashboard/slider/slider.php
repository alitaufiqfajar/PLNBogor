<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Slider</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Slider </h3>
      <br>
      <br>
      <small>
        <?php
        echo anchor('slider/input','<i class="glyphicon glyphicon-plus"></i>','class="btn bg-green"');
        ?>
      </small>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="default-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Link</th>
              <th>Foto</th>
              <th>Tgl Dibuat</th>

              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=1;
            foreach ($data_slider->result() as $r) {
              echo '<tr>
                <td>'.$no.'</td>
                <td>'.$r->judul.'</td>
                <td><a target="blank" href='.$r->link.'>'.$r->link.'</a></td>
                <td><img height=70px width=auto src="'.base_url('assets/img/slider/'.$r->foto).'"></td>
                <td>'.$r->tgl_dibuat.'</td>

                <td>'
                .anchor('slider/edit/'.$r->id_slider,'<i class="fa fa-pencil"></i>',
                 array('title' => 'Edit','class' => 'btn bg-purple')).'  '
                .anchor('slider/delete/'.$r->id_slider.'/'.$r->foto,'<i class="fa fa-remove"></i>',
                 array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')")).'</td>

              </tr>';
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
