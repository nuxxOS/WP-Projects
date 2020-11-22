<?php include 'header-menu.php'; ?>


<div class="page-wrapper container bg-gray clearfix">
	<input type="submit" value="Sign out" class="signout-button white"></input>

	<div class="logtime-wrapper container-profile clearfix">
		<h2 class="yellow uppercase text-left">Log your time.</h2>

		<!-- ==========================================
			 ======= LOGTIME ACTIVITIES SECTION ======= 
			 ========================================== -->


			<div class="activities container-profile clearfix">
				<h4 class="white uppercase">Choose your activity type to log your time</h4>

				<div class="activity clearfix">
					
					<div class="checkbox run-walk clearfix">
						<input id="run/walk" type="checkbox" name="radio"/>
						<label data-popup="#run-walk-popup" for="run/walk" class="popup-active"> Run/Walk </label>			
					</div>

					<div class="checkbox paddle-sail clearfix">
						<input id="paddle/sail" type="checkbox" name="radio"/>
						<label for="paddle/sail" data-popup="#paddle-sail-popup" class="popup-active"> Paddle/Sail </label>
					</div>

					<div class="checkbox classes clearfix">
						<input id="classes" type="checkbox" name="radio"/>
						<label for="classes" data-popup="#classes-popup" class="popup-active"> Classes </label>
					</div>

					<div class="checkbox swim clearfix">
						<input id="swim" type="checkbox" name="radio"/>
						<label for="swim" data-popup="#swim-popup" class="popup-active"> Swim </label>
					</div>

					<div class="checkbox cycle clearfix">
						<input id="cycle" type="checkbox" name="radio"/>
						<label for="cycle" data-popup="#cycle-popup" class="popup-active"> Cycle </label>
					</div>

					<div class="checkbox gym clearfix">
						<input id="gym" type="checkbox" name="radio"/>
						<label for="gym" data-popup="#gym-popup" class="popup-active"> Gym </label>
					</div>

					<div class="checkbox ski clearfix">
						<input id="ski" type="checkbox" name="radio"/>
						<label for="ski" data-popup="#ski-popup" class="popup-active"> Ski </label>
					</div>

					<div class="checkbox racket-sports clearfix">
						<input id="racketsports" type="checkbox" name="radio"/>
						<label for="racketsports" data-popup="#racket-sports-popup" class="popup-active"> Racket sports </label>
					</div>

				</div>

			</div>


	</div>




<!-- ===============================================
     ================ YOUR TIME POPUP ================ 
     =============================================== -->


<form id="total-time">

  <div id="your-time" class="container white-popup disabled">

    <div class="total-time clearfix">
      <h3 class="uppercase gray text-left">Your<span class="orange">  Time</span></h3>



      <div id="run-walk-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/run-walk.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Run/Walk</p>
          <p class="uppercase activity-green"><input type="text" value="" class="minutes-added hidden"><span name="run-walk-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="paddle-sail-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/paddle-sail.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Paddle/Sail</p>
          <p class="uppercase activity-green"><input type="text" value="" class="minutes-added hidden"><span name="paddle-sail-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="classes-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/classes.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Classes</p>
          <p class="uppercase activity-green"><input type="text" value="" class="minutes-added hidden"><span name="classes-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="swim-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/swim.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Swim</p>
          <p class="uppercase activity-green"><input type="text" value="" class="minutes-added hidden"><span name="swim-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="cycle-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/cycle.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Cycle</p>
          <p class="uppercase activity-green"><input type="text" value="" class="minutes-added hidden"><span name="cycle-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="gym-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/gym.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Gym</p>
          <p class="uppercase gym-color"><input type="text" value="" class="minutes-added hidden"><span name="gym-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="ski-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/ski.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Ski</p>
          <p class="uppercase ski-color"><input type="text" value="" class="minutes-added hidden"><span name="ski-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>


      <div id="racket-sports-time" class="activity-popup-single clearfix disabled">

        <div class="popup-img">
          <img src="images/racket-sports.png">
        </div>

        <div class="popup-text text-left clearfix">
          <p class="activity-title">Racket sports</p>
          <p class="uppercase racket-sports-color"><input type="text" value="" class="minutes-added hidden"><span name="racket-sports-minutes" class="minutes-added mins-big"></span><span>Mins</span></p>
        </div>

      </div>

    </div>


    <div class="total-active bg-lightgray clearfix">
      <div class="total-text text-right clearfix">
        <p class="uppercase white">Total active</p>

        <div class="total-mins clearfix">
          <p class="yellow">1332<h5 class="uppercase yellow">mins</h5></p>
        </div>
      </div>

      <input type="submit" class="submit-popup uppercase white bg-yellow" value="next"></input>
    </div>


  </div>

</form>











<!-- ==========================================
	 ============= RUN/WALK POPUP ============= 
	 ========================================== -->



<div id="run-walk-popup" class="container white-popup mfp-hide" data-time="#run-walk-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/run-walk.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input>

</div>





<!-- ==========================================
	 ============ PADLE/SAIL POPUP ============ 
	 ========================================== -->



<div id="paddle-sail-popup" class="container white-popup mfp-hide" data-time="#paddle-sail-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/paddle-sail.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input>

</div>





<!-- ==========================================
	 ============= CLASSES POPUP ============== 
	 ========================================== -->



<div id="classes-popup" class="container white-popup mfp-hide" data-time="#classes-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/classes.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input>

</div>





<!-- ==========================================
	 =============== SWIM POPUP =============== 
	 ========================================== -->



<div id="swim-popup" class="container white-popup mfp-hide" data-time="#swim-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/swim.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <a href="#your-time" class="open-popup-link"><input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input></a>

</div>





<!-- ==========================================
	 ============== CYCLE POPUP =============== 
	 ========================================== -->



<div id="cycle-popup" class="container white-popup mfp-hide" data-time="#cycle-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/cycle.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <a href="#your-time" class="open-popup-link"><input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input></a>

</div>





<!-- ==========================================
	 ============= GYM POPUP ============= 
	 ========================================== -->



<div id="gym-popup" class="container white-popup mfp-hide" data-time="#gym-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/gym.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
    <button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <a href="#your-time" class="open-popup-link"><input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input></a>

</div>





<!-- ==========================================
	 =============== Ski POPUP ================ 
	 ========================================== -->



<div id="ski-popup" class="container white-popup mfp-hide" data-time="#ski-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/ski.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
  	<button class="custom-close">
      <div id="cross"></div>
      <p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

   <a href="#your-time" class="open-popup-link"><input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input></a>

</div>





<!-- ===============================================
	 ============= RACKET-SPORTS POPUP ============= 
	 =============================================== -->



<div id="racket-sports-popup" class="container white-popup mfp-hide" data-time="#racket-sports-time">

  <div class="time-input clearfix">

  	<div class="popup-img">
  		<img src="images/racket-sports.png">
  	</div>

  	<input maxlength="4" type="number" name="activity-time" size="1" max="4" pattern="[0-4]*" class="minutes gray bold"></input>
  	<span class="uppercase gray bold">Mintues</span>

  </div>

  <div class="more-activities">
    <button class="custom-close">
      <div id="cross"></div>
    	<p class="gray bold uppercase">Add more time</p>
    </button>
  </div>

  <a href="#your-time" class="open-popup-link"><input type="submit" value="Submit your time" class="submit-popup white bg-yellow uppercase" ></input></a>

</div>











