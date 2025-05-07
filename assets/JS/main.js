document.addEventListener("mousemove", function (e) {
  let x = (e.clientX / window.innerWidth) * 100;
  let y = (e.clientY / window.innerHeight) * 100;

  document.documentElement.style.setProperty("--mouse-x", x + "%");
  document.documentElement.style.setProperty("--mouse-y", y + "%");
});
