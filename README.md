Laravel/PHP Tech Test - Random Cat Pictures Website
Random Cat Pictures

Welcome to my Laravel/PHP tech test project! In a day and a half, I have created a basic website that handles authentication and displays random cat pictures using a RESTful API. This project was a great opportunity for me to discover Laravel!

Table of Contents
Introduction
Installation
Features
Technologies Used
Screenshots
Improvements and Future Work
Introduction
The purpose of this project was to build a simple web application using Laravel/PHP that incorporates authentication features and fetches random cat pictures from a REST API. During the day and a half of development, I made sure to keep the code clean and maintainable, and I focused on achieving the core functionalities effectively.

Installation
To run this project locally, please follow these steps:

// Downloaded Docker desktop

curl -s "https://laravel.build/example-app" | bash

cd example-app
 
./vendor/bin/sail up

--------------------

git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/stevenlegere/laravel-PHP.git
git push -u origin master

--------------------

composer require laravel/breeze --dev

php artisan breeze:install blade

php artisan migrate
npm install
npm run dev

--------------------

http://localhost/register
http://localhost/login

--------------------



User Authentication: Users can register, login, and logout from the website.
Random Cat Pictures: Authenticated users can view random cat pictures fetched from a REST API.
Clean and Responsive UI: The user interface is designed with CSS to be user-friendly and responsive across devices.
Technologies Used
The project leverages the following technologies:

Laravel: A popular PHP framework known for its expressive syntax and robust features.
PHP: The primary programming language used in the Laravel framework.
CSS: For styling and designing the website, providing an attractive and responsive layout.
REST API: Used to fetch random cat pictures from an external source.
Composer: To manage the project's dependencies.
Screenshots
Here are some screenshots of the application:
<img width="1208" alt="Screenshot 2023-07-18 at 14 40 49" src="https://github.com/stevenlegere/laravel-PHP/assets/121768671/ceaf11ce-48bc-46d0-8812-aea8c92522b2">

<img width="1290" alt="Screenshot 2023-07-18 at 14 41 03" src="https://github.com/stevenlegere/laravel-PHP/assets/121768671/352e15b1-2a81-4340-a72a-6cea76d1c465">

<img width="414" alt="Screenshot 2023-07-19 at 12 35 37" src="https://github.com/stevenlegere/laravel-PHP/assets/121768671/2a20c8d7-580c-4db0-b733-9bfb7b2526db">

<img width="503" alt="Screenshot 2023-07-19 at 13 10 37" src="https://github.com/stevenlegere/laravel-PHP/assets/121768671/71da520f-7950-4465-bb0a-44a6413fb1e5">

<img width="503" alt="Screenshot 2023-07-19 at 12 28 40" src="https://github.com/stevenlegere/laravel-PHP/assets/121768671/2b103a72-da0c-43ec-ab15-e405131173da">




https://github.com/stevenlegere/laravel-PHP/assets/121768671/8b2f85a3-d379-4f3b-acdd-8456f2e525a2





Improvements and Future Work
Given the limited timeframe, I focused on implementing the core functionalities of the project. However, there are several areas where the project could be improved or expanded in the future:

Error Handling: Enhance error handling to provide users with more informative messages when something goes wrong.
Tests: Implement test cases to ensure the stability and correctness of the application.
User Profile: Allow users to update their profiles and upload avatars.
Favorite Pictures: Add a feature that allows users to mark pictures as favorites.
Pagination: Implement pagination for the cat pictures to improve the browsing experience.
Caching: Consider implementing caching mechanisms to reduce the number of API requests.
Security: Review security measures to ensure the application is protected against common vulnerabilities.
Code Refactoring: Look for opportunities to optimize the codebase and adhere to best practices.
Thank you for taking the time to review my tech test project. I look forward to discussing it further and exploring how we can enhance this project together. If you have any questions or feedback, please feel free to reach out!

Best regards,
Steve Légère
