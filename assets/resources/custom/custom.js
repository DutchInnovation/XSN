function navigate(tab_id) {
  var content_tabs = document.getElementsByTagName("content-tab")

  for (var i = 0; i < content_tabs.length; i++) {
    content_tabs[i].classList.remove("d-block")
    content_tabs[i].classList.add("d-none")
  }

  document.getElementById(tab_id).classList.remove("d-none")
  document.getElementById(tab_id).classList.add("d-block")

  var nav_elements = document.getElementsByTagName("nav-element")
  for (var i = 0; i < nav_elements.length; i++) {
    if (nav_elements[i].getAttribute("onclick") != null && nav_elements[i].getAttribute("onclick").includes(tab_id)) {
      nav_elements[i].classList.add("active")
    } else {
      nav_elements[i].classList.remove("active")
    }
  }
}