
///////////////////////////////
const stateDistrictMap = {
    "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur"],
    "Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi", "Agra", "Ghaziabad", "Meerut", "Noida", "Allahabad", "Aligarh", ],
    "Delhi": ["Central Delhi", "South Delhi", "West Delhi", "North Delhi", "East Delhi", "New Delhi", "North East Delhi",],
    
    
};

const districtLocationMap = {
    
    "Lucknow": ["Bara Imambara", "Chota Imambara", "Lucknow Zoo"],
    "Varanasi": ["Kashi Vishwanath Temple", "Dashashwamedh Ghat", "Sarnath"],
    "Delhi": ["India Gate", "Red Fort", "Qutub Minar"],
    "Gurgaon": ["Kingdom of Dreams", "Cyber Hub", "Sheetala Mata Mandir"],
    "Kolkata": ["Victoria Memorial", "Howrah Bridge", "Dakshineswar Kali Temple"],
    "Patna": ["Rajendra Nagar", "Boring Road", "Kankarbagh", "Buddha Colony", "Gandhi Maidan", "PMCH", "Bazar Samiti", "Musallahpur Hat", ],
    "Gaya": ["Rampur", "AP Colony", "Chandauti"],
    "Bhagalpur": ["Rabindra Bhawan", "Bhagalpur Museum", "Vikramshila ruins", "Mobile Market"],
    "Muzaffarpur": ["Bhagwanpur", "Mithanpura", "Muzaffarpur Railway Station", "Muzaffarpur Park", "Bairia", "Saketpuri",],
    // Add more cities and their locations here
};
  




function updateDistricts() {
    const stateSelect = document.getElementById("state");
    const districtSelect = document.getElementById("district");
    const locationSelect = document.getElementById("location");

    // Clear previous options
    districtSelect.innerHTML = '<option>--Select--</option>';
    locationSelect.innerHTML = '<option>--Select--</option>';  // Reset location as well

    // Get selected state
    const selectedState = stateSelect.value;

    // Get districts for selected state
    if (selectedState in stateDistrictMap) {
        const districts = stateDistrictMap[selectedState];

        // Add new districts to the City dropdown
        districts.forEach(function(district) {
            const option = document.createElement("option");
            option.text = district;
            option.value = district; // Set the value to be used later
            districtSelect.add(option);
        });
    }
}

function updateLocations() {
    const districtSelect = document.getElementById("district");
    const locationSelect = document.getElementById("location");

    // Clear previous locations
    locationSelect.innerHTML = '<option>--Select--</option>';

    // Get selected district
    const selectedDistrict = districtSelect.value;

    // Get locations for selected district
    if (selectedDistrict in districtLocationMap) {
        const locations = districtLocationMap[selectedDistrict];

        // Add new locations to the Location dropdown
        locations.forEach(function(location) {
            const option = document.createElement("option");
            option.text = location;
            option.value = location; // Set the value to be used later
            locationSelect.add(option);
        });
    }
}
// Payment QR Section 
function toggleQRCode() {
    const paymentSelect = document.getElementById("payment");
    const qrCodeSection = document.getElementById("qrCodeSection");

    // Check if "Pay via PayUMoney" is selected
    if (paymentSelect.value === "payu_paisa") {
        qrCodeSection.style.display = "block"; // Show QR code section
    } else {
        qrCodeSection.style.display = "none"; // Hide QR code section
    }
}
// QR uploading

function toggleQRCode() {
    const paymentSelect = document.getElementById("payment");
    const qrCodeSection = document.getElementById("qrCodeSection");

    // Show or hide the QR code section based on the selected payment method
    if (paymentSelect.value === "payu_paisa") {
        qrCodeSection.style.display = "block";
    } else {
        qrCodeSection.style.display = "none";
    }
}

/////////////////////
document.getElementById('contactForm').addEventListener('submit', async function(event) {
    event.preventDefault();  // Prevent the form from submitting the traditional way

    const form = event.target;
    const formData = new FormData(form);
    
    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            document.getElementById('alert').innerHTML = 
                '<div class="alert alert-success">Thank you! Your order has been submitted.</div>';
            form.reset();  // Clear the form after successful submission
        } else {
            document.getElementById('alert').innerHTML = 
                '<div class="alert alert-danger">Oops! There was a problem submitting your form.</div>';
        }
    } catch (error) {
        document.getElementById('alert').innerHTML = 
            '<div class="alert alert-danger">There was a network error. Please try again later.</div>';
    }
});

/////////////SAV///////////////
const couponCodes = ['RW51', 'RW29', 'RW05', 'RW85'];

const mealPreference = document.getElementById('mealPreference');
const mealType = document.getElementById('mealType');
const subscription = document.getElementById('subscription');
const quantity = document.getElementById('quantity');
const couponInput = document.getElementById('coupon');
const subTotalElement = document.getElementById('subtotal');
const discountElement = document.getElementById('discount');
const totalElement = document.getElementById('total');

function calculateTotal() {
    const mealPreferencePrice = parseInt(mealPreference.value) || 0;
    const mealTypePrice = parseInt(mealType.value) || 0;
    const subscriptionMonths = parseInt(subscription.value) || 0;
    const quantityValue = parseInt(quantity.value) || 1;

    // Calculate subtotal: (Meal Preferences + Meal Type) * Subscription months * Quantity
    let subTotal = (mealPreferencePrice + mealTypePrice) * subscriptionMonths * quantityValue;

    // Check if a valid coupon code is entered
    let discount = 0;
    const couponCode = couponInput.value.trim();
    if (couponCodes.includes(couponCode)) {
        discount = subTotal * 0.1; // 10% discount
        couponMessage.style.display = 'none'; // Hide error message
        couponSection.style.display = 'none'; // Hide the coupon section after applying
    } else if (couponCode) {
        couponMessage.style.display = 'block';
        couponMessage.innerText = "Invalid Coupon Code!";
        discount = 0;
    }

    const total = subTotal - discount;

    // Update the UI
    subTotalElement.innerText = subTotal;
    discountElement.innerText = Math.round(discount);
    totalElement.innerText = Math.round(total);
}

mealPreference.addEventListener('change', calculateTotal);
mealType.addEventListener('change', calculateTotal);
subscription.addEventListener('change', calculateTotal);
quantity.addEventListener('change', calculateTotal);
document.getElementById('applycode').addEventListener('click', calculateTotal);

calculateTotal();



