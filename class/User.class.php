<?php

class User {

    private $id;
    private $name;
    private $email;
    private $password;

    public $id_err;
    public $name_err;
    public $email_err;
    public $password_err;

    public $msg = array();
    public $conn;

    public function __construct()
    {
        $this->conn = new DB();
    }

    public function login()
    {
        if (empty($this->email)) $this->email_err = "Email must be entered";
        if (empty($this->password)) $this->password_err = "Password must be entered";

        if (empty($this->email_err) && empty($this->password_err))
        {
            $this->conn -> table('users')
                        -> where('email', '=', $this->email)
                        -> where('password', '=', $this->password)->get();

            if ($this->conn->result)
            {
                $this->id   = $this->conn->result[0]['id'];
                $this->name = $this->conn->result[0]['name'];

                $this->msg  = ['success' => "Welcome, you are logged in successfully"];
                return true;                
            }
            else
            {
                $this->msg  = ['danger' => "Please make sure that the data is correct"];
                return false;
            }
        }

    }

    public function register()
    {
        $this->validate();

        if (empty($this->name_err) && empty($this->email_err) && empty($this->password_err))
        {
            $this->db->insert('users', ['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);
            $this->msg = ['success' => "Hello dear, your account has been created successfully"];
            return true;
        }

        else {
            $this->msg = ['danger' => "Sorry cannot inserted, enter correct information"];
            return false;
        }
    }

    private function emails()
    {
        $this->db->select('users','email');
        $array = array();

        while($row = mysqli_fetch_assoc($this->db->result))
        {
            $array[] = $row['email'];
        }
        return $array;
    }

    private function validate()
    {
        // Validate name
        if (empty($this->name)) $this->name_err = "Name must be entered";

        // Validate email
        if (empty($this->email)) $this->email_err = "Email must be entered";
        elseif (in_array($this->email, $this->emails())) $this->email_err = "The email is already exist";

        // Validate password
        if (empty($this->password)) $this->password_err = "Password must be entered";
        elseif (strlen($this->password) < 8) $this->password_err = "password must be greater than 8 a character";
    }

    public function getName() { return $this->name; }

    public function getID() { return $this->id; }
    
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
