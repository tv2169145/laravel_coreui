# Public Admin Template  

## Integrate CoreUi and Vue in Laravel

* [Laravel 6](https://laravel.com/docs/6.x)
* [CoreUI](https://github.com/coreui/coreui-free-laravel-admin-template)
* [Vue](https://cn.vuejs.org/v2/guide/)

## Composer Dependencies
* [ spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v3/introduction)
## Installation

```
# clone專案
$ git clone
# 安裝composer依賴
$ composer install 
# 安裝npm依賴, vue相關依賴
$ npm install
# 建立.env, 並設定資料庫
$ cp .env.example .env
$ artisan key:generate
$ php artisan migrate:refresh --seed
$ npm run dev
```

## 預設admin帳號

* E-mail: _admin@admin.com_
* Password: _password_

This user has roles: _user_ and _admin_

--- 

