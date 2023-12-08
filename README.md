<p align="center">
    <a href="https://github.com/muhamdaily/laravel-world" target="_blank">
        <img src="https://raw.githubusercontent.com/muhamdaily/assets/7f56d4cefec33035f7e04e1c0b320015fd55c6c7/laravel-world.svg" width="400" alt="Logo">
    </a>
</p>

<span align="center">

Laravel World is a complete resource for managing location data in your Laravel applications. This repository provides migrations and seeders for tables related to countries, provinces, cities, districts, and villages. Using this repository, you can easily integrate geographic data structures into your Laravel projects, enabling efficient and structured management of location information.

![GitHub repo size](https://img.shields.io/github/repo-size/muhamdaily/laravel-world)
![GitHub contributors](https://img.shields.io/github/contributors/muhamdaily/laravel-world)
![GitHub stars](https://img.shields.io/github/stars/muhamdaily/laravel-world?style=social)
![GitHub forks](https://img.shields.io/github/forks/muhamdaily/laravel-world?style=social)

</span>

## Introduction
Packages provide valuable functionality, yet they introduce a level of dependency. We must incorporate their service providers into our applications and adhere to their documentation, even for tasks we could accomplish independently.

Personally, I've often felt overwhelmed, particularly when tasked with creating tables for countries, states, and cities using Laravel migrations and seeding them. Consequently, I've developed migrations and seeders to streamline this process, drawing inspiration from two widely recognized repositories (credited below).

### Note!
It is important to note that this is not a stand-alone package, but instead contains migration and seeder files for countries, states, cities, districts and villages. You are free to use standard Laravel relationships and code in your projects as needed.

## Features
* Migrations and Seeders for Country, State, City, District, and Village Tables.
* Comprehensive and accurate data to establish a strong foundation for location management.
* Easily integrable into existing Laravel projects.
* Expandable data structure to meet the specific needs of your project.

## Requirements
* PHP `^8.1` or Above
* Laravel 9 or Above

## Getting started
To install **Laravel World**, follow these steps:

Clone repository and move migrations and seeders into relevant directories.
```bash
git clone https://github.com/muhamdaily/laravel-world.git
```

Register Seeders into `database/seeders/DatabaseSeeder.php` by adding these line in run method
```php
public function run(): void
{
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    $this->call(CountrySeeder::class);
    $this->call(StateSeeder::class);
    $this->call(CitySeeder::class);
    $this->call(DistrictSeeder::class);
    $this->call(VillageSeeder::class);
}
```

Run Migrations and Seed the Database.
```bash
php artisan migrate --seed
```

If you want to run fresh migrations and seed the database, you can use the following command:
```bash
php artisan migrate:fresh --seed
```
This command will drop all tables and then re-run the migrations, seeding the database with the initial data.

## Contributing to Laravel World
To contribute to **Laravel World**, follow these steps:

1. Fork this repository.
2. Create a branch: `git checkout -b <branch_name>`.
3. Make your changes and commit them: `git commit -m '<commit_message>'`
4. Push to the original branch: `git push origin <project_name>/<location>`
5. Create the pull request.

Alternatively see the GitHub documentation on [creating a pull request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## Contributors

Thanks to the following people who have contributed to this project:

* [@muhamdaily](https://github.com/muhamdaily) 📖

## Contact

If you want to contact me you can reach me at <muhammadmauribi@gmail.com>.

## License
This Laravel Auth repository is open-source software licensed under the [MIT License](LICENSE).