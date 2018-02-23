<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('slider'); ?>">Slider</a></li>
        <li class="active">Input</li>
      </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Slider</h3>
    </div>
    <?php
      echo form_open_multipart('slider/input','class="form-horizontal"');
      ?>

    <div class="box-body">

      <div class="form-group">
        <label class="col-sm-2 control-label">Judul Slider</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="judul" placeholder="Judul Slider">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Deskripsi Slider</label>
        <div class="col-sm-4">
          <textarea rows="13" class="form-control" name="slider_desc" placeholder="Deskripsi Slider"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Link</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="link" placeholder="link">
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
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Slider</button>
    </div>
  </form>
</div>
</div>
