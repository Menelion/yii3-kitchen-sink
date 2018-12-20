Here are the new packages introduced in Yii 3, which can be found in this [official list](https://github.com/yiisoft/docs/blob/master/000-packages.md#yii-framework).

Let's introduce them briefly:

### **The Framework**

* [yiisoft/yii-core](https://github.com/yiisoft/yii-core)

This is the new *kernel* of Yii. It defines the base framework and its core features like behaviors, i18n, mail, validation..

You will rarely want to directly install `yiisoft/yii-core`. Instead, you will install one or more of the following:

* [yiisoft/yii-console](https://github.com/yiisoft/yii-console)
* [yiisoft/yii-web](https://github.com/yiisoft/yii-web)
* [yiisoft/yii-rest](https://github.com/yiisoft/yii-rest)

This three packages, considered as Extensions, are responsible for implementing the basic functionnalities of each "channel" they refer to:

 * `yii-console` implements all that you need to build a console application (the base Controller for commands, the Command helper, ..)
 * `yii-web` implements all that you need to build a web application (Assets management, Sessions, Request handling ..)
 * `yii-rest` implements all that you need to build a REST interface (ActiveController, ..)


### **Librairies**

In Yii 3, libraries do **not** depend on Yii and are meant to be usable outside the framework.
Their package name is `yiisoft/something` without yii-prefix.

* [yiisoft/log](https://github.com/yiisoft/log) : The logging library 
* [yiisoft/di](https://github.com/yiisoft/di) : The dependency injection library 
* [yiisoft/cache](https://github.com/yiisoft/cache) : The caching library 
* [yiisoft/active-record](https://github.com/yiisoft/active-record) : The Active Record library 
* [yiisoft/rbac](https://github.com/yiisoft/log) : The role base access control library 
* [yiisoft/view](https://github.com/yiisoft/view) : The view rendering library
* [yiisoft/mutex](https://github.com/yiisoft/mutex) : The mutex lock implementation
* [yiisoft/db](https://github.com/yiisoft/db) : The database library 

##### Drivers for yiisoft/db

The various drivers for DB have also been separated into packages:

  * [yiisoft/db-mysql](https://github.com/yiisoft/db-mysql) MySQL support for Yii
  * [yiisoft/db-mssql](https://github.com/yiisoft/db-mssql) MSSQL support for Yii
  * [yiisoft/db-pgsql](https://github.com/yiisoft/db-pgsql) PostgreSQL support for Yii
  * [yiisoft/db-sqlite](https://github.com/yiisoft/db-sqlite) SQLite support for Yii
  * [yiisoft/db-oracle](https://github.com/yiisoft/db-oracle) Oracle Database support for 
  * [yiisoft/db-sphinx](https://github.com/yiisoft/db-sphinx) Sphinx support
  * [yiisoft/db-redis](https://github.com/yiisoft/db-redis) Redis support
  * [yiisoft/db-mongodb](https://github.com/yiisoft/db-mongodb) MongoDB support
  * [yiisoft/db-elasticsearch](https://github.com/yiisoft/db-elasticsearch) Elastic 

### **Extensions**

Extensions depends (at least) on yii-core. Aside from the 3 extensions already encountered above (yii-console, yii-web, yii-api), these packages are available


##### Development

* [yiisoft/yii-debug](https://github.com/yiisoft/yii-debug) The debug panel
* [yiisoft/yii-gii](https://github.com/yiisoft/yii-gii) The code generator extension
* [yiisoft/yii-dev](https://github.com/yiisoft/yii-dev) Tools for framework contributors

##### View rendering engines

* [yiisoft/yii-twig](https://github.com/yiisoft/yii-twig) Twig Extension

##### Data rendering
* [yiisoft/yii-dataview](https://github.com/yiisoft/yii-dataview) : ListView, GridView, DetailView

##### JS & CSS Frameworks integration

* [yiisoft/yii-bootstrap3](https://github.com/yiisoft/yii-bootstrap3) : Bootstrap 3 assets & widgets
* [yiisoft/yii-bootstrap4](https://github.com/yiisoft/yii-bootstrap4) : Bootstrap 4 assets & widgets
* [yiisoft/yii-jquery](https://github.com/yiisoft/yii-jquery) jQuery, ActiveForm

##### Widgets
* [yiisoft/yii-captcha](https://github.com/yiisoft/yii-captcha) The CAPTCHA Extension
* [yiisoft/yii-masked-input](https://github.com/yiisoft/yii-masked-input) : The masked input widget (depends on jquery)


##### Misc
* [yiisoft/yii-swiftmailer](https://github.com/yiisoft/yii-swiftmailer) Swift Mailer Extension
* [yiisoft/yii-http-client](https://github.com/yiisoft/yii-http-client) HTTP client extension
* [yiisoft/yii-auth-client](https://github.com/yiisoft/yii-auth-client) External authentication extension

### Yii project template and application bases

* [yiisoft/yii-project-template](https://github.com/yiisoft/yii-project-template)

This is a **very** basic Yii project template, that you can use to start your development.

You will probably want to pick one or more of these three starters to install in your project next:

*  [yiisoft/yii-base-cli](https://github.com/yiisoft/yii-base-cli)
*  [yiisoft/yii-base-web](https://github.com/yiisoft/yii-base-web)
*  [yiisoft/yii-base-api](https://github.com/yiisoft/yii-base-api)
