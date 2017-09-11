<!DOCTYPE html>

<!--
 Created by PhpStorm.
 User: Eric Lin
 Date: 2017-09-08
 Time: 11:46 AM
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        //including the student file
        include('student.php');

        //initializing students variable
        $students = array();

        //adding the first student object to the array of students
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        //adding the second student object to the array of students
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        //adding the third student object to the array of students
        $third = new Student();
        $third->surname = "Lin";
        $third->first_name = "Hsien-Chia";
        $third->add_email('home','elin03277@gmail.com');
        $third->add_grade(76);
        $third->add_grade(82);
        $third->add_grade(70);
        $students['h789'] = $third;

        //sorting the student objects in alphabetical order by their first name
        ksort($students);

        //printing out each student's information
        foreach ($students as $student)
            echo $student->toString();


        ?>
    </body>
</html>
