<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama'=>$nama
		);
		$this->db->insert('tb_user',$data_user);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('tb_user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }


  //untuk update berita

                    public function get($id)
                    {
                        $berita = $this->db->get_where('berita', ['ID' => $id ])->row();
                        return $berita;
                    }
                 
                 
                    /*
                        Update or Modify a record in the database
                    */
                    public function update($id) 
                    {
                        $data = [
                            //'name'        => $this->input->post('name'),
                            'title'         => $this->input->post('TITLE'),
                            'content'       => $this->input->post('CONTENT'),
                            'datetime'      => $this->input->post('DATETIME')
                        ];
                 
                        $result = $this->db->where('id',$id)->update('berita',$data);
                        return $result;
                                 
                    }






}
?>
