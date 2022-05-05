@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if(!isset($genre))
                            {{ __('Thêm thể loại') }}
                        @else
                            {{ __('Sửa thể loại') }}
                        @endif
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(!isset($genre))
                            {!! Form::open(['route' => 'genre.store', 'method' => 'POST']) !!}
                        @else
                            {!! Form::open(['route' => ['genre.update', $genre->id], 'method' => 'PUT']) !!}
                        @endif
                            <div class="form-group">
                                {!! Form::label(null, 'Tên thể loại') !!}
                                {!! Form::text('genre_title', isset($genre) ? $genre->title : "", ['class'=>'form-control slug', 'placeholder'=>'Tên thể loại']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Slug') !!}
                                {!! Form::text('genre_slug', isset($genre) ? $genre->slug : "", ['class'=>'form-control convert-slug', 'placeholder'=>'Slug']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Mô tả') !!}
                                {!! Form::textarea('genre_desc', isset($genre) ? $genre->description : "", ['class'=>'form-control', 'placeholder'=>'Mô tả']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Trạng thái') !!}
                                {!! Form::select('genre_status', ['1'=>'Hiển thị', '0'=>'Ẩn'], isset($genre) ? $genre->status : 1, ['class'=>'form-control custom-select']) !!}
                            </div>
                            @if(!isset($genre))
                                {!! Form::submit('Thêm thể loại', ['class' => 'btn btn-primary']) !!}
                            @else
                                {!! Form::submit('Sửa thể loại', ['class' => 'btn btn-primary']) !!}
                            @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
