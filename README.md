# Laravel Site

A modern, responsive Laravel starter site with a landing page, portfolio, simple blog listing, and working contact form.  
Perfect as a personal / agency website boilerplate.

## ✨ Features

- Clean, responsive layout built with Tailwind CSS CDN (no build step required)
- Hero landing page with call‑to‑action buttons
- About, Services, Portfolio, Blog, and Contact pages
- Contact form with validation and database storage
- Reusable Blade layout with navigation and footer components
- Simple data arrays in controllers (easy to replace with database later)
- MIT licensed — free for personal and commercial use

## 🧱 Tech Stack

- PHP 8.2+
- Laravel 10/11
- Blade templates
- Tailwind CSS (via CDN)
- Alpine.js (for small UI interactions, optional)

## 🚀 Getting Started

> This project is designed to be dropped into a **fresh Laravel installation**.

1. **Create a new Laravel app (if you haven't yet):**

   ```bash
   composer create-project laravel/laravel laravel-site
   cd laravel-site
   ```

2. **Copy these files into your Laravel app**

   Merge the contents of this repository into your Laravel project:

   - `app/Http/Controllers/PageController.php`
   - `app/Http/Controllers/ContactController.php`
   - `app/Models/Contact.php`
   - `database/migrations/*create_contacts_table.php`
   - `resources/views/**` (layouts + pages)
   - `routes/web.php` (override or merge with your existing)
   - `public/css/custom.css`

3. **Install dependencies & set up environment**

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```

   Configure your database in `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_site
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Run migrations**

   ```bash
   php artisan migrate
   ```

5. **Serve the app**

   ```bash
   php artisan serve
   ```

   Open your browser at **http://127.0.0.1:8000**.

## 📂 Main Pages

- `/` – Home (hero, services, portfolio preview, blog preview, CTA)
- `/about` – About the brand / person
- `/services` – List of services with pricing cards
- `/portfolio` – Grid of projects with tags
- `/blog` – Simple static blog listing (replace with real posts later)
- `/contact` – Contact form with validation & flash message

## 📝 Contact Form

The contact form stores submissions in the `contacts` table using the `Contact` model.

You can view data using:

```bash
php artisan tinker
>>> \App\Models\Contact::latest()->get();
```

You can extend this by:

- Sending emails with `Mail::to(...)`
- Adding admin dashboard to manage contacts

## 🧩 Customization

- Update the data arrays inside `PageController` to reflect your real services, projects, and posts.
- Edit Blade views in `resources/views` to match your branding.
- Add more routes and controllers as needed.

## 📄 License

This project is open‑source and available under the [MIT License](./LICENSE).
