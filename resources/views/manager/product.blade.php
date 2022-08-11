<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/ecommerce/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/9u9qsw5fkrkunglozunm78davpot4bysjklzdd49sd2tuynh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Ecommerce Administration</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"rel="stylesheet">
    <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    
</head>

<body class="skin-default fixed-layout"">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/logoApple2.png" alt="logo" class="light-logo2"></a> -->
                    
                </div>
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
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav"> 
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><b>--- PRODUCTS</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark active" href="{{ route('admin.index') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">All Products</span></a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.add') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Add New Product</span></a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.category.index') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Categories</span></a>
                        </li>
                        <li class="nav-small-cap"><b>--- BLOG</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.blog.index') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Manage</span></a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.blog.add') }}" aria-expanded="false"><i class="fa fa-leaf"></i><span class="hide-menu">Add New Blog</span></a>
                        </li>
                    </ul>
                </nav> 
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home </a></li>
                                <li><i class="fa fa-chevron-right"></i></li>
                                <li class="breadcrumb-item active"> Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
    
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 ">
                            @if (session('msg'))
                                <div class="alert alert-success">{{session('msg')}}</div>
                            @endif
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <a href="{{ route('admin.add') }}" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus-circle"></i> Add New</a>
                                            <form class="form-horizontal pull-right">
                                                <div class="form-group">
                                                    <label>Show : </label>
                                                    <select class="form-control">
                                                        <option>5</option>
                                                        <option>10</option>
                                                        <option>15</option>
                                                        <option>20</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table product-table">
                                        <colgroup>
                                            <col style="with:10px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Product Code</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <!-- <th>Create At</th>
                                                <th>Update At</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($productsList as $product)
                                                <tr>
                                                    <td>{{ $product->id }}</td>
                                                    <td> <img src="images/{{ $product->img_path }}" alt="{{ $product->name }}"></td>
                                                    <td>{{ $product->product_code }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->category_name }}</td>
                                                    <td>{{ $product->quantity }}</td>
                                                    <td>{{ $product->description }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    
                                                    <!-- <td>{{ $product->created_at}}</td>
                                                    <td>{{ $product->updated_at}}</td> -->
                                                    <td>
                                                        <div class="button-group">
                                                            <button type="button" class="btn btn-warning edit" onclick="window.location.href = '{{ route('admin.edit', ['id'=>$product->product_code]) }}'">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            </button>
                                                            <!-- Button trigger modal -->
                                                            {{-- <li><a onclick="return confirm('Are you sure?')" href="{{ route('admin.delete', ['id'=>$product->id]) }}" class="btn btn-danger"><i class="fa fa-times"></i></a></li> --}}
                                                            <button type="button" class="btn btn-primary delete" data-toggle="modal" data-target="#exampleModal" id="{{ $product->product_code }}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </button>
                                                                
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Comfirm Delete</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Are you sure ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary confirm">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries</div>
                                        <div class="col-sm-6 col-xs-6">
                                            <ul class="pagination hidden-xs pull-right">
                                                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Admin by Loi & Nhi
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ecom-dashboard.js') }}"></script>
    <script src="{{ asset('js/deleteconfirm.js') }}"> </script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
</body>
</html>