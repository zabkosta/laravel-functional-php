##  The wrapper for lstrojny/functional-php v1.0.0 

#### Requirements

 - laravel >=5.5
 
#### Installation

   ```
   composer require zkosta/laravel-functional-php 
   ```
 
This package supports the new package _auto-discovery_ feature of Laravel 5.5, 
so if you are working on a Laravel 5.5 or greater, then your install is complete



### Usage


In original packet (https://github.com/lstrojny/functional-php) each function placed its own file 
under `Functional` namespace. So you need import every function you use.

###### Example
```php
use function Functional\map;

map(range(0, 100), function($v) {return $v + 1;});
```
 
 
i've hidden them with Laravel Facade pattern. So you'll able use as 
 
 
```php
HFunc::map(range(0, 100), function($v) {return $v + 1;});
```

where `HFunc`  is new facade  registered whilst installation. 
Of course, it is possible to use functions by original way but then you do not need this package.