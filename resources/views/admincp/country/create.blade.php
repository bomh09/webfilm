@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if(!isset($country))
                            {{ __('Thêm quốc gia') }}
                        @else
                            {{ __('Sửa quốc gia') }}
                        @endif
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(!isset($country))
                            {!! Form::open(['route' => 'country.store', 'method' => 'POST']) !!}
                        @else
                            {!! Form::open(['route' => ['country.update', $country->id], 'method' => 'PUT']) !!}
                        @endif
                            <div class="form-group">
                                {!! Form::label(null, 'Tên quốc gia') !!}
                                {!! Form::text('country_title', isset($country) ? $country->title : "", ['class'=>'form-control slug', 'placeholder'=>'Tên quốc gia']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Slug') !!}
                                {!! Form::text('country_slug', isset($country) ? $country->slug : "", ['class'=>'form-control convert-slug', 'placeholder'=>'Slug']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Mô tả') !!}
                                {!! Form::textarea('country_desc', isset($country) ? $country->description : "", ['class'=>'form-control', 'placeholder'=>'Mô tả']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Trạng thái') !!}
                                {!! Form::select('country_status', ['1'=>'Hiển thị', '0'=>'Ẩn'], isset($country) ? $country->status : 1, ['class'=>'form-control custom-select']) !!}
                            </div>
                            @if(!isset($country))
                                {!! Form::submit('Thêm quốc gia', ['class' => 'btn btn-primary']) !!}
                            @else
                                {!! Form::submit('Sửa quốc gia', ['class' => 'btn btn-primary']) !!}
                            @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
