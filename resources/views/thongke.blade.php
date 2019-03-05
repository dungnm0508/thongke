<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thống Kê</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('app/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('app/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('app/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('app/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('app/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Thống Kê </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('app/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('app/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('app/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('app/images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('app/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Thống Kê</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <!-- <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li> -->
                            <li class="active">Bảng Thống Kê</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <strong>Thêm</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-inline">
                              <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Tên</label><input type="text" id="input-name" placeholder="Nam Tinh Vi" required="" class="form-control"></div>
                              <div class="form-group">
                                <label for="exampleInputEmail2" class="px-1  form-control-label">Mệnh Giá</label>
                                <select name="selectPrice" id="selectPrice" class="form-control">
                                    <option value="0">500K VNĐ</option>
                                    <option value="1">300K VNĐ</option>
                                    <option value="2">1000K VNĐ</option>
                                    <option value="3">2000K VNĐ</option>
                                    <option value="4">3000K VNĐ</option>
                                    <option value="5">5000K VNĐ</option>
                                    <option value="6">10TR VNĐ</option>
                                    <option value="7">... khác</option>
                                    <option value="8">$</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2" class="px-1  form-control-label">Quan hệ</label>
                                <select name="selectRelation" id="selectRelation" class="form-control">
                                    <option value="0">Biên Phòng</option>
                                    <option value="1">Họ Hàng</option>
                                    <option value="2">Hàng Xóm</option>
                                    <option value="3">Doanh Nghiệp</option>
                                    <option value="4">Bạn bè Bố</option>
                                    <option value="5">Bạn bè Mẹ</option>
                                    <option value="6">Khác...</option>
                                </select>
                            </div>
                            <div class="form-group" style="display: none;" id="input-organ">
                                <label for="exampleInputEmail2" class="px-1  form-control-label">Cơ quan</label>
                                <select name="selectOrgan" id="selectOrgan" class="form-control">
                                    <option value="0">Vui lòng chọn Cơ Quan</option>
                                    <option value="1">Đồn Hữu Nghị</option>
                                    <option value="2">Đồn Tân Thanh</option>
                                    <option value="3">Đồn Bình Nghi</option>
                                    <option value="4">Đồn Na Hình</option>
                                    <option value="5">Đồn Pò Mã</option>
                                    <option value="6">Đồn Chi Ma</option>
                                    <option value="7">Đồn Chi Lăng</option>
                                    <option value="8">Đồn Ba Sơn</option>
                                    <option value="9">Đồn Bắc Sa</option>
                                    <option value="10">Đồn Bảo Lâm</option>
                                    <option value="11">Đồn Thanh Lòa</option>
                                    <option value="12">Bộ chỉ Huy LS</option>
                                    <option value="13">Bộ Tư Lệnh</option>
                                    <option value="14">Học Viện Biên Phòng</option>
                                    <option value="15">Khác...</option>
                                </select>
                            </div>

                          </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" id="btn-submit">
                          <i class="fa fa-dot-circle-o"></i> Gửi
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bảng Thống Kê</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Cơ Quan</th>
                        <th>Mệnh Giá</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                      </tr>
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('app/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('app/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('app/assets/js/plugins.js')}}"></script>
    <script src="{{asset('app/assets/js/main.js')}}"></script>


    <script src="{{asset('app/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('app/assets/js/lib/data-table/datatables-init.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            if($("#selectRelation").val() == 0){
                $("#input-organ").show();
            }

          $('#bootstrap-data-table-export').DataTable();

          $('#btn-submit').on('click',function(){
            console.log($('#input-name').text());
            if($('#input-name').val() == ""){
                console.log('Error!!! required name');
            }else{
                if($("#selectRelation").val() == 0 && $('#selectOrgan').val() == 0){
                    console.log("Error!!! None select");
                }else{
                    console.log('Be able to save');
                }
            }
          });
          $("#selectRelation").change(function(){
              if($("#selectRelation").val() == 0){
                $("#input-organ").show();
              }else{
                $("#input-organ").hide();
              }
          });
        } );
    </script>


</body>
</html>