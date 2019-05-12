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
   <div class="x_content" style="display: flex; width: 100%; justify-content: center">         
                    <div style="display: flex; flex-direction: column; width: 500px">
                          @foreach ($mos as $mo) 
                          <div style="display: flex; flex-direction: column; background-color: #ddd; border: 1px solid black; padding: 10px; margin: 10px 0; width: 500px">
                            <span>Company Name: {{$mo->name}}</span>
                            <span>Category: {{$mo->catagory}}</span>
                            <span>Salary: {{$mo->salary}}</span>
      
                            <a href="{{route('apply')}}">Apply</a>
                          </div>
                          @endforeach
                    </div>
          
          
  </div>

        </div>
      <div class="footer">
        <footer>
            
        </footer>
      </div>
    
    </body>
    
</html>
