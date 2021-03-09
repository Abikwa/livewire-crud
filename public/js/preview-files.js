$(function () {

    var imagesPreview = function (input, placeToInsertImagePreview) {

        if (input.files) {
            var files = input.files;

            for (var i = 0, len = files.length; i < len; i++) {

                var file = files[i];

                var reader = new FileReader();

                reader.onload = (function (f) {
                    return function (e) {
                        var extension = f.name.split('.').pop().toLowerCase();
                        var result;

                        switch (extension) {
                            case 'pdf':
                                result = 'images/PDF_file_icon.svg';
                                break;
                            case 'doc':
                            case 'docx':
                                result = 'images/docx_icon.svg';
                                break;
                            case 'xls':
                            case 'xlsx':
                                result = 'images/xlsx_icon.svg';
                                break;
                            case 'txt':
                                result = 'images/txt_file_icon.svg';
                                break;
                            default:
                                result = this.result;
                        }

                        $($.parseHTML('<div class="content-container"></div>')).html(
                            '<input type="text" class="d-none" wire:model="files_uploaded" value="' + this.result + '">' +
                            '<div class="image-container">' +
                            '<img class="rounded img-thumbnail" src="' + result + '">' +
                            '<button class="remove-preview btn"><i class="fas fa-times"></i></button>' +
                            '</div>' +
                            '<p class="text-muted text-truncate">' + f.name + '</p>'
                        ).appendTo(placeToInsertImagePreview);
                    }
                })(file);
                reader.readAsDataURL(file);
            }
        }
    };

    $(document).on('click', '.remove-preview', function () {
        $(this).parent().parent().remove();

        if ($('div.gallery').children().length == 0) {
            $('#preview-files').addClass('d-none');
        }
    });

    $(document).on('change', '#files', function () {
        $('#preview-files').removeClass('d-none');
        imagesPreview(this, 'div.gallery');
    });
});
