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
        ->select('reservation.ReservationId,  reservation.UserId, reservation.FullName, reservation.ContactNumber,reservation.Address,reservation.RoomType, reservation.CheckinDate, reservation.CheckoutDate, reservation.NumberofGuest, reservation.TotalAmount, reservation.Status')
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
            'Status' => 'Pending',
            );
        
        $this->db->table('reservation')->insert($bind);
    }

    public function search($ReservationId) {
        return $this->db->table('reservation')->where('ReservationId',$ReservationId)->get();
    }


	
}
?>
