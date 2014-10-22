SpamassassinBundle
=====
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/webeith/spamassassin-bundle?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![License](https://poser.pugx.org/webeith/spamassassin-bundle/license.png)](https://packagist.org/packages/webeith/spamassassin-bundle)
[![Total Downloads](https://poser.pugx.org/webeith/spamassassin-bundle/downloads.png)](https://packagist.org/packages/webeith/spamassassin-bundle)

* [See how to use service](http://github.com/webeith/php-spamassassin)

Usage Example
-------------

``` php
$this->getContainer()->get('spamassassin');
```
Configuration config.yml example
-------------

``` yml
webeith_spamassassin:
    hostname:        "localhost"
    port:            783
    socketPath:      ~
    protocolVersion: "1.5"
    enableZlib:      true
```
## Installation

### Install via Composer

Add the following lines to your `composer.json` file and then run `php composer.phar install` or `php composer.phar update`:

```json
{
    "require": {
        "webeith/spamassassin-bundle": "dev-master"
    }
}
```

### Register the bundle

To start using the bundle, register it in `app/AppKernel.php`:

```php
public function registerBundles()
{
    $bundles = array(
        // Other bundles...
        new Webeith\SpamassassinBundle\WebeithSpamassassinBundle(),
    );
}
```
