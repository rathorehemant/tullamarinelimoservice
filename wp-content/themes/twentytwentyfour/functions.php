<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );



add_shortcode('without_map','shortcode_function_without_map');

function shortcode_function_without_map()
{
	
	?>
	<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="<?=site_url('book-now') ?>" method="POST">
        <div class="formbold-input-flex">
          <div>
              <select id="select_vehicle"
              class="formbold-form-input" name = "vehicle">

			  <option value="">SELECT VEHICLE</option>	
			<option  value="Sedan">Sedan</option>
			<option value="SUV">SUV</option>
			<option value="Van">Van</option>
			</select>
              <label for="select_vehicle" class="formbold-form-label"> SELECT VEHICLE </label>
          </div>
          <div>
              <input
              type="text"
			  id="origin" name="origin" name = "origin"
              placeholder="Enter pickup"
              class="formbold-form-input"
              />

			  <!-- <input type="text" name="myAddress" placeholder="Enter your address" value="333 Alberta Place, Prince Rupert, BC, Canada" id="myAddress"/> -->



              <label for="pickup" class="formbold-form-label"> pickup </label>
          </div>
		  <div>
              <input
              type="text"
              id="destination" name="destination" 
              placeholder="Enter destination"
              class="formbold-form-input"
              />
              <label for="destination" class="formbold-form-label"> Destination </label>
          </div>
        </div>
		
		
		<p id = "distance" name ="distance"></p>
		<p id = "estimation" name="estimation"></p>
		<input type = "hidden"  name ="distance" id = distance_field></p>
        <input type = "hidden"  name ="estimation" id = "estimation_field"></p>
          
        

        

       

        <button class="formbold-btn" id="book_now" style = "display:none">
            Book Now
        </button>
		
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 22px;
  }
  .formbold-input-flex > div {
    width: 50%;
    display: flex;
    flex-direction: column-reverse;
  }
  .formbold-textarea {
    display: flex;
    flex-direction: column-reverse;
  }

  .formbold-form-input {
    width: 100%;
    padding-bottom: 10px;
    border: none;
    border-bottom: 1px solid #DDE3EC;
    background: #FFFFFF;
    font-weight: 500;
    font-size: 16px;
    color: #07074D;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder {
    color: #536387;
  }
  .formbold-form-input:focus {
    border-color: #6A64F1;
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 18px;
  }
  .formbold-form-input:focus + .formbold-form-label {
    color: #6A64F1;
  }

  .formbold-input-file {
    margin-top: 30px;
  }
  .formbold-input-file input[type="file"] {
    position: absolute;
    top: 6px;
    left: 0;
    z-index: -1;
  }
  .formbold-input-file .formbold-input-label {
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
  }

  .formbold-filename-wrapper {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 22px;
  }
  .formbold-filename {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-filename svg {
    cursor: pointer;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 12px 25px;
    border: none;
    font-weight: 500;
    background-color: #6A64F1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

function initMap() {
    const addAutocompleteToInputs = (inputs, country) => {
        inputs.forEach((input) => {
            new google.maps.places.Autocomplete(input, {
                componentRestrictions: { country }
            });
        });
    };

	const callbackfunction = (e) => {
	setTimeout(() => {
		const originInput = document.getElementById('origin').value;
        const destinationInput = document.getElementById('destination').value;
		const vehicle = document.getElementById('select_vehicle').value;
		
		if(vehicle != '' && originInput != '' && destinationInput != '' ){
			calculateDistance(originInput,destinationInput,vehicle);
		}else{
			alert('please fill all');
			return false;
		}
	}, 100);


	};

    const calculateDistance = (origin, destination, vehicle) => {
    const originInput = document.getElementById('origin');
    const destinationInput = document.getElementById('destination');
    const distanceResult = document.getElementById('distance');
	const costResult = document.getElementById('estimation');
	const book_now = document.getElementById('book_now');

  const distance_field = document.getElementById('distance_field');
  const estimation_field = document.getElementById('estimation_field');
	

    const costPerKm = 1;
    let minimumcost;
    let cost;

    const service = new google.maps.DistanceMatrixService();

    service.getDistanceMatrix({
        origins: [origin],
        destinations: [destination],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false,
        region: 'AU'
    }, (response, status) => {
        if (status === 'OK') {
            const distanceText = response.rows[0].elements[0].distance.text;
			
            const distance = parseFloat(distanceText.replace(' km', '')); // Convert string to float
            
			const totalDistance = (response.rows[0].elements[0].distance.value / 1000).toFixed(2); // Convert meters to kilometers and round to two decimal places


           const type = {
				'Sedan': 2.90,
				'SUV': 3.60,
				'Van': 4.80
		   }
			cost = (totalDistance * type[vehicle]).toFixed(2);

            

			distanceResult.innerHTML = `Total Distance: ${totalDistance} Kms`;
			if(totalDistance > 0){
			costResult.innerHTML = `Estimation Cost: AUD ${cost}`;
      distance_field.value = totalDistance
      estimation_field.value = cost
			book_now.style.display = 'inline-block';

			}
        } else {
            alert(`Error: ${status}`);
        }
    });
};


    const init = () => {
        const originInput = document.getElementById('origin');
        const destinationInput = document.getElementById('destination');
        const calculateButton = document.getElementById('calculate');

        addAutocompleteToInputs([originInput, destinationInput], 'AU');

        destinationInput.addEventListener('change', (e) => callbackfunction(e));
    };

    // Ensure that the Google Maps API is loaded before initializing
    if (typeof google !== 'undefined' && typeof google.maps !== 'undefined') {
        init();
    } else {
        console.error('Google Maps API not loaded.');
    }
}

(function () {
    'use strict';
    // Load the Google Maps API asynchronously
    const script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCTVlf3KAMyXncVMDc-09AxnP_M4WA8HOA&libraries=places&callback=initMap';
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);

})();







</script>



<?php }


