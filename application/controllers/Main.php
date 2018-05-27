<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function pertama()
	{
		$pertama = $this->input->post('pertama');
		$kedua = $this->input->post('kedua');
		$ketiga = $this->input->post('ketiga');
		$keempat = $this->input->post('keempat');
		
		$temp_empat = array();
		$temp_satu = array();
		$temp_dua = array();
		$temp_tiga = array();
		foreach ($pertama as $value)
		{
			//cek angka 6
			if ($value == 6)
			{
				$key = array_search($value,$pertama);
				unset($pertama[$key]);
			}
		}

		foreach ($kedua as $value)
		{
			//cek angka 6
			if ($value == 6)
			{
				$key = array_search($value,$kedua);
				unset($kedua[$key]);
			}
		}
		
		foreach ($ketiga as $value)
		{
			//cek angka 6
			if ($value == 6)
			{
				$key = array_search($value,$ketiga);
				unset($ketiga[$key]);
			}
		}

		foreach ($keempat as $value)
		{
			//cek angka 6
			if ($value == 6)
			{
				$key = array_search($value,$keempat);
				unset($keempat[$key]);
			}
		}

		//cek angka 1
		$count_empat = count(array_keys($keempat,1));
		$count_satu = count(array_keys($pertama,1));
		$count_dua = count(array_keys($kedua,1));
		$count_tiga = count(array_keys($ketiga,1));
		for ($x=0;$x<$count_empat;$x++)
		{
			array_push($temp_empat,1);

		}
		foreach ($temp_empat as $value_empat)
		{
			$key = array_search($value_empat,$keempat);
			unset($keempat[$key]);
			array_push($pertama,$value_empat);
		}

		for ($x=0;$x<$count_satu;$x++)
		{
			array_push($temp_satu,1);

		}
		foreach ($temp_satu as $value_satu)
		{
			$key = array_search($value_satu,$pertama);
			unset($pertama[$key]);
			array_push($kedua,$value_satu);
		}

		for ($x=0;$x<$count_dua;$x++)
		{
			array_push($temp_dua,1);

		}
		foreach ($temp_dua as $value_dua)
		{
			$key = array_search($value_dua,$kedua);
			unset($kedua[$key]);
			array_push($ketiga,$value_dua);
		}

		for ($x=0;$x<$count_tiga;$x++)
		{
			array_push($temp_tiga,1);

		}
		foreach ($temp_tiga as $value_tiga)
		{
			$key = array_search($value_tiga,$ketiga);
			unset($ketiga[$key]);
			array_push($keempat,$value_tiga);
		}
		
		// print_r($kedua);die;

		$all = [$pertama,$kedua,$ketiga,$keempat];

		echo json_encode($all);

	}

	public function cetak()
	{
		//data rolled
		$data['all'] = json_decode($this->input->get('data_all'));
		
		$data['pertama_rolled'] = $data['all']->pertama;
		$data['kedua_rolled'] = $data['all']->kedua;
		$data['ketiga_rolled'] = $data['all']->ketiga;
		$data['keempat_rolled'] = $data['all']->keempat;

		//data moved
		$data['after'] = json_decode($this->input->get('data_after'));
		
		// print_r($data['after']);die;
		$data['pertama_after'] = $data['after'][0];
		$data['kedua_after'] = $data['after'][1];
		$data['ketiga_after'] = $data['after'][2];
		$data['keempat_after'] = $data['after'][3];

		$this->load->view('cetak',$data);
	}
}
