@include('header')
<body>
<nav class="navbar navbar-default navbar-fixed-top top-nav">
  <div class="container-fluid">
  <div class="row">
        <a class="navbar-brand" href="#">
        <img alt="Brand" src="{{Url::assets('img/favicon.ico')}}">
        </a>
      <a class="navbar-brand" href="#">Gliver MVC</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="collapse1">

      <ul class="nav navbar-nav top-nav">
        <li class="active"><a href="#">Documentation <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Contribute</a></li>
        </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3 mycontent-left side-bar sidebar">
        <div class="row">
            <h4 class="lead">Content List</h4>
        </div>
        <div class="row rpad">
            <form  role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
           <div class="lpad">
            <div class="row">
                <ul>
                    <li id="introduction" class="lead tpad dotted-underline">Preface</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('preface#introduction')}}">Introduction</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('preface#quick_start')}}">Quick Start</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('preface#release_notes')}}">Release Notes</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('preface#upgrade_guide')}}">Upgrade Guide</a></li>
                </div>       
                <div class="row">
                        <li><a href="{{Url::base('preface#contribution_guide')}}">Contribution Guide</a></li>
                </div>        
            </ul>
             <div class="row">
                <ul>
                    <li id="via_composer" class="lead tpad dotted-underline">Installation</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('installation#via_composer')}}">Via Composer</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('installation#downloading')}}">Downloading</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('installation#upgrade')}}">Upgrade from previous versions</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('installation#troubleshooting')}}">Troubleshooting</a></li>
                </div>              
            </ul>
            <div class="row">
                <ul>
                    <li id="controllers" class="lead tpad dotted-underline">Brief Tour</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('brief#controllers')}}">Controllers</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('brief#views')}}">Views</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('brief#models')}}">Models</a></li>
                </div>                   
            </ul>
            <div class="row">
                <ul>
                    <li id="glance" class="lead tpad dotted-underline">Getting Started</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('getStarted#glance')}}">Gliver at a glance</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('getStarted#supported_features')}}">Supported Features</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('getStarted#flowchart')}}">Application Flow Chart</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('getStarted#configuration')}}">Configuration</a></li>
                </div>       
                <div class="row">
                        <li><a href="{{Url::base('getStarted#routing')}}">Routing</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('getStarted#input')}}">Request/Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('getStarted#views')}}">Views/Responses</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('getStarted#errors')}}">Errors/Logging</a></li>
                </div>       
            </ul>
            <div class="row">
                <ul>
                    <li id="array" class="lead tpad dotted-underline">Helpers</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="#array">Array</a></li>
                </div>
                <div class="row">   
                    <li><a href="#calendar">Calendar</a></li>
                </div>    
                <div class="row">
                      <li><a href="#captcha">CAPTCHA</a></li>
                </div>      
                <div class="row">
                       <li><a href="#cart">Cart</a></li>
                </div>  
                <div class="row">
                        <li><a href="#config">Config</a></li>
                </div>      
                <div class="row">
                        <li><a href="#date">Date</a></li>
                </div> 
                <div class="row">
                        <li><a href="#directory">Directory</a></li>
                </div> 
                <div class="row">
                        <li><a href="#download">Download</a></li>
                </div>  
                <div class="row">
                        <li><a href="#email">Email</a></li>
                </div> 
                <div class="row">
                        <li><a href="#encryption">Encryption</a></li>
                </div> 
                <div class="row">
                        <li><a href="#file">File</a></li>
                </div> 
                <div class="row">
                        <li><a href="#form">Form</a></li>
                </div> 
                <div class="row">
                        <li><a href="#html">HTML</a></li>
                </div> 
                <div class="row">
                        <li><a href="#inflector">Inflector</a></li>
                </div> 
                <div class="row">
                        <li><a href="#input">Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="#language">Language</a></li>
                </div> 
                <div class="row">
                        <li><a href="#migration">Migration</a></li>
                </div> 
                <div class="row">
                        <li><a href="#number">Number</a></li>
                </div> 
                <div class="row">
                        <li><a href="#pagination">Pagination</a></li>
                </div> 
                <div class="row">
                        <li><a href="#sath">Path</a></li>
                </div> 
                <div class="row">
                        <li><a href="#security">Security</a></li>
                </div> 
                <div class="row">
                        <li><a href="#session">Session</a></li>
                </div> 
                <div class="row">
                        <li><a href="#smiley">Smiley</a></li>
                </div> 
                <div class="row">
                        <li><a href="#string">String</a></li>
                </div> 
                <div class="row">
                        <li><a href="#template_parser">Template Parser</a></li>
                </div> 
                <div class="row">
                        <li><a href="#text">Text</a></li>
                </div> 
                <div class="row">
                        <li><a href="#Typography">Typography</a></li>
                </div>  
                <div class="row">
                        <li><a href="#unit_testing">Unit testing</a></li>
                </div> 
                <div class="row">
                        <li><a href="#validation">Validation</a></li>
                </div> 
                <div class="row">
                        <li><a href="#xml">XML</a></li>
                </div> 
                <div class="row">
                        <li><a href="#zip_encoding">ZIP Encoding</a></li>
                </div> 
                <div class="row">
                <ul>
                    <li id="basic_usage" class="lead tpad dotted-underline">Database</li>
                </ul>
                </div>
                <ul>
                <div class="row">
                   <li><a href="{{Url::base('database#basic_usage')}}">Basic Usage</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('database#query_builder')}}">Query Builder</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('database#eloquent')}}">Eloquent ORM</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('database#schema_builder')}}">Schema Builder</a></li>
                </div>       
                <div class="row">
                        <li><a href="{{Url::base('database#migration_seeding')}}">Migration/Seeding</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('database#sql')}}">SQL</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('database#nosql')}}">NoSQL-MongoDB</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('database#postgre')}}">PostgreSQl</a></li>
                </div>       
            </ul>
            <div class="row">
                <ul>
                    <li id="memcache" class="lead tpad dotted-underline">Caching</li>
                </ul>
            </div>
            <ul>
                <div class="row">
                   <li><a href="{{Url::base('caching#memcache')}}">Memcache</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('caching#memcached')}}">Memcached</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('caching#redis')}}">Redis</a></li>
                </div>                   
            </ul>
          </div>   
      </div> 
        <div class="col-lg-9 lmargin">
           
           <h4 id="array">Array</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="calendar">Calendar</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="captcha">Captcha</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="cart">Cart</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="config">Config</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="cookie">Cookie</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="date">Date</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="directory">Directory</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="download">Download</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="email">Email</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="encryption">Encryption</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="file">File</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="form">Form</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="html">HTML</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="inflector">Inflector</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="input">Input</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>        
        <h4 id="language">Language</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="migration">Migration</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="number">Number</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="pagination">Pagination</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
                   
        <h4 id="security">Security</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="session">Session</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>     
        <h4 id="smiley">Smiley</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="string">String</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="template_parser">Template</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="text">Text</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="typography">Typography</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>    
        <h4 id="unit">Unit</h4>
        <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
        </p>
                   
        <h4 id="validation">Validation</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>
        <h4 id="xml">XML</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p> 
        <h4 id="zip">Zip Encoding</h4>
            <p>
            <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
            </p>      
                </div>
    </div>
</div>
@include('footer')