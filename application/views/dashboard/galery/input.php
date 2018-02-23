<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('galery'); ?>">Galery</a></li>
        <li class="active">Input</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Galery</h3>
    </div>
    <?php
      echo form_open_multipart('galery/input','class="form-horizontal"');
      ?>

    <div class="box-body">

      <div class="form-group">
        <label class="col-sm-2 control-label">Judul Galery</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="judul" placeholder="Judul Galery">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="userfile" accept="image/jpeg,image/x-png">
        </div>
      </div>

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Galery</button>
    </div>
  </form>
</div>
</div>
