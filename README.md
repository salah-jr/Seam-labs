# Seam labs Assessment...
<hr>
<br>

##Routes

```
/* Part One */

POST    /api/part-one/problem-one     --->  Request params >> "arr_values": []

GET     /api/part-one/problem-two     --->  Request params >> "start": int, "end": int

POST    /api/part-one/problem-three   --->  Request params >> "arr_values": []

POST    /api/part-one/problem-four    --->  Request params >> "input_string": string


/* Part Two */

POST    /api/part-two/orders/create
```

<br>

### Run migration with seeder to add fake 6 items to the menu

```
php artisan migrate --seed
```

<br>

### Available types
`dine-in,  takeaway,  delivery`

<br>

###Request examples..

```json
{
    "type": "dine-in",
    "waiter_name": "Sarah",
    "table_number": 15,
    "service_charge": 20,
    "items": [
        {
            "id": 1,
            "qty": 2
        },
        {
            "id": 2,
            "qty": 2
        }
    ]
	
}
```

```json
{
    "type": "delivery",
    "fees": 10,
    "customer_name": "Ziad",
    "customer_phone": 1569,
    "items": [
        {
            "id": 3,
            "qty": 2
        },
        {
            "id": 6,
            "qty": 1
        }
    ]
}
```

<br>

### The result for the first request.

```json
{
    "type": "dine-in",
    "table_number": 15,
    "waiter_name": "Sarah",
    "service_charge": 20,
    "id": 5,
    "order_items": [
        {
            "id": 7,
            "order_id": 5,
            "item_id": 1,
            "price": 50,
            "qty": 2,
            "total": 100,
            "item": {
                "id": 1,
                "name": "Pizza",
                "price": 50
            }
        },
        {
            "id": 8,
            "order_id": 5,
            "item_id": 2,
            "price": 40,
            "qty": 2,
            "total": 80,
            "item": {
                "id": 2,
                "name": "Pasta",
                "price": 40
            }
        }
    ]
}
```
