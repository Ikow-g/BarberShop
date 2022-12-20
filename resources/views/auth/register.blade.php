<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link href="assets/css/login-style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script
      data-search-pseudo-elements=""
      defer=""
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <!-- Basic registration form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header justify-content-center">
                    <h3 class="font-weight-light my-4">Create Account</h3>
                  </div>
                  <div class="card-body">
                    <!-- Registration form-->
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <!-- Form Row-->
                      <div class="form-row">
                        {{-- <div class="col-md-6">
                          <div class="form-group">
                            <label for="role">Role</label
                            ><select
                              class="form-control"
                              id="role" name="role"
                            >
                              <option>Customer</option>
                              <option>Barber</option>
                              <option>Admin</option>
                            </select>
                          </div>
                        </div> --}}
                        <div class="col-md-6">
                          <!-- Form Group (first name)-->
                          <div class="form-group">
                            <label class="small mb-1" for="fname"
                              >First Name</label
                            >
                            <input
                              class="form-control py-4" 
                              placeholder="Enter first name"
                              id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus
                            />
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- Form Group (last name)-->
                          <div class="form-group">
                            <label class="small mb-1" for="lname"
                              >Last Name</label
                            >
                            <input
                              class="form-control py-4"
                              placeholder="Enter last name"
                              id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus
                            />
                            @error('lname')
                              <span class="invalid-feedback" role="alert">    
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <!-- Form Group (email address)            -->
                      <div class="form-group">
                        <label class="small mb-1" for="email"
                          >Email</label
                        >
                        <input
                          class="form-control py-4"
                          aria-describedby="emailHelp"
                          placeholder="Enter email address"
                          id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                        />
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <!-- Form Row    -->
                      <div class="form-row">
                        <div class="col-md-6">
                          <!-- Form Group (password)-->
                          <div class="form-group">
                            <label class="small mb-1" for="password"
                              >Password</label
                            >
                            <input
                              class="form-control py-4"
                              placeholder="Enter password"
                              id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                            />
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- Form Group (confirm password)-->
                          <div class="form-group">
                            <label class="small mb-1" for="password-confirm"
                              >Confirm Password</label
                            >
                            <input
                              class="form-control py-4"
                              placeholder="Confirm password"
                              id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- Form Group (create account submit)-->
                      <div class="form-group mt-4 mb-0">
                        <input class="btn btn-primary btn-block" type="submit" value="Create Account">
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center">
                    <div class="small">
                      <a href="/login">Have an account? Go to login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="footer mt-auto footer-dark">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 small">Copyright &#xA9; D'Barbershop</div>
              <div class="col-md-6 text-md-right small">
                <a href="#!">Privacy Policy</a>
                &#xB7;
                <a href="#!">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/login-scripts.js"></script>

    <script src="assets/js/sb-customizer.js"></script>
    <!-- <sb-customizer project="sb-admin-pro"></sb-customizer> -->
  </body>
</html>
