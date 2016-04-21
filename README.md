# api-easy-demo

## Installation
    composer install api-easy-demo
    
## Requirements
* HTTP Server (Example: Nginx)
* PHP5.5+
* Composer
    
## Autoload
    composer dump-autoload --optimize

## Examples

### HTTP GET (Get user)
curl -i -X GET http://your-api-domain/demo/user/123

    HTTP/1.1 200 OK
    Server: nginx/1.2.9
    Date: Thu, 21 Apr 2016 02:20:48 GMT
    Content-Type: application/json
    Transfer-Encoding: chunked
    Connection: close
    
    {"id":"123","age":24,"weight":80,"height":180}

### HTTP POST (Create user)
curl -i -X POST -d "name=jim&age=15" http://your-api-domain/demo/user

    HTTP/1.1 200 OK
    Server: nginx/1.2.9
    Date: Thu, 21 Apr 2016 02:20:32 GMT
    Content-Type: application/json
    Transfer-Encoding: chunked
    Connection: close
    
    {"id":"user id, example: 1234"}

### HTTP PUT (Update user)
curl -i -X PUT -d "name=jim&age=15" http://your-api-domain/demo/user/1234

    HTTP/1.1 200 OK
    Server: nginx/1.2.9
    Date: Thu, 21 Apr 2016 02:20:15 GMT
    Content-Type: application/json
    Transfer-Encoding: chunked
    Connection: close
    
    {"id":"1234","updated":1}

### HTTP DELETE (Delete user)
curl -i -X DELETE http://your-api-domain/demo/user/1234

    HTTP/1.1 200 OK
    Server: nginx/1.2.9
    Date: Thu, 21 Apr 2016 02:19:40 GMT
    Content-Type: application/json
    Transfer-Encoding: chunked
    Connection: close
    
    {"id":"1234","deleted":1}

### HTTP OPTIONS
curl -i -X OPTIONS http://your-api-domain/demo

    HTTP/1.1 200 OK
    Server: nginx/1.2.9
    Date: Thu, 21 Apr 2016 02:19:25 GMT
    Content-Type: text/html
    Transfer-Encoding: chunked
    Connection: close
    Allow: GET,POST,PUT,DELETE,OPTIONS
