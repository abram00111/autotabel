@extends('layouts.AdminLte')

@section('title')
    Автотабель
@endsection

@section('content')
    <div class="row all-organization">
        <div class="col-12 mt-2 mb-2">
            <div class="head_organization">
                <div class="row">
                    <div class="col-8 name_organization">
                        <h5>РДШИ | <i>ДШИ Спутник</i></h5>
                    </div>
                    <div class="col-4 buttons">
                        <a class="btn btn-primary" href="/shtat/3">Редактировать штат</a>
                    </div>
                </div>
            </div>
            <div class="body_organization">
                <div class="row">
                    <div class="col-12">Иванов Иван Иванович</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('public/js/shtat.js') }}" defer></script>
@endsection
