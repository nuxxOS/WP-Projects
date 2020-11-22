

<?php include 'header.php'; ?>





<!--	===============================================
     	=============== BREADCRUMPS ===================
        ===============================================     -->


<div class="breadcrumps-wrap container-full clearfix">
	<div id="breadcrumps" class="container text-left clearfix">
			<span class="red">Startseite &#47</span>
			<span class="light-gray">Krankenkasse</span>
	</div>
</div>



<div class="page-wrap wrap2 container clearfix">
	<h2 class="content-color">Krankenkassenvergelich</h2>

	<div class="page-content content-color clearfix">

		<div class="summary-breakdown section1 clearfix">
			<ul class="sum-first">
				<li></li>
				<li class="bold"><p>Alte Kasse</p></li>
				<li class="bold"><p>Neue Kasse</p></li>
				<li></li>
			</ul>
			<ul>
				<li class="bold"><p>Krankenkasse</p></li>
				<li><p>Helsana</p></li>
				<li><p>Assura</p></li>
				<li></li>
			</ul>

			<ul>
				<li class="bold"><p>Jahreroramie in CHF</p></li>
				<li><p>3000</p></li>
				<li><p>2000</p></li>
				<li><p class="red">Sie sparen 1000 im Jahr</p></li>
			</ul>
		</div>



		<div class="summary-breakdown section2 clearfix">
			<p>Sie haben gewahlt</p>

			<ul class="bold">
				<li><p>Modell</p></li>
				<li><p>Franchise</p></li>
				<li><p>Jahrgang</p></li>
				<li><p>Unfalldeckung</p></li>
			</ul>

			<ul class="red">
				<li><p>Telmed</p></li>
				<li><p>CHF 2500</p></li>
				<li><p>1990</p></li>
				<li><p>Ohne</p></li>
			</ul>

		</div>





<!--	===============================================
     	=================== TABS ======================
        ===============================================    -->


		<div class="summary-breakdown section3 clearfix">
			<p>Wie mochten Sie wechseln?</p>

			<div class="tabs-wrap clearfix">
			
				<div class="tab-section clearfix">

					<div class="tab-text">
						<p class="red">Jetzt wechseln</p>
					</div>
					
					<input id="online-wechseln-formtab" type="radio" class="radio-checkbox" name="checkout-time">
			
					<label for="online-wechseln-formtab" class="custom-checkbox">
						<div id="wechseln" class="form-tab current-tab active-tab clearfix">
							<span class="icon-web red"></span>
							<div class="tab-description clearfix">
								<p>Online</p>
								<p>Wechseln</p>
							</div>
						</div>
					</label>



					<input id="suisseid-formtab" type="radio" class="radio-checkbox" name="checkout-time">
			
					<label for="suisseid-formtab" class="custom-checkbox">
						<div id="suisseid" class="form-tab current-tab clearfix">

						</div>
					</label>

				</div>


				<div class="tab-section clearfix">

					<div class="tab-text">
						<p class="red">Jetzt wechseln</p>
					</div>
					

					<input id="telefonische-beratung-formtab" type="radio" class="radio-checkbox" name="checkout-time">
			
					<label for="telefonische-beratung-formtab" class="custom-checkbox">
						<div id="telefonische" class="form-tab current-tab clearfix">
							<span class="icon-whatsapp red"></span>
							<div class="tab-description clearfix">
								<p>Telefonische</p>
								<p>Beratung</p>
								<span class="work-time">Mo - Fr / 09:00 - 20:00</span>
							</div>					
						</div>
					</label>



					<input id="termin-vereinbaren-formtab" type="radio" class="radio-checkbox" name="checkout-time">
			
					<label for="termin-vereinbaren-formtab" class="custom-checkbox">
						<div id="termin" class="form-tab current-tab clearfix">
							<span class="icon-time-planning red"></span>
							<div class="tab-description clearfix">
								<p>Termin</p>
								<p>vereinbaren</p>
							</div>					
						</div>
					</label>	

				</div>
			</div>

		</div>




