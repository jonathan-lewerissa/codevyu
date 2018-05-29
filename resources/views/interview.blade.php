@extends('layouts.master')

	@section('title')

	@endsection
	@section('script')
	<script src="https://rtcmulticonnection.herokuapp.com/dist/RTCMultiConnection.min.js"></script>
<script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
<style type="text/css">
	video {
		width: 40%;
		border-radius: 15px;
	}
</style>
@endsection


@section('content')

<h1 class="ui header centered" id="head" >Welcome to the interview session</h1>
<p id="paragrap" style="text-align: center;">Disini anda akan memulai sesi interview, dimohon untuk memasukan room-id lalu tekan join untuk masuk dalam room tersebut.</p>
<p id="paragrap2" style="text-align: center;">Setelah anda menekan tombol join, maka akan muncul notifikasi untuk microphone beserta camera lalu silahkan anda memberikan izin terhadap akses tersebut.</p>

<div class="ui centered" style="text-align: center;">
	<div class="ui action input focus">
		<input id="room_id" placeholder="Unique Room ID" type="text" readonly hidden value="{{ $id }}">
		<div class="ui action input">
			<button id="join-room" class="ui button">Enter interview now!</button>
		</div>
	</div>
</div>
<div class="ui centered" style="text-align: center;">
	<div class="ui input focus" >
	  	 <input  id="input-text-chat" placeholder="Enter Text Chat" type="text">
	</div>
</div>



<!-- <div class="ui two column centered grid">
   <div class="four column centered row">
    <div class="column">
    	<div class="ui action input focus">
			  <input id="txt-roomid" placeholder="Unique Room ID" type="text">
			</div>
    </div>
    <div class="column">
    	<div class="ui action input">
			  <button id="join-room" class="ui button">Join Room</button>
			</div>
    </div>
  </div>
  <div class="column">
  	<div class="ui input focus">
  	 <input  id="input-text-chat" placeholder="Enter Text Chat" type="text">
  	 </div>
  </div>
</div> -->



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

	var roomid = document.getElementById('room_id');

	document.getElementById('join-room').onclick = function() {
		this.disabled = true;
		connection.openOrJoin(roomid.value || 'predefined-roomid');
		document.getElementById('head').innerHTML ="Semoga Berhasil";
		document.getElementById('paragrap').innerHTML = "Setelah anda selesai interview, dimohon untuk mengirimkan file yang telah dibuat ke email perusahaan";
		document.getElementById('paragrap2').innerHTML ="";
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

</script>
@endsection