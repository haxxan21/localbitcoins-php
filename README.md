# localbitcoins-php-laravel

Interact with localbitcoins.com usng this package.
Packagist Link <a href="https://packagist.org/users/haxxan21/">localbitcoin/endpoints</a>

## Installation

using composer.json file 

Add this to your required dependency object
```
"localbitcoin/endpoints": "*"
```

Or alternatively, through composer dependency manager
```
composer require localbitcoin/endpoints
```

After successfull installation, register the service provider in providers/app.php

```
Localbitcoin\Endpoints\LocalBtcServiceProvider::class,
```
and then,

```
php artisan vendor:publish --provider="Localbitcoin\Endpoints\LocalBtcServiceProvider"
```

It will create a file named localbtc.php inside the config folder. You can directly add your API keys there.
But I suggest you to create two environment variables in your .env file as following.

```
API_AUTH_KEY= public key here
API_AUTH_SECRET= private key here
```

## Usage

After installation, you can now use the following namespace to access API methods.
```
use Localbitcoin\Endpoints\Localbtc;
````

and after that Localbtc class can be accessed by instantiating the class object.
```
$localbtc = new Localbtc();
```

## Documentation

Coming soon!

