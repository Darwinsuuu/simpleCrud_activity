### simpleCrud_activity
This is an activity in ITELECT 4100.


**Activity 1**

##### Overview
Create your OWN simple web-based application simulating CRUD (Create, Read, Update, Delete)
with login functionality.


#### Requirements
- For this application you must have basic knowledge of HTML/CSS and PHP/MySQL
- XAMPP or WAMP
- Any text editor


#### Instructions
1. studentDB (Database name)

2. student (Table name)
 - id (int(11)) primary key, auto increment
 - name (varchar(50), not null)
 - age(int(2), not null)
 - email (varchar(50), not null)
 - gpa (varchar(float), not nul)

3. login (Table2 name)
 - id (int(11)) primary key, auto increment
 - email (varchar(50), not null)
 - password (varchar(50), not null)
 - position (varchar(25), not null)

4. Connect to a database

5. Display a form to be used for name, age, email, gpa

6. Display the saved the data from the database

7. Create two views for this web application.
    - Admin side
        - login
        - can do CRUD about student data
    - Student side
        - VIEWING only of all STUDENT RECORDS


Note: Apply any kind of CSS for your web app (much better if you will use bootstrap).
**At the end of the activity you will submit your database file and codes.**