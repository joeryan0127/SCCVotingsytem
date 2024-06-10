<style media="screen">
								.form-question {
									display: flex;
									flex-direction: column;
									justify-content: center;
									margin: 0 0 3rem;
									min-height: 3rem;
								}
								.input-container {
									border-bottom: solid 2px #333333;
								}
								.input-container input {
									border: none;
									box-sizing: border-box;
									outline: 0;
									padding: .75rem;
									width: 100%;
								}
								</style>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-footer">
					</div>										
					<div class="modal-body">
				<form action="add_voters.php" method = "post" enctype = "multipart/form-data" id="newModalForm">
					<div class="form-field">
						<label>Student ID</label><br/>
						<input class ="form-control" type = "text"  id="id_number" name = "id_number" placeholder = "Student ID" required>
					</div>
					<div class="form-field">
						<label>First Name</label><br/>
						<input class="form-control" type ="text" id="firstname" name = "firstname" placeholder="First Name" required="true">
					</div>					
					<div class="form-field">
						<label>Last Name</label><br/>
						<input class="form-control"  type = "text" id="lastname" name = "lastname" placeholder="Last Name" required="true">
					</div>
					<div class="form-field">
						<label>Email Add</label><br/>
						<input class="form-control"  type = "text" id="email" name = "email" placeholder="Email Address" required="true">
					</div>

					<div class="form-field">
						<label>Gender</label> <br/>
						<select class = "form-control" id="gender" name = "gender" required>
							<option disabled selected>Select Gender</option>
							<option >Male</option>
							<option >Female</option>														
						</select>
					</div>
					<div class="form-field">
					<label>Department</label>
						<select class = "form-control" id="department" name = "department" placeholder="Select Department" required >
							<option selected disabled>Select Department</option>
							<option>BSIT</option>
							<option>BSBA</option>
							<option>BSHM</option>
							<option>BSTM</option>
							<option>BEED</option>
							<option>BSED</option>
							<option>BSCRIM</option>
						</select>
					</div>
					<div class="form-field">
					<label>Year</label> <br/>
						<select class = "form-control" id="year_level" name = "year_level" required>
							<option disabled selected>Select Year Level</option>
							<option>1st Year</option>
							<option>2nd Year</option>
							<option>3rd Year</option>
							<option>4th Year</option>								
						</select>
					</div>
					<div class="form-field">
							<label>Birthdate</label> <br/>
									<div class="form-question">
					
									<div class="input-container">
										<input id="birthdate" type="date" name="birthdate" minlength="1" maxlength="64" placeholder=" " autocomplete="nope" required="required"></input>
										<span class="bar"></span>
									</div>
									</div>
										
					</div>
					<div class="form-field">
					<label>School Year</label> <br/>
						<select class = "form-control" id="school_year" name = "school_year" required>
							<option disabled selected>Select Shool Year</option>
							<option>2020-2021</option>
							<option>2021-2022</option>
							<option>2022-2023</option>
							<option>2023-2024</option>								
						</select> 
					</div>
					</br>
					<button name="submit" type="submit" class="btn btn-primary" onclick="submitVoters()">Save Data</button>
              		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</form>  
			</div>						
        </div>                               
	</div>	
				
</div>



