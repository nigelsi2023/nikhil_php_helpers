<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css"> -->
<link rel="stylesheet" href="css/sweetalert2.min.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script> -->
<script src="js/sweetalert2.min.js"></script>

<?php
/**
 * Debugging function to output variable contents and halt execution.
 *
 * This function formats the given variable as a JSON string, applies appropriate HTML
 * styling, and outputs it within a <pre> block. It then terminates script execution.
 *
 * @param mixed $var The variable to be debugged.
 * @return void
 */
function dd($var): void {
    // Encode the variable as JSON with pretty printing and unescaped slashes.
    $json = json_encode($var, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    
    // Output the formatted JSON within a styled <pre> block.
    echo '<pre style="display: block; margin-left: 20%; background: #F5F5F5; padding: 10px; font-family: consolas, monospace; font-size: 16px; color: #333; overflow: auto; word-wrap: normal; white-space: pre; border-radius: 5px;">';
    echo '<code style="display: block; white-space: pre; overflow-x: auto; padding: 10px; margin: 0; border: 1px solid #efefef;">' . htmlspecialchars($json, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</code>';
    echo '</pre>';
    
    // Halt script execution.
    die();
}



/**
 * Display SweetAlert notification.
 *
 * This function generates and outputs JavaScript code to display a SweetAlert notification
 * with the specified type, title, message, and optional timer.
 *
 * @param string $type The type of the notification. Default is 'success'. Possible values: 'success', 'error', 'warning', 'info'.
 * @param string $title The title of the notification.
 * @param string $message The message body of the notification.
 * @param int $time The duration in milliseconds before the notification automatically closes. Default is 1000ms.
 * @return void
 */
function alert($type = 'success', $title, $message, $time = 1000): void {
    // Generate JavaScript code to display the SweetAlert notification.
    echo '<script>
            Swal.fire({
                icon: "'.$type.'",
                title: "'.$title.'",
                text: "'.$message.'",
                showConfirmButton: true,
                timer: '.$time.'
            })
        </script>';
}



/**
 * Redirect back to the referring page after a specified time delay.
 *
 * This function constructs a JavaScript code snippet to redirect the user
 * back to the referring page after a specified time delay.
 *
 * @param int $time The delay time in milliseconds before redirection. Default is 1000ms.
 * @return void
 */
function return_redirect_back($time = 1000): void {
    // Get the full URL of the current page.
    $full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    // Generate JavaScript code to redirect after the specified time delay.
    echo '<script>
            setTimeout(function() {
                window.location.href = "'.$full_url.'";
            }, '.$time.');
        </script>';
    
    // Exit the script execution.
    exit;
}



/**
 * Redirect to a specific page after a specified time delay.
 *
 * This function constructs a JavaScript code snippet to redirect the user
 * to the specified page URL after a specified time delay.
 *
 * @param string $pageUrl The URL of the page to redirect to.
 * @param int $time The delay time in milliseconds before redirection. Default is 1000ms.
 * @return void
 */
function return_redirect_to($pageUrl, $time = 1000): void {
    // Construct the full URL of the specified page.
    $full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/" . $pageUrl;
    
    // Generate JavaScript code to redirect to the specified page after the specified time delay.
    echo '<script>
            setTimeout(function() {
                window.location.href = "'.$full_url.'";
            }, '.$time.');
        </script>';
    
    // Exit the script execution.
    exit;
}



/**
 * Truncate a text to the specified maximum length and add three dots if needed.
 *
 * @param string $text The input text to be truncated.
 * @param int $max_length The maximum length of the truncated text.
 */
function show_description($text, $max_length) {
    // Check if the length of the text is greater than the maximum length
    if (strlen($text) > $max_length) {
        // Trim the text to the specified length and add three dots
        $trimmed_text = substr($text, 0, $max_length - 3) . '...';
        return $trimmed_text;
    } else {
        // If the text is within the limit, return it as it is
        return $text;
    }
}