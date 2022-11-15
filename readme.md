# Documentacion 

### Crear base de datos


```sql
    Crear tabla:
    CREATE DATABASE ProyectoTokioSchool;

    Entrar en la base de datos:
    use ProyectoTokioSchool;


    Crear tabla ususarios:
    CREATE TABLE users (
        id  INT unsigned NOT NULL AUTO_INCREMENT,
        name VARCHAR(255),
        last_name VARCHAR(255),
        email VARCHAR(255) UNIQUE,
        password TEXT,
        PRIMARY KEY (id)
    )

```

### o subir archivo a phpmyadmin:
>
> Nos dirigimos a **IMPORTAR**
> 
> Damos click a **browser** y buscaremos el archivo **database.sql**
>
> A continuacion le daremos al boton de **GO**
![alt text](/Public/assets/images/readme/image-1.png)

### Cambiar parametros de la base de datos
> `/config/Settings.php`

```php

 define('DB_SETTINGS', array(
    'HOST'      => 'localhost:3306',
    'USER'      => 'root',
    'PASSWORD'  => 'root',
    'DATABASE'  => 'ProyectoTokioSchool'
  ));

```

### Inicializar proyecto en Local

`php -S localhost:9000 -t .`