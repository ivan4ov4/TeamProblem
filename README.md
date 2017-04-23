# TeamProblem
This is priject for Software Univursity, module Software Techologies - defance.
Techologies using for this project is PHP and his MVC (Symfony).


### Team members 
  * Ivan Simeonov - ivan4ov4
  * Daniel Vasilev - DanielVasilev98
 
### Site map  

* / - view all posts
 
* /register - register new user
 
* /login    - login register user 
 
* /logout   - logout login user
 
* /profile  - view user info
 
* /article/{id} - view article id 
 
* /article/create  - create article
 
* /article/edit/{id} - edit article id 
 
* /article/delete/{id} - delete artile id
 
* /admin/panel/ - view admin panel

* /admin/user/ - view all registered users

* /admin/user/edit/{id} - edit user by id

* /admin/user/delete/{id} - delete user by id

* /admin/category/ - view all categories 

* /admin/category/create - create new category

* /admin/category/edit/{id} - edit category by id 

* /admin/category/delete/{id} - delete category bt id

* /edit/articles/ - view all articles 
 
 ### Using reources
 
 
 * [PHP: Blog Basic Functionality](https://softuni.bg/trainings/resources/video/13416/video-screen-14-march-2017-vladimir-damyanovski-software-technologies-february-2017)
 
 * [PHP: Blog Admin Functionality](https://softuni.bg/trainings/resources/video/13449/video-screen-15-march-2017-ivaylo-kenov-software-technologies-february-2017)
 
 * [PHP: Blog Advanced Functionality](https://softuni.bg/trainings/resources/video/11027/video-screen-07-november-2016-ivan-yonkov-software-technologies-october-2016)
 
 
 ## How to install this project for develop
 #### Tip: This steps are for windows machine
 
 ## Preparation for install project
 
 ##### Step 1: Download this repository. 
 ##### Step 2: You need to xampp for install this project. Clik [here](https://www.apachefriends.org/download.html) to download.
 ##### Step 3: Install HeidiSQL. Clik [here](https://www.heidisql.com/download.php) to download.
 
 ## Project instalation
 Open `cmd`on project directory. To fast open clik `control` + `shift` + `right mouse button` and find `open command window here`.
 #### Chek you PHP.
 ````
 C:\..dir..\TeamProblem>php -v
 ````
 
 If php responce this.
 
 ![Chec you PHP](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture1234.PNG)
 
 PHP work successfully.
 
 ### Install project
 #### Step 1: Install doctrine and symfony tools. 
 ````
 C:\..dir..\TeamProblem>php composer.phar install
 ````
 ![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/Capture2.PNG)
 #### Step 2: Replase `parameters.yml`on this file on `app/config` [parameters.yml](https://github.com/ivan4ov4/TeamProblem/blob/master/parameters.yml).
 ![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture3.PNG)
 #### Step 3: Create database.
 ````
  C:\..dir..\TeamProblem>php bin/console doctrine:database:create
 ````
 ![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture4.PNG)
 #### Step 4: Update database.
 ````
  C:\..dir..\TeamProblem>php bin/console doctrine:schema:update --force
 ````
 ![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture5.PNG)
 #### Step 5: Start server.
 ```` 
  C:\..dir..\TeamProblem>php bin/console server:run
 ````
![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture6.PNG)
### Add user roles
Start HeidiSql and connect to database.
Create [query](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/query.sql)  to base with qery tab.
![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture01.PNG)
Click `F9` to execute query.
![Image for working php](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture02.PNG)

Go to [localhost:8000](http://localhost:8000) and register new user.
Open HeidiSQL and change you user type. After register first admin user you will be able to change the type of all registered users from admin panel.

![Go to roles table](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture03.PNG)

Change to admin role.

![Go to roles table](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture04.PNG)

Result on web page.

![Go to roles table](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture05.PNG)

Change to editor role 

![Go to roles table](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture06.PNG)

Result to editor role

![Go to roles table](https://github.com/ivan4ov4/TeamProblem/blob/master/pic/Capture07.PNG)

#### Enjoy.




 
 
 
 
