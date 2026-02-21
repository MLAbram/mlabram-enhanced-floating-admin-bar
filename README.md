# MLAbram - Enhanced Floating Admin Bar
**Developed by [MLAbram](https://github.com/MLAbram)**

## Overview
A lightweight WordPress plugin designed to streamline the administrative workflow by adding quick-access shortcuts to the WordPress Toolbar (Admin Bar).

## Description

**MLAbram - Enhanced Floating Admin Bar** enhances the default WordPress experience by injecting direct links to your most-used content management screens—Posts and Pages—directly under the Site Name menu in the admin bar. This reduces the number of clicks needed to navigate from the front-end to the back-end editor.

## Features

* **Quick Access:** Adds "Posts" and "Pages" links to the top admin bar.
* **Seamless Integration:** Hooks natively into the WordPress `WP_Admin_Bar` class.
* **Lightweight:** Zero configuration required and minimal performance footprint.
* **Network Compatible:** Supports WordPress Multisite installations.

## Installation

To install this plugin via the WordPress Admin Dashboard:

1. **Prepare the File:** * Ensure the `mlabram-enhanced-floating-admin-bar.php` file is inside a folder named `mlabram-enhanced-floating-admin-bar`.
   * Compress (Zip) that folder so you have a file named `mlabram-enhanced-floating-admin-bar.zip`.
2. **Upload to WordPress:**
   * Go to **Plugins > Add New Plugin** in your WordPress dashboard.
   * Click the **Upload Plugin** button at the top.
   * Select your `.zip` file and click **Install Now**.
3. **Activate:**
   * Once the installation is complete, click **Activate Plugin**.

> **Note:** If you are using a Mac, ensure you zip the *folder* itself, not just the PHP file, to maintain the correct directory structure.

## Usage

Once activated, hover over your **Site Name** in the WordPress Admin Bar (Toolbar). You will see two new entries:
* **Posts**: Takes you directly to the Post list table.
* **Pages**: Takes you directly to the Page list table.

## Technical Details

* **Requires at least:** WordPress 5.0
* **Tested up to:** WordPress 6.4+
* **Requires PHP:** 7.0 or higher
* **License:** GNU General Public License v3

---
© 2023-2026 MLAbram - [mlabram.com](https://mlabram.com)