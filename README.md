## Storify API

A product of creating Story. This is the backend app for storify.

## User guide

This Storify Application has two seperate app one for backend (storifyapi) another for frontend (da-storify). TO get app working you need to deploy both backend app and frontend app. You can deploy backend app as it is. Off course you need to configure .env file, like creating database on mysql and add it in env file, mail server configuration. For Frontend app you need build the development code. "yarn build" is the command. Read through this doc to learn more.

## Install The app

- Clone this repo: https://github.com/groverj324/storify-api-laravel.git
- Run Composer install
- Create an .env file by copying from .env.example file
- run php php artisan key:generate
- Create a mysql database and update .env file with proper database name, user cred and pass.
- Update env file with mail server info
- Create account in deepgram and get a API token. Place that token in env file in the variable DG_TOKEN
- Run php artisan migrate
- your app should be running

## Author

Jason G

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