function print_r_content() {
  $your_variable = $_POST;
  echo '<pre>';
  print_r($your_variable);
  echo '</pre>';

 

  
}
add_shortcode('print_r_shortcode', 'print_r_content');


function print_current_page_slug() {
  echo $current_page_slug = get_post_field('post_name', get_post());

  if ($current_page_slug === 'book-now') {
      book_now_page_customise();
  }

 
}

add_action('wp_footer', 'print_current_page_slug');



function book_now_page_customise(){?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
</head>
<script>
$(document).ready(function(){

  $("#date").datetimepicker({
      minDate: 0, // Disable past dates
      format: 'Y-m-d H:i', // You can customize the format as needed
    });


    $("#return-date").datetimepicker({
      minDate: 0, // Disable past dates
      format: 'Y-m-d H:i', // You can customize the format as needed
    });

  <?php if(isset($_POST['origin'])): ?>
        $("#origin").val("<?php echo $_POST['origin']; ?>");
    <?php endif; ?>

    <?php if(isset($_POST['destination'])): ?>
        $("#destination").val("<?php echo $_POST['destination']; ?>");
    <?php endif; ?>

    <?php if(isset($_POST['vehicle'])): ?>
        $("#vehicle").val("<?php echo $_POST['vehicle']; ?>");
    <?php endif; ?>

    <?php if(isset($_POST['distance'])): ?>
        $("#distance").val("<?php echo $_POST['distance']; ?>");
    <?php endif; ?>

    <?php if(isset($_POST['estimation'])): ?>
        $("#estimation").val("<?php echo $_POST['estimation']; ?>");
    <?php endif; ?>



    <?php if(!isset($_POST['origin'])): ?>
        $("#origin").removeAttr('readonly');
    <?php endif; ?>

    <?php if(!isset($_POST['destination'])): ?>
        $("#destination").removeAttr('readonly');
    <?php endif; ?>

    

    

});


function initMap() {
  
       
  
    const addAutocompleteToInputs = (inputs, country) => {
        inputs.forEach((input) => {
            new google.maps.places.Autocomplete(input, {
                componentRestrictions: { country }
            });
        });
    };

    


    const callbackfunction = (e) => {
	  setTimeout(() => {
		const originInput = document.getElementById('origin').value;
        const destinationInput = document.getElementById('destination').value;
		const vehicle = document.getElementById('vehicle').value;
		
		if(vehicle != '' && originInput != '' && destinationInput != '' ){
			calculateDistance(originInput,destinationInput,vehicle);
		}else{
			alert('please fill all');
			return false;
		}
	}, 100);


	};



  const calculateDistance = (origin, destination, vehicle) => {
    const originInput = document.getElementById('origin');
    const destinationInput = document.getElementById('destination');
    const distanceResult = document.getElementById('distance');
	const costResult = document.getElementById('estimation');
	
    const costPerKm = 1;
    let minimumcost;
    let cost;

    const service = new google.maps.DistanceMatrixService();

    service.getDistanceMatrix({
        origins: [origin],
        destinations: [destination],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false,
        region: 'AU'
    }, (response, status) => {
        if (status === 'OK') {
            const distanceText = response.rows[0].elements[0].distance.text;
			
            const distance = parseFloat(distanceText.replace(' km', '')); // Convert string to float
            
			const totalDistance = (response.rows[0].elements[0].distance.value / 1000).toFixed(2); // Convert meters to kilometers and round to two decimal places


           const type = {
				'Sedan': 2.90,
				'SUV': 3.60,
				'Van': 4.80
		   }
			cost = (totalDistance * type[vehicle]).toFixed(2);

            

			if(totalDistance > 0){
      distanceResult.value = totalDistance
      costResult.value = cost
			

			}
        } else {
            alert(`Error: ${status}`);
        }
    });
};

	


    const init = () => {
      const origin = document.getElementById('origin');
        const destination = document.getElementById('destination');

        const originInput = document.getElementById('return-origin');
        const destinationInput = document.getElementById('return-destination');
        
      


        <?php if(isset($_POST['origin']) && isset($_POST['destination'])): ?>
          addAutocompleteToInputs([originInput, destinationInput], 'AU');
        
    <?php else: ?>
      addAutocompleteToInputs([origin, destination, originInput, destinationInput], 'AU');
    <?php endif; ?>

    

  


        
        destination.addEventListener('change', (e) => callbackfunction(e));
    };

    // Ensure that the Google Maps API is loaded before initializing
    if (typeof google !== 'undefined' && typeof google.maps !== 'undefined') {
        init();
    } else {
        console.error('Google Maps API not loaded.');
    }
}

(function () {
    'use strict';
    // Load the Google Maps API asynchronously
    const script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCTVlf3KAMyXncVMDc-09AxnP_M4WA8HOA&libraries=places&callback=initMap';
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);

})();
</script>


<?php } 


