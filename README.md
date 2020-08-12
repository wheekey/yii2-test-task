### Развертывание проекта 

```
./docker/ctrl start
./docker/ctrl exec "composer install"
./docker/ctrl exec "php ./yii migrate"
```

### Обновление данных в таблице currency
```
docker/ctrl exec "./yii currency"
```

### Реализованы REST API методы:
GET http://localhost:88/currencies — должен возвращать список курсов валют с возможность пагинации
GET http://localhost:88/currency/{id} — должен возвращать курс валюты для переданного id


