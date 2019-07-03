rm: 
	make stop
	echo y | docker-compose rm

stop:
	docker-compose stop

up:
	docker-compose up -d
	make ps

rmi:
	make rm
	docker rmi docker-physijs-tutorial/latest

build:
	docker build -t docker-physijs-tutorial/latest .

rebuild:
	make rmi
	make build

reup:
	make stop
	make up

ps:
	docker-compose ps

logs:
	docker-compose logs -f

curl:
	curl -v http://localhost

mulligan:
	make rmi
	make rebuild
	make up
