<?php
session_start();
require_once('conn.php');
class Core{

   public $conn,$current_user;
   function __construct($db){
      $this->conn = $db;
   }

   public function time_elapsed_string($datetime, $level = 7){
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);

		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;

		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		if($diff->w > 1) {return date("d M o [h:ia]",strtotime(str_replace("/","-",$datetime)));}
		else
		{
			foreach ($string as $k => &$v) {
				if ($diff->$k) {
					$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
				}  
				else {
					unset($string[$k]);
				}
			}

			$string = array_slice($string, 0, $level);
			return $string ? implode(', ', $string) . ' ago' : 'just now';
		}
   }
   
   public function last_inserted($table){

      $last = mysqli_insert_id($this->conn);
      $sql = "SELECT * FROM $table WHERE id = '$last'";
      $run = Self::run_query($sql);
      $ex = mysqli_fetch_assoc($run);
      return $ex['entity_guid'];
   }

   /**
    * @param table name
    */
   public function get_column($table,$column){

      $sql = "SELECT {$column} FROM {$table}"; 
      return Self::fetch_all($sql);
      
   }

   public function get_user_info($id){

      $sql = "SELECT * FROM systemusers WHERE entity_guid = '$id'";
      $run = Self::run_query($sql);
      return mysqli_fetch_assoc($run);

   }

   public function get_users($name){
      $sql = "SELECT * FROM systemusers WHERE fname LIKE '%$name%' OR surname LIKE '%$name%'";
      return $this->fetch_all($sql);
   }

   public function message(){

      if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div> 
          ";
          unset($_SESSION['error']);
        } 
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      
   }

  public function treat($data){

      $data=mysqli_real_escape_string($this->conn, trim($data));
      $data=htmlspecialchars($data);
      return $data;
   }

   public function escape($data){
      
      $data = mysqli_real_escape_string($this->conn,trim($data));
      return $data;

   }
   
   public function treat_file($data){
      $data=str_replace("/", "_", $data);
      return $data;
   }

   public function delete($id){
      $sql = "UPDATE {$this->tab} SET `recycle` = 1 WHERE `entity_guid` = '$id'";
      return Self::run_query($sql);
   }

   public function run_query($sql){
      
      try{
         $query = $this->conn->query($sql);
         if(!$query){
           throw new Exception($this->conn->error);
         }else{
            return $query;
         }
      }catch(Exception $e){
         echo "ERROR : ".$e->getMessage(). " <br> ON LINE:  ".$e->getLine(). "<br> FILENAME IS:  ".$e->getFile();
      }catch(Error $e){
         echo $e->getMessage();
      }
     exit;
   }
   
   public static function redirect($link){
      return header('Location:'.$link);
   }
   //verify if query has been executed and redirect to the specified page
   public function verify($run,$success,$error,$link =""){

      if(isset($link)){
         if($run){
            $_SESSION['success'] = $success;
            Self::redirect($link);
         }else{
            $_SESSION['error'] = $error;
            Self::redirect($link);
         }
      }else{
         if($run){
            $_SESSION['success'] = $success;
            
         }else{
            $_SESSION['error'] = $error;
           
         }
      }
      
   }
//get number of rows 
   public function get_num_rows($sql){
      $query = Self::run_query($sql);
      return $query->num_rows;
   }
// validate for empty fields
   public function is_empty(){
      foreach ($_POST as $key => $val) {
         if (empty($val)) {
            $_SESSION['error'] = "all fields are required";
            return true; 
            exit;
         } 
     }
   }
   
   public function fetch_all($sql){
         
      try{
         $all = array();
         $ex = $this->run_query($sql);
         if($ex->num_rows > 0){
            while($row = mysqli_fetch_array($ex)){
               $all[] = $row;
            }   
            return $all; 
         }else{
            return $ex->num_rows;
         }
         
      }catch(Exception $e){
         echo "ERROR : ".$e->getMessage(). " ON LINE".$e->getLine(). "FILENAME IS".$e->getFile();
      }
   }

   public function display_options($table,$col){
      $sql = "SELECT * FROM $table";
      $run = Self::fetch_all($sql);
         // show all records in the selected database
      foreach($run as $row){
         $name = $row[$col];
         $idd = $row['entity_guid'];   
         ?>
         <option value="<?php echo $idd ?>"> <?php echo $name; ?></option>
         <?php
         }
         

   }

   public function confirmation(){
      if(!isset($_SESSION['username'])){
         $_SESSION['error'] = "INTRUDER: Login is Required";
         Self::redirect('index.php');
         exit();
      }
   }

}
$core = new Core($conn);
?>