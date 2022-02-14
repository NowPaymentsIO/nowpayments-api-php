


## Installation
This project using composer.
```
$ composer require bearname/nowpayments-api-php
```

## Usage
Genrate random password.
```php
<?php

require ("vendor/autoload.php");

use NowPaymentsIO\NOWPaymentsApi;

$password = new NOWPaymentsApi("YOUR API");
echo $password->status();
```
