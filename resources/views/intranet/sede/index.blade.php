@extends('layout.layout')

@section('estilo')

 <!--DataTables [ OPTIONAL ]-->
 <link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}">
 

@endsection

@section('content')
<div id="page-head">
                    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Users</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
</div>


<!--Page content-->
<!--===================================================-->
<div id="page-content">
    
        <!-- Contact Toolbar -->
        <!---------------------------------->
        <div class="row pad-btm">
            <div class="col-sm-6 toolbar-left">
                <button id="demo-btn-addrow" class="btn btn-purple">Add New</button>
                <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
            </div>
            <div class="col-sm-6 toolbar-right text-right">
                Sort by :
                <div class="select">
                    <select id="demo-ease">
                        <option value="date-created" selected="">Date Created</option>
                        <option value="date-modified">Date Modified</option>
                        <option value="frequency-used">Frequency Used</option>
                        <option value="alpabetically">Alpabetically</option>
                        <option value="alpabetically-reversed">Alpabetically Reversed</option>
                    </select>
                </div>
                <button class="btn btn-default">Filter</button>
                <button class="btn btn-primary"><i class="demo-psi-gear icon-lg"></i></button>
            </div>
        </div>
        <!---------------------------------->
    
    
        <div class="row">
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\2.png">
                            <p class="text-lg text-semibold mar-no text-main">Stephen Tran</p>
                            <p class="text-sm">Marketing manager</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\10.png">
                            <p class="text-lg text-semibold mar-no text-main">Brenda Fuller</p>
                            <p class="text-sm">Graphics designer</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\1.png">
                            <p class="text-lg text-semibold mar-no text-main">Aaron Chavez</p>
                            <p class="text-sm">CEO</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\5.png">
                            <p class="text-lg text-semibold mar-no text-main">Donald Brown</p>
                            <p class="text-sm">Programmer</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\9.png">
                            <p class="text-lg text-semibold mar-no text-main">Lucy Moon</p>
                            <p class="text-sm">Frontend Designer</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\4.png">
                            <p class="text-lg text-semibold mar-no text-main">Howard Rios</p>
                            <p class="text-sm">Marketing</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\7.png">
                            <p class="text-lg text-semibold mar-no text-main">Kathryn Obrien</p>
                            <p class="text-sm">Co-CEO</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\8.png">
                            <p class="text-lg text-semibold mar-no text-main">Karen Murray</p>
                            <p class="text-sm">Sales manager</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\8.png">
                            <p class="text-lg text-semibold mar-no text-main">Karen Murray</p>
                            <p class="text-sm">Sales manager</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\2.png">
                            <p class="text-lg text-semibold mar-no text-main">Stephen Tran</p>
                            <p class="text-sm">Marketing manager</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\10.png">
                            <p class="text-lg text-semibold mar-no text-main">Brenda Fuller</p>
                            <p class="text-sm">Graphics designer</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
            <div class="col-sm-4 col-md-3">
    
    
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="pad-all text-center">
                        <div class="widget-control">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="unfavorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="#">
                            <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\5.png">
                            <p class="text-lg text-semibold mar-no text-main">Donald Brown</p>
                            <p class="text-sm">Programmer</p>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        </a>
                        <div class="pad-top btn-groups">
                            <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                            <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                        </div>
                    </div>
                </div>
                <!---------------------------------->
    
    
            </div>
        </div>
    
        
</div>
<!--===================================================-->
<!--End page content-->



@endsection


@section('script')
<script src="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>

<script>
        
$(document).ready(function () {   
    //select 2
        var $disabledResults = $(".sedes");
        $disabledResults.select2();
})
        

var MayusculaGuiones = (valor) => {
	valor.value = valor.value.toUpperCase();
	//valor.value = valor.value.replace(/\s/g,"");
	console.log(valor);

	//javascript:this.value=this.value.toUpperCase();
}
        
</script>

@endsection
