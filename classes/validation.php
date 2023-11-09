<?php

namespace classes;

class validation{

    static function validateexpirydate($date){
        
        
            // Get the current date
            $currentDate = date("Y-m-d");
        
            if (strtotime($date) >= strtotime($currentDate)) {
                return true; // Valid date (present or future)
            }
        
            return false; // Invalid date (in the past)
        
    }static function validatequantity($quantity){
        // Use a regular expression to match exactly 3 digits (and nothing else)
        if (preg_match('/^\d{3}$/', $quantity)) {
            return true; // Valid quantity (exactly 3 digits)
        }
        
        return false; // Invalid quantity
    }
    
    
        public static function validateBloodGroup($selectedBloodGroup) {
            // Define an array of valid blood group options
            $validBloodGroups = array("A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-");
        
            if (in_array($selectedBloodGroup, $validBloodGroups)) {
                return true; // Valid blood group selected
            }
        
            return false; // Invalid blood group selected
        }
    }
