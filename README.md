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

1. Make sure you have the correct MySQL ```password``` input in the ```create-db.php```, ```create-table.php```, and ```submit-form.php``` files
2. Open the integrated terminal in the ```iworq-project``` directory
3. Run the command ```php .\create-db.php``` (*IMPORTANT: You must do this step BEFORE step 5)
4. Ensure that the prompt says 'Database created successfully' in the terminal
5. Run the command ```php .\create-table.php```
6. Ensure that the prompt says 'New table saved' in the terminal
7. From there, fill out the form in the browser and submit
8. Use MySQL CLI to ensure data is inserted into the database correctly using the following commands: 
    * ```USE iworq_user_db;``` (selects the database you want to view)
    * ```SELECT * FROM user;``` (selects the table within the database to view)

## Assets

The following video contains a sample walkthrough of this project's functionality:
<br>
https://drive.google.com/file/d/1hscFDKyNvxKoJXEs2B7Z1sYKoI8E6zxE/view