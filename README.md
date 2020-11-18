# Niagahoster Fullstac Testcode

### Landing Page
For preview, please visit : http://landingpage.haliemzulvio.com/

You can change pricelist data on index.php

    $paket = [
                [
                    'name'          => 'Bayi',
                    'norm_price'    =>  19900,
                    'disc_price'    =>  14900,
                    'registered'    =>  938,
                ],
                [
                    'name'          => 'Pelajar',
                    'norm_price'    =>  46900,
                    'disc_price'    =>  23450,
                    'registered'    =>  4168,
                ],
                [
                    'name'          => 'Personal',
                    'norm_price'    =>  58900,
                    'disc_price'    =>  38900,
                    'registered'    =>  10017,
                ],
                [
                    'name'          => 'Bisnis',
                    'norm_price'    =>  109900,
                    'disc_price'    =>  65900,
                    'registered'    =>  3552,
                ]
            ];

## BoxBilling Docker

- For deploying only BoxBilling, rename `docker-compose-boxbilling-only.yml` to `docker-compose.yml`

- For deploying both of BoxBilling and Landing Page, rename `docker-compose-boxbilling-landingpage.yml` to `docker-compose.yml`

- For deployment, you can use this command on your console.:

      docker-compose down -v && docker-compose up --build

- The url is `http://localhost:8004` for BoxBilling, and `http://localhost:8004/landingpage` for Landing Page.
- Database seeder is included in docker-compose on service mysql, so it will automatically creating database when docker deployed.
- Database dump available in folder `mysql-dump/schema.sql`.

