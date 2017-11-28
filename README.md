# Studio Ghibli website

The repository of the Studio Ghibli Wordpress website school project.

## Installation

**1. On your htdocs (or equivalent) folder**

Run `git clone https://github.com/CarinaChenot/wp_ghibli.git`

**2. On phpMyAdmin**

Create the `wp_ghibli` database and import the file `db.sql` to the database

**3. On the project folder root**

Run `composer install`

Create a `.env` file based on the [.env.example](./.env.example) one and replace the paths if needed

**4. On the ghibli theme folder** *(`web/app/themes/index/`)*

Run `yarn` to install node packages

Run `gulp` to build assets

## Plugin wordpress

* ACF
* Polylang

## Tech stack

* ES6
* Gulp 4
* [Timber](https://www.upstatement.com/timber/)
* [Bedrock](https://github.com/roots/bedrock) - The WordPress boilerplate used

## Authors

* Carina Chenot — Front-end developer
* Paul Maire — Back-end developer
* Tran-Minh Villageois — UI/UX Designer
* Matthias Ngo Trung — UI/UX Designer
* Lucile Van Severen — Content manager
* Alexia Husson — Content manager

## License

This project is licensed under the MIT License
