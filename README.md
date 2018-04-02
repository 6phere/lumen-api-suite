# Sixphere Lumen API Suite

![Image Sixphere](http://sixphere.com/wp-content/uploads/2018/03/sixphere-lumen-suite.png)

Plug and Play Lumen API Archetype integrated with Passport, OAuth and Swagger.

![Image Sixphere](http://sixphere.com/wp-content/uploads/2018/03/sixphere-lumen-api.png)

## Features

- Laravel Passport integration for API authentication
- Swagger 3.0 integration for API tooling

## Dependencies

- [Swagger Lume](https://github.com/DarkaOnLine/SwaggerLume "Swagger Lume")
- [Lumen Passport](https://github.com/dusterio/lumen-passport "Lumen Passport")

## Installation

Install dependencies

```
composer install 
```

Create .env file and configure database connection

```
cp .env.example .env
```

Generate and set a 32 bits Key for the APP_KEY variable in .env file

```
APP_KEY=<32 bits API Key>
```

Execute a database migration to create database resources

```
php artisan migrate
```

Create Passport resources in database

```
php artisan passport:install
```

Execute database seeds

```
php artisan db:seed
```

Generate Swagger sample documentation

```
php artisan swagger-lume:generate
```

## API Suite UI

- Access to welcome page: http://iporservername:port
- Access to api documentation: http://iporservername:port/docs

## ELK STACK INTEGRATION

Integrate the Lumen Archetype with ELK Stack doesn't require any further configuration, only set the Kibana URL to use the welcome UI link.

### ELK Environment

For test purposes, an existing and preconfigured docker image has been used

- [ELK Docker](https://hub.docker.com/r/sebp/elk/ "ELK Docker")
- [Full documentation here](http://elk-docker.readthedocs.io "ELK Docker")

### Nginx and Lumen logs integration example

![Image Kibana](http://sixphere.com/wp-content/uploads/2018/03/kibana-sample.png)

Install Filebeat on server which contains Nginx and Lumen. Simply follow the instructions given by the Kibana help page

http://kibana_url/app/kibana#/home/tutorial/nginxLogs?_g=()

For a simple integration between Lumen and Logstash, edit the Filebeat config file filebeat.yml and activate a prospector of type "log" with the configuration below:

```
type: log  
enabled: true  
paths:  
  - /home/vagrant/lumenArquetype/storage/logs/lumen.log  
  multiline.pattern: ^\[[0-9]{4}  
  multiline.negate: true  
  multiline.match: "after"  
  multiline.max_lines: 500  
  multiline.timeout: 5s  
```
# Licence

Licenced under GNU GENERAL PUBLIC LICENSE [...]

# Author

[Sixphere](http://www.sixphere.com "Sixphere") is not only a group of experienced professionals, that keep a huge amount of knowledge, take care about what and how they do their job. They solve their partner problems in an agile way and are aware of their customer needs through emotional intelligence connections.

Sixphere is a simpler way of understanding IT services, based on a strong and well balanced mix-ture of principles.
Searching for strong professional relationships, supplying strong technical skills and offering a deep knowledge; in a collaborative, adaptative and agile way to reach its goal: helping to carry out its customer’s objectives, or better said its partners. Would you like us to be partners? Let us sail together on your trip.

[Sixphere Technologies](http://www.sixphere.com "Sixphere Technologies") 2018

## Contact

Want to comment or share something, contact us codelovers@sixphere.com


