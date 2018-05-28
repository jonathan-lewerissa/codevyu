<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://rtcmulticonnection.herokuapp.com/dist/RTCMultiConnection.min.js"></script>
<script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
<style type="text/css">
	video {
		width: 40%;
		border-radius: 15px;
	}
</style>

</head>
<body>

<input id="txt-roomid" placeholder="Unique Room ID">

<button id="join-room">Join Room</button>
<input type="text" id="input-text-chat" placeholder="Enter Text Chat" >
<div id="chat-container">

                <div id="file-container"></div>
                <div class="chat-output"></div>
</div>
<script>
	var connection = new RTCMultiConnection();

	connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

	connection.session ={
		audio: true,
		video: true,
		data: true
	};
	connection.sdpConstraints.mandatory = {
		OfferToReceiveAudio : true,
		OfferToReceiveVideo : true
	};

	var roomid = document.getElementById('txt-roomid');

	roomid.value = connection.token();

	document.getElementById('join-room').onclick = function() {
		this.disabled = true;
		connection.openOrJoin(roomid.value || 'predefined-roomid');
	};
connection.onopen = function(event) {
    connection.send('Welcome to Interview Session');
};

connection.onmessage = function(event) {
    alert(event.userid + ' said: ' + event.data);
};


document.getElementById('input-text-chat').onkeyup = function(e) {
    if (e.keyCode != 13) return;
    // removing trailing/leading whitespace
    this.value = this.value.replace(/^\s+|\s+$/g, '');
    if (!this.value.length) return;
    connection.send(this.value);
    appendDIV(this.value);
    this.value = '';
};

var chatContainer = document.querySelector('.chat-output');
function appendDIV(event) {
    var div = document.createElement('div');
    div.innerHTML = event.data || event;
    chatContainer.insertBefore(div, chatContainer.firstChild);
    div.tabIndex = 0;
    div.focus();
    document.getElementById('input-text-chat').focus();
}

var chatContainer = document.querySelector('.chat-output');
function appendDIV(event) {
    var div = document.createElement('div');
    div.innerHTML = event.data || event;
    chatContainer.insertBefore(div, chatContainer.firstChild);
    div.tabIndex = 0;
    div.focus();
    document.getElementById('input-text-chat').focus();
}
</script>
</body>
</html>