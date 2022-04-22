# Statista Assignment

- [Project Setup](#project-setup)
- [Unit Tests](#unit-tests)

## Project Setup

The recommended way to set up a development environment for the application is to use [Laravel Homestead](https://laravel.com/docs/8.x/homestead). Homestead provides a simple way to set up a development environment without requiring that PHP or any other server software is installed on your local machine.

This document assumes:
* You have a `~/Code` directory on your local machine.
* The application lives at `~/Code/statista`.
* You have an ssh key pair (probably set up for github!)
* You have Homestead installed & configured

The document also assumes you will be accessing the development environment at http://homestead.test with IP 192.168.10.10 configured in Homestead.yaml

#### Versions

Project is using:  

* Php 7.4
* Laravel 8

#### Getting the Code

* `mkdir ~/Code`
* `cd ~/Code`
* `git clone git@github.com:SufyanChaudhry/statista.git`

### Homestead Usage Instructions

To start Homestead, run the following from the local environment:

```
# Change to Homestead directory
cd ~/Homestead

# Launch Vagrant box
vagrant up
```

To shut down Homestead, run the following from the local environment:

```
# Change to Homestead directory
cd ~/Homestead

# Suspend Vagrant machine
vagrant suspend
```

Any time the Homestead configuration file (`~/.homestead/Homestead.yaml`) is updated the virtual machine will need to be reloaded.

```
# Change to Homestead directory
cd ~/Homestead

# Update configuration
vagrant reload --provision
```

This will create the virtual machine with the Homestead configuration.

Next, configure the application's environmental variables. You can copy the application's `.env.example` file to `.env` (`~/Code/statista/.env`)

Next, install the application dependencies and run the database migrations and seeders. This should be done from within the virtual machine.

```
# Change to Homestead directory
cd ~/Homestead

# Connect to Vagrant box
vagrant ssh

# Change to project directory
cd Code/statista

# Install Composer dependencies
composer install
```  


## Unit Tests

```
# Change to project directory
cd Code/statista

# Run command in cli
vendor/bin/phpunit
``` 