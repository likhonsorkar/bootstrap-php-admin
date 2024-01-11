<?php
class database {
    public $conn;
    public function __construct(){
        $db_host = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'likhon';
        $this->conn = mysqli_connect($db_host,$dbuser,$dbpass,$dbname);

        if(!$this->conn){
            die("Database Connection Error!!");
        }
    }

    // Index Page Login
    public function adminlogin($post){
        // Check if the keys exist in the $post array before using them
        $email = isset($post['email']) ? $post['email'] : null;
        $password = isset($post['password']) ? $post['password'] : null;

        if ($email && $password) {
            // Continue with your login logic here
            $hashedPassword = md5($password);
            $auth = "SELECT * FROM admin_user WHERE admin_email = '$email' AND admin_password = '$hashedPassword'";
            if($query = mysqli_query($this->conn, $auth)){
                if (mysqli_num_rows($query)>0) {
                    $_SESSION['admin_email'] = $email;
                    $_SESSION['admin_password'] = $password;
                    header('location:dashboard.php?smsg=loginsuccesfull');
                }else{
                    session_destroy();
                    header('location:index.php?fsms=Session End Please Re-login');
                    return "Authintication Failed! Please try from selected ip";

                }
            }
        } else {
            // Handle the case where email or password is not set
            echo "Email or password is not set.";
        }
    } 
    // Live Admin Authentication Check  
    public function checkadminlogin($post){
        // Check if the keys exist in the $post array before using them
        $email = isset($post['email']) ? $post['email'] : null;
        $password = isset($post['password']) ? $post['password'] : null;

        if ($email && $password) {
            // Continue with your login logic here
            $hashedPassword = md5($password);
            $auth = "SELECT * FROM admin_user WHERE admin_email = '$email' AND admin_password = '$hashedPassword'";
            if($query = mysqli_query($this->conn, $auth)){
                if (mysqli_num_rows($query)>0) {
                    $_SESSION['admin_email'] = $email;
                    $_SESSION['admin_password'] = $password;
                }else{
                    session_destroy();
                    header('location:index.php?fsms=Session End Please Re-login');
                    return "Authintication Failed! Please try from selected ip";
                }
            }
        } else {
            // Handle the case where email or password is not set
            session_destroy();
                    
            header('location:index.php?fsms=Session End Please Re-login');
                    
            return "Authintication Failed! Please try from selected ip";
        }
    } 
    // Category List Mysqli
    public function categorylist(){
        $catlist = "SELECT * FROM post_category";
        if($query = mysqli_query($this->conn,$catlist)){
            return $query;
        }else{
            die("Connection Problem");
        }
    }
    public function singlecatlist($id){
        $catlist = "SELECT * FROM post_category WHERE category_id=$id";
        if($query = mysqli_query($this->conn,$catlist)){
            return $query;
        }else{
            die("Connection Problem");
        }
    }


    // Function to get post data by ID
    public function postlist() {
        $sql = "SELECT * FROM blog_posts";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        }        
    }
    public function getPostById($postId) {
        $sql = "SELECT * FROM blog_posts WHERE post_id = $postId";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        }        
    }

    
    
}

?>