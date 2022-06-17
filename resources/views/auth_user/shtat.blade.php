@extends('layouts.AdminLte')

@section('title')
    Штат
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
                        <input type="hidden" name="id_hid_organization" value="{{$organization['id']}}">
                        <input type="hidden" name="id_hid_division" value="{{$division['id']}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="surname">Фамилия работника</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Иванов">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Имя работника</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Иван">
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
                                            <input class="form-check-input" type="radio" name="hours_per_week" value="40" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                40 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" value="36" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                36 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" value="24" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                24 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" value="18" id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                18 часов в неделю
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hours_per_week" value="0" id="flexRadioDefault5">
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
                    <button type="button" class="btn btn-secondary" id="close_add_shtat" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary store_or_edit_shtat" id="">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row all-organization">
        <div class="col-12 mt-2 mb-2">
            <div class="head_organization">
                <div class="row">
                    <div class="col-8 name_organization">
                        <h5>{{$organization['short_name']}} | <i>{{$division['name']}}</i></h5>
                    </div>
                    <div class="col-4 buttons">
                        <span class="add_shtat" data-bs-toggle="modal" data-bs-target="#ModalShtate" data-id="54"><i
                                class="fa fa-plus-square" aria-hidden="true"></i> Добавить работника</span>
                    </div>
                </div>
            </div>
            <div class="body_organization">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Табельный номер</th>
                        <th>Ставка</th>
                        <th>Режим работы</th>
                        <th>Часы в неделю</th>
                        <th class="text-center" colspan="2">Редактирование</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shtats AS $shtat)
                        <tr>
                            <td>{{$shtat->id}}</td>
                            <td>{{$shtat->surname.' '.$shtat->lastname.' '.$shtat->patronymic}}</td>
                            <td>{{$shtat->position}}</td>
                            <td>{{$shtat->timetable}}</td>
                            <td>{{$shtat->stake}}</td>
                            <td>{{$shtat->rezgim}}</td>
                            <td>{{$shtat->hours_per_week}}</td>


                            <td class="text-center"><i class="nav-icon fas fa-edit"></i></td>
                            <td class="text-center"><i class="fa fa-trash" aria-hidden="true"></i></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('public/js/shtat.js') }}" defer></script>
@endsection
