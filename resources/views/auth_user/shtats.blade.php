@extends('layouts.AdminLte')

@section('title')
    Штат
@endsection


@section('content')
    @foreach($organizations AS $organization)
        @foreach($organization->division as $division)
            <div class="row all-organization">
                <div class="col-12 mt-2 mb-2">
                    <div class="head_organization">
                        <div class="row">
                            <div class="col-8 name_organization">
                                <h5>{{$organization->short_name}} | <i>{{$division->name}}</i></h5>
                            </div>
                            <div class="col-4 buttons">
                                <a class="btn btn-primary" href="/shtat/{{$division->id}}">Редактировать штат</a>
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
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($division->shtat as $shtat)
                                    <tr>
                                        <td>{{$shtat->id}}</td>
                                        <td>{{$shtat->surname.' '.$shtat->lastname.' '.$shtat->patronymic}}</td>
                                        <td>{{$shtat->position}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach

@endsection

@section('script')
    <script src="{{ asset('public/js/shtat.js') }}" defer></script>
@endsection
