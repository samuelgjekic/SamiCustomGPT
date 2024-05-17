$(document).ready(function() {
    const chatBox = $("#chatBox");
    const messageInput = $("#messageInput");
    const sendButton = $("#sendButton");
    const chatAvatar = $("#chatAvatar"); // New chat avatar element
    const chatContainer = $("#chatCont");
    const chatCloseButton = $("#closeButton");
    scrollToBottom();

    
    chatAvatar.on("click", function() {
        chatContainer.toggleClass("chat-visible");
        chatContainer.toggleClass("fade-in"); // Add fade-in class
        chatContainer.removeClass("fade-out"); // Ensure fade-out class is removed
        chatAvatar.hide();
    });



        // Fade in tooltip when page loads
        $("#tooltip").fadeIn(1000); // Adjust fade-in duration as needed

        // Fade out tooltip when close button is clicked
        $("#tooltipClose").on("click", function() {
            $("#tooltip").fadeOut(500); // Adjust fade-out duration as needed
        });

// Event listener for the close button
$("#closeButton").on("click", function() {
    // Make an AJAX call to clear the session
    event.preventDefault();

    $.ajax({
        url: "clear_session.php",
        method: "POST",
        success: function(response) {
            // Parse the JSON response
            try {
                var data = JSON.parse(response);
                // Check if the session was cleared successfully
                if (data.status === "success") {
                    console.log("Session cleared successfully.");
                    // Clear the chat box
                    $("#chatBox").empty();
                } else {
                    console.error("Failed to clear session.");
                }
            } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
});

// Function to append a message to the chat box
function appendMessage(message, isUser, assistantName, showAvatarAndName = true) {
    // Create a message element
    const messageElement = $("<div>").addClass("message");

    // Add appropriate classes based on whether it's a user message or assistant message
    if (isUser) {
        messageElement.addClass("user-message");
    } else {
        messageElement.addClass("assistant-message");
    }

// Append the avatar and name only if showAvatarAndName is true
if (showAvatarAndName) {
    // Append the avatar
    const avatar = $("<div>").addClass("avatar").text(isUser ? "Du" : assistantName); // Use first letter of assistant's name
    messageElement.append(avatar);

    // Create a message content element
    const messageContent = $("<div>").addClass("message-content");

    // Append the message title (assistant name)
    const messageTitle = $("<div>").addClass("message-title").text(isUser ? "Du:" : assistantName + ":");
    messageContent.append(messageTitle);

    // Append the message text within a <pre> tag
    const messageText = $("<div>").addClass("message-text").html("<pre>" + message + "</pre>");
    messageContent.append(messageText);

    // Append the message content to the message element
    messageElement.append(messageContent);
} else {
    // If showAvatarAndName is false, only append the message text within a <pre> tag
    const messageText = $("<div>").addClass("message-text").html("<pre>" + message + "</pre>");
    messageElement.append(messageText);
}

    // Append the message element to the chat box
    $("#chatBox").append(messageElement);

    // Scroll to the bottom of the chat box
    scrollToBottom();
}



// Function to scroll to the bottom of the chat box
function scrollToBottom() {
    const chatBox = document.getElementById("chatBox");
    chatBox.scrollTop = chatBox.scrollHeight;
}

// Event listener for sending a message
sendButton.on("click", function() {
    const message = messageInput.val().trim();
    if (message !== "") {
        // Add user's message to the chat box
        appendMessage(message, true);

        // Delay displaying the loading message container for 1 second
        setTimeout(function() {
            // Add animated dots while waiting for response
            const loadingMessage = $("<div>").addClass("message loading-message").text("..."); // Create loading message element with dots
            $("#chatBox").append(loadingMessage); // Append loading message to chat box
            scrollToBottom(); // Scroll to the bottom after appending the loading message
        }, 1000); // Delay for 1 second (1000 milliseconds)

        // Get the bot ID from the URL
        // Send the message asynchronously
        $.ajax({
            url: "chat.php",
            method: "POST",
            data: { message: message },
            success: function(response) {
                // Parse the JSON response
                const { response: botResponse, assistantName } = JSON.parse(response);
                // Remove the loading message
                $(".loading-message").remove();
                // Append the response to the chat box
                appendMessage(botResponse, false, assistantName); // Pass assistant name to appendMessage
                scrollToBottom(); // Scroll to the bottom after appending the bot's response
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });

        messageInput.val(""); // Clear the input field
    }
});



    // You can also handle sending message on pressing enter key
    messageInput.on("keypress", function(event) {
        if (event.key === "Enter" && !event.shiftKey) {
            event.preventDefault(); // Prevent the default newline behavior
            sendButton.click();
        }
    });

   
});

