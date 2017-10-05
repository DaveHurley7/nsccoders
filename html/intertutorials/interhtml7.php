<!DOCTYPE html>
<html>
    <head>
        <title>NSC Coders: Intermediate HTML- Video</title>
		<?php 
			require "/home/a5942363/public_html/extfiles/navbar.php";
		?>
			<div>
			    <h1>Intermediate HTML</h1>
				<div id="htmlcont">
				    <div>
					    <a href="http://www.nsccoders.net16.net/html/intertutorials/interhtml6.php" class="prev">Previous</a>
					</div>
					<div>
					    <p>Videos</p>
					</div>
					<div>
					    <a href="http://www.nsccoders.net16.net/html/intertutorials/interhtml8.php" class="next">Next</a>
					</div>
				</div>
				<br/>
				<br/>
				<div style="color:lightgrey;">
				<p id="intro">
				To add videos to your website,<br/> you will need the following tags:
				<br/><span id="tag">&lt;video&gt;&nbsp;&nbsp;&lt;source&gt;</span>
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				To add a video to your website, the first thing
				<img class="main" src="http://www.nsccoders.net16.net/images/html/video/videocode.png" style="float:right;"><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				you should do is pretty obvious, get a video.<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Next, you will need to convert it to both .ogg<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				and .mp4 so that web browsers can support it.<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				There are two good converters you can use to<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				do this, one for <a href="http://www.any-video-converter.com">PC</a> and one for <a href="http://www.mirovideoconverter.com/">Mac</a>. Note: In<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				AVC, the PC converter, if there is no option to<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				save it as .ogg, save it as .ogv.
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Next, just like an image, put the video in the
				<video style="float:right;position:relative;left:-30px;" height="240" width="320" controls>
					<source src="http://www.nsccoders.net16.net/videos/html/video/vidfortutorial.mp4" type="video/mp4">
					<source src="http://www.nsccoders.net16.net/videos/html/video/vidfortutorial.ogv" type="video/ogg">
				</video><br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				exact same folder as your HTML file. Then add<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				a pair of &lt;video&gt; tags into your HTML code.<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Next, give the video three attributes: height,<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				width and controls. Height and width will give<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				the screen size for the video and controls, which<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				should have no value, will tell the browser to<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				allow the user to control the video.
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Next, between the &lt;video&gt; tags, insert a two<br/>	
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&lt;source&gt; tags, one for .mp4 and one for .ogg.<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Give both tags two attributes: src and type. The<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				src attribute will contain the name and file type<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				of the video and the type attribute will be<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				"video/ogg" or "video/mp4" depending on the<br/> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				file type.
				</p>
				<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				</p>-->
				</div>
			</div>
        </div>
    </body>
</html>