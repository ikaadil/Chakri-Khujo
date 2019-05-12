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
         <form class="form-horizontal form-label-left" method="POST" action="{{ route('jobs') }}">
                      {{ csrf_field() }}
                      


        

                      
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Catagory </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <select name="category" id="ddl">
                    <option value="-1">Select</option>
                  <optgroup label="Top Categories"></optgroup>
                    <option value="0"><li>Accounts / Finance / Tax / CS / Audit</li></option>
                    <option value="2"><li>Analytics &amp; Business Intelligence</li></option>
                    <option value="4"><li>Banking / Insurance</li></option>
                    <option value="7"><li>Engineering Design / R&amp;D</li></option>
                    <option value="9"><li>Fashion / Garments / Merchandising</li></option>
                    <option value="12"><li>HR / Administration / IR</li></option>
                    <option value="29"><li>ITES / BPO / KPO / Customer Service / Operations</li></option>
                    <option value"31"><li>Marketing / Advertising / MR / PR</li></option>
                    <option value="34"><li>Production / Maintenance / Quality</li></option>
                    <option value"40"><li>Site Engineering / Project Management</li></option>
                    <option value"36"><li>Sales / BD</li></option>
                    <option value"39"><li>Shipping</li></option>
                  <optgroup label="IT Software Categories"></optgroup>
                    <option value="13"><li>IT Software - Application Programming / Maintenance</li></option>  
                    <option value="14"><li>IT Software - Client Server</li></option>
                    <option value="15"><li>IT Software - Mainframe</li></option>
                    <option value="16"><li>IT Software - Middleware</li></option>
                    <option value="17"><li>IT Software - Mobile</li></option>
                    <option value"18"><li>IT Software - Other</li></option>
                    <option value"19"><li>IT Software - System Programming</li></option>
                    <option value"20"><li>IT Software - Telecom Software</li></option>
                    <option value"21"><li>IT Software - DBA / Datawarehousing</li></option>
                    <option value"22"><li>IT Software - E-Commerce / Internet Technologies</li></option>
                    <option value"23"><li>IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</li></option>
                    <option value"24"><li>IT Software - ERP / CRM</li></option>
                    <option value"25"><li>IT Software - Network Administration / Security</li></option>
                    <option value"26"><li>IT Software - QA &amp; Testing</li></option>
                    <option value"27"><li>IT Software - Systems / EDP / MIS</li></option>
                  <optgroup label="More Categories"></optgroup>
                    <option value="1"><li>Agent</li></option>
                    <option value="3"><li>Architecture / Interior Design</li></option>
                    <option value="5"><li>Content / Journalism</li></option>
                    <option value="6"><li>Corporate Planning / Consulting</li></option>
                    <option value="8"><li>Export / Import / Merchandising</li></option>
                    <option value="10"><li>Guards / Security Services</li></option>
                    <option value"28"><li>IT- Hardware / Telecom / Technical Staff / Support</li></option>
                    <option value="11"><li>Hotels / Restaurants</li></option>
                    <option value"30"><li>Legal</li></option>
                    <option value"32"><li>Packaging</li></option>
                    <option value"33"><li>Pharma / Biotech / Healthcare / Medical / R&amp;D</li></option>
                    <option value"35"><li>Purchase / Logistics / Supply Chain</li></option>
                    <option value"37"><li>Secretary / Front Office / Data Entry</li></option>
                    <option value"38"><li>Self Employed / Consultants</li></option>
                    <option value"41"><li>Teaching / Education</li></option>
                    <option value"42"><li>Ticketing / Travel / Airlines</li></option>
                    <option value"43"><li>Top Management</li></option>
                    <option value"44"><li>TV / Films / Production</li></option>
                    <option value"45"><li>Web / Graphic Design / Visualiser</li></option>
                    <option value"46"><li>Other</li></option>
                </select>
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                  <select name="search_salary_ddl" size="+5" id="ddl">
                  <optgroup label="Salary Expected"></optgroup>
                  <option value="1">100000 pa</option>
                  <option value="2">200000 pa</option>
                  <option value="3">300000 pa</option>
                  <option value="4">400000 pa</option>
                  <option value="5">500000 pa</option>
                  <option value="6">600000 pa</option>
                  <option value="7">700000 pa</option>
                  <option value="8">800000 pa</option>
                  <option value="9">900000 pa</option>
                  <option value="10">1000000 pa</option>
                  <option value="11">1100000 pa</option>
                  <option value="12">1200000 pa</option>
                  <option value="13">1300000 pa</option>
                  <option value="14">1400000 pa</option>
                  <option value="15">1500000 pa</option>
                  <option value="16">1600000 pa</option>
                  <option value="17">1700000 pa</option>
                  <option value="18">1800000 pa</option>
                  <option value="19">1900000 pa</option>
                  <option value="20">2000000 pa</option>
                  <option value="21">2100000 pa</option>
                  <option value="22">2200000 pa</option>
                  <option value="23">2300000 pa</option>
                  <option value="24">2400000 pa</option>
                  <option value="25">2500000 pa</option>
                  <option value="26">2600000 pa</option>
                  <option value="27">2700000 pa</option>
                  <option value="28">2800000 pa</option>
                  <option value="29">2900000 pa</option>
                  <option value="30+">3000000+ pa</option>
                </select>
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Search</button>
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