function submitForm() {
  var form = document.getElementById("myForm");
  var name = form.elements["name"].value;
  var prof = form.elements["prof"].value;
  var materia = form.elements["materia"].value;
  var email = form.elements["email"].value;
  var rating = form.elements["rating"].value;
  var comment = form.elements["comment"].value;
}

const background = document.querySelector('.background');

window.addEventListener('scroll', () => {
  const rotation = `rotate(${window.scrollY / 10}deg)`;
  background.style.transform = rotation;
});
