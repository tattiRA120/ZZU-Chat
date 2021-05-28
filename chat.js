function readMessage() {
	$.ajax({
		type: 'post',
		url: './message.log'
    	})
	.then(
		function (data) {
			log = data.replace(/[\n\r]/g, "<br />");
            		$('#messageTextBox').html(log);
		},
		function () {
			alert("�ǂݍ��ݎ��s");
		}
	);
}


function writeMessage() {
	$.ajax({
		type: 'post',
		url: './main.php',
		data: {
			'message' : $("#message").val()
		}
	})
	.then(
		function (data) {
			readMessage();
			$("#message").val('');
		},
		function () {
			alert("�������ݎ��s");
		}
	);
}


$(document).ready(function() {
	readMessage();
	setInterval('readMessage()', 3000);
});
