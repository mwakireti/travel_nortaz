// document.addEventListener("DOMContentLoaded", function (){
//   const form = document.getElementById("cta_form_wrappper");
//   const sendButton = form.querySelector("button[type='submit']");
//   form.addEventListener("submit", (event) => {
//     event.preventDefault();

//     // Change button text to "Sending..." while the request is being processed
//     sendButton.textContent = "Sending...";
//     sendButton.disabled = true; // Disable the button to prevent multiple submissions
//     const formData = new FormData(form);
//     fetch("leaveusAmessage.php", {
//       method: "POST",
//       body: formData
//     })
//       .then((res) => res.json)
//       .then((data) => {
//         if (data.success) {
//           if (data.success) {
//           alert(data.message);
//           Swal.fire({
//             toast: true,
//             position: "top-end",
//             icon: "success",
//             title: data.message,
//             showConfirmButton: false,
//             timer: 5000,
//           });
//           form.reset();
//         } else {
//               Swal.fire({
//             title: "Error",
//             text: data.message,
//             icon: "error",
//             confirmButtonText: "Ok",
//           });
//       }
//         })
//       .catch((error) => {
//         Swal.fire({
//           title: "Error",
//           text: "An unexpected error occurred. Please try again later.",
//           icon: "error",
//           confirmButtonText: "Ok",
//         });
//   })
// })


document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("cta_form_wrappper");
  const sendButton = form.querySelector("button[type='submit']"); // Get the submit button

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    // Change button text to "Sending..." while the request is being processed
    sendButton.textContent = "Subscribing...";
    sendButton.disabled = true; // Disable the button to prevent multiple submissions

    const formData = new FormData(form);

    fetch("subscribeScript.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json()) // Parse JSON response
      .then((data) => {
        if (data.success) {
          alert(data.message);
          Swal.fire({
            toast: true,
            position: "top-end",
            icon: "success",
            title: data.message,
            showConfirmButton: false,
            timer: 5000,
          });
          form.reset(); // Clear the form fields after success
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
            confirmButtonText: "Ok",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "An unexpected error occurred. Please try again later.",
          icon: "error",
          confirmButtonText: "Ok",
        });
      })
      .finally(() => {
        // Revert the send button text and re-enable it after receiving the feedback
        sendButton.textContent = "Subscribe"; // Revert the button text
        sendButton.disabled = false; // Re-enable the button
      });
  });
});

