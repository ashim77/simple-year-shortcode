<?php
/**
 * Custom Time Shortcode
 *
 * This shortcode function allows users to display the current date with customizable formats and offsets.
 *
 * Shortcode Usage:
 * - [time format="Y" value="2"] : Displays the current year plus 2 years.
 * - [time format="M" value="2"] : Displays the current month plus 2 months.
 * - [time format="D" value="5"] : Displays the current day plus 5 days.
 *
 * @param array $atts Shortcode attributes.
 *                   - format (string): The date format ('Y', 'y', 'm', 'M', etc.).
 *                   - value (string): The offset value. Default is 'none'.
 *
 * @return string Formatted date string based on the provided attributes.
 */

// Define the shortcode function
function current_year_shortcode($atts) {
    // Set default attribute values
    $atts = shortcode_atts(
        array(
            'format' => 'Y',
            'value'  => 'none'
        ), $atts, 'time');

    // Define allowed date formats
    $allowed_formats = array('Y', 'y', 'm', 'M', 'F', 'n', 'd', 'D', 'j', 'N', 'S', 'w', 'z', 't');

    // Check if the specified format is valid
    if (!in_array($atts['format'], $allowed_formats)) {
        return $atts['format'] . ' is not a valid format!';
    }

    // Set default offset value
    $value = ($atts['value'] != 'none') ? $atts['value'] : '0';

    // Construct the offset string based on the format
    $offset_string = "+$value " . (
        ($atts['format'] == 'Y' || $atts['format'] == 'y') ? 'years' :
        (($atts['format'] == 'd' || $atts['format'] == 'D' || $atts['format'] == 'j') ? 'days' : 'months')
    );

    // Return the formatted date
    return date_i18n($atts['format'], strtotime($offset_string));
}

// Add the shortcode to WordPress
add_shortcode('time', 'current_year_shortcode');
