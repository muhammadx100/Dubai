<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Update Property Details</title>
<style>
  /* Reset */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #ffffff;
    color: #6b7280;
    line-height: 1.6;
  }
  main {
    max-width: 900px;
    margin: 3rem auto 5rem;
    padding: 0 1rem;
  }
  h1 {
    font-weight: 700;
    font-size: 3rem;
    color: #111827;
    margin-bottom: 2rem;
  }
  form {
    background: #fff;
    padding: 2rem 2.5rem;
    border-radius: 0.75rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  }
  fieldset {
    border: none;
    padding: 0;
    margin-bottom: 1.5rem;
  }
  label {
    display: block;
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.4rem;
    font-size: 1rem;
  }
  input[type="text"],
  input[type="number"],
  input[type="file"],
  textarea {
    width: 100%;
    padding: 0.6rem 0.8rem;
    border: 1.5px solid #d1d5db;
    border-radius: 0.75rem;
    font-size: 1rem;
    font-family: inherit;
    color: #374151;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus,
  input[type="number"]:focus,
  input[type="file"]:focus,
  textarea:focus {
    border-color: rgb(38, 38, 124);
    outline: none;
    box-shadow: 0 0 6px rgba(38, 38, 124, 0.25);
  }
  textarea {
    resize: vertical;
    min-height: 100px;
  }
  .grid-two-cols {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
  }
  @media (max-width: 600px) {
    .grid-two-cols {
      grid-template-columns: 1fr;
    }
  }
  .btn-group {
    margin-top: 2rem;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
  }
  button {
    padding: 0.75rem 1.75rem;
    font-size: 1rem;
    font-weight: 700;
    border-radius: 0.75rem;
    border: none;
    cursor: pointer;
    user-select: none;
    transition: background-color 0.3s ease;
  }
  button.btn-save {
    background-color: rgb(38, 38, 124);
    color: white;
  }
  button.btn-save:hover,
  button.btn-save:focus {
    background-color: rgb(28, 28, 96);
    outline: none;
  }
  button.btn-cancel {
    background-color: #e2e8f0;
    color: #374151;
  }
  button.btn-cancel:hover,
  button.btn-cancel:focus {
    background-color: #cbd5e1;
    outline: none;
  }
</style>
</head>
<body>
<main>
  <h1>Update Property Details</h1>
  <form id="property-update-form" novalidate enctype="multipart/form-data" method="POST" action = "update-property-data-received.php"  enctype= "multipart/form-data" > 

    <fieldset>
      <label for="title">Property Title</label>
      <input type="text" id="title" name="title" placeholder="Enter property title" required />
    </fieldset>

    <fieldset>
      <label for="price">Price</label>
      <input type="number" id="price" name="price" min="0" placeholder="Enter price in USD" required />
    </fieldset>

    <fieldset>
      <label for="address">Address</label>
      <textarea id="address" name="address" placeholder="Enter full address" required></textarea>
    </fieldset>

    <div class="grid-two-cols">
      <fieldset>
        <label for="bedroom">Bedrooms</label>
        <input type="number" id="bedroom" name="bedroom" min="0" placeholder="Number of bedrooms" required />
      </fieldset>
      <fieldset>
        <label for="bathroom">Bathrooms</label>
        <input type="number" id="bathroom" name="bathroom" min="0" placeholder="Number of bathrooms" required />
      </fieldset>
      <fieldset>
        <label for="parking">Parking Spots</label>
        <input type="number" id="parking" name="parking" min="0" placeholder="Number of parking spots" required />
      </fieldset>
      <fieldset>
        <label for="area">Area (sq ft)</label>
        <input type="number" id="area" name="area" min="0" placeholder="Size in square feet" required />
      </fieldset>
    </div>

    <fieldset>
      <label for="image">Choose Property Image</label>
      <input type="file" id="image" name="image" accept="image/*" />
    </fieldset>

    <div class="btn-group">
      <button type="submit" class="btn-save">Save</button>
      <button type="reset" class="btn-cancel">Cancel</button>
    </div>

  </form>

</main>

<script>
  const form = document.getElementById('property-update-form');

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    // Demo alert - here you would typically do AJAX or form submission
    alert('Property details updated (demo only, no backend connection).');
  });
</script>
</body>
</html>
