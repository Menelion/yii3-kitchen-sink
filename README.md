# Yii 3 kitchen sink

This is a Yii 3 project, created to test, document and showcase the new features
of the framework. You can see it running live on [https://yii3.idk.tn/](https://yii3.idk.tn/).

> This originally started as a [Wiki post](https://www.yiiframework.com/wiki/2547/draft-understanding-yii-3)
> but the post was getting too long, and documenting Yii 3 using Yii 3 was too
> fun to not be done.

You may want to check the [commits](https://github.com/machour/yii3-kitchen-sink/commits/master) of this repository to see how I got there. 

You can also checkout this repository first commit:

    git checkout 818c6bcc23f08376f1ec35a013c03fb77801c89e

and then progressively update to later commits:

    git checkout <commit-hash>


REQUIREMENTS
------------

The minimum requirement by this project template is that your Web server supports PHP 7.1.

INSTALLATION
------------

### Manually

1. Clone this project: `git clone git@github.com:machour/yii3-kitchen-sink.git`
2. Enter the project folder: `cd yii3-kitchen-sink`
3. Create a `.env` file: `cp .env.dist .env`
4. Install dependencies: `composer install`
5. Run the project: `./vendor/bin/yii serve`

You can now access it via `http://localhost:8080/`

### Using docker

Perform steps 1 to 3 of the manual installation, and then:

4. Get a bash on the docker image: `docker-compose run --rm php bash``
5. Install dependencies: `composer install`
6. From your docker host, run: `docker-compose up -d`

You can now access the application via: `http://localhost:30080`

### Disclaimer

I'm not affiliated with `@yiisoft`, and I'm still teaching myself Yii 3, so there might be
some errors. 

Don't hesitate to point them out be [opening a issue](https://github.com/machour/yii3-kitchen-sink/issues/new).
You can also ask your questions there, I'll try my best to help out.