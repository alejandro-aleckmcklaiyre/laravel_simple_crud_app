# Laravel Simple CRUD App

A tiny Laravel app that implements basic CRUD operations similar to a simple blog: create (post), read (display), update (edit) and delete entries.

Features
- Create new posts
- Edit existing posts
- Delete posts
- Display a list and single post views

Quick start
1. Install dependencies:

	composer install

2. Copy the example env and generate an application key:

	cp .env.example .env
	php artisan key:generate

3. (Optional) Use the included SQLite database:

	touch database/database.sqlite
	# then update `.env` DB_CONNECTION=sqlite and DB_DATABASE=database/database.sqlite

4. Run migrations:

	php artisan migrate

5. Start the local server:

	php artisan serve

Visit http://localhost:8000 to view the app.

Notes
- This repository is intended as a minimal, educational example of CRUD with Laravel.

