<!DOCTYPE html>
<html>

    <?php include('../templates/header.php'); ?>
        
        <div class="form-wrapper">
            
            <form action="index.html" method="post">
                <div class="Regform">
                    <h3>
                        <em>Register Here!!!
                        </em>
                    </h3>
                    <p>
                        A member of the club will contact you soon!
                    </p>
                    
                </div>

                <hr>
                
                <fieldset>
                    <legend><span class="number">1</span>Basic Information</legend>
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="user_name">
            
                    <label for="cnum">Calling number:</label>
                    <input type="number" class="no-arrow" id="cnum" name="user_cnum">
            
                    <label for="wnum">Whatsapp number:</label>
                    <input type="number" class="no-arrow" id="wnum" name="user_wnum">
                    
                    <label for="mail">Email:</label>
                    <input type="email" id="mail" name="user_email">
                    
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="user_dob">
                </fieldset>

                <fieldset>
                    <legend><span class="number">2</span>Residential Information</legend>
                    
                    <input type="text" id="add1" name="user_add1" placeholder="Address Line 1:">
                    <input type="text" id="add2" name="user_add2" placeholder="Address Line 2:">
                    <input type="text" id="city" name="user_city" placeholder="City:">
                    <input type="text" id="state" name="user_state" placeholder="State:">
                    <input type="number" id="pincode" name="user_pincode" placeholder="Pin Code:">
                </fieldset>

                <fieldset>
                    <legend><span class="number">3</span>College Details</legend>
                    <label for="college">Name of your college:</label>
                    <input type="text" id="college" name="user_college">

                    <label for="degree">Degree pursuing:</label>
                    <input type="text" id="degree" name="user_degree">

                    <label for="course">Name of the course:</label>
                    <input type="text" id="course" name="user_course">
            
                    <label for="year">Year of Study:</label>
                    <input type="number" id="year" name="user_year">
            
                    <label for="cstate">The state in which the college is located:</label>
                  <input type="number" id="cstate" name="user_cstate">
                </fieldset>
                
                <fieldset>
                    <legend><span class="number">4</span>Interests</legend>
                    <label for="bio">Tell us something about yourself?:</label>
                    <textarea id="bio" name="user_bio"></textarea>
            
                    <label for="bio">Why do you wish to join us?:</label>
                    <textarea id="bio" name="user_bio"></textarea>

                    <label>Select your domains of interest from the following:</label>
                    <input type="checkbox" id="eventman" value="event_management" name="user_interest">
                    <label class="light" for="eventman">
                        Event Management
                    </label><br>
                    <input type="checkbox" id="contentwri" value="content_writing" name="user_interest">
                    <label class="light" for="contentwri">
                        Content Writing
                    </label><br>
                    <input type="checkbox" id="multimedia" value="multi_media" name="user_interest">
                    <label class="light" for="multimedia">
                        Multimedia
                    </label><br>
                    <input type="checkbox" id="marketing" value="market_ing" name="user_interest">
                    <label class="light" for="marketing">
                        Marketing
                    </label>
                </fieldset>
        
                <fieldset>
                    <label for="files">Please provide relevant samples of your work:</label>
                    <input type="file" id="files" name="filename" multiple>
                </fieldset>
        
                <button type="submit" class="btn message">Submit</button>
            </form>

        </div>

    <?php include('../templates/footer.php'); ?>   
    
</html>