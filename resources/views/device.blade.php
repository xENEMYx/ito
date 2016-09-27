@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $device->device_name }} {{ $device->device_model }}</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="#" class="thumbnail">
                                    <img src="/img/img.png" alt="...">
                                </a>
                            </div>
                            <div class="col-md-7">
                                    <p>{{ $device->category_name }}</p>
                                    <p>{{ $device->device_name }}</p>
                                    <p>{{ $device->device_model }}</p>
                                    <p>{{ $device->serial_number }}</p>
                                    <p>{{ $device->region_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
