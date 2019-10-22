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
			$bobot[$value->bobot_kriteria_id] = $value->nilai / $jumlah;
		}
		$data['bobot']=$bobot;

		//TASK 2
		$data['calonPegawai'] = $this->M_db->get_all('calon_pegawai');
		
		//TASK 3
		$data['kelompok_kriteria'] = $this->M_db->get_all('kelompok_kriteria');
	
		$bk = [];
		$cp = [];
		$kk = [];
		$normalisasi = [];
		foreach ($data['bobotKriteria']->result() as $bk) {
			$bk_nama[] = $bk->nama;
            $bk_nilai[] = $bk->nilai;
            $bk_kelompok_kriteria[] = $bk->kelompok_kriteria;
            $bk_costbenefit[] = $bk->costbenefit;
		}
		foreach ($data['calonPegawai']->result() as $cp) {
			$cp_name[] = $cp->name;
	        $cp_usia[] = $cp->usia;
	        $cp_pendidikan_terakhir[] = $cp->pendidikan_terakhir;
	        $cp_pengalaman_kerja[] = $cp->pengalaman_kerja;
	        $cp_status_pernikahan[] = $cp->status_pernikahan;
	        $cp_jarak[] = $cp->jarak;
		}
		foreach ($data['kelompok_kriteria']->result() as $kk) {
			$kk_id[] = (int)$kk->kelompok_kriteria_id;
			$kk_name = $kk->name;
			$kk_jenis = $kk->jenis;
			$kk_r1 = (int)$kk->range_1;
			$kk_r2 = (int)$kk->range_2;
			$kk_r3 = (int)$kk->range_3;
			$kk_r4 = (int)$kk->range_4;
			$kk_r5 = (int)$kk->range_5;
			$kk_n1 = (int)$kk->nilai_r1;
			$kk_n2 = (int)$kk->nilai_r2;
			$kk_n3 = (int)$kk->nilai_r3;
			$kk_n4 = (int)$kk->nilai_r4;
			$kk_n5 = (int)$kk->nilai_r5;

			//TODO
			//cek bk_kelompok_kriteria == kk_id
		print_r($bk_kelompok_kriteria);die();
			if ($bk_kelompok_kriteria == 1) {
			//jika Usia dengan id 1 (Usia)
			
				if ($kk_id == 1) {
				//jika kelompok kriteria = 1 (Usia) 
					if ($cp_usia <= $kk_r1) {
						$cp_usia == $kk_n1;
					} 
					elseif ($cp_usia <= $kk_r2) {
						$cp_usia == $kk_n2;
					} 
					elseif ($cp_usia <= $kk_r3) {
						$cp_usia == $kk_n3;
					} 
					elseif ($cp_usia <= $kk_r4) {
						$cp_usia == $kk_n4;
					} 
					else {
						$cp_usia == $kk_n5;
					}
				}
			}
		}

		$data['normalisasi']=$normalisasi;


		$data['title'] = 'UJI Calon Dosen';
		$data['kelompokKriteria'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);	
	}

}

/* End of file UjiLolos.php */
/* Location: ./application/controllers/UjiLolos.php */