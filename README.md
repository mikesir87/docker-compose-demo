# Docker Compose Demo

This repo contains a simple demo that was built for the Docker Blacksburg Meetup on October 12, 2016.

## Application Overview

The application is a simple PHP application that relies on a MySQL database.  The database contains a collection of users, with their respective emails, passwords (using a terrible plain-text version for demo), creation date, and an active flag.  The PHP app simply outputs a table with all user data.

## Running the Default Composition

The default `docker-compose.yml` file is using the `image` directive to specify a named image.  Obviously, in order for this to work, you need to build the images.

```
docker build -t my-mysql ./docker/mysql
docker build -t my-php ./docker/php
docker-compose up
```

Then, open your browser to http://localhost/ to see the application.  You should see a simple table containing all users in the database.

## Making it Better

Obviously, it's a pain to have to build the images first.  So, the `docker-compose-build.yml` file uses the `build` directive to build the images to be used in the composition.

```
docker-compose -f docker-compose-build.yml up
```
