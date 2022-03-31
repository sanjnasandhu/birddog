<?php
session_start();
include('helper.php');
$obj = new database();
      
      
    //add new user
	if(isset($_POST['submit'])){  
	  $res = $obj->adduser($_POST, $_FILES);
		if($res['status'] == 1){
	     header('location:admindashboard.php');
	    }else{
	    echo "<script>alert('oops..sorry...');</script>";;
	    }
	}

    //update user
    if(isset($_POST['update'])){  	
      $obj->updateuser($_POST,$_FILES);
    }

    //add order
	if(isset($_POST['save_submit'])){  
	  $res = $obj->insertorder($_POST);
		if($res['status'] == 1){
		header('location:../orders.php');
		}else{
		echo "<script>alert('oops..sorry...');</script>";;
		}
	}

    //add admin_user 
	if(isset($_POST['reg_submit'])){  
	  $res = $obj->adddata($_POST, $_FILES);
		if($res['status'] == 1){
		echo $res['msg'];
		header('location:client.php');
		}
		else{
		echo $res['msg'];
		}
	}

    //admin_user login
	  if (isset($_POST['login'])){   
		$email = $_POST['email'];
		$password = $_POST['password'];
      $obj->selectdata($email,$password);
    }

	if(isset($_POST['add_client'])){  
		$res = $obj->addclient($_POST, $_FILES);
		  if($res['status'] == 1){
		   header('location:../client.php');
		  }else{
		  echo "<script>alert('oops..sorry...');</script>";;
		  }
	}

	if(isset($_POST['add_project'])){  
	    $res = $obj->addproject($_POST);
		 if($res['status'] == 1){
		  header('location:../project-details.php');
	      }else{
		  echo "<script>alert('oops..sorry...');</script>";;
		  }
	  }
	  ?>
	  

    