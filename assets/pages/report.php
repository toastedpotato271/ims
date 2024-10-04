<?php 
$page_title = "Report an Incident - GRP3.";
$additional_css = [
    '../css/report.css',
    '../css/home.css',
];
include '../partials/header_home.php'; 
?>

<div id="form-box">
    <div class="form-container">
        <form id="incident_form" onsubmit="handleSubmit(event)">
            <div class="form-group">
                <div class="half-width">
                    <label for="username">Name <span class="required">*</span></label>
                    <input type="text" id="username" placeholder="Enter a username" required>
                    <div class="error" id="usernameError"></div>
                </div>
                <div class="half-width">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" placeholder="Your valid email" required>
                    <div class="error" id="emailError"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="half-width">
                    <label for="subject">Subject <span class="required">*</span></label>
                    <input type="text" id="subject" placeholder="Enter Incident Title" required>
                    <div class="error" id="subjectError"></div>
                </div>
                <div class="half-width">
                    <label for="company">Company <span class="required">*</span></label>
                    <select id="company" required>
                        <option value="">Please select</option>
                        <option value="group1">Group 1</option>
                        <option value="group2">Group 2</option>
                    </select>
                    <div class="error" id="companyError"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="half-width">
                    <label for="category">Category <span class="required">*</span></label>
                    <select id="category" required>
                        <option value="">Please select</option>
                        <option value="user-interface">User Interface (UI)</option>
                        <option value="backend">Backend</option>
                        <option value="performance">Performance</option>
                        <option value="security">Security</option>
                        <option value="others">Others</option>
                    </select>
                    <div class="error" id="categoryError"></div>

                    <label for="priority">Priority<span class="required">*</span></label>
                    <select id="priority" required>
                        <option value="">Please select</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                    <div class="error" id="priorityError"></div>
                </div>
                <div class="half-width">
                    <label for="details">Details <span class="required">*</span></label>
                    <textarea id="details" rows="5" placeholder="Details..."></textarea>
                    <div class="error" id="detailsError"></div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn" id="submitBtn">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function handleSubmit(event) {
        event.preventDefault();  

        const submitButton = document.getElementById('submitBtn');
        submitButton.disabled = true;  
        submitButton.innerText = 'Processing...';  

        // Simulate a delay for 3 seconds
        setTimeout(() => {
            window.location.href = '/ims-sqe/index.php'; 
        }, 3000);
    }
</script>

<?php
$additional_js = [
    '../js/home.js',
    '../js/home-add.js'
];
include '../partials/footer_home.php';
?>