@extends('admin.layout.app')

@section('title', 'Пользователи')

@section('content-title', 'Пользователи')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-sm-12 col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-primary waves-effect">Новый пользователь</a>

                            <div class="row mt-2">
                                <div class="col-12">
                                    @includeIf('admin.users.filter')
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ФИО</th>
                                        <th>Email</th>
                                        <th>Аккаунт</th>
                                        <th>Зарегистрирован</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td><span class="badge rounded-pill badge-success me-1">{{ $user->status }}</span></td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-dark btn-sm waves-effect">Редактировать</button>
                                                <a href="#" class="btn btn-outline-danger btn-sm waves-effect">Удалить</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>ФИО</th>
                                        <th>Email</th>
                                        <th>Аккаунт</th>
                                        <th>Зарегистрирован</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
    </script>
@endsection
