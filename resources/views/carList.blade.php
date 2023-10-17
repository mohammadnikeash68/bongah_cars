@extends('layouts.app')
@section('content')

<section id="tables" class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-8 col-md-6 ms-auto">
            <div class="row">
            
              <div class="col-lg-12 col-md-12">
              @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h4 class="text-muted text-center py-3">خودروها</h4>
                <div class="col-lg-12">
                  <div class="row flex flex-row-reverse justify-content-between">
                  <div class="col-lg-4 text-end m-2">
                    <a href="{{route('cars.create')}}" type="button" class="btn btn-success">
                            افزودن خودرو
                    </a>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="search" placeholder="جستجو براساس نام مالک خودرو..." class="form-control"/>
                  </div>
                  </div>
                </div>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>نام خودرو</th>
                      <th> رنگ </th>
                      <th> استان پلاک </th>
                      <th> نام مالک </th>
                      <th> نام خانوادگی مالک </th>
                      <th> تاریخ و ساعت </th>
                      <th>عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 0
                    @endphp
                    @foreach ($res as $val)
                      @php
                        $i++;
                      @endphp
                    
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->color}}</td>
                        <td>{{$val->city_plak}}</td>
                        <td>{{$val->user->name}}</td>
                        <td>{{$val->user->lastname}}</td>
                        <td>{{$val->created_at}}</td>
                        <td class="d-flex">
                        
                          <form action="{{route('cars.destroy',$val)}}" method="post">
                            @csrf
                            @method('delete')
                            <button  class="btn btn-danger btn-sm">
                               حذف
                            </button>
                          </form>
                          <a href="{{route('cars.edit',$val)}}" class="btn btn-success btn-sm">
                            ویرایش
                          </a>
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <!-- <ul class="pagination d-flex justify-content-center">
                  <li class="page-item">
                    <a href="#" class="page-link disabled">
                      <span>&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link active"> 1 </a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link"> 2 </a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link"> 3 </a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">
                      <span>&raquo;</span>
                    </a>
                  </li>
                </ul> -->
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection