<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">

<!-- Begin Jekyll SEO tag v2.8.0 -->
<title>TFA:360 VR</title>
<meta name="generator" content="Jekyll v3.9.0">
<meta property="og:title" content="Welcome to GitHub Pages">
<meta property="og:locale" content="en_US">
<meta name="description" content="TFA 360VR">
<meta property="og:description" content="TFA 360VR">
<link rel="canonical" href="https://marklibarios.github.io/tfa-360vr/">
<meta property="og:url" content="https://marklibarios.github.io/tfa-360vr/">
<meta property="og:site_name" content="TFA 360VR">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary">
<meta property="twitter:title" content="Welcome to GitHub Pages">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebSite","description":"test","headline":"Welcome to GitHub Pages","name":"test","url":"https://marklibarios.github.io/tfa-360vr/"}</script>
<!-- End Jekyll SEO tag -->

    <link rel="stylesheet" href="./assets/css/style.css">

	<style>
	* {
		box-sizing: border-box;
	}

	#myInput {
		background-image: url('./assets/images/searchicon.png');
		background-position: 10px 12px;
		background-repeat: no-repeat;
		width: 100%;
		font-size: 16px;
		padding: 12px 20px 12px 40px;
		border: 1px solid #ddd;
		margin-bottom: 12px;
	}

	#myUL {
		list-style-type: none;
		padding: 0;
		margin: 0;
	}

	#myUL li a {
		border: 1px solid #ddd;
		margin-top: -1px; /* Prevent double borders */
		background-color: #f6f6f6;
		padding: 12px;
		text-decoration: none;
		font-size: 18px;
		color: black;
		display: block
	}

	#myUL li a:hover:not(.header) {
		background-color: #eee;
	}
	</style>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!-- start custom head snippets, customize with your own _includes/head-custom.html file -->

<!-- Setup Google Analytics -->



<!-- You can set your favicon here -->
<!-- link rel="shortcut icon" type="image/x-icon" href="/test/favicon.ico" -->

<!-- end custom head snippets -->

</head>
	<body>
    	<div class="wrapper">
    		<header>
        		<h1><a href="https://marklibarios.github.io/tfa-360vr/">TFA 360 VR</a></h1>
				<p>Tan, Frankum & Associates Inc.</p>
				<p class="view"><a href="https://github.com/marklibarios/tfa-360vr">View the Project on GitHub <small>marklibarios/tfa-360vr</small></a></p>
			</header>
			
			<section>

			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for VR.." title="Type in a VR">

<ul id="myUL">
<li>
<div class="language-markdown highlighter-rouge">
<div class="highlight">
<pre class="highlight">
<code><span class="title">Ayala Corporate Tower (7th Floor)</span>
<span class="gh">Salcedo, Ayala, Makati City</span>
<a href = "./vr/sample/index.html" class="gs">Take VR</a>
</code>
</pre>
</div>
</div>
</li>

<li>
<div class="language-markdown highlighter-rouge">
<div class="highlight">
<pre class="highlight">
<code><span class="title">Ayala Corporate Tower (8th Floor)</span>
<span class="gh">Salcedo, Ayala, Makati City</span>
<a href = "./vr/sample/index.html" class="gs">Take VR2</a>
</code>
</pre>
</div>
</div>
</li>
</ul>
			</section>

    		<footer>
        		<p>This project is maintained by <a href="https://github.com/marklibarios">marklibarios</a></p>
    		</footer>
    	</div>
    	
		<script src="./assets/js/scale.fix.js.download"></script>
		<script>
			function myFunction() {
				var input, filter, ul, li, a, i, txtValue;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				ul = document.getElementById("myUL");
				li = ul.getElementsByTagName("li");
				for (i = 0; i < li.length; i++) {
					//a = li[i].getElementsByTagName("a")[0];
					a = li[i].getElementsByClassName("title")[0];
					txtValue = a.textContent || a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						li[i].style.display = "";
					} else {
						li[i].style.display = "none";
					}
				}
			}
		</script>
	</body>
</html>