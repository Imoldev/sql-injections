up:
	docker compose up --build

down:
	docker compose down --remove-orphans

cli:
	docker compose run --rm php-fpm  bash

phpstan:
	docker compose run --rm php-fpm  vendor/bin/phpstan analyse -c phpstan.neon

psalm:
	docker compose run --rm php-fpm  vendor/bin/psalm

psalm-secure:
	docker compose run --rm php-fpm  vendor/bin/psalm  --config=./psalm.xml --taint-analysis

code-sniffer:
	docker compose run --rm php-fpm ./vendor/bin/phpcs src