<?php
get_header();
$about_us_page = get_page_by_slug("about-us");
$image = get_post_thumbnail($about_us_page->ID);
$mission_page = get_page_by_slug("our-promise-mission");
$values_data = get_post_meta($mission_page->ID, 'name_value_pair', true);
$team_members = get_custom_posts_by_slug("team_members");
$why_choose_us_page = get_page_by_slug("why-choose-us");
$why_choose_us_page_values_data = get_post_meta($why_choose_us_page->ID, 'name_value_pair', true);
$the_impact_page = get_page_by_slug("the-impact");
$the_impact_image = get_post_thumbnail($the_impact_page->ID);
?>
    <main class="main">
        <section class="module module--banner pt-[30px]">
            <div>
                <div class="container mx-auto">
                    <div class="flex items-center">
                        <div class="w-full lg:w-6/12">
                            <h1 class="text-5xl font-bold leading-12 mb-6"><?php echo $about_us_page->post_excerpt;?></h1>
                            <p><?php echo $about_us_page->post_content;?></p>
                            <div>
                                <a href="<?php echo get_field('cta',$about_us_page->ID)['url']?>" class="inline-flex gap-3 items-center mt-6 font-semibold bg-[#0CBD92] p-2 text-white px-8 py-3 hover:bg-secondary hover:text-primary">
                                    <span>Contact us</span>
                                    <span>
                                        <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12">
                            <div class="w-full lg:h-[400px] overflow-hidden ml-10">
                                <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full" />    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8] py-16 my-16">
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-3 text-3xl font-bold"><?php echo $mission_page->post_title;?></h2>
                    <div class="w-[80%]">
                        <?php echo apply_filters("the_content",$mission_page->post_content)?>
                        <!--<p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quisquam deleniti, provident sunt id dignissimos molestiae sint temporibus mollitia exercitationem.</p>
                        <p class="mb-6">Our mission is to provide high-quality products that combine performance with value pricing, while establishing a successful relationship with our customers and our suppliers.</p>-->
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-10 mt-10">

                        <?php foreach($values_data as $data):?>
                            <div class="bg-white p-8 border border-gray-light text-center">
                                <h3 class="mt-2 text-xl font-semibold mb-2"><?php echo $data['field_name']?></h3>
                                <p class="text-[15px]"><?php echo $data['value']?></p>
                            </div>
                        <?php endforeach;?>
                        <!--<div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Customer Centricity</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Accountability</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Innovation</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>-->
                    </div>
                </div>
            </div>
            <div>
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-10 text-3xl font-bold">Our Management Team</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-10">

                        <?php foreach ($team_members as $team_member):
                            $image = get_post_thumbnail($team_member->ID);
                            ?>

                                <div class="mb-6">
                                    <div>
                                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" />
                                        <h3 class="mt-2 text-lg font-semibold"><?php echo $team_member->post_title?></h3>
                                        <p class="text-black/60 text-sm"><?php echo get_field("designation",$team_member->ID)?></p>
                                    </div>
                                </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8] py-16 my-16">
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-3 text-3xl font-bold"><?php echo $why_choose_us_page->post_title?></h2>
                    <div class="w-[80%]">
                       <?php echo apply_filters("the_content",$why_choose_us_page->post_content)?>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-10 mt-10">
                       <?php foreach($why_choose_us_page_values_data as $data):?>
                            <div class="bg-white p-8 border border-gray-light text-center">
                                <h3 class="mt-2 text-xl font-semibold mb-2"><?php echo $data['field_name']?></h3>
                                <p class="text-[15px]"><?php echo $data['value']?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div>
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10">
                        <div>
                            <h2 class="mt-1 mb-3 text-3xl font-bold"><?php $the_impact_page->post_title;?></h2>
                            <div class="w-[80%]">
                                <?php echo apply_filters("the_content",$the_impact_page->post_content)?>   
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo $the_impact_image['image'][0]?>" alt="<?php echo $the_impact_image['alt']?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
