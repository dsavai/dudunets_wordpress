<?php
?>

<form id="quote_form" method="post">
    <h4 class="text-[30px] font-[500]">Contact Details</h4>
    <div class="font-[600] text-[14px] mb-[20px]">*required field</div>
    <div class="mb-[15px]">
        <label class="block mb-[5px] text-[14px]">First Name<span class="text-red-600">*</span></label>
        <input type="text" name="fname" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]" />
    </div>
    <div class="mb-[15px]">
        <label class="block mb-[5px] text-[14px]">Last Name<span class="text-red-600">*</span></label>
        <input type="text" name="lname" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]" />
    </div>
    <div class="mb-[15px]">
        <label class="block mb-[5px] text-[14px]">Phone Number<span class="text-red-600">*</span></label>
        <input type="text" name="mobile" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]"  />
    </div>
    <div class="mb-[15px]">
        <div class="mb-[15px] font-[500]">I want screens for <span class="text-red-600">*</span></div>
        <div class="mb-[10px]">
            <input type="checkbox" name="screens" value="doors"/>
            <label class="font-[300] text-[14px]">Doors</label>
        </div>
        <div class="mb-[10px]">
            <input type="checkbox"  name="screens" value="oversized_doors"/>
            <label class="font-[300] text-[14px]">Oversized Doors</label>
        </div>
        <div class="mb-[10px]">
            <input type="checkbox" name="screens" value="windows"/>
            <label class="font-[300] text-[14px]">Windows</label>
        </div>
        <div class="mb-[10px]">
            <input type="checkbox" name="screens" value="patios"/>
            <label class="font-[300] text-[14px]">Patios</label>
        </div>
        <div class="mb-[10px]">
            <input type="checkbox"  name="screens" value="other"/>
            <label class="font-[300] text-[14px]">Other</label>
        </div>
    </div>
    <div class="mb-[15px]">
        <label class="block mb-[5px] text-[14px]">Email Address<span class="text-red-600">*</span></label>
        <input type="text" name="email" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]"  />
    </div>
    <div class="mb-[15px]">
        <label class="block mb-[5px] text-[14px]">Location<span class="text-red-600">*</span></label>
        <input type="text" name="location" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]"  />
    </div>
    <div class="mb-[15px] mt-[20px]">
        <h4 class="text-[16px] font-[600]">Additional Notes</h4>
        <p>Describe your space, and list any measurements and details</p>
        <div class="mt-[20px]">
            <label class="block mb-[5px] text-[14px]">Message</label>
            <textarea cols="10" name="additional_notes" rows="5" class="block border-[1px] border-gray-200 bg-white w-full py-[8px] px-[10px]" ></textarea>
        </div>
    </div>
    <div class="mt-[20px]">
        <input type="hidden" name="submit">
        <button class="block bg-primary-900 text-white font-bold border-secondary border-2 rounded-full pt-[8px] pb-[8px] px-[30px] transition delay-200 ease-in-out hover:bg-secondary hover:text-primary-900">Get My Quote</button>
    </div>
</form>
