# LAMP_login #
### A basic Dockerized LAMP project complete with login. ###
This project has numerous security holes and should not be used in production.

## Setup: ##
* Install Docker and Docker Compose
* Create a php file at static/scripts/secure.php containing mysql info like so:
```php
<?php
    $host = 'mysql';
    $user = 'root';
    $pass = 'rpass';
    $db = 'db';
?>
```

## To run: ##
1. Navigate to root folder
2. ./up.sh

## To stop: ##
* Ctrl + C
* or in another shell: ./down.sh