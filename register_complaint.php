
<html>
  <head>
    <style>
      .form-container {
        width: 500px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #85CDFD;
      }

      .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      .form-container label {
        display: block;
        margin-bottom: 10px;
      }
      body{
        width: 100%;
            height: 100vh;
            background-image: url('https://image.shutterstock.com/image-illustration/abstract-blue-white-gray-polygon-260nw-1451847182.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
      }

      .form-container input[type="text"],
      .form-container input[type="tel"],
      .form-container select,
      .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      .form-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #181823;
        color: white;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h1>Raise Query</h1>
      <form action="test.php" method="post" enctype="multipart/form-data">
        <label for="problem_category">Problem Category:</label>
        <select name="problem_category" id="problem_category">
          <option value="public_toilets">Public Toilets</option>
          <option value="garbage_management">Garbage Management</option>
          <option value="potholes">Potholes</option>
          <option value="drainage">Drainage</option>
        </select>

        <label for="problem_brief">Problem Brief:</label>
        <textarea name="problem_brief" id="problem_brief"></textarea>

        <label for="municipality">Municipality:</label>
        <select name="municipality" id="municipality">
          <option value="tonk">Tonk Municipality</option>
          <option value="jaipur">Jaipur Nagar Nigam</option>
        </select>

        <label for="location">Location of the Problem:</label>
        <input type="text" name="location" id="location">

        <label for="applicant_name">Name of Applicant:</label>
        <input type="text" name="applicant_name" id="applicant_name">

        <label for="phone_number_of_applicant">Phone Number of Applicant</label>
        <input type="varchar" id="phone_number_of_applicant" name="phone_number_of_applicant" minlength="10" maxlength="10" required />

        <label for="picture_of_area">Picture of Area</label>
        <input type="file" id="picture_of_area" name="picture_of_area" accept="image/jpeg, image/png" required />

        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
