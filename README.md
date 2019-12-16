#Apex website build #

After docker is started up, you can access your site by going to the following URL: local.apexinnovations.com

The start of each of the following commands will be in FOLDER > SUBFOLDER | INSTRUCTION.


#Setup steps before running our main commands

ROOT | Copy the .env.example and rename it to just .env (Powershell - copy .env.example .env)
	- In .env, change APP_URL to APP_URL=https://local.apexinnovations.com

laradock | Copy env-example to just .env (Powershell - copy env-example .env)

laradock > nginx > sites | Change laravel.conf.example to be laravel.conf
	- Remove the 4 #'s under "For https" so make those lines not commented.
	- Set those 4 lines to the following :  listen 443 ssl;
											listen [::]:443 ssl ipv6only=on;
											ssl_certificate /etc/nginx/ssl/apexinnovations.crt;
											ssl_certificate_key /etc/nginx/ssl/apexinnovations.key;

laradock > nginx > ssl | Get the crt and key ssl files from the developers. Theses files are not to be exposed to the outside world or repo.


#Environment setup

We need to setup our vendor environment and our node modules:
 - From the root folder
	1 - composer install
	2 - php artisan key:generate
	3 - npm install

	
#Docker setup

laradock | To start your docker environment, run the following from your command: 
	- docker-compose up php-fpm nginx

To turn off your docker env, run:
	- docker-compose down
	
To remove your containers:
	- docker system prune
	
	
