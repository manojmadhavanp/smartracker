var Tracker_Manager = function (options) {
    console.log("hellow");
}

Tracker_Manager.prototype.fetch = async function (item) {
    let url = `http://localhost/tracker/api/tracker/${item}`;
    try {
        var trackers = await fetch(url);
        if (trackers.ok) {
            this.trackers = await trackers.json();
            console.log('Checkout this JSON! ', this.trackers);
        } else {
            throw new Error(`HTTP error ${trackers.status}`);
        }
    } catch (error) {
        console.error(error);
    }
    return this.trackers;
};