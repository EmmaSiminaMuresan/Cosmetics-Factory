# Cosmetics Factory

This project is a dynamic web application built using **PHP** and **CSS** for a user-friendly interface. The application allows users to log in, interact with the database, manage options, and view provider information. The visual elements of the interface are styled using the **styletable.css** file.

## Features

- **Login System**: Users can log in securely, and their credentials are processed through `login.php` and `processlogin.php`.
- **Options Management**: The application allows users to manage settings and options, which are processed through `options.php` and `processoptions.php`.
- **Provider Information**: Users can view and interact with provider data via `providers.php` and `processproviders.php`.
- **Database Interaction**: Data is retrieved and updated in the database via `database.php`.
- **Data Display**: Information from the database is displayed dynamically using `display.php`.
- **Styled Tables**: The project features stylish tables with alternating row colors and customized headers and footers, all handled by the `styletable.css` file.

## Project Structure

### PHP Files

- **`login.php`**: Handles the login form where users input their credentials.
- **`processlogin.php`**: Processes the user login, verifies credentials, and starts the session.
- **`options.php`**: Displays various options for the user to select or modify.
- **`processoptions.php`**: Processes the selected options and updates the database accordingly.
- **`providers.php`**: Displays a list of providers.
- **`processproviders.php`**: Handles interactions related to providers (e.g., adding or updating provider information).
- **`database.php`**: Manages database connectivity and queries.
- **`display.php`**: Retrieves and displays data from the database in a table format.

### CSS File

- **`styletable.css`**: Handles the styling of tables and the general appearance of the application. Some key styling features include:
  - Alternating row colors in tables (`odd` and `even` rows styled differently).
  - Custom backgrounds for the page, table headers, and footers.
  - Caption styling with unique fonts and positioning.
  - Table formatting with specific margins, widths, and color schemes.

### Text File

- **`pharmacy_stock.txt`**: Contains data related to pharmacy stock, used by the PHP application to display and manage inventory.

## How It Works

1. **Login**: The user navigates to the login page (`login.php`) and inputs their credentials. The credentials are processed in `processlogin.php` and, if valid, the session is started.
2. **Options**: The user can select and modify settings on the `options.php` page. The selected options are then processed by `processoptions.php`.
3. **Provider Information**: Users can view a list of providers on `providers.php`, and any updates or additions are processed by `processproviders.php`.
4. **Data Display**: Information from the database is dynamically displayed using `display.php`, which organizes the data into tables styled by `styletable.css`.

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/php-web-app.git
    cd php-web-app
    ```

2. **Set up the Database**:
    - Create a MySQL database and configure the connection in `database.php` with your database credentials.

3. **Run the Application**:
    - Host the PHP files on a local or cloud-based server (e.g., XAMPP, MAMP, or a cloud provider).
    - Access the login page via your web browser and begin using the application.

## Example Table Styling

The application makes use of customized table styles from `styletable.css`. Here’s a breakdown of the key table styling:

- **Alternating Row Colors**: 
  - Odd rows are styled with a background color of `#8FBC8F`.
  - Even rows are styled with a background color of `#F0E68C`.

- **Table Header and Footer**:
  - The header and footer are styled with a custom background image (`leopardskin.jpg`) and a white font color with black text shadow for readability.
  
- **Table Layout**: 
  - The table width is set to `45%`, with padding of `5px` and background color `#006400`.

- **Caption Styling**:
  - Captions are styled with a `Rock Salt` font, italics, and positioned at the bottom of the table with right-aligned text.

## Customization

- **Table Backgrounds**: You can change the background image in the `thead` and `tfoot` sections by modifying the `background` property in `styletable.css`.
- **Font Styling**: The table caption uses the `'Rock Salt'` font and italic styling. You can change this by editing the `caption` section in the CSS file.


## Acknowledgments

- **PHP**: For providing the backend functionality for this web application.
- **CSS**: For styling the user interface, enhancing user experience.
