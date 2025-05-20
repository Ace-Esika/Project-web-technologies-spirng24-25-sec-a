let clockedIn = false;
    let clockInTime = "";

    function clockIn() {
      const now = new Date();
      clockInTime = now.toLocaleTimeString();
      document.getElementById('clockTimes').innerHTML = `Clocked in at ${clockInTime}`;
      clockedIn = true;
      document.getElementById('clockInBtn').disabled = true;
      document.getElementById('clockOutBtn').disabled = false;
      return false;
    }

    function clockOut() {
      if (!clockedIn) {
        alert("Please clock in first.");
        return false;
      }
      const now = new Date();
      const clockOutTime = now.toLocaleTimeString();
      document.getElementById('clockTimes').innerHTML = `Clocked in at ${clockInTime}<br>Clocked out at ${clockOutTime}`;
      clockedIn = false;
      document.getElementById('clockInBtn').disabled = false;
      document.getElementById('clockOutBtn').disabled = true;
    }