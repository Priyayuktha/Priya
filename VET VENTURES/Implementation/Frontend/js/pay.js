const addPri = document.querySelector('.address_primary');
const addSec = document.querySelector('.address_secondary');

const addBg = () => {
	addPri.addEventListener('click', () => {
		addPri.classList.remove('active1');
		addSec.classList.remove('active');
	});

	addSec.addEventListener('click', () => {
		addSec.classList.add('active');
		addPri.classList.add('active1');
	});
};
addBg();
function simulatePayment(cardNumber, expiryDate, cvv, nameOnCard) {
    return new Promise(function(resolve, reject) {
        setTimeout(function() {
            var isSuccess = Math.random() < 0.8; // Simulate 80% chance of success

            if (isSuccess) {
                resolve("Payment successful");
            } else {
                reject(new Error("Payment failed"));
            }
        }, 1500); // Simulate delay of 1.5 seconds
    });
}

// Example usage:
var cardNumber = "1234 5678 9012 3456";
var expiryDate = "12/23";
var cvv = "123";
var nameOnCard = "John Doe";

simulatePayment(cardNumber, expiryDate, cvv, nameOnCard)
    .then(function(message) {
        console.log(message); // Payment successful (replace with actual success handling)
        handleSuccess(); // Call function to handle success scenario
    })
    .catch(function(error) {
        console.error(error.message); // Payment failed
        alert("Payment failed. Please try again."); // Show alert to user
        // Optionally reset form or handle other failure scenarios
    });

function handleSuccess() {
    // Replace with actual success handling
    // Example: Update UI, display success message, redirect to success page

    // Example: Update UI with success message
    var successMessage = document.createElement('div');
    successMessage.textContent = "Payment successful!";
    successMessage.classList.add('alert', 'alert-success');
    document.body.appendChild(successMessage);

    // Example: Redirect to success page after 2 seconds
    setTimeout(function() {
        window.location.href = "homepage.html";
    }, 2000);
}
