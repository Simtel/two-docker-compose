Два разных проекта с разными docker-compose, но которые могут общаться между собой.


###Запуск

Для начала нужно создать общую сеть

```bash
docker network create dev-network
```

Запустить контейнеры из frontend

```bash
cd frontend
docker-compose up -d
```

Запустить контейнеры из backend

```bash
cd backend
docker-compose up -d
```

Открыть backend в браузере по адресу:

```bash
http://localhost:8081/index.php
```

Должен будет отобразиться  JSON ответ.


Открыть frontend в браузере по адресу:

```bash
http://localhost
```

Должен будет отобразиться  JSON ответ backend только в другом виде.