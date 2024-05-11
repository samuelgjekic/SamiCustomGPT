// chat.js

$(document).ready(function() {
    const chatBox = $("#chatBox");
    const messageInput = $("#messageInput");
    const sendButton = $("#sendButton");
    const chatAvatar = $("#chatAvatar"); // New chat avatar element
    const chatContainer = $("#chatCont");

chatAvatar.on("click", function() {
    console.log("Avatar clicked"); // Add this line
    chatContainer.toggleClass("chat-visible");
    chatAvatar.hide();
});


// Function to append a message to the chat box
function appendMessage(message, isUser, assistantName) {
    // Create a message element
    const messageElement = $("<div>").addClass("message");

    // Add appropriate classes based on whether it's a user message or assistant message
    if (isUser) {
        messageElement.addClass("user-message");
    } else {
        messageElement.addClass("assistant-message");
    }

    // Append the avatar
    const avatar = $("<div>").addClass("avatar").text(isUser ? "U" : assistantName.charAt(0)); // Use first letter of assistant's name
    messageElement.append(avatar);

    // Create a message content element
    const messageContent = $("<div>").addClass("message-content");

    // Append the message title (assistant name)
    const messageTitle = $("<div>").addClass("message-title").text(isUser ? "You:" : assistantName + ":");
    messageContent.append(messageTitle);

    // Append the message text
    const messageText = $("<div>").addClass("message-text").text(message);
    messageContent.append(messageText);

    // Append the message content to the message element
    messageElement.append(messageContent);

    // Append the message element to the chat box
    $("#chatBox").append(messageElement);

    // Scroll to the bottom of the chat box
    $("#chatBox").scrollTop($("#chatBox").prop("scrollHeight"));
}

// Event listener for sending a message
sendButton.on("click", function() {
    const message = messageInput.val().trim();
    if (message !== "") {
        // Get the bot ID from the URL
        // Send the message asynchronously
        $.ajax({
            url: "chat.php",
            method: "POST",
            data: { message: message },
            success: function(response) {
                // Parse the JSON response
                const { response: botResponse, assistantName } = JSON.parse(response);
                // Append the response to the chat box
                appendMessage(botResponse, false, assistantName); // Pass assistant name to appendMessage
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });

        // Add user's message to the chat box
        appendMessage(message, true);
        messageInput.val(""); // Clear the input field
    }
});



    // You can also handle sending message on pressing enter key
    messageInput.on("keypress", function(event) {
        if (event.key === "Enter") {
            sendButton.click(); // Simulate a click on the send button
        }
    });

    // Example: Append a welcome message when the chat loads
    appendMessage("Welcome to the chatbot!", false);
});