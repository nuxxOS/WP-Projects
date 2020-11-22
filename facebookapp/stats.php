<?php include 'header-menu.php'; ?>

<div class="stats-wrap container bg-gray clearfix">

	<div class="personal-stats container-profile clearfix">
		<h2 class="uppercase white text-left">Personal<span class="orange"> Stats</span></h2>

		<span class="date uppercase white">Date joined: 01 may 16</span>
	</div>

	<div class="container clearfix">

		<div class="total-minutes bg-black text-left clearfix">
			<h2 class="uppercase white">Total active</h2>
			<h2 class="orange">1332<span class="uppercase">Mins</span></h2>
		</div>

		<div class="most-minutes bg-yellow text-left clearfix">
			<h2 class="uppercase white">Most active week</h2>
			<h2 class="gray">255<span class="uppercase activity-minutes">Mins</span></h2>
		</div>

	</div>

</div>


<div class="activity-breakdown-wrap container clearfix">

	<div class="container-profile clearfix">
		<h2 class="white uppercase text-left clearfix">Activity breakdown</h2>
		<span class="white uppercase absolute">Overall</span>
	</div>

		<div class="breakdown-wrap container-profile clearfix">
			<div class="breakdown container-content clearfix">



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/run-walk.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Run/Walk</h5>
							<h5 class="run-walk-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width: 46%">
							<div class="overlay run-walk-arrow"></div>
						</div>
					</div>

				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/paddle-sail.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Paddle/Sail</h5>
							<h5 class="paddle-sail-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width: ">
							<div class="overlay blue-arrow"></div>
						</div>
					</div>
					
				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/classes.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Classes</h5>
							<h5 class="classes-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width:">
							<div class="overlay yellow-arrow"></div>
						</div>
					</div>
					
				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/swim.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Swim</h5>
							<h5 class="swim-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width:">
							<div class="overlay lightblue-arrow"></div>
						</div>
					</div>
					
				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/cycle.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Cycle</h5>
							<h5 class="cycle-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width:">
							<div class="overlay purple-arrow"></div>
						</div>
					</div>
					
				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/gym.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Gym</h5>
							<h5 class="gym-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width:">
							<div class="overlay red-arrow"></div>
						</div>
					</div>

				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/ski.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Ski</h5>
							<h5 class="ski-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width:">
							<div class="overlay pink-arrow"></div>
						</div>
					</div>

				</div>



				<div class="breakdown-row">

					<div class="breakdown-info">
						<div class="activity-image clearfix">
							<img src="images/racket-sports.png">
						</div>

						<div class="activity-text clearfix">
							<h5 class="white uppercase">Rackets</h5>
							<h5 class="racket-sports-color uppercase">90<span class="activity-minutes">Mins</span></h5>
						</div>
					</div>

					<div class="breakdown-chart-wrap clearfix">
						<div class="chart clearfix" style="width: 50%">
							<div class="overlay green-arrow"></div>
						</div>
					</div>

				</div>


			</div>
		</div>


</div>


