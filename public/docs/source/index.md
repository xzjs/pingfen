---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

# Info

Welcome to the generated API reference.
[Get Postman Collection](public/docs/collection.json)

# Available routes
#general
## 获取评分情况

> Example request:

```bash
curl "http://localhost/exam/get_message/car_id/{car_id}/time/{time}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/get_message/car_id/{car_id}/time/{time}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
[]
```

### HTTP Request
`GET exam/get_message/car_id/{car_id}/time/{time}`

`HEAD exam/get_message/car_id/{car_id}/time/{time}`


## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/car" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET car`

`HEAD car`


## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/car/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car/create",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET car/create`

`HEAD car/create`


## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/car" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST car`


## Display the specified resource.

> Example request:

```bash
curl "http://localhost/car/{car}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car/{car}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET car/{car}`

`HEAD car/{car}`


## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/car/{car}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car/{car}/edit",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET car/{car}/edit`

`HEAD car/{car}/edit`


## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/car/{car}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car/{car}",
    "method": "PUT",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`PUT car/{car}`

`PATCH car/{car}`


## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/car/{car}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/car/{car}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE car/{car}`


## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/mission" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET mission`

`HEAD mission`


## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/mission/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission/create",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET mission/create`

`HEAD mission/create`


## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/mission" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST mission`


## Display the specified resource.

> Example request:

```bash
curl "http://localhost/mission/{mission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission/{mission}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET mission/{mission}`

`HEAD mission/{mission}`


## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/mission/{mission}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission/{mission}/edit",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET mission/{mission}/edit`

`HEAD mission/{mission}/edit`


## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/mission/{mission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission/{mission}",
    "method": "PUT",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`PUT mission/{mission}`

`PATCH mission/{mission}`


## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/mission/{mission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/mission/{mission}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE mission/{mission}`


## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/exam" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET exam`

`HEAD exam`


## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/exam/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/create",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET exam/create`

`HEAD exam/create`


## 存储评分情况

> Example request:

```bash
curl "http://localhost/exam" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST exam`


## Display the specified resource.

> Example request:

```bash
curl "http://localhost/exam/{exam}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/{exam}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET exam/{exam}`

`HEAD exam/{exam}`


## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/exam/{exam}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/{exam}/edit",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET exam/{exam}/edit`

`HEAD exam/{exam}/edit`


## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/exam/{exam}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/{exam}",
    "method": "PUT",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`PUT exam/{exam}`

`PATCH exam/{exam}`


## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/exam/{exam}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/exam/{exam}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE exam/{exam}`


## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/group" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET group`

`HEAD group`


## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/group/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group/create",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET group/create`

`HEAD group/create`


## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/group" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST group`


## Display the specified resource.

> Example request:

```bash
curl "http://localhost/group/{group}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group/{group}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET group/{group}`

`HEAD group/{group}`


## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/group/{group}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group/{group}/edit",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET group/{group}/edit`

`HEAD group/{group}/edit`


## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/group/{group}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group/{group}",
    "method": "PUT",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`PUT group/{group}`

`PATCH group/{group}`


## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/group/{group}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/group/{group}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE group/{group}`


