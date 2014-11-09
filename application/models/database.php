<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Database extends CI_Model
{
  public function _construct()
  {

    parent::_construct();
  }
	public function login($data)
	{
		$username=$data['username'];
		$password=$data['password'];
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query=$this->db->get('users');
		if($query->num_rows ==1)
		{
			$row=$query->row();
			$data=array(
				  'name' =>$row->name,
				  'id'   =>$row->sno,
				  'telno'=>$row->telno,
				  'result'=>true
				);
			$this->session->set_userdata($data);
			$data['result']=true;
			
		}
		else
			$data['result']=false;
		return $data;
	}
    
    public function register($data)
    {
    	$username=$data['username'];
    	$password=$data['password'];
    	$conpassword=$data['conpassword'];
    	$name=$data['name'];
    	$telno=$data['telno'];
    	$query = array('username' => $username,
    	                'password' =>$password,
    	                'name' =>$name,
    	                'telno' =>$telno );

    	$this->db->insert('users',$query);
    }
    
    public function getloc($data,$flag)
    {
    	if($flag==0)
    	{
          $id=$data['id'];
          $initloc=$data['initloc'];
          $finalloc=$data['finalloc'];
          $this->db->where('loc',$initloc);
          $inloc=$this->db->get('location')->row();
          $inlat=$inloc->lat;
          $inlongt=$inloc->longt;
          $this->db->where('loc',$finalloc);
          $finloc=$this->db->get('location')->row();
          $finlat=$finloc->lat;
          $finlongt=$finloc->longt;
          $locdata=array('id' => $id,
          	             'clat' => $inlat ,
                         'clongt' => $inlongt,
                         'flat' => $finlat,
                         'flongt' => $finlongt  );
          return $locdata;
      }
      else if($flag==1)
      {
         $id=$data['id'];
         $this->db->where('id',$id);
         $loc=$this->db->get('userloc');
         if($loc->num_rows>0)
         {
         $locdata=$loc->row();
         $locarray=array('id' => $locdata->id,
                         'clat' => $locdata->clat ,
                         'clongt' => $locdata->clongt,
                         'flat' => $locdata->flat,
                         'flongt' => $locdata->flongt  );
       }
       else
       {
         $locarray=array('id' => $id,
                         'clat' => "Not found" ,
                         'clongt' => "Not found",
                         'flat' => "Not found",
                         'flongt' => "Not found"  );
       }


         return $locarray;

      }
    }

    public function putloc($data)
    {
      $id=$data['id'];
      $this->db->where('id',$id);
      $result=$this->db->get('userloc');
      if($result->num_rows==0)
      {
        $this->db->insert('userloc',$data);
      }
      else
      {
         $this->db->where('id',$id);
         $this->db->update('userloc',$data);
      }
      //$this->session->set_userdata()

    }
    public function getusers($data)
    {
        $flat=$data['flat'];
        $flongt=$data['flongt'];
        $this->db->where('flat',$flat);
        $this->db->where('flongt',$flongt);
        $list=$this->db->get('userloc');
        return $list;

    }
    public function getuserdet($user)
    {
      if($this->db->get('users')->num_rows>0)
      {
      $this->db->where('sno',$user);
      $usera=$this->db->get('users')->row();
      $userarray= array( 'name' => $usera->name,
                         'telno'=> $usera->telno );
    }
    else
      $userarray= array( 'name' => "Not",
                         'telno'=> "Not" );

      return $userarray;
    }
}



?>