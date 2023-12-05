// Wrap everything in an IIFE to avoid polluting the global namespace
function initMap() {
    const addAutocompleteToInputs = (inputs, country) => {
        inputs.forEach((input) => {
            new google.maps.places.Autocomplete(input, {
                componentRestrictions: { country }
            });
        });
    };

    const calculateDistance = () => {
        const originInput = document.getElementById('origin');
        const destinationInput = document.getElementById('destination');
        const resultDiv = document.getElementById('result');

        const origin = originInput.value;
        const destination = destinationInput.value;

        const service = new google.maps.DistanceMatrixService();

        service.getDistanceMatrix({
            origins: [origin],
            destinations: [destination],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false,
            region: 'IN'
        }, (response, status) => {
            if (status === 'OK') {
                const distance = response.rows[0].elements[0].distance.text;
                const duration = response.rows[0].elements[0].duration.text;
                resultDiv.innerHTML = `Distance: ${distance}<br> Duration: ${duration}`;
            } else {
                alert(`Error: ${status}`);
            }
        });
    };

    const init = () => {
        const originInput = document.getElementById('origin');
        const destinationInput = document.getElementById('destination');
        const calculateButton = document.getElementById('calculate');

        addAutocompleteToInputs([originInput, destinationInput], 'IN');

        calculateButton.addEventListener('click', calculateDistance);
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
