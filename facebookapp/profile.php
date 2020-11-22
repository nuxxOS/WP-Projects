<?php include 'header-menu.php'; ?>

<div class="profile-banner-wrap container bg-gray clearfix">
	<div class="profile-banner container-profile clearfix">
		<h3 class="yellow uppercase"> To make logging time faster please select which applies to you.</h3>
	</div>
</div>


<div class="container bg-lightgray clearfix">
	<div class="profile-options container-profile clearfix">
		<h4 class="uppercase white">Choose your activity type to log your time.</h4>

		<select name="activity" class="activity-dropdown clearfix">
			<option value="regin">Users set region</option>
			<option value="regin">Chorley Council </option>
			<option value="regin">City of Lincoln Council </option>
			<option value="regin">Rushmoor Borough Council</option>
			<option value="regin">South Derbyshire District Council</option>
			<option value="regin">Southampton City Council</option>
		</select>

		</select>
	</div>
</div>

<div class="fitness-wrap container bg-gray clearfix">

	<div class="fitness container-profile clearfix">
		<h4 class="uppercase white">Fitness level</h4>

			<div class="radio clearfix">

				<input id="beginner" type="radio" name="radio"/>
				<label for="beginner"> Beginner </label>

				<input id="intermediate" type="radio" name="radio"/>
				<label for="intermediate"> Intermediate </label>

				<input id="expert" type="radio" name="radio"/>
				<label for="expert"> Expert </label>

			</div>

	</div>

</div>




<div class="activities-wrap container bg-lightgray clearfix">

	<div class="activities container-profile clearfix">
		<h4 class="white uppercase">Which activities do you participate in?</h4>
		<h4 class="small-subtitle">( You may select more than one )</h4>

		<div class="activity clearfix">
			
			<div class="checkbox run-walk clearfix">			
				<input id="run/walk" type="checkbox" name="radio"/>
				<label for="run/walk"> Run/Walk </label>
			</div>

			<div class="checkbox paddle-sail clearfix">
				<input id="paddle/sail" type="checkbox" name="radio"/>
				<label for="paddle/sail"> Paddle/Sail </label>
			</div>

			<div class="checkbox classes clearfix">
				<input id="classes" type="checkbox" name="radio"/>
				<label for="classes"> Classes </label>
			</div>

			<div class="checkbox swim clearfix">
				<input id="swim" type="checkbox" name="radio"/>
				<label for="swim"> Swim </label>
			</div>

			<div class="checkbox cycle clearfix">
				<input id="cycle" type="checkbox" name="radio"/>
				<label for="cycle"> Cycle </label>
			</div>

			<div class="checkbox gym clearfix">
				<input id="gym" type="checkbox" name="radio"/>
				<label for="gym"> Gym </label>
			</div>

			<div class="checkbox ski clearfix">
				<input id="ski" type="checkbox" name="radio"/>
				<label for="ski"> Ski </label>
			</div>

			<div class="checkbox racket-sports clearfix">
				<input id="racketsports" type="checkbox" name="radio"/>
				<label for="racketsports"> Racket sports </label>
			</div>


		</div>

	</div>

</div>


<div class="submit-wrap container bg-gray clearfix">
	<input type="submit" value="Save settings" class="submit-button white uppercase"></input>

</div>











