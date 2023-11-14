<?php 

// Add a submenu item for the Shortcode Demo page under the Tools menu
add_action('admin_menu', 'register_shortcode_demo_submenu');
function register_shortcode_demo_submenu() {
    add_submenu_page(
        'tools.php',                // Parent menu (Tools)
        'Shortcode Snippets',        // Page title
        'Shortcode Snippets',        // Menu title
        'manage_options',           // Capability required
        'simple-year-shortcodes',   // Menu slug
        'display_simple_year_shortcode_page'  // Callback function to display the page
    );
}

// Callback function to display the Shortcode Demo page content
function display_simple_year_shortcode_page() {
    // You can add your shortcode demo content here
    echo '<div class="wrap">';
    echo '<h1>Shortcode Snippets</h1>';
    echo '<p>This is where you can demonstrate and explain how to use your shortcodes.</p>';

    // Add a simple table with WordPress default styles
    echo '<table class="wp-list-table widefat striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Shortcode</th>';
    echo '<th>Description</th>';
    echo '<th>Results</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    // Add your shortcode [sys]
    echo '<tr>';
    echo '<td>[sys]</td>';
    echo '<td>This is the current year</td>';
    echo '<td><strong>2023</strong></td>';
    echo '</tr>';

    // Year [sys format="Y"]
    echo '<tr>';
    echo '<td>[sys format="Y"]</td>';
    echo '<td>This is the current year</td>';
    echo '<td><strong>2023</strong></td>';
    echo '</tr>';

    // Month like January [sys format="F"]
    echo '<tr>';
    echo '<td>[sys format="F"]</td>';
    echo '<td>This is the current Month</td>';
    echo '<td><strong>January</strong></td>';
    echo '</tr>';

    // Month like Jan [sys format="M"]
    echo '<tr>';
    echo '<td>[sys format="M"]</td>';
    echo '<td>This is the current Month</td>';
    echo '<td><strong>Jan</strong></td>';
    echo '</tr>';

    // Month like 01 [sys format="M"]
    echo '<tr>';
    echo '<td>[sys format="m"]</td>';
    echo '<td>This is the current Month</td>';
    echo '<td><strong>01</strong></td>';
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';

    echo '</div>';
}






// Introducing the Shortcode Actions Button! Quickly discover essential shortcodes with a single click for a seamless experience.
// Adding a filter to display Shortcodes link in plugin action links
add_filter('plugin_action_links_' . SIMPLE_YEAR_SHORTCODE_BASE,
    function( $links ) {
        // Define the link with the shortcode page URL
        $link = sprintf( "<a href='%s'>%s</a>", esc_url( admin_url( 'admin.php?page=simple-year-shortcodes' ) ), __( 'Shortcode Snippets', 'simple-shortcode' ) );

        // Add the shortcode link to the existing links
        array_push( $links, $link );

        // Return the modified links array
        return $links;
    }
);
