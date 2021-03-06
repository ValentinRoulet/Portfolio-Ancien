<main>

    <div id="carousel">

<!--
        <div class="hideLeft">
            <img src="">
        </div>
-->
        <div class="prevLeftSecond">
            <img src="../../../assets/images/LanguageLog.png">
        </div>

        <div class="prev">
            <img src="../../../assets/images/LanguageProg.png">
        </div>

        <div class="selected">
            <img src="../../../assets/images/LanguageWeb.png">
        </div>

        <div class="next">
            <img src="../../../assets/images/LanguageSQL.png">
        </div>
<!--
        <div class="nextRightSecond">
            <img src="">
        </div>

        <div class="hideRight">
            <img src="../../../assets/images/LanguageWeb.png">
        </div>
-->
    </div>

    <div class="buttons">
        <button id="prev" class="BtnCarr"><i class="fas fa-arrow-left"></i></button>
        <button id="next" class="BtnCarr"><i class="fas fa-arrow-right"></i></button>
    </div>

</main>





<style>

.BtnCarr
{
    color: black;
}

html, body, main {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

#carousel {
    position: relative;
    height: 400px;
    top: 50%;
    transform: translateY(-50%);
    overflow: hidden;
}
#carousel div {
    position: absolute;
    transition: transform 1s, left 1s, opacity 1s, z-index 0s;
    opacity: 1;
}
#carousel div img {
    width: 400px;
    transition: width 1s;
}
#carousel div.hideLeft {
    left: 0%;
    opacity: 0;
    transform: translateY(50%) translateX(-50%);
}
#carousel div.hideLeft img {
    width: 200px;
}
#carousel div.hideRight {
    left: 100%;
    opacity: 0;
    transform: translateY(50%) translateX(-50%);
}
#carousel div.hideRight img {
    width: 200px;
}
#carousel div.prev {
    z-index: 5;
    left: 30%;
    transform: translateY(50px) translateX(-50%);
}
#carousel div.prev img {
    width: 300px;
}
#carousel div.prevLeftSecond {
    z-index: 4;
    left: 15%;
    transform: translateY(50%) translateX(-50%);
    opacity: 0.7;
}
#carousel div.prevLeftSecond img {
    width: 200px;
}
#carousel div.selected {
    z-index: 10;
    left: 50%;
    transform: translateY(0px) translateX(-50%);
}
#carousel div.next {
    z-index: 5;
    left: 70%;
    transform: translateY(50px) translateX(-50%);
}
#carousel div.next img {
    width: 300px;
}
#carousel div.nextRightSecond {
    z-index: 4;
    left: 85%;
    transform: translateY(50%) translateX(-50%);
    opacity: 0.7;
}
#carousel div.nextRightSecond img {
    width: 200px;
}

.buttons {
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    bottom: 10px;
}

main
{
    margin-top:10%;
}

</style>


<script>

function moveToSelected(element) {

if (element == "next") {
  var selected = $(".selected").next();
} else if (element == "prev") {
  var selected = $(".selected").prev();
} else {
  var selected = element;
}

var next = $(selected).next();
var prev = $(selected).prev();
var prevSecond = $(prev).prev();
var nextSecond = $(next).next();

$(selected).removeClass().addClass("selected");

$(prev).removeClass().addClass("prev");
$(next).removeClass().addClass("next");

$(nextSecond).removeClass().addClass("nextRightSecond");
$(prevSecond).removeClass().addClass("prevLeftSecond");

$(nextSecond).nextAll().removeClass().addClass('hideRight');
$(prevSecond).prevAll().removeClass().addClass('hideLeft');

}

// Eventos teclado
$(document).keydown(function(e) {
  switch(e.which) {
      case 37: // left
      moveToSelected('prev');
      break;

      case 39: // right
      moveToSelected('next');
      break;

      default: return;
  }
  e.preventDefault();
});

$('#carousel div').click(function() {
moveToSelected($(this));
});

$('#prev').click(function() {
moveToSelected('prev');
});

$('#next').click(function() {
moveToSelected('next');
});


</script>