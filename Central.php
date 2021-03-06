<?php
	session_start();
?>
<html class=" -webkit-">
    <head>
        <link href="example.css" media="all" rel="stylesheet" type="text/css" />
        <style>
			html, body {
			  height: 100%;
			  width: 100%;
			  background: linear-gradient(to bottom, 
						  rgba(103,178,111,1) 0%, 
						  rgba(76,162,205,1) 100%);
			  overflow: hidden;
			}

			.triangle {
			  -webkit-clip-path: url(#cp);
					  clip-path: url(#cp);
			  width: 300px;
			  height: 300px;
			  background-size: cover;
			  background-blend-mode: screen;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  background-color: #333;
			  background-image: url("./img/fondo.gif");
			  -webkit-transform: translateX(-65%) translateY(-50%) rotate(60deg);
					  transform: translateX(-65%) translateY(-50%) rotate(60deg);
			}
        </style>
		<title>Tri&#225;gulo con fondo animado con CSS</title>
    </head>

    <body>
        <!--<header><h1>Tri&#225;ngulo con fondo animado con CSS</h1></header>-->
        <section>
		<svg width='0' height='0'>
		  <defs>
			<clipPath id="cp" clipPathUnits="objectBoundingBox">
			  <path d="M0.500, 0.945 L0.994, 0.090 L0.006, 0.090 L0.500, 0.945 L0.500, 0.650 L0.262, 0.238 L0.738, 0.237 L0.500, 0.650z"></path>
			</clipPath>
		  </defs>
		</svg>

		<div class="triangle"></div>
        </section>
    </body>
</html>
