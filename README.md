# PsiΨ

PSIΨ Project Management System is an Application that helps in managing various projects in a company. Nowadays companies are using Project Management Systems to increase the efficiency of the products. Some different projects may be running at the same time , so a proper software to fully organize and divide the work in the group is needed. Since several workers take part in each project , the application will play a critical role in creating reliable and high quality projects. We considered the possibility that a Project Management System is needed and is in demand for some companies or businesses . 

# Features :
* Allows the user to plan project tasks and activities, and assign tasks to members of the project team.
* Controls when the project team members carry out the assigned tasks.
* Shows the current status of all project documents and tasks and the responsible persons for each task.
* Allows the members of the team to communicate and also allows the leader to post announcements.


# Requriments for installation
*  PHP version 5.* - 7.4.*
* Tested with PHP 7.4.9
*  Xampp 
-----------------------------------------------------------------------------------------------------------------------------------

# Installation 
* Create a Database with name psi. (Or change DB_DATABASE in .env to the created Database name)
* Code is in folder PSI-main.
* Open the code directory in cmd/terminal.
### Follow commands:
* composer install
* php artisan key:generate
* php artisan migrate
* php artisan db:seed
* php artisan serve

* Open the link in terminal or enter localhost:8000 in browser.

### user login:
email:test@psi.com
password:secret

### admin login:
email:admin@psi.com
password:admin
