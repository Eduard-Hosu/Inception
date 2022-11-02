# Inception
This project aims to broaden your knowledge of system administration by using Docker. You will virtualize several Docker images, creating them in your new personal virtual machine. 

## Skills
* Network & system administration
* Rigor

## Development
```bash
# you need docker and docker-compose installed
# redifine docker volumes in docker-compose.yml
# remake dump.sql inside the continer with your data and copy the file to /srcs/requirements/mariadb/tools/

# Start containers with
make start

# Stop containers with
make stop

# Remove images
make remove_images

# Remove volumes(need root privileges)
make remove_db
make remove_db
```
