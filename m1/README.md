___________________________________________________________  
 |  \/  |  ____|  \/  |  ____| |    / __ \|  __ \|  __ \ 
 | \  / | |__  | \  / | |__  | |   | |  | | |__) | |  | |
 | |\/| |  __| | |\/| |  __| | |   | |  | |  _  /| |  | |
 | |  | | |____| |  | | |____| |___| |__| | | \ \| |__| |
 |_|  |_|______|_|  |_|______|______\____/|_|  \_\_____/ 
                                                        
___________________________________________________________

An online forum which allows different users to login and discuss any meme. 

KNOWN BUGS
----------
When editing your profile in the user edit page, the hashed version of the original password appears in the password input box. Upon saving any changes made to the profile, the hashed password will then become the actual password for the account, which essentially locks the user out once they decide to log out as their hashed password has then been hashed for a second time. Only a change in the database will allow users to regain access to their account. To counter this bug before a fix can be implemented, when editing the account, please retype your original password into the password box so that way it can be rehashed when entering the database.


ROAD MAP/FUTURE IMPLEMENTATIONS
-------------------------------
The structure for the following features has been developed, but not implemented as time for this project was a serious issue. These future features include:

- PHP automailer to allow users to recover their account when they've forgotten their password
- Likes for questions and answers
- An admin account that is able to delete questions, answers, categories and user accounts, along with creating categories within the browser

Road map features include:

- The ability to display images via URL on the page when uploading questions or answers


TECHNOLOGIES USED TO CREATE THIS FORUM
--------------------------------------
**PHP** used as the main back-end programming language
**HTML/CSS/JavaScript** used as the main front-end programming languages
**AJAX Technology** used to dynamically update webpages
**MySQL** used as Database


INSTALLATION
------------

If you are manually installing this site from github, please consider these following steps:

1. Once the ZIP folder has been downloaded, extract its contents to the revelant localhost directory in your OS.
2. Install the SQL file into your chosen database provider. (phpMyAdmin is recommended)
3. Go to the 'category' table and manually create any categories you wish to discuss on the forum. (There are already a few created)
4. Once the first three steps have been completed, launch the home.php file from the folder in your browser and create an account.
5. After creating an account, you will be able to start and many threads, ask as many questions and give as many answers as you want. 
6. All thats missing now are some friends :)



