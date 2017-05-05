THIS REPO IS ONLY FOR EXPIREMENT, DO NOT USE IN REAL PROJECTS 

Yii2 QR Code Reader
===================
Yii2 widget for reading qr code using laptop or phone camera

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require odaialali/yii2-qrcode-reader "*"
```

or add

```
"odaialali/yii2-qrcode-reader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
echo odaialali\qrcodereader\QrReader::widget([
	'id' => 'qrInput',
	'successCallback' => "function(data){ $('#qrInput').val(data) }"
]);

```
