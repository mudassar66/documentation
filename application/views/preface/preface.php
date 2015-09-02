<!DOCTYPE html>
<html lang="en-US">

@include('header')

<body>

@include('navbar')

<div class="container">

    <div class="row">
        
        @include('searchbar')

        <div class="lpad">

        @include('sidebar')
            
        </div> 

        <div class="col-lg-9 lmargin">

            <h4 id="introduction" class="text-danger lead">Introduction</h4>


            
                <p>The Gliver PHP MVC Framework is here to help PHP developers, both new and seasoned to get into web application development by making wonderful web application just in a matter of minutes. 
                This framework was inspited by a community of developers who needed a lightweight framework for application developement with almost no learning curve</p>
                       



            <h4 id="quick_start" class="text-danger lead">Quick Start</h4>




                <p>To get started with Gliver PHP MVC Framework, you need a runing web server and then head to <a href="https://github.com/gliver-mvc/gliver">Github.com</a> and download the source code  </p>
                <p>Once you have downloaded the source code, extract it into the root directory of your web server and access the application vai a web browser, specifying the name of your installation directory, and there you go! Wish you a happy coding experience after...</p>
                <p>For example, let's say you extracted your code into a folder in your web root called <code>gliver</code>, you access via your url in this manner <code>http://localhost/gliver</code> </p>
                <p>By default, the page that loads is the application home page... How did we get here? Check the directory structure below</p>
                <pre>
                    application
                    bin
                    config
                    public
                    system
                    vendor
                    .htaccess
                    license.txt
                    readme.md
                    composer.json
                </pre>

                <p>At the very top is the application folder. This is where all of your code is gonna reside. In here you are going to write your code for the <code>Controllers</code>, <code>Models</code>, <code>Views</code> among others... For instance, you get to your controllers in this manner <code>application/controllers/BaseController.php</code></p>
                <p>Next is the <code>bin</code> folder. In here, all the error logs are written in the <code>error.log</code> file. You get to the error log by navigating in this manner <code>bin/logs/error.log</code></p>
                <p>Following is the <code>config</code> folder. You are going to out all you application settings in here. So you wanna be careful with this folder. The settings are placed in an array from which they are loaded at run time. So you will want to ensure you maintain a valid array in here.
                We have two configuration files...</p>
                <pre>
                    config
                        ../config.php
                        ../database.php
                </pre>
                <p>The <code>config.php</code> file is for all the general configuration while the <code>database.php</code> is particularly for the database configuration settings</p>

                <p>Just below the config directory is the <code>public</code> directory. Here you put the resources that you need for your applicaiton. These include the <code>css, javascript</code> and <code>images</code></p>
                <p>Next is the <code>system</code> directory. You don't wanna touch this. This is the core of the Gliver MVC Framework. All the code upon which this framework is built reside here</p>
                <p>The <code>vendor</code> directory has the composer files that this framework uses to define it's autoloading classes.</p>

            <h4 id="release_notes" class="text-danger" class="text-danger lead">Release Notes</h4>
                


                <p>This PHP MVC Framework is still in the alpha version, so we don't have much to say as pertains to the Release notes...</p>    
           


            <h4 id="upgrade_guide" class="text-danger lead">Upgrade Guide</h4>
                


                <p>Gliver MVC is under active developemnt and updates are being pushed to the <a href="https://github.com/gliver-mvc/gliver">Github</a> repository every day. The updates include very cooling features that you have been waiting for...you don't want to be left out. So check out this <a href="https://github.com/gliver-mvc/gliver">link</a> for the latest code</p>
            


            <h4 id="contribution_guide" class="text-danger lead">Contribution Guide</h4>
                


                <p>We are really grateful you are amazed by the term open source and you wanna be part.  We welcome your contributions as the main drive for this framework is to develop an active communicaty around this code base. To contribute just folk this repository and fire on... Once we have some cool features in, do a pull request and we will be in touch to get the code merged in a reasonable time</p>     
        


        </div>

    </div>
    <div class='row' style="margin-bottom: 8%">&nbsp;</div>

</div>

@include('footer')

</body>
</html>