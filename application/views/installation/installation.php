@include('header')
<body>

@include('navbar')

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
                   <li><a href="#via_composer">Via Composer</a></li>
                </div>
                <div class="row">   
                    <li><a href="#downloading">Downloading</a></li>
                </div>    
                <div class="row">
                      <li><a href="#upgrade">Upgrade from previous versions</a></li>
                </div>      
                <div class="row">
                       <li><a href="#troubleshooting">Troubleshooting</a></li>
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
                   <li><a href="{{Url::base('helpers#array')}}">Array</a></li>
                </div>
                <div class="row">   
                    <li><a href="{{Url::base('helpers#calendar')}}">Calendar</a></li>
                </div>    
                <div class="row">
                      <li><a href="{{Url::base('helpers#captcha')}}">CAPTCHA</a></li>
                </div>      
                <div class="row">
                       <li><a href="{{Url::base('helpers#cart')}}">Cart</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#config')}}">Config</a></li>
                </div>      
                <div class="row">
                        <li><a href="{{Url::base('helpers#date')}}">Date</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#directory')}}">Directory</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#download')}}">Download</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#email')}}">Email</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#encryption')}}">Encryption</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#file')}}">File</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#form')}}">Form</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#html')}}">HTML</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#inflector')}}">Inflector</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#input')}}">Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#language')}}">Language</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#migration')}}">Migration</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#number')}}">Number</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#pagination')}}">Pagination</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#sath')}}">Path</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#security')}}">Security</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#session')}}">Session</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#smiley')}}">Smiley</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#string')}}">String</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#template_parser')}}">Template Parser</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#text')}}">Text</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#Typography')}}">Typography</a></li>
                </div>  
                <div class="row">
                        <li><a href="{{Url::base('helpers#unit_testing')}}">Unit testing</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#validation')}}">Validation</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#xml')}}">XML</a></li>
                </div> 
                <div class="row">
                        <li><a href="{{Url::base('helpers#zip_encoding')}}">ZIP Encoding</a></li>
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
            <h4 id="via_composer">Via Composer</h4>
			<p>
			    Coming Soon...<br/>
                            
			</p>
                        <div class='row' style="padding-bottom: 5%">&nbsp;</div>
          
			<h4 id="downloading">Downloading Gliver</h4>
			    <p>
                            <p>Gliver can install in following simple steps:</p>
                                
                            <ul>
                                <div class='row' style="padding-left: 5%">  <li>1) First, download code from <a href='https://github.com/gliver-mvc/gliver/archive/master.zip'>Here</a></li></div>
                                <div class='row' style="padding-left: 5%"><li>2) Unzip it and upload on your web server.</li></div>
                                <div class='row' style="padding-left: 5%"><li>3) Open <code>config/config.php</code> file in any text editor and do local changes. </li></div>
                                <div class='row' style="padding-left: 5%"><li>4) Open <code>config/database.php</code> file and change your database settings. </li></div>
                            </ul>
                            </p> 
                            <div class='row' >&nbsp;</div>
                            <h5>GitHub</h5>
                            <p>
                                <a href="http://git-scm.com/about">Git</a> is a version control system which is widely used for online code distribution.
                                You can get free accessible code from <a href="https://github.com/gliver-mvc/gliver">Here</a>.
                            </p>
                            </p>
                        <div class='row' style="padding-bottom: 5%">&nbsp;</div>
			<h4 id="upgrade">Upgrading from previous versions</h4>
			    <p>
                            <div class="row">&nbsp;</div>
                            <p> There are just couple of steps for upgrading to latest version. Following are these two steps:</p>
                            <p> 
                            <ul>
                                <div class='row' style="padding-left: 5%">  <li>1) Download Latest Version.</li></div>
                                <div class='row' style="padding-left: 5%"><li>2) Just Replace <code>system</code> directory with recently downloaded <code>system</code>directory code.</li></div>
                            </ul>
                            </p>
                            </p> 
                        <div class='row'  >&nbsp;</div>

			<h4 id="troubleshooting">Troubleshooting</h4>
			    
                            <h5>Not Finding Default Controller</h5>
                            <div class='row' style="padding-left: 2%"><strong>Issue</strong></div>         
                            <p>
                                Let say, all configuration are done and your installed directory is at root of web server and directory name is <code>gliver</code>
                                Then you hit http://localhost/gliver . A page will open but you are not sure which controller is used by default. 
			    </p>
                            <div class='row' style="padding-left: 2%"><strong>Solution</strong></div>         
                            <p>
                                In your <code>config/config.php</code> file, in <code>array()</code>, there is parameter <code>default</code>. This parameter contain another array and that array has two parameters.
                                One is <code>controller</code> and other is <code>action</code>. Controller name mentioned here is used as a default controller and method mentioned here will run of that controller. You can change controller name and also method name.   
			    </p>
                            <div class="alert alert-info" role="alert">
                                <p>  <strong>Note!</strong> <code>method</code> name should exist in <code>controller</code> you will use in above <code>default</code> parameter. 
                                </p>
                            </div>
                            <div class='row' >&nbsp;</div>
                            <h5>Database is not connecting</h5>
                            <div class='row' style="padding-left: 2%"><strong>Issue</strong></div>         
                            <p>
                                Database is not connecting.
			    </p>
                            

                            <div class='row' style="padding-left: 2%"><strong>Solution</strong></div>         
                            <p>
                                In your <code>config/database.php</code> file, please identify your relevant DBMS settings and put your Database setting. 
                                Let say, you have MySQL database then first put <code>mysql</code> in <code>default</code> parameter. 
                                Then put your database server name in <code>host</code> parameter. In most cases, it is <code>localhost</code>.
                                Then put your database username in <code>username</code> and put password in <code>password</code> parameter. 
                                Then put your database name in <code>database</code> parameter.
                                    
 			    </p>
                             <div class='row' >&nbsp;</div>
                            <h5>Helper class is not use able</h5>
                            <div class='row' style="padding-left: 2%"><strong>Issue</strong></div>         
                            <p>
                               A user want to use Helper class functions but system is giving error that this class/method not exists.
			    </p>
                            

                            <div class='row' style="padding-left: 2%"><strong>Solution</strong></div>         
                            <p>
                                Put <code>use Helpers\Class_name;</code> to use helper class functions. 
                                <code>Class_name</code> should be replaced by actual class name.
 			    </p>
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

        </div>
    </div>
        <div class='row' style="margin-bottom: 8%">&nbsp;</div>

</div>
@include('footer')