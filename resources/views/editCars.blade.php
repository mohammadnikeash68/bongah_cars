@extends('layouts.app')
@section('content')
<section id="add_cars" class="mt-5">
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-md-4"></div>
            <div class="col-md-6 shadow rounded-2 p-2 bg-light">
            @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                
                <h5 class="text-center my-2 mb-4">ویرایش خودرو</h5>
                <form action="{{route('cars.update',$car)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="col-md-12 row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="name_car" value="{{$car->name}}" placeholder="نام خودرو" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="color_car" value="{{$car->color}}" placeholder="رنگ خودرو" class="form-control"/>

                        </div>
                    </div>
                    <div class="col-md-12 row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="city_plak" value="{{$car->city_plak}}" placeholder="استان پلاک خودرو" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <select name="name_malek" class="form-control">
                                <!-- <option value="0" selected disabled>مالک خودرو را انتخاب کنید</option> -->
                                @foreach ($res as $val)

                                    <option value="{{$val->id}}" {{$val->id == $car->user_id ? 'selected' : ''}}>{{$val->name}}</option>
                                    
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-12 row mb-3">
                        <div class="col-md-12 d-grid gap-2">
                            <button type="submit" class="btn btn-success text-center">ویرایش</button> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection