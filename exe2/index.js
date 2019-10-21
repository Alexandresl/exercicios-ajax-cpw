
let i = 0
imgEl = document.querySelectorAll("#img > li");
window.onload = load();

function load() {
  count = i
  while (count < (i + 20)) {
    imgEl[i].style.display = "block";
    console.log(count);
    count++;
  }
}