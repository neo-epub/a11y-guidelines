<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='css010'; $nav=1; $nav_items=array('exes','reqs'); $category='style'; $page_name='Background Images'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<?php include_once('../../includes/js.php'); ?> 
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="css010" class="section">
			<?php include_once('../../includes/page-title.php'); ?> 
			
			<section id="css010-desc" class="usage">
				<p>Ensuring sufficient contrast between background colors and images is necessary to ensure
					that readers who have difficulty distinguishing contrasts are able to read your publication. Avoid 
					overlaying text on noisy (multi-color) background images, and relying on positioning to avoid color contrasts, as
					different reading system may reflow content in unexpected ways.</p>
				
				<p>Also ensure that background images do not convey information necessary to understand the publication,
					or to be able to interact with it. Unlike embedded images, backgrounds cannot be given text
					alternatives or descriptions and a reader will not know a change has occurred.</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>The <code>background-image</code> property remains largely unsupported because of the reflowable
						nature of EPUBs. Although support may increase as fixed-layout publications get supported,
						use of images is not recommended in general, reflowable publications.</p>
				</div>
				
				<p>For fixed layout publications, try to limit backgrounds to simple atmospheres. If components of the
					background are important to comprehension, see if they can be overlaid using <code>img</code>
					tags so that descriptions can be added.</p>
			</section>
			
			<section id="css010-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="css010-ex01">
					<figcaption>Example 1 &#8212; Setting a background image using CSS</figcaption>
					<pre class="prettyprint linenums"><code>body {
   background-image: url('img/wonderland02.jpg');
}</code></pre>
				</figure>
				
				<figure id="css010-ex02">
					<figcaption>Example 2 &#8212; Overlaying images on a background</figcaption>
					<p>This example shows how a children's picture book could be made more accessible by combining
						dynamic elements with a static background. In a real-world scenario, CSS would be used for
						more than just positioning the images and dialogue, but could enhance the display for visual 
						rendering by adding advanced animations and transforms (for systems that support these features).</p>
					<p>Using this approach, the dialogue and text alternatives convey information that will allow
						a reader to follow the storyline. A reader with basic visual rendering will see a static
						version of the ultimate display, and a reader with an advanced system will get the full experience.
						This gradual increase in functionality is at the root of progressive enhancement.</p>
					<p>The example makes use of the EPUB 3 fixed layout metadata to define the page size.</p>
					<pre class="prettyprint linenums"><code>&lt;html &#8230;>
   &lt;head>
      &lt;meta 
            name="viewport"
            content="width=1024, height=600"/>
      &#8230;
      &lt;style type="text/css">
         body {
            background-image: url('img/oz02.jpg');
         }
         
         img#oz {
            position: absolute;
            left: 0px;
            top: 25px;
         }
         
         p#oz-speaks {
            position: absolute;
            left: 120px;
            top: 50px;
         }
         
         img#dorothy {
            position: absolute;
            right: 0px;
            top: 125px;
         }
         
         p#oz-speaks {
            position: absolute;
            right: 140px;
            top: 100px;
         }
      &lt;/style>
   &lt;/head>
   &lt;body>
      &lt;img id="oz" 
           src="graphics/wizard001.jpg"
           alt="A giant head floats over a chair in the middle of the room"/>
      
      &lt;p id="oz-speaks">
         I am Oz, the Great and Terrible.
         Who are you, and why do you seek me?
      &lt;/p>
      
      &lt;img id="dorothy"
         src="graphics/dorothy162.jpg"
         alt="Dorothy works up the courage to reply"/>
      
      &lt;p id="dorothy-speaks">
         I am Dorothy, the Small and Meek.
         I have come to you for help.
      &lt;/p>
   &lt;/body>
&lt;/html></code></pre>
				</figure>
			</section>
			
			<section id="css010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G17.html">G17: Ensuring that a contrast ratio of at least 7:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G18.html">G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G145.html">G145: Ensuring that a contrast ratio of at least 3:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G138.html">G138: Using semantic markup whenever color cues are used</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>