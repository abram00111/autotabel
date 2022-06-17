@extends('layouts.AdminLte')

@section('title')
    Автотабель
@endsection

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-2" id="show_modal_add_organization" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Добавить организацию
    </button>

    <button type="button" class="btn btn-primary mt-2 d-none" id="show_modal_add_division" data-bs-toggle="modal" data-bs-target="#ModalDivisions">
        Добавить подразделение
    </button>


    <!-- Modal Organization -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавление/редактирование организации</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" >
                        <input type="hidden" name="id_hid_organization">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="long_name">Полное наименование организации</label>
                                <input type="text" class="form-control" id="long_name" name="long_name" placeholder="Сибирский государственный университет науки и технологий имени академика М.Ф. Решетнева">
                            </div>
                            <div class="form-group">
                                <label for="short_name">Краткое наименование организации</label>
                                <input type="text" class="form-control" id="short_name" name="short_name" placeholder="СибГУ им. М.Ф.Решетнева">
                            </div>
                            <div class="form-group">
                                <label for="director_fio">ФИО директора</label>
                                <input type="text" class="form-control" id="director_fio" name="director_fio" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="form-group">
                                <label for="address">Адрес организации</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="г.Красноярск проспект имени Газеты Красноярский Рабочий, 31">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close_add_organization" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary store_or_edit_organization" id="">Сохранить</button>
                </div>
            </div>
        </div>
    </div>



    <!--Modal Divizion-->
    <div class="modal fade" id="ModalDivisions" tabindex="-1" aria-labelledby="ModalDivisionsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalDivisionsLabel">Добавление/редактирование подразделения</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="organization">
                        @csrf
                        <input type="hidden" name="id_parent_division">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="long_name">Организация</label>
                                <input type="text" class="form-control" readonly name="name_parent">
                            </div>
                            <div class="form-group">
                                <label for="name">Полное наименование подразделения</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ДШИ Спутник">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close_add_division" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary store_or_edit_division">Сохранить</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row all-organization">

    </div>
@endsection

@section('script')
    <script src="{{ asset('public/js/authUser.js') }}" defer></script>
@endsection
