<?php
    include "connect.php";
    
    $ssn = $_POST['ssn'];
    
    $query01 = mysql_query("select * from professor where ssn=$ssn");
    echo "Professor's name: ", mysql_result($query01, 0, "fname"), " ", mysql_result($query01, 0, "lname"), "<br><br>";

    $query02 = mysql_query("select * from (course, professor, section) where professor.ssn = $ssn and professor.ssn = section.prof and course.crsnumber = section.crsno");
    for($i=0; $i<mysql_numrows($query02); $i++)
    {
        echo "Course title: ", mysql_result($query02, $i, "crstitle"), "<br>";
        echo "Classroom: ", mysql_result($query02, $i, "classroom"), "<br>";
        echo "Meeting days: ", mysql_result($query02, $i, "meetingday"), "<br>";
        echo "Beginning time: ", mysql_result($query02, $i, "begintime"), "<br>";
        echo "Ending time: ", mysql_result($query02, $i, "endtime"), "<br>";
        echo "<br>";
    }
?>

