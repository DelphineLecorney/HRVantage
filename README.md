# HRVantage - A Human Resources Management System

## Description

HRVantage is a comprehensive Human Resources Management System (HRMS) designed to streamline HR processes, manage employee data, and facilitate efficient HR operations. This system allows organizations to handle employee information, positions, social benefits, and more. With HRVantage, you can effectively manage your HR tasks, ensuring a smooth and organized workforce management experience.

![Welcome](https://github.com/DelphineLecorney/HRVantage/blob/master/public/images/screenWelcome.JPG)

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [New Features](#new-features)
- [Data validation](#data-validation)
- [OpenWeatherMap API](#openWeatherMap-api)
- [IPinfo API](#IPinfo-API)
- [License](#license)

## Installation

1. **Create project:** `composer create-project laravel/laravel (nomduprojet)`
2. **Navigate to the project directory:** `cd your-project`
3. **Install dependencies:** `composer install`
4. **Copy the `.env.example` file to `.env` and configure your database settings.
5. **Generate an application key:** `php artisan key:generate`
6. **Run migrations:** `php artisan migrate`
7. **Start the development server:** `php artisan serve`

## Usage

HRVantage simplifies various HR-related tasks and provides a user-friendly interface for managing employee data, positions, and social benefits. Below are some common use cases and features of HRVantage:

### Employee Management:

Add, view, edit, and archive employee profiles.
Track essential employee information such as name, contact details, and address.

### Position Management:

Create and manage different job positions within your organization.
Assign positions to employees, ensuring proper role allocation.

### Social Benefit Management:

Define and categorize social benefits, both monetary and non-monetary.
Link social benefits to employees, allowing easy tracking of benefits provided.

### Data Organization:

Keep all HR-related data organized in one centralized system.
Access detailed employee records, including contact information and employment history.

### Efficient Reporting:

Generate reports on employee data, positions, and social benefits.
Gain insights into your workforce for better decision-making.

### User-Friendly Interface:

HRVantage offers an intuitive and user-friendly interface, making it easy for HR personnel to navigate and manage data.

### Secure and Reliable:

Ensure data security and reliability with built-in measures to protect sensitive HR information.

### Customization:

Adapt HRVantage to your organization's specific needs through customization options.

### New Features

- **Weather Information**: Get real-time weather information for your organization's location right within HRVantage. Know the temperature and weather conditions to better plan your HR activities.

HRVantage is a valuable tool for HR professionals and organizations seeking to streamline HR operations, enhance data management, and improve overall efficiency in workforce management.

## Data validation

To ensure that the recruitment data submitted by users is correct and compliant with our requirements, we use a Laravel request class called `RecruitmentRequest`.

### `RecruitmentRequest`

The `RecruitmentRequest` class contains the validation rules for recruitment data. It specifies the mandatory fields and the specific validation rules for each field. Here are the rules currently defined in this class:

- `position_id`: Mandatory.
- `name`: Mandatory.
- `firstname`: Mandatory.
- `email`: Mandatory.
- `phone`: Mandatory.
- `address`: Mandatory.
- `city`: Mandatory.
- `zip_code`: Mandatory.
- `country`: Mandatory.
- `status`: Mandatory.

If a recruitment form is submitted with data that does not respect these rules, Laravel will return an error response.

This request class is used in our controller to validate data when creating or updating a recruitment.

## OpenWeatherMap API

HRVantage uses the OpenWeatherMap API to provide real-time weather information. This feature allows users to know the current temperature and weather conditions based on their location.

### How It Works

The HRVantage application utilizes the IPinfo API to automatically determine the user's location based on their IP address. It then uses this location data to query the OpenWeatherMap API for current weather information. The retrieved data is then displayed in the user interface.

### Configuration

To enable this feature, users only need to use the HRVantage application. The application will automatically determine their location based on their IP address and display the appropriate weather data.

#### API Key

Please note that no API key is required from users for this feature. The HRVantage application manages the API calls and data retrieval on their behalf.

By adding this section, you help users understand how your HRVantage application uses the IPinfo API to determine their location and then fetches weather data from the OpenWeatherMap API to provide them with real-time weather information.



## IPinfo API

The application uses the IPinfo API to obtain the user's city based on their IP address. This API provides geographic information based on the user's IP address, which improves the user experience by displaying relevant data based on the user's location.

### How the API works

The IPinfo API works by querying the IP address database to determine the approximate location of the user's IP address. It can provide details such as country, region, city and geographic coordinates.

### Use in the application

Within the application, the IPinfo API is used to obtain the user's city, allowing local weather information to be displayed. This creates a personalised experience for each user.

### API access

The application accesses the IPinfo API using a secure access token, which is stored in the environment variables for security reasons.

To find out more about the IPinfo API and how it works, please consult the [official IPinfo API documentation](https://ipinfo.io/).


## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

![Work in Progress](https://github.com/DelphineLecorney/HRVantage/blob/master/public/images/Work.JPG)