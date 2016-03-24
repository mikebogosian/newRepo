<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
   function get_user_by_email($email)
   { 
       return $this->db->query("SELECT * FROM users WHERE email_address = ?", array($email))->row_array();

  
   }


    function addUser($studentData)
    {   
        $password = md5($studentData['password']);

        $query = "INSERT INTO users (first_name, last_name, email_address, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";

        
        $this->db->query($query, [$studentData['firstName'], $studentData['lastName'], $studentData['emailAddress'], $password]);
        
    }

  
    function getUserID($course_id)
     {
         return $this->db->query("SELECT * FROM users WHERE id = ?", array($course_id))->row_array();
     }



}


