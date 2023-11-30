<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Booking_model extends Model {
    public function __construct(){
        parent::__construct();
        $this->call->database();
    }
    public function book()
    {        
        $data = $this->db->table('reservation')
        ->select('reservation.ReservationId, users.UserId, users.email, room.RoomId, room.RoomType, reservation.FirstName,reservation.LastName, reservation.ContactNumber,reservation.Address, reservation.CheckinDate, reservation.CheckoutDate, reservation.NumberofGuest, reservation.TotalAmount')
        ->join('users', ' reservation.UserId = users.UserId')
        ->join('room', ' reservation.RoomId = room.RoomId')
        ->get_all();
        return $data;
    }
	
}
?>
