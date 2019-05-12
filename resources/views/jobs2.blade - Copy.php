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
   <div class="x_content">         
                    <table id="datatable-responsive" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <
                          <th>Name</th>
                          <th>Category</th>
                          <th>Salary</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($mos as $mo) 
                          <tr>
                            
                            <th>{{$mo->name}}</th>
                            <th>{{$mo->catagory}}</th>
                            <th>{{$mo->salary}}</th>
                            
                            <th><a href="{{route('apply')}}">Apply</a></th>
                        @endforeach
                      </tbody>
                    </table>
          
          
  </div>

        </div>
      <div class="footer">
        <footer>
            <p>Chakri Khujo, Copyright &copy; 2019</p>
        </footer>
      </div>
    
    </body>
    
</html>