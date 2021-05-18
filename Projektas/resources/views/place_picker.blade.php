<div class="pt-2 pb-2">
	<label class="font-weight-bold" for="countries"><strong>Select Country</strong></label>
	<br>
	<select class="pt-4 pb-4 countries js-example-basic-single js-states form-control" id="country" name="country" form="{{ $form }}" value="{{ old('country') }}">
		<option value="">Select One</option>
	</select>
	@error('country') <div class="font-weight-bold" style="color:red"><p>{{ $message }}</p></div> @enderror
</div>

<div class="pt-2 pb-2">
	<label class="font-weight-bold" for="cities"><strong>Select City</strong></label>
	<br>
	<select class="pt-4 pb-4 cities js-example-basic-single js-states form-control" id="city" name="city" form="{{ $form }}" value="{{ old('city') }}">
		<option value="">Select One</option>
	</select>
	@error('city') <div class="font-weight-bold" style="color:red"><p>{{ $message }}</p></div> @enderror
</div>			

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js"></script>


<script type="text/javascript">
	const base= "http://localhost:8888/index.php";
	const country_el = $('#country');
	/**
	 * Function to map the API data in select format
	 *
	 * @param data
	 * @returns array
	 */
	const mapper = (data) => {
	return data.map((item) => {
		return {
			id: item,
			text: item
		};
	});
	};

	// Initialise countries select dropdown.
	country_el.select2({
	placeholder: "Choose a country",
	ajax: {
		dataType: 'json',
		url: (params) => {
			if(params.term) {
				return base + "/countries/" + params.term;
			} else {
				return base + "/countries";
			}
		},
		processResults: (data) => {
			return {
				"results": mapper(data)
			};
		}
	}
	});

	// When a country is selected update cities select dropdown.
	country_el.change(() => {

	const country = country_el.val();

	$('#city option').not(':first').remove();
	$('#city').select2({
		placeholder: "Choose a city in " + country,
		ajax: {
			dataType: 'json',
			url: (params) => {		
				if (params.term) {
					return base + "/cities/" + country + "/" + params.term;
				} else {
					return base + "/cities/" + country;
				}
			},
			processResults: (data) => {
				return {
					"results": mapper(data)
				};
			}
		}
	});
	});

	// Initialise cities select dropdown.
	$("#city").select2({
		placeholder: "Choose a country first",
		data: null,
	});
</script>