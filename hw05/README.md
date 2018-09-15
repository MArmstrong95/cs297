## Homework Five
### Advising System
### Version One, Part One

This assignment is part one of a two part project to build a system that allows Winthrop students to sign up for advising. This first part develops the scripts that allow a professor to set the times that are available for advising. Part two will allow students to select an advising appointment time. The first version of these two parts will store data in a file. For the final two assignments of the semester, you will rewrite these scripts to save data in a database, and you will add more features.
Create a system that allows a professor to set up times that students can sign up to be advised. The possible times should be in 30 minute increments starting at 8:00am and ending at 6:00pm. The days should be weekdays (no advising on Saturdays or Sundays) over the next three weeks (21 days). Your system should automatically determine the days.

Selecting available times and days should be simple and involve just checking boxes and hitting the submit button. Since a professor will have many available time slots, you should make the interface easy to use with minimal amounts of clicking.  If a professor adds the same time slot twice, make sure it only available once.  For example, if Dannelly accidently selects Monday Oct 3 at 8:00am more than once, that time slot should only be available to students once.

Remember that the available time slots will vary from day to day. For example, Dannelly may have eight appointment slots available on a Monday, three different time slots available on Tuesday, no time slots available on Wednesday, and ten completely different times available on the next Monday.

You will need to write two PHP scripts for this assignment. The first script will build the form. The form is not static because the list of days is a rolling three week time frame.

Your second script will process the form. Save all the selected time slots in a file. The professor will likely run this script a few times, adding more time slots each time. (That is a hint. Open the file for append, not overwrite.)

A good rule of interface design is to provide positive feedback and status information. For example, after the professor hits submit, reply back with something like "5 new advising times added. Hit the Back button to add more times". Of course, if there is an error, such as the user not selecting any day or times, then provide a clear and helpful error message. If the professor sees nothing, then he/she will assume the system did not work.

You have two design problems to solve:
- What should the professor's form look like?
- How should the data file be structured?

The first design problem is purely aesthetics. You will probably need to use an HTML table to arrange the days and times as rows and columns. Here is a link to W3Schools' Table Tutorial page. Feel free to use some color, but don't be annoying with color. Rule number one of interface design is KISS (keep it simple, stupid). Professors are intelligent, but do not pay attention. So, your interface will need maintain a balance between "easy to use" and "easy to screw up".

**The format of the data file is your biggest problem!** The next assignment will need to read this information to create a form for the students. You will also have to record which time slots have been taken by which students. To save yourself having to re-write part one, *invest some time now in figuring out how the next part will work.*

Hint: Read about the "file" command. If you know the most convenient way to read from a file, then you will know what to write into your data file.
