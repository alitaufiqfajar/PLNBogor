<!-- Breadcrumb -->
<ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url('Kategori_dokumen'); ?>">Kategori Dokumen</a></li>
        <li class="active">Edit</li>
</ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Kategori Dokumen</h3>
    </div>
    <?php
      echo form_open('kategori_dokumen/edit','class="form-horizontal"');
      ?>
      <input type="hidden" name="id" value="<?php echo $kat_dokumen['id_kat_dokumen']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2 control-label">Deskripsi</label>
          <div class="col-sm-4">
            <input type="text" maxlength="20" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?php echo $kat_dokumen['deskripsi'];?>">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan Perubahan</button>
      </div>
    </form>
  </div>
  </div>
</section>
