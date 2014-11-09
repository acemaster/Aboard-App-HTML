<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller
{
	public function _construct()
	{

		parent::_construct();
	}
	public function updateloc()
	{
    try
    {
      $this->load->model("database");
	   $data["updatelocform"]=$this->config->item("updatelocform");
     echo $this->session->userdata('id');
     $sarray=array('id' => $this->session->userdata('id'));
     //if($this->database->getloc($sarray,1)->num_rows > 0)
     
     if($this->input->post('submit'))
        {
                 
            $this->load->library("formvalidator");
           if($this->formvalidator->isValid("updateloc"))
           {
                   $this->load->model("database");
                   $sendarray=array( 'id' =>$this->session->userdata('id'),
                                    'initloc' =>$this->input->post('initloc') ,
                                     'finalloc'=>$this->input->post('finalloc')
                                     );
                   $locdata=$this->database->getloc($sendarray,0);
                   $this->database->putloc($locdata);

            }
           else
           {
           $this->data["status"]->message = validation_errors();
           $this->data["status"]->success = FALSE;
           }
          }
        $data["location"]=$this->database->getloc($sarray,1);
        return $this->load->view("updateloc",$data);
     }catch (Exception $err) {
        log_message("error", $err->getMessage());
            return show_error($err->getMessage());
        
      } 

        
      
	}
  public function logout()
  {
    $this->session->sess_destroy();
    $this->load->helper('url');
    header("Location: ".site_url("login/login2"));
  }
  public function getusers()
  {
    $this->load->model("database");
    $sarray=array('id' => $this->session->userdata('id'));
    $location=$this->database->getloc($sarray,1);
    $data['location']=$location;
    $result=$this->database->getusers($location);
    $data['query']=$result;
    return $this->load->view("getusers",$data);

    
  }
  public function showuser()
  {
    $this->load->model("database");
    $user=$this->input->post('user');
    
    $userarray['user']=$this->database->getuserdet($user);
    $sarray=array('id' => $user);
    $location=$this->database->getloc($sarray,1);
    $userarray['location']=$location;
    $this->load->view("showuser",$userarray);
  }
}




?>