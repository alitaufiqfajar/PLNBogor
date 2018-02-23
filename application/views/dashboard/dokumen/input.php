<!-- Breadcrumb -->

<ol class="breadcrumb">

        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        <li><a href="<?php echo base_url('dokumen'); ?>">Dokumen</a></li>

        <li class="active">Input</li>

      </ol>

</section>



<!-- Main Content -->

<section class="content">

  <div class="box">

    <div class="box-header with-border">

      <h3 class="box-title">Tambah Dokumen</h3>

    </div>

    <?php

      echo form_open_multipart('dokumen/input','class="form-horizontal"');

      ?>



    <div class="box-body">



      <div class="form-group">

        <label class="col-sm-2 control-label">Judul Dokumen</label>

        <div class="col-sm-4">

          <input type="text" class="form-control" name="judul" placeholder="Judul Dokumen">

        </div>

      </div>



      <div class="form-group">

        <label class="col-sm-2 control-label">File Dokumen</label>

        <div class="col-sm-4">

          <input type="file" class="form-control" name="userfile">

        </div>

      </div>



      <div class="form-group">

        <label class="col-sm-2 control-label">Kategori Dokumen</label>

        <div class="col-sm-4">

         <select name="id_kat_dokumen" class="select2 form-control">

          <option value="0">Pilih Kategori Dokumen</option>

            <?php

            foreach ($kat_dokumen as $kd)

            {

                echo "<option value='$kd->id_kat_dokumen'>$kd->deskripsi</option>";

            }

            ?>

          </select>

        </div>

      </div>



    </div>

    <div class="box-footer">

      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Dokumen</button>

    </div>



  </form>

</div>

</div>

