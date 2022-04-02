# tutors2022

## NicoCalendar

- HTML ver.
- PHP ver.
  - runnable on docker (php-apache)

```bash
# build
docker image build -t php-8.1-apache-sample .

# run
docker run -it --rm -v $(pwd):/var/www/html -p 8080:80 php-8.1-apache-sample bash
```
