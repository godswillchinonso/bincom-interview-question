# Election Result Analysis System
This project is a simple election result analysis system built as part of a technical assessment.
The goal of the application is to fetch, analyze, and display election results stored in a relational database using PHP and SQL.

The project focuses more on backend logic, database relationships, and security practices than UI design.

---
**Key Features:**
- Lightweight and fast, with minimal overhead for maximum performance
- PSR-4 autoloading that keeps your code clean and modern
- Modular architecture that is easily extendable with custom modules or libraries
- Ready for Composer installation so you can integrate it into your projects effortlessly
- Beginner friendly, ideal for developers learning MVC or building prototypes quickly


Corelminaic also promises to add more dependencies, such as OAuth, payment gateways, and other tools you can use across your web app development, helping you build applications faster and more efficiently.

With Corelminaic, you can focus on writing your application logic instead of dealing with boilerplate code.


---

## Tech Stack:
   -**Language:** PHP
   -**Database:** MySQL
   -**Frontend:** HTML, CSS, JavaScript (AXIOS)
   -**Architecture:** MVC-style structure
   -**Framework:** Custom PHP mini framework called ***Corelminiac***

---


## Project Structure
This project is built using my personal PHP mini framework (Corelminiac).

 - All business logic is handled inside the `app/controllers` folder
 - Database queries and data handling are done through model methods using PDO prepend statement
 - Views are kept simple and focused on displaying results

 This structure helps keep concerns separated and the code easier to maintain.


---

 ## Question 1 ( Polling Unit Result Display )
 For Question 1, the application:

 - Fetches a polling unit using its `uniqueid`
 - Joins the polling unit table with the results table
 - Displays all parties and their scores for that polling unit

 A README file was created specifically for this implementation, and the GitHub repository links directly to the analysis page for clarity. [Click Here](https://godswillchinonsosonex.online/bincom-interview-question/page-one-theory)



 ## Question 2 ( Local Government Total Results )
 For Question 2:

 - All local governments are fetched and displayed in a dropdown
 - The `uniqueid` of each local government is used as the value
 - When a local government is selected, the application:
 	- Finds all polling units under that local government
 	- Joins them with the results table
 	- Groups results by party
 	- Sums up party scores using SQL aggregation


This approach avoids unnecessary loops in PHP and relies on the database for performance.

 A README file was created specifically for this implementation, and the GitHub repository links directly to the analysis page for clarity. [Click Here](https://godswillchinonsosonex.online/bincom-interview-question/page-two-theory)



## Question 3 ( Add New Polling Unit Result )
Please Senior Developer / Hiring Manager, I was unable to do this one but really because I can't attempt it but I broke down health wise and since my time was just short, I just had to submit the two I did. If given another chance, I don't mind if it be a one-on-one coding or a video session where the senior developers or hiring manager in your firm would be wathing me, I would still attempt it.



---

## Security Measures Implemented
  Some basic security measures were implemented in this project:

### CSRF Protection
- AJAX requests include a `CSRF token` which the server validates the token before processing the request. This ensures requests are coming from the expected source.


### Prepared Statements
- All SQL queries use `prepared statements`. This helps prevent SQL injection attacks


### Output Sanitization
- `htmlspecialchars()` is used when displaying user or database output
- This helps prevent XSS attacks


### Error Handling
- Database errors are caught using `try-catch`
- Errors are logged to a custom file instead of being exposed to users

---

## About the Developer
I am a **junior PHP developer** actively learning and improving my backend skills.
This project reflects my current level and understanding, and I am open to feedback and corrections to improve my approach and code quality.

