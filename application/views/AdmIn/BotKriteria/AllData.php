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
                            <form class="form-material form-horizontal" action="<?=base_url()?>AdmIn/SBobot-Kriteria" method="POST">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Bobot Kriteria</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" id="nama" name="nama" autocomplete="off" placeholder="Nama Bobot Kriteria.."> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nilai</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" id="nilai" name="nilai" autocomplete="off" placeholder="1 ~ 100"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Kelompok Kriteria</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="kelompok_kriteria" name="kelompok_kriteria">
                                            <?php foreach ($dataKelompok->result() as $value) {
                                                $id_kelompok = $value->kelompok_kriteria_id;
                                                $nama_kelompok = $value->name;
                                            ?>
                                            <option value="<?=$id_kelompok?>"><?=$nama_kelompok?></option>
                                            <?php }  ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Cost/Benefit</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="costbenefit" name="costbenefit">
                                            <option value="Benefit">BENEFIT</option>
                                            <option value="Cost">COST</option>
                                        </select>
                                    </div>
                                </div>
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
                    <div class="white-box">
                            <!-- /.modal -->
                            <div id="modal-details" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Details Dari ...</h4> </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Untuk Kriteria*</label>
                                                    <input type="text" class="form-control" id="recipient-name"> </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label">Jenis</label>
                                                    <select class="form-control">
                                                        <option value="Kurang Dari">Kurang Dari</option>
                                                        <option value="Harus Sama Dengan">Harus Sama Dengan</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- /.modal -->
                            <div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Modal Content is Responsive</h4> </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Untuk Kriteria*</label>
                                                    <input type="text" class="form-control" id="recipient-name"> </div>
                                                <div class="form-group">
                                                    <label class="col-sm-12 control-label">Jenis</label>
                                                    <select class="form-control">
                                                        <option value="Kurang Dari">Kurang Dari</option>
                                                        <option value="Harus Sama Dengan">Harus Sama Dengan</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    <div class="table-responsive">
                        <table id="newDatatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Kelompok</th>
                                    <th>Cost/Benefit</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1; 
                                    foreach ($allData->result() as $value) {
                                    $id = $value->bobot_kriteria_id;
                                    $nama = $value->nama;
                                    $nilai = $value->nilai;
                                    $id_kelompok = $value->kelompok_kriteria;
                                    $costbenefit = $value->costbenefit;
                                ?>
                                <tr>
                                    <td style="max-width: 10%"><?=$no?></td>
                                    <td><?=$nama?></td>
                                    <td><?=$nilai?></td>
                                    <td><?=$id_kelompok?></td>
                                    <td><?=$costbenefit?></td>
                                    <td>
                                        <!-- Button trigger modal details -->
                                        <button type="button" class="btn btn-info ti-eye" alt="default" data-toggle="modal" data-target="#modal-details"></button>
                                        <!-- Button trigger modal edit -->
                                        <button type="button" class="btn btn-default ti-pencil-alt" alt="default" data-toggle="modal" data-target="#modal-edit"></button>
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