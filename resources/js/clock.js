function updateClock() {
    // Get the current server time
    const serverTime = new Date();

    // Extract the hours, minutes, and seconds from the server time
    const hours = serverTime.getHours();
    const minutes = serverTime.getMinutes();
    const seconds = serverTime.getSeconds();

    // Format the time as a string
    const timeString = `${hours}:${minutes}:${seconds}`;

    // Update the clock display
    function updateClock() {
        // Get the current server time
        const serverTime = new Date();

        // Extract the hours, minutes, and seconds from the server time
        const hours = serverTime.getHours();
        const minutes = serverTime.getMinutes();
        const seconds = serverTime.getSeconds();

        // Format the time as a string
        const timeString = `${hours}:${minutes}:${seconds}`;

        // Update the clock display
        document.getElementById('clock').textContent = timeString;
    }

    // Call the updateClock function every second
    setInterval(updateClock, 1000);
}

// Call the updateClock function every second
setInterval(updateClock, 1000);