@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Оборудование</div>

                <div class="panel-body">
                    <form action="search" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Выбирите объект:</label>
                            <select class="form-control" name="region">
                                @foreach ($regions as $region)
                                    <option> {{ $region->region_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Выбирите категорию:</label>
                            <select class="form-control" name="category">
                                @foreach ($categories as $category)
                                    <option> {{ $category->category_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if(isset($devices))
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td class="info">Категория</td>
                        <td class="info">Фирма</td>
                        <td class="info">Модель</td>
                        <td class="info">Серийный номер</td>
                        <td class="info">Объект</td>
                    </tr>
                    @foreach ($devices as $device)
                        <tr>
                            <td class="active">{{ $device->category_name }}</td>
                            <td class="active"><a href="device/{{ $device->id }}">{{ $device->device_name }}</a></td>
                            <td class="active">{{ $device->device_model }}</td>
                            <td class="active">{{ $device->serial_number }}</td>
                            <td class="active">{{ $device->region_name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
