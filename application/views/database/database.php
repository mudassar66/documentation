@include('header')

<body>

@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-sm-2 mycontent-left side-bar sidebar">
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
                   <li><a href="#basic_usage">Basic Usage</a></li>
                </div>
                <div class="row">   
                    <li><a href="#query_builder">Query Builder</a></li>
                </div>    
                <div class="row">
                      <li><a href="#eloquent">Eloquent ORM</a></li>
                </div>      
                <div class="row">
                       <li><a href="#schema_builder">Schema Builder</a></li>
                </div>       
                <div class="row">
                        <li><a href="#migration_seeding">Migration/Seeding</a></li>
                </div> 
                <div class="row">
                        <li><a href="#sql">SQL</a></li>
                </div> 
                <div class="row">
                        <li><a href="#nosql">NoSQL-MongoDB</a></li>
                </div>  
                <div class="row">
                        <li><a href="#postgre">PostgreSQl</a></li>
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
        <div class="col-lg-10 lmargin">
                        <h4 id="basic_usage">Basic Usage</h4>
			<p>
                            Gliver easily connect application to database in a simple way.
                            It currently support following database systems:
                            
                        <div class="row">
                            <ul style="list-style: circle; margin-left: 5%">
                                <div class="row"><li>MySQL</li></div>
                                <div class="row"><li>SQLite</li></div>
                                <div class="row"><li>Postgre</li></div>
 
                                                                
                            </ul>
                        </div>
                            
 			</p>
                        <h5>Configuration</h5>
                        <p>
                            Database configuration file is located at <code>config/database.php</code>
                            In below code snippet, Mysql is set as default and mysql related configuation are written.
                        <div class='well'>
                            <p>
                                <code>
                                    return array(

        /*<br /><br />
	 *Define the default driver<br /><br />
	 */<br /><br />
	'default' => 'mysql',<br /><br />
	/*<br /><br />
	 *Settings for the mysql database<br /><br />
	 */<br /><br />
	'mysql' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> 'localhost',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> 'root',<br /><br />
		/*<br /><br />
		 *Define the database password<br /><br />
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

		),<br /><br />

	'sqlite' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> '',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> '',<br /><br />
		/*<br /><br />
		 *Define the database <br /><br />password
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

	),<br /><br />
	'postgresql' => array(<br /><br />
		/**<br /><br />
		 *Define the database server hostname<br /><br />
		 */<br /><br />
		'host' 		=> '',<br /><br />
		/*<br /><br />
		 *Define the username<br /><br />
		 */<br /><br />
		'username' 	=> '',<br /><br />
		/*<br /><br />
		 *Define the database password<br /><br />
		 */<br /><br />
		'password' 	=> '',<br /><br />
		/*<br /><br />
		 *Specify the database to connnect to<br /><br />
		 */<br /><br />
		'database' 	=> '',<br /><br />
		/**<br /><br />
		 *Specify the database server port<br /><br />
		 */<br /><br />
		'port' => '3306',<br /><br />
		/**<br /><br />
		 *Set the default charset<br /><br />
		 */<br /><br />
		'charset' => 'utf8',<br /><br />
		/**<br /><br />
		 *Set the default database engine<br /><br />
		 */<br /><br />
		'engine' => 'InnoDB'<br /><br />

	),<br /><br />

);<br /><br />
                                </code>
                            </p>
                            
                        </div>
                        </p>
                        <div class='row' style="padding-bottom: 5%">&nbsp;</div>
           
			<h4 id="query_builder">Query Builder</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="eloquent">Eloguent ORM</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
  
			<h4 id="schema_builder">Schema Builder</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="migration_seeding">Migration Seeding</h4>
			<p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			           
			<h4 id="sql">SQL</h4>
			<p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

			<h4 id="nosql">NoSQL</h4>
			 <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
   
			<h4 id="postgre">PostgreSQL</h4>
			    <p>
                                Coming soon...
                            </p> 
                            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
       
        </div>
    </div>
</div>
@include('footer')