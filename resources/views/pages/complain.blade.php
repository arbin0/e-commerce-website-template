@extends('main')

@section('title', '| Help & Support')

@section('content')

<div class="container">
  <h1>Register Your Complain</h1>
  <br>
  @if(isset($message))
  <div class="alert alert-success">
  <strong>Thankyou!</strong> {{$message}}
  </div>
  @endif
  <form action="/complains" class="needs-validation" novalidate method="POST" style="margin-left: 0px;">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="uname"><h3>Fullname*</h3></label>
      <input type="text" class="form-control"  placeholder="Enter username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>Product*</h3></label>
      <input type="text" class="form-control"  placeholder="E.G Samsung T.V 4k UHD" name="product" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>Model(Optional)</h3></label>
      <input type="text" class="form-control"  placeholder="E.G. Q900 " name="model" >

    </div>


    <div class="form-group">
      <label for="uname"><h3>Phone Number*</h3></label>
      <input type="text" class="form-control"  placeholder="Enter Your Contact Number" name="phone" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>E-mail(Optional)</h3></label>
      <input type="text" class="form-control"  placeholder="Enter Your Email Address" name="email">

    </div>

    <div class="form-group">
      <label for="uname"><h3>Complain*</h3></label>
      <textarea class="form-control"  placeholder="Enter Your Complain" name="complain" required></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br><br>
</div>


<style>


.container {
    max-width: 100%;
}
</style>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>
@endsection
