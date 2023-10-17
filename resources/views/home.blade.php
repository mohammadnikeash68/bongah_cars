@extends('layouts.app')
@section('content')
<!-- card content -->
<section id="cardcontent">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-8 col-md-6 ms-auto">
            <div class="row mt-5">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                <div class="card wrap-card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="">
                        <h5 class="text-secondary">فروش</h5>
                        <h5 class="text-secondary">30 میلیون</h5>
                      </div>
                      <i class="fas fa-cart-shopping fa-3x text-warning"></i>
                    </div>
                  </div>
                  <div class="card-footer text-end text-secondary">
                    <i class="fas fa-refresh me-2"></i>
                    <span>به روزرسانی</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                <div class="card wrap-card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="">
                        <h5 class="text-secondary">هزینه</h5>
                        <h5 class="text-secondary">5 میلیون</h5>
                      </div>
                      <i class="fas fa-money-bill fa-3x text-success"></i>
                    </div>
                  </div>
                  <div class="card-footer text-end text-secondary">
                    <i class="fas fa-refresh me-2"></i>
                    <span>به روزرسانی</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                <div class="card wrap-card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="">
                        <h5 class="text-secondary">کاربران</h5>
                        <h5 class="text-secondary">50000</h5>
                      </div>
                      <i class="fas fa-users fa-3x text-info"></i>
                    </div>
                  </div>
                  <div class="card-footer text-end text-secondary">
                    <i class="fas fa-refresh me-2"></i>
                    <span>به روزرسانی</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                <div class="card wrap-card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="">
                        <h5 class="text-secondary">بازدید</h5>
                        <h5 class="text-secondary">15000</h5>
                      </div>
                      <i class="fas fa-chart-line fa-3x text-danger"></i>
                    </div>
                  </div>
                  <div class="card-footer text-end text-secondary">
                    <i class="fas fa-refresh me-2"></i>
                    <span>به روزرسانی</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end card content -->
    <!-- progressbar & task -->
    <section id="progressTask" class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-8 col-md-6 ms-auto">
            <div class="container-fluid">
              <div class="row">
                <!-- progressbar -->
                <div class="col-lg-6 col-md-12 wrap-progressbar bg-dark rounded-3 p-3">
                  <h4 class="text-light">پروژه ها</h4>
                  <div class="item-progress my-3">
                    <span class="text-light mb-2 d-block">کتابخانه آنلاین</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-animated progress-bar-striped bg-success"
                        style="width: 85%">
                        85%
                      </div>
                    </div>
                  </div>
                  <div class="item-progress my-3">
                    <span class="text-light mb-2 d-block">اپلیکشن آنلاین</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-animated progress-bar-striped bg-info" style="width: 25%">
                        25%
                      </div>
                    </div>
                  </div>
                  <div class="item-progress my-3">
                    <span class="text-light mb-2 d-block">وب سرویس</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger" style="width: 50%">
                        50%
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end progressbar -->
                <!-- task -->
                <div class="col-lg-6 col-md-12 wrap-task">
                  <h3 class="text-muted py-3">تسک ها :</h3>
                  <ul class="list-unstyled">
                    <li class="mb-3 bg-light p-3 border-start border-danger border-3 rounded-3">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-1">
                            <input type="checkbox" class="form-check-input" />
                          </div>
                          <div class="col-9">
                            <a class="px-1 text-muted" href="#">آماده کردن سمت بک اند اپلیکشن</a>
                          </div>
                          <div class="col-1">
                            <a class="text-success" href="#"><i class="fas fa-edit"></i></a>
                          </div>
                          <div class="col-1">
                            <a class="text-danger" href="#"><i class="fas fa-trash ms-auto"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="mb-3 bg-light p-3 border-start border-danger border-3 rounded-3">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-1">
                            <input type="checkbox" class="form-check-input" />
                          </div>
                          <div class="col-9">
                            <a class="px-1 text-muted" href="#">آماده کردن سمت بک اند اپلیکشن</a>
                          </div>
                          <div class="col-1">
                            <a class="text-success" href="#"><i class="fas fa-edit"></i></a>
                          </div>
                          <div class="col-1">
                            <a class="text-danger" href="#"><i class="fas fa-trash ms-auto"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="mb-3 bg-light p-3 border-start border-danger border-3 rounded-3">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-1">
                            <input type="checkbox" class="form-check-input" />
                          </div>
                          <div class="col-9">
                            <a class="px-1 text-muted" href="#">آماده کردن سمت بک اند اپلیکشن</a>
                          </div>
                          <div class="col-1">
                            <a class="text-success" href="#"><i class="fas fa-edit"></i></a>
                          </div>
                          <div class="col-1">
                            <a class="text-danger" href="#"><i class="fas fa-trash ms-auto"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- end task -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end progressbar & task -->
    <!-- tables -->
    <section id="tables" class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-8 col-md-6 ms-auto">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <h4 class="text-muted text-center py-3">پرداختی ها</h4>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>نام</th>
                      <th>مبلغ</th>
                      <th>تاریخ</th>
                      <th>وضعیت</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>محمد</td>
                      <td>5 میلیون</td>
                      <td>11 تیر</td>
                      <td>
                        <button type="button" class="btn btn-danger btn-sm">
                          رد شده
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>علی</td>
                      <td>5 هزار</td>
                      <td>20 مرداد</td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm">
                          پرداخت شده
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <ul class="pagination d-flex justify-content-center">
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
                </ul>
              </div>
              <div class="col-lg-6 col-md-12">
                <h4 class="text-muted text-center py-3">تیکت های اخیر</h4>
                <table class="table table-light table-striped text-muted rounded-3">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>نام</th>
                      <th>تاریخ</th>
                      <th>عملیات</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>محمد</td>
                      <td>11 تیر</td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm text-light">
                          پاسخ
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>محمد</td>
                      <td>11 تیر</td>
                      <td>
                        <button type="button" class="btn btn-info btn-sm text-light">
                          پاسخ
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <ul class="pagination d-flex justify-content-center">
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
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end tables -->
    <!-- accordion | works accently & new post -->
    <section id="accordionWorksNewpost" class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-8 col-md-6 ms-auto">
            <div class="row">
              <!-- accordion -->
              <div class="col-lg-7 col-md-12">
                <h4 class="text-muted py-3">فعالیت های اخیر</h4>
                <div class="accordion" id="parentAccordion">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button bg-light" data-bs-toggle="collapse"
                        data-bs-target="#myaccordionone">
                        <img src="assets/image/avatar-s-23.jpg" width="50px" class="rounded-3" />
                        <span class="mx-3 text-muted">محمد یک گفتگو جدید ایجاد کرد</span>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="myaccordionone" data-bs-parent="#parentAccordion">
                      <div class="accordion-body">
                        <p>لورم ایپسوم این یک متن ساختگی می باشد</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button bg-light" data-bs-toggle="collapse"
                        data-bs-target="#myaccordiontwo">
                        <img src="assets/image/avatar-s-23.jpg" width="50px" class="rounded-3" />
                        <span class="mx-3 text-muted">محمد یک گفتگو جدید ایجاد کرد</span>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="myaccordiontwo" data-bs-parent="#parentAccordion">
                      <div class="accordion-body">
                        <p>لورم ایپسوم این یک متن ساختگی می باشد</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button bg-light" data-bs-toggle="collapse"
                        data-bs-target="#myaccordionthree">
                        <img src="assets/image/avatar-s-23.jpg" width="50px" class="rounded-3" />
                        <span class="mx-3 text-muted">محمد یک گفتگو جدید ایجاد کرد</span>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="myaccordionthree" data-bs-parent="#parentAccordion">
                      <div class="accordion-body">
                        <p>لورم ایپسوم این یک متن ساختگی می باشد</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button type="button" class="accordion-button bg-light" data-bs-toggle="collapse"
                        data-bs-target="#myaccordionfoure">
                        <img src="assets/image/avatar-s-23.jpg" width="50px" class="rounded-3" />
                        <span class="mx-3 text-muted">محمد یک گفتگو جدید ایجاد کرد</span>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="myaccordionfoure" data-bs-parent="#parentAccordion">
                      <div class="accordion-body">
                        <p>لورم ایپسوم این یک متن ساختگی می باشد</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end accordion -->
              <!-- new post -->
              <div class="col-lg-5 col-md-12 mt-5">
                <div class="bg-light mt-4 p-4">
                  <h5 class="text-muted text-center">پست جدید</h5>
                  <div class="d-flex justify-content-center mt-3">
                    <a href="#" class="mx-3 text-muted">
                      <i class="fas fa-pencil text-success"></i>
                      <span>وضعیت</span>
                    </a>
                    <a href="#" class="mx-3 text-muted">
                      <i class="fas fa-camera text-info"></i>
                      <span>تصویر</span>
                    </a>
                    <a href="#" class="mx-3 text-muted">
                      <i class="fas fa-location text-danger"></i>
                      <span>مکان</span>
                    </a>
                  </div>
                  <form class="my-3">
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="یه چیزی بنویس..." />
                    </div>
                    <div class="mb-3 d-grid gap-5">
                      <button type="button" class="btn btn-info text-light">
                        ارسال
                      </button>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-6">
                      <div class="bg-secondary bg-opacity-10 text-center d-flex flex-column align-items-center p-3">
                        <i class="fas fa-calendar-alt text-warning fa-3x"></i>
                        <span class="my-3">سه شنبه 17 تیر</span>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-secondary bg-opacity-10 text-center d-flex flex-column align-items-center p-3">
                        <i class="fas fa-clock text-warning fa-3x"></i>
                        <span class="my-3">9:30 صبح</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end new post -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end accordion | works accently & new post -->
    @endsection