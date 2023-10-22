# My Blog FuelPHP
> A simple dockerized blog project made with FuelPHP 1.8.2  
> Just wanted to try and learn how FuelPHP works

## Directory Structure
- Below is an overview of how the project directory structure looks like.
- Add / Remove / Rename according to the needs or liking or whatever make sense.
```
my-project/                        // Main Project Directory
├── docker/                        // Docker Related
│   ├── containers/                // Service Containers
│   │   ├── nginx/
│   │   │   ├── conf.d/
│   │   │   │   └── default.conf   // nginx config
│   │   │   └── Dockerfile
│   │   ├── php/
│   │   │   ├── config/            // PHP Configurations
│   │   │   │   └── php-local.ini  // local development configuration
│   │   │   │   └── php-test.ini   // test/staging configuration
│   │   │   │   └── php-prod.ini   // production specific configuration
│   │   │   └── Dockerfile
│   │   ├── mysql/
│   │   │   └── Dockerfile
│   │   └── composer/
│   │       └── Dockerfile
│   ├── enviroments/               // Environment variables
│   │   ├── config.env             // Main config file
│   │   ├── local.env              // Local development
│   │   ├── test.env
│   │   └── prod.env
│   ├── volumes/                   // Volumes Dir - Data persistence
│   │   ├── mysql/                 // Database
│   │   │   └── mysql_<version>/   // Specific database version
│   │   └── logs/                  // Logs
│   │       ├── nginx/
│   │       └── php/
│   └── docker-compose.yml         // Main Docker compose file
├── scripts/                       // This should contains all *.sh files 
│   ├── main-docker-compose.sh     // Main script that executes the base docker commands
│   ├── build.sh                   // Build the docker images 
│   ├── up.sh                      // Start the service
│   ├── down.sh                    // Tear down routine
│   ├── stop.sh                    // Stop running service
│   ├── run.sh                     // Run a specific container
│   ├── exec.sh                    // Run command inside a container
│   ├── composer.sh                // Run composer and its command
│   ├── prune.sh                   // Remove all images, run with care!
│   └── *.sh
├── src/                           // Project source code here...
│   └── public/                    // temporary directory just for initial set up
│       └── index.php              // default file just to make sure things work, shows phpinfo
├──────────────────────────────────────────────────────────────────────────────────────────────
│       Or have a separete the source directory code for frontend and backend,
│       instead of just src/ to hold all the code. The structure below could be use.
├──────────────────────────────────────────────────────────────────────────────────────────────
├── frontend(-src)/                // Front-end source code only
└── backend(-src)/                 // Back-end source code only
```

## Service containers
> <b>Note:</b>  
> Check `docker/environment/config.env` for configuration.  
> For environment specific configurations, check `local.env`, `test.env`, and `prod.env` files.

Building, Running, Stopping, Removing images and service containers
- Scripts have been prepared to make these process easy

```
// Building the images
> ./scripts/build.sh

// Starting the services/containers
> ./scripts/up.sh

// optionally add the -d (detach) flag to run in the background
> ./scripts/up.sh -d

// Or do a one-liner command for the build and start process
> ./scripts/up.sh -d --build

// Stopping the services/containers
> ./scripts/stop.sh

// Add the name to stop a specific service/container
> ./scripts/stop.sh <ContainerName>

// Bringing down the services
> ./scripts/down.sh

// Add the -v flag to remove the images
> ./scripts/down.sh -v
```

## Packages and Dependencies
```
// Composer installation and related commands
> ./scripts/composer.sh install
> ./scripts/composer.sh dump-autoload

// Node installation and related commands
> ./scripts/run.sh npm install
> ./scripts/run.sh npm run build
```

## Host file
Optionally, update the host file
```
# Local Dev
172.0.0.1 my-todo.local
```

## Accessing the site
Hit the browser at `localhost` or `my-todo.local`(if host file was updated).

> ### Note:
> - This is just a pet project
> - Development is only free time (some free time after work and weekends)
> - This project will definitely take time to progress and I might not even complete it.
> - A simple CRUD might be the extent of this project
>     
