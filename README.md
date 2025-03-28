# JakePress - Custom WordPress Theme

## Overview

JakePress is a custom, proprietary WordPress theme designed for flexibility and ease of use. Built with SCSS for styling, it allows for efficient customization and maintainability. At the moment, the theme doesn’t automatically compile SCSS into CSS, so it’s recommended to use an SCSS -> CSS compiler until that feature is implemented.

## Features

- **Responsive Design:** Mobile-first approach, ensuring the theme looks great on all devices.
- **SCSS for Styling:** Built using SCSS to create a modular and maintainable styling architecture.
- **Custom Page Templates:** Multiple page templates for different layouts, allowing you to easily customize your site.
- **SEO Optimized:** Clean and semantic HTML code to improve your site’s search engine ranking.
- **Lightweight and Fast:** Focused on performance, with minimal bloat and clean code.

## Getting Started

### Installation

1. **Install the Theme**  
   Upload the theme to your WordPress installation via the admin dashboard (Appearance > Themes > Add New > Upload Theme) or by placing the theme folder directly into your `wp-content/themes/` directory.

2. **Activate the Theme**  
   After installation, go to **Appearance** > **Themes**, and activate **JakePress**.

### SCSS Compilation

Currently, JakePress does not automatically compile SCSS into CSS. To take full advantage of the theme’s styles, you’ll need to use an SCSS compiler, such as [Sass](https://sass-lang.com/), to manually compile the SCSS files into CSS.

After installing an SCSS compiler, follow the instructions in the tool's documentation to compile SCSS into CSS.

### Customization

Feel free to customize JakePress by modifying the SCSS files located in the `assets/styles/scss/` folder. The primary `style.scss` file contains the bulk of the custom styles for the theme.

You can also adjust theme settings via the WordPress customizer or directly modify theme files as needed.

## Development Workflow

- **SCSS -> CSS Compilation**: SCSS needs to be manually compiled using an SCSS -> CSS compiler.
- **Modular SCSS Files**: The SCSS files are split into smaller, more manageable pieces for easier customization and maintenance.
- **Version Control**: Git is used for version control, and commits are made after key feature updates and fixes.

## Contribution

If you’d like to contribute to JakePress, feel free to fork the repository and submit a pull request. Please follow the code style guidelines and keep changes modular for easier maintenance.

## License

JakePress is open-source and available under the [MIT License](LICENSE).
