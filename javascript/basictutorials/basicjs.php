<!DOCTYPE html>
<html>
    <head>
        <title>NSC Coders: Basic JavaScript - Inserting JavaScript</title>
		<?php 
			require "/home/a5942363/public_html/extfiles/navbar.php";
		?>
			<div>
			    <h1>Basic JavaScript</h1>
				<div id="jscont">
				    <div>
					    <p href="http://www.nsccoders.net16.net/javascript/basictutorials/basicjs.php" style="color:rgb(0,64,0)" class="prev">Previous</p>
					</div>
					<div>
					    <p>Inserting JavaScript</p>
					</div>
					<div>
					    <a href="http://www.nsccoders.net16.net/javascript/basictutorials/basicjs1.php" class="next">Next</a>
					</div>
				</div>
				<br/>
				<br/>
				<div style="color:lightgrey;">
					<p id="intro">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					In JavaScript, there are 2 ways to insert the code: <br/>
					&nbsp;&nbsp;&nbsp;&nbsp;
					Internal and External
					</p>
					<h3>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Internal:
					</h3>
					<p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Internal is where you have your JavaScript
					<img class="main" src="http://www.nsccoders.net16.net/images/javascript/jsintpics/ex1.png" style="float:right;position:relative;left:-230px;">
					<img class="main" src="http://www.nsccoders.net16.net/images/javascript/jsintpics/ex2.png" style="float:right;position:relative;left:-20px;"><br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					code within the same file as your HTML code,<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					which is also how internal and inline CSS work.<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					How you insert internal JavaScript code is that<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					you put in &nbsp;&lt;script&gt;&nbsp; tags either within the<br/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&lt;head&gt;&nbsp; or &nbsp;&lt;body&gt;&nbsp; tags.
					</p>
					<br/>
					<h3>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					External:
					</h3>
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					External is where you have your JavaScript code
					<img class="main" src="http://www.nsccoders.net16.net/images/javascript/jsintpics/ex3.png" style="float:right;position:relative;left:-110px"><br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					in a separate file to your HTML code. The only<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					thing that is similar though is the &nbsp;&lt;script&gt;&nbsp; tags.<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					However this time, they can only go between the<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&lt;head&gt;&nbsp; tags. The &nbsp;&lt;script&gt;&nbsp; tag however, in this<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					case has a src attribute. The value of this attribute<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					is then the name of your JavaScript file.<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					E.g.: "script.js"<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					One thing that is very important though is that<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					you have to make sure that both files are in the<br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					exact same folder.
					</p>
				</div>
			</div>
        </div>
    </body>
</html>