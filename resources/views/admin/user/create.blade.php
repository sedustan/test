@extends('admin.layouts.main', ['title' => 'Добавление пользователя'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <row>
                    <div class="w-25">
                        <form method="post" action="{{ route('admin.user.store') }}">
                            @csrf
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите имя пользователя:</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Имя пользователя">
                                    @error('name')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Выберите фото</label>
                                    <input type="text" class="form-control" name="photo"
                                           placeholder="Фото">
                                    @error('photo')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите номер телефона</label>
                                    <input type="tel" class="form-control" name="tel"
                                           placeholder="Номер телефона">
                                    @error('tel')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Выберите дату рождения</label>
                                    <input type="date" class="form-control" name="dateOfBirth"
                                           placeholder="Дата рождения">
                                    @error('dateOfBirth')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите электронную почту пользователя:</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите пароль:</label>
                                    <input type="text" class="form-control" name="password"
                                           placeholder="Пароль">
                                    @error('password')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
