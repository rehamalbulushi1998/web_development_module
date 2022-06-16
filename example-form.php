

<div id="outside">
<form id="survey-form" action="/my-handling-form-page" method="post">
 
  <fieldset>

    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div>
      <label id="name-label" for="name">Name:</label>
      <input type="text" required id="name" name="user_name" placeholder="Enter name here">   </div>
    <div>
      <label for="address-label">Address:</label>
      <input type="Address" id="address" name="Address" placeholder="Enter address here">   </div>
    <div>
      <label id="email-label" for="Email">Email:</label>
      <input type="email" required id="email" name="user_email" placeholder="Enter email here">   </div>
    <div>
      <label id="number-label" for="phone">Phone Number:</label>
      <input type="number" id="number" name="user_name" placeholder="Enter 10 digit number" min="1" max="9">  </div>
    <div>
    

    <!-- ------------------Radio Buttons-------------------------------- -->
    <div>
      <label for="Gender">Gender</label>
      <p>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
      
      </p>
    </div>
    <label for="date-label">Date of Birth:</label>
    <input type="date">
   <label for="Gender">Check All That Apply</label>
    <p>
      <input type="checkbox"> I have trasport<br>
      <input type="checkbox">  I comfortabable with indoor and outdoor jobs<br>
      <input type="checkbox" > I do not have any type of health issues<br>
      <input type="checkbox" name="work" value="work" checked> I work full-time<br>
    </p>
    <div>
      <label for="msg"></label>
      <p> In 50 words or more explain why you want to have this job</p>
      <textarea id="msg" name="user_message" rows="4" cols="50" placeholder="Enter Text Here"></textarea>   </div>
    <div>

      <p>Upload your personal picture here:
      <input type="file">Attach Files</input></p>
      </div>


  <div id="submitbutton">
    <button type="submit" id="submit">Send your application</button>   </div>

</form>
  </div>
