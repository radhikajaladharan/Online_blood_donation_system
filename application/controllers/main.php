<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	}
	
public function login()
	{
		
		$this->load->view('loginfile');

	}
	public function login1()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("password");
			$email=$this->input->post("email");
			$rslt=$this->Mainmodel->selectpass1($email,$pass);
			if($rslt)
			{
				$id=$this->Mainmodel->getuserid1($email);
				$user=$this->Mainmodel->getuser1($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
				if($_SESSION['status']=='1'&&$_SESSION['usertype']=='0')
				{
					redirect(base_url().'main/studpage');
				}
				else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='1')
				{
					redirect(base_url().'main/teachpage');	
				}
				else
				{
					echo "waiting for approval";
				}
			}
			else
			{
				echo "invalid user";
			}
		}
		else{
			redirect('main/login','refresh');
		}
	}
	public function updatenew()
	{
		$this->load->view('updateform');
	}
	public function updateform()
	{
		
		$this->load->model('Mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->Mainmodel->updateform1($id);
		$this->load->view('updateform',$data);

	}
	public function updatedetails1()
	{
		$a=array("Firstname"=>$this->input->post("fname"),"Lastname"=>$this->input->post("lname"),"Address"=>$this->input->post("address"),"District"=>$this->input->post("dict"),"Pincode"=>$this->input->post("pin"),"Phonenumber"=>$this->input->post("phone"),"DOB"=>$this->input->post("dob"),"Gender"=>$this->input->post("gen"),"Highest_education"=>$this->input->post("edu"));
		$b=array("Email"=>$this->input->post("email"));
		$this->load->model('Mainmodel');
		
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->Mainmodel->updateform2($a,$b,$id);
			redirect('main/updateform','refresh');
		}

	}
	public function notif1()
	{
		$this->load->view('notification');
	}
	public function notif2()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("noti","notification",'required');
		
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$id=$this->session->id;
		$a=array("notification"=>$this->input->post("noti"),"currentdate"=>date('y-m-d'),'userid'=>$id);
		
		$this->Mainmodel->notif($a);
		redirect(base_url().'main/notif1');

	    }
	}
	public function notiftable()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->notiftable1();
		$this->load->view('notiftable',$data);

	}
	public function tabledel()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->deletenotif();
		$this->load->view('deletenotif',$data);

	}
	public function deletedetails1()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->deletedetails1($id);
		redirect('main/tabledel','refresh');


	}
	public function donorview()
	{
		
		$this->load->view('donorreg');

	}
	public function donorinsert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","Name",'required');
		$this->form_validation->set_rules("address","Address",'required');
		$this->form_validation->set_rules("age","Age",'required');
		$this->form_validation->set_rules("dict","District",'required');
		$this->form_validation->set_rules("phone","Phonenumber",'required');
		$this->form_validation->set_rules("height","Height",'required');
		$this->form_validation->set_rules("weight","weight",'required');
		$this->form_validation->set_rules("adharno","Adhar",'required');
		$this->form_validation->set_rules("bloodgroup","bloodgroup",'required');
		$this->form_validation->set_rules("email","Email",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("pass");
			$encpass=$this->Mainmodel->encpassword($pass);
		$a=array("name"=>$this->input->post("name"),"address"=>$this->input->post("address"),"age"=>$this->input->post("age"),"district"=>$this->input->post("dict"),"phoneno"=>$this->input->post("phone"),"height"=>$this->input->post("height"),"weight"=>$this->input->post("weight"),"adharno"=>$this->input->post("adharno"),"bloodgroup"=>$this->input->post("bloodgroup"));
		$b=array("email"=>$this->input->post("email"),"password"=>$encpass,"usertype"=>'0');
		
		$this->Mainmodel->donormodel($a,$b);
		redirect(base_url().'main/donorview');

	    }

}
public function orgview()
	{
		
		$this->load->view('orgreg');

	}
	public function orginsert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","Name",'required');
		$this->form_validation->set_rules("address","Address",'required');
		$this->form_validation->set_rules("dict","District",'required');
		$this->form_validation->set_rules("phone","Phonenumber",'required');
		$this->form_validation->set_rules("oid","orgid",'required');
		$this->form_validation->set_rules("email","Email",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("pass");
			$encpass=$this->Mainmodel->encpassword($pass);
		$a=array("name"=>$this->input->post("name"),"address"=>$this->input->post("address"),"district"=>$this->input->post("dict"),"phoneno"=>$this->input->post("phone"),"oid"=>$this->input->post("oid"));
		$b=array("email"=>$this->input->post("email"),"password"=>$encpass,"usertype"=>'1');
		
		$this->Mainmodel->orgmodel($a,$b);
		redirect(base_url().'main/orgview');

	    }

}
public function donortable()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->donortable1();
		$this->load->view('donorview',$data);

	}
	public function donorapprove()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->donorapprove1($id);
		redirect('main/donortable','refresh');

	}
	public function donorreject()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->donorreject1($id);
		redirect('main/donortable','refresh');

	}
	public function donortable2()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->donortable3();
		$this->load->view('donorview2',$data);

	}
	public function orgtable()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->orgtable1();
		$this->load->view('orgview',$data);

	}
	public function orgapprove()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->orgapprove1($id);
		redirect('main/orgtable','refresh');

	}
	public function orgreject()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->orgreject1($id);
		redirect('main/orgtable','refresh');

	}
	public function orgtable2()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->orgtable3();
		$this->load->view('orgview2',$data);

		

	}
	public function blog()
	{
		
		$this->load->view('bloodlogin');

	}
	public function bloodlogin1()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("password");
			$email=$this->input->post("email");
			$rslt=$this->Mainmodel->selectpass2($email,$pass);
			if($rslt)
			{
				$id=$this->Mainmodel->getuserid2($email);
				$user=$this->Mainmodel->getuser2($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
				if($_SESSION['status']=='1'&&$_SESSION['usertype']=='0')
				{
					redirect(base_url().'main/dhome');
				}
				else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='1')
				{
					redirect(base_url().'main/ohome');	
				}
				else if($_SESSION['status']=='1'&&$_SESSION['usertype']=='2')
				{
					redirect(base_url().'main/ahome');	
				}
				else
				{
					echo "waiting for approval";
				}
			}
			else
			{
				echo "invalid user";
			}
		}
		else{
			redirect('main/blog','refresh');
		}
	}
	public function bhome()
	{
		
		$this->load->view('bloodhome');

	}
	public function ahome()
	{
		
		$this->load->view('adminhome');

	}
	public function dhome()
	{
		 $this->load->model('mainmodel');
$data['n']=$this->mainmodel->viewurfile();
$this->load->view('donorhome',$data);
		
		//$this->load->view('donorhome');//

	}
	public function ohome()
	{
		
		$this->load->view('orghome');

	}
	public function notification()
{	$this->load->model('mainmodel');
	$data['n']=$this->mainmodel->data();
	$this->load->view('note',$data);
}

