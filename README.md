<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
    <h1 align="center">Yii 3 Kitchen Sink</h1>
    <br>
</p>

This is a Yii 3 project, created to test and show case the new features of
the new framework version.

This project was built from scratch using [yiisoft/yii-project-template](https://github.com/yiisoft/yii-project-template),
but instead of later installing one of the three proposed starters, I decided to do things manually and progressively.

You may want to check the [commits](https://github.com/machour/yii3-kitchen-sink/commits/master) of this repository to see how I got there.


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.1.

INSTALLATION
------------

### Manually

* Clone this project: `git clone git@github.com:machour/yii3-kitchen-sink.git`
* Enter the project folder: `cd yii3-kitchen-sink`
* Create a `.env` file: `cp .env.dist .env`
* Install dependencies: `composer install`
* Run the project: `./vendor/bin/yii serve`

You can now access it via `http://localhost:8080/`

### Using docker

Clone the repository and create the environment configuration file

    cp .env.dist .env

To run the installation create a bash from the PHP image

    docker-compose run --rm php bash
    
and run the `composer` commands above.
   
Start application stack

    docker-compose up -d
    
Point your browser to: `http://docker.host:30080`

