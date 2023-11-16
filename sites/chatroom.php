<?php

#Next Projekt: Chatroom/Customer Chat mit Backend

?>

<section>
	<div id="Chatroom">
        <h1>Chatroom</h1>
		<div id="chatwindow">

		</div>
        <form id="messageForm">
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button type="button" onclick="sendMessage()">Send</button>
        </form>
	</div>
</section>

<style>
#Chatroom h1{
    color: black;
}

#Chatroom{
    background-color: white;
    color:black;
}

</style>