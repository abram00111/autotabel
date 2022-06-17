@extends('layouts.AdminLte')

@section('title')
    Автотабель
@endsection

@section('content')
    <div class="modal fade" id="ModalShtate" tabindex="-1" aria-labelledby="ModalShtateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalShtateLabel">Добавление/редактирование работника</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" >
                        <input type="hidden" name="id_hid_organization">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="surname">Фамилия работника</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Иванов">
                            </div>
                            <div class="form-group">
                                <label for="long_name">Имя работника</label>
                                <input type="text" class="form-control" id="long_name" name="long_name" placeholder="Иван">
                            </div>
                            <div class="form-group">
                                <label for="patronymic">Отчество работника</label>
                                <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Иванович">
                            </div>
                            <div class="form-group">
                                <label for="position">Должность</label>
                                <input type="text" class="form-control" id="position" name="position" placeholder="Преподаватель">
                            </div>
                            <div class="form-group">
                                <label for="stake">Ставка</label>
                                <input type="text" class="form-control" id="stake" name="stake" placeholder="1">
                            </div>
                            <div class="form-group">
                                <label for="timetable">Табельный номер</label>
                                <input type="text" class="form-control" id="timetable" name="timetable" placeholder="99">
                            </div>
                            <div class="form-group">
                                <label for="dinner">Обед (часы)</label>
                                <input type="text" class="form-control" id="dinner" name="dinner" placeholder="1.5">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="address">Норма времени</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                40 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                36 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                24 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                18 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" id="flexRadioDefault5">
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Использовать свое расписание
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6 div_chas_v_nedely">
                                    <div class="form-group">
                                        <label for="address">Часы работы</label>
                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Понедельник</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="mo" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Вторник</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="to" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Среда</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="we" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Четверг</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="th" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Пятница</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="fr" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Суббота</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="sa" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <p class="name-day">Воскресенье</p>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control chas_v_nedely" name="su" placeholder="0">
                                            </div>
                                            <div class="col-1">
                                                <p>ч.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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

    <div class="row all-organization">
        <div class="col-12 mt-2 mb-2">
            <div class="head_organization">
                <div class="row">
                    <div class="col-8 name_organization">
                        <h5>РДШИ | <i>ДШИ Спутник</i></h5>
                    </div>
                    <div class="col-4 buttons">
                        <span class="add_division" data-bs-toggle="modal" data-bs-target="#ModalShtate" data-id="54"><i
                                class="fa fa-plus-square" aria-hidden="true"></i> Добавить работника</span>
                    </div>
                </div>
            </div>
            <div class="body_organization">
                <div class="row">
                    <div class="col-10">Иванов Иван Иванович</div>
                    <div class="col-2 text-right">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3 edit-division" data-id="3">
                                        <i class="nav-icon fas fa-edit"></i>
                                    </div>
                                    <div class="col-3 del-division" data-id="3">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('public/js/shtat.js') }}" defer></script>
@endsection
