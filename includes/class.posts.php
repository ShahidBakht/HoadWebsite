<?php
include "includes/class.db.php";

class Posts{
    public $instance;
    public $db;
    
    public function __construct(){
        $this->instance = ConnectDb::getInstance();
        $this->db = $this->instance->getConnection();
    }

    public function get_latest_posts($limit, $offset){
        $query=mysqli_query($this->db, "select id as pid,PostTitle as posttitle,post_stitle,PostImage,PostingDate as postingdate from tblposts where Is_Active=1 order by id desc limit $limit offset $offset");
        $rows = array();
        while($row=mysqli_fetch_assoc($query)){
             $rows[] = $row;
        }
        return $rows;
    }

    public function get_all_posts(){
        $query=mysqli_query($this->db, "select id as pid,PostTitle as posttitle,post_stitle, PostImage,PostingDate as postingdate from tblposts where Is_Active=1 order by id desc");
        $rows = array();
        while($row=mysqli_fetch_assoc($query)){
             $rows[] = $row;
        }
        return $rows;
    }

    public function get_most_read_posts(){
        $query=mysqli_query($this->db, "select id as pid,PostTitle as posttitle, PostImage,PostingDate as postingdate, views as views from tblposts where Is_Active=1 order by views desc LIMIT 5");
        $rows = array();
        while($row=mysqli_fetch_assoc($query)){
             $rows[] = $row;
        }
        return $rows;
    }

}
?>