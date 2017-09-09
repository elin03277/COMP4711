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

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}