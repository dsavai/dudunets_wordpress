<?php
/**
 * Template Name: Tags List
 */
$the_page = get_queried_object();
get_header();
?>

<main id="mainMain" class="module">
    <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
        <div class="my-8">
            <div class="flex flex-col justify-center items-center text-center">
                <h2 class="mb-2 text-3xl font-400"><?php echo $the_page->post_title?></h2>
                <p class="text-black/60 font-medium leading-relaxed"><?php echo $the_page->post_excerpt?></p>
            </div>
        </div>
        <ul class="flex gap-3 flex-wrap justify-center">
            <?php
            $tags = get_tags();
            if ( $tags ) {
                foreach ( $tags as $tag ) {
                    echo '<li><a  class="flex justify-center items-center border text-sm font-semibold text-secondary  border-primary bg-primary/10 mb-2 rounded-lg px-3 py-1" href="' . get_tag_link( $tag->term_id ) . '">'. esc_html( $tag->name ) . '<span class="flex justify-center items-center text-xs border border-black/10 bg-secondary text-white ml-4 rounded-full w-4 h-4">'.esc_html( $tag->count ).'</span>' .' </a> </li>';
                }
            } else {
                echo '<p>No tags found.</p>';
            }
            ?>
        </ul>
    </div>
</main>

<?php
get_footer();
