# Project Description
This project, is to be a copy of the work from the learn laravel 8 from scratch series, I intend to use this as a reference for future work. 

Video reference https://laracasts.com/series/laravel-8-from-scratch/

# Setup 
To get this project set up you will need the following:

- PHP installed globally on your machine
- Composer installed globally on your machine
- Oracle Virtual Machine

You can follow the setup for a homestead box here https://laravel.com/docs/8.x/homestead#per-project-installation 

Install the package:

`composer require laravel/homestead --dev`

Use the make command:

```
// macOS / Linux...
php vendor/bin/homestead make

// Windows...
vendor\\bin\\homestead make
```

# To Run
To run this project run the command: `vagrant up`

Your vagrant box should now be running with access here:
`http://homestead.test`

# Once running
ssh into the server using `vagrant ssh`

Then CD to the code directory

Then run `php artisan migrate --seed`

# Side points
Laravel breeze is a really quick way to do authentication out of the box!

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
