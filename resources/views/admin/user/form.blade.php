@extends('layouts.admin')
@section('content')
@if (isset($record))
<form method="POST" action="{{route('admin.user.update',$record->id)}}">
    @method('PUT')
@else
<form method="POST" action="{{route('admin.user.store')}}">
@endif
    @csrf
    <div class="content">
        <div class="d-flex align-items-start flex-column flex-md-row">
            <div class="w-100 overflow-auto order-2 order-md-1">
				<div class="card">
					<div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold">Tên <span class="required"></span></label>
                            <input type="text" class="form-control" required id="name" name="name" value="{{ old('name') ?: ($record->name ?? '') }}">
                            @error('name')
                            <label id="title-error" class="validation-invalid-label" for="name">{{$message}}</label>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold">Email <span class="required"></span></label>
                            @if(isset($record))
                            <input type="email" class="form-control" disabled readonly value="{{ old('email') ?: ($record->email ?? '') }}">
                            @else
                            <input type="email" class="form-control" required id="email" name="email" value="{{ old('email') ?: ($record->email ?? '') }}">
                            @error('email')
                            <label id="email-error" class="validation-invalid-label" for="email">{{$message}}</label>
                            @endif
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Lưu <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
				</div>
            </div>
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">
                <div class="sidebar-content">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="form-check form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" {{isset($record) && $record->status == 1 ? 'checked' : ''}} name="status" value="1" checked data-fouc>
                                    Hoạt động
                                </label>
                            </div>

                            <div class="form-check form-check-inline disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" {{isset($record) && $record->status == 0 ? 'checked' : ''}} name="status" value="0" data-fouc>
                                    Khóa
                                </label>
                            </div>	
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold">Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection