@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Danh sách quốc gia') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('STT') }}</th>
                                        <th scope="col">{{ __('Tên quốc gia') }}</th>
                                        <th scope="col">{{ __('Mô tả') }}</th>
                                        <th scope="col">{{ __('Trạng thái') }}</th>
                                        <th scope="col">{{ __('Quản lý') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp
                                    @foreach ($list as $key => $value)
                                        @php $i++; @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->description }}</td>
                                            <td>
                                                @if ($value->status == 1)
                                                    {{ __('Hiển thị') }}
                                                @else
                                                    {{ __('Ẩn') }}
                                                @endif
                                            </td>
                                            <td>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['country.destroy', $value->id], 'id' => 'del-cate', 'onsubmit'=>'return confirm("Bạn có muốn xóa quốc gia này không?")']) !!}
                                                {!! Form::submit('Xoá', ['class' => 'btn btn-danger']) !!}
                                                <a href="{{route('country.edit', $value->id)}}" class="btn btn-success">{{ __('Sửa')}}</a>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
