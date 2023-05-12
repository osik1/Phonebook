# Phonebook  App
A simple Phone book App to demonstrate CRUD operations.

The app was built with PHP's framework laravel 10 and connected to a MySQL database.
The UI was built with HTML, CSS, and a little JS. It is responsive on all screens. 

#To install this app on your for learning or viewing purposes, Follow the below steps. 

1. Install XAMPP.
2. Install composer.
3. Install git
4. Download or clone the app into the htdocs of your XAMPP directory on your computer.
5. Open the project with git bash
6. Run this command ***composer update*** to download all the dependencies needed for the app to run
7. Open the project folder with VSCode or any other text editor.
8. Duplicate the **.env.example** file and rename it **.env**
9. Create a database and set the credentials in the **.env**
If there is no app key in the **.env** file, generate one by running this command. 
***php artisan key:generate***
10. Now run the command ***php artisan migrate*** to send tables to your database
11. Run ***php artisan serve*** to start the server.
12. Now view the app in the browser with the serving link provided. 



## Screenshots
![Contacts page](https://github.com/osik1/Phonebook/blob/main/phonebook-contacts.png)

![Add Contacts page](https://github.com/osik1/Phonebook/blob/main/phonebook-addcontacts.png)

![Edit Contact page](https://github.com/osik1/Phonebook/blob/main/phonebook-editcontact.png)

