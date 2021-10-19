<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultData
 *
 * @author User™
 */
class DefaultData {

    //vehicle get resion
    public function getResionForVehicle() {
        return array(
            "1" => "Self Drive",
            "2" => "With Driver",
            "3" => "Airport Transfer",
            "4" => "Transfers (TAXI)",
            "5" => "Wedding");
    }

    //select vehicle rent type    
    public function getRentType() {
        return array(
            "1" => "Per Day:",
            "2" => "Per Week:",
            "3" => "Per Month:",
            "4" => "Per Rental:",
            "5" => "Per KM:",
            "6" => "Per Mile:");
    }

//Curancy Type 
    public function GetCurrancyType() {
        return array(
            "1" => "Rs:",
            "2" => "$");
    }

//offers select types
    public function getOfferTypes() {
        return array(
            1 => "Accommodation",
            2 => "Tour Company",
            3 => "Rent a Car",
            4 => "Restaurant",
            5 => "Other");
    }

//offers select types
    public function getBookingStatus() {
        return array(
            0 => "Pending..!",
            1 => "Confirm..!",
            2 => "Cancel..!");
    }

//facility type
    public function getFacilityType() {
        return array(
            1 => "Internet access",
            2 => "Getting around",
            3 => "Things to do, ways to relax",
            4 => "Dining, drinking, and snacking",
            5 => "Access, services, and conveniences ",
            6 => "For the kids");
    }
    
//serve types
    public function getServeTypes() {
        return array(
            1 => "Dine in",
            2 => "Online Delivery", 
            3 => "Take away");
    }
    
//Close days
    public function getCloseDays() {
        return array(
            1 => "Monday",
            2 => "Tuesday", 
            3 => "Wednesday", 
            4 => "Thursday", 
            5 => "Friday", 
            6 => "Saturday", 
            7 => "sunday", 
            8 => "Poya Day", 
            9 => "Public Holiday",  
            10 => "Mercantile Holiday");
    }

}
