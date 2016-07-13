<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='sc005'; $nav=1; $nav_items=array('ex','reqs'); $category='script'; $page_name='Progressive Enhancement'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<?php include_once('../../includes/js.php'); ?> 
		<style type="text/css">
			span#secret { color: rgb(255,0,0); }
			
			div#revealed { width: 100%; text-align: center; }
			
			span.letter {
				font-family: "Times New Roman";
				font-size: 240%;
				font-weight: bold;
				color: rgb(255,0,0);
				text-shadow: rgb(0,0,0) 1px 1px 2px;
				animation: bleedin 2s;
				-moz-animation: bleedin 2s;
				-webkit-animation: bleedin 2s;
			}
			
			@keyframes bleedin
			{
				from { font-weight: normal; font-size: 0%; background: rgb(255,0,0); text-shadow: rgb(0,0,0) 1px 1px 50px; }
				to { font-weight: bold; font-size: 240%; background: rgb(255,255,255); text-shadow: rgb(0,0,0) 1px 1px 2px; }
			}
			
			@-moz-keyframes bleedin
			{
				from { font-weight: normal; font-size: 0%; background: rgb(255,0,0); text-shadow: rgb(0,0,0) 1px 1px 50px; }
				to { font-weight: bold; font-size: 240%; background: rgb(255,255,255); text-shadow: rgb(0,0,0) 1px 1px 2px; }
			}
			
			@-webkit-keyframes bleedin
			{
				from { font-weight: normal; font-size: 0%; background: rgb(255,0,0); text-shadow: rgb(0,0,0) 1px 1px 50px; }
				to { font-weight: bold; font-size: 240%; background: rgb(255,255,255); text-shadow: rgb(0,0,0) 1px 1px 2px; }
			}
		</style>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="sc005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="sc005-desc" class="usage">
				<p>Although EPUB 3 adds support for scripted interactivity via JavaScript, it also places some constraints
					on the way you can use interactivity to ensure publications remain accessible. The guiding principle
					for scripting is that of progressive enhancement, namely:</p>
				
				<blockquote>
					<p>when the document is rendered by a Reading System without scripting support or with scripting 
						support disabled, the top-level document content must retain its integrity, remaining consumable 
						by the User without any information loss or other significant deterioration.</p>
					<cite><a href="http://idpf.org/epub3/latest/contentdocs#confreq-cd-scripted-spine">EPUB 
						Content Documents 3.0</a></cite>
				</blockquote>
				
				<p>Progressive enhancement does not mean that you cannot script content, but that scripting must not be
					required. It is perfectly valid, for example, to remove content from the default rendering and replace
					it with an enhanced experience when scripting is available. It is likewise permitted to augment the
					default rendering with scripted interactivity. What you must avoid doing is scripting content such
					that without the scripting the primary narrative is not available in whole or part.</p>
				
				<p>Validators alone cannot verify conformance to this criteria, so care must be taken when creating content 
					to ensure that the key principles are observed. Notably:</p>
				
				<ul>
					<li>do not include content that can only be accessed (made visible) through scripted interaction.</li>
					<li>do not script-enable content based on a reader’s preferences, location, language, or
						any other setting (without a default rendering).</li>
					<li>do not require scripting in order for the reader to continue moving through the
						content (e.g., choose your own adventure books).</li>
				</ul>
				
				<p>Whenever adding script, do so in a way that augments.</p>
				
				<p>A common example of a scripted enhancement is the adding line numbering to code snippets.
					Many content creators like to use ordered lists inside <code>pre</code> tags to emulate 
					line numbers, but an ordered list can be distracting to someone using an assistive technology, 
					and consufing and ugly to someone not using a CSS-enabled reading system.</p>
				
				<p>Instead of hard-coding the markup, a progressive enhancement technique would be to lay out your code 
					samples so that they render as expected in the default preformatted view. You can then script, 
					or grab a library, that can dynamically add the ordered list tagging to the element (which is 
					what this site does). This approach ensures a baseline of readability in the most basic reading 
					scenarios, while providing a richer visual view for those who have more advanced reading systems.</p>
			</section>
			
			<section id="sc005-ex" class="example">
				<h3>Example</h3>
				<figure id="sc00-ex01">
					<figcaption>Example 1 &#8212; An enhanced link</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;p>
   The &lt;span id="code">secret code&lt;/span> 
   &lt;span id="secret">D E A D M A N&lt;/span> had to be
   spelled out to gain passage to the pirates' lair.
