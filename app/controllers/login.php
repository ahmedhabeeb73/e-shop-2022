<?php
class Login extends Controller
{
  public function index()
  {
     $data['page_title']='Login';
      $this->view("e/login",$data);
  }
}