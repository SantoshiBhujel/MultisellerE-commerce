<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**

### Community Sponsors

<a href="https://op.gg"><img src="http://opgg-static.akamaized.net/icon/t.rectangle.png" width="150"></a>

- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Cart package:
    composer require darryldecode/cart
useful if you plan to have full control:
    php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"
For details visit: https://packagist.org/packages/darryldecode/cart 
                                    OR
                    https://github.com/darryldecode/laravelshoppingcart

Paypal Package:  (https://packagist.org/packages/srmklive/paypal)
    composer require srmklive/paypal:~1.0
publish configuration:
    php artisan vendor:publish --provider "Srmklive\PayPal\Providers\PayPalServiceProvider"

For Sandbox API,
Create account in paypal
Goto --> developer.paypal.com
Log into Dashboard with paypal account

Select Sandbox and Create App, it will create sandbox business account.

Goto Sandbox->Account section,
you will get the account which you created.
Select business account and under Manage Account, Select View/Edit Account
where you get the api username, password and secret.

Configure the details in the .env file and config/app.php (for detils visit above paypal package link).


Once the voyager installation is successful,
Go to admin panel, under tool->bread, for "order" add BREAD (configure order) and create a relationship with users.

If you want to create seed from the database's original data, install iseed:
    composer require orangehill/iseed   
and run :
    php artisan iseed 'NAME OF TABLES WHOSE SEED IS WANTED' ,,,  Like
    php artisan iseed data_types,data_rows,categories,posts,pages,menus,menu_items,roles,users,user_roles,permissions,permission_role,settings 

While registering shop, shop activation mail goes to admin.
Mail url redirect admin to voyager admin(shops) panel
(Add BREAD for "shops" in voyager admin panel(same as "order") with necessary modification and create ralation with user.)

Mail the shop owner once the shop is activated( event is traced with ShopObserver)

To give access to the Owner about shop in admin panel(using custom voyager controller):
    create a new custom controller VoyagerShopController(within Admin folder) and extends 'VoyagerBaseController'
    From VoyagerBaseController, copy the 'index' method and paste to VoyagerShopController
    In Voyager Admin, edit the shops(tools->bread->shops) and insert the controller name(App\Http\Controllers\Admin\VoyagerShopController),save it.
    (line no 74-77 added in VoyagerShopController,which shows only logged in users shop details)

Policy created:
    php artisan make:policy ShopPolicy --model=Shop
policy prevents unauthorized user to edit or view the shop information of other users.

To add policy, go to Voyager Admin, edit the shops(tools->bread->shops) and insert the policy name
(App\Policies\ShopPolicy),save it.
