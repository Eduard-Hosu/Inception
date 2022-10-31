start:
	docker compose -f srcs/docker-compose.yml up --build -d
remove_images:
	docker image rm -f $$(docker image ls -aq)
remove_db:
	sudo rm -rf /home/ehosu/data/db/*
remove_wp:
	sudo rm -rf /home/ehosu/data/wordpress/*
stop:
	docker compose -f srcs/docker-compose.yml down