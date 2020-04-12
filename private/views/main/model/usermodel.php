<?php
class UserModel extends Model {
    parent::_construct() {
        
    }

    function authenticateUser($username, $password){
        $cl_name = htmlentutues($username);
        $cl_pass = htmlentities($password)
        $sql = "SELECT 'firstname', 'lastname', 'pass_hash' FROM 'authors' where email = ?";
        $stmt = $html->db->prepare(sql);
        $count = $stmt->execute(Array($cl_name));
        $row = $stmt->fetch();
        $pass_hash = $row[2];
        if (isset($pass_hash)){
            $is_auth = password_verify(cl_pass, $pass_hash);
            if ($is_auth) {
                
                $_SESSION['firstname'] = $row[0];
                $_SESSION['lastname'] = $row[1];
                $_SESSION['username'] = $cl_name;

                $upd_sql = "UPDATE 'authors' SET 'last_login_date' = CURRENT_TIMESTAMP() WHERE 'email' = ?";
                $upd_stmt = $this->db->prepare($upd_sql);
                $upd_stmt->execute(Array($cl_name));


            }
        }
        return $is_auth;
    
    
       
}
?>