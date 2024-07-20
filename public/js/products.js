$(function () {

    $('#slug').slugify('#name');

    load_nutrition_information_table();

    function load_nutrition_information_table() {

        $.ajax({
            url: url_get_nutrition_information_table,
            type: 'POST',
            data: {
                product_id: product_id
            },
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function (response) {


                $(".body_nutrition_information_table").empty();
                $html = ``;
                $.each(response, function (index, item) {
                    $html += `<tr>`;
                    $html += `<td>${item.name}</td>`;
                    $html += `<td>${item.pivot.percentage}</td>`;
                    $html += `<td>
                    <a data-product="${item.pivot.product_id}" data-nutrition="${item.pivot.nutrition_id}" class="btn btn-danger btn-delete-nutrition">
                    <i class="fas fa-trash"></i>
                    </a></td>`;
                    $html += `</tr>`;
                });

                $(".body_nutrition_information_table").append($html);
            },
            error: function (error) {

                console.log(error)
            }
        });
    }

    $(document).on("click", '.btn-delete-nutrition', function () {
        $.ajax({
            url: url_delete_products_delete_nutrition,
            type: 'POST',
            data: jQuery.param({
                product_id: $(this).data("product"),
                nutrition_id: $(this).data("nutrition")
            }),
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function (response) {
                console.log(response);
                load_nutrition_information_table();
            },
            error: function () {
                alert("error");
            }
        });


    });

    //btn-add-nutri
    $(document).on("click", '.btn-add-nutri', function () {
        $("#nutrition_persentage").val("");
        $('#nutrition_selected').val("");


    });

    $(document).on("click", '.btn-agregar-nutrimento', function () {


        $.ajax({
            url: url_add_nutrition_information_table,
            type: 'POST',
            data: jQuery.param({
                product_id: product_id,
                nutrition_id: $('#nutrition_selected').find(":selected").val(),
                percentage: $("#nutrition_persentage").val()

            }),
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function () {
                load_nutrition_information_table();
                $('#exampleModal .close').click();
            },
            error: function (error) {
                //responseJSON
                //status
                console.log(error);

                if (error.status == 422) {

                    var response = error.responseJSON;
                    $html="";
                    $.each(response, function (index, value) {
                        $html+=`${value} </br>`;
                    });

                    console.log($html);
                    Swal.fire({
                        title: "Error de validacion",
                        html:$html,
                        icon: "error",
                        
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "OK",
                        allowOutsideClick:false,
                        allowEscapeKey:false,

                    }) 
                }

            }
        });


    });


});
