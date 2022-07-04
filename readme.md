# E-Geography

[# Installation](#installation)

[# Clone & install packages](#clone)

[# Setting](#setting)

[# Start application](#start-application)

[# Credit](#credit)

The geography has played important role in the evolution of people, their ideas, places, and environment. To develop a mental map of our community, province or territory, country and the world so that you can understand the “where” of places and events, we need to have enough knowledge. A student who needs some general info on the specific country, who would prefer an accurate and easily-found source, can confidently use our project to satisfy his waitings.

As often noted, most students have a poor knowledge of geography. This stands in stark contrast to the abundance of rich geographic resources. There is more than enough geographic information available in readily useful, accessible, digital forms; the challenge is to get people to use it. To meet that challenge, the project has to reduce barriers to use by making the professional standards and applications more transparent to teachers and students. Further, it has to provide simple and easy access to content, in a structure that facilitates its adaptation in the schools. The goal of the project is for teachers to have the knowledge, curriculum, and tools to teach the state’s new graduation standards for geography, using online digital resources and applications. This will help students learn geography and apply geographic principles in the study of other disciplines.

This project will enhance the value of digital resources both at the society and across the Web by integrating more closely the application of technologies with the needs of students and teachers in grades 4-12. There is no shortage of content. An enormous quantity of digital resources are available online. The outcomes of the project will be an immediately valuable resource that allows the primary audience, teachers, to address the standards. As well, the project will provide a tool that can reach other audiences, as the concept can be extended to cover other geographic content and other audiences; the overall result is a model for application by other institutions across the country. 

To build the project we used modern programming languages like PHP and JavaScript. The project is powered by famous PHP framework Laravel and JavaScript’s progressive framework Vue. The project provides categories, such as lessons category, tests category, game category. This can be perfect for any student to any adult man or woman. Each category is special, for example, flag game and tests category is perfect for those want to test his/her knowledge about geography, Map category is useful for teachers and students to quickly get information about any country. There is an additional library where anyone can download ebooks. And to control the site, we build an admin dashboard. In admin dashboard, you can create and edit lessons, upload books, make tests. 

<!-- ### Few pages: 
This is how home page looks. Nice and simple for any type of people. 
![alt text](http://doctna.esy.es/uploads/Untitled.png "Homepage")

Our project can be perfect for finding quick information for any country.
![alt text](http://doctna.esy.es/uploads/countries.png "Countries page")

This is the map category. You can click on any country and get information
![alt text](http://doctna.esy.es/uploads/map.png "Maps Page")

Flag game category, simple fun and exciting.
![alt text](http://doctna.esy.es/uploads/flagGame.png "Awesome Flag Game page")

Admin dashboard, a place where you can control site. You can create tests, lessons, upload books and add information about countries.
![alt text](http://doctna.esy.es/uploads/adminDashboard.png "Admin Dashboard Page")
![alt text](http://doctna.esy.es/uploads/adminDashboardForms.png "Admin Dashboard Page") -->

# Installation
#### installation
As a first step, we need to have installed MySQL and PHP in our machine.

## For mac
Install Homebrew
```bash
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```
## Note: Make sure to add path for hombrew

Then open new tab and paste this commands
```bash
$ brew install php
$ brew install mysql
```
## These will install latest versions of php and Mysql

## Windows
For the windows, it is highly recommended to use GUI applications that install PHP and Mysql behind the scenes.[Mamp](https://www.mamp.info/en/mamp-pro/) or [Xampp](https://www.apachefriends.org/index.html) is a good choice. Just download and install.

## Linux
For the Linux users, we can install PHP and Mysql by [Linuxbrew](http://linuxbrew.sh/), which is  is a fork of [Homebrew](http://brew.sh/), the macOS package manager, for Linux.
Install Linuxbrew
The installation script installs Linuxbrew to  `/home/linuxbrew/.linuxbrew`  if possible and in your home directory at  `~/.linuxbrew`  otherwise.

Paste at a Terminal prompt:
```bash
$ sh -c "$(curl -fsSL https://raw.githubusercontent.com/Linuxbrew/install/master/install.sh)"
```
Follow the  _Next steps_  instructions to add Linuxbrew to your  `PATH`  and to your bash shell profile script, either  `~/.profile`  on Debian/Ubuntu or  `~/.bash_profile`  on CentOS/Fedora/RedHat.
```bash
test -d ~/.linuxbrew && PATH="$HOME/.linuxbrew/bin:$HOME/.linuxbrew/sbin:$PATH"
test -d /home/linuxbrew/.linuxbrew && PATH="/home/linuxbrew/.linuxbrew/bin:/home/linuxbrew/.linuxbrew/sbin:$PATH"
test -r ~/.bash_profile && echo "export PATH='$(brew --prefix)/bin:$(brew --prefix)/sbin'":'"$PATH"' >>~/.bash_profile
echo "export PATH='$(brew --prefix)/bin:$(brew --prefix)/sbin'":'"$PATH"' >>~/.profile
```
So now we installed Linuxbrew, to install Mysql and PHP paste commands below in terminal
```bash
$ brew install php@7.0 
$ brew install mysql
```

# Clone & install packages
#### clone
> First clone the repo, and install the packages
```bash
git clone https://github.com/nurmuhammet-ali/geography.git
cd geography
cp .env.example .env
composer install
php artisan key:generate
```


# Setting
#### setting
After we installed Mysql and PHP, we need to import our mysql tables
To do this we have  create database e_geographyl and import e_geography.sql to our e_geography database.  See below for install instructions.

### Open Mysql command line and paste:
```sql
create database e_geography;
use e_geography;
source e_geography.sql;
```
# Start Application
#### start-application
To start application, all we need to do is open terminal in current folder and run below command, and go to http://127.0.0.1:8000.
```bash
php artisan storage:link # this will link public storage file to storage/public directory
php artisan serve # this will serve application
```
For windows users, it just enough to double click storage.cmd and geography.cmd, and you are ready to go to http://127.0.0.1:8000 in browser.

### Please, don't hesitate to open an issue.
Contact mail: nurmuhammet@mail.com

# Credit

#### credit
> Credit goes to
- [Azat akmyradov](https://github.com/azatakmyradov)
- [Myratnazar Charyyarov](https://github.com/mcharyyev)
- [Nurmuhammet Allanov](https://github.com/nurmuhammet-ali)


## License

The E-Geography is open-sourced software licensed under the  [MIT license](https://opensource.org/licenses/MIT).
