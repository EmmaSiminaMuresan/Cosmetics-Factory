# Cosmetics Factory Management System

This project is a **Cosmetics Factory Management System** built using **PHP**, **MySQL**, and **CSS**. It manages various aspects of the factory including employee logins, provider information, stock management, and customer orders.

## Features

### PHP (Web Interface):
- **Login System**: Employees can log in securely using the `login.php` form.
- **Provider Management**: Allows employees to add and manage provider information (handled via `providers.php` and `processproviders.php`).
- **Dynamic Options**: Options page (`options.php`) for employees to manage various settings within the system.
- **Database Interaction**: All data is stored and managed through the **MySQL** database, including provider information, employee credentials, and cosmetics stock.

### C (Backend Operations):
- **Stock Management**: Manages the cosmetics stock, including medicines, quantities, and pricing. Clients can select products based on prescription or quantity.
- **Cart System**: The `cart.c` file manages customer carts, allowing them to add products and calculate totals.
- **Customer Orders**: Customers can place orders for various cosmetics items, with options for quick purchases or prescription-based orders.
- **Courier Scheduling**: Customers can select delivery schedules using the `courier()` function, with real-time scheduling and feedback.

## Project Structure

### PHP Files

- **`login.php`**: Handles user login input and form submission.
- **`processlogin.php`**: Processes the user’s credentials and grants access if successful. If the login fails, an error message is shown.
- **`providers.php`**: Displays a form to add new providers, including their ID, name, phone number, and address.
- **`processproviders.php`**: Inserts provider information into the **MySQL** database when submitted from the `providers.php` form.
- **`options.php`**: Displays various options for employees to manage (redirects depending on the selected action).
- **`database.php`**: Manages database connections for the PHP application, connecting to the `cosmetics_factory` database.

### C Files

- **`main.c`**: Main entry point for the program. It manages client interactions, handles the reading of cosmetics stock from a file, and provides the user interface.
- **`cart.c`**: Manages the shopping cart system for customers. Handles adding products, calculating totals, and displaying cart contents.
- **`medicine.c`**: Includes functions for managing stock, searching for products, and validating orders based on prescription status.
- **`client.c`**: Manages client interactions, including capturing customer details, selecting delivery options, and managing customer orders.
- **`pharmacy.c`**: Handles the general operations of the pharmacy stock and integrates with the cart system.

### Other Files

- **`pharmacy_stock.txt`**: A text file containing the current stock of cosmetics products, including medicine names, quantities, prices, and whether a prescription is required.

## How It Works

### PHP Side (Web Interface):
1. **Login**: Employees log in through `login.php`, and credentials are verified using `processlogin.php`.
2. **Provider Management**: Employees can add new providers via the form in `providers.php`. The information is processed and saved to the database by `processproviders.php`.
3. **Options**: Employees can navigate to the `options.php` page to perform various administrative tasks.
4. **Database Connection**: `database.php` handles the connection to the `cosmetics_factory` database.

### C Side (Backend):
1. **Stock Management**: Cosmetics stock is managed through functions in `medicine.c` and read from `pharmacy_stock.txt`.
2. **Customer Interaction**: Clients can add items to their cart using the **quick list** or **prescription-based** method. Stock is checked, and the client is informed if a prescription is required.
3. **Order Processing**: The system processes orders, calculates totals, and manages stock updates.
4. **Courier Scheduling**: Customers can schedule deliveries through the `courier()` function, selecting a preferred delivery day.

## Installation

### PHP Application:
1. **Clone the Repository**:
    ```bash
    git clone https://github.com/yourusername/cosmetics-factory-system.git
    cd cosmetics-factory-system
    ```

2. **Set Up Database**:
    - Create a MySQL database named `cosmetics_factory`.
    - Import the SQL schema (if available) to create the necessary tables.
    - Update `database.php` with your database credentials.

3. **Run the Application**:
    - Host the PHP files on a local server (e.g., **XAMPP** or **MAMP**) or deploy them to a cloud service.
    - Access the login page via a browser at `http://localhost/login.php`.

### C Application:
1. **Compile the C Files**:
    ```bash
    gcc main.c cart.c client.c medicine.c pharmacy.c -o cosmetics_factory
    ```

2. **Run the Program**:
    ```bash
    ./cosmetics_factory
    ```

## File Example

### `pharmacy_stock.txt`
This file contains the stock data.

Each entry contains:
- **ID**: Unique identifier for the product.
- **Name**: Product name.
- **Miligrams**: Dosage or weight of the product.
- **Quantity**: Number of units in stock.
- **Price**: Price per unit.
- **Prescription**: Whether the product requires a prescription (`YES`/`NO`).

## Customization

- **Database Credentials**: Update the `database.php` file with your MySQL database credentials.
- **Stock File**: Modify the `pharmacy_stock.txt` file to include your own cosmetics inventory.
- **Courier Schedule**: The delivery schedule in `client.c` can be updated with different days or times.


## Acknowledgments

- **Institution**: Technical University of Cluj-Napoca.

