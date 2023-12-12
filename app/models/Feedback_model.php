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
    public function insertBooking($data)
    {
        $bind = array(
            'FullName' => $data['FullName'],
            'ContactNumber' => $data['ContactNumber'],
            'Address' => $data['Address'],
            'RoomType' => $data['RoomType'],
            'CheckinDate' => $data['CheckinDate'],
            'CheckoutDate' => $data['CheckoutDate'],
            'NumberofGuest' => $data['NumberofGuest'],
            'TotalAmount' => $data['TotalAmount'],
            );
        
        $this->db->table('reservation')->insert($bind);
    }
}
?>
