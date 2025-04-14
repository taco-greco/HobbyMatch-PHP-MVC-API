# HobbyMatch PHP MVC API

This is the backend API for **HobbyMatch**, a social platform that helps people find others with similar hobbies and interests. Built using a custom PHP MVC architecture, this project handles user authentication, hobby matching logic, and provides a set of RESTful endpoints consumed by the HobbyMatch Flutter frontend.

## 📱 Flutter Frontend

Check out the Flutter frontend for this API here:  
👉 [HobbyMatch Flutter App](https://github.com/taco-greco/HobbyMatch-Flutter)

## 🧱 Features

- ✅ Custom PHP MVC framework
- 🔐 JWT-based authentication
- 🧑‍🤝‍🧑 User registration and login
- 🧠 Intelligent hobby matching algorithm
- 📄 RESTful API with clean routing
- 🛡️ Input validation and error handling

## 📂 Project Structure

```
HobbyMatch-PHP-MVC-API/
├── app/
│   ├── controllers/
│   ├── core/
│   ├── models/
│   └── helpers/
├── config/
│   └── config.php
├── public/
│   └── index.php
├── .env.example
├── composer.json
├── database.sql
└── README.md
```

## 📸 Screenshots

### 🏠 Index Page (Landing)
![Index Page](screenshots/index-page.png)


## 🚀 Getting Started

### Prerequisites

- PHP 8.x+
- MySQL
- Composer

### Installation

1. Clone the repo
   ```bash
   git clone https://github.com/taco-greco/HobbyMatch-PHP-MVC-API.git
   cd HobbyMatch-PHP-MVC-API
   ```

2. Install dependencies
   ```bash
   composer install
   ```

3. Set up environment variables  
   Copy `.env.example` to `.env` and update the database credentials.

4. Import the database  
   Import `database.sql` into your MySQL server.

5. Run the server
   ```bash
   php -S localhost:8000 -t public
   ```

Now you can access the API at `http://localhost:8000`.

## 🛠️ API Endpoints

- `POST /register` – Register a new user  
- `POST /login` – User login & JWT issuance  
- `GET /users/{id}` – Get user profile  
- `GET /matches` – Get hobby matches for authenticated user  


## 🧑‍💻 Author

- GitHub: [taco-greco](https://github.com/taco-greco)

## 📄 License

MIT License – feel free to use, modify, and contribute!
