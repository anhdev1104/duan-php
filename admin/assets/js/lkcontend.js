document.addEventListener("DOMContentLoaded", function () {
  loadPartial("header", "includes/header.html", "header");
  loadPartial("index", "includes/index.html", "index");
});

function loadPartial(containerId, url, targetId) {
  var container = document.getElementById(containerId);
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", url, true);
  xhr.send();
}
