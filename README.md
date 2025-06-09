<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# 🎯 Laravel Multiplayer Quiz Game with Leaderboard

This is a simple multiplayer trivia game built with Laravel. Users can register, log in, play timed multiple-choice quizzes, and view a global leaderboard based on their scores and completion time.

## 🚀 Features

- ✅ Manual authentication (no Breeze, Jetstream, or Fortify)
- ✅ Multiple-choice trivia questions
- ✅ Automatic scoring and time tracking
- ✅ Leaderboard showing top players
- ✅ Clean UI with Blade templating
- ✅ Built with Laravel 11

## 📂 Project Structure

- `app/Models/Question.php` - Quiz questions model  
- `app/Models/Score.php` - Stores user scores  
- `app/Http/Controllers/AuthController.php` - Manual login & registration  
- `app/Http/Controllers/GameController.php` - Game logic and leaderboard  
- `resources/views/` - Blade templates for login, register, quiz, leaderboard, etc.

## 🛠️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/laravel-quiz-game.git
   cd laravel-quiz-game
````

2. **Install dependencies**

   ```bash
   composer install
   ```

3. **Create `.env` file**

   ```bash
   cp .env.example .env
   ```

4. **Generate application key**

   ```bash
   php artisan key:generate
   ```

5. **Set up database**

   * Create a database (e.g. `quiz_game`)
   * Update `.env`:

     ```
     DB_DATABASE=quiz_game
     DB_USERNAME=your_mysql_username
     DB_PASSWORD=your_mysql_password
     ```

6. **Run migrations and seed demo questions**

   ```bash
   php artisan migrate --seed
   ```

7. **Serve the app**

   ```bash
   php artisan serve
   ```

8. Open in browser:

   ```
   http://localhost:8000
   ```

## 🧪 How to Use

1. Register a new user account.
2. Click "Play Quiz" to start answering questions.
3. Submit your answers — your score and time will be saved.
4. Visit the "Leaderboard" to see rankings of all players.

## 📸 Screenshots

| Quiz Interface   | Leaderboard      |
| ---------------- | ---------------- |
| (Add screenshot) | (Add screenshot) |

## 📌 Technologies Used

* Laravel 11 (PHP)
* Blade Templates (HTML/CSS)
* JavaScript (`fetch` API)
* MySQL or SQLite

## 🧑‍💻 Author

**Geeky Programmer**

## 📃 License

This project is open-source and free to use under the [MIT License](LICENSE).