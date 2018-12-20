Yii 3 is the second major rewrite of the Yii framework. 

> Originally started in the 2.1 branch, it was later decided to switch to the 3.X series because of all the backward compatibility breakage.


This rewrite addresses a lot of issues Yii 2 suffered from, like the framework being too coupled with jQuery, bower, bootstrap. <small>[TODO: add more grieffs about Yii2]</small>

Starting with 3.0, [Yii will follow the Semantic Versioning](https://www.yiiframework.com/news/177/yii-adopts-semver-since-version-3-0-0).

## Changes Overview

Here are the main changes in Yii 3. You can check the complete [CHANGELOG](https://github.com/yiisoft/yii-core/blob/master/CHANGELOG.md#300-under-development) for an exhaustive list.


### **Source Code Splitting**

The framework source code has been [split into several packages](3-Packages.md), and at its core level, Yii no longer makes assumptions about your development stack, or the features you will be using.

This enables you to cherry-pick the packages you need to compose your application.

This reorganization is also a great news for maintenance, as these packages will be released separately, thus allowing more frequent updates.

### **Autoloading**

The custom PHP class autoloader has been removed in favor of Composer's PSR-4 implementation. 
This means that in order for Yii to see your classes, you will have to explicitly register your namespace in `composer.json`. We will see an example later.

### **PSR Compatibility**

Yii 3 takes some positive steps following the [PHP-FIG](https://www.php-fig.org/) recommendations, by implementing the following PSRs:

 * Logging is now compliant with PSR-3
 * Caching is now compliant with PSR-16
 * Dependency Injection is now compliant with PSR-11

### **Application Configuration**

Yii 3 is configuration based. You can check the [Configuration](2-Configuration.md)
section to see what that means.

### **Dependency Injection**

<small>[TODO]</small>
