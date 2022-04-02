# tutors2022

## NicoCalendar

- HTML ver.
- PHP ver.
  - runnable on docker (php-apache)

### Docker

```bash
# build
docker image build -t my-php-apache ./docker

# run
docker run --privileged -it --rm -v $(pwd):/var/www/html -p 8080:80 --name test my-php-apache

# exec
docker exec test bash

# check apache2 running ( # apachectl start )
$ service apache2 status
```

### Docker Compose

```bash
docker compose up -d --build
docker compose exec web bash
```
