var explore = document.querySelector("#explore");

function addElement () {
  var newDiv = document.createElement("div");
  newDiv.appendChild(document.createTextNode("We have other experiences as well such as exploring the Gupteshwor Cave, one of the country's most ancient caves and learning about mountaineering culture at the International Mountain Museum. There are other oppotunities of visting the ancient temples of Barahi and Bindabasini as well. There is a lot to explore in Pokhara. You will always end up finding a new thing to explore no matter how many times you have been there."));
  document.getElementById("div1").appendChild(newDiv);

  var img = document.createElement("IMG");
  img.setAttribute("src","Images/bindabasini.jpeg");
  img.setAttribute("width","540");
  img.setAttribute("height","400");
  img.setAttribute("alt","Bindabasini temple in Fewa Lake, Pokhara");

  var img2 = document.createElement("IMG");
  img2.setAttribute("src","Images/barahi.jpg");
  img2.setAttribute("width","540");
  img2.setAttribute("height","400");
  img2.setAttribute("alt","Barahi temple in Pokhara");

  document.getElementById("img2").appendChild(img);
  document.getElementById("img2").appendChild(img2);

  var heading = document.createElement("h4");
  heading.appendChild(document.createTextNode("A Little about Temple Bindabasini and Barahi"));
  document.getElementById("head").appendChild(heading);

  var para = document.createElement("p");
  para.appendChild(document.createTextNode("Bindabasini temple is one of the most reached Hindu temples in the city. It is also one of the oldest Hindu temples of Goddess Bhagwati situated in this whole country. People worship this Temple as one of the Shaktipiths which translates as Place to gain power. Tal Barahi is a two-story pagoda temple located in a small island on the south east sectioon of Phewa Lake in Pokhara."));

  document.getElementById("p1").appendChild(para);

}

document.getElementById("explore").addEventListener("click",addElement);
