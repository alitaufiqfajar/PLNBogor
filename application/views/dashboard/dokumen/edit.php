<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('dokumen'); ?>">Dokumen</a></li>
        <li class="active">Edit</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Dokumen</h3>
    </div>
    <?php
      echo form_open_multipart('dokumen/edit','class="form-horizontal"');
      ?>

    <div class="box-body">
      <input type="text" hidden="" name="id_dokumen" value="<?php echo $data_dok['id_dokumen']; ?>">
      <input type="text" hidden="" name="namafile" value="<?php echo $data_dok['namafile']; ?>">
      <div class="form-group">
        <label class="col-sm-2 control-label">Judul Dokumen</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="judul" placeholder="Judul Dokumen" value="<?php echo $data_dok['judul']; ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">File Dokumen</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="userfile">
          <br/>
          <a href=<?php echo base_url('assets/dokumen/'.$data_dok['namafile']); ?>><?php echo $data_dok['namafile']; ?></a>
        </div>
      </div>
      <br/>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kategori Dokumen</label>
        <div class="col-sm-4">
         <select name="id_kat_dokumen" class="select2 form-control">
          <option value="0">Pilih Kategori Dokumen</option>
            <?php
            foreach ($kat_dokumen as $kd)
            {
              $sel='';
              if($data_dok['id_kat_dokumen']==$kd->id_kat_dokumen)
              {
                $sel='selected=""';
              }
                echo "<option ".$sel."value='$kd->id_kat_dokumen'>$kd->deskripsi</option>";
            }
            ?>
          </select>
        </div>
      </div>

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Edit Dokumen</button>
    </div>

  </form>
</div>
</div>
