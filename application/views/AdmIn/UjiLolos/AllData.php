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
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title text-center">Hitung <?=$title?></h3> 
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
                                <!-- <?php
                                    $no = 1; 
                                    foreach ($allData->result() as $value) {
                                    $id = $value->bobot_kriteria_id;
                                    $nama = $value->nama;
                                    $nilai = $value->nilai;
                                    $id_kelompok = $value->kelompok_kriteria;
                                    $costbenefit = $value->costbenefit;
                                ?> -->
                                <tr>
                                    <td style="max-width: 10%">1</td>
                                    <td>A1</td>
                                    <td>290</td>
                                    <td>3</td>
                                    <td>Benefit</td>
                                    <td>
                                        <!-- Button trigger modal details -->
                                        <button type="button" class="btn btn-info ti-eye" alt="default" data-toggle="modal" data-target="#modal-details"></button>
                                        <!-- Button trigger modal edit -->
                                        <button type="button" class="btn btn-default ti-pencil-alt" alt="default" data-toggle="modal" data-target="#modal-edit"></button>
                                    </td>
                                </tr>
                                <!-- <?php $no++; }   ?> -->
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