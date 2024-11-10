# School District Sierra Leone (SDSL)

![School District Sierra Leone Dashboard](https://school.edu.sl/public/uploads/20241104/sdsl_dashboard.png)

---

## Introduction

School District Sierra Leone (SDSL) is a centralized digital platform developed in collaboration with the Directorate of Science, Technology, and Innovation (DSTI) to enhance educational administration and transparency. Managed by the Ministry of Education, this system enables real-time management of student and school data across the country, streamlining academic reporting, school registration, and data analytics.

Visit the live site: [School District Sierra Leone](https://school.edu.sl)

---

## Overview

SDSL provides a comprehensive solution for school administration, allowing for seamless management of student records, attendance, performance tracking, and WASSCE integration. This system empowers educators, administrators, and the Ministry of Education to make data-driven decisions for enhanced learning outcomes.

---

## Features

- **Student Registration**: Securely register students and generate unique IDs and email addresses for academic communication.
- **Attendance Tracking**: Monitor student attendance across institutions in real time.
- **WASSCE Integration**: Access WASSCE exam statistics, including student enrollment and pass rates, by school and year.
- **Performance Analytics**: Detailed insights into academic performance to improve educational strategies.
- **Ministry Dashboard**: The superadmin dashboard provides the Ministry of Education with complete oversight, allowing for data-backed decisions.
- **Encrypted Student Data**: Ensures student privacy and integrity of academic records.
- **API Integration**: Connect with other educational software and platforms for data interoperability.

---

## Setup Guide

To install and configure the School District Sierra Leone (SDSL) platform, follow the steps below to modify the `.env` file and start both the frontend and backend servers.

---

### Modifying the `.env` File

1. **Locate the `.env` File**:
   - Navigate to your Laravel project directory where you’ll find the `.env` file.

2. **Open the `.env` File**:
   - Open the `.env` file in a code editor to make the necessary modifications.

3. **Edit Environment Variables**:
   - Update the following environment variables as needed:
     - **APP_NAME**: Define the application name.
       ```plaintext
       APP_NAME=SchoolDistrictSL
       ```
     - **APP_ENV**: Set to `local` or `production` as appropriate.
       ```plaintext
       APP_ENV=local
       ```
     - **APP_DEBUG**: Enable debugging mode (true/false).
       ```plaintext
       APP_DEBUG=true
       ```
     - **APP_URL**: Specify your application’s URL.
       ```plaintext
       APP_URL=http://yourdomain.com
       ```
     - **DB_CONNECTION**, **DB_HOST**, **DB_DATABASE**, **DB_USERNAME**, **DB_PASSWORD**: Configure database connection details.
       ```plaintext
       DB_CONNECTION=mysql
       DB_HOST=127.0.0.1
       DB_DATABASE=school_district
       DB_USERNAME=your_username
       DB_PASSWORD=your_password
       ```

4. **Save Changes**:
   - Save and close the `.env` file after editing.

5. **Cache Configuration**:
   - Clear the configuration cache:
     ```bash
     php artisan config:cache
     ```

6. **Verify**:
   - Run your application to confirm the configurations are applied.

---

### Running the Backend (Laravel)

1. **Install Composer Dependencies**:
   ```bash
   composer install

Run Migrations:

bash
Copy code
php artisan migrate
Start Laravel Server:

bash
Copy code
php artisan serve
Access the backend at http://localhost:8000.
Running the Frontend (React)
Navigate to the Frontend Directory:

bash
Copy code
cd frontend
Install Dependencies:

bash
Copy code
npm install
Start the React Server:

bash
Copy code
npm start
Access the frontend at http://localhost:3000.
Notes
Security: Protect the .env file to secure database credentials and API keys.
Version Control: Exclude .env from version control and provide an .env.example for development purposes.
Demo Credentials
plaintext
Copy code
Admin User:
URL:       /login
Username:  admin@school.edu.sl
Password:  admin123

School User:
URL:       /login
Username:  school@school.edu.sl
Password:  school2024
Contributors
Mohamed Abdul Kabia - mohamed.kabia@school.edu.sl
Sorie Almamun - almamun.tecl@gmail.com
Kabie Mohamed - kabie@school.edu.sl
Abdul Tejan - dev@school.edu.sl
License
The School District Sierra Leone platform is open-sourced under the MIT license.
