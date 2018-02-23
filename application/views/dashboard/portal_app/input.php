<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('portal_app'); ?>">Portal App</a></li>
        <li class="active">Input</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Portal App</h3>
    </div>
    <?php
      echo form_open_multipart('portal_app/input','class="form-horizontal"');
      ?>

    <div class="box-body">

      <div class="form-group">
        <label class="col-sm-2 control-label">Judul Portal App</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="judul" placeholder="Judul Portal App">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Deskripsi Portal App</label>
        <div class="col-sm-4">
          <textarea rows="13" class="form-control" name="portal_desc" placeholder="Deskripsi Portal App"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Url</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="url" placeholder="Url">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Icon</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="userfile" accept="image/jpeg,image/x-png">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Kategori Portal</label>
        <div class="col-sm-4">
         <select name="id_kat_portal" class="select2 form-control">
          <option value="0">Pilih Kategori Portal</option>
            <?php
            foreach ($kat_portal as $kp)
            {
                echo "
                <option value='$kp->id_kat_portal'>$kp->deskripsi</option>";
            }
            ?>
          </select>
        </div>
      </div>

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Portal App</button>
    </div>
  </form>
</div>
</div>
