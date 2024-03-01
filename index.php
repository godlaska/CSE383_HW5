<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE383 Homework 5</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Inline CSS for the submit button */
        #submitBtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 8px;
            cursor: pointer;
        }

        /* CSS for the footer */
        footer {
            margin-top: 20px;
            bottom: 0px;
            width: 100%;
            background-color: #f5f5f5;
            text-align: center;
	    padding: 10px 0;
        }

        /* CSS for the image */
        .image-container {
            margin-bottom: 60px;
        }

        .image {
       		width: 98%;
		height: auto;
		max-height: 300px;
		padding-left: 1%;
		padding-right: 1%;
		padding-bottom: 20px;
        }

	/* CSS for h1 */
	h1 {
		color: black;
		cursor: copy;
		padding-left: 1%; /* Match the panoramic spacing */
	}

	h1:hover { 
		animation: color-cycle 8s infinite;
	}
	
	@keyframes color-cycle {
            0% {
                color: black;
            }
            33% {
                color: blue;
            }
            66% {
                color: purple;
            }
            100% {
                color: black;
            }
	}

	 /* Adjusting checkboxes */
        .form-check-input {
	    	width: auto; /* Make the checkbox size automatic */
		padding-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Keigen Godlaski</h1>
	<img src="https://images.pexels.com/photos/207385/pexels-photo-207385.jpeg?cs=srgb&dl=pexels-pixabay-207385.jpg&fm=jpg" class="img-fluid image" alt="panoramic of the sky">
    <form action="hw5s24.php" method="POST" class="container">

        <!-- User ID -->
        <div class="form-group">
            <label for="userids24">User ID:</label>
            <input type="text" id="userids24" name="userids24" class="form-control" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="emails24">Email:</label>
            <input type="email" id="emails24" name="emails24" class="form-control" required>
        </div>

        <!-- Entry Year -->
        <div class="form-group">
            <label>Entry Year:</label><br>
            <div class="form-check">
        	<input type="radio" id="entryYear2019" name="entryYears24" value="2019" class="form-check-input">
        	<label for="entryYear2019" class="form-check-label">2019</label><br>
    	</div>
    	<div class="form-check">
        	<input type="radio" id="entryYear2020" name="entryYears24" value="2020" class="form-check-input">
        	<label for="entryYear2020" class="form-check-label">2020</label><br>
    	</div>
    	<div class="form-check">
        	<input type="radio" id="entryYear2021" name="entryYears24" value="2021" class="form-check-input">
        	<label for="entryYear2021" class="form-check-label">2021</label><br>
    	</div>
    	<div class="form-check">
        		<input type="radio" id="entryYear2022" name="entryYears24" value="2022" class="form-check-input">
        		<label for="entryYear2022" class="form-check-label">2022</label><br>
    	</div>
    		<div class="form-check">
        		<input type="radio" id="entryYear2023" name="entryYears24" value="2023" class="form-check-input">
        		<label for="entryYear2023" class="form-check-label">2023</label><br>
    		</div>
    		<div class="form-check">
        		<input type="radio" id="entryYearOther" name="entryYears24" value="0" class="form-check-input">
        		<label for="entryYearOther" class="form-check-label">Other</label><br>
    		</div>
        </div>

        <!-- Birth Year -->
	<div class="form-group">
    		<label for="birthYears24">Birth Year:</label>
    		<select id="birthYears24" name="birthYears24" class="form-control">
			<option value="">Select Birth Year</option>
        		<?php
			// Start PHP loop
        		for ($year = 1990; $year <= 2024; $year++) {
				echo "<option value=$year>$year</option>";
        		}
        		?>
    		</select>
	</div>

        <!-- Graduation Date -->
        <div class="form-group">
            <label for="gradDates24">Expected Graduation Date:</label>
            <input type="date" id="gradDates24" name="gradDates24" class="form-control">
        </div>

        <!-- CSE Major -->
	<div class="form-group">
		<div class="form-check">
            		<input type="checkbox" id="cses24" name="cses24" class="form-check-input">
			<label for="cses24" class="form-check-label">Are you a CSE major?</label>
		</div>
        </div>

        <!-- Owns a Car -->
	<div class="form-group">
		<div class="form-check">
            		<input type="checkbox" id="cars24" name="cars24" class="form-check-input">
            		<label for="cars24" class="form-check-label">Do you own a car?</label>
		</div>
        </div>

        <!-- Number of Mobile Devices -->
        <div class="form-group">
            <label for="mobileDevices24">Number of mobile devices you own:</label>
            <select id="mobileDevices24" name="mobileDevices24" class="form-control">
		<option value="0">0</option>
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        	<option value="5">5</option>
        	<option value="6">6</option>
        	<option value="7">7</option>
        	<option value="8">8</option>
        	<option value="9">9</option>
        	<option value="10">10</option>
            </select>
        </div>

        <!-- Favorite Quote -->
        <div class="form-group">
            <label for="quotes24">Favorite Quote:</label>
            <textarea id="quotes24" name="quotes24" rows="5" class="form-control"></textarea>
        </div>

        <!-- Source of Quote -->
        <div class="form-group">
            <label for="quoteCites24">Source of Quote:</label>
            <input type="url" id="quoteCites24" name="quoteCites24" class="form-control">
        </div>

        <!-- Hidden Field -->
        <input type="hidden" name="commands24" value="submit">
	
	<div class="form-group" margin-bottom="60px">
        	<!-- Submit Button -->
        	<button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>

        	<!-- Clear Button -->
        	<button type="reset" class="btn btn-secondary">Clear</button>
	</div>

    </form>

       <!-- Footer with Bootstrap styling -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">CSE383, Homework 5, 2/29/2024</span>
        </div>
    </footer>
</body>
</html>
