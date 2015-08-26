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
        <div class="col-lg-10 lmargin">
           
        <h4 id="array">Array</h4>
        <div class="col-lg-12" id='array_div'>
        <p>
            Array helper class functions helps in working with arrays.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#arrayload')}}'>Loading Array Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#arrayfunc')}}'>Array Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='arrayload'>Loading Array Helper</h5>
         <p>
          
             Just add <code>use Array;</code> in controller or where you want to use. 
         </p>
         <h5 id='arrayfunc'>Array Functions</h5>
         <p>
             Following functions are available:
         <p>
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>parts</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>string $key The string to use as a separator for exploding the string.</li>
                                <li>string $string The string which is to be exploded into an array.</li>
                                <li>int $limit The value limits the number of elements to return.</li>
                            </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method explodes a string into an array depending on the separator provided
                        </div>
                    </div>
              </div>
            </div>
         
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>join</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>string $glue The string to use to join the array elements into string.</li>
                                <li>array $array The string which is to be exploded into an array.</li>
                             </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method joins an array into a string based on the joining parameter provided                        </div>
                    </div>
              </div>
            </div>
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div>


         <h4 id="calendar">Calendar</h4>
            <div class="col-lg-12" id='calendar_div'>
            <p>
            Calendar helper class uses for calendar related functions. <br />
            Details are coming soon...
            </p 
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div>


        <h4 id="captcha">Captcha</h4>
           <div class="col-lg-12" id='captcha_div'>
            <p>
            Captcha class uses for captcha related functions. <br />
            Details are coming soon...
            </p 
        </div>
         <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="cart">Cart</h4>
           <div class="col-lg-12" id='cart_div'>
            <p>
            Cart class uses for Cart related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 

        <h4 id="config">Config</h4>
              <div class="col-lg-12" id='conf_div'>
            <p>
            Config class uses for configuration related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="cookie">Cookie</h4>
           <div class="col-lg-12" id='cookie_div'>
            <p>
            Cookie class deals with cookie related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="date">Date</h4>
             <div class="col-lg-12" id='date_div'>
            <p>
            Date class uses for date functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="directory">Directory</h4>
            <div class="col-lg-12" id='dir_div'>
            <p>
            Directory class uses for Directory related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="download">Download</h4>
           <div class="col-lg-12" id='down_div'>
            <p>
            This class uses for downloading related functionality. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>      
        <h4 id="email">Email</h4>
              <div class="col-lg-12" id='email_div'>
            <p>
            Email class uses for Email related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="encryption">Encryption</h4>
            <div class="col-lg-12" id='enc_div'>
            <p>
            Encryption class uses for encryption related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="file">File</h4>
            <div class="col-lg-12" id='file_div'>
            <p>
            File class uses for File management related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="form">Form</h4>
               <div class="col-lg-12" id='form_div'>
            <p>
            Form class uses for Form related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="html">HTML</h4>
           <div class="col-lg-12" id='html_div'>
            <p>
            This class uses for html related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="inflector">Inflector</h4>
            <div class="col-lg-12" id='inf_div'>
            <p>
            This class uses for inflector related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="input">Input</h4>
              <div class="col-lg-12" id='input_div'>
        <p>
            Input helper class functions helps in  HTTP Requests.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#inload')}}'>Loading Input Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#infunc')}}'>Input Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='inload'>Loading Input Helper</h5>
         <p>
          
             Just add <code>use Input;</code> in controller or where you want to use. 
         </p>
         <h5 id='infunc'>Input Functions</h5>
         <p>
             Following functions are available:
         <p>
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Function Name: <strong>get</strong></h3>
                </div>
                <div class="panel-body">
                    <div class='row'>
                        <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>void</li>
                                </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>Return:</strong> </div> 
                        <div class='col-lg-9'>
                            <ul>
                                <li>return current $_POST or $_GET data</li>
                               </ul>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                        <div class='col-lg-9'>
                            This method return current $_POST or $_GET data
                            <p>
                                See following code snippet <bR><br />
                                <code>
                                    $input = Input::get(); // Call helper class function. It returns request/response array
                                    <br /><br />
                                    $data['email'] = $input['inputEmail']; // assign request/response array element to PHP variable.
                                    
                                </code>
                            </p>
                        </div>
              </div>
            </div>
         
          
        </div>
              </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
        <h4 id="language">Language</h4>
       <div class="col-lg-12" id='lang_div'>
            <p>
            This class uses for language related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
        <h4 id="migration">Migration</h4>
           <div class="col-lg-12" id='mig_div'>
            <p>
            This class uses for migration functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
            <h4 id="number">Number</h4>
          <div class="col-lg-12" id='number_div'>
            <p>
            Number class uses for numbers related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="pagination">Pagination</h4>
           <div class="col-lg-12" id='pag_div'>
            <p>
            This class uses for pagination related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="security">Security</h4>
            <div class="col-lg-12" id='sec_div'>
            <p>
            This class uses for security related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="session">Session</h4>
               <div class="col-lg-12" id='sess_div'>
        <p>
            This class functions are useful for session related functionality.
         </p>
         <p>
         <ul style="list-style: circle;margin-left: 5%;">
             <div class='row'><li><a href='{{Url::base('helpers#sessload')}}'>Loading Session Helper</a></li>
             </div>
             <div class='row'>
             <li><a href='{{Url::base('helpers#sessfunc')}}'>Session Functions</a></li>
            </div>
         </ul>
         </p> 
         <div class='row'>&nbsp;</div>
         <h5 id='sesload'>Loading Session Helper</h5>
         <p>
          
             Just add <code>use Session;</code> in controller or where you want to use. 
         </p>
         <h5 id='infunc'>Session Functions</h5>
         <p>
             Following functions are available:
         <p>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>start</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                    </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                               This method initializes the session environment.
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::start(); //new server session will start 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>set</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key Then key with which to store this data.</li>
                                    <li>mixed $input The input data to be stored.</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                              This method stores data into session
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::set($key); //store $key in session  

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                
         
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>get</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key The key with which to search session data</li>
                                    </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>mixed The value stored in session</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                               This method returns a session data by key
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::get($key); //get session data stored against $key

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
         
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>flush</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>void</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                                This method erases all session data
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                        Session::flush(); // remove all session data 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
                    <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Function Name: <strong>has</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class='row'>
                            <div class='col-lg-3'><strong>Parameters:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>string $key</li>
                                </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>Return:</strong> </div> 
                            <div class='col-lg-9'>
                                <ul>
                                    <li>bool true|false Returns true if key was found or false if null</li>
                                   </ul>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-3'><strong>{{ $func_usage_lbl }}:</strong> </div> 
                            <div class='col-lg-9'>
                                This method checks if a session with a particular key has been set
                                <p>
                                    See following code snippet <bR><br />
                                    <code>
                                       $is_key =  Session::has(); // return true or false 

                                    </code>
                                </p>
                        </div>
                    </div>
                 </div>
                </div>
              </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>      
        <h4 id="smiley">Smiley</h4>
        <div class="col-lg-12" id='smi_div'>
            <p>
            This class uses for smiley related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
                   
        <h4 id="string">String</h4>
           <div class="col-lg-12" id='str_div'>
            <p>
            String class uses for string manipulation. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="template_parser">Template</h4>
           <div class="col-lg-12" id='temp_div'>
            <p>
            This class uses for template related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>    
        <h4 id="text">Text</h4>
           <div class="col-lg-12" id='text_div'>
            <p>
            This class uses for inflector related functions. <br />
            Details are coming soon...
            </p> 
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div> 
        <h4 id="typography">Typography</h4>
        <div class="col-lg-12" id='typo_div'>
            <p>
            This class uses for typography related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="unit">Unit</h4>
        <div class="col-lg-12" id='text_unit'>
            <p>
            This class uses for unit related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
                   
        <h4 id="validation">Validation</h4>
            <div class="col-lg-12" id='val_div'>
            <p>
            This class uses for Validation related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="xml">XML</h4>
            <div class="col-lg-12" id='xml_div'>
            <p>
            This class uses for XML related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>   
        <h4 id="zip">Zip Encoding</h4>
            <div class="col-lg-12" id='text_zip'>
            <p>
            This class uses for zip encoding related functions. <br />
            Details are coming soon...
            </p> 
            </div>
        <div class='row' style="padding-bottom: 5%">&nbsp;</div>       
                </div>
    </div>
</div>
@include('footer')