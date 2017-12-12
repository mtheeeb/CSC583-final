# **CSC583-final**

## **Nonfunctional requirements:**

- For this simple application, XAMPP framework is used.
- This decision is made after evaluating different framework.
- XAMPP is a free and open source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB (MySQL) database, and interpreters for scripts written in the PHP and Perl programming languages.

## Design And Tool Selection Analysis

### Scoring
Each web server platform is rated on seven qualities on a scale of 0 to 5, where 0 is the lowest and 5 is the highest.  

#### Abstract

The following table is used to find the best framework for building CSC583_final application. The evaluation has a score range between 0 (the lowest) to 5 (the highest). As a result, XAMPP is chosen because this application is simple and do not required a lot of features.

Technology | Django | Ruby on Rails | Meteor | XAMPP | React 
---------- | ----   | ------------- | ------ | ----- | -----
Skills     | 1.8    | 4.0           | 3.5    | 2.5   | 3.8
Features   | 2.5    | 3.0           | 4.0    | 4.2   | 2.5 
Constraints| 2.3    | 4.7           | 3.0    | 4.3   | 3.3 
Usability  | 2.3    | 1.8           | 2.5    | 4.0   | 3.1 
Support    | 2.5    | 3.2           | 4.2    | 4.2   | 2.5 
Security   | 2.8    | 3.4           | 3.5    | 2.2   | 2.9 
Complexity | 2.9    | 4.5           | 4.8    | 2.7   | 4.7 
Average    | 2.4    | 3.5           | 3.6    | 3.4   | 3.2

#### Framework Evaluation

- XAMPP is the best choice for this application depending on the evaluation. of course, XAMPP is not the best freamwork according to the evalition. However, it fits perfectly such as application. after examining the evaluation table, it could be opserved that XAMPP is really good in terms of usability, support, and features. It has less complexity which advances the usability. 

* Other reasons why XAMPP is chosen :
  1. It is Easy to Install as compare to other web server's like WAMP.
  2. It is Multi Cross Platform which means XAMPP is available for Windows and Linux.
  3. It also comes with a number of other modules including OpenSSL, phpMyAdmin, MediaWiki, Joomla, WordPress and more. 
  4. XAMPP is offered in both a full and a standard version (Smaller version).
  5. You can start and stop the whole webserver+database stack with one command.

#### Summary

- Although XAMPP do not have the highest average, it is the best choice for our application. The main qualities we focus on is features, support, usability, and complexity. As shown in the table, high scores in features, usability, and support, but lower score in complexity which is exactly what we are looking in such an application. 

## Installation instructions
- ### Installing XAMPP on a Linux 
  1. Download [XAMPP](https://www.apachefriends.org/download.html) for Linux. Be sure to select the proper version of PHP.
  2. open the location where the downloaded file is exists by using terminal, if my downloaded file exists in Downloads directory. e.g:
  
      `cd /$HOME/Downloads`
  3. Give permissions to that file: 
  
       `chmod +x xampp-linux-x64-7.1.11-1-installer.run`
  4. Run that file: 
  
       `sudo ./xampp-linux-x64-7.1.11-1-installer.run`
- #### Testing your Linux XAMPP Installation:
     In your web browser, go to http://localhost. You should see the start page of XAMPP
  
- ### Installing XAMPP on a Mac
  1. Download [XAMPP](https://www.apachefriends.org/download.html) for Mac OSX. Be sure to select the proper version of PHP.
  2. Open the downloaded file (the DMG-Image).
  3. Drag and drop the XAMPP folder into your Applications folder.
  
- #### Starting XAMPP on OSX:
     To start XAMPP simply open XAMPP Control (by going to /Applications/XAMPP/XAMPP Control in Finder) and start Apache and MySQL.

- #### If MySQL Does Not Start:
     - If your MySQL server isn't starting, you may need to set the permissions for it using Terminal with this command:
         `chmod -R 777 /Applications/XAMPP/xamppfiles/var`
         
- #### Testing your OSX XAMPP Installation:
     In your web browser, go to http://localhost. You should see the start page of XAMPP

- ### Installing XAMPP on a Windows
  1. Download [XAMPP](https://www.apachefriends.org/download.html) for Windows. Be sure to select the proper version of PHP.
  
  2. Allow the program to make changes to your machine.
  
  3. It is VERY important to install on the root of c:\. If you don't, some functions of XAMPP may have restrictions that will force you to adjust the settings in your UAC, which isn't recommended.
  
  4. Double-click on the new XAMPP Control Desktop shortcut or Use the Search feature in Windows 10 to find the XAMPP Control App, which opens up the XAMPP Control Panel Application. There you will see a column of "Start" buttons. Select the ones for MySQL and for Apache...you should now see a green "Running" indicator
  
  - #### Testing your Windows XAMPP Installation:
     In your web browser, go to http://localhost. You should see the start page of XAMPP
     
## Architecture discussion
 - The application is working in general depending on PHP. The data is transmitted from and to the database through PHP. When the visitor (user) enters the application and `sign-in`, the data is sent from the client to MySQL database as PHP file. When the data is received by the server, MySQL stores it in the database. Another view, is the admin page. When the admin accesses the admin page, an sql query is sent to the server. As soon the server recived the query, MySQL response to the query and send all the users data as PHP. The client revices the PHP filed and displays it in the admin page.
 

## Plan of action
- [x] Nonfunctional analysis

- [x] Functional analysis

- [x] Architecture design

- [x] Coding

- [x] Test deployment

- [x] Deployment

- [x] Sign-in

