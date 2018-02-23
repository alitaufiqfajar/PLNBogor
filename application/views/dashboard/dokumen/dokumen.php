<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Dokumen</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Dokumen </h3>
      <br>
      <br>
      <small>
        <?php
        echo anchor('dokumen/input','<i class="glyphicon glyphicon-plus"></i>','class="btn bg-green"');
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
            <th>Nama File</th>
            <th>Kategori Dokumen</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($data_dokumen->result() as $r) {
            echo '<tr>
              <td>'.$no.'</td>
              <td>'.$r->judul.'</td>
              <td> <a href="'.base_url('assets/dokumen/'.$r->namafile).'">'.$r->namafile.'</a></td>
              <td>'.$r->deskripsi.'</td>
              <td>'.$r->tgl_dibuat.'</td>

              <td>'.anchor('dokumen/edit/'.$r->id_dokumen,'<i class="fa fa-pencil"></i>',
              array('title' => 'Edit','class' => 'btn bg-purple')).' '.
              anchor('dokumen/delete/'.$r->id_dokumen.'/'.$r->namafile,'<i class="fa fa-remove"></i>',
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
