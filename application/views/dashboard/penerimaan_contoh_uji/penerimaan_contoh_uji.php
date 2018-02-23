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

         

        </tbody>

      </table>

    </div>

  </div>

</div>
