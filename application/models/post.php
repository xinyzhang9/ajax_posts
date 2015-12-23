<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM posts")->result_array();
  }

  public function create($new_post)
  {
    $query = "INSERT INTO posts (post,created_at) VALUES (?,NOW())";
    $values = array($new_post['post']);
    return $this->db->query($query, $values);
  }
}
?>