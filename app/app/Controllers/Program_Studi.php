<?php

namespace App\Controllers;
//Beranda = Controller
//beranda_v = view
//beranda_m = model
use App\Models\Program_Studi_Model;


class Program_Studi extends BaseController 
{
    public function __construct()
    {
        $this->session=\Config\Services::session();

        // $db = \Config\Database::connect();

        $custom = [
                    'DSN'      => '',
                    'hostname' => 'sql313.epizy.com', // 'localhost',
                    'username' => 'epiz_26770241', // '',
                    'password' => 'fvnCbNffge', //'',
                    'database' => 'epiz_26770241_ipb', // '', 
                    'DBDriver' => 'MySQLi',
                    'DBPrefix' => '',
                    'pConnect' => false,
                    'DBDebug'  => (ENVIRONMENT !== 'production'),
                    'cacheOn'  => false,
                    'cacheDir' => '',
                    'charset'  => 'utf8',
                    'DBCollat' => 'utf8_general_ci',
                    'swapPre'  => '',
                    'encrypt'  => false,
                    'compress' => false,
                    'strictOn' => false,
                    'failover' => [],
                    'port'     => 3306,
            ];
        $db = \Config\Database::connect($custom);

        $this->prodi = new Program_Studi_Model($db);
    }
    public function index()
    {        
        $data['session']=$this->session->getFlashdata('response');
        $data['dataProdi'] = $this->prodi->get()->getResult();

        // var_dump($data); die;
        echo view('header_v.php');
        echo view('program_studi_v.php', $data);
        echo view('footer_v.php');
    }

    public function add()
    {
        echo view('header_v');
        echo view('program_studi_form_v');
        echo view('footer_v');
    }

    public function edit($id)
    {
        $where=['kode_prodi' => $id];

        $data['dataProdi'] = $this->prodi->get($where)->getResult()[0];
        
        echo view('header_v');
        echo view('program_studi_form_v', $data);
        echo view('footer_v');
    }

    public function save()
    {
        $data=[
            'kode_prodi'    => $this->request->getPost('kode'),
            'nama_prodi'    => $this->request->getPost('nama'),
            'ketua_prodi'    => $this->request->getPost('ketua'),
        ];

        $id=$this->request->getPost('id');

        //insert
        if (empty($id)) {          
            $response = $this->prodi->insert($data);

            if ($response->resultID) {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil disimpan. ']);
            }
            else {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal disimpan. '.$response->connID->error]);
            }
        }

        //update
        else {
            $where=['kode_prodi' => $id];  
            $response=$this->prodi->update($data, $where);

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan. ']);
            }
            else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        

        return redirect()->to(site_url('Program_Studi'));
    }

    public function delete($id)
    {
        $where=['kode_prodi' => $id];

        $response=$this->prodi->delete($where);
        
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil dihapus.']);
        }
        else {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal dihapus. '.$response->connID->error]);
        }

        return redirect()->to(site_url('Program_Studi'));
    }
}

?>

