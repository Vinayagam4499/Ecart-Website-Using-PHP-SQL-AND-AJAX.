// Function to load main content via AJAX
function loadMainContent(page) {
    $.ajax({
        url: page,
        type: 'GET',
        success: function (data) {
            // Load the response data into the main-content container
            $('#main-content').html(data);
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
}

// Function to fetch the current year using AJAX and update the footer
function updateFooter() {
    $.ajax({
        url: 'get_current_year.php', // Replace with your PHP file to fetch the current year
        type: 'GET',
        success: function (data) {
            $('#footer-content').html(data);
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
}

// Call the loadMainContent function when the page loads initially
$(document).ready(function () {
    loadMainContent('index.php'); // Replace 'main_content.html' with your actual main content file

    // Call the updateFooter function to fetch and display the current year in the footer
    updateFooter();
});
