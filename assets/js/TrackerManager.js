var TrackerManager = function (options) {

    var self = this;
    this.trackers = [];


};

TrackerManager.prototype.get =  function(){
    let url = 'http://127.0.0.1:5500/assets/data/trackers.json';
    var trackers = await

    fetch(url)
        .then(res => res.json())
        .then(out => {
            this.trackers = out;
            console.log('Checkout this JSON! ', out)
        }) ;
        }