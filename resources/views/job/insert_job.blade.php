<!DOCTYPE html>
  <html>
    <head>
      <title></title>
          <link rel="stylesheet" type="text/css" href="../front/css/reg.css">
          <link rel="stylesheet" type="text/css" href="../front/css/apply.css">
    </head>
   
    <body> 
      
        <div class="header">
          <header>
              <div class="container">
                <div id="branding">
                  <h1><span class="highlight">Chakri</span> Khujo</h1>
                </div>
                <nav>
                  <ul>
                    <li class="current"><a href="{{route('welcome2')}}">Home</a></li>
                   <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('service')}}">Services</a></li>
                    <li><a href="{{route('register')}}" target="_blank">Registration</a></li>
                  </ul>
                </nav>			
              </div>
            </header>
        </div>
      <div class="form">
         <form class="form-horizontal form-label-left" method="POST" action="{{ route('store_job') }}">
                      {{ csrf_field() }}
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="name" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                     


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No. </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" pattern="[+]?\d*" name="contact" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="email" name="email" class="form-control" placeholder="">
                        </div>
                      </div>

                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Catagory </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="catagory" class="form-control" placeholder="" required="required">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="salary" class="form-control" placeholder="" required="required">
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Post</button>
                        </div>
                      </div>
                    </form>

        </div>
      <div class="footer">
        <footer>
            <p>Chakri Khujo, Copyright &copy; 2019</p>
        </footer>
      </div>
    
    </body>
    
</html>