// Calculate average number of weeks in human lifetime
alert("Welcome to JavaScript");
var yearsInLifetime = 80; // Assuming average human lifespan is 80 years
var weeksInYear = 52;
var averageWeeksInLifetime = yearsInLifetime * weeksInYear;

// Program that tells time of the day
var hour = new Date().getHours();
var timeOfDay;

if (hour >= 5 && hour < 12) {
  timeOfDay = "morning";
} else if (hour >= 12 && hour < 18) {
  timeOfDay = "afternoon";
} else {
  timeOfDay = "night";
}

// Display outputs on the webpage
var outputDiv = document.getElementById("output");
outputDiv.innerHTML =
  "<p>Average number of weeks in human lifetime: " +
  averageWeeksInLifetime +
  "</p>";
outputDiv.innerHTML += "<p>Current time of the day: " + timeOfDay + "</p>";
