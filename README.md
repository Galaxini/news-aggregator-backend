News Aggregator Laravel Backend
Welcome to the News Aggregator Laravel Backend repository. This backend portion of the project is responsible for providing the API services and managing the database for the News Aggregator web application.

Getting Started
These instructions will guide you through setting up and running the Laravel backend project locally for development and testing. Please ensure you have Docker and Docker Compose installed.

Prerequisites
Before you begin, make sure you have the following prerequisites installed on your development machine:

Docker: Install Docker
Docker Compose: Install Docker Compose
Installation
Follow these steps to get the Laravel backend up and running:

Clone the repository to your local machine:

bash
Copy code
git clone <repository_url>
Navigate to the project directory:

bash
Copy code
cd news-aggregator-backend
Create a .env file based on the provided .env.example and configure your database settings.

Build and start the Docker containers:

bash
Copy code
docker-compose up --build
The Laravel application should now be accessible at http://localhost:8000.

API Documentation
[Provide a link to the API documentation if available.]

Running Tests
To run PHPUnit tests, use the following command:

bash
Copy code
docker-compose exec app php artisan test
Deployment
[If applicable, provide instructions for deploying the Laravel backend in a production environment.]

Built With
Laravel - The PHP framework used for building the backend
Docker - Containerization platform

