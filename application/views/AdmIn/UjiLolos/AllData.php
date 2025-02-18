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
        <!-- /tabel bobot kriteria -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title text-center">Tabel Calon Pegawai</h3> 
                    <div class="table-responsive">
                        <table id="Datatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>Status Pernikahan</th>
                                    <th>Jarak dari Kampus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($calonPegawai->result() as $value) {
                                $name = $value->name;
                                $usia = $value->usia;
                                $pendidikan_terakhir = $value->pendidikan_terakhir;
                                $pengalaman_kerja = $value->pengalaman_kerja;
                                $status_pernikahan = $value->status_pernikahan;
                                $jarak = $value->jarak;
                                ?>
                                <tr>
                                    <td style="max-width: 10%"><?=$no?></td>
                                    <td><?=$name?></td>
                                    <td><?=$usia?> Tahun</td>
                                    <td><?=$pendidikan_terakhir?></td>
                                    <td><?=$pengalaman_kerja?> Bulan</td>
                                    <td><?=$status_pernikahan?></td>
                                    <td><?=$jarak?> KM</td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tabel calon pegawai -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title text-center">Tabel Normalisasi Data</h3> 
                    <div class="table-responsive">
                        <table id="Datatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($calonPegawai->result() as $value) {
                                $name = $value->name;
                                $usia = $value->usia;
                                $pendidikan_terakhir = $value->pendidikan_terakhir;
                                $pengalaman_kerja = $value->pengalaman_kerja;
                                $status_pernikahan = $value->status_pernikahan;
                                $jarak = $value->jarak;

                                ?>

                                <tr>

                                    <td style="max-width: 10%">A<?=$no?></td>
                                    <td><?=$normalisasi[$value->name]['usia']?></td>
                                    <td><?=$normalisasi[$value->name]['pendidikan_terakhir']?></td>
                                    <td><?=$normalisasi[$value->name]['pengalaman_kerja']?></td>
                                    <td><?=$normalisasi[$value->name]['status_pernikahan']?></td>
                                    <td><?=$normalisasi[$value->name]['jarak']?></td>
                                </tr>
                                <?php $no++; }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tabel Normalisasi Data -->

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title text-center">Di Normalisasikan</h3> 
                    <div class="table-responsive">
                        <table id="Datatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($calonPegawai->result() as $value) {
                                $name = $value->name;
                                $usia = $value->usia;
                                $pendidikan_terakhir = $value->pendidikan_terakhir;
                                $pengalaman_kerja = $value->pengalaman_kerja;
                                $status_pernikahan = $value->status_pernikahan;
                                $jarak = $value->jarak;

                                ?>

                                <tr>

                                    <td style="max-width: 10%">A<?=$no?></td>
                                    <td><?=$apaya[$value->name]['usia']?></td>
                                    <td><?=$apaya[$value->name]['pendidikan_terakhir']?></td>
                                    <td><?=$apaya[$value->name]['pengalaman_kerja']?></td>
                                    <td><?=$apaya[$value->name]['status_pernikahan']?></td>
                                    <td><?=$apaya[$value->name]['jarak']?></td>
                                </tr>
                                <?php $no++; }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title text-center">Tabel Hasil Faktor Ternormalisasi</h3> 
                    <div class="table-responsive">
                        <table id="Datatables" class="table table-striped display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;text-align: center;">No</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Hasil</th>
                                    <!-- <th>C2</th> -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($calonPegawai->result() as $value) {
                                ?>

                                <tr>
                                    <td style="max-width: 5%;text-align: center;"><?=$no?></td>
                                    <td style="text-align: center;"><?=$value->name?></td>
                                    <td style="text-align: center;"><?=$v[$value->name]?></td>
                                    

                                    
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