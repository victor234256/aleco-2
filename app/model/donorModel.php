<?php

class Donor extends Core{
  
   public $conn,$entity_guid,$lastname,$firstname,$email,$phone,$password,$address,$table;
   
   function __construct($db){
      $this->table = 'donor';
      $this->entity_guid = "uuid()";
      $this->conn = $db;
   }     
   
   public function add(){

      $sql = "INSERT INTO $this->table (entity_guid,firstname,lastname,email,phone,`password`,`address`) VALUES ($this->entity_guid,'$this->firstname','$this->lastname','$this->email','$this->phone','$this->password','$this->address')";    
      return Parent::run_query($sql);
   }

   public function confirmEmail(){
      $sql = "SELECT email FROM $this->table WHERE email = '$this->email'";
      return Parent::get_num_rows($sql);
   }

   public function search_receipient($id){

      $table = "receipient";
      $sql = "SELECT *, $this->table.entity_guid AS _id, receipient.xdate AS _xdate, receipient.user_guid AS r_user_guid, $this->table.attachment AS _attachment, receipient.type AS _type, receipient.status AS _status FROM {$table} LEFT JOIN $this->table ON receipient.message_guid = $this->table.entity_guid WHERE (receipient.receipient = '$id' and receipient.user_guid = '$this->user_guid') OR (receipient.receipient = '$this->user_guid' and receipient.user_guid = '$id')  ORDER BY receipient.xdate DESC" ;
      // echo $sql; exit;
      return $this->fetch_all($sql);
      
   } 
   
   //get a perticular message by its entity guid
   public function get_by_id($id){
      
      $sql = "SELECT * FROM $this->table WHERE entity_guid = '$id'"; 
      $ex = $this->run_query($sql);
      return mysqli_fetch_assoc($ex); 
   } 

}

$donor = new Donor($conn);

?>