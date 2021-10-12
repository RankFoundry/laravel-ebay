# Laravel eBay API Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rankfoundry/laravel-ebay.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-ebay)
[![Total Downloads](https://img.shields.io/packagist/dt/rankfoundry/laravel-ebay.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-ebay)


**A Laravel wrapper for eBay API.**

## Install

Via Composer

``` bash
$ composer require rankfoundry/laravel-ebay
```


## Configuration

Laravel eBay requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="RankFoundry\LaravelEbay\EbayServiceProvider"
```

Add the following values to your enviroment configuration file
`EBAY_MODE=`
`EBAY_SITE_ID=`

`EBAY_SANDBOX_DEV_ID=`
`EBAY_SANDBOX_APP_ID=`
`EBAY_SANDBOX_CERT_ID=`
`EBAY_SANDBOX_AUTH_TOKEN=`
`EBAY_SANDBOX_OAUTH_USER_TOKEN=`

`EBAY_PROD_DEV_ID=`
`EBAY_PROD_APP_ID=`
`EBAY_PROD_CERT_ID=`
`EBAY_PROD_AUTH_TOKEN=`
`EBAY_PROD_OAUTH_USER_TOKEN=`

## Usage
See documention for params and others at [eBay docs](https://developer.ebay.com/)