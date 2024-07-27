jQuery(document).ready(function($){
    var mediaUploader;

    $('#upload_net_type_image_button').click(function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#net_type_image').val(attachment.id);
            $('#net_type_image_preview').html('<img src="' + attachment.url + '" style="max-width: 150px; max-height: 150px;" />');
        });
        mediaUploader.open();
    });

    $('#remove_net_type_image_button').click(function(e) {
        e.preventDefault();
        $('#net_type_image').val('');
        $('#net_type_image_preview').html('');
    });
});
