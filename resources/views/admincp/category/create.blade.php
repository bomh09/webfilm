@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if(!isset($category))
                            {{ __('Thêm danh mục') }}
                        @else
                            {{ __('Sửa danh mục') }}
                        @endif
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(!isset($category))
                            {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
                        @else
                            {!! Form::open(['route' => ['category.update', $category->id], 'method' => 'PUT']) !!}
                        @endif
                            <div class="form-group">
                                {!! Form::label(null, 'Tên danh mục') !!}
                                {!! Form::text('category_title', isset($category) ? $category->title : "", ['class'=>'form-control', 'placeholder'=>'Title']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Mô tả') !!}
                                {!! Form::textarea('category_desc', isset($category) ? $category->description : "", ['class'=>'form-control', 'placeholder'=>'Description']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Trạng thái') !!}
                                {!! Form::select('category_status', ['1'=>'Hiển thị', '0'=>'Ẩn'], isset($category) ? $category->status : 1, ['class'=>'form-control custom-select']) !!}
                            </div>
                            @if(!isset($category))
                                {!! Form::submit('Thêm danh mục', ['class' => 'btn btn-primary']) !!}
                            @else
                                {!! Form::submit('Sửa danh mục', ['class' => 'btn btn-primary']) !!}
                            @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
