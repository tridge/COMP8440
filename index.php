<?php
include "8440head.php";
?>



<center>
<h1>
<font color="#931515" size="+3">COMP8440: <br>
Free and Open Source Software Development
<br></font><font size="+2">Autumn 2013</font></h1>
Course staff:
<A href="http://samba.org/tridge">Dr Andrew Tridgell</A> and <A href="http://cs.anu.edu.au/people.php?StaffID=8909374">Bob Edwards</A><br>
</center>
<p>


<hr noshade>
<p>

<h2>General Information</h2>

<ul>

<li>This course is part of the Masters of Computing program, but is
also offered for other students via a range of flexible enrolment
options. For information on enrolling in this course, please see <a
href="enrol.php">enrolment information</a><p>

<li> Assumed knowledge is basic competence with using a Unix-like
operating system (such as Linux). Having some competence in at least
one programming language will be an advantage.</li>

<li> Please see the <a
href="http://studyat.anu.edu.au/courses/COMP8440;details.html">StudyAt</a>
entry for Course Description and Learning Outcomes.</li>

<li>
A total of 18 hours of lectures will be given, plus a similar amount
of tutorial/lab hours. The course will have a very practical focus.</li>

<li>News will be posted on the course
	 <a href="https://cs.anu.edu.au/streams/forum.php?ForumID=448">
	 Announcement forum</a> (staff post only). </li>
<li>There is also a
	<a href="https://cs.anu.edu.au/streams/forum.php?ForumID=449">
	Discussion forum</a> which will be (semi-) regularly 
	monitored by the course staff.</li>
<li>The <a href="schedule.php">2013 timetable</a> is now available. </li>

<li>Some refreshments will be provided during the course</li>

<?php
//<li>The course flyer is available <a href="COMP8440_flyer.pdf">here</a></li>
?>

</ul>



<p><div align="center">
  <?php
    print " Last modified: ";
    $last_modified = getlastmod();
    print(date("j/m/Y, H:i", $last_modified));
  ?>
</div><p>

<?php
include "8440tail.php";
?>

