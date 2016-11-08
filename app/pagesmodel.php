<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use DB;
class pagesmodel extends Model {

	//
 public function addmessage() {

          $stmt=DB::table('contact_us')->insert(array(
                
                'first_name'=>Input::get('name'),
              'last_name'=>Input::get('lname'),
                'email'=>Input::get('email'),
            
            'message'=>Input::get('message')));
        
        if($stmt)
        {
            //echo '>>>>>>';
            return true;
            
        }
        else
        {
            //echo '<<<<';
            return false;
        }
}
}
