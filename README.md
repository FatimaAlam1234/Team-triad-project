## About Triad Team Employee Management System  project

Employee Management System is a web application used for HRM of employees with robust authentication and access manangement system made in lastest Laravel 7.25 Framework and MySQL.

- [Simple, fast routing engine of laravel is used](https://laravel.com/docs/routing).

- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent) is used for database queries.
- Efficient usage of laravel [relationships](https://laravel.com/docs/7.x/eloquent-relationships).

- [Gates](https://laravel.com/docs/7.x/authorization) used  for authorizations.
- [Session](https://laravel.com/docs/7.x/session) used for remembering the logged in user.
- Optimal usage of laravel [advanced routing](https://laravel.com/docs/4.2/routing)
- Fully responsive website across all devices and screen sizes.

Employee Management System is fast and easy to use and can be customized easily according to client project


### Configuration

Make sure that this project has proper file permissions.
To run this project, you will need to set up a database and  add it to your .env file.
1. Clone GitHub repo for this project locally
	```console
	git clone https://github.com/monikakunwarshaktawat/TeamTriadProject.git
	```

2. cd into your project
	```console
	cd TeamTriadProject
	```
3.  Install Composer Dependencies
	```console
	composer install
	```
4. Install NPM Dependencies
	```console
	npm install 
	```
	OR
	```console
	yarn
	```	

5.  Create a copy of your .env file
	```console
	cp .env.example .env
	```

6.  Generate an app encryption key
	```console
	php artisan key:generate
	```

7.  Create an empty database 

8.  In the .env file, add database information to allow Laravel to connect to the database

9.  After that, you run migration to get it running.

```console
php artisan migrate
```

 10. And link public folder to storage for file uploads

```console
php artisan storage:link
```

11. To get initial test data in database

```console
php artisan db:seed
```
12. To run on localhost

```console
php artisan serve
```



## Themes, plugins, packages used for developement
Following are the assets used for this project
-	[AdminLTE](https://adminlte.io/) a bootstrap and jquery based admin dashboard theme
-	[DataRangePicker](https://www.daterangepicker.com/) for date pickers
-	[DataTables](https://datatables.net/) for responsive table
-	[Intervention/Image](http://image.intervention.io/getting_started/installation) package in laravel for image upload optimisaton
-	[HTML Geolocation API](https://www.w3schools.com/html/html5_geolocation.asp) which works only on SSL, for using make sure your domain is SSL certified.
-	[Nominatim](https://nominatim.org/) an open source geocoding API for reverse geocoding.
