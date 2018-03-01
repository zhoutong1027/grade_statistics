<?php
    include "connect.php";
    
    $cwid = $_POST['cwid'];
    
    $query01 = mysql_query("select * from student where cwid=$cwid");
    echo "Student's name: ", mysql_result($query01, 0, "fname"), " ", mysql_result($query01, 0, "lname"), "<br><br>";
    
    $query02 = mysql_query("select * from enrollment where sid=$cwid");
    for($i=0; $i<mysql_numrows($query02); $i++)
    {
        $coursenumber = mysql_result($query02, $i, "cno");
        echo "Course number: ", $coursenumber, "<br>";
        $query03 = mysql_query("select * from course where crsnumber=$coursenumber");
        echo "Course title: ", mysql_result($query03, 0, "crstitle"), "<br>";
        echo "Grade: ", mysql_result($query02, $i, "grade"), "<br><br>";
    }
?>

