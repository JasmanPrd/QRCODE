<?php

namespace App\Controllers;

use App\Libraries\Ciqrcode;
use \App\Models\HomeModel;

class Home extends BaseController
{

	public function index()
	{
		session();
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('home', $data);
	}

	public function create()
	{
		// dd(date('Y-m-d', strtotime($this->request->getVar('tgl-lahir'))));
		// lakukan validasi
		$validation =  \Config\Services::validation();
		$validation->setRules([
			'tempat' => 'required',
			'tgl-lahir' => 'required',
			'profesi' => 'required',
			'thn-pendaftaran' => 'required',
			'nohp' => 'required',
			'sarana' => 'required'
		]);
		$isDataValid = $validation->withRequest($this->request)->run();

		// jika data valid, simpan ke database
		if ($isDataValid) {
			$dir = 'public\uploads\\';
			$ciqr = new Ciqrcode();
			$config['cacheable']    = true;
			$config['cachedir']     = 'uploads\\';
			$config['errorlog']     = 'uploads\\';
			$config['imagedir']     = $dir;
			$config['quality']      = true;
			$config['size']         = '1024';
			$config['black']        = array(224, 255, 255);
			$config['white']        = array(70, 130, 180);
			$ciqr->initialize($config);
			$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$random = substr(str_shuffle($permitted_chars), 0, 9);
			$image_name = 'satudata_' . $random . '.jpg';
			$params['data'] = "Tempat lahir : " . $this->request->getVar('tempat') . "\n" . "Tanggal lahir : " . $this->request->getVar('tgl-lahir') . "\n" . "Profesi : " . $this->request->getVar('profesi') . "\n" . "Tahun Pendaftaran : " . $this->request->getVar('thn-pendaftaran') . "\n" . "No HP : " . $this->request->getVar('nohp') . "\n" . "Sarana/Prasarana : " . $this->request->getVar('sarana');
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = FCPATH . $config['imagedir'] . $image_name;
			// $params['savename'] = move($config['imagedir'], $image_name);
			$ciqr->generate($params);
			// dd($params['savename']);
			// $res = [
			// 	"tempat" => $this->request->getVar('tempat'),
			// 	"tgl_lahir" =>  date('Y-m-d', strtotime($this->request->getVar('tgl-lahir'))),
			// 	"profesi" => $this->request->getVar('profesi'),
			// 	"thn-pendaftaran" => $this->request->getVar('thn-pendaftaran'),
			// 	"nohp" => $this->request->getVar('nohp'),
			// 	"sarana" => $this->request->getVar('sarana'),
			// 	"nama_qr" => $image_name
			// ];
			// dd($res);
			$home = new HomeModel();
			$home->insert([
				"tempat" => $this->request->getVar('tempat'),
				"tgl_lahir" =>  date('Y-m-d', strtotime($this->request->getVar('tgl-lahir'))),
				"profesi" => $this->request->getVar('profesi'),
				"thn-pendaftaran" => $this->request->getVar('thn-pendaftaran'),
				"nohp" => $this->request->getVar('nohp'),
				"sarana" => $this->request->getVar('sarana'),
				"nama_qr" => $image_name
			]);

			session()->setFlashdata('sukses', 'Data Berhasil Ditambahkan.');
			return redirect()->to('/');
		} else {
			return redirect()->to('/')->withInput()->with('validation', $validation);;
		}
	}
}
