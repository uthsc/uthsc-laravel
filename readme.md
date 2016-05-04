## Laravel PHP Framework for UTHSC

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Getting Started

Before you get started you'll need to make sure you have the following installed:

- Git
- PHP
- Composer
- Vagrant
- npm*
- Bower*

*Optional (If you don't have these, you can ssh in to homestead


```bash
git clone git@github.com:uthsc/uthsc-laravel.git  
cd utlaravel
```

Install PHP dependencies with composer
```bash
composer install
```

### Homestead (vagrant)  
[Homestead](https://laravel.com/docs/homestead) is a vagrant box built specifically for Laravel to ensure everyone working on the project is working in the same development environment.  

You'll need to add the domain and host in `Homestead.yaml` to your hosts file before you can access your app in a browser:
```
#example
92.168.10.10   laravel.uthsc.edu
```

Homestead should have been installed by composer; assuming you have vagrant installed on your machine, you can run vagrant up
```bash
vagrant up
```

You can ssh in to Homestead by running homestead ssh. You'll need to ssh in to run database migrations in tests. This is also useful for dealing with frontend dependecies if you don't have npm and bower installed on your local machine
```
vagrant ssh
```

Install dependencies with npm and bower
```bash
npm update && bower update
```

run gulp build to build frontend assets
```bash
gulp build
```

run gulp to watch assets for changes
```bash
gulp watch
```

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)