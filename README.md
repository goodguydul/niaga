# NIAGAHOSTER FULLSTACK TESTCODE

### LANDING PAGE
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

## BOXBILLING & LANDING PAGE DOCKER

- For deploying only BoxBilling, rename `docker-compose-boxbilling-only.yml` to `docker-compose.yml`.

- For deploying both of BoxBilling and Landing Page, rename `docker-compose-boxbilling-landingpage.yml` to `docker-compose.yml`. 

- The url is `http://localhost:8004` for BoxBilling, and `http://localhost:8004/landingpage` for Landing Page.

---

- Or if you want to make BoxBilling and Landing Page deployed on separated service, you can use `docker-compose-boxbilling-landing-page-separated-service.yml` and rename to `dokcer-compose.yml`. So the url is `http://localhost:8004` for BoxBilling, and `http://localhost:8005/` for Landing Page.

- For deployment, you can use this command on your console.:

      docker-compose down -v && docker-compose up --build

- Database seeder is included in docker-compose on service `db`, so it will automatically creating database when docker deployed. Database dump available in folder `mysql-dump/schema.sql`.


## CREDENTIALS

        [mysql]
            MYSQL_ROOT_PASSWORD     = passboxbilling
            MYSQL_DATABASE          = boxbilling2
            MYSQL_USER              = boxbilling
            MYSQL_PASSWORD          = passboxbilling
            
        [phpmyadmin]
            MYSQL_USERNAME=root
            MYSQL_ROOT_PASSWORD=passboxbilling
        
        [boxbilling]
            DB_HOST=db
            DB_NAME=boxbilling2
            DB_USER=root
            DB_PASS=passboxbilling
            
        [BoxBilling Login]
            username/email  = admin@admin.com
            pass            = admin123
        
     
