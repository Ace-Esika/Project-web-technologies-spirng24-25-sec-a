function isValidEmail(name) {
    name = name.trim();
        let words = name.split("@");

        if (words.length !== 2) {
          return false;
        }

        if (words[0].length === 0 || words[1].length === 0) {
          return false;
        }
        var kk = false;
        for (var i = 0; i < words[1].length; i++) {
          if (words[1][i] === ".") {
            kk = true;
            break;
          }
        }

        if (kk && words[1][words[1].length - 1] !== ".") {
          return true;
        } else {
          return false;
        }

  }

  function submit_form() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    let valid = true;

    document.getElementById("name_error").innerText = "";
    document.getElementById("email_error").innerText = "";
    document.getElementById("message_error").innerText = "";

    if (name.value.trim() === "") {
      document.getElementById("name_error").innerText = "Name is required.";
      valid = false;
    }

    if (email.value.trim() === "") {
      document.getElementById("email_error").innerText = "Email is required.";
      valid = false;
    } else if (!isValidEmail(email.value)) {
      document.getElementById("email_error").innerText = "Invalid email.";
      valid = false;
    }

    if (message.value.trim() === "") {
      document.getElementById("message_error").innerText = "Message is required.";
      valid = false;
    }

    const recaptchaResponse = grecaptcha.getResponse();
    if (recaptchaResponse.length === 0) {
      alert("Please complete the CAPTCHA.");
      valid = false;
    }

    if (valid) {
      alert("Your message has been sent!");
      name.value = "";
      email.value = "";
      message.value = "";
    }
  }