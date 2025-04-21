
export default function startCountdownTimer(target) {

    // Element check
    if (!target) {return;}

    // Parse d:h:i:s or h:i:s or m:s
    const seconds = parseDHMS(target.value);
    if (isNaN(seconds) || seconds <= 0) {return;}

    const startTime = Date.now();

    const updateCountdown = () => {
        const elapsed = Math.floor((Date.now() - startTime) / 1000);
        const remaining = Math.max(0, seconds - elapsed);

        updateDHMS(target, remaining);

        if (remaining > 0) {
            setTimeout(updateCountdown, 1000);
        } else {
            target.value = "";
        }
    };

    // Start the countdown
    updateCountdown();
}

// Helper: Parse a string like "00:02:13:24" to seconds
function parseDHMS(str) {
    const parts = str.match(/\d+/g).map(Number).reverse();
    let seconds = 0;
    if (parts.length >= 1) {seconds += parts[0];}          // seconds
    if (parts.length >= 2) {seconds += parts[1] * 60;}     // minutes
    if (parts.length >= 3) {seconds += parts[2] * 3600;}   // hours
    if (parts.length >= 4) {seconds += parts[3] * 86400;}  // days
    return seconds;
}

// Helper: Update span with d:h:i:s format
function updateDHMS(node, seconds) {
    const d = Math.floor(seconds / 86400);
    const h = Math.floor((seconds % 86400) / 3600);
    const m = Math.floor((seconds % 3600) / 60);
    const s = seconds % 60;
    const formatted = [
        String(d).padStart(2, "0"),
        String(h).padStart(2, "0"),
        String(m).padStart(2, "0"),
        String(s).padStart(2, "0")
    ].join(":");
    node.value = formatted;
}
