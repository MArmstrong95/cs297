## CSCI 297 Homework 9
### Scheduling Tool 2.0
### Professor Functions with MySQL

The professor should be able to perform these functions:

- make available additional advising appointments
  - be sure to avoid adding duplicates
- see which students have signed up for advising
  - sort the appointments by date and time
  - for a challenge, highlight today's appointments in yellow
- allow a professor to remove an advising time

You will build scripts to enable students to sign up as part of Homework 10. So, to test the professor's ability to view appointments selected by students, you will need to manually add that test data into your database. ... Or you could complete homeworks 9 and 10 at the same time.

MySQL can sort the rows by day and time. Below is some code copied from my solution to this assignment. In my table named "appointments", I have a field named "Slot_Day" that contains a string. (You might choose to store that data as a date field.) I have another string that holds the "Slot_Time". I want MySQL to do a two-way sort - the primary sort key is Day and the secondary sort key is Time.

Since I used a string to store the appointment day and time, I must tell MySQL how that string is formated. Thus, the codes %a %b %D %Y tell MySQL that my dates look like "Wed Oct 19th 2016".

```
// query all appointments, sorted by day and time
$query  = "select * from appointments ";
$query .= "ORDER BY STR_TO_DATE(Slot_Day,'%a %b %D %Y'),";
$query .= "STR_TO_DATE(Slot_Time,'%h:%i%p');";
$result = mysql_query ($query, $DBconn);
```
