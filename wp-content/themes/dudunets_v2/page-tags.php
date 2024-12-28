<?php
/**
 * Template Name: Tags List
 */
get_header();
?>

    <div class="tags-list">
        <h1>Tags</h1>
        <ul>
            <?php
            $tags = get_tags();
            if ( $tags ) {
                foreach ( $tags as $tag ) {
                    echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . esc_html( $tag->name ) . '</a> (' . esc_html( $tag->count ) . ')</li>';
                }
            } else {
                echo '<p>No tags found.</p>';
            }
            ?>
        </ul>
    </div>

<?php
get_footer();
