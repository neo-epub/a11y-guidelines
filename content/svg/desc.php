<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg010'; $nav=1; $nav_items=array('exes','reqs','res'); $category='svg'; $page_name='Titles and Descriptions'; ?>
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
		
		<section id="svg010" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg010-desc" class="usage">
				<p>SVG images that are significant to the publication should always include embedded titles (<code>title</code>)
					and descriptions (<code>desc</code>) to aid readers using assistive technologies.</p>
				
				<p>The description provided should be commensurate with the information contained in the image: use 
					<code>alt</code>-like descriptions for simple images and longer descriptions for complex ones.</p>
				
				<p>If an SVG image is purely decorative, do not include a title or description. The SVG element should
					additional be identified as presentational using the ARIA <code>role</code> attribute.</p>
				
				<p>All significant graphical components within the SVG image should contain their own title and/or 
					description to improve the overall accessibility of the image.</p>
				
			</section>
			
			<section id="svg010-ex" class="example">
				<h3>Examples</h3>
				<figure id="svg010-ex01">
					<figcaption>Example 1 &#8212; Including an SVG title and description</figcaption>
					<pre class="prettyprint linenums"><code>&lt;svg
     xmlns="http://www.w3.org/2000/svg"
     xml:lang="en">
   &lt;title>The New EPUB Logo&lt;/title>
   &lt;desc>
      The EPUB logo is a lower-case letter E that has 
      been tilted 45 degrees to counter-clockwise so 
      that it appears to be sitting in balance on its 
      lower-left corner. The E is drawn as a single, 
      unclosed line of green starting at the centre 
      of the image, moving to the outer edge and then 
      continuing around in a box-like pattern. The
      external corners have all been rounded.
   &lt;/desc>
   &#8230;
&lt;/svg></code></pre>
				</figure>
				
				<figure id="svg010-ex02">
					<figcaption>Example 2 &#8212; A decorative SVG</figcaption>
					<pre class="prettyprint linenums"><code>&lt;svg
     xmlns="http://www.w3.org/2000/svg"
     xml:lang="en"
     role="presentation">
   &#8230;
&lt;/svg></code></pre>
				</figure>
				
				<p>See also <a href="http://www.w3.org/TR/SVG-access/#Fig-2.2">Example 2.2</a> in the Accessibility Features
					of SVG W3C Note for an example showing component titles and descriptions.</p>
			</section>
			
			<section id="svg010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1  &#8212; <a href="http://www.w3.org/TR/SVG/struct.html#DescriptionAndTitleElements">The ‘desc’ and ‘title’ elements</a></li>
					<li>SVG 1.1  &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>SVG A11y Note  &#8212; <a href="http://www.w3.org/TR/SVG-access/#Equivalent">Equivalent Alternatives</a></li>
				</ul>
			</section>
			
			<section id="svg010-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/html-alt-techniques/">HTML5: Techniques for providing useful text alternatives</a></li>
					<li><a href="http://www.cs.tut.fi/~jkorpela/html/alt.html">Guidelines on alt texts in img elements</a></li>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>