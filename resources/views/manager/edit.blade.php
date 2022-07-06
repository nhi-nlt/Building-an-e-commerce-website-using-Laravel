<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/ecommerce/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"> -->
    <title>Ecommerce Administration</title>
    <!-- chartist CSS -->
    <!-- <link href="css/morris.css" rel="stylesheet"> -->
    <!-- <link href="css/ecommerce.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/logoApple2.png" alt="logo" class="light-logo2"></a> -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <a class="navbar-brand" href="{{ route('admin.index') }}"><img src="{{ asset('images/logoApple2.png') }}" alt="logo" class="light-logo2"></a>
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a> </li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav"> 
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><b>--- PRODUCTS</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.index') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Data Tables</span></a>
                        </li>
                        <li class="nav-small-cap"><b>--- BLOG</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.blog.index') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Manage</span></a>
                        </li>
                    </ul>
                </nav> 
            </div>
        </aside>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edition Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home </a></li>
                                <li><i class="fa fa-chevron-right"></i></li>
                                <li class="breadcrumb-item active"> Edition</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    @if (session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">Error Data Format</div>
                    @endif
                    <form action="{{ route('admin.post-edit') }}" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="{{ route('admin.post-add')}}">Product ID</label>
                                    <input type="text" class="form-control" name="product_id" placeholder="Product ID..." value="{{old('id')?? $productDetail->product_id}}">
                                    @error('id')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="{{ route('admin.post-add')}}">Product Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Product Name..." value="{{old('name')?? $productDetail->name}}">
                                    @error('name')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Price..."  value="{{old('price')?? $productDetail->price}}">
                                    @error('price')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="">Category</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach ($categoriesList as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>                                   
                                    @error('category')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="">Desciption</label>
                                    <input type="textarea" class="form-control" name="description" placeholder="Description..."  value="{{old('description')?? $productDetail->description}}">
                                    @error('description')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity..."  value="{{old('quantity')?? $productDetail->quantity}}">
                                    @error('quantity')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="">Image</label>
                                    <input type="text" class="form-control mb-1" name="img_path" placeholder="File Name..." id="filename"  value="{{ $productDetail->img_path }}">
                                    <button type="button" class="btn btn-primary mb-1" id="browse" >Browse</button>
                                    <input type="file" class="form-control mb-1" name="img_path" id="img_path" style="display: none"><br>
                                    <img id="preview-image" src="../../../images/{{ $productDetail->img_path }}" alt="preview image" style="max-height: 250px;">
                                    @error('img_path')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.index') }}" class="btn btn-warning">Home</a>
                            </div>
                        <!-- </div> -->
                        @csrf
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Admid by Loi & Nhi
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ecom-dashboard.js') }}"></script>
    <script type="text/javascript">
        $('#img_path').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#preview-image').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
       });
       $('#browse').on('click', function(){
            let display =  $('#img_path').css('display');
            if(display == 'none')
            {
                $('#img_path').attr("style", "display:block");
            }
            if(display == 'block')
            {
                $('#img_path').attr("style", "display:none");
            }
       });
        $('select option[value={{$productDetail->id}}]').attr("selected",true);
      </script>
    
</body>
</html>