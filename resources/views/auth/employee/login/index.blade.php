@extends('layouts.app-master')
@section('title', 'Employee Login - Foundation Polytechnic, Ikot Ekpene')

@section('content')
<body style="height:100vh;overflow-y:auto;" class="d-flex flex-column">
    <div class="form-body">
        <div class="row">

            <div class="form-holder">
                <div class="aa"></div>
                <div class="bb"></div>

                <div class="form-content h-100">
                    <div class="form-items card" style="z-index:100">
                        <img class="logo-size card-img-top w-auto" src="../image/logo.png" height="100" alt="">
                        <div class="card-header d-flex flex-wrap">
                            <a href="/" style="z-index: 3;" class="btn p-2 btn-outline-primary mr-auto d-inline-flex align-items-center"><i class="fas fa-home fa-2x" title="home"></i></a><h2 class="mr-auto">Employee Login</h2><div class="ml-auto"></div>
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ route('employee.perform') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email Address" required id="txtemail" name="email" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" required id="txtpassword" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="form-button d-flex flex-wrap">
                                    <button name="btnlogin" type="submit" class="btn btn-dark">Login</button>
                                </div>
                                <div>
                                    <p>Not an Employee Yet? <a href="/account/registration">Register Here</a></p>
                                </div>
                            </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>




<link rel="stylesheet" href="../css/popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
<h3 class="popup__content__title">
  <strong>Success</strong>
</h1>
<p><?php echo $_SESSION['success']; ?></p>
<p>
  <button class="button button--success" data-for="js_success-popup">Close</button>
</p>
</div>
</div>
<?php unset($_SESSION["success"]);
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
<h3 class="popup__content__title">
  <strong>Error</strong>
</h1>
<p><?php echo $_SESSION['error']; ?></p>
<p>
  <button class="button button--error" data-for="js_error-popup">Close</button>
</p>
</div>
</div>
<?php unset($_SESSION["error"]);  } ?>
<script>
  var addButtonTrigger = function addButtonTrigger(el) {
el.addEventListener('click', function () {
var popupEl = document.querySelector('.' + el.dataset.for);
popupEl.classList.toggle('popup--visible');
});
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
</script>

</body>
@endsection
