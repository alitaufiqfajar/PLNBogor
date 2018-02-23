<!-- Breadcrumb -->

<ol class="breadcrumb">

        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        <li><a href="<?php echo base_url('form_penerimaan_contoh_uji'); ?>">Penerimaan Contoh Uji</a></li>

        <li class="active">Input</li>

      </ol>

</section>



<!-- Main Content -->

<section class="content">

  <div class="box box-primary">

    <div class="box-header with-border">

      <h3 class="box-title">Tambah Penerimaan Contoh Uji</h3>
      <?php var_dump($detail_penerimaan) ?>

    </div>

  </div>
  <!-- BAGIAN 1 -->
  <div class="box box-primary">
    <?php

      echo form_open('form_penerimaan_contoh_uji/input','class="form-horizontal"');

      ?>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-3 control-label">No Administrasi</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="no_administrasi" value="<?=$detail_penerimaan['no_administrasi']?>" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama / Instansi Pengirim</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="nama_atau_instansi_pengirim" placeholder="Nama / Instansi Pengirim" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Alamat Pengirim</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="alamat_pengirim" placeholder="Alamat Pengirim" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Telp/Fax/E-mail Pengirim</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="telp_fax_email_pengirim" placeholder="Telp/Fax/E-mail Pengirim" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Kondisi Uji</label>
          <div class="col-sm-6">
            <select name="kondisi_uji" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Normal</option>
                  <option>Abnorma</option>
                </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Bentuk</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="bentuk" placeholder="Bentuk" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Warna</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="warna" placeholder="Warna" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Bau</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="bau" placeholder="Bau" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Jernih</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="jernih" placeholder="Jernih" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Keruh</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="keruh" placeholder="Keruh" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Lainnya</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="lainnya" placeholder="Lainnya" >
          </div>
        </div>
      </div>     
  </div>

  <!-- BAGIAN 2 -->
  <div class="box box-primary">
    <div class="box-body">
        <div class="form-group">
          <div class="col-sm-12">
            <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Jenis Contoh</th>
                                <th>Kode Contoh</th>
                                <th>Jumlah Contoh</th>
                                <th>Permintaan Pengujian</th>
                                <th></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td><input name="jenis_contoh_input[]" class="input-block-level" /></td>
                                <td><input name="kode_contoh_input[]" class="input-block-level" /></td>
                                <td><input name="jumlah_contoh_input[]" class="input-block-level" /></td>
                                <td><input name="permintaan_pengujian_contoh_input[]" class="input-block-level" /></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
          </div>
        </div>
      </div>
    </div>


    <!-- BAGIAN 3 -->
  <div class="box box-primary">    

      <div class="box-body form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Waktu Pengujian</label>
          <div class="col-sm-6">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="waktu_pengujian" type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Metode Pengujian</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="metode_uji" placeholder="Nama Metode Uji" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">SDM</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="sdm" placeholder="Nama Metode Uji" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Peralatan</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="peralatan" placeholder="Nama Metode Uji" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Bahan Kimia</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="bahan_kimia" placeholder="Nama Metode Uji" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Jumlah Biaya</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="jumlah_biaya" placeholder="Nama Metode Uji" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Penerima Contoh</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" name="penerima_contoh" placeholder="Nama Metode Uji" >
          </div>
        </div>
      </div>

  </div>

  <!-- TOMBOL SIMPAN -->
  <div class="box box-primary">

      <div class="box-footer">

        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Kategori</button>

      </div>

  </div>

  </form>

</section>

 <script>
            var i = 1;
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var kode = document.createElement('td');
                var jumlah = document.createElement('td');
                var permintaan_pengujian = document.createElement('td');
                var aksi = document.createElement('td');
 
//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(kode);
                row.appendChild(jumlah);
                row.appendChild(permintaan_pengujian);
                row.appendChild(aksi);
 
//                membuat element input
                var jenis_contoh_input = document.createElement('input');
                jenis_contoh_input.setAttribute('name', 'jenis_contoh_input[]');
                jenis_contoh_input.setAttribute('class', 'input-block-level');

                var kode_contoh_input = document.createElement('input');
                kode_contoh_input.setAttribute('name', 'kode_contoh_input[]');
                kode_contoh_input.setAttribute('class', 'input-block-level');
 
                var jumlah_contoh_input = document.createElement('input');
                jumlah_contoh_input.setAttribute('name', 'jumlah_contoh_input[]');
                jumlah_contoh_input.setAttribute('class', 'input-block-level');

                var permintaan_pengujian_input = document.createElement('input');
                permintaan_pengujian_input.setAttribute('name', 'permintaan_pengujian_contoh_input[]');
                permintaan_pengujian_input.setAttribute('class', 'input-block-level');
 
                var hapus = document.createElement('span');
 
//                meng append element input
                jenis.appendChild(jenis_contoh_input);
                kode.appendChild(kode_contoh_input);
                jumlah.appendChild(jumlah_contoh_input);
                permintaan_pengujian.appendChild(permintaan_pengujian_input);
                aksi.appendChild(hapus);
 
                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
 
                i++;
            }
        </script>