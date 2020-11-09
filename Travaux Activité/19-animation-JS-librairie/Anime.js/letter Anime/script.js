window.onload = function() {


var test = new Letterize({
    targets: "#animateMe"
  });

  var animation = anime.timeline({
    targets: test.listAll(),
    delay: anime.stagger(50),
    loop: true
  });

  animation
    .add({
      translateY: -40
    })
    .add({
      translateY: 0
});

}