# Omnipay: PayU Romania

**PayU Romania driver for the Omnipay payment processing library**

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements PayU support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "dantoma/payu-romania": "~2.0"
    }
}
```

## Invoice Ninja Installation

To use this driver with your self-hosted Invoice [Ninja installation](http://www.invoiceninja.org) follow this steps:

1. Go to you Invoice Ninja installation

```
$ cd /var/www/invoice_ninja/ninja

```

2. And run:

```
$ composer require dantoma/payu-romania
```

If the command from above doesn't work for you here's what worked for me:

```
$ php -d memory_limit=-1 /usr/local/bin/composer require dantoma/payu-romania
```

3. Follow this [guide](https://invoice-ninja.readthedocs.io/en/latest/configure.html#omnipay) to add the new payment gateway in Invoice Ninja

The name of the prrovider is:

```
\DanToma\Omnipay\PayURomania\Gateway 
```


For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/efesaid/omnipay-payu/issues),
or better yet, fork the library and submit a pull request.
