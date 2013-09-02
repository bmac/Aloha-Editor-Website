<? include('inc/header.inc'); ?>

</head>

<body>

	<div id="wrapper" class="container_20">

<? include('inc/menu.inc'); ?>
		
		<div id="teaser" class="container_20">
			<div class="grid_14">
			
				<h2>What is Aloha Editor?</h2>
				<a href='https://developer.mozilla.org/en/JavaScript/Guide' title='JS Tutorial' style="float:left;padding:15px 25px 5px 0; border:none"><img alt="" src='http://static.jsconf.us/promotejsv.gif' height='200' /></a>
				<p>Aloha Editor is a semantic Rich Text Editor framework written in Javascript with best
				support of xHTML5. You can integrate it in a CMS, blog, wiki software or any other project
				where you need to edit content with a web based tool. Use it like a <b>supersonic textarea</b>. 
				You can edit <a href="https://github.com/alohaeditor/Aloha-Editor/blob/dev/src/lib/aloha/editable.js#L310">almost any DOM element</a> with this supersonic textarea, but you need to care about 
				configuration and storage.</p>
				
				<h2>What Aloha Editor is NOT!</h2>
				<p>Aloha Editor is NOT a HTML Editor to install on a desktop nor it is a CMS.</p>
				
				<h2 id="html5">Why the HTML5 Editor?</h2>
				<img alt="" src="logo/Aloha%20Editor%20HTML5%20contenteditable%20transparent%20256.png" style="float:left;padding:25px 25px 5px 0; "><p>Aloha Editor works perfectly in all current browsers and websites using HTML4! It is the HTML5 Editor because it <a href="https://github.com/alohaeditor/Aloha-Editor/blob/dev/src/lib/util/dom.js#L98">implements all functionality</a>
				respecting with no compromise the <a href="http://www.whatwg.org/specs/web-apps/current-work/">HTML5 specification</a>. It aims to generate <b>full compliant xHTML5 content</b>, but you don't need to use HTML5 specific methods, if you don't want to. The Aloha Editor uses and extends the attribute
				<a href="http://blog.whatwg.org/the-road-to-html-5-contenteditable">contenteditable</a>, which was introduced in the HTML standard with version 5. Most current
				browsers support that attribute, but their implementation is inconsistent due to erroneous 
				implementations and the lack of detail of the HTML5 specification when it comes to DOM manipulation. Aloha Editor makes contenteditable useable.</p>
				
				<h2>The Aloha Spirit</h2>
				<img alt="" src="images/aloha-editor-logo.png" style="float:right;width:150px;padding-right:25px"/>
				<p>Aloha is about passion! The Aloha Editor is designed and made with passion from real passionate people.
				Aloha Editor's vision is to edit anywhere. We move the user
				to the center of everything. Every action should be completed with the minimum possible
				interactions. Everything that can be done automatically should be done 
				automatically. All interactions should react in realtime and give immediate clear feedback
				to the user. The user should see the exact result of its action immediately. No apply
				or confirm action should be necessary. It's done when you do it. Instead everthing can
				be reverted.</p>

				<h2>Why Aloha?</h2>
				<p>"Clemens and I started the project on January 18th. We wanted to build the world's 
				most advanced editor and I wanted a codename for the project. So we looked into wikipedia and
				I found out that James Cook discovered Hawaii on January 18th. So I asked Clemens: What 
				would the Hawaiians have said to James Cook? - The Aloha Editor was born" - Haymo Meran</p>

				<h2>Aloha Licensing</h2>
				<p>Find out more about how to <a href="/license.php">license Aloha Editor</a> ...</p>

				<h2>How to get in contact?</h2>
				<p>Visit our <a href="https://github.com/alohaeditor/Aloha-Editor" target="_blank">coder-community</a>, join <a href="http://getsatisfaction.com/aloha_editor" target="_blank">the discussion</a> or <a href="<?=$path?>contact.php">contact us</a>.</p>

<? include('inc/translation.inc'); ?>
				
			</div>
			<div class="grid_6">

<? include('inc/team.inc'); ?>

			</div>
			<div class="clear"></div>
		</div>

<? include('inc/footer.inc'); ?>

	</div>

</body>
</html>
