
  
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
                               <ul class="list-unstyled">
                                    <li>
                                        <div class="list-item">
                                            
                                            <a data-toggle="collapse" href="#elect_cate" role="button" aria-expanded="false" aria-controls="elect_cate"> أجهزة كهربائية</a>
                                            <i class="fas fa-plug"></i>
                                            <div class="collapse" id="elect_cate">
                                                <div class="elect_sub_list">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">أضف منتج جديد</a></li>
                                                        <li><a href="#">الفئات</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                    <div class="list-item">
                                        
                                        <a data-toggle="collapse" href="#market_cate" role="button" aria-expanded="false" aria-controls="market_cate"> السوق</a>
                                        <i class="fas fa-store-alt"></i>
                                        <div class="collapse" id="market_cate">
                                            <div class="elect_sub_list">
                                                <ul class="list-unstyled">
                                                    <li><a href="#">الفئات</a></li>
                                                    <li><a href="#">أضف منتج جديد</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    </li>

                                    <li>
                                        <div class="list-item">
                                            
                                            <a data-toggle="collapse" href="#sub_elec_cate" role="button" aria-expanded="false" aria-controls="sub_elec_cate"> أجهزة كهربائية</a>
                                            <i class="fas fa-home"></i> 
                                            <div class="collapse" id="sub_elec_cate">
                                                <div class="elect_sub_list">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">الفئات</a></li>
                                                        <li><a href="#">أضف منتج جديد</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                    <div class="list-item">
                                        
                                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> أجهزة كهربائية</a>
                                        <i class="fas fa-home"></i> 
                                        <div class="collapse" id="collapseExample">
                                            <div class="elect_sub_list">
                                                <ul class="list-unstyled">
                                                    <li><a href="#">الفئات</a></li>
                                                    <li><a href="#">أضف منتج جديد</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    </li>
                                   
                               </ul>
                           </div>

                           <div class="close-nav">
                               <span>X</span>
                           </div>

                       </div>

                       <div class="open-nav">
                          <i class="fas fa-bars"></i>
                       </div>
                    </div>

                    <div class="col-lg-10 col-md-9 col-8">
                        <div class="elect_device_container">
                            <label for="prod_name">اسم الصنف</label>
                            <input type="text" class="form-control" id="prod_name" />
                            <label for="prod_desc">الوصف</label>
                            <textarea class="form-control" id="prod_desc"></textarea>
                            <label for="prod_price">سعر الصنف</label>
                            <input type="number" class="form-control" id="prod_price" />
                            <label for="prod_discount">نسبة الخصم </label>
                            <input type="number" class="form-control" id="prod_discount" />
                            <label>صورة المنتج</label>
                            <input type="file"name="files[]" id="file" onchange="readURL(this)"  class="form-control" />
                            <div class="pic_preview">
                                <img id="blah" src="" alt="Upload Product Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <script src="./assests/js/slick.min.js"></script>
    <script src="./assests/js/main.js"></script>

    <script>
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
               
                    var img='<div">'+
                    "<img id='img_src' class='img-thumbnail' src="+"'" +window.URL.createObjectURL(file.files[0])+"'"+">"+
                '</div>';
                img = " "

                $(".pic_preview").append(img);            
            }

        };

        function readURL(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                  
                    $('#blah')
                        .attr('src', e.target.result).appendTo(".pic_preview");
                };

                reader.readAsDataURL(file.files[0]);
            }
        }
       



    </script>
</body>
</html>