<div class="container bg-black clearfix">
	<div class="leaderboard-wrap container-profile clearfix">
		<h2 class="white uppercase text-left">Leaderboards</h2>

		<div class="leaderboard clearfix">
			<div class="tabs clearfix">
				<h5 class="yellow upperase">Challange your friends</h5>

				<ul class="tabs uppercase clearfix">
					<li id="link1" class="link-current link-active"><span class="link1" data-rel="friends">Friends</span></li>
					<li id="link2" class="link-current"><span class="link2" data-rel="regional">Regional</span></li>
					<li id="link3" class="link-current"><span class="link3" data-rel="national">National</span></li>
				</ul>
			</div>

			<div id="friends" class="leaderboard-tab stat-disabled stat-active clearfix">
				<ul class="ranking uppercase clearfix">
					<li class="bg-lightgray clearfix">
					 1. Paul Hewson 
					 	<span class="ranking-time">212121<span class="uppercase">Mins</span></span>
					 </li>

					<li class="bg-gray clearfix"> 
						2. Paul Hewson <span class="ranking-time">2121<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-lightgray clearfix"> 
						3. Paul Hewson <span class="ranking-time">244<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-gray clearfix"> 
						4. Paul Hewson <span class="ranking-time">156<span>Mins</span class="uppercase"></span>
					</li>

					<li class="bg-lightgray clearfix"> 
						5. Paul Hewson <span class="ranking-time">60<span class="uppercase">Mins</span></span>
					</li>
				</ul>

				<button type="button" class="see-more white uppercase" name="See more Button">See more</button>

			</div>

			<div id="regional" class="leaderboard-tab stat-disabled clearfix">
				<ul class="ranking uppercase clearfix">
					<li class="bg-lightgray clearfix"> 
						&#21325; 
						<span class="ranking-time">212121<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-gray clearfix"> 
						&#21325; 
						<span class="ranking-time">2121<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-lightgray clearfix"> 
						&#21325; 
						<span class="ranking-time">244<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-gray clearfix"> 
						&#21325; 
						<span class="ranking-time">156<span>Mins</span class="uppercase"></span>
					</li>

					<li class="bg-lightgray clearfix"> 
						&#21325; 
						<span class="ranking-time">60<span class="uppercase">Mins</span></span>
					</li>
				</ul>

				<button type="button" class="see-more white uppercase" name="See more Button">See more</button>

			</div>

			<div id="national" class="leaderboard-tab stat-disabled clearfix">
				<ul class="ranking uppercase clearfix">
					<li class="bg-lightgray clearfix"> 
						1. Paul Hewson 
						<span class="ranking-time">212121<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-gray clearfix"> 
						2. Paul Hewson 
						<span class="ranking-time">2121<span class="uppercase">Mins</span></span>
					</li>

						<li class="bg-lightgray clearfix"> 
						3. Paul Hewson 
					<span class="ranking-time">244<span class="uppercase">Mins</span></span>
					</li>

					<li class="bg-gray clearfix"> 
						4. Paul Hewson 
						<span class="ranking-time">156<span>Mins</span class="uppercase"></span>
					</li>

					<li class="bg-lightgray clearfix"> 
						5. Paul Hewson 
						<span class="ranking-time">60<span class="uppercase">Mins</span></span>
					</li>
				</ul>

				<button type="button" class="see-more white uppercase" name="See more Button">See more</button>

			</div>
		</div>

	</div>
</div>



<div class="badge-wrap container clearfix">

	<div class="badge-title bg-lightgray clearfix">
		<div class="container-profile clearfix">
			<h2 class="white uppercase text-left">Your badges</h2>
		</div>
	</div>

	<div class="badge-list container clearfix">
		<ul class="badges clearfix">
			<li class="badge-yellow">
				<div class="border-circle" style="background: url('badges/aced-it.png') center center no-repeat transparent; background-size: contain;"></div>
				<div class="badge-text">
					<p class="uppercase">Daily movement <span class="badge-value">X10</span></p>
					<p>Hit your daily movement target of 60 mins exercise</p>	
				</div>
			</li>

			<li class="badge-yellow">
				<div class="border-circle" style="background: url('badges/aced-it.png') center center no-repeat transparent; background-size: contain;"></div>
				<div class="badge-text">
					<p class="uppercase">Daily movement <span class="badge-value">X10</span></p>
					<p>Hit your daily movement target of 60 mins exercise</p>
				</div>
			</li>

			<li class="badge-yellow">
				<div class="border-circle" style="background: url('badges/aced-it.png') center center no-repeat transparent; background-size: contain;"></div>
				<div class="badge-text">
					<p class="uppercase">Daily movement <span class="badge-value">X10</span></p>
					<p>Hit your daily movement target of 60 mins exercise</p>
				</div>
			</li>

			<li class="badge-yellow">
				<div class="border-circle" style="background: url('badges/aced-it.png') center center no-repeat transparent; background-size: contain;"></div>
				<div class="badge-text">
					<p class="uppercase">Daily movement <span class="badge-value">X10</span></p>
					<p>Hit your daily movement target of 60 mins exercise</p>	
				</div>
			</li>
		</ul>

		<button type="button" class="see-more white uppercase" name="See more Button">See more</button>

	</div>

</div>


<div class="container bg-yellow clearfix">
	<div class="facts-wrapper container-profile clearfix">

		<div class="fact-title-wrap clearfix">
			<h4 class="fact-title">Did you know?</h4>
		</div>

		<div class="fact-wrap clearfix text-left">
			<p class="white uppercase">More than 1 in 4 people do less than 30 mintues of activity a week?*</p>
			<span class="after-fact white uppercase">*Sport england 2016</span>
		</div>

	</div>
</div>





