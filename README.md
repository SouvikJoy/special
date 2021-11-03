# Debugger Tech Web





## # Instructions for Development Environment (Homestead)

Vagrant setup instructions can be found [here](https://retail-confluence.apple.com/display/ART/Vagrant+Setup).


#### Project initialization

**Clone git repository into `~/Projects` directory**
```bash
cd ~/Projects
git clone git@gitlab.com:debugger-tech/debugger-tech-web.git -b dev debugger-tech
```
**Goto project's backend-api directory**
```bash
cd debugger-tech/backend-api
```

Create the ```.env``` file
```bash
cp .env.example .env 
```


**Goto project's client-ssr directory**
```bash
cd debugger-tech/client-ssr
```

Create the ```.env``` file
```bash
cp .env.example .env 
```

### Installation & Setup Homestead Environment

To know more about **Homestead** please visit:
https://laravel.com/docs/6.x/homestead#first-steps

```bash
    folders:
        - map: ~/Projects/debugger-tech
          to: /home/vagrant/debugger-tech
 ```

### Configuring Nginx Sites

Not familiar with Nginx? No problem. The ``sites`` property allows you to easily map a "domain" to a folder on your Homestead environment. A sample site configuration is included in the Homestead.yaml file. Again, you may add as many sites to your Homestead environment as necessary. Homestead can serve as a convenient, virtualized environment for every Laravel project you are working on:

```bash 
  sites:
   - map: api.local.debugger.tech
      to: /home/vagrant/Projects/debugger-tech/public/api.debugger.tech

    - map: admin.local.debugger.tech
      to: /home/vagrant/Projects/debugger-tech/public/admin.debugger.tech

    - map: cdn.local.debugger.tech
      to: /home/vagrant/Projects/debugger-tech/public/cdn.debugger.tech
```

### Hostname Resolution
Using automatic host names works best for "per project" installations of Homestead.
The ```hosts``` file will redirect requests for your Homestead sites into your Homestead machine. On Mac / Linux, this file is located at ``/etc/hosts``.
The lines you add to this file will look like the following:

```bash
    127.0.0.1       nuxt.local.debugger.tech

    192.168.10.10   api.local.debugger.tech
    192.168.10.10   admin.local.debugger.tech
    192.168.10.10   cdn.local.debugger.tech
```

Make sure the second IP address listed (``192.168.10.10``) is the one set in your ```Homestead.yaml``` file.
>Now we are ready to lift off the vagrant box.

### Connecting Via SSH
You can SSH into your virtual machine by issuing the vagrant ssh terminal command from your Homestead directory.

```bash
vagrant ssh
```

**Goto project directory**

```bash 
cd /home/vagrant/debugger-tech
```

### Connecting To Databases

A ```homestead``` database is configured for MySQL out of the box. To connect your MySQL database from your host machine's database client, you should connect to host ```127.0.0.1``` and port ```3306``` . The username and password for databases is``` homestead / secret```.

### Databases to be created :

#### MySQL
``debugger_tech``


Note: Mentioned database ports are default, it may vary according to your configuration.

>Once you have the all of this process now you are almost finish except two thing

- Install composer package for prepare laravel project
- Install node package and build frontend presets

### Install Laravel dependency
Navigate to ```/home/vagrant/debugger-tech/backend-api``` then run the commands one by one:
 ```bash
composer install

php artisan key:generate
php artisan optimize:clear
php artisan migrate
```

### Install frontend dependency

Navigate to ```~/Projects/debugger-tech/client-ssr``` from your local machine's terminal & run

```
npm install
npm run start
```

####For development environment with hot reloading & HTTPS enabled, run below commands one by one from ```debugger-tech/client-ssr```

```
openssl genrsa 2048 > server.key
chmod 400 server.key
openssl req -new -x509 -nodes -sha256 -days 365 -key server.key -out server.crt

npm run serve
```

>Now, you should be able to access below URL from your web browser:

https://nuxt.local.debugger.tech:3000
