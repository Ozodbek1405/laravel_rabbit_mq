Laravel RabbitMQ project example

1) git clone
2) composer install
3) copy .env.example .env
4) change .env file connect database
5) php artisan key:generate
6) php artisan serve
7) php artisan mq:consume
8) add .env file
   MQ_HOST="CLOUDAMQP_HOST"
   MQ_PORT="CLOUDAMQP_PORT"
   MQ_USER="CLOUDAMQP_USER"
   MQ_PASS="CLOUDAMQP_PASS"
   MQ_VHOST="CLOUDAMQP_VHOST"
