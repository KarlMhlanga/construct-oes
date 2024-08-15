# Construct-OES WordPress Theme

## Overview
This project is a custom WordPress theme developed for the Construct-OES assessment. The theme is designed to be responsive, lightweight, and easily customizable. It includes custom templates, widgets, and shortcodes to support the site's unique content needs.

## Installation

### Prerequisites
- WordPress 5.0 or higher
- PHP 7.0 or higher
- MySQL 5.6 or higher

### Steps
1. **Download the Theme:**
   - Download the theme files from this repository.

2. **Upload the Theme:**
   - Log in to your WordPress admin panel.
   - Navigate to `Appearance > Themes > Add New > Upload Theme`.
   - Upload the `construct-oes.zip` file and click "Install Now."

3. **Activate the Theme:**
   - After installation, click "Activate" to set the theme as your active theme.

## Customization

### Theme Options
The theme includes several customization options available under `Appearance > Customize`. You can modify the site logo, colors, typography, and more.

### Custom Templates
- `page-custom.php`: A custom template for specific pages.
- `single-custom-post.php`: Template for single custom post types.

### Widgets and Shortcodes
- The theme supports several custom widgets and shortcodes for displaying content in various layouts.

## Development

### File Structure
- `/assets`: Contains theme assets like CSS, JS, and images.
- `/inc`: PHP files for theme functions and custom features.
- `/template-parts`: Reusable theme components.

### Development Tools
- The theme is built using [SASS](https://sass-lang.com/) for styling.
- [Gulp](https://gulpjs.com/) is used for task automation.

### Building the Theme
1. Run `npm install` to install dependencies.
2. Use `gulp` to compile SASS files and minify CSS/JS assets.

## Support
For any issues or feature requests, please create an issue in the repository or contact the developer.

## License
This theme is licensed under the [MIT License](LICENSE).

## Author
Karl
