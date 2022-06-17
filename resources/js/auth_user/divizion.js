let Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

function mes_right(type, mes){
    Toast.fire({
        icon: type,
        title: mes
    })
}

function getAll(){
    // $.ajax({
    //     url: '/api/organization',
    //     type: "POST",
    //
    //     data: {long_name: $('input[name="long_name"]').val(),
    //         short_name: $('input[name="short_name"]').val(),
    //         director_fio: $('input[name="director_fio"]').val(),
    //         address: $('input[name="address"]').val(),
    //         _token: $('meta[name="csrf-token"]').attr('content'),
    //         user_id: $('input[name="user_id_hid"]').val(),},
    //     headers: {
    //         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    //     },
    //
    //     success: function (data) {
    //         let id_org = data['data']['id'];
    //         mes_right('success', 'Организация успешно добавлена')
    //         $('.all-organization').append('' +
    //             '<div class="col-12 mt-2 mb-2">\n' +
    //             '    <div class="head_organization">\n' +
    //             '        <div class="row">\n' +
    //             '            <div class="col-6">\n' +
    //             '                <h3>'+data['data']['short_name']+'</h3>\n' +
    //             '            </div>\n' +
    //             '            <div class="col-6 buttons">\n' +
    //             '                <span class="add_divizion" data-id="'+id_org+'"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить подразделение</span>\n' +
    //             '                <span class="edit_organization" data-id="'+id_org+'"><i class="nav-icon fas fa-edit"></i></span>\n' +
    //             '                <span class="dell_organization" data-id="'+id_org+'"><i class="fa fa-trash" aria-hidden="true"></i></span>\n' +
    //             '            </div>\n' +
    //             '        </div>\n' +
    //             '    </div>\n' +
    //             '    <div class="body_organization">\n' +
    //             '        \n' +
    //             '    </div>\n' +
    //             '</div>')
    //         $('#close_add_organization').trigger('click')
    //     },
    //     error: function (msg) {
    //         mes_right('error', 'Произошла ошибка при добавлении организации')
    //         $.each(msg['responseJSON']['errors'], function(key, value){
    //             $('input[name="'+key+'"]').addClass('is-invalid');
    //             $('input[name="'+key+'"]').after('' +
    //                 '<span class="invalid-feedback d-block" role="alert">\n' +
    //                 '   <strong>'+value+'</strong>\n' +
    //                 '</span>'
    //             );
    //         });
    //     }
    // })
}
getAll()

//добавление подразделения
$(document).on('click', '#store_division',async function add_division(){
    $('.is-invalid').removeClass('is-invalid');
    $('.invalid-feedback').remove();

    let user = {
        long_name: $('input[name="long_name"]').val(),
        short_name: $('input[name="short_name"]').val(),
        director_fio: $('input[name="director_fio"]').val(),
        address: $('input[name="address"]').val(),
        _token: $('meta[name="csrf-token"]').attr('content'),
        user_id: $('input[name="user_id_hid"]').val(),
    };
    $.ajax({
        url: '/api/organization',
        type: "POST",

        data: {long_name: $('input[name="long_name"]').val(),
            short_name: $('input[name="short_name"]').val(),
            director_fio: $('input[name="director_fio"]').val(),
            address: $('input[name="address"]').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
            user_id: $('input[name="user_id_hid"]').val(),},
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },

        success: function (data) {
            let id_org = data['data']['id'];
            mes_right('success', 'Организация успешно добавлена')
            $('.all-organization').append('' +
                '<div class="col-12 mt-2 mb-2">\n' +
                '    <div class="head_organization">\n' +
                '        <div class="row">\n' +
                '            <div class="col-6">\n' +
                '                <h3>'+data['data']['short_name']+'</h3>\n' +
                '            </div>\n' +
                '            <div class="col-6 buttons">\n' +
                '                <span class="add_division" data-id="'+id_org+'"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить подразделение</span>\n' +
                '                <span class="edit_organization" data-id="'+id_org+'"><i class="nav-icon fas fa-edit"></i></span>\n' +
                '                <span class="dell_organization" data-id="'+id_org+'"><i class="fa fa-trash" aria-hidden="true"></i></span>\n' +
                '            </div>\n' +
                '        </div>\n' +
                '    </div>\n' +
                '    <div class="body_organization">\n' +
                '        \n' +
                '    </div>\n' +
                '</div>')
            $('#close_add_organization').trigger('click')
        },
        error: function (msg) {
            mes_right('error', 'Произошла ошибка при добавлении организации')
            $.each(msg['responseJSON']['errors'], function(key, value){
                $('input[name="'+key+'"]').addClass('is-invalid');
                $('input[name="'+key+'"]').after('' +
                    '<span class="invalid-feedback d-block" role="alert">\n' +
                    '   <strong>'+value+'</strong>\n' +
                    '</span>'
                );
            });
        }
    })
})

function asd(){
    alert('asdasd')
}

