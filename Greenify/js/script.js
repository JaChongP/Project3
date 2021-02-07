//to make elements appear smoothly when scrolling

var scroll = window.requestAnimationFrame ||
            function (callback){ window.setTimeout(callback, 1000/60)};

var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
    
    elementsToShow.forEach(function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('is-visible');
        } 
    });
    scroll(loop);
}

loop();

function isElementInViewport(el) {
    
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0
        && rect.bottom >= 0)
      ||
      (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight))
      ||
      (rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }





//to make the tutorial page dynamic 

var tabs = document.querySelectorAll("[id^='tabHeader_']");
var tabPages = document.getElementsByClassName("tabpage");

for (var i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener("click", function(e) {
    var id = e.target.id.split("_")[1];
    switchTab(id);
  });
}

function switchTab(id) {
  id = parseInt(id);
  var activeTab = document.getElementById("tabHeader_" + id);
  var tabPageId;
  var i;

  for (i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("tabActiveHeader");
    tabs[i].parentNode.removeAttribute("data-current");
  }

  activeTab.parentNode.setAttribute("data-current", id);
  activeTab.classList.add("tabActiveHeader");

  for (i = 0; i < tabPages.length; i++) {
    tabPageId = parseInt(tabPages[i].id.split("_")[1]);
    if (tabPageId === id) {
      tabPages[i].style.display = "block";
    } else {
      tabPages[i].style.display = "none";
    }
  }
}

function prevTab(){
  var nextTab;
  var currentTab = document.querySelectorAll("[data-current]")[0].getAttribute("data-current");
  if(currentTab > 1){
  	switchTab(currentTab-1);
  }  
}

function nextTab(){
  var nextTab;
  var currentTab = document.querySelectorAll("[data-current]")[0].getAttribute("data-current");
  if(currentTab < tabs.length){
  	switchTab(parseInt(currentTab)+1);
  }  
}



