function convert() {
    var temp = document.getElementById("temp");
    var value = temp.value;
  
    if (value == "c") {
      var convertedF = cToF();
  
      return document.getElementById("result").value = convertedF + "F";
    } else if (value == "f") {
      var convertedC = fToC();
  
      return document.getElementById("result").value = convertedC + "C";
    }
  }
  // celcius to rest
  
  function cToF() {
    var c = document.getElementById("input").value;
    return (c * 9 / 5) + 32;
  }
  
  // fahrenheit to rest
  
  function fToC() {
    var f = document.getElementById("input").value;
    return (f - 32) * 5 / 9;
  }