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
<script>
	var connection = new RTCMultiConnection();

	connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

	connection.session ={
		audio: true,
		video: true
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
</script>
</body>
</html>