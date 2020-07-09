<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class reddit_model extends CI_Model {

  public function lihat(){
    //return $this->db->get('reddit_post')->result();
    return $this->db->query('select * from reddit_post where type = "subreddit"')->result();
  }

}