public function deletedata()
{	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->deletenotification($id);
	redirect('main/notification','refresh');
}
public function addnotify()
{
	$this->load->view('addnotify');
}
public function addnotification()
{
	$this->load->model('mainmodel');
$this->load->library('form_validation');
$this->form_validation->set_rules("note",'notification','required');
if($this->form_validation->run())
{
	$a=array('notification'=>$this->input->post('note'),
		'date'=>date('y-m-d'));
	$this->mainmodel->insertnotify($a);

}
else
{
	echo 'ADDITION OF NOTIFICATION FAILED';
}

redirect('main/notification','refresh');
}
public function noteview()
{ 
	$this->load->model('mainmodel');
$data['n']=$this->mainmodel->data();
$this->load->view('noteview',$data);
}
public function noteview2()
{ 
	$this->load->model('mainmodel');
$data['n']=$this->mainmodel->data();
$this->load->view('noteview2',$data);
}
public function dupdate()
	{
		$this->load->view('donorupdate');
	}
	public function dupdateform()
	{
		
		$this->load->model('Mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->Mainmodel->dupdateform1($id);
		$this->load->view('donorupdate',$data);

	}
	public function donorupdate()
	{
		$a=array("name"=>$this->input->post("name"),"address"=>$this->input->post("address"),"age"=>$this->input->post("age"),"district"=>$this->input->post("dict"),"phoneno"=>$this->input->post("phone"),"height"=>$this->input->post("height"),"weight"=>$this->input->post("weight"),"adharno"=>$this->input->post("adharno"),"bloodgroup"=>$this->input->post("bloodgroup"),);
		$b=array("email"=>$this->input->post("email"));
		$this->load->model('Mainmodel');
		
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->Mainmodel->dupdateform2($a,$b,$id);
			redirect('main/dupdateform','refresh');
		}

	}
public function oupdate()
	{
		$this->load->view('orgupdate');
	}
	public function oupdateform()
	{
		
		$this->load->model('Mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->Mainmodel->oupdateform1($id);
		$this->load->view('orgupdate',$data);

	}
	public function orgupdate()
	{
		$a=array("name"=>$this->input->post("name"),"address"=>$this->input->post("address"),"district"=>$this->input->post("dict"),"phoneno"=>$this->input->post("phone"),"oid"=>$this->input->post("oid"));
		$b=array("email"=>$this->input->post("email"));
		$this->load->model('Mainmodel');
		
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->Mainmodel->oupdateform2($a,$b,$id);
			redirect('main/oupdateform','refresh');
		}

	}
	public function gallery()
	{
		$this->load->view('pic');
	}
	public function addfile()
{
$this->load->view('fileupload');
}
public function fileupload()
{
$config['upload_path']='./upload/';
$config['allowed_types']='gif|jpg|png|pdf|doc';
$config['max_size']=1000;
//$config['max_height']=1000;
//$config['max_width']=700;
$this->load->library('upload',$config);
if(!$this->upload->do_upload('pic'))
{
$error=array('error'=>$this->upload->display_errors());
print_r($error); }

else
{
$data=array('pic'=>$this->upload->data());
$img=$data['pic']['file_name'];
}

$a=array('pic'=>$img);
$this->load->model('mainmodel');
$this->mainmodel->insertfile($a);

redirect('main/addfile','refresh');

}

public function viewfile()
{ $this->load->model('mainmodel');
$data['n']=$this->mainmodel->viewurfile();
$this->load->view('viewfile',$data);
}
public function updatedate()
{ $this->load->model('mainmodel');
$data['n']=$this->uri->segment(3);
$this->load->view('updatedate',$data);
}


public function updatecurrentdate()
{

$this->load->model('mainmodel');
$this->load->library('form_validation');
$this->form_validation->set_rules("ddate",'donation date','required');
$this->form_validation->set_rules("ndate",'next date','required');
if($this->form_validation->run())
{
$a=array('ddate'=>$this->input->post('ddate'),
'ndate'=>$this->input->post('ndate'));
$this->mainmodel->insertdatetable($a,$this->input->post('id'));
   redirect('main/donortable2','refresh');
}
//redirect('main/donartable2','refresh');
}










}
?>