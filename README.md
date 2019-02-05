Base app smarty SkeekS CMS (Yii2)
=========================

[![skeeks!](https://en.cms.skeeks.com/uploads/all/35/fd/33/35fd33aa306823dbaf53a0142d43b3fa.png)](https://cms.skeeks.com)

[![Latest Stable Version](https://img.shields.io/packagist/v/skeeks/app-basic-smarty.svg)](https://packagist.org/skeeks/app-basic-smarty)
[![Total Downloads](https://img.shields.io/packagist/dt/skeeks/app-basic-smarty.svg)](https://packagist.org/packages/skeeks/app-basic-smarty)

Links
-------
* [Web site (SkeekS CMS)](https://cms.skeeks.com)
* [Docs (SkeekS CMS)](https://cms.skeeks.com/docs)
* [Author](https://skeeks.com)
* [ChangeLog](https://github.com/skeeks-cms/cms/blob/master/CHANGELOG.md)

Installation
------------

```bash
# Download latest version of composer
curl -sS https://getcomposer.org/installer | COMPOSER_HOME=.composer php

# Installing the base project SkeekS CMS
COMPOSER_HOME=.composer php composer.phar create-project --prefer-dist --stability=dev skeeks/app-basic-smarty demo.ru
# Going into the project folder
cd demo.ru

# Download latest version of composer
curl -sS https://getcomposer.org/installer | COMPOSER_HOME=.composer php

#Edit the file to access the database, it is located at common/config/db.php

#Update configs
COMPOSER_HOME=.composer php composer.phar self-update && COMPOSER_HOME=.composer php composer.phar du

#Installation of ready-dump
php yii migrate -t=migration_install -p=backup/migrations
```



Video
------------

[![Shop on SkeekS CMS (Yii2)](https://www.fresher.ru/manager_content/12-2018/youtube-podvel-tradicionnye-itogi-goda/1.jpg)](https://www.youtube.com/watch?v=S7PFZiSzRuc)


___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)

