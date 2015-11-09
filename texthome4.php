
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Horizontal examples - Sly</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/php/css/normalize.css">
		<link rel="stylesheet" href="/php/css/font-awesome.css">
		<link rel="stylesheet" href="/php/css/ospb.css">
		<link rel="stylesheet" href="/php/css/horizontal.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>

		<script src="/js/vendor/modernizr.js"></script>
	</head>
	<body>
		<header class="pagespan">
			<h1>Sly</h1>
			<h2>Horizontal Examples</h2>
			<p>Horizontal navigations are - from their nature - all item based</p>
		</header>

		<div class="pagespan container">
			<div class="wrap">
				<h2>Basic <small>- with all the navigation options enabled</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame" id="basic">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<ul class="pages"></ul>

				<div class="controls center">
					<button class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> page</button>
					<button class="btn prev"><i class="icon-chevron-left"></i> item</button>
					<button class="btn backward"><i class="icon-chevron-left"></i> move</button>

					<div class="btn-group">
						<button class="btn toStart">toStart</button>
						<button class="btn toCenter">toCenter</button>
						<button class="btn toEnd">toEnd</button>
					</div>

					<div class="btn-group">
						<button class="btn toStart" data-item="10"><strong>10</strong> toStart</button>
						<button class="btn toCenter" data-item="10"><strong>10</strong> toCenter</button>
						<button class="btn toEnd" data-item="10"><strong>10</strong> toEnd</button>
					</div>

					<div class="btn-group">
						<button class="btn add"><i class="icon-plus-sign"></i></button>
						<button class="btn remove"><i class="icon-minus-sign"></i></button>
					</div>

					<button class="btn forward">move <i class="icon-chevron-right"></i></button>
					<button class="btn next">item <i class="icon-chevron-right"></i></button>
					<button class="btn nextPage">page <i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>Centered <small>- activated or middle item is centered when possible</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame" id="centered">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<div class="controls center">
					<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
					<button class="btn next">next <i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>Force Centered <small>- active item is always centered, and middle item is always activated</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame" id="forcecentered">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<div class="controls center">
					<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
					<button class="btn next">next <i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>Cycling by items <small>- 1 second interval, enabled pause on hover</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame" id="cycleitems">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<div class="controls center">
					<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>

					<div class="btn-group">
						<button class="btn pause"><i class="icon-pause"></i> pause</button>
						<button class="btn resume"><i class="icon-play"></i> resume</button>
						<button class="btn toggle"><i class="icon-pause"></i> toggle</button>
					</div>

					<button class="btn next">next <i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>Cycling by pages <small>- starts paused, 1 second interval, enabled pause on hover</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame" id="cyclepages">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<ul class="pages"></ul>

				<div class="controls center">
					<button class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> page</button>

					<div class="btn-group">
						<button class="btn pause"><i class="icon-pause"></i> pause</button>
						<button class="btn resume"><i class="icon-play"></i> resume</button>
						<button class="btn toggle"><i class="icon-pause"></i> toggle</button>
					</div>

					<button class="btn nextPage">page <i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>One item per frame</h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame oneperframe" id="oneperframe">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li>
					</ul>
				</div>

				<div class="controls center">
					<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
					<button class="btn next">next <i class="icon-chevron-right"></i></button>
				</div>
			</div>

			<div class="wrap">
				<h2>Crazy <small>- smart navigation with each item having a different size and margins</small></h2>

				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>

				<div class="frame crazy" id="crazy">
					<ul class="clearfix">
						<li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li>
						<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
						<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
						<li>28</li><li>29</li>
					</ul>
				</div>

				<ul class="pages"></ul>

				<div class="controls center">
					<button class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> page</button>
					<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
					<button class="btn backward"><i class="icon-chevron-left"></i> move</button>

					<div class="btn-group">
						<button class="btn toStart">toStart</button>
						<button class="btn toCenter">toCenter</button>
						<button class="btn toEnd">toEnd</button>
					</div>

					<div class="btn-group">
						<button class="btn toStart" data-item="10"><strong>10</strong> toStart</button>
						<button class="btn toCenter" data-item="10"><strong>10</strong> toCenter</button>
						<button class="btn toEnd" data-item="10"><strong>10</strong> toEnd</button>
					</div>

					<div class="btn-group">
						<button class="btn add"><i class="icon-plus-sign"></i></button>
						<button class="btn remove"><i class="icon-minus-sign"></i></button>
					</div>

					<button class="btn forward">move <i class="icon-chevron-right"></i></button>
					<button class="btn next">next <i class="icon-chevron-right"></i></button>
					<button class="btn nextPage">page <i class="icon-chevron-right"></i><i class="icon-chevron-right"></i></button>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="js/vendor/plugins.js"></script>
		<script src="/js/sly.min.js"></script>
		<script src="js/horizontal.js"></script>

		<!-- Google Analytics -->
		<script>
			var _gaq=[['_setAccount','UA-838758-7'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>