			<?php
					
				$post_type = get_post_type();
				if ( $post_type )
				{
						$post_type_data = get_post_type_object( $post_type );
						$post_type_slug = $post_type_data->rewrite['slug'];
						$post_type_nameor = $post_type_data->labels->name;
				}
				
				if(ICL_LANGUAGE_CODE=="hr") {
					$post_type_name = $post_type_nameor;
					
				} elseif(ICL_LANGUAGE_CODE=="en") {
					
					switch ($post_type_slug) {
							case "o-gradu":
									$post_type_name = "About Vukovar";
									break;
							case "znamenitost":
									$post_type_name = "Discover Vukovar";
									break;
							case "kalendar-dogadanja":
									$post_type_name = "Event calendar";
									break;
							case "smjestaj":
									$post_type_name = "Accommodation";
									break;
							case "ugostiteljstvo":
									$post_type_name = "Gastronomy";
									break;
							case "servis-i-ostalo":
									$post_type_name = "Services";
									break;
							case "turist-info":
									$post_type_name = "Tourist info";
									break;
							case "multimedija":
									$post_type_name = "Multimedia";
									break;
							case "sport-i-rekreacija":
									$post_type_name = "Sports and Recreation";
									break;
					}
				}
					?>