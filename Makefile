.PHONY: start-devenv stop-devenv clear-devenv build-devenv
DEFAULT_TARGET: start-devenv

VERSION_TAG ?= $(shell git rev-parse --short HEAD)

APP_NAME = apweb
DEVENV_DOCKER_COMPOSE = docker-compose -p $(APP_NAME) -f $(shell pwd)/docker-compose.yml
PROD_DOCKER_COMPOSE = docker-compose -p $(APP_NAME) -f $(shell pwd)/docker-compose-prod.yml

DOCKER_IMAGE = ap_wp
VERSION_TAG = $(shell git rev-parse --short HEAD)
THEME_FOLDER = wp-content/themes/ap-theme

start-devenv:
	$(DEVENV_DOCKER_COMPOSE) up -d

stop-devenv:
	$(DEVENV_DOCKER_COMPOSE) kill

build-css:
	cd $(THEME_FOLDER) \
	npx tailwind build styles/main.css -c tailwind.js -o styles/style.css

clear-devenv:
	$(DEVENV_DOCKER_COMPOSE) down -v --remove-orphans

build-devenv:
	$(DEVENV_DOCKER_COMPOSE) build

build-docker-image:
	docker build . --tag ${DOCKER_IMAGE}:${VERSION_TAG}
	docker tag ${DOCKER_IMAGE}:${VERSION_TAG} ${DOCKER_IMAGE}:latest

mysql-devenv:
	docker exec -it $(MYSQL_OPTIONS)

start-prod:
	$(PROD_DOCKER_COMPOSE) up -d
	docker exec anweb_wordpress_1 chown -R www-data:www-data /var/www/html/wp-content

stop-prod:
	$(PROD_DOCKER_COMPOSE) kill

clear-prod:
	$(PROD_DOCKER_COMPOSE) down -v --remove-orphans

build-prod:
	$(PROD_DOCKER_COMPOSE) build

mysql-prod:
	docker exec -it $(MYSQL_OPTIONS)


