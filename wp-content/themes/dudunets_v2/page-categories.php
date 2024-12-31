<?php
/**
 * Template Name: Categories List
 */
get_header();
?>

    <main id="mainMain" class="module">
        <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
            <div class="my-8">
                <div class="flex flex-col justify-center items-center text-center">
                    <h2 class="mb-2 text-3xl font-400">Categories</h2>
                    <p class="text-black/60 font-medium leading-relaxed">Lorem ipsum dolor sit amet consectetur. Fermentum feugiat risus ac tristique pharetra at leo vitae.</p>
                </div>
            </div>
            <ul class="flex gap-3 flex-wrap justify-center">
                <?php
                $categories = get_categories(); // Fetch all categories
                if ( $categories ) {
                    foreach ( $categories as $category ) {
                        echo '<li>';
                        echo '<a class="flex justify-center items-center border text-sm font-semibold text-secondary  border-primary bg-primary/10 mb-2 rounded-lg px-3 py-1" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '<span class="flex justify-center items-center text-xs border border-black/10 bg-secondary text-white ml-4 rounded-full w-4 h-4">'.esc_html( $category->count ).'</span>' .'</a>';
                        echo '</li>';
                    }
                } else {
                    echo '<p>No categories found.</p>';
                }
                ?>
            </ul>
        </div>
    </main>

<?php
get_footer();
