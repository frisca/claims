<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Formulir extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('global_model');
			$this->load->model('persyaratan_model');
			$this->load->model('formulir_model');
			$this->load->library('pdf');
		}

		public function index()
		{
			$id = $this->input->post('id_jenis');
			$data['pengguna'] = $this->global_model->getDataByCondition('pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			$data['det_pengguna'] = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			$data['formulir'] = $id;
			$this->load->view('formulir/index', $data);
		}

		public function processAdd(){
			$pengguna = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
			if(empty($pengguna)){
				$data = array(
					'alamat' => $this->input->post('alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kelurahan' => $this->input->post('kelurahan'),
					'no_tlp' => $this->input->post('no_tlp'),
					'no_ktp' => $this->input->post('no_ktp'),
					'id_pengguna' => $this->session->userdata('id'),
					'tempt_lahir' => $this->input->post('tempt_lahir'),
					'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir')))
				);
				$result = $this->global_model->insertData('detail_pengguna', $data);
				if($result == true){
					$res = $this->global_model->getDataByCondition('detail_pengguna', array('id_pengguna' => $this->session->userdata('id')))->row();
					$form = array(
						'id_detail_pengguna' => $res->id_detail_pengguna,
						'id_pengguna' => $this->session->userdata('id'),
						'id_jenis_formulir' => $this->input->post('formulir'),
						'status' => 0
					);
					$hasil = $this->global_model->insertData('formulir', $form);
					if($hasil == true){
						$formulirs = $this->formulir_model->getFormulirByDesc()->row();
						return redirect(base_url() . 'formulir/list_persyaratan/' . $formulirs->id_formulir);
					}else{

					}
				}else{

				}
			}else{
				$data = array(
					'alamat' => $this->input->post('alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'provinsi' => $this->input->post('provinsi'),
					'kabupaten' => $this->input->post('kabupaten'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kelurahan' => $this->input->post('kelurahan'),
					'no_tlp' => $this->input->post('no_tlp'),
					'no_ktp' => $this->input->post('no_ktp'),
					'id_pengguna' => $this->session->userdata('id'),
					'tempt_lahir' => $this->input->post('tempt_lahir'),
					'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir')))
				);
				$result = $this->global_model->updateData('detail_pengguna', array('id_detail_pengguna' => $pengguna->id_detail_pengguna), $data);
				if($result == true){
					$form = array(
						'id_detail_pengguna' => $pengguna->id_detail_pengguna,
						'id_pengguna' => $this->session->userdata('id'),
						'id_jenis_formulir' => $this->input->post('formulir'),
						'status' => 0
					);
					$hasil = $this->global_model->insertData('formulir', $form);
					if($hasil == true){
						$formulirs = $this->formulir_model->getFormulirByDesc()->row();
						return redirect(base_url() . 'formulir/list_persyaratan/' . $formulirs->id_formulir);
					}else{
						
					}
				}
			}
		}

		public function list_persyaratan($id){
			$formulir = $this->global_model->getDataByCondition('formulir', array('id_formulir'=>$id))->row();
			$persyaratan = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$formulir->id_jenis_formulir))->row();
			$data['persyaratan'] = $this->persyaratan_model->getListDetailPersyaratan($persyaratan->id_persyaratan)->result();
			$data['syarat'] = $this->global_model->getDataByCondition('persyaratan', array('id_jenis'=>$formulir->id_jenis_formulir))->row();
			$data['formulir'] = $formulir;
			$this->load->view('formulir/list_persyaratan', $data);
		}

		public function persyaratan(){
			$data['persyaratan'] = $this->formulir_model->getListFormulir($this->session->userdata('id'))->result();
			$this->load->view('formulir/persyaratan', $data);
		}

		public function downloadFormulir($id){
			$formulir = $this->formulir_model->getFormulirById($id)->row();
			// $pdf = new FPDF();
	        $pdf = new FPDF('P', 'mm','Legal');
	        //Mulai dokumen
	        $pdf->AddPage();
	        $pdf->Image('image/header.png',3,2,210,0);

        	$pdf->Ln(11);

        	$pdf->SetFont('Arial', 'B', 11);
	        $pdf->Cell(55, 5, 'A. JENIS KLIM *)', 0, 0);

	        $pdf->SetFont('Arial', '', 11);
			$pdf->Cell(58, 5, ': ' . $formulir->jenis_formulir, 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(55, 5, 'B. PEMOHON/PESERTA', 0, 1);
			// $pdf->Cell(58, 5, ': 0', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Nama', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->nama, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Lahir', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->tempt_lahir . ', ' . date('d-m-Y', strtotime($formulir->tgl_lahir)), 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     NIP/NIK/NRP/NPV', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->username, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Notes', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Alamat', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->alamat, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Kelurahan/Desa', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->kelurahan, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Kecamatan', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->kecamatan, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Kota/Kabupaten', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->kabupaten, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     No.KTP', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->no_ktp, 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Nomor Telepon/HP', 0, 0);
			$pdf->Cell(100, 5, ': ' . $formulir->no_tlp, 0, 1);


			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(55, 5, 'C. YANG MENGALAMI KEJADIAN', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Nama', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Jenis Kelamin', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Lahir', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Tanggal Kejadian', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     NIP/NIK/NRP/NPV', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(55, 5, 'D. KANTOR BAYAR', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     BANK/GIRO', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     No. Rekening', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Kantor POS', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(55, 5, '     Jenis Pembayaran SPP', 0, 0);
			$pdf->Cell(100, 5, ': ......................................................................................................................', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(55, 5, 'KHUSUS PENSIUN', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(55, 5, 'E. INFORMASI LAINNYA', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(90, 5, '     NOTAS (bagi penerima pensiun rangkap)', 0, 0);
			$pdf->Cell(100, 5, ': .....................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(90, 5, '     NIP (Suami/Istri)', 0, 0);
			$pdf->Cell(100, 5, ': .....................................................................................', 0, 1);

			$pdf->Ln(1);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(90, 5, '     NPWP', 0, 0);
			$pdf->Cell(100, 5, ': .....................................................................................', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(55, 5, 'F. PERNYATAAN KUASA', 0, 1);

			// $pdf->Ln(2);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(90, 5, '     Dengan ini saya menyatakan', 0, 0);
			$pdf->Cell(100, 5, ':', 0, 1);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(90, 5, '     Memberi kuasa dengan hak substitusi kepada PT TASPEN (PERSERO) khusus untuk mendebet rekening saya nomor:', 0, 0);

			$pdf->Ln(5);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(90, 5, '     .................................................. di PT. BANK/GIRO : ............................................................................. Untuk mengembalikan', 0, 0);

			$pdf->Ln(5);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(90, 5, '     seluruh kelebihan pembayaran uang pensiun yang bukan merupakan hak saya atau ahli waris saya menurut ketentuan', 0, 0);

			$pdf->Ln(5);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(90, 5, '     yang berlaku untuk dikreditkan kepada PT TASPEN (PERSERO).', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(55, 5, 'Demikian permohonan ini dan keterangan di atas saya buat dengan sebenar-benarnya dan penuh kesadaran, apabila', 0, 1);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(55, 5, 'keterangan yang saya berikan tidak benar, saya bersedia mengganti semua kerugian kepada negara/ PT TASPEN', 0, 1);

			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(55, 5, '(PERSERO) dan bersedia dituntut sesuai dengan perundang-undangan yang berlaku.', 0, 1);

			$pdf->Ln(3);

			$pdf->SetFont('Arial', '', 11);
			$pdf->Cell(0, 0, '...............,............................, 20.....', 0, 1, 'R');


			$pdf->Ln(10);

			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(0, 0, 'PEMOHON                     ', 0, 1, 'R');


			$pdf->Ln(20);

			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(0, 0, 'Materai Rp. 6,000,-                   ', 0, 1, 'R');

			$pdf->Ln(5);

			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(0, 0, '( ............................................................... )', 0, 1, 'R');

			$pdf->Ln(5);

			$pdf->SetFont('Arial', '', 7);
			$pdf->Cell(0, 0, 'Nama Jelas ( tanda tangan/cap tiga jari tengah kiri ) ', 0, 1, 'R');


			$pdf->Ln(30);

			$pdf->SetFont('Arial', '', 7);
			$pdf->Cell(0, 0, '*) Bagi pembayaran melalui rekening/bank, harap gunakan materai Rp. 6,000,-', 0, 1, 'L');

			$pdf->Ln(5);
	       
	        $pdf->Output('Test.pdf','I');
		}

		public function download($link){
			$tamp = str_replace("%20", " ", $link);				
			force_download('formulir/' . $tamp,NULL);
		}
	}
?>