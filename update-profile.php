<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>User Update Form</title>

<style>
  /* Root variables for colors and fonts */
  :root {
    --color-dark: rgb(38, 38, 124);
    --color-light-bg: #ffffff;
    --color-light-text: #1f2937;
    --color-light-placeholder: #9ca3af;
    --color-light-border: #d1d5db;
    --color-light-shadow: rgba(0, 0, 0, 0.05);

    --color-dark-bg: var(--color-dark);
    --color-dark-text: #e0e7ff;
    --color-dark-placeholder: #a5b4fc;
    --color-dark-border: #5c6ac4;
    --color-dark-shadow: rgba(0, 0, 0, 0.6);

    --font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen,
      Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    --transition-duration: 0.3s;
  }
  /* Global reset and base */
  * {
    box-sizing: border-box;
  }
  body {
    font-family: var(--font-family);
    margin: 0;
    background-color: var(--color-light-bg);
    color: var(--color-light-text);
    line-height: 1.5;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: start;
    padding: 2rem 1rem 4rem;
    transition: background-color var(--transition-duration) ease,
                color var(--transition-duration) ease;
  }
  /* Container for the form */
  .container {
    max-width: 480px;
    width: 100%;
    background-color: var(--color-light-bg);
    border-radius: 0.75rem;
    box-shadow: 0 10px 20px var(--color-light-shadow);
    padding: 2rem 2.5rem;
    transition: background-color var(--transition-duration) ease,
                box-shadow var(--transition-duration) ease;
  }
  /* Dark theme overrides */
  body.dark-mode {
    background-color: var(--color-dark-bg);
    color: var(--color-dark-text);
  }
  body.dark-mode .container {
    background-color: var(--color-dark-bg);
    box-shadow: 0 10px 30px var(--color-dark-shadow);
  }
  /* Heading styles */
  h1 {
    font-size: 2.75rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
  }
  p.subtitle {
    margin: 0 0 2rem 0;
    font-size: 1.1rem;
    color: var(--color-light-placeholder);
    transition: color var(--transition-duration) ease;
  }
  body.dark-mode p.subtitle {
    color: var(--color-dark-placeholder);
  }
  /* Form styles */
  form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
  }
  label {
    display: block;
    font-weight: 600;
    margin-bottom: 0.35rem;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"],
  input[type="date"],
  input[type="tel"],
  input[type="file"] {
    width: 100%;
    padding: 0.75rem 1rem;
    border-radius: 0.5rem;
    border: 1.5px solid var(--color-light-border);
    font-size: 1rem;
    font-family: var(--font-family);
    color: var(--color-light-text);
    background-color: var(--color-light-bg);
    transition:
      border-color var(--transition-duration) ease,
      background-color var(--transition-duration) ease,
      color var(--transition-duration) ease;
  }
  input[type="file"] {
    padding: 0.45rem 1rem;
  }
  input[type="text"]::placeholder,
  input[type="email"]::placeholder,
  input[type="password"]::placeholder,
  input[type="date"]::placeholder,
  input[type="tel"]::placeholder {
    color: var(--color-light-placeholder);
    transition: color var(--transition-duration) ease;
  }
  body.dark-mode input[type="text"],
  body.dark-mode input[type="email"],
  body.dark-mode input[type="password"],
  body.dark-mode input[type="date"],
  body.dark-mode input[type="tel"],
  body.dark-mode input[type="file"] {
    background-color: var(--color-dark-bg);
    color: var(--color-dark-text);
    border-color: var(--color-dark-border);
  }
  body.dark-mode input[type="text"]::placeholder,
  body.dark-mode input[type="email"]::placeholder,
  body.dark-mode input[type="password"]::placeholder,
  body.dark-mode input[type="date"]::placeholder,
  body.dark-mode input[type="tel"]::placeholder {
    color: var(--color-dark-placeholder);
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus,
  input[type="date"]:focus,
  input[type="tel"]:focus,
  input[type="file"]:focus {
    outline: none;
    border-color: var(--color-dark);
    box-shadow: 0 0 6px 2px rgba(38, 38, 124, 0.25);
  }
  /* Button style */
  button[type="submit"] {
    background-color: var(--color-dark);
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    padding: 0.85rem 1.5rem;
    border: none;
    border-radius: 0.6rem;
    cursor: pointer;
    transition: background-color 0.25s ease, transform 0.25s ease;
    user-select: none;
  }
  button[type="submit"]:hover,
  button[type="submit"]:focus {
    background-color: rgb(28, 28, 96);
    transform: scale(1.04);
    outline: none;
  }
  /* Theme toggle switch container */
  .theme-toggle-wrapper {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 1.75rem;
  }
  /* Toggle label */
  .toggle-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    user-select: none;
    font-weight: 600;
    color: var(--color-light-text);
    transition: color var(--transition-duration) ease;
    font-size: 1rem;
  }
  body.dark-mode .toggle-label {
    color: var(--color-dark-text);
  }
  /* Hidden checkbox for toggle */
  .toggle-label input[type="checkbox"] {
    appearance: none;
    width: 2.5rem;
    height: 1.25rem;
    background-color: var(--color-light-border);
    border-radius: 1rem;
    position: relative;
    outline: none;
    cursor: pointer;
    margin-right: 0.75rem;
    transition: background-color var(--transition-duration) ease;
  }
  body.dark-mode .toggle-label input[type="checkbox"] {
    background-color: var(--color-dark-border);
  }
  .toggle-label input[type="checkbox"]:checked {
    background-color: var(--color-dark);
  }
  /* Toggle knob */
  .toggle-label input[type="checkbox"]::before {
    content: "";
    position: absolute;
    top: 2.5px;
    left: 2.5px;
    width: 1rem;
    height: 1rem;
    background: white;
    border-radius: 50%;
    transition: transform 0.25s ease;
  }
  .toggle-label input[type="checkbox"]:checked::before {
    transform: translateX(1.25rem);
  }
  /* Responsive adjustments */
  @media (max-width: 600px) {
    .container {
      padding: 1.5rem 1.75rem;
      max-width: 95vw;
    }
    h1 {
      font-size: 2rem;
    }
  }
</style>

</head>
<body>
  <div class="container" role="main" aria-label="User data update form container">
    <div class="theme-toggle-wrapper">
      <label class="toggle-label" for="themeToggle" aria-live="polite" aria-atomic="true">
        <input type="checkbox" id="themeToggle" aria-label="Toggle dark and light mode" />
        Dark Mode
      </label>
    </div>

    <h1>Update Your Information</h1>
    <p class="subtitle">Fill out the form below to update your user information.</p>
    <form id="updateForm"  method="POST" action="update-profile-data.php" enctype= "multipart/form-data">
      <div>
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Your full name" required autocomplete="name" />
      </div>

      <div>
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required />
      </div>

      <div>
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="+1 234 567 8900" pattern="03[0-9]{2}-[0-9]{7}" autocomplete="tel" required />
      </div>

      <div>
        <label for="email">Gmail</label>
        <input type="email" id="email" name="email" placeholder="yourname@gmail.com" pattern="[a-z0-9._%+-]+@gmail\.com" autocomplete="email" required />
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a strong password" minlength="8" autocomplete="new-password"  />
      </div>

      <div>
        <label for="photo">Upload Photo</label>
        <input type="file" id="photo" name="photo" accept="image/*" />
      </div>

      <button type="submit">Update Info</button>
    </form>
  </div>




  <script>
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    // Initialize theme based on local storage or default to light
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      body.classList.add('dark-mode');
      themeToggle.checked = true;
    }

    themeToggle.addEventListener('change', () => {
      if (themeToggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
      } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
      }
    });

    // Basic form validation on submit
    // const form = document.getElementById('updateForm');
    // form.addEventListener('submit', (e) => {
    //   if (!form.checkValidity()) {
    //     e.preventDefault();
    //     form.reportValidity();
    //   } else {
    //     e.preventDefault();
    //     alert('User information updated successfully!');
    //     form.reset();
    //   }
    // });

  </script>
</body>
</html>





