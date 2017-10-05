<!DOCTYPE html>
<html>
    <head>
        <title>NSC Coders: Intermediate CSS- Floating and Clearing</title>
		<?php 
			require "/home/a5942363/public_html/extfiles/navbar.php";
		?>
			<div>
			    <h1>Intermediate</h1>
				<div id="csscont">
				    <div>
					    <a href="http://www.nsccoders.net16.net/css/intertutorials/intercss9.php" class="prev">Previous</a>
					</div>
					<div>
					    <p>Floating and Clearing</p>
					</div>
					<div>
					    <p href="http://www.nsccoders.net16.net/css/intertutorials/intercss10.php" class="next" style="color:rgb(0,64,0);">Next</p>
					</div>
				</div>
				<br/>
				<br/>
				<div style="color:lightgrey;">
				<p id="intro">
				To float and clear elements,<br/> you will need to use the properties:
				<br/><br/><span id="tag">float &nbsp;&nbsp; clear</span>
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Floating is like text-align but a lot more
				<img class="main" src="http://www.nsccoders.net16.net/images/css/floatandclear/floathtml.png" style="float:right;position:relative;left:-130px;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				suitable for non-text elements like images,<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				video, tables etc. It's very useful because if<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				you inserted an image tag in the middle of a<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				paragraph, you could use it to fix the<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				organisation between the paragraph and
				<img class="main" src="http://www.nsccoders.net16.net/images/css/floatandclear/facresult.png" style="float:right;position:relative;left:-170px;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				image. The values you would insert would be<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				the same as the values for text-align:<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				"left"&nbsp; &nbsp;"center"&nbsp; &nbsp;"right"  
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Every element following an element with a<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				float &nbsp; property will flow around it. This<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				basically means that the paragraph's text
				<img class="main" src="http://www.nsccoders.net16.net/images/css/floatandclear/clearhtml.png" style="float:right;position:relative;left:-118px;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				will end up next to and under the element<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				with the &nbsp;float &nbsp; property. You can stop the<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				text doing this by giving it the &nbsp;clear<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				property. "both" &nbsp; would then be the value<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				of this property.
				</p>
				</div>
			</div>
        </div>
    </body>
</html>