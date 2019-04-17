 var MediaStreamCam;
 var MediaStreamAud;



function btnstart() {

  var player = document.getElementById('video-remote');

var handleSuccess = function(stream) {
  player.srcObject = stream;
  MediaStreamCam = stream.getTracks()[0];
  MediaStreamAud = stream.getTracks()[1];
  };

navigator.mediaDevices.getUserMedia({video: true, audio: true}).then(handleSuccess);

var player = document.getElementById('video-client');

var handleSuccess = function(stream) {
  player.srcObject = stream;
  MediaStreamCam = stream.getTracks()[0];
  MediaStreamAud = stream.getTracks()[1];
};

}

/*function selectGender(e){
    var gender;
    if gender == "feminino" {
        alert("Selecionou Gênero feminino");
    }

}*/

function btnstop() {
   
   MediaStreamCam.stop();
   MediaStreamAud.stop();
}
