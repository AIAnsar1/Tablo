<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About Laravel Tablo Backend Service

![Created By](https://img.shields.io/badge/Created%20By-Al%20Ayubi-brightgreen)
![Powered By](https://img.shields.io/badge/Powered%20By-Al%20Ansar-blue)

Laravel  | Laravel Monolith API 
:---------|:----------------------
 11.x     | 2.x

 ## About 

<h3>Tablo is an online service for posting advertisements about goods, real estate, vacancies and resumes on the labor market, as well as services, ranking first in the world among advertisement sites.</h3>


 ## Usage

<h3>Clone Repository</h3>

```bash
    git clone https://github.com/AIAnsar1/Tablo.git
```



<h3>Update Composer Requires</h3>

```bash
    composer update
```


<h3>Create ENV File</h3>

<p>For Mac OS & UNIX & Linux</p>

```bash
    cp .env.example .env
```

<p>Windows</p>

```bash
    copy .env.example .env
```

<h3>Generate New Secret App Key</h3>

```bash
    php artisan key:generate
```

<h3>Optimize</h3>

```bash
    php artisan route:clear && php artisan config:clear && php artisan cache:clear && php artisan optimize:clear
```



<h3>Dumping All Files Via Composer</h3>

```bash
    composer dump-autoload
```


<h3>configurate nginx server or run docker</h3>

```bash
    ./vendor/bin/sail up
```
