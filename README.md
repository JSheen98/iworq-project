# iWorQ Sample Project

## User Story

* AS part of the interview process
* I NEED a sample project that includes an HTML form, a jQuery validation function for form input and submission, and a PHP function that puts that data in a SQL database
* SO THAT I can showcase my coding skills

## Technologies Used

* PHP
* HTML 
* jQuery
* Bootstrap
* CSS
* MySQL

## Instructions

1. Open the integrated terminal in the ```iworq-project``` directory
2. Run the command ```php .\create-db.php``` (*IMPORTANT: You must do this step BEFORE step 4)
3. Ensure that the prompt says 'Database created successfully' in the terminal
4. Run the command ```php .\create-table.php```
5. Ensure that the prompt says 'New table saved' in the terminal
6. From there, fill out the form in the browser and submit
7. Use MySQL CLI to ensure data is inserted into the database correctly using the following commands: 
    * ```USE iworq_user_db;``` (selects the database you want to view)
    * ```SELECT * FROM user;``` (selects the table within the database to view)
