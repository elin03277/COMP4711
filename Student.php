<?php
/**
 * Created by PhpStorm.
 * User: Eric Lin
 * Date: 2017-09-08
 * Time: 12:09 PM
 */

/**
 *  Description of Student
 *
 * @author eric
 */


class Student {

    //constructor initializes variables
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //function to add an address to an array of emails
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //function to add grade to an array of grades
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //function to calculate the average grade of all grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //function to print out each student's information
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";

        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";

        $result .= "\n";

        return '<pre>' . $result . '</pre>';
    }
}

?>