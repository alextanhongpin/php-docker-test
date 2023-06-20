image := php:8.2.7-cli-alpine


up:
	@docker-compose up -d


down:
	@docker-compose down


php:
	@docker-compose exec php bash


php-cli:
	docker run --rm -it -v $(PWD)/:/app/ $(IMAGE) php ./app/index.php
