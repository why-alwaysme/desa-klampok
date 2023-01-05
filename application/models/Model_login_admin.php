<?php
class Model_login_admin extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get($username)
  {
    $this->db->where('username_admin', $username);
    $result = $this->db->get('admin')->row();
    return $result;
  }
  public function isNotLogin()
  {
    return $this->session->userdata('user_logged') === null;
  }
}
