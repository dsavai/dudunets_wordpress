<?php
$id = $args["post_id"];
$share_urls = get_share_links($id);
?>
<div class="flex items-center gap-4">
    <div class="font-semibold text-md">Share this article</div>
    <ul class="inline-flex gap-3 flex-wrap">
        <li>
<<<<<<< HEAD
            <a target="_blank" href="<?php echo $share_urls['facebook']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-fb-900 text-white hover:opacity-60">
=======
            <a href="<?php echo $share_urls['facebook']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-fb-900 text-white hover:opacity-60">
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                <span class="sr-only">share on Facebook</span>
                <span>
                                                <svg class="w-5 h-5 fill-current">
                                                    <use xlink:href="#icon-facebookf"></use>
                                                </svg>
                                            </span>
            </a>
        </li>
        <li>
<<<<<<< HEAD
            <a target="_blank" href="<?php echo $share_urls['twitter']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-tx-900 text-white hover:opacity-60">
=======
            <a href="<?php echo $share_urls['twitter']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-tx-900 text-white hover:opacity-60">
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                <span class="sr-only">share on TwitterX</span>
                <span>
                                                <svg class="w-5 h-5 fill-current">
                                                    <use xlink:href="#icon-twitterX"></use>
                                                </svg>
                                            </span>
            </a>
        </li>
        <li>
<<<<<<< HEAD
            <a target="_blank" href="<?php echo $share_urls['whatsapp']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-wa-900 text-white hover:opacity-60">
=======
            <a href="<?php echo $share_urls['whatsapp']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-wa-900 text-white hover:opacity-60">
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                <span class="sr-only">share on WhatsApp</span>
                <span>
                                                <svg class="w-5 h-5 fill-current">
                                                    <use xlink:href="#icon-whatsApp"></use>
                                                </svg>
                                            </span>
            </a>
        </li>
        <li>
<<<<<<< HEAD
            <a target="_blank" href="<?php echo $share_urls['email']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-black text-white hover:opacity-6">
=======
            <a href="<?php echo $share_urls['email']?>" class="flex justify-center items-center w-7 h-7 p-2 overflow-hidden rounded-full bg-black text-white hover:opacity-6">
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                <span class="sr-only">share on Email</span>
                <span>
                                                <svg class="w-5 h-5 fill-current">
                                                    <use xlink:href="#icon-email"></use>
                                                </svg>
                                            </span>
            </a>
        </li>
    </ul>
</div>