
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<!--content -->
<div class="box box-solid box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Kembalikan  Peminjaman</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">

   	<?php if(!empty(validation_errors())){
   			echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                <p>Inputan tidak terisi dengan benar. Cek kembali</p>';
                echo validation_errors();
             echo '</div>';

   	}?>
    <!--show error message here -->
  <div class="form-group"></div>
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>admin/Kembali/Kembalikan/<?php echo $data_pinjam['id_pinjam'];?>" role="form">
              <div class="box-body">
                <div class="form-group">
                 <label class="col-sm-2 control-label">Anggota</label>
                 <div class="col-sm-5">
		               <select name="id_anggota" class="js-example-basic-single form-control" disabled="disabled" data-placeholder="Klik untuk memilih">
		  				<?php	foreach($data_anggota->result_array() as $op)
        						{
                      if($op['id_anggota']==$data_pinjam['id_anggota'])
                      {
          						?>
            						<option value="<?php echo $op['id_anggota'];?>"><?php echo $op['nama'];?></option>
            					<?php
                      }
        						}
        						?>
        						</select>
		      		</div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pinjam</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $data_pinjam['tgl_pinjam'];?>" disabled="disabled" required="required" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Kembali</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $data_pinjam['tgl_kembali'];?>" disabled="disabled" required="required" class="form-control" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal di Kembalikan</label>
                  <div class="col-sm-4">
                    <!--input type="date" required="required" class="form-control" name="tgl_kembali"-->
                    <input data-provide="datepicker" class="bootstrap-datepicker" name="tgl_kembali">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
				</div>
                   <div class="btn-group">
                   <button type="submit" class="btn btn-success"><i class="fa fa-share"></i> Kembalikan</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
  </div>
    <div class="box-footer">
    <td>
    <div align ="Right"> <a  href="<?php echo base_url(); ?>admin/Pinjam"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    Menambah Data , isi form diatas untuk menambahkan data. 
  </div><!-- box-footer -->
</div><!-- /.box -->


