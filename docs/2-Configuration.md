If you've ever installed an extension using Yii 2, you may/certainly have found yourself on the extension README file, looking for the chunk of configuration to copy/paste in your own `config/main.php` file.

This can often lead to:

 * a huge configuration file (which you may have decided to split into smaller files)
 * non-trivials configurations update when a new version of the extension is realeased with new/changed configurations options.

In Yii 3, things are configuration-based. Every package bundle its own configuration, and will probably work out of the box.

You can override every and each configuration settings in your own config files.

Yii 3 uses the [hiqdev/composer-config-plugin](https://github.com/hiqdev/composer-config-plugin)
composer plugin, which takes care of scanning and merging all the configurations when you run
`composer dump-autoload` (also know as `composer du`).

You can read [Yii2 projects alternative organization](https://hiqdev.com/pages/articles/app-organization) 
for an in-depth explanation of the motivation behind `hiqdev/composer-config-plugin`.

---

When developing with Yii 3, especially the first days, you may find yourself not getting the results expected
only to later understand that you forgot to run `composer du`, and that your new configuration isn't taken 
into account.

This can be solved in your development environment by calling `\hiqdev\composer\config\Builder::rebuild();`
from your index.php file.