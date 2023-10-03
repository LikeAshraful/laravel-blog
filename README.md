# Laravel Blog

Laravel Blog is a simple blogging platform built with the Laravel PHP framework.

## Features

- User authentication and registration.
- Create, edit, and delete blog posts.
- Categorize posts into different categories.
- Tagging system for posts.
- Comment system for engaging with readers.
- User profile management.
- Admin panel for managing users, posts, and comments.
- Responsive design for mobile and desktop.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)


![Laravel Blog Screenshot](/screenshot.png)

## Getting Started

These instructions will help you set up and run the project locally.

### Prerequisites

Before you begin, make sure you have the following installed:

- [PHP](https://www.php.net/) (at least version 8.1)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) or another relational database

### Installation

#### Run the following command to install this project in locally:

   ```bash
   git clone https://github.com/yourusername/laravel-blog.git
   ```
  ```bash
   cd laravel-blog
   ```
  ```bash
   composer install
   ```
  ```bash
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```
The application will be accessible at http://localhost:8000.

### Usage

Visit http://localhost:8000 in your web browser to access the Laravel Blog.
Register an account or log in with the default admin credentials.
Create, edit, and delete blog posts.
Explore the admin panel at http://localhost:8000/admin for advanced management features.

### Contributing

We welcome contributions! If you'd like to contribute to this project, please follow these steps:

Fork the repository on GitHub.
Clone your forked repository to your local machine.
Create a new branch for your feature or bug fix.
Make your changes and commit them with descriptive commit messages.
Push your changes to your fork on GitHub.
Submit a pull request to the original repository.

### License

This project is open-source and available under the MIT License.
