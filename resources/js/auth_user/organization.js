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

async function getAll(){
    $('.all-organization').html('');
    let res = await fetch('/api/organization');
    let organizations = await res.json();
    // $('#example tbody').html('');
    organizations['data'].forEach((organization)=>{
        let divisions = get_division(organization['id']);
        console.log(divisions)
        $('.all-organization').append('' +
            '<div class="col-12 mt-2 mb-2">\n' +
            '    <div class="head_organization">\n' +
            '        <div class="row">\n' +
            '            <div class="col-6 name_organization">\n' +
            '                <h3>'+organization['short_name']+'</h3>\n' +
            '            </div>\n' +
            '            <div class="col-6 buttons">\n' +
            '                <span class="add_divizion" data-id="'+organization['id']+'"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить подразделение</span>\n' +
            '                <span class="edit_organization" data-id="'+organization['id']+'"><i class="nav-icon fas fa-edit"></i></span>\n' +
            '                <span class="dell_organization" data-id="'+organization['id']+'"><i class="fa fa-trash" aria-hidden="true"></i></span>\n' +
            '            </div>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '    <div class="body_organization">\n' +
                    divisions+
            '    </div>\n' +
            '</div>')
        return 'qqq';
    })
    // DataTable();
    // $('.load-table').remove();
}
getAll();

function get_division(id){

    return $.ajax({
        url: '/api/division',
        type: "GET",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {org_id: id},

        success: function (data) {
            let division_html ='';
            data['data'].forEach((division)=>{
                division_html += '' +
                    '<div class="row">\' +\n' +
                    '   <div class="col-6">'+division['name']+'</div>\' +\n' +
                    '   <div class="col-6">\' +\n' +
                    '       <div class="row">\' +\n' +
                    '           <div class="col-5">Создать табель</div>\' +\n' +
                    '           <div class="col-5">Редактировать штат</div>\' +\n' +
                    '           <div class="col-2">\' +\n' +
                    '               <div class="row">\' +\n' +
                    '                   <div class="col-6">Ред</div>\' +\n' +
                    '                   <div class="col-6">Удалить</div>\' +\n' +
                    '               </div>\' +\n' +
                    '           </div>\' +\n' +
                    '       </div>\' +\n' +
                    '   </div>\' +\n' +
                    '</div>\' +';
            })

        },
        error: function (msg) {

        }
    })

}

$('#show_modal_add_organization').click(function (){
    $('input[name="id_hid_organization"]').val('');
    $('.store_or_edit_organization').attr('id', 'store_organization');
    $('input[name="long_name"]').val('')
    $('input[name="short_name"]').val('')
    $('input[name="director_fio"]').val('')
    $('input[name="address"]').val('')
})

//получение массива данных об одной организации
function get_one_org(id){
    $.ajax({
        url: '/api/organization/'+id,
        type: "GET",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },

        success: function (data) {
            $('input[name="long_name"]').val(data['data']['long_name'])
            $('input[name="short_name"]').val(data['data']['short_name'])
            $('input[name="director_fio"]').val(data['data']['director_fio'])
            $('input[name="address"]').val(data['data']['address'])
        },
        error: function (msg) {

        }
    })
}

//добавление организации
$(document).on('click', '#store_organization',async function add_organization(){
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
                '                <span class="add_divizion" data-id="'+id_org+'"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить подразделение</span>\n' +
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

//получение редактируемой организации
$(document).on('click', '.edit_organization',function (){
    $('#show_modal_add_organization').trigger('click');
    $('.store_or_edit_organization').attr('id', 'edit_organization');
    let id = $(this).attr('data-id');
    $('input[name="id_hid_organization"]').val(id);
    get_one_org(id);
})

//сохранение редактируемой организации
$(document).on('click', '#edit_organization',function (){
    let id = $('input[name="id_hid_organization"]').val();

    $.ajax({
        url: '/api/organization/'+id,
        type: "PUT",

        data: {long_name: $('input[name="long_name"]').val(),
            short_name: $('input[name="short_name"]').val(),
            director_fio: $('input[name="director_fio"]').val(),
            address: $('input[name="address"]').val(),
            _token: $('meta[name="csrf-token"]').attr('content')},
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },

        success: function (data) {
            getAll()
            mes_right('success', 'Организация успешно обновлена')
            $('#close_add_organization').trigger('click')
        },
        error: function (msg) {
            mes_right('error', 'Произошла ошибка при редактировании организации')
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


//Удаление организации
$(document).on('click', '.dell_organization',function (){
    let id = $(this).attr('data-id');
    Swal.fire({
        title: 'Вы действительно хотите удалить организацию?',
        text: "Организация, подразделения и работники входящие в нее будут удалены",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Да, удалить!',
        cancelButtonText: 'Отмена'
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).parent().parent().parent().remove();

            $.ajax({
                url: '/api/organization/'+id,
                type: "DELETE",

                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },

                success: function (data) {
                    $('.dell_organization[data-id="'+id+'"]')
                    Swal.fire(
                        'Удалено!',
                        'Организация успешно удалена',
                        'success'
                    )
                },
                error: function (msg) {
                    mes_right('error', 'Произошла ошибка при удалении организации')
                }
            });


        }
    })
})
