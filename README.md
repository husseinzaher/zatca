
## Requirements

* PHP >= 7.2
* An mbstring extension

## Installation

You can install the package via composer:

```bash
$ composer require Husseinzaher/Zatca
```
<p align="right">(<a href="#top">back to top</a>)</p>

## Usage

### Generate Base64

```php
use Husseinzaher\Zatca\GenerateQrCode;
use Husseinzaher\Zatca\Tags\InvoiceDate;
use Husseinzaher\Zatca\Tags\InvoiceTaxAmount;
use Husseinzaher\Zatca\Tags\InvoiceTotalAmount;
use Husseinzaher\Zatca\Tags\Seller;
use Husseinzaher\Zatca\Tags\TaxNumber;

$generatedString = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-07-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->toBase64();

// > Output
// AQVTYWxsYQIKMTIzNDU2Nzg5MQMUMjAyMS0wNy0xMlQxNDoyNTowOVoEBjEwMC4wMAUFMTUuMDA=
```

### Generate Plain

```php
use Husseinzaher\Zatca\GenerateQrCode;
use Husseinzaher\Zatca\Tags\InvoiceDate;
use Husseinzaher\Zatca\Tags\InvoiceTaxAmount;
use Husseinzaher\Zatca\Tags\InvoiceTotalAmount;
use Husseinzaher\Zatca\Tags\Seller;
use Husseinzaher\Zatca\Tags\TaxNumber;

$generatedString = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-07-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->toTLV();
```
<p align="right">(<a href="#top">back to top</a>)</p>

### Render A QR Code Image

You can render the tags as QR code image easily


```php
use Husseinzaher\Zatca\GenerateQrCode;
use Husseinzaher\Zatca\Tags\InvoiceDate;
use Husseinzaher\Zatca\Tags\InvoiceTaxAmount;
use Husseinzaher\Zatca\Tags\InvoiceTotalAmount;
use Husseinzaher\Zatca\Tags\Seller;
use Husseinzaher\Zatca\Tags\TaxNumber;

// data:image/png;base64, .........
$displayQRCodeAsBase64 = GenerateQrCode::fromArray([
    new Seller('Husseinzaher'), // seller name        
    new TaxNumber('1234567891'), // seller tax number
    new InvoiceDate('2021-07-12T14:25:09Z'), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
    new InvoiceTotalAmount('100.00'), // invoice total amount
    new InvoiceTaxAmount('15.00') // invoice tax amount
    // TODO :: Support others tags
])->render();

// now you can inject the output to src of html img tag :)
// <img src="$displayQRCodeAsBase64" alt="QR Code" />
```
<p align="right">(<a href="#top">back to top</a>)</p>


## Read The QR-Code

The output of QR-Code is not readable for the human 👀, and some of QR-Code readers maybe show a invalid output because this QR-Code will be scan by the Zatca apps later after the all steps of integration compete.
If you interested to see the output of your final QR-Code Image you can use the following website

https://www.onlinebarcodereader.com/

![image](https://user-images.githubusercontent.com/10876587/142364186-f7d5b523-07fc-4776-8b96-9a75f4a455d1.png)


## TODO

We'll continue work on this package until support the whole cycle of QR code implementation.

- [ ] Support the digital signature for the QR code.

## Testing

```bash
composer test
```
<p align="right">(<a href="#top">back to top</a>)</p>

## Support

Please don't hesitate to contact us using the [</Husseinzaher Developers>](https://t.me/Husseinzaherdev) at telegram

- https://t.me/Husseinzaherdev


## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. 
Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. 
You can also simply open an issue with the tag "enhancement". Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>


## Security

If you discover any securitys-related issues, please email security@Husseinzaher.sa instead of using the issue tracker.


## Credits

- [Husseinzaher](https://github.com/HusseinzaherApp)
- [All Contributors](../../contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<p align="right">(<a href="#top">back to top</a>)</p>