<!--	===============================================
		=================== FORMS =====================
		===============================================    -->


		<div class="summary-breakdown section4 clearfix">
			<div class="form-wrap clearfix">
				

					<form id="wechseln-form" class="clearfix form">

						<p>Person 1</p>

						<div class="form-content-wrapper clearfix">

							<div id="form-section1" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item gender clearfix">
										<label>Geschlecht</label>
										<div class="form-radio-button clearfix">		
											<input id="frau" type="radio" name="radio-group3" class="radio-checkbox" />
											<label for="frau" class="custom-checkbox"> Frau <div class="radio-checkmark"></div></label>

											<input id="herr" type="radio" name="radio-group3" class="radio-checkbox" />
											<label for="herr" class="custom-checkbox"> Herr <div class="radio-checkmark"></div></label>
										</div>
									</div>

									<div class="form-item clearfix">						
										<label for="vorname">Vorname</label>
										<input id="vorname" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="name">Name</label>
										<input id="name" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="strasse">Strasse</label>
										<input id="strasse" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="hausnumer">Hausnumer</label>
										<input id="hausnumer" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="postleitzahl">Postleitzahl</label>
										<input id="postleitzahl" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="ort">Ort</label>
										<input id="ort" type="text"></input>
									</div>	
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="visnum">Visnum</label>
										<input id="visnum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="telefon">Telefon</label>
										<input id="telefon" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="email">Email</label>
										<input id="email" type="text"></input>
									</div>
								</div>
							</div>


							<p>hr gewähltes Modell verlangt, dass Sie einen Hausarzt, oder ärztnetzwerk auswählen. Bitte geben Sie uns die Adresse des Arztes / ärztnetzwerks oder ändern Sie das Modell.</p>


							<div id="form-section2" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="visnum">Visnum</label>
										<input id="visnum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="telefon">Telefon</label>
										<input id="telefon" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
								</div>

								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
								</div>
							</div>

						</div>

						<input type="submit" id="submit-button" class="custom-link animate" value="Weiter"></input>

					</form>


					<form id="suisseid-form" class="clearfix disabled form">
						<p>Person 1</p>

						<div class="form-content-wrapper clearfix">

							<div id="form-section1" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item gender clearfix">
										<label>Geschlecht</label>
										<div class="form-radio-button clearfix">		
											<input id="frau-susseid" type="radio" name="radio-group4" class="radio-checkbox" />
											<label for="frau-susseid" class="custom-checkbox"> Frau <div class="radio-checkmark"></div></label>

											<input id="herr-susseid" type="radio" name="radio-group4" class="radio-checkbox" />
											<label for="herr-susseid" class="custom-checkbox"> Herr <div class="radio-checkmark"></div></label>
										</div>
									</div>

									<div class="form-item clearfix">						
										<label for="vorname">Vorname</label>
										<input id="vorname" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="name">Name</label>
										<input id="name" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="strasse">Strasse</label>
										<input id="strasse" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="hausnumer">Hausnumer</label>
										<input id="hausnumer" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="postleitzahl">Postleitzahl</label>
										<input id="postleitzahl" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="ort">Ort</label>
										<input id="ort" type="text"></input>
									</div>	
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="visnum">Visnum</label>
										<input id="visnum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="telefon">Telefon</label>
										<input id="telefon" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="email">Email</label>
										<input id="email" type="text"></input>
									</div>
								</div>
							</div>

						</div>

						<input type="submit" id="submit-button" class="custom-link animate" value="Weiter"></input>

					</form>


					<form id="telefonische-form" class="clearfix disabled form">

						<p>Person 1</p>

						<div class="form-content-wrapper clearfix">

							<div id="form-section1" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item gender clearfix">
										<label>Geschlecht</label>
										<div class="form-radio-button clearfix">		
											<input id="frau-telefonische" type="radio" name="radio-group4" class="radio-checkbox" />
											<label for="frau-telefonische" class="custom-checkbox"> Frau </label>

											<input id="herr-telefonische" type="radio" name="radio-group4" class="radio-checkbox" />
											<label for="herr-telefonische" class="custom-checkbox"> Herr </label>
										</div>
									</div>

									<div class="form-item clearfix">						
										<label for="vorname">Vorname</label>
										<input id="vorname" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="name">Name</label>
										<input id="name" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="strasse">Strasse</label>
										<input id="strasse" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="hausnumer">Hausnumer</label>
										<input id="hausnumer" type="text"></input>
									</div>

									<div class="form-item gender clearfix">
										<div class="spacing"></div>
										<div class="form-radio-button telefonische-label clearfix">		
											<input id="rasch-telefonische" type="radio" name="radio-group6" class="radio-checkbox" />
											<label for="rasch-telefonische" class="custom-checkbox"> Frau </label>

											<input id="zeit-telefonische" type="radio" name="radio-group6" class="radio-checkbox" />
											<label for="zeit-telefonische" class="custom-checkbox"> Herr </label>
										</div>
									</div>		
								</div>


								<div id="extra-fields" class="form-row disabled clearfix">
									<div class="form-item date-time-picker clearfix">
										<input class="datetime-picker" type="text" placeholder="Datum"></input>
									</div>			
								</div>

							</div>


							<p>hr gewähltes Modell verlangt, dass Sie einen Hausarzt, oder ärztnetzwerk auswählen. Bitte geben Sie uns die Adresse des Arztes / ärztnetzwerks oder ändern Sie das Modell.</p>


							<div id="form-section2" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="visnum">Visnum</label>
										<input id="visnum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="telefon">Telefon</label>
										<input id="telefon" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
								</div>

								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<a href="" class="custom-link"> Arzteliste </a>
									</div>
								</div>
							</div>

						</div>

						<input type="submit" id="submit-button" class="custom-link animate" value="Weiter"></input>
			
					</form>


					<form id="termin-form" class="clearfix disabled form">

					<p>Person 1</p>

						<div class="form-content-wrapper clearfix">

							<div id="form-section1" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item gender clearfix">
										<label>Geschlecht</label>
										<div class="form-radio-button clearfix">		
											<input id="frau-termin" type="radio" name="radio-group7" class="radio-checkbox" />
											<label for="frau-termin" class="custom-checkbox"> Frau <div class="radio-checkmark"></div></label>

											<input id="herr-termin" type="radio" name="radio-group7" class="radio-checkbox" />
											<label for="herr-termin" class="custom-checkbox"> Herr <div class="radio-checkmark"></div></label>
										</div>
									</div>

									<div class="form-item clearfix">						
										<label for="vorname">Vorname</label>
										<input id="vorname" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="name">Name</label>
										<input id="name" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">
										<label for="strasse">Strasse</label>
										<input id="strasse" type="text"></input>
									</div>

									<div class="form-item clearfix">
										<label for="hausnumer">Hausnumer</label>
										<input id="hausnumer" type="text"></input>
									</div>

									<div class="form-item clearfix">								
										<label for="email-termin"> Email </label>
										<input id="email-termin" type="text"></input>
									</div>		
								</div>


								<div class="form-row clearfix">

									<div class="form-item gender clearfix">								
										<div class="form-radio-button telefonische-label clearfix">		
											<input id="rasch-termin" type="radio" name="radio-group8" class="radio-checkbox" />
											<label for="rasch-termin" class="custom-checkbox">
												<span class="icon-info"></span> So schnell wie moglich <div class="radio-checkmark"></div>
												<div class="popup-form-info disabled"><div class="triangle"></div><span class="popup-span">Der nächte freie Brocando Broker wir Sie so rasch wie möglich kontaktieren um einen Terminen zu vereinbaren.</span></div>
											</label>

											<input id="zeit-termin" type="radio" name="radio-group8" class="radio-checkbox" />
											<label for="zeit-termin" class="custom-checkbox"> Zeit vereinbaren <div class="radio-checkmark"></div></label>
										</div>
									</div>

									<div class="popup-item-wrap disabled clearfix">
										<div class="form-item date-time-picker clearfix">
											<input class="datetime-picker" type="text" placeholder="Datum"></input>
										</div>								
									</div>

								</div>

							</div>


							<p>hr gewähltes Modell verlangt, dass Sie einen Hausarzt, oder ärztnetzwerk auswählen. Bitte geben Sie uns die Adresse des Arztes / ärztnetzwerks oder ändern Sie das Modell.</p>


							<div id="form-section2" class="clearfix">
								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="visnum">Visnum</label>
										<input id="visnum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="telefon">Telefon</label>
										<input id="telefon" type="text"></input>
									</div>
								</div>


								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<label for="gebustdatum">Gebustdatum</label>
										<input id="gebustdatum" type="text"></input>
									</div>
									<div class="form-item clearfix">
										<label for="nationalitat">Nationalitat</label>
										<input id="nationalitat" type="text"></input>
									</div>
								</div>

								<div class="form-row clearfix">
									<div class="form-item clearfix">						
										<a href="" class="custom-link"> Arzteliste </a>
									</div>
								</div>
							</div>

						</div>

						<input type="submit" id="submit-button" class="custom-link animate" value="Weiter"></input>

			
					</form>
				

			</div>
		</div>


	</div>

</div>








<?php include 'footer.php'; ?>














