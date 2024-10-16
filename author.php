<?php
get_header();
get_template_part( 'topbar');
// Check if a user is logged in
if ( is_user_logged_in() ) {
    // Get the current logged-in user
    $current_user = wp_get_current_user();
	//$current_user_id = $current_user->ID;
    $username = $current_user->user_login; // Store the username in a variable
	// Get the URL of the user's author page
	//$user_author_url = get_author_posts_url($current_user_id);
	//print_r($user_author_url);
    // Load the template part dynamically based on the username
	
    echo '<main>';
	get_template_part( 'author/mail', $username );
	echo '</main>';

    get_footer();
} else {
    // If the logged-in user is trying to view another author's page, redirect or show error message
    if (is_user_logged_in()) {
        // Redirect the user to their own author page
        wp_redirect(get_author_posts_url($current_user));
        exit;
    } else {
        // If the user is not logged in, show an error message or redirect to login page
        wp_redirect(wp_login_url());
        exit;
    }
}
?>
