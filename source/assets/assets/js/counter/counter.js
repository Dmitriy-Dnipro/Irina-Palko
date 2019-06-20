var counts = [];

$('#blueCounter .statvalue').each(function() {
    var num = $(this).attr('numx'); //end count
    var nuen = $(this).text();
    if (nuen === "") {
    nuen = 0;
    }
  
   counts.push(new CountUp(this, nuen, num, 0, 3, options));
});

var waypoint1 = new Waypoint({
    element: document.getElementById("blueCounter"),
        handler: function(direction) {
            if (direction == "up") {
            // for (var i = 0; i < counts.length; i++) {
            //   counts[i].reset();
            // }
            } else {
            for (var i = 0; i < counts.length; i++) {
                counts[i].start();
            }
        }
    },
    offset: "727"
});