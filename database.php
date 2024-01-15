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

    public function numrows($table_name){
        $sql = "SELECT * FROM $table_name";
        $query = mysqli_query($this->conn,$sql);
        return mysqli_num_rows($query);
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
    public function postlist($limit, $offset) {
        $sql = "SELECT * FROM blog_posts LIMIT $limit OFFSET $offset";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        }        
    } 

    // Function to get post data by ID or search by title/content
    public function postsearch($limit, $offset, $q) {
        $sql = "SELECT * FROM blog_posts";
        
        // If $q is provided, add the WHERE clause for searching in title and content
        if ($q !== null) {
            $q = mysqli_real_escape_string($this->conn, $q);
            $sql .= " WHERE title LIKE '%$q%' OR content LIKE '%$q%'";
        }

        $sql .= " LIMIT $limit OFFSET $offset";

        if ($query = mysqli_query($this->conn, $sql)) {
            return $query;
        } else {
            die("Connection Problem");
        }
    }
    
    public function postsearchrow($q){
        $sql = "SELECT * FROM blog_posts";
        
        // If $q is provided, add the WHERE clause for searching in title and content
        if ($q !== null) {
            $q = mysqli_real_escape_string($this->conn, $q);
            $sql .= " WHERE title LIKE '%$q%' OR content LIKE '%$q%' OR meta_description LIKE '%$q%' OR tags LIKE '%$q%'";
        }

        if ($query = mysqli_query($this->conn, $sql)) {
            return mysqli_num_rows($query);
        } else {
            die("Connection Problem");
        }
    }


    // Function to get post data by category
    public function postcat($limit, $offset, $q) {

        $sqlc = "SELECT * FROM post_category WHERE slug='$q'";

        if($queryc = mysqli_query($this->conn, $sqlc) ){
            $data =  mysqli_fetch_assoc($queryc);
            $id = $data['category_id'];
           
            $sql = "SELECT * FROM blog_posts WHERE category_id = $id";
        
            if ($query = mysqli_query($this->conn, $sql)) {
                return $query;
            } else {
                die("Connection Problem");
            }
        }

        
    }
    
    public function postcatrow($q){
        $sqlc = "SELECT * FROM post_category WHERE slug='$q'";

        if($queryc = mysqli_query($this->conn, $sqlc) ){
            $data =  mysqli_fetch_assoc($queryc);
            $id = $data['category_id'];
           
            $sql = "SELECT * FROM blog_posts WHERE category_id = $id";
        
            if ($query = mysqli_query($this->conn, $sql)) {
                return mysqli_num_rows($query);;
            } else {
                die("Connection Problem");
            }
        }
    }






    public function postbyslug($slug){
        $sql = "SELECT * FROM blog_posts WHERE slug ='$slug'";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        }  
    }


    public function featuredpost(){
        $sql = "SELECT * FROM blog_posts WHERE post_type='featured'";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        }  
    }

    public function authordetails($author_id){
        $sql = "SELECT * FROM author WHERE id = $author_id";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        } 
    }

    public function author_post_list($limit, $offset, $author_id){
        $sql = "SELECT * FROM blog_posts WHERE author_id=$author_id LIMIT $limit OFFSET $offset";
        if($query = mysqli_query($this->conn, $sql)){
            return  $query;
        }else{
            die("Connection Problem");
        } 
    }
    public function author_post_row($author_id){
        $sql = "SELECT * FROM blog_posts WHERE author_id=$author_id";
        $query = mysqli_query($this->conn,$sql);
        return mysqli_num_rows($query);
    }

    // Function to get the user's IP address
    function getUserIP() {
        $ip = $_SERVER['REMOTE_ADDR'];

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $ip;
    }

    function postviewscount($current_views, $post_id){
        if($current_views == null){
            $sql = "UPDATE blog_posts set post_views = 1 WHERE post_id= $post_id";
        } else {
            $update_views = $current_views + 1;
            $sql = "UPDATE blog_posts set post_views = $update_views  WHERE post_id= $post_id";
        }
        if(mysqli_query($this->conn, $sql)){
            
        } else {
            die("Connection Problem");
        }  
    }
    

}

?>