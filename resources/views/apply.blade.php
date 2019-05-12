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
                    <li><a href="{{route('welcome2')}}">Home</a></li>
                   <li><a href="{{route('about')}}">About</a></li>
                   <li><a href="{{route('service')}}">Service</a></li>
                   <li> <a href="{{ route('register') }}">  Register</a></li>
                   
                  </ul>
                </nav>			
              </div>
            </header>
        </div>
      <div class="form">
        <form class="registration" method="post">
          <label class="pure-material-textfield-outlined">
            <input placeholder=" " type="name" required>
            <span>Name</span>
          </label>

          <label class="pure-material-textfield-outlined">
            <input placeholder=" " type="name" required>
            <span>University</span>
          </label>

          <label class="pure-material-textfield-outlined">
            <input placeholder=" " type="number" required>
            <span>CGPA</span>
          </label>

          <label class="pure-material-textfield-outlined">
            <input placeholder=" " type="date" required>
            <span>BSC Pass Year</span>
          </label>

          <label class="pure-material-textfield-outlined">    
            <input placeholder=" " type="email" required>
            <span>Email</span>
          </label>

          <button class="pure-material-button-contained" type="submit">Apply</button>

          </form>
        </div>
      <div class="footer">
        <footer>
            <p>Chakri Khujo, Copyright &copy; 2019</p>
        </footer>
      </div>
    
    </body>
    
</html>