<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Portal App</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Portal App </h3>
      <br>
      <br>
      <small>
        <?php
        echo anchor('portal_app/input','<i class="glyphicon glyphicon-plus"></i>','class="btn bg-green"');
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
            <th>Foto</th>
            <th>Url</th>
            <th>Kategori Portal</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($portal_app->result() as $r) {
            echo '<tr>
              <td>'.$no.'</td>
              <td>'.$r->judul.'</td>
              <td><img height=50px width=auto src="'.base_url('assets/img/portal_app/'.$r->icon).'"></td>
              <td><a target="blank" href="http://'.$r->url.'">'.$r->url.'</a></td>
              <td>'.$r->deskripsi.'</td>
              <td>'.$r->tgl_dibuat.'</td>

              <td>'.anchor('portal_app/edit/'.$r->id_portal,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-purple')).' '.anchor('portal_app/delete/'.$r->id_portal,'<i class="fa fa-remove"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')")).'</td>

            </tr>';
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
