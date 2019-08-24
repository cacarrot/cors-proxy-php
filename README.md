<h1 align="center">
  CORS Proxy written in PHP
</h1>

## 🚀 Usage

### Run locally

```
# on Development server
php -S localhost:8080 -t public
```

```
# on Docker
docker-compose up web
```

-> Access URL Example：

- http://localhost:8080/proxy/cors.php?type=xml&url=https://developers.google.com/web/updates/rss.xml

### Deploy to Heroku

```
git push heroku master
```

## 🎓 Reference

- https://devcenter.heroku.com/articles/deploying-php
- https://hub.docker.com/r/heroku/php
