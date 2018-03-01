<?php
    include "connect.php";
    
    $crsno = $_POST['crsno'];
    
    $query01 = mysql_query("select * from course where crsnumber=$crsno");
    echo "Course title: ", mysql_result($query01, 0, "crstitle"), "<br><br>";
    
    $query02 = mysql_query("select * from section where crsno=$crsno");
    for($i=0; $i<mysql_numrows($query02); $i++)
    {
        echo "Section number: ", mysql_result($query02, $i, "sctnnumber"), "<br>";
        echo "Classroom: ", mysql_result($query02, $i, "classroom"), "<br>";
        echo "Meeting days: ", mysql_result($query02, $i, "meetingday"), "<br>";
        echo "Beginning time: ", mysql_result($query02, $i, "begintime"), "<br>";
        echo "Ending time: ", mysql_result($query02, $i, "endtime"), "<br>";
        $query03 = mysql_query("select count(*) from enrollment where cno=$crsno and sno=$i+1");
        echo "Number of enrolled students: ", mysql_result($query03, 0);
        echo "<br><br>";
    }
?>

