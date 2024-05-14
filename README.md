# PHP Helper Functions Documentation

This document provides an overview of the helper functions available in the PHP script.

## Table of Contents

- [Dependencies](#dependencies)
- [Functions](#functions)
  - [dd($var)](#ddvar)
  - [alert($type, $title, $message, $time)](#alerttype-title-message-time)
  - [return_redirect_back($time)](#return_redirect_backtime)
  - [return_redirect_to($pageUrl, $time)](#return_redirect_topageurl-time)
  - [show_description($text, $max_length)](#show_descriptiontext-max_length)

## Dependencies

The following dependencies are required for the proper functioning of the script:

- [SweetAlert2](https://sweetalert2.github.io/) - A beautiful, responsive, customizable, accessible, and easily installable (using npm or Yarn) replacement for JavaScript's popup boxes.

## Functions

### `dd($var)`

Debugging function to output variable contents and halt execution.

- **Parameters:**
  - `$var` (mixed): The variable to be debugged.
- **Return Type:** void

### `alert($type, $title, $message, $time)`

Display SweetAlert notification.

- **Parameters:**
  - `$type` (string): The type of the notification. Default is 'success'. Possible values: 'success', 'error', 'warning', 'info'.
  - `$title` (string): The title of the notification.
  - `$message` (string): The message body of the notification.
  - `$time` (int): The duration in milliseconds before the notification automatically closes. Default is 1000ms.
- **Return Type:** void

### `return_redirect_back($time)`

Redirect back to the referring page after a specified time delay.

- **Parameters:**
  - `$time` (int): The delay time in milliseconds before redirection. Default is 1000ms.
- **Return Type:** void

### `return_redirect_to($pageUrl, $time)`

Redirect to a specific page after a specified time delay.

- **Parameters:**
  - `$pageUrl` (string): The URL of the page to redirect to.
  - `$time` (int): The delay time in milliseconds before redirection. Default is 1000ms.
- **Return Type:** void

### `show_description($text, $max_length)`

Truncate a text to the specified maximum length and add three dots if needed.

- **Parameters:**
  - `$text` (string): The input text to be truncated.
  - `$max_length` (int): The maximum length of the truncated text.
- **Return Type:** string

