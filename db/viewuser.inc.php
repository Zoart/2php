<?php

class ViewUser extends User {

  public function showAllusers()
  {
    $datas = $this->getAllusers();
    foreach ($datas as $data) {
      echo $data['uid']."<br>";
      echo $data['pwd']."<br>";
    }
  }
}