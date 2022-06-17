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

$('input[name="hours_per_week"]').change(function (){
    if($(this).attr('id') == 'flexRadioDefault5'){
        $('.div_chas_v_nedely').fadeIn()
    }else{
        $('.div_chas_v_nedely').fadeOut()
    }
})

//_____________Сотрудники______________
//Открытие модального окна при добавлении подразделения
$(document).on('click', '.add_shtat',function () {
    $('.store_or_edit_shtat').attr('id', 'store_shtat')
})

//добавление сотрудника
$(document).on('click', '#store_shtat',async function add_shtat(){
    $('.is-invalid').removeClass('is-invalid');
    $('.invalid-feedback').remove();

    $.ajax({
        url: '/api/state',
        type: "POST",

        data: {
            organization_id : $('input[name="id_hid_organization"]').val(),
            division_id : $('input[name="id_hid_division"]').val(),
            user_id : $('input[name="user_id_hid"]').val(),
            surname: $('input[name="surname"]').val(),
            lastname: $('input[name="lastname"]').val(),
            patronymic: $('input[name="patronymic"]').val(),
            position: $('input[name="position"]').val(),
            stake: $('input[name="stake"]').val(),
            timetable: $('input[name="timetable"]').val(),
            dinner: $('input[name="dinner"]').val(),
            hours_per_week: $('input[name="hours_per_week"]:checked').val(),
            mo: $('input[name="mo"]').val(),
            to: $('input[name="to"]').val(),
            we: $('input[name="we"]').val(),
            th: $('input[name="th"]').val(),
            fr: $('input[name="fr"]').val(),
            sa: $('input[name="sa"]').val(),
            su: $('input[name="su"]').val(),
        },
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },

        success: function (data) {
            console.log(data)
            mes_right('success', 'Работник успешно добавлен')
            $('#close_add_shtat').trigger('click')
        },
        error: function (msg) {

            mes_right('error', 'Произошла ошибка при добавлении работника')
            $.each(msg['responseJSON']['errors'], function(key, value){
                console.log(key+' '+value);
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
