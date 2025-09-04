Book Information Scraper & Viewer

On the backend, the **PHP + Goutte** library is used to scrape book information from a specific website.  
On the frontend, the data is displayed to the user using **Vue.js**.


**Web Scraping (Backend)**
- Uses [Goutte](https://github.com/FriendsOfPHP/Goutte) to fetch book information from a specific source.  
- The `getBookInformation.php` file (written in PHP) returns the data in JSON format.  
- Runs on PHP’s built-in server.
  

**User Interface (Frontend)**
- Built with Vue.js using a modern, component-based architecture.  



1- Backend (PHP + Goutte)

# Install dependencies
composer install

# Start the PHP server
php -S localhost:8000 getBookInformation.php


2- Frontend (Vue.js)

# Install dependencies
npm install

# Start the development server
npm run serve
