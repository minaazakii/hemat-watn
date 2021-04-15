<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assests/css/all.min.css" />
    <link rel="stylesheet" href="assests/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assests/css/slick.css" />
    <link rel="stylesheet" href="assests/css/slick-theme.css" />
    <link rel="stylesheet" href="assests/css/datatables.css">
    <link rel="stylesheet" href="assests/css/style.css" />
    <title>Dash-Board</title>
    <style>
        .dashboard{
            direction: ltr;
        }


    </style>
</head>
<body>

    <div class="dashboard">
        <div class="container-fluid">
            <div class="dash-holder">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-4 custom-col">
                       <div class="side-navbar-cont">

                        <div class="side-navbar-list">

                            <div class="elect_device_collapse">
                                <a class="active" id="list-home-list" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">اجهزة كهربائية</a><i class="fas fa-plug"></i>
                                <div class="collapse" id="collapseExample">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">فئات</a>
                                        <a id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">فئات فرعية</a>
                                        <a id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">منتجات</a>
                                        <a id="list-prod-list" data-toggle="list" href="#list-product" role="tab" aria-controls="product">أضف منتج جديد</a>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <div class="elect_device_collapse">
                                <a class="active" id="list-market-list" data-toggle="collapse" href="#market_list" role="button" aria-expanded="false" aria-controls="collapseExample">السوق</a><i class="fas fa-store-alt"></i>
                                <div class="collapse" id="market_list">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-market-list" data-toggle="list" href="#market_cate" role="tab" aria-controls="home">فئات</a>
                                        <a id="list-market-cat-list" data-toggle="list" href="#market_sub_cate" role="tab" aria-controls="profile">فئات فرعية</a>
                                        <a id="list-market-prod-list" data-toggle="list" href="#market_prod" role="tab" aria-controls="messages">منتجات</a>
                                        <a id="list-market-new-prod-list" data-toggle="list" href="#market_new_prod" role="tab" aria-controls="product">أضف منتج جديد</a>
                                    </div>
                                </div>
                            </div>

                            <br />

                            <div class="elect_device_collapse">
                                <a class="active" id="list-market-list" data-toggle="collapse" href="#offer_list" role="button" aria-expanded="false" aria-controls="collapseExample">عروض وخصومات</a><i class="fas fa-tags"></i>
                                <div class="collapse" id="offer_list">
                                    <div class="list-group sub_list" id="list-tab" role="tablist">
                                        <a id="list-market-list" data-toggle="list" href="#offer_tab" role="tab" aria-controls="home">كل العروض </a>
                                        <a id="list-market-list" data-toggle="list" href="#add_offer_tab" role="tab" aria-controls="home">اضف عرض</a>
                                    </div>
                                </div>
                            </div>




                        </div>


                           <div class="close-nav">
                               <span>X</span>
                           </div>

                       </div> <!-- side navbar container-->

                       <div class="open-nav">
                          <i class="fas fa-bars"></i>
                       </div>

                    </div> <!-- column -->

                    <div class="col-lg-10 col-md-9 col-8 main_tabs">
                        <div class="tab-content"  id="nav-tabContent">
                            <!-- جزء الاجهزة الكهربائية -->

                            <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    إضف فئة جديدة
                                                </button>

                                                <!-- Modal -->
                                                <form action="{{ route('storeCategory') }}" enctype="multipart/form-data" method="POST" >
                                                    @csrf
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <input type="text" name="name" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                <input hidden name="type" value="0">
                                                                <br/>
                                                                <input type="file" name="img_url" class="form-control" id="file" onchange="readURL(this)">

                                                                <div class="pic_preview">
                                                                    <img src="#" id="blah" alt="Preview Image" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($categories as $key=> $category )
                                                            <tr>
                                                                <td>{{ $key+1 }}</td>
                                                                <td>
                                                                    <div>{{ $category->name_ar }}</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="/images/Category/{{ $category->img_url }}" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a href="javascript:void(0)" onclick="showInfo({{ $category->id }})" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                                                            تعديل
                                                                          </a>
                                                                          <td>
                                                                            <div class="delete_btn">
                                                                                <form action="{{ route('deleteCategory',$category->id) }}" method="post">
                                                                                    @csrf
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                          @endforeach
                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <input type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input type="file"  class="form-control" name="files[]" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview2">
                                                                                            <img src="#" id="blah2" alt="" />
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-success">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات -->


                            <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sub_cate_modal">
                                                    إضف فئة فرعية جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="sub_cate_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('storeSubCategory') }}"  enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <input type="text" name="name" class="form-control" placeholder=" أدخل أسم الفئة الفرعية" />
                                                                <input type="hidden" name="type" value="0">
                                                                <br/>
                                                                <div class="dropdown">
                                                                    <a class="btn btn-info dropdown-toggle form-control" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      اختر نوع الفئة
                                                                    </a>

                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                      <a class="dropdown-item" href="#">Action</a>
                                                                      <a class="dropdown-item" href="#">Another action</a>
                                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                  </div>
                                                                  <br/>
                                                                <input type="file" class="form-control"  name="img_url" id="file" onchange="readURL(this)">
                                                                <br />


                                                                <div class="pic_preview">
                                                                    <img src="#" id="blah" alt="Preview Image" />
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th>نوع الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <div>الاسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/baby.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                          نوع الفئة
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                          <a class="dropdown-item" href="#">Action</a>
                                                                          <a class="dropdown-item" href="#">Another action</a>
                                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#sub_editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <input type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input type="file" class="form-control" name="files[]" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview2">
                                                                                            <img src="#" id="blah2" alt="" />
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    <div>اسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/breakfast.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                          نوع الفئة
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                          <a class="dropdown-item" href="#">Action</a>
                                                                          <a class="dropdown-item" href="#">Another action</a>
                                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#sub_editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                  ...
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات الفرعية-->


                            <div class="tab-pane fade " id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12 new_product_container">
                                            <div class="add_cate_btn">
                                                <!-- category Table-->
                                                <div class="prod_table cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch-prod">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم المنتج</th>
                                                            <th>وصف مختصر</th>
                                                            <th>وصف المنتج تفصيلا</th>
                                                            <th>السعر</th>
                                                            <th>السعر بعد الخصم</th>
                                                            <th> صورة اساسية <span class="req">*</span></th>
                                                            <th>صور فرعية</th>
                                                            <th>بلد المنشأ</th>
                                                            <th>الكمية</th>
                                                            <th>مدة الصلاحية</th>
                                                            <th>الحجم</th>
                                                            <th>ملاحظات</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <div>الاسم</div>
                                                                </td>
                                                                <td>
                                                                    <div>وصف مختصر للمنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>وصف كامل للمنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>سعر المنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        السعر بعد الخصم
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div><img src="assests/img/baby.png" /></div>
                                                                </td>
                                                                <td>
                                                                    <div>صور إضافية أختياري</div>
                                                                </td>

                                                                <td>
                                                                    <div>بلد المنشأ</div>
                                                                </td>


                                                                <td>
                                                                    <div>الكمية</div>
                                                                </td>

                                                                <td>
                                                                    تاريخ الصلاحية
                                                                </td>
                                                                <td>
                                                                    <div>حجم العبوة</div>
                                                                </td>
                                                                <td>
                                                                    <div>ملاحظات عن المنتج</div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a type="button" href="#" style="color: #fff;" class="btn btn-warning edit_prod_btn">
                                                                            تعديل
                                                                        </a>

                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                        <div class="col-12 edit-prod-form">
                                            <div class="form">
                                                <div class="row">

                                                    <div class="col-sm-6 col-12">
                                                        <label>إسم المنتج</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>الكمية</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>سعر المنتج</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label> سعر المنتج بعد الخصم</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف مختصر للمنتج</label>
                                                        <textarea class="form-control" required></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صورة اساسية</label>
                                                        <input type="file" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف تفصيلى للمنتج</label>
                                                        <textarea class="form-control" ></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>بلد المنشأ</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>فترة الصلاحية <span>بالشهور</span></label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>حجم العبوة</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>ملاحظات</label>
                                                        <textarea class="form-control" ></textarea>
                                                    </div>
                                                    <br/>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" style="color: #fff;" class="btn btn-warning edit_btn">تعديل منتج</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- المنتجات -->

                            <div class="tab-pane fade " id="list-product" role="tabpanel" aria-labelledby="list-prod-list">
                                <div class="new-product">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">

                                                <div class="col-sm-6 col-12">
                                                    <label>إسم المنتج</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>الكمية</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>سعر المنتج</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label> سعر المنتج بعد الخصم</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف مختصر للمنتج</label>
                                                    <textarea class="form-control" required></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صورة اساسية</label>
                                                    <input type="file" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف تفصيلى للمنتج</label>
                                                    <textarea class="form-control" ></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>بلد المنشأ</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>فترة الصلاحية <span>بالشهور</span></label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>حجم العبوة</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>ملاحظات</label>
                                                    <textarea class="form-control" ></textarea>
                                                </div>
                                                <br/>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-success add_new_btn">أضف منتج</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف منتج جديد -->

                            <!-- market part-->

                            <div class="tab-pane fade " id="market_cate" role="tabpanel" aria-labelledby="list-market-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" aria-labelledby="myModalLabel" data-target="#market_modal">
                                                 إضف فئة جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="market_modal" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <input type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                <br/>
                                                                <input type="file" class="form-control" name="files[]" id="file" onchange="readURL(this)">

                                                                <div class="pic_preview">
                                                                    <img src="#" id="blah" alt="Preview Image" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <div>الاسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/baby.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#market_editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="market_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <input type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input type="file" class="form-control" name="files[]" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview2">
                                                                                            <img src="#" id="blah2" alt="" />
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-success">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    <div>اسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/breakfast.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                  ...
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات -->

                            <div class="tab-pane fade " id="market_sub_cate" role="tabpanel" aria-labelledby="list-market-cat-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="add_cate_btn">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#market_sub_cate_modal">
                                                    إضف فئة فرعية جديدة
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="market_sub_cate_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <input type="text" class="form-control" placeholder=" أدخل أسم الفئة الفرعية" />
                                                                <br/>
                                                                <div class="dropdown">
                                                                    <a class="btn btn-info dropdown-toggle form-control" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      اختر نوع الفئة
                                                                    </a>

                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                      <a class="dropdown-item" href="#">Action</a>
                                                                      <a class="dropdown-item" href="#">Another action</a>
                                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                  </div>
                                                                  <br/>
                                                                <input type="file" class="form-control" name="files[]" id="file" onchange="readURL(this)">
                                                                <br />


                                                                <div class="pic_preview">
                                                                    <img src="#" id="blah" alt="Preview Image" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Save changes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- Modal -->

                                                <!-- category Table-->
                                                <div class="cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم الفئة</th>
                                                            <th>صورة الفئة</th>
                                                            <th>نوع الفئة</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <div>الاسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/baby.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                          نوع الفئة
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                          <a class="dropdown-item" href="#">Action</a>
                                                                          <a class="dropdown-item" href="#">Another action</a>
                                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#market_sub_editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="market_sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <input type="text" class="form-control" placeholder="أدخل أسم الفئة" />
                                                                                        <br/>
                                                                                        <input type="file" class="form-control" name="files[]" id="file" onchange="readURL2(this)">

                                                                                        <div class="pic_preview2">
                                                                                            <img src="#" id="blah2" alt="" />
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-success">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    <div>اسم</div>
                                                                </td>

                                                                <td>
                                                                    <div><img src="assests/img/breakfast.png" /></div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                          نوع الفئة
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                          <a class="dropdown-item" href="#">Action</a>
                                                                          <a class="dropdown-item" href="#">Another action</a>
                                                                          <a class="dropdown-item" href="#">Something else here</a>
                                                                        </div>
                                                                      </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <button type="button" style="color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#sub_editModal">
                                                                            تعديل
                                                                          </button>

                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="sub_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                  ...
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                    </div>
                                </div>
                            </div> <!-- الفئات الفرعية-->

                            <div class="tab-pane fade " id="market_prod" role="tabpanel" aria-labelledby="list-market-prod-list">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-12 new_product_container">
                                            <div class="add_cate_btn">
                                                <!-- category Table-->
                                                <div class="prod_table cate_table_cont table-responsive">
                                                    <table class="table" id="TableSearch-prod">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>أسم المنتج</th>
                                                            <th>وصف مختصر</th>
                                                            <th>وصف المنتج تفصيلا</th>
                                                            <th>السعر</th>
                                                            <th>السعر بعد الخصم</th>
                                                            <th> صورة اساسية <span class="req">*</span></th>
                                                            <th>صور فرعية</th>
                                                            <th>بلد المنشأ</th>
                                                            <th>الكمية</th>
                                                            <th>مدة الصلاحية</th>
                                                            <th>الحجم</th>
                                                            <th>ملاحظات</th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <div>الاسم</div>
                                                                </td>
                                                                <td>
                                                                    <div>وصف مختصر للمنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>وصف كامل للمنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>سعر المنتج</div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        السعر بعد الخصم
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div><img src="assests/img/baby.png" /></div>
                                                                </td>
                                                                <td>
                                                                    <div>صور إضافية أختياري</div>
                                                                </td>

                                                                <td>
                                                                    <div>بلد المنشأ</div>
                                                                </td>


                                                                <td>
                                                                    <div>الكمية</div>
                                                                </td>

                                                                <td>
                                                                    تاريخ الصلاحية
                                                                </td>
                                                                <td>
                                                                    <div>حجم العبوة</div>
                                                                </td>
                                                                <td>
                                                                    <div>ملاحظات عن المنتج</div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <a type="button" href="#" style="color: #fff;" class="btn btn-warning edit_prod_btn">
                                                                            تعديل
                                                                        </a>

                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="delete_btn">
                                                                        <button class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- category Table-->

                                            </div>
                                        </div> <!-- col-12 -->

                                        <div class="col-12 edit-prod-form">
                                            <div class="form">
                                                <div class="row">

                                                    <div class="col-sm-6 col-12">
                                                        <label>إسم المنتج</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>الكمية</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>سعر المنتج</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label> سعر المنتج بعد الخصم</label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف مختصر للمنتج</label>
                                                        <textarea class="form-control" required></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صورة اساسية</label>
                                                        <input type="file" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>أضف صور فرعية</label>
                                                        <input type="file" class="form-control" multiple />
                                                    </div>

                                                    <div class="col-12">
                                                        <label>وصف تفصيلى للمنتج</label>
                                                        <textarea class="form-control" ></textarea>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>بلد المنشأ</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>فترة الصلاحية <span>بالشهور</span></label>
                                                        <input type="number" class="form-control" required/>
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>حجم العبوة</label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>ملاحظات</label>
                                                        <textarea class="form-control" ></textarea>
                                                    </div>
                                                    <br/>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" style="color: #fff;" class="btn btn-warning edit_btn">تعديل منتج</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- المنتجات -->

                            <div class="tab-pane fade " id="market_new_prod" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-product">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">

                                                <div class="col-sm-6 col-12">
                                                    <label>إسم المنتج</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>الكمية</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>سعر المنتج</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label> سعر المنتج بعد الخصم</label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف مختصر للمنتج</label>
                                                    <textarea class="form-control" required></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صورة اساسية</label>
                                                    <input type="file" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>أضف صور فرعية</label>
                                                    <input type="file" class="form-control" multiple />
                                                </div>

                                                <div class="col-12">
                                                    <label>وصف تفصيلى للمنتج</label>
                                                    <textarea class="form-control" ></textarea>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>بلد المنشأ</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>فترة الصلاحية <span>بالشهور</span></label>
                                                    <input type="number" class="form-control" required/>
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>حجم العبوة</label>
                                                    <input type="text" class="form-control" required />
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>ملاحظات</label>
                                                    <textarea class="form-control" ></textarea>
                                                </div>
                                                <br/>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-success add_new_btn">أضف منتج</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف منتج جديد -->

                            <!-- market part-->

                            <!-- offer tabs -->
                            <div class="tab-pane fade " id="offer_tab" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-offer">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive cate_table_cont">
                                                        <table class="table ">
                                                            <thead>
                                                                <th>اسم الصنف</th>
                                                                <th>صورة الصنف</th>
                                                                <th>السعر قبل الخصم</th>
                                                                <th>نسبة الخصم</th>
                                                                <th>السعر بعد الخصم</th>
                                                                <th></th>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div>الاسم</div>
                                                                    </td>
                                                                    <td>
                                                                        <div><img src="assests/img/baby.png" /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>150 $</div>
                                                                    </td>
                                                                    <td>10%</td>
                                                                    <td>135 $</td>
                                                                    <td>
                                                                        <div>
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-warning" style="color:#fff" data-toggle="modal" data-target="#offer_modal">
                                                                                تعديل العرض
                                                                            </button>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="offer_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form>
                                                                                            <div class="row">
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="text" class="form-control" placeholder="اسم الصنف" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" placeholder="السعر الحالى" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" min="0" placeholder="نسبة الخصم %" ظ /> </div><br/>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" placeholder="السعر بعد الخصم" disabled /></div>

                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-success">Save changes</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- كل العروض -->

                            <div class="tab-pane fade show active" id="add_offer_tab" role="tabpanel" aria-labelledby="list-market-new-prod-list">
                                <div class="new-offer">
                                    <div class="container-fluid">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive cate_table_cont">
                                                        <table class="table ">
                                                            <thead>
                                                                <th>اسم الصنف</th>
                                                                <th>صورة الصنف</th>
                                                                <th>السعر</th>
                                                                <th></th>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div>الاسم</div>
                                                                    </td>
                                                                    <td>
                                                                        <div><img src="assests/img/baby.png" /></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>150 $</div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <!-- Button trigger modal -->
                                                                            <button type="button" class="btn btn-warning" style="color:#fff" data-toggle="modal" data-target="#add_offer_modal">
                                                                                اضف العرض
                                                                            </button>

                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="add_offer_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form>
                                                                                            <div class="row">
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="text" class="form-control" placeholder="اسم الصنف" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" placeholder="السعر الحالى" disabled /></div>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" min="0" placeholder="نسبة الخصم %" ظ /> </div><br/>
                                                                                                <div class="offer-inputs col-sm-6 col-12"><input type="number" class="form-control" placeholder="السعر بعد الخصم" disabled /></div>

                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-success">Save changes</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- اضف عرض جديد -->

                            <!-- offer tabs -->
                        </div> <!-- main tab content -->

                    </div>
                </div>

            </div>
        </div>
    </div>










    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <script src="./assests/js/slick.min.js"></script>
    <script src="./assests/js/datatables.js"></script>
    <script src="./assests/js/datatables-bootstrap.js"></script>
    <script src="./assests/js/main.js"></script>

    <script>

        $('table').dataTable({});



        $('.dashboard .dash-holder .side-navbar-cont .close-nav').on('click',function(){
            $('.side-navbar-cont').animate({
                'left':'-550px'
            },350,function () {
                $('.open-nav').css({
                    'display':'block'
                })
            })

        })

        $('.dashboard .dash-holder .open-nav').on('click',function(){
            $('.side-navbar-cont').animate({
                'left':'0px'
            },350)

            $('.open-nav').css({
                    'display':'none'
                })
        })

        function showImage(file){

            if(file.files){
                    img=""
                    var img="<img id='img_src' class='img-thumbnail' src="+"'" +window.URL.createObjectURL(file.files[0])+"'"+">";

                $(".pic_preview").append(img);
            }

        };

        function readURL(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result).appendTo(".pic_preview");
                };

                reader.readAsDataURL(file.files[0]);
            }
        }
        function readURL2(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#blah2')
                        .attr('src', e.target.result).appendTo(".pic_preview2");
                };

                reader.readAsDataURL(file.files[0]);
            }
        }

    </script>

</body>
</html>
