# Laravel VideoGame Store

## Installation

### Previous steps

You must setup the `gamestore` database first, **I used Postgres in my case:**

```sql
create database gamestore
```
If you want to use another DB name change it in the `.env` file along with credentials

Install project dependencies with composer (this can take a long time):
```php
composer install
```

## Routes

|      View                 |           Folder             |     Asociated View   |
| -----------------------:  | :--------------------------: | :------------------- |
| login.blade.php           | resources/views/vg/auth      | login                |
| game_index.blade.php      | resources/views/vg/game      | games                |
| show_game.blade.php       | resources/views/vg/game      | games/show/{id}      |
| platform_index.blade.php  | resources/views/vg/platform  | platforms            |
| show_platform.blade.php   | resources/views/vg/platform  | platforms/show/{id}  |
| character_index.blade.php | resources/views/vg/character | characters           |
| show_character.blade.php  | resources/views/vg/character | characters/show/{id} |
| company_index.blade.php   | resources/views/vg/company   | companies            |
| show_company.blade.php    | resources/views/vg/company   | companies/show/{id}  |
| review_index.blade.php    | resources/views/vg/review    | reviews              |
| show_review.blade.php     | resources/views/vg/review    | reviews/show/{id}    |
| genre_index.blade.php     | resources/views/vg/genre     | genres               |
| show_genre.blade.php      | resources/views/vg/genre     | genres/show/{id}     |



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

