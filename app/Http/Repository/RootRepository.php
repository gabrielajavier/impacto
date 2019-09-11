<?php


namespace App\Http\Repository;

class RootRepository
{
  public  static function validateLogin($usuario,$clave,$data){
      return $data->map(function ($input) use ($usuario,$clave) {
          if($input->user_root == $usuario &&  $input->password_root == $clave ){
              return true;
          }else{
              return false;
          }
      });
  }
}
