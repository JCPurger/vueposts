Hi! I'm João Carlos and this is my dev-test for benfeitoria.

Make with Laravel and Vuejs.

# Steps to install and run

 1. Run docker: `docker-compose up -d mysql nginx` ( ***if you don't use Docker skip to step 3*** ) 
 2. Enter on workspace: `docker-compose exec workspace bash`
 3.  Run this commands on workspace:  
      1. `composer install`
      2. `npm install`
      3. `npm run dev`
 4. Create your schema database.
 5. Copy `.env.example: cp .env .env.example`
 6. Config your database credentials on .env
 7. Generate your database: `php artisan migrate --seed` ( this command create tables and fake registers )
 8. *Edit your hosts files ( on host machine ) if you need a custom url*