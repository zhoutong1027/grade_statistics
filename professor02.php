<?php
    include "connect.php";
    
    $coursenumber = $_POST['coursenumber'];
    $sectionnumber = $_POST['sectionnumber'];
    
    $query01 = mysql_query("select * from course where crsnumber=$coursenumber");
    echo "Course title: ", mysql_result($query01, 0, "crstitle"), "<br>";
    echo "Section number: ", $sectionnumber, "<br>";
    echo "<br>";
    
    echo "Numbers of distinct grades:<br>";

    $query03 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='A+'");
    echo "A+ : ", mysql_result($query03, 0), "<br>";
    
    $query04 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='A'");
    echo "A : ", mysql_result($query04, 0), "<br>";

    $query05 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='A-'");
    echo "A- : ", mysql_result($query05, 0), "<br>";
    
    $query06 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='B+'");
    echo "B+ : ", mysql_result($query06, 0), "<br>";

    $query07 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='B'");
    echo "B : ", mysql_result($query07, 0), "<br>";
    
    $query08 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='B-'");
    echo "B- : ", mysql_result($query08, 0), "<br>";
    
    $query09 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='C+'");
    echo "C+ : ", mysql_result($query09, 0), "<br>";
    
    $query10 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='C'");
    echo "C : ", mysql_result($query10, 0), "<br>";
    
    $query11 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='C-'");
    echo "C- : ", mysql_result($query11, 0), "<br>";
    
    $query12 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='D+'");
    echo "D+ : ", mysql_result($query12, 0), "<br>";
    
    $query13 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='D'");
    echo "D : ", mysql_result($query13, 0), "<br>";
    
    $query14 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='D-'");
    echo "D- : ", mysql_result($query14, 0), "<br>";
    
    $query15 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='F'");
    echo "F : ", mysql_result($query15, 0), "<br>";
    
    $query16 = mysql_query("select count(*) from enrollment where sno=$sectionnumber and cno=$coursenumber and grade='W'");
    echo "W : ", mysql_result($query16, 0), "<br>";
?>

