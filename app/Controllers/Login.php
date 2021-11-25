<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $nama_user = $this->request->getVar('nama_user');
        $password = $this->request->getVar('password');
        $data = $model->where('nama_user', $nama_user)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'nama_user'    => $data['nama_user'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Monitoring');
            }else{
                $session->setFlashdata('message', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('message', 'Username not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 