
                                <th class="text-center">opsi</th>
<td class="text-center">
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".editData<?=$row->calon_pegawai_id?>"><i class="glyphicon glyphicon-edit"></i></button><br><br>
                                    <!-- Modal -->
                                    <div class="modal fade editData<?=$row->calon_pegawai_id?>" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Calon Pegawai</h4>
                                                </div>
                                                <div class="modal-body form-horizontal">
                                                    <form id="form<?=$row->calon_pegawai_id?>">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Nama Lengkap :</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="name<?=$row->calon_pegawai_id?>" value="<?=$row->name?>">
                                                            <input type="hidden" class="form-control" id="name_old<?=$row->calon_pegawai_id?>" value="<?=$row->name?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Usia :</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="usia<?=$row->calon_pegawai_id?>" value="<?=$row->usia?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Pendidikan Terakhir :</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="pendidikan_terakhir<?=$row->calon_pegawai_id?>" value="<?=$row->pendidikan_terakhir?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Tempat Pendidikan :</label>
                                                        <div class="col-sm-8">
                                                           <textarea class="summernote" id="tempat_pendidikan<?=$row->calon_pegawai_id?>"><?=$row->tempat_pendidikan?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Pengalaman Kerja :</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="pengalaman_kerja<?=$row->calon_pegawai_id?>" value="<?=$row->pengalaman_kerja?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Status Pernikahan :</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="summernote" id="status_pernikahan<?=$row->calon_pegawai_id?>"><?=$row->status_pernikahan?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Jarak :</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="jarak<?=$row->calon_pegawai_id?>" value="<?=$row->jarak?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Status :</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="is_active<?=$row->calon_pegawai_id?>">
                                                                <option value="1" <?=select($row->is_active,1)?>>Aktif</option>
                                                                <option value="0" <?=select($row->is_active,0)?>>Non aktif</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" onclick="edit('<?=$row->calon_pegawai_id?>')" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>