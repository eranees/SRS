# SRS
# This is a PHP web application that serves as a basic student record system. Here are the files and their descriptions:

connection.php: This file establishes the connection between the application and the MySQL database.

index.php: This file is the main file that contains the HTML and PHP code for the web application. It displays a form for adding new students to the system, a table showing all the students in the system, and the details of the class topper.

css/style.css: This file contains the CSS code for styling the HTML elements in index.php.

add_student.php: This file is called when the form in index.php is submitted. It adds a new student to the database and redirects the user back to index.php.

edit_form.php: This file displays a form for editing an existing student's details.

edit_student.php: This file is called when the form in edit_form.php is submitted. It updates the details of an existing student and redirects the user back to index.php.

delete.php: This file is called when a user clicks the "Delete" button next to a student in the table in index.php. It deletes the student from the database and redirects the user back to index.php.
