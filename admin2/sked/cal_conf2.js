
//Define calendar(s): addCalendar ("Unique Calendar Name", "Window title", "Form element's name", Form name")
addCalendar("EventDate", "Select Date", "ev_date", "event_details");

// default settings for English
// Uncomment desired lines and modify its values
setFont("arial", 10);
setWidth(120, 1, 15, 1);
// setColor("#cccccc", "#cccccc", "#ffffff", "#ffffff", "#333333", "#cccccc", "#333333");
// setFontColor("#333333", "#333333", "#333333", "#ffffff", "#333333");
setFormat("Day yyyy-mm-dd");
setSize(200, 200, -200, 16);
//setSize(160, 160, -160, 12);

 setWeekDay(0);
// setMonthNames("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
 setDayNames("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
// setLinkNames("[Close]", "[Clear]");
