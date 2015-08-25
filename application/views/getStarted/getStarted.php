@include('header')
<body>

@include('navbar')

<div class="container" style='margin-bottom: 20%'>
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
                   <li><a href="#glance">Gliver at a glance</a></li>
                </div>
                <div class="row">   
                    <li><a href="#supported_features">Supported Features</a></li>
                </div>    
                <div class="row">
                      <li><a href="#flowchart">Application Flow Chart</a></li>
                </div>      
                <div class="row">
                       <li><a href="#configuration">Configuration</a></li>
                </div>       
                <div class="row">
                        <li><a href="#routing">Routing</a></li>
                </div> 
                <div class="row">
                        <li><a href="#input">Request/Input</a></li>
                </div> 
                <div class="row">
                        <li><a href="#views">Views/Responses</a></li>
                </div>  
                <div class="row">
                        <li><a href="#errors">Errors/Logging</a></li>
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
           <h4 id="glance">Gliver at a glance</h4>
           <h4 id="glance">Gliver: An extensible light weight Application framework</h4>
            
           <p>
               Gliver is an application framework based on Laravel. It is an essential tool for PHP web developers who want easy to use yet powerful framework.
               It is specially designed for each level of PHP developer. Novice PHP developers can benefit from this by simple installation and start developing good applications.
               It is equally useful for middle level programmer to proficient programmer with very useful Helper classes. 
           </p><p>   Its ORM based database architecture is beneficial for developing scalable and complex Large scale applications. 
               Memcache is also supported in this framework. Developers who want not to use structured database have freedom to use NoSQL database like MongoDB.
               
           
             </p>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
        
            <h4 id="supported_features">Supported Features</h4>
                <p>
                </p>
                 <p>
               Some considerable features of Gliver are:
           <ul style='list-style: circle'>
               <div class='row' style='padding-left: 3%'><li>It is light Weight. Unlike Laravel, it is very light weight but powerful.</li></div>
               <div class='row' style='padding-left: 3%'><li>Gliver is fast and give you better performance then other frameworks</li></div>
                <div class='row' style='padding-left: 3%'><li>With easy to use extensible architecture, you can extend it on all ends.</li></div>
                <div class='row' style='padding-left: 3%'><li>It is supported MVC architecture which is need of the day.</li></div>
                <div class='row' style='padding-left: 3%'><li>This framework provides very clean URL and .htaccess is already managed for clean urls. </li></div>
                <div class='row' style='padding-left: 3%'><li>Gliver does not need any separate engine. It uses Blade template engine which is very much same with PHP code.</li></div>
                <div class='row' style='padding-left: 3%'><li>Helper Classes for all general purpose tasks like FORM building, Calendar,Captcha Cart,Directory,Download,Email,Pagination, Security, Unit testing and many more</li></div>


           </ul>
               
           </p>  
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

            <h4 id="flowchart">Application Flowchart</h4>
                <p>
                    <img src="{{ Url::assets('img/gliverarch.png') }}" alt="gliver application flow chart" width="100%" />
                </p>  
               <div class='row' style="padding-bottom: 5%">&nbsp;</div>
 
            <h4 id="configuration">Configuration</h4>
                
            <p>
                    There are two configuration(<code>config/config.php</code> and <code>config/database.php</code>) files for Gliver framework. Both files are in <code>config</code> Directory.
                    
                </p>
                <h5>Basic Configuration</h5>
                <p>
                    Basic configuration can configure in <code>config/config.php</code> file. 
                    You can do default settings of some important parameters like page tile, server name,root directory. You can assign default controller and default method of that controller in this file.
                    
                </p>
                <h5>Database Configuration</h5>
                <p>
                    We can configure database related settings in this <code>config/database.php</code> file. 
                    Here different database management servers settings are available. You can choose your choice database server and add your Database server setting in this file. 
                    You have to make your database server name as default(first parameter of array in <code>config/database.php</code> ).
                    
                </p>
                
                
                <div class='row' style="padding-bottom: 5%">&nbsp;</div>
 
            <h4 id="routing">Routing</h4>
                <p>
                    Routing can be configure in <code>application/routes.php</code> file.
                    
                    Here is sample code 
                    <div class='row'>&nbsp;</div>
                    <h5>Router - Example 1 <span>&nbsp;&nbsp;&nbsp; application/routes.php</span></h5>
                    <div class="well">
                        <code>
                        return array(
                        <br /><br />
                        /**<br />
                         *The home route.<br />
                         *This route loads the home controller and use index method of home controller.<br />
                         *@param null<br />
                         *@return void<br />
                         */<br /><br />
                        'homepage' => 'home@index',<br /><br />
                        /**<br />
                         *This routes loads the search users page.<br />
                         *@param null<br />
                         *@return void<br />
                         */<br /><br />
                        'userspage' => 'home'<br /><br />

                        );<br />
                    </code>
                    </div>
                </p>    
                
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>

            <h4 id="input">Request / Response</h4>
            <h5 >Request Handling</h5>
            <p>
                Request handling in Gliver framework is handled through Input Helper class(<code>system/Helpers/Input.php</code>)
                You can call this class in Controller. In following example, you will see how Input Helper class is used to get HTTP Requests.
            </p>
            <h5>Helper - Example 1: Request/Input <span>&nbsp;&nbsp;&nbsp; application/controllers/HelloController.php</span></h5>
            <div class="well">
                <code>
                    namespace Controllers;
            <div class='row'>&nbsp;</div>
 

            use Helpers\View;
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

            class HelloController extends BaseController{ 
            <div class='row'>&nbsp;</div><div class='row'>&nbsp;</div>

                public function Index()
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                
                { 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div> 
                <div style='padding-left:5%'>$input = Input::get();</div> 
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
                <div style='padding-left:5%'>$data['email'] = $input['inputEmail'];// where 'inputEmail' is textbox name in Form</div>
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div> 
                }	
                <div class='row'>&nbsp;</div>
                <div class='row'>&nbsp;</div>
            }
            <div class='row'>&nbsp;</div>
            <div class='row'>&nbsp;</div> 
                </code>
                
            </div>
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
           
            <h4 id="views">Views/Responses</h4>
                <p>
                    We discussed this in <a href='{{ Url::base('brief#views') }}'>View</a> Section. 
                    For sake of completion, we are putting that example here:
                </p>
                <h5>Controller - Example 1: Views/Responses <span>&nbsp;&nbsp;&nbsp; /application/controllers/HelloController.php</span></h5>
              
                <div class="well">
                    <p>
                    <code>
                        $data['title'] = 'Hello Word';  
                        <div class='row'>&nbsp;</div>

                        View::render('helloword/helloword',$data);
                    </code>
                    </p>
                </div>
            
            </p>
            <p>
                Now, assign this variable using Blade template engine as
                <h5>View - Example 1: Views/Responsers<span>&nbsp;&nbsp;&nbsp; /application/views/helloword/helloword.php</span></h5>
              
                <div class="well">
                <p>
                <code>
                    <span><</span>title<span>></span><span> {<span>{</span> $title <span>}</span><span>} </span>
                 <span><</span><span>/</span>title<span>></span><span>
                </code>
                </p>
              </div>
                
            <div class='row' style="padding-bottom: 5%">&nbsp;</div>
   
            <h4 id="errors">Errors/Logging</h4>
                <p>
                    Gliver extends basic exception handling through Helper exception class (<code>/system/Helpers/Exceptions/HelperException.php</code>)
                </p> 
                <p>In following Code snippet, we used exception handling in Helper Form class using HelperException Class.</p>
                <h5>Helper - Example 1:Exception Handling <span>&nbsp;&nbsp;&nbsp; /system/Helpers/Form.php</span></h5>
              
                <div class="well">
                    <p>
                    <code>
                        <br />public static function open($form_attr=array()) 
                       <br /> {
                       <br /><br />     //this try block is excecuted to enable throwing and catching of errors as appropriate
                        <br /><br />
                        try {
                        <br /><br />
                        //this block throwing exception if method argument is not an array
                        <br /><br />
                            if(! is_array($form_attr)){
                         <br /><br />  
                                throw new HelperException(sprintf('Expecting array of form attributes.e.g.$form_attr = array(\'name\'=>\'form1\',\'action\'=>\'post\')',$form_attr));
                            <br /><br />
                            }
                            <br /><br />
                                $form_attr_str='';
                                foreach($form_attr as $key=>$val){
                                    $form_attr_str .= $key.'="'.$val.'" ';
                                }
                                //$form_attr_str = implode('= ',$form_attr);
                                return "<form ".$form_attr_str.' >';
                            }

                            catch(BaseException $e) {

                                //echo $e->getMessage();
                                $e->show();

                            }

                            catch(Exception $e) {

                              echo $e->getMessage();

                            }

        }
                        <div class='row'>$data['title'] = 'Hello Word';</div>
                        <div class='row'>&nbsp;</div>

                        View::render('helloword/helloword',$data);
                    </code>
                    </p>
                </div>
                
                <div class='row' style="padding-bottom: 5%">&nbsp;</div>

        </div>
    </div>
</div>
@include('footer')