# localbitcoins-php-laravel

Interact with localbitcoins.com usng this package <a href="https://packagist.org/users/haxxan21/">localbitcoin/endpoints</a>

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

After instantiating the Localbtc class object, you just need to call methods for different endpoints as
```
$localbtc->Dashboard();
```
Methods follow the following naming conventions. Access them like below.
To return all ads of the authenticated user. Here's the url in official documention at <a href="https://localbitcoins.com/api-docs">localbitcoins.com</a> 
```
/api/ads
```
To use the method for advertisements, capitalise the first letter of ads and use the method
```
$localbtc->Ads();
```
In some cases, URL is having a hyphen like 
```
/api/ad-get/
```
To resolve this, access the Method like 
```
$localbtc->AdGet();
```
In case, there are some missing methods for certain endpoints, to implement the functionality you can use the Query method like this.
```
return $this->Query('api-endpoint-url','','',array(optional-parameters));
```
As for /api/ads-get
```
return $this->Query('/api/ad-get/','','', array('ads'=>$ad_id));
```
## Disclaimer

Pagination isn't tested at this point. Feel free to contribute to this repository.

## Contact

Email me at <a href="mailto:malikhassan053@gmail.com">malikhassan053@gmail.com</a>

