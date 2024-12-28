<?php
/**
 * Template Name: Categories List
 */
get_header();
?>

    <div class="categories-list">
        <h1>Categories</h1>
        <ul>
            <?php
            $categories = get_categories(); // Fetch all categories
            if ( $categories ) {
                foreach ( $categories as $category ) {
                    echo '<li>';
                    echo '<a href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>';
                    echo ' (' . esc_html( $category->count ) . ')'; // Display post count
                    echo '</li>';
                }
            } else {
                echo '<p>No categories found.</p>';
            }
            ?>
        </ul>
    </div>

<?php
get_footer();
