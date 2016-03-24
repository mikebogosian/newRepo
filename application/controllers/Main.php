
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {
    //loads the login view
    public function index()
    {
        $this->load->view('Login');
    }


    public function register()
    {

    	$this->load->model("User");
    

		$this->User->addUser($this->input->post());

				
		$this->load->view("Login");
    }






    public function login()
    {
        $this->load->model("User");
        $user = $this->User->get_user_by_email($this->input->post('email'));

        // var_dump($user);
        // die();

        if($user){
            if($user['password'] == md5($this->input->post('password'))){

                // var_dump($user);
                // die();
               
                $this->session->set_userdata("user_id", $user['id']);
                $this->session->set_userdata("first_name", $user['first_name']);
                $this->session->set_userdata("last_name", $user['last_name']);
                $this->session->set_userdata("email_address", $user['email_address']);



                $this->load->view("results");
            }
            else{
                 $this->session->set_flashdata("login_error", "Invalid email or password!");
                 redirect("/");
            }

        }
        else{
                 $this->session->set_flashdata("login_error", "Invalid email or password!");
                redirect("/");
        }
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("/");   
    }
}















//         $email = $this->input->post('email');
//         $password = md5($this->input->post('password'));
//         $this->load->model('Student_model');
//         $student = $this->Student_model->get_student_by_email($email);
//         if($student && $student['password'] == $password)
//         {
//             $user = array(
//                'student_id' => $student['id'],
//                'student_email' => $student['email'],
//                'student_name' => $student['first_name'].' '.$student['last_name'],
//                'is_logged_in' => true
//             );
//             $this->session->set_userdata($user);
//             redirect("/students/profile");
//         }
//         else
//         {
//             $this->session->set_flashdata("login_error", "Invalid email or password!");
//             redirect("/students/index");
//         }
//     }







//     //simple profile page of a student
//     public function profile()
//     {
//         if($this->session->userdata('is_logged_in') === TRUE)
//             echo "Your are now logged in! Click <a href='/students/logout'>Here</a> to Logout.";
//         else
//             redirect("/students/login");
//     }
//     //logout the student
//     public function logout()
//     {
//         $this->session->sess_destroy();
//         redirect("/students/index");   
//     }
// }

	// public function process()
	// {	
	// 	if($this->session->userdata('counter'))
	// 	{
	// 		$counter = $this->session->userdata('counter');
	// 		$this->session->set_userdata('counter', $counter+1);
	// 	}
	// 	else
	// 	{
	// 		$this->session->set_userdata('counter', 1);
	// 	}
	// 	// $this->load->view('index_Homework', array("counter"=>$this->session->userdata('counter')));

	// 	$surveyInfo=[
	// 		'firstName'=>$this->input->post('firstName'),
	// 		'dojoLocation'=>$this->input->post('dojoLocation'),
	// 		'language'=>$this->input->post('language'),
	// 		'comment'=>$this->input->post('commentBox'),
	// 		'counter'=>$this->session->userdata('counter')
	// 	];

	// 	// var_dump($surveyInfo);
	// 	// die();
		
	// 	$this->load->view('results', $surveyInfo);

	// }

	// public function reset()
	// {

	// 	$this->session->unset_userdata('counter');
	// 	redirect('/');

	// }

	// public function goBack()
	// {		
	// 	redirect('/');
	// }



