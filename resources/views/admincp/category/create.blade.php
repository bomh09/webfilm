@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Thêm danh mục') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label(null, 'Title') !!}
                                {!! Form::text('category_title', null, ['class'=>'form-control', 'placeholder'=>'Title']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Description') !!}
                                {!! Form::textarea('category_desc', null, ['class'=>'form-control', 'placeholder'=>'Description']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label(null, 'Status') !!}
                                {!! Form::select('category_status', ['1'=>'Show', '0'=>'Hide'], null, ['class'=>'form-control custom-select']) !!}
                            </div>
                            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
