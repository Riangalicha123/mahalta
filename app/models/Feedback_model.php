<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Feedback_model extends Model {
	public function __construct(){
        parent::__construct();
        $this->call->database();
    }
	public function feedback()
    {        
        $data = $this->db->table('feedback')
        ->select('feedback.FeedbackId, feedback.UserId, feedback.Message, users.UserId, users.username ')
        ->join ('users', 'feedback.UserId = users.UserId')
        ->get_all();
        return $data;
    }
    public function insertFeedback($data)
{
    $this->db->table('feedback')->insert($data);
}

    
    
}
?>
