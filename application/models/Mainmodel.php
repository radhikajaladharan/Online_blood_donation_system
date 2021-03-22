<?php
class Mainmodel extends CI_model
{
	public function regist($a)
	{
		$this->db->insert("employees",$a);
	}
	public function encpassword($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
	}
	public function table1()
	{
		$this->db->select('*');
		$qry=$this->db->get("employees");
		return $qry;
	}
	public function singledata($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("employees");
		return $qry;
	}
	public function singleselect()
	{
		$qry=$this->db->get("employees");
		return $qry;
	}
	public function updatedetails($a,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("employees",$a);
		return $qry;


	}
	public function deletedetails($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("employees");

	}
	public function tablenew1()
	{
		$this->db->select('*');
		$qry=$this->db->get("employees");
		return $qry;
	}
	public function approvedetails($id)
	{
		$this->db->set('status','1');
		$this->db->where("id",$id);
		$this->db->update("employees");

	}
	public function Rejectdetails($id)
	{
		$this->db->set('status','2');
		$this->db->where("id",$id);
		$this->db->update("employees");

	}
	public function selectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("employees");
		$this->db->where("emailid","$email");
		$query=$this->db->get()->row('password');
		return $this->verifypass($pass,$query);
		}
		public function verifypass($pass,$query)
		{
			return password_verify($pass,$query);
		}
		public function getuserid($email)
		{
			$this->db->select('id');
			$this->db->from("employees");
			$this->db->where("emailid",$email);
			return $this->db->get()->row('id');

		}
		public function getuser($id)
		{
			$this->db->select('*');
			$this->db->from("employees");
			$this->db->where("id",$id);
			return $this ->db->get()->row();

		}
		public function register1($a,$b)
		{
			$this->db->insert("login",$b);
			$loginid=$this->db->insert_id();
			$a['userid']=$loginid;
		$this->db->insert("student",$a);
	}
	public function tableview1()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=student.userid','inner');
		$qry=$this->db->get("student");
		return $qry;
	}
	public function approvedetails1($id)
	{
		$this->db->set('status','1');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function Rejectdetails1($id)
	{
		$this->db->set('status','2');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function tregister1($a,$b)
		{
			$this->db->insert("login",$b);
			$loginid=$this->db->insert_id();
			$a['userid']=$loginid;
		$this->db->insert("teacher",$a);
	}
	public function selectpass1($email,$pass)
	{
		$this->db->select('Password');
		$this->db->from("login");
		$this->db->where("Email","$email");
		$query=$this->db->get()->row('Password');
		return $this->verifypass1($pass,$query);
		}
		public function verifypass1($pass,$query)
		{
			return password_verify($pass,$query);
		}
		public function getuserid1($email)
		{
			$this->db->select('id');
			$this->db->from("login");
			$this->db->where("Email",$email);
			return $this->db->get()->row('id');

		}
		public function getuser1($id)
		{
			$this->db->select('*');
			$this->db->from("login");
			$this->db->where("id",$id);
			return $this ->db->get()->row();

		}
		public function updateform1($id)
	{
		$this->db->select('*');
		$qry=$this->db->join("login",'login.id=student.userid','inner');
		$qry=$this->db->where("student.userid",$id);
		$qry=$this->db->get("student");
		return $qry;
	}
	public function updateform2($a,$b,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("userid",$id);
        $qry=$this->db->join('login','login.id=student.userid','inner');
        $qry=$this->db->update("student",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


	}
	public function notif($a)
	{
		$this->db->insert("notification",$a);
	}
	public function notiftable1()
	{
		$this->db->select('*');
		$this->db->join('teacher','teacher.userid=notification.userid','inner');
		$qry=$this->db->get("notification");
		return $qry;
	}
	public function deletenotif()
	{
		$this->db->select('*');
		$qry=$this->db->get("notification");
		return $qry;
	}
	public function deletedetails1($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("notification");

	}
	public function donormodel($a,$b)
		{
			$this->db->insert("login",$b);
			$loginid=$this->db->insert_id();
			$a['userid']=$loginid;
		$this->db->insert("donor",$a);
	}
	
	public function orgmodel($a,$b)
		{
			$this->db->insert("login",$b);
			$loginid=$this->db->insert_id();
			$a['userid']=$loginid;
		$this->db->insert("organization",$a);
	}
	public function donortable1()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=donor.userid','inner');
		$qry=$this->db->get("donor");
		return $qry;
	}
	public function donorapprove1($id)
	{
		$this->db->set('status','1');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function donorreject1($id)
	{
		$this->db->set('status','2');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function donortable3()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=donor.userid','inner');
		$qry=$this->db->get("donor");
		return $qry;
	}
	public function orgtable1()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=organization.userid','inner');
		$qry=$this->db->get("organization");
		return $qry;
	}
	public function orgapprove1($id)
	{
		$this->db->set('status','1');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function orgreject1($id)
	{
		$this->db->set('status','2');
		$this->db->where("id",$id);
		$this->db->update("login");

	}
	public function orgtable3()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=organization.userid','inner');
		$qry=$this->db->get("organization");
		return $qry;
	}
	public function selectpass2($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email","$email");
		$query=$this->db->get()->row('password');
		return $this->verifypass2($pass,$query);
		}
		public function verifypass2($pass,$query)
		{
			return password_verify($pass,$query);
		}
		public function getuserid2($email)
		{
			$this->db->select('id');
			$this->db->from("login");
			$this->db->where("email",$email);
			return $this->db->get()->row('id');

		}
		public function getuser2($id)
		{
			$this->db->select('*');
			$this->db->from("login");
			$this->db->where("id",$id);
			return $this ->db->get()->row();

		}
		public function data()
{	$this->db->select('*');
	$qry=$this->db->get("notify");
	return $qry;

}


public function deletenotification($id)
{
	$this->db->select('*');
	$this->db->where('id',$id);
	$this->db->delete("notify");
}


public function insertnotify($a)
{
	$this->db->insert("notify",$a);

}
public function dupdateform1($id)
	{
		$this->db->select('*');
		$qry=$this->db->join("login",'login.id=donor.userid','inner');
		$qry=$this->db->where("donor.userid",$id);
		$qry=$this->db->get("donor");
		return $qry;
	}
	public function dupdateform2($a,$b,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("userid",$id);
        $qry=$this->db->join('donor','login.id=donor.userid','inner');
        $qry=$this->db->update("donor",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


	}
	public function oupdateform1($id)
	{
		$this->db->select('*');
		$qry=$this->db->join("login",'login.id=organization.userid','inner');
		$qry=$this->db->where("organization.userid",$id);
		$qry=$this->db->get("organization");
		return $qry;
	}
	public function oupdateform2($a,$b,$id)
	{
        $this->db->select('*');
        $qry=$this->db->where("userid",$id);
        $qry=$this->db->join('organization','login.id=organization.userid','inner');
        $qry=$this->db->update("organization",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


	}
	public function insertfile($a)
{
$this->db->insert("files",$a);

}

public function viewurfile()
{ $this->db->select('*');
$qry=$this->db->get("files");
return $qry;

}
public function insertdatetable($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("userid",$id);
$qry=$this->db->update("donor",$a);
return $qry;


}


	
	

	
	

	
}
?>