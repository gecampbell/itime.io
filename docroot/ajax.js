<script type="text/javascript">
var page = "time.php";
function ajax(url,target) {
  var timeZone = (new Date().getTimezoneOffset())*(-1);
  var fullUrl = url + '?_TZ=' + timeZone;
  // native XMLHttpRequest object
  if (window.XMLHttpRequest) {
    req = new XMLHttpRequest();
    req.onreadystatechange = function() {ajaxDone(target);};
    req.open("GET", fullUrl, true);
    req.send(null);
    // IE/Windows ActiveX version
  } else if (window.ActiveXObject) {
    req = new ActiveXObject("Microsoft.XMLDOM");
    if (req) {
      req.onreadystatechange = function() {ajaxDone(target);};
      req.open("GET", fullUrl, true);
      req.send(null);
    }
  }
  // refresh at midnight
  d = new Date();
  h = d.getHours();
  m = d.getMinutes();
  s = d.getSeconds();
  if (h==0 && m==0 && s<20) document.location.reload(true);
  setTimeout("ajax(page,'clock')", 10000);
}

function ajaxDone(target) {
  // only if req is "loaded"
  if (req.readyState == 4) {
    // only if "OK"
    if (req.status == 200 || req.status == 304) {
      results = req.responseText;
      document.getElementById(target).innerHTML = results;
    } else {
      document.getElementById(target).innerHTML="ajax error:\n" +
      req.statusText;
    }
  }
}
</script>