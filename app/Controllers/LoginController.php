<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('templates/header');
        echo view('login');
        echo view('templates/footer');
    } 
  
    public function signin()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $model->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $pwd_verify = password_verify($password, $pass);
            if($pwd_verify){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'password' => $data['password'],
                    'c_password' => $data['c_password'],
                    'email' => $data['email'],
                    'role' => $data['role'],
                    'isSignedIn' => TRUE
                ];

                $session->set($ses_data);
                if($data['role'] == "admin"){

                   // return redirect()->to(base_url('admin'));
                    //return redirect()->to('/dashboard');
                    echo view('dashboard');

                }elseif($data['role'] == "editor"){

                   // return redirect()->to(base_url('editor'));
                   // return redirect()->to('/dashboard');
                    echo view('dashboard');
                }
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'wrong password.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'wrong email.');
            return redirect()->to('/login');
        }
    }


        public function ForgotPassword()
    {
            $this->db->select('email');
            $this->db->from('users'); 
            $this->db->where('email', $email); 
            $query=$this->db->get();
            return $query->row_array();
    }

    public function sendpassword($data)
    {
            $email = $data['email'];
            $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
            $row=$query1->result_array();
            if ($query1->num_rows()>0)
        
    {
            $passwordplain = "";
            $passwordplain  = rand(999999999,9999999999);
            $newpass['password'] = md5($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('user_registrations', $newpass); 
            $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
            $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
            $mail_message.='<br>Please Update your password.';
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Your company name';        
            date_default_timezone_set('Etc/UTC');
            require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPSecure = "tls"; 
            $mail->Debugoutput = 'html';
            $mail->Host = "yooursmtp";
            $mail->Port = 587;
            $mail->SMTPAuth = true;   
            $mail->Username = "your@email.com";    
            $mail->Password = "password";
            $mail->setFrom('admin@site', 'admin');
            $mail->IsHTML(true);
            $mail->addAddress($email);
            $mail->Subject = 'OTP from company';
            $mail->Body    = $mail_message;
            $mail->AltBody = $mail_message;
            if (!$mail->send()) {
                $this->session->set_flashdata('msg','Failed to send password, please try again!');
            } else {
            $this->session->set_flashdata('msg','Password sent to your email!');
            }
            redirect(base_url().'user/Login','refresh');        
            }
            else
            {  
            $this->session->set_flashdata('msg','Email not found try again!');
            redirect(base_url().'user/Login','refresh');
            }
            }

}