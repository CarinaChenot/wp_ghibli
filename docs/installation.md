# Installation

**1. On your htdocs (or equivalent) folder**

Run `git clone https://github.com/CarinaChenot/wp_ghibli.git`

**2. On phpMyAdmin**

Create the `wp_ghibli` database and import the file `db.sql` to the database

**3. On the project folder root**

Run `composer install`

Create a `.env` file with [this content](./.env) and replace the paths if needed

Create a `.htaccess` file with [this content](./.htaccess) and replace the paths if needed

**4. On the ghibli theme folder** *(`web/app/themes/index/`)*

Run `yarn` to install node packages

Run `gulp` to build assets

That's all !
