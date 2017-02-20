guifi-api
=========

A Symfony project created on February 12, 2017, 2:46 pm as a playground to develop an API REST for the guifi.net project.

Example of REST API response:

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
