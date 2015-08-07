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
           <h4 id="controllers">Controllers</h4>
            <p> You place all your controller classes in the <code>application/controllers</code> directory.</p>
            <p>The entry point into your application is via the controllers. So it is from here that all the code for your application is executed. 
            When writing your controller, you need to specify the namespace so that the autoloader can detect it. Besides, all controllers exrtend the <code>BaseController</code> class. </p>
            <p>For example,let's try to creat a simple <code>HomeController</code> class.</p>
            <p>The first thing to note is that the name of the php file wherein you have your class must be the same as the name of the Controller class. One file can only contain one controller class</p>
                       
            <h4 id="views">Views</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>
            <h4 id="models">Models</h4>
                <p>
                <br/>  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>          
                </p>    
        </div>
    </div>
</div>

@include('footer')

</body>
</html>