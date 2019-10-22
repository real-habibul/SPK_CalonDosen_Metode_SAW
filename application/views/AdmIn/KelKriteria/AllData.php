<!-- sweatalret -->
<link rel="stylesheet" type="text/css" href="<?=path_adm_plugin()?>/plugins/bower_components/sweetalert/sweetalert.css" />

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?=$title?></h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Kriteria</a></li>
                    <li class="active"><?=$title?></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="white-box">
                    <h3 class="box-title text-center">Tambah <?=$title?></h3> 
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-material form-horizontal" action="<?=base_url()?>AdmIn/SKelompok-Kriteria" method="POST">
                                <div class="form-group">
                                    <label class="col-md-12">Untuk Kriteria</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" id="name" name="name" autocomplete="off" placeholder="Untuk kriteria bobot..."> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Jenis</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="jenis" name="jenis">
                                            <option value="Kurang Dari">Kurang Dari</option>
                                            <option value="Harus Sama Dengan">Harus Sama Dengan</option>
                                        </select>
                                    </div>
                                </div>
                                <?php for ($i = 1; $i <= 5 ; $i++) { ?>
                                <div class="form-group" style="margin-bottom: -5px; margin-top: -5px;">
                                    <div class="col-md-3" style="margin-top: 12px;">
                                        <label> Aturan Ke <?=$i?></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="range_<?=$i?>" name="range_<?=$i?>" class="form-control form-control-line"> 
                                    </div>
                                    <div class="col-md-4">
                                        <select id="nilai_r<?=$i?>" name="nilai_r<?=$i?>" class="form-control">
                                            <option value="0">Choose..</option>
                                            <option value="5">Sangat Baik</option>
                                            <option value="4">Baik</option>
                                            <option value="3">Cukup</option>
                                            <option value="2">Kurang</option>
                                            <option value="1">Tidak Baik</option>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group text-center" style="margin-top: 15px">
                                    <button type="submit" class="btn btn-success" alt="alert" id="sa-success">Simpan!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="white-box">
                    <h3 class="box-title text-center"><?=$title?></h3>
                    <div class="table-responsive">
                        <table id="newDatatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1; 
                                    foreach ($allData->result() as $value) {
                                    $id = $value->kelompok_kriteria_id;
                                    $name = $value->name;
                                    $jenis = $value->jenis;
                                    $is_active = $value->is_active;
                                ?>
                                <tr>
                                    <td style="max-width: 10%"><?=$no?></td>
                                    <td><?=$name?></td>
                                    <td><?=$jenis?></td>
                                    <td><?=$is_active?></td>
                                    <td>
                                        <!-- Button trigger modal details -->
                                        <button type="button" class="btn btn-info ti-eye" alt="default" data-toggle="modal" data-target="#modal-details<?=$id?>"></button>
                                        <div id="modal-details<?=$id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Details <b><?=$name?></b> </h4> </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label class="control-label">Nama :</label>
                                                                <input type="text" class="form-control" value="<?=$name?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Jenis :</label>
                                                                <input type="text" class="form-control" value="<?=$jenis?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Range</th>
                                                                            <th>Nilai</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                            $query = $this->M_db->query("SELECT * FROM kelompok_kriteria WHERE kelompok_kriteria_id = '$id'");
                                                                            foreach ($query->result_array() as $row) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?=$row['range_1']?></td>
                                                                            <td><?=$row['nilai_r1']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><?=$row['range_2']?></td>
                                                                            <td><?=$row['nilai_r2']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><?=$row['range_3']?></td>
                                                                            <td><?=$row['nilai_r3']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><?=$row['range_4']?></td>
                                                                            <td><?=$row['nilai_r4']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><?=$row['range_5']?></td>
                                                                            <td><?=$row['nilai_r5']?></td>
                                                                        </tr>
                                                                            <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- /.modal -->
                                        <!-- Button trigger modal edit -->
                                        <button type="button" class="btn btn-default ti-pencil-alt" alt="default" data-toggle="modal" data-target="#modal-edit<?=$id?>"></button>
                                        <div id="modal-edit<?=$id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Edit Data <?=$name?></h4> </div>
                                                    <div class="modal-body">
                                                        <form class="form-material form-horizontal" action="<?=base_url()?>AdmIn/UKelompok-Kriteria" method="POST">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Untuk Kriteria</label>
                                                                <input type="text" hidden id="id" name="id" value="<?=$id?>" autocomplete="off" placeholder="ID">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control form-control-line" id="name" name="name" autocomplete="off" value="<?=$name?>" placeholder="Untuk kriteria bobot..."> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-12">Jenis</label>
                                                                <div class="col-sm-12">
                                                                    <select class="form-control" id="jenis" name="jenis">
                                                                        <option value="<?=$jenis?>"><?=$jenis?></option>
                                                                        <option value="Kurang Dari">Kurang Dari</option>
                                                                        <option value="Harus Sama Dengan">Harus Sama Dengan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <?php for ($i = 1; $i <= 5 ; $i++) { ?>
                                                            <div class="form-group" style="margin-bottom: -5px; margin-top: -5px;">
                                                                <div class="col-md-3" style="margin-top: 12px;">
                                                                    <label> Aturan Ke <?=$i?></label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" id="range_<?=$i?>" name="range_<?=$i?>" value="<?=$row['range_'.$i]?>" class="form-control form-control-line"> 
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select id="nilai_r<?=$i?>" name="nilai_r<?=$i?>" class="form-control">
                                                                        <option value="<?=$row['nilai_r'.$i]?>">(ganti jika ada perubahan)</option>
                                                                        <option value="5">Sangat Baik</option>
                                                                        <option value="4">Baik</option>
                                                                        <option value="3">Cukup</option>
                                                                        <option value="2">Kurang</option>
                                                                        <option value="1">Tidak Baik</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                            <div class="form-group text-center" style="margin-top: 15px">
                                                                <button type="submit" class="btn btn-success" alt="alert" id="sa-success">Update!</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </td>
                                </tr>
                                <?php $no++; }   ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer> -->
</div>

<!--Datatables-->
<script src="<?=path_adm_plugin()?>/plugins/bower_components/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready( function () {
        $('table.display').dataTable( {
            "responsive": true,
            //...
        });
    } );
</script>

<script src="<?=path_adm_plugin()?>/plugins/bower_components/sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="<?=path_adm_plugin()?>/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js" type="text/javascript"></script>
<script type="text/javascript">
    //Success Message
    $('#sa-success').click(function(){
        swal("Selamat!", "Anda berhasil menambahkan data ke dalam tabel \n\"Kelompok Kriteria\".", "success")
    });
</script>