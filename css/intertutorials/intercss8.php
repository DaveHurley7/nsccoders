<!DOCTYPE html>
<html>
    <head>
        <title>NSC Coders: Intermediate CSS- Ids and Classes</title>
		<?php 
			require "/home/a5942363/public_html/extfiles/navbar.php";
		?>
			<div>
			    <h1>Intermediate CSS</h1>
				<div id="csscont">
				    <div>
					    <a href="http://www.nsccoders.net16.net/css/intertutorials/intercss7.php" class="prev">Previous</a>
					</div>
					<div>
					    <p>Ids and Classes</p>
					</div>
					<div>
					    <a href="http://www.nsccoders.net16.net/css/intertutorials/intercss9.php" class="next">Next</a>
					</div>
				</div>
				<br/>
				<br/>
				<div style="color:lightgrey;">
				<p id="intro">
				To do ids and classes, you will need to use:
				<br/><br/><span id="tag">id &nbsp;&nbsp; class</span>
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Ids and classes are basically ways of taking
				<img class="main" src="http://www.nsccoders.net16.net/images/css/idandclass/htmliac.png" style="float:right;position:relative;left:-110px;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				specific items from a group of items and<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				changing them only. For example, if you had<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				5 paragraphs but wanted to make 2 of them<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				blue, give the two paragraphs an id or class
				<img class="main" src="http://www.nsccoders.net16.net/images/css/idandclass/cssiac.png" style="float:right;position:relative;left:-160px;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				and use CSS to change them. 
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				To give an element an id or class, add it in as<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				an attribute. For id: &nbsp;id=" " &nbsp;and for class:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				class=" " &nbsp;, and then, give it any value you<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				want but it can't start with a number. Then, in<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				CSS, to choose an element with an id or class,<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				put in &nbsp;# &nbsp;, for ids or &nbsp;. &nbsp;, for classes followed by<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				the name of your value.
				<img class="main" src="http://www.nsccoders.net16.net/images/css/idandclass/iacresult.png" style="float:right;position:relative;left:-160px;">
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				In the example on the right, we have a paragraph<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				with an id of 'nsc' and another with a class of<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				'coders'. Using CSS, we are going to change the<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				paragraph with identifier 'nsc' to a colour of light<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				green and the paragraph with identifier 'coders' to<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				have a font-size of '20px'. We also have a third<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				paragraph with no identifier. The result is shown.
				</p>
				</div>
			</div>
        </div>
    </body>
</html>