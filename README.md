This is an example app for [DEV article](https://dev.to/hakobyansen/routing-implementation-using-php-attributes-n1l).


Create `.env` file in the root of the project with following single variable:

```
JSON_PLACEHOLDER_BASE_URL=https://jsonplaceholder.typicode.com
```

Build, run and install composer dependencies:

```shell
docker-compose up --build
```

Install composer dependencies 
```shell
docker-compose run app composer install
```

Once you are up and running, you can retrieve existing user by ID or create new user using `curl` or another HTTP client.

```shell
# retrieve user by ID
curl -X GET --location "http://localhost:8080/users?id=10" 
   -H "Content-Type: application/json" 
   -H "Accept: application/json"

# create new user
curl -X POST --location "http://localhost:8080/users" \
    -H "Content-Type: application/json" \
    -d "{
          \"name\": \"John Smith\"
        }"
```

