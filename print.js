function printContent(printReq){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementBy('printReq').innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
