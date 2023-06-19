<?php
class User_model extends CI_model{

    function create ($formArray){

        $this->db->insert("users", $formArray);// INSERT INTO users (name.email) values (?, ?);
    }
    
    function all(){

       return $users = $this-> db -> get('users')->result_array(); //select * from users

    }

    function getuser($userId){
        $this -> db->where ('user_id' , $userId);
        return $user = $this->db->get('users')->row_array(); // select * from users where user_id = ?
    }

 function updateUser($userId,$formArray){
    $this -> db->where ('user_id' , $userId);
    $this -> db->update('users', $formArray);//update users SET name=? , email = ? where user_id = ?
 }

function deleteuser($userId){
    $this-> db->where('user_id' , $userId);
    $this-> db->delete('users'); // DELETE USERS  from where user_Id= ?

}


}
?>