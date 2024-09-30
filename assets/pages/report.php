<?php 
$page_title = "Report an Incident - GRP3.";
$additional_css = [
    '../css/report.css',
    '../css/home.css',
];
include '../partials/header_home.php'; 
?>
<form id="report_form" action="#">

  <header>
    <h2>Incident Report Form</h2>
  </header>
  
  <div>
    <label class="desc" id="title1" for="Field1">First Name</label>
    <div>
      <input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>

  <div>
    <label class="desc" id="title2" for="Field2">Last Name</label>
    <div>
      <input id="Field2" name="Field2" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>

  <div>
    <label class="desc" id="title2" for="Field2">Last Name</label>
    <div>
      <input id="Field2" name="Field2" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title4" for="Field4">
      Message
    </label>
  
    <div>
      <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>
    
  <div>
    <fieldset>
    
      <legend id="title5" class="desc">
        Priority
      </legend>
      
      <div>
      	<input id="radioDefault_5" name="Field5" type="hidden" value="">
      	<div>
      		<input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
      		<label class="choice" for="Field5_0">Low</label>
      	</div>
        <div>
        	<input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
        	<label class="choice" for="Field5_1">Medium</label>
        </div>
        <div>
        	<input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
        	<label class="choice" for="Field5_2">High</label>
        </div>
        <div>
        	<input id="Field5_3" name="Field5" type="radio" value="Third Choice" tabindex="7">
        	<label class="choice" for="Field5_3">Urgent</label>
        </div>
      </div>
    </fieldset>
  </div>
  
  <div>
    <fieldset>
      <legend id="title6" class="desc">
        Incident Type
      </legend>
      <div>
      <div>
      	<input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
      	<label class="choice" for="Field6">Bug</label>
      </div>
      <div>
      	<input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
      	<label class="choice" for="Field7">Features</label>
      </div>
      <div>
      	<input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
      	<label class="choice" for="Field8">Task</label>
      </span>
      </div>
      <div>
      	<input id="Field9" name="Field9" type="checkbox" value="Third Choice" tabindex="11">
      	<label class="choice" for="Field9">Others</label>
      </span>
      </div>
    </fieldset>
  </div>
  
  <div>
    <label class="desc" id="title106" for="Field106">
    	Category
    </label>
    <div>
    <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
      <option value="First Choice">User Interface (UI)</option>
      <option value="Second Choice">Backend</option>
      <option value="Third Choice">Performance</option>
      <option value="Third Choice">Security</option>
      <option value="Fourth Choice">Others...</option>
    </select>
    </div>
  </div>
  
  <div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>
  
</form>

<?php
$additional_js = [
    '../js/home.js',
    '../js/home-add.js'
];
include '../partials/footer_home.php';
?>