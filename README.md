# Chat App

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributions](#contributions)
- [License](#license)

## Overview
This project is an online chat application built using Laravel and WebSockets. It allows real-time messaging between users. The app uses Laravel for the backend and WebSockets for real-time communication, enabling users to chat with each other instantly.

### Features
- **Real-Time Messaging**: Messages are sent and received in real-time using Pusher and Laravel Echo.
- **User Authentication**: Users can register, log in, and log out to use the chat application.
- **Message Display**: Messages sent by users are displayed in a chat window.
- **Broadcasting**: Messages are broadcasted to other users in the same channel, allowing them to see new messages as they arrive.

## Usage

1. **Setup and Deployment**:
    - Clone the repository to your local machine.
    - Ensure you have PHP 8.3+ and Composer installed.
    - Install dependencies by running `composer install` in the project root directory.
    - Set up your `.env` file by copying `.env.example` and adding necessary configuration:
      ```
      BROADCAST_DRIVER=pusher
      PUSHER_APP_ID=your_app_id
      PUSHER_APP_KEY=your_app_key
      PUSHER_APP_SECRET=your_app_secret
      PUSHER_APP_CLUSTER=your_app_cluster
      ```
    - Run migrations to set up the database:
      ```
      php artisan migrate
      ```
    - Start the Laravel development server:
      ```
      php artisan serve
      ```
      This will start the app locally at `http://localhost:8000`.

    - To run WebSocket server, you can use `php artisan websockets:serve`.

2. **Interacting with the Application**:
    - **GET** `/`: View the homepage, where users can log in or register.
    - **GET** `/register`: View the registration form.
    - **POST** `/register`: Register a new user.
    - **GET** `/login`: View the login form.
    - **POST** `/login`: Log in an existing user.
    - **GET/POST** `/chat`: Access the chat page and start messaging (authentication required).
    - **POST** `/logout`: Log out the current user and return to the homepage.

## File Structure

- `app/`: Contains the application's logic for controllers, models, and services.
    - `Http/Controllers/`: Contains the controller classes that handle user requests.
        - `ChatController.php`: Handles the logic for joining chat rooms and sending messages.
        - `AuthController.php`: Manages user registration, login, and authentication.
        - `HomeController.php`: Handles the homepage view, displaying the welcome message and providing options to log in or register.
    - `routes/`: Defines routes for the application.
        - `web.php`: Contains the main routes for user authentication and chat functionality.
        - `channels.php`: Defines the WebSocket channels and events for broadcasting messages.

- `resources/js/`: Contains JavaScript for handling WebSocket connections and chat functionality.
    - `app.js`: Main JavaScript file that manages WebSocket events and chat interactions.
    - `auth.js`: Handles user authentication-related JavaScript logic.
    - `bootstrap.js`: Includes the WebSocket and Pusher configuration.
    - `chat.js`: Manages the chat functionality, including sending and receiving messages.
    - `echo.js`: Configures Laravel Echo for handling real-time events.

- `resources/css/`: Contains the CSS files for styling the app.
    - `app.css`: Main stylesheet for the application, defining the layout and design.
    - `chat.css`: Styles specific to the chat interface.
    - `home.css`: Styles for the homepage.
    - `login.css`: Styles for the login page.
    - `register.css`: Styles for the registration page.

- `resources/views/`: Contains Blade templates for rendering views.
    - `layouts/app.blade.php`: Main layout file for shared HTML structure like headers, footers, and styles.
    - `chat/index.blade.php`: View for displaying the chat interface.
    - `auth/login.blade.php`: Login page for user authentication.
    - `auth/register.blade.php`: Registration page for new users.
    - `home.blade.php`: The homepage view, welcoming the user and providing login or register options.

- `.env`: Environment configuration file to store keys and configuration.

- `composer.json`: Composer configuration file for managing PHP dependencies.

- `vite.config.js`: Configuration file for asset compilation and bundling using Vite.

## Contributions
Contributions are welcome! If you have any improvements or bug fixes, feel free to fork the repository and submit a pull request. Please open an issue if you encounter any bugs or have suggestions for new features.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
