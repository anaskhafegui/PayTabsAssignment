# Category Task

• Main categories select box

• Unlimited subcategories of parent category 

• Using Ajax

## Dev tools: -

* PHP version:- 8.1.5

* Laravel version:- 9.0

* MySQl

## Run the app in your machine: -

* clone the project and setup the env file

```bash

##Mac Os, Ubuntu and windows users continue here:
* Create a database locally named `root` utf8_general_ci 
* Download composer https://getcomposer.org/download/
* Pull Laravel/php project from git provider.
* Rename .env.example file to .env inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
* Open the console and cd your project root directory
* Run composer install or php composer.phar install
* Run php artisan key:generate
* Run php artisan migrate
* Run php artisan serve
```
## How to run the test suite

```bash
./vendor/bin/phpunit
```
## Endpoint  Default Path
* GET Request
```url
/selectcategory
```
## API Endpoints For Ajax

#### GET /category

get all main categories.

#### GET /category/{parentId}

get children category of spesific parentId.