&lt;/p>

&lt;div id="revealed" aria-live="assertive"/>

&lt;style type="text/css">

   span#secret { color: rgb(255,0,0); }
   
   div#revealed { width: 100%; text-align: center; }
   
   span.letter { 
      font-family: "Times New Roman";
      font-size: 240%;
      font-weight: bold;
      color: rgb(255,0,0);
      text-shadow: rgb(0,0,0) 1px 1px 2px;
      animation: bleedin 2s;
   }

   @keyframes bleedin {
      from {
         font-weight: normal;
         font-size: 0%;
         background: rgb(255,0,0);
         text-shadow: rgb(0,0,0) 1px 1px 50px;
      }
      to {
         font-weight: bold;
         font-size: 240%;
         background: rgb(255,255,255);
         text-shadow: rgb(0,0,0) 1px 1px 2px;
      }
   }

&lt;/style>

&lt;script type="text/javascript">
   &lt;![CDATA[
   var code = document.getElementById('code');
         code.style.color = 'rgb(0,0,200)';
         code.onclick = function () { revealCode(); };
         code.setAttribute('role', 'button');
         code.setAttribute('tabindex', 0);
   
   var secret = document.getElementById('secret'); 
         secret.style.visibility = 'hidden';
         secret.style.display = 'none';
         secret.setAttribute('aria-hidden', true);
   
   function revealCode() {
      var revealed = document.getElementById('revealed');
      if (revealed.childNodes.length == 0) {
         var codeArray = 'DEADMAN'.split('');
         var i = 0;
         var revealLetters = setInterval(function(){
            if (i &lt; codeArray.length) {
               var letter = document.createElement('span');
               letter.setAttribute('class', 'letter');
               letter.appendChild(document.createTextNode(codeArray[i]));
               revealed.appendChild(letter);
               i++;
            }
            
            else { 
               clearInterval(revealLetters);
            }
         }, 300);
      }
   }
   ]]&gt;
&lt;/script></code></pre>
					<p>A working example of this code follows:</p>
					
					<p>
						The <span id="code">secret code</span> <span id="secret">D E A D M A N</span> had to be
						spelled out to gain passage to the pirates' lair.
					</p>
					
					<div id="revealed" aria-live="assertive"/>
					
					<script type="text/javascript">
						<![CDATA[
							
							var code = document.getElementById('code');
								code.style.color = 'rgb(0,0,200)';
								code.onclick = function () { revealCode(); };
								code.setAttribute('role', 'button');
								code.setAttribute('tabindex', 0);
							
							var secret = document.getElementById('secret'); 
								secret.setAttribute('hidden', 'hidden');
								secret.setAttribute('aria-hidden', true);
						
							function revealCode() {
								var revealed = document.getElementById('revealed');
								if (revealed.childNodes.length == 0) {
									var codeArray = 'DEADMAN'.split('');
									var i = 0;
									var revealLetters = setInterval(function(){
										if (i < codeArray.length) {
											var letter = document.createElement('span');
											letter.setAttribute('class', 'letter');
											letter.appendChild(document.createTextNode(codeArray[i]));
											revealed.appendChild(letter);
											i++;
										}
										
										else { 
											clearInterval(revealLetters);
										}
									}, 300);
								}
							}
						]]>
					</script>
				</figure>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>