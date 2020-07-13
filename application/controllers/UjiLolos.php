<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UjiLolos extends CI_Controller {

	public function index()
	{
		$data['title'] = 'UJI Calon Dosen';
		$data['allData'] = $this->M_db->get_all('bobot_kriteria');
		$data['dataKelompok'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

	public function hitung()
	{
		//TASK 1
		$this->db->trans_begin();
		$jumlah=0;
		$data['bobotKriteria'] = $this->M_db->get_all('bobot_kriteria');
		foreach ($data['bobotKriteria']->result() as $value) {
			$jumlah+=$value->nilai;
		}
		$bobot = [];
		foreach ($data['bobotKriteria']->result() as $value) {
			$bobot[$value->kelompok_kriteria] = $value->nilai / $jumlah;
		}

		$data['bobot']=$bobot;

		//TASK 2
		$data['calonPegawai'] = $this->M_db->get_all('calon_pegawai');
		
		//TASK 3
		$data['kelompok_kriteria'] = $this->M_db->get_all('kelompok_kriteria');
	
		
		$maxUsia=0;$maxPendidikan=0;$maxKerja=0;$minNikah=80000;$minJarak=80000;
		foreach ($data['kelompok_kriteria']->result() as $kk) {
			foreach ($data['calonPegawai']->result() as $value) {

				if($kk->kolom == "usia"){
					if($value->usia < $kk->range_1){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r1;
					}else if($value->usia < $kk->range_2){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r2;

					}else if($value->usia < $kk->range_3){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r3;

					}else if($value->usia < $kk->range_4){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r4;

					}else{
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r5;

					}

					if($maxUsia<$normalisasi[$value->name][$kk->kolom]){
						$maxUsia=$normalisasi[$value->name][$kk->kolom];
					}

				}else if($kk->kolom == "pendidikan_terakhir" ){
					if($value->pendidikan_terakhir == $kk->range_1){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r1;
					}else{
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r2;
					}
					if($maxPendidikan<$normalisasi[$value->name][$kk->kolom]){
						$maxPendidikan=$normalisasi[$value->name][$kk->kolom];
					}
			}else if($kk->kolom == "pengalaman_kerja" ){
					if($value->pengalaman_kerja <= $kk->range_1){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r1;
					}else if($value->pengalaman_kerja <= $kk->range_2){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r2;

					}else if($value->pengalaman_kerja <= $kk->range_3){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r3;

					}else if($value->pengalaman_kerja <= $kk->range_4){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r4;

					}else{
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r5;

					}

					if($maxKerja<$normalisasi[$value->name][$kk->kolom]){
						$maxKerja=$normalisasi[$value->name][$kk->kolom];
					}

				}else if($kk->kolom == "status_pernikahan" ){
					if($value->status_pernikahan == $kk->range_1){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r1;
					}else{
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r2;

					}

					if($minNikah>$normalisasi[$value->name][$kk->kolom]){
						$minNikah=$normalisasi[$value->name][$kk->kolom];
					}
					
				}else if($kk->kolom == "jarak" ){
					if($value->jarak <= $kk->range_1){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r1;
					}else if($value->jarak <= $kk->range_2){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r2;

					}else if($value->jarak <= $kk->range_3){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r3;

					}else if($value->jarak <= $kk->range_4){
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r4;

					}else{
						$normalisasi[$value->name][$kk->kolom] = $kk->nilai_r5;

					}

					if($minJarak>$normalisasi[$value->name][$kk->kolom]){
						$minJarak=$normalisasi[$value->name][$kk->kolom];
					}
				}
			}
		}

		foreach ($data['kelompok_kriteria']->result() as $kk) {
			foreach ($data['calonPegawai']->result() as $value) {

				if($kk->kolom == "usia"){
				
					$apaya[$value->name][$kk->kolom]=$normalisasi[$value->name][$kk->kolom]/$maxUsia;
					

				}else if($kk->kolom == "pendidikan_terakhir" ){
					$apaya[$value->name][$kk->kolom]=$normalisasi[$value->name][$kk->kolom]/$maxPendidikan;
					
			}else if($kk->kolom == "pengalaman_kerja" ){
					$apaya[$value->name][$kk->kolom]=$normalisasi[$value->name][$kk->kolom]/$maxKerja;
					

				}else if($kk->kolom == "status_pernikahan" ){
					$apaya[$value->name][$kk->kolom]=$minNikah/$normalisasi[$value->name][$kk->kolom];
					
					
				}else if($kk->kolom == "jarak" ){
					$apaya[$value->name][$kk->kolom]=$minJarak/$normalisasi[$value->name][$kk->kolom];
					
				}
			}
		}

	


		$v=[];
		foreach ($data['calonPegawai']->result() as $kk) {
			$v[$kk->name]=0;
		}

			foreach ($data['calonPegawai']->result() as $value) {
					foreach ($data['kelompok_kriteria']->result() as $kk) {
			$v[$value->name]+=$apaya[$value->name][$kk->kolom]*$bobot[$kk->kelompok_kriteria_id];
                }

				// 
			

			
		}

		// $data['bobot']=$bobot;



		$data['normalisasi']=$normalisasi;
		$data['apaya']=$apaya;
		$data['v']=$v;

	


		$data['title'] = 'UJI Calon Dosen';
		$data['kelompokKriteria'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);	
	}

}

/* End of file UjiLolos.php */
/* Location: ./application/controllers/UjiLolos.php */