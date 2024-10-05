///  JavaScript Validation //

    document.getElementById("signupForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form values
        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;
        const termsAccepted = document.getElementById("terms").checked;

        // Validate form fields
        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return;
        }

        if (!termsAccepted) {
            alert("Please accept the Privacy Policy and Terms & Condition.");
            return;
        }

        // Display success message
        document.getElementById("successMessage").style.display = "block";

        // Clear form fields
        document.getElementById("signupForm").reset();

        // Optionally, hide the message after a few seconds (e.g., 3 seconds)
        setTimeout(function() {
            document.getElementById("successMessage").style.display = "none";
        }, 3000); // 3000 milliseconds = 3 seconds
    });
