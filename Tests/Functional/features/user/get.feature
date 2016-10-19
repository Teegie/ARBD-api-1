# language: fr

@feature/get_users
Fonctionnalité: Get des users

@GET
Scénario: Get tous les users du monde
    Quand       je fais un GET sur /users
    Alors       le status HTTP devrait être 200
    Et          je devrais avoir un résultat d'API en JSON
    Et          le résultat devrait être identique au fichier "get_all_users.json"

@GET
Scénario: Get un user par son ID
    Quand       je fais un GET sur /users/1
    Alors       le status HTTP devrait être 200
    Et          je devrais avoir un résultat d'API en JSON
    Et          le résultat devrait être identique au JSON suivant :
    """
    {
        "id": 1,
        "lastname": "HEART",
        "firstname": "Kingston",
        "date_of_birth": {
            "date": "1994-02-15 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "Europe\/Paris"
        },
        "title": "Monsieur",
        "email": "heart_k@etna.io"
    }
    """

@GET
Scénario: Get les orders d'un user
    Quand       je fais un GET sur /users/1/orders
    Alors       le status HTTP devrait être 200
    Et          je devrais avoir un résultat d'API en JSON
    Et          le résultat devrait être identique au JSON suivant :
    """
    [
        {
            "id": 1,
            "date": {
                "date": "2016-10-18 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "Europe\/Paris"
            },
            "user": {
                "id": 1,
                "lastname": "HEART",
                "firstname": "Kingston",
                "date_of_birth": {
                    "date": "1994-02-15 00:00:00.000000",
                    "timezone_type": 3,
                    "timezone": "Europe\/Paris"
                },
                "title": "Monsieur",
                "email": "heart_k@etna.io"
            }
        },
        {
            "id": 2,
            "date": {
                "date": "2016-09-28 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "Europe\/Paris"
            },
            "user": {
                "id": 1,
                "lastname": "HEART",
                "firstname": "Kingston",
                "date_of_birth": {
                    "date": "1994-02-15 00:00:00.000000",
                    "timezone_type": 3,
                    "timezone": "Europe\/Paris"
                },
                "title": "Monsieur",
                "email": "heart_k@etna.io"
            }
        }
    ]
    """
