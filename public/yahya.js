window.onload = () => {
  const search = document.querySelector("input.search-input");
  const add = document.querySelector("button[name='add']");
  const del = document.querySelector("button[name='del']");
  get_assets();
  search.addEventListener("keyup", () => get_assets());
  add.addEventListener("click", () => {
    add_asset()
    search.value = "";
    get_assets();
  });
  del.addEventListener("click", () => {
    del_asset();
    search.value = "";
    get_assets();
  });
};

function get_assets() {
  const search = document.querySelector("input.search-input").value;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    if (this.readyState == 4) document.querySelector('tbody').innerHTML = this.responseText;
  };
  xhttp.open("GET", "get_assets2.php?q=" + search, true);
  xhttp.send();
}

function add_asset() {
  const search = document.querySelector("input.search-input").value;
  const message = document.getElementById("message");

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    if (this.readyState == 4) message.innerHTML = this.responseText;
  };
  xhttp.open("POST", "add_action2.php", true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send("q=" + search);
}
function del_asset() {
  const search = document.querySelector("input.search-input").value;
  const message = document.getElementById("message");

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    if (this.readyState == 4) message.innerHTML = this.responseText;
  };
  xhttp.open("POST", "del_action2.php", true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send("q=" + search);
}
