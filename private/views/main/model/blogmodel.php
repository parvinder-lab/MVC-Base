<?php
class BlogModel extends Model {
    function __construct()
    {
    parent::__construct();
        
    }
function getAllPosts(){
    $sql = "SELECT slug, title, author, post_due FROM posts";

   $stmt = $this->db->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();


}
function getPostById($postId) {
        $sql = "SELECT slug, title, author, post_due FROM posts WHERE SLUG = ?";

   $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($postId));

    return $stmt->fetch();

}
    
    }
?>