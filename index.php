<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	<title>Camel Calculator</title>

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="shortcut icon" href="/img/favicon.ico">

	<meta itemprop="name" content="Camel Calculator">
	<meta name="twitter:title" content="Kamelrechne">
	<meta name="description" content="Here you can calculate how many camels your girlfriend or boyfriend is worth.">
	<meta itemprop="description" content="Here you can calculate how many camels your girlfriend or boyfriend is worth.">
	<meta name="twitter:description" content="Tere you can calculate how many camels your girlfriend or boyfriend is worth.">
	<meta name="keywords" content="camel calculator, camels game, girlfriend game, boyfriend game">
	<meta itemprop="image" content="/img/camel.png">
	<meta name="twitter:image:src" content="/img/camel.png">
	<meta property="og:image" content="/img/came,png">
	<meta property="og:url" content="http://kamelrechner.eu/en/male">
	<link rel="stylesheet" media="screen, projector, print" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">	
</head>

<body>
	<header class="size-1140">
		<div class="line">
			<div class="s-12 l-12">
				<a href="/en" class="logo"><img src="/img/camel-logo-2.png">Camel Calulator</a>
	             <div class="lang-select">                          
	                <a href="/de/male"><img src="/img/flag-de.png" width="32"></a>
	                <a href="/en/male"><img src="/img/flag-en.png" width="32"></a>
	            </div>
	        </div>
		</div>
	</header>

	<div class="size-1140 stager">
		<div class="line">
			<div class="s-12 l-5 l-offset-7">
				<h1>How many camels for your boyfriend?</h1>
				<p>Here you can calculate how many camels your boyfriend is worth.</p>
				<p>Ready to find out? Start the test now!</p>
			</div>
		</div>
	</div>

	<form name="male" method="post" id="form-hide" onsubmit="calc(); return false;">

	<div class="size-1140 sectionone">
		<div class="line">
			<div class="s-12 l-6">
				<h2>How old is your boyfriend?</h2>
				<output name="amount" id="amount" for="rangeInput">14</output>
				<input type="range" class="range" name="age" min="14" max="70" value="14" id="rangeInput" oninput="amount.value=rangeInput.value"/>
			</div>
			<div class="s-12 l-6">
				<h2>How tall is your boyfriend (cm)?</h2>
				<output name="amounttwo" id="amounttwo" for="rangeInputtwo">140</output>
				<input type="range" class="range" name="height" min="140" max="250" value="140" id="rangeInputtwo" oninput="amounttwo.value=rangeInputtwo.value"/>
			</div>
		</div>
	</div>

	<div class="size-1140 sectiontwo">
		<div class="line">
			<div class="s-12 l-6">
				<h2>What is your boyfriend haircolor?</h2>
				<nav>
                    <input type="radio" name="hair" value="1" id="blonde" checked="checked" />
                    <label for="blonde">
                        Blonde
                    </label>

                    <input type="radio" name="hair" value="2" id="brown" />
                    <label for="brown">
                        Brown
                    </label>

                    <input type="radio" name="hair" value="3" id="black" />
                    <label for="black">
                       Black
                    </label>

                    <input type="radio" name="hair" value="4" id="red"/>
                    <label for="red">
                        Red
                    </label>
                </nav>
			</div>
			<div class="s-12 l-6">
				<h2>What is your Boyfriend hair lenght?</h2>
				<nav>
                    <input type="radio" name="hairl" value="1" id="long" checked="checked" />
                    <label for="long"">
                        Long
                    </label>

                    <input type="radio" name="hairl" value="2" id="middle" />
                    <label for="middle">
                        Middle
                    </label>

                    <input type="radio" name="hairl" value="3" id="short" />
                    <label for="short">
                       Short
                    </label>

                    <input type="radio" name="hairl" value="4" id="bald" />
                    <label for="bald">
                        bald
                    </label>
                </nav>
			</div>
		</div>
	</div>

	<div class="size-1140 sectionthree">
		<div class="line">
			<div class="s-12 l-6">
				<h2>What is your Boyfriend eye-color?</h2>
				<nav>
                    <input type="radio" name="eye" value="10" id="blue" checked="checked" />
                    <label class="one" for="blue">
                        <img src="img/eye-blue.png" alt="">
                    </label>

                    <input type="radio" name="eye" value="20" id="green" />
                    <label class="two" for="green">
                        <img src="img/eye-green.png" alt="">
                    </label>

                    <input type="radio" name="eye" value="30" id="ebrown" />
                    <label class="three" for="ebrown">
                       <img src="img/eye-brown.png" alt="">
                    </label>

                    <input type="radio" name="eye" value="40" id="eblack" />
                    <label class="four" for="eblack">
                        <img src="img/eye-black.png" alt="">
                    </label>
                </nav>
               </div>

                <div class="s-12 l-6">
				<h2>What is your Boyfriend body type</h2>

				<nav>
                    <input type="radio" name="body" value="0" id="muscle" checked="checked" />
                    <label class="one" for="muscle">
                        <img src="img/body-1.png" alt="">
                    </label>

                    <input type="radio" name="body" value="25" id="slim" />
                    <label class="two" for="slim">
                        <img src="img/body-2.png" alt="">
                    </label>

                    <input type="radio" name="body" value="50" id="fat" />
                    <label class="three" for="fat">
                       <img src="img/body-3.png" alt="">
                    </label>
                </nav>

			</div>
		</div>
	</div>

	<div class="size-1140 sectionfour">
		<div class="line">
			<div class="s-12 l-12">
				<button type="submit" class="button">calculate</button>
			</div>
		</div>
	</div>

	</form>

	<div class="size-1140 result" id="result">
		<div class="line">
			<div class="s-12 l-12">
			
			</div>
		</div>
	</div>


<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/scripts/script.js"></script>

</body>

</html>
