guifi-api
=========

A Symfony project created on February 12, 2017, 2:46 pm as a playground to develop an API REST for the guifi.net project.

The [entities](/src/AppBundle/Entity/) have been generated automatically from the [development database of guifi](http://www.guifi.net/guifi66_devel.sql.gz) using the following commad of the [Doctrine tools](http://docs.doctrine-project.org/en/latest/reference/tools.html#reverse-engineering):

```./console orm:convert:mapping --from-database annotation <dest-path>```


Also you can found a stub of the REST API for the Zone entity. Below you can find a sample:

```json
GET /zones

[
  {
    "id": 1,
    "title": "Coya",
    "body": "",
    "master": null
  },
  {
    "id": 2,
    "title": "Fumara - Porto Real",
    "body": "",
    "master": {
      "id": 1,
      "title": "Coya",
      "body": "",
      "master": null
    }
  },
  {
    "id": 3,
    "title": "Visconde de Maua",
    "body": "VisconMaua",
    "master": null
  },
  {
    "id": 4,
    "title": "Subirats",
    "body": "Sbrts",
    "master": null
  },
  {
    "id": 5,
    "title": "Sant Andreu de Llavaneres",
    "body": "Llav",
    "master": null
  },
  {
    "id": 6,
    "title": "Capellades",
    "body": "http://digicape.capellades.net",
    "master": null
  },
  {
    "id": 7,
    "title": "Igualada",
    "body": "Igualada",
    "master": null
  },
  {
    "id": 8,
    "title": "Ribagorza",
    "body": "http://ribaguifi.wordpress.com",
    "master": null
  }
]
```
