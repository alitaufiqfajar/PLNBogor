<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('galery'); ?>">Galery</a></li>
        <li class="active">Edit</li>
</ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Galery</h3>
    </div>
    <?php
      echo form_open_multipart('galery/edit','class="form-horizontal"');
      ?>
    <input type="hidden" name="id" value="<?php echo $galery['id_galery']; ?>">
    <div class="box-body">

      <div class="form-group">
        <label class="col-sm-2 control-label">Judul Galery</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="judul" placeholder="Judul Galery" value="<?php echo $galery['judul'];?>">
        </div>
      </div>


      <div class="form-group">
        <label class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="userfile" accept="image/jpeg,image/x-png"><br>
          <img style="height: 150px; width: auto;" src="<?PHP echo base_url().'assets/img/galery/'.$galery['foto'];?>"/>
        </div>
      </div>

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
    </div>
  </form>
</div>
</div>
