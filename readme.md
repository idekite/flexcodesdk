# flexcodesdk

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require idekite/flexcodesdk:dev-master
```

## Usage

Publish Vendor
``` bash
$ php artisan vendor:publish
```
Choose 'flexcodesdk-config' and 'flexcodesdk-models'

Migrate Database
``` bash
$ php artisan:migrate
```

Blade 
``` bash
{{ flexcodesdk::getRegistrationLink($user_id) }}
```


Edit app/Providers/EventServiceProvider.php
``` bash
Event::listen('fingerprints.register', function($data)
{
    // Do some stuff before informing URL to user

    // inform SDK to open this URL
    echo url('test?message=' . $data['message']);
});


Event::listen('fingerprints.verify', function($data){
    $action = $data['extras']['action'];
    switch ($action) {
        case 'login':
            // Log user to database here, i.e: Adding new session etc.
            // Example: 
            // Session::add($data['user']->id);

            // Then tell SDK to open this page
            echo action('testController@index', array('message' => $data['message']));
            break;
        
        case 'transactions.confirm':
            // mark transaction as verified, example usage:

            // $transaction = Transaction::find($data['extras']['transaction_id']);
            // $transaction->verified = true;
            // $transaction->save();

            // Then tell SDK to open this page
            echo route('transactions', 
                array(
                    'message' => $data['message'], 
                    'id' => $data['extras']['transaction_id'])
                );
            break;
    }
});
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email feriharjulianto@gmail.com instead of using the issue tracker.

## Credits

- [Feri Harjulianto][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/idekite/flexcodesdk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/idekite/flexcodesdk.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/idekite/flexcodesdk/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/idekite/flexcodesdk
[link-downloads]: https://packagist.org/packages/idekite/flexcodesdk
[link-travis]: https://travis-ci.org/idekite/flexcodesdk
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/idekite
[link-contributors]: ../../contributors]