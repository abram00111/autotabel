@extends('layouts.AdminLte')

@section('title')
    Автотабель
@endsection

@section('content')
    <div class="row all-organization">
        <div class="col-12 mt-2 mb-2">
            <div class="head_organization">
                <div class="row">
                    <div class="col-12 name_organization">
                        <h5>{{$organization['short_name']}} | <i>{{$division['name']}}</i></h5>
                    </div>
                </div>
            </div>
            <div class="body_organization">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="all_check" checked></th>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Табельный номер</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form action="{{ route('create_tabel') }}" method="POST">
                        @csrf
                        <h4>Выберите работников которых нужно включить в табель, и укажите дату</h4>
                        <p>Составить табель с
                            <input type="date" name="date_start" value="{{date('Y-m-01')}}" required> по
                            <input type="date" name="date_end" value="{{date('Y-m-t')}}" required>
                        </p>
                        <button class="btn btn-primary m-2" name="create_tabel">Создать</button>
                        @foreach($shtats AS $shtat)
                            <tr>
                                <td><input type="checkbox" class="users_id" name="users_id[]" checked value="{{$shtat->id}}">
                                </td>
                                <td>{{$shtat->surname.' '.$shtat->lastname.' '.$shtat->patronymic}}</td>
                                <td>{{$shtat->position}}</td>
                                <td>{{$shtat->timetable}}</td>
                            </tr>
                        @endforeach
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('public/js/tabel.js') }}" defer></script>
@endsection
