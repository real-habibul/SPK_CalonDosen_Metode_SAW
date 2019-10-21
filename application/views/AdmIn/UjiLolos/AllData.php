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
                    <h3 class="box-title text-center">Tabel Bobot Kriteria</h3> 
                    <div class="table-responsive">
                        
                        <table id="Datatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Bobot</th>
                                    <th>Cost/Benefit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($bobotKriteria->result() as $value) {
                                $nama = $value->nama;
                                $nilai = $value->nilai;
                                $costbenefit = $value->costbenefit;
                                ?>

                                <tr>
                                    <td style="max-width: 10%"><?=$no?></td>
                                    <td><?=$nama?></td>
                                    <td><?=$nilai?></td>
                                    <td><?=$bobot[$value->bobot_kriteria_id]?></td>
                                    <td><?=$costbenefit?></td>
                                </tr>

                                <?php $no++; } ?>
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