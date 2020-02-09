# Introduction
Skystone (working title) is meant to be an online multiplayer role-playing game that combines aspects of classic forum RPGs and tabletop/pen & paper/videogame RPGs.

# How to run
## Requirements
Make sure that composer and symfony is installed.
On Ubuntu:

    sudo apt install composer php-symfony

## Installation
Skystone uses composer to manage its dependencies.
To run Skystone:

    composer update
    cd public/
    php -S localhost:8083
