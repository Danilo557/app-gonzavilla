function Dropz() {}

var dropz = new Dropz();

$(document).on('click', '.btn-delete-image', function () {
    $id = $(this).data("id");
    dropz.delete_images($id);

});

Dropz.prototype.delete_images = function (id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type: 'POST',
        url: url_delete_image + id,
        data: {
            _token: CSRF_TOKEN,
            _method: 'DELETE'
        },
        dataType: 'JSON',

        success: function (results) {
            dropz.get_images();
        }
    });
}
Dropz.prototype.get_images = function () {
    axios.get(url_get_images)
        .then(function (response) {
            console.log(response.data);
            $data = response.data;


            $html = "";
            $(".drop-show-images").empty();
            $html += '<div class="d-flex flex-wrap">';
            $.each($data, function (index, value) {
                $html += `
                <div class="position-relative">
                     

                    <a class="btn btn-danger position-absolute btn-delete-image" data-id="${value.id}">x</a>
                    <img class="mx-auto d-block" src="${value.src}" width="140px" height="100px">
                     
                </div>`;
            });
            $html += '</div>';

            $(".drop-show-images").append($html);


        })
        .catch(function (error) {
            console.log(error);
        });
}



$(function () {

    dropz.get_images();






});
