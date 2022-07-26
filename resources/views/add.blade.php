@extends('layouts.login')


@section('content')




      
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <style>
        .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
        </style>

      <body>
        <form  action="{{url('/insert')}}" method="post">
            @csrf
        <section class="vh-100 gradient-custom">
          <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
              <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                  <div class="card-body">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>
        
                      <div class="row">
                        <div class="col-md-6 mb-4">
        
                          <div class="form-outline">
                            <input type="text" id="firstName"  name="firstname" class="form-control form-control-lg" />
                            <label class="form-label" for="firstName">First Name</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4">
        
                          <div class="form-outline">
                            <input type="text" id="lastName" name="lastname"  class="form-control form-control-lg" />
                            <label class="form-label" for="lastName">Last Name</label>
                          </div>
        
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
        
                          <div class="form-outline datepicker w-95">
                            <input type="date" class="form-control form-control-lg"   name="dob" id="birthdayDate" />
                            <label for="birthdayDate" class="form-label">Birthday</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4">
        
                          <h6 class="mb-2 pb-1">Gender: </h6>
        
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                              value="Female" checked />
                            <label class="form-check-label" for="femaleGender">Female</label>
                          </div>
        
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                              value="male" />
                            <label class="form-check-label" for="maleGender">Male</label>
                          </div>
        
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="otherGender"
                              value="other" />
                            <label class="form-check-label" for="otherGender">Other</label>
                          </div>
        
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Email</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                          </div>
        
                        </div>
                      </div>
        
                      
                      <div>
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                      </div>
        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>

 
    @endsection