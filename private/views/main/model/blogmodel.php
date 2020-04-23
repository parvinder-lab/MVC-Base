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
        $sql = "SELECT title, author, post_due FROM posts WHERE SLUG = ?";

   $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($postId));

    return $stmt->fetch();

}
function createPost($title, $author, $content) {
    $slug = str_replace(" ", "-", strtolower($title)) . random_int(1000, 999999);
    $sql ="INSERT INTO posts (slug, title, content, author) values (?, ?, ?, ?)";
    
    $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($slug, $title, $content, $author));

    return $slug;
}
    
    }
?>