up:
	docker compose up --build

down:
	docker compose down --remove-orphans

cli:
	docker compose run --rm php-fpm  bash	