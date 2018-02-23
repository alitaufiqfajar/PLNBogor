<!-- Breadcrumb -->

<ol class="breadcrumb">

        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        <li class="active">Penerimaan Contoh Uji</li>

      </ol>

</section>



<!-- Main Content -->

<section class="content">

  <div class="box">

    <div class="box-header with-border">

      <h3 class="box-title">Penerimaan Contoh Uji </h3>

      <br>

      <br>

      <small>

        <?php

        echo anchor('form_penerimaan_contoh_uji/input','<i class="glyphicon glyphicon-plus"></i>','class="btn bg-green"');

        ?>

      </small>

    </div>

  <div class="box-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="default-table">

        <thead>

          <tr>
            <th>No</th>
            <th>No Administrasi</th>
            <th>Tanggal Terima</th>
            <th>Nama/Instansi Pengirim</th>
            <th>Alamat Pengirim</th>
            <th>Telp/Fax/E-mail Pengirim</th>
            <th>Kondisi Uji</th>
            <th>Waktu Pengujian</th>
            <th>Jumlah Biaya</th>
            <th>Penerima Contoh</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>

        </thead>

        <tbody>
          <?php

          $no=1;

          foreach ($form_penerimaan->result() as $r) {

            echo '<tr>

              <td>'.$no.'</td>

              <td>'.$r->no_administrasi.'</td>

              <td>'.$r->tgl_terima.'</td>

              <td>'.$r->nama_atau_instansi_pengirim.'</td>

              <td>'.$r->alamat_pengirim.'</td>

              <td>'.$r->telp_fax_email_pengirim.'</td>

              <td>'.$r->kondisi_uji.'</td>

              <td>'.$r->waktu_pengujian.'</td>

              <td>'.$r->jumlah_biaya.'</td>

              <td>'.$r->penerima_contoh.'</td>

              <td>'.$r->status.'</td>

              <td>'.anchor('form_penerimaan_contoh_uji/edit/'.$r->id_penerimaan,'<i class="fa fa-pencil"></i>',

              array('title' => 'Edit','class' => 'btn bg-purple')).' '.

              anchor('form_penerimaan_contoh_uji/delete/'.$r->id_penerimaan,'<i class="fa fa-remove"></i>',

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
