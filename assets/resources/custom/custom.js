function navigate(button, tab_id) {
  var content_tabs = document.getElementsByTagName("content-tab")

  for (var i = 0; i < content_tabs.length; i++) {
    console.log("ajsfdn")
    content_tabs[i].classList.remove("d-block")
    content_tabs[i].classList.add("d-none")
  }

  document.getElementById(tab_id).classList.remove("d-none")
  document.getElementById(tab_id).classList.add("d-block")

  var nav_elements = document.getElementsByTagName("nav-element")
  for (var i = 0; i < nav_elements.length; i++) {
    nav_elements[i].classList.remove("active")
  }

  button.classList.add("active")
}