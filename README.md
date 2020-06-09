# Setup
```bash
cp docker-compose.dev.yml docker-compose.yml
docker-compose up -d
docker-compose ps
docker-compose exec workspace composer install
docker-compose exec workspace php artisan key:generate
cp phpunit.example.xml phpunit.xml
docker-compose exec workspace ./vendor/bin/phpunit
docker-compose exec workspace ./vendor/bin/phpunit --coverage-text
docker-compose exec workspace ./vendor/bin/phpunit --coverage-html=tests/coverage
```
