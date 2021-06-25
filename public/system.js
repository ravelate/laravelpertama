if(localStorage.getItem('preferredTheme') == 'dark') {
    checktheme =true;
    theme();
  }
  var checktheme = getElementById("check");
function theme(){
    if(checktheme==true){
document.getElementById('header').style.backgroundColor = 'black'
document.getElementById('kiri').style.backgroundColor = "rgb(" + 39 + "," + 39 + "," + 39 + ")";
document.getElementById('tengah').style.backgroundColor = "rgb(" + 17 + "," + 34 + "," + 51 + ")";
document.getElementById('kanan').style.backgroundColor = "rgb(" + 39 + "," + 39 + "," + 39 + ")";
document.getElementById('footer').style.backgroundColor = 'black'
document.getElementById('text1').style.color = 'white'
document.getElementById('text2').style.color = 'white'
document.getElementById('text3').style.color = 'white'
document.getElementById('text4').style.color = 'white'
document.getElementById('text5').style.color = 'white'
document.getElementById('text6').style.color = 'white'
document.getElementById('text7').style.color = 'white'
document.getElementById('text8').style.color = 'white'
document.getElementById('text9').style.color = 'white'
document.getElementById('text10').style.color = 'white'
document.getElementById('text11').style.color = 'white'
document.getElementById('text5').innerHTML = 'true'
checktheme = false;
localStorage.setItem('preferredTheme', 'dark');
    }else {
        document.getElementById('header').style.backgroundColor = 'lightgrey'
document.getElementById('kiri').style.backgroundColor = 'lightslategrey'
document.getElementById('tengah').style.backgroundColor = 'lavender'
document.getElementById('kanan').style.backgroundColor = 'lightslategrey'
document.getElementById('footer').style.backgroundColor = 'lightgrey'
document.getElementById('text1').style.color = 'black'
document.getElementById('text2').style.color = 'black'
document.getElementById('text3').style.color = 'black'
document.getElementById('text4').style.color = 'black'
document.getElementById('text5').style.color = 'black'
document.getElementById('text6').style.color = 'black'
document.getElementById('text7').style.color = 'black'
document.getElementById('text8').style.color = 'black'
document.getElementById('text9').style.color = 'black'
document.getElementById('text10').style.color = 'black'
document.getElementById('text11').style.color = 'black'
document.getElementById('text5').innerHTML = 'false'
checktheme = true;
localStorage.removeItem('preferredTheme');
    }
}