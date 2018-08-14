
/*ヘッド固定表示*/
window.onscroll = function () {
  var fixedBarObj = document.getElementById("gnav");
  var fixedBarObjA = document.getElementById("page_top");
  if (document.documentElement.scrollTop > 600) {
    fixedBarObj.className = "fixed";
    fixedBarObjA.className = "page";
  } else {
    fixedBarObj.className = "";
    fixedBarObjA.className = "";
  }
}

