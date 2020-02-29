
@extends('web.layout.app')
@section('content')
<div class="main-wrapper">
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-pb my-account-page mt-30">
            @include('web.layout.error')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Profile</a></li>
                                    <li><a href="login-register.html" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active" id="dashboard">
                                        <h3>Profile </h3>
                                        <div class="col-md-12 pb-30 text-center">
                                            <?php $img = (!empty($user->profile_pic)) ? $user->profile_pic  : 'public/assets/images/no-image.png' ?>
                                        <img style="height: 200px;width: 200px" src="{{ asset($img) }}" onerror="" alt="profile">
                                        <p class="">First Name<br> <strong>{{ $user->f_name }}</strong></p>
                                        <p class="">Last Name<br> <strong>{{ $user->l_name }}</strong></p>
                                        <p class="">Email<br> <strong>{{ $user->email }}</strong></p>
                                        <p class="">Gender<br> <strong>{{ ($user->gender) ? $user->gender : "Not Defined" }}</strong></p>
                                        <p class="">Contact<br> <strong>{{ $user->phone_no }}</strong></p>
                                        <p class="">Country<br> <strong>{{ $user->country }}</strong></p>
                                        <p class="">State<br> <strong>{{ $user->state }}</strong></p>
                                        <p class="">Zip<br> <strong>{{ $user->zip }}</strong></p>
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
    </div>
    <!-- main-content-wrap end -->
</div>    
<script>

    function countryyy(id)
    {
       
        var csrf = '{{csrf_token()}}';
            $.post("{{ route('changeState')}}",{id:id,_token:csrf},function(e){
                 $("#state").html(e);
            });
    }
        window.onload = function()
        {
            @if(Session::has('tab')) 
            $("a[href='#{{ Session::get('tab')}}']").click();
        @endif
        }
     </script>
@endsection

