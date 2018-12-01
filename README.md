# PHP-MySQL-Login-System
Registration and Login system for a **User** model. The system has some constraints regarding uniqueness of the user_id, availability of all the input data, and valid format and type of inputs.

## Features
* Encrypted passwords
* Processing requests without Reload (AJAX)
* Client-side validations on input
* Update of ***last_login_date*** after every successful login
* Multiple levels of verification:
  - Uniqueness of ***user_id*** while registering
  - Occurrence of ***username***
  - Correctness of ***password***

## Screenshots
![Screenshot1](https://github.com/ahmedhammad97/PHP-MySQL-Login-System/blob/master/screenshots/1.png)
![Screenshot2](https://github.com/ahmedhammad97/PHP-MySQL-Login-System/blob/master/screenshots/2.png)
![Screenshot3](https://github.com/ahmedhammad97/PHP-MySQL-Login-System/blob/master/screenshots/3.png)
![Screenshot4](https://github.com/ahmedhammad97/PHP-MySQL-Login-System/blob/master/screenshots/4.png)


### User Model
User (user_id, email, username, password, registration_date, last_login_date)
