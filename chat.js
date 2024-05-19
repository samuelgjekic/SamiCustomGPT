$(document).ready(function() {
    const chatBox = $("#chatBox");
    const messageInput = $("#messageInput");
    const sendButton = $("#sendButton");
    const chatAvatar = $("#chatAvatar");
    const chatContainer = $("#chatCont");
    const chatCloseButton = $("#closeButton");
    const faqButtons = $(".faq-button");

    chatAvatar.on("click", function() {
        chatContainer.toggleClass("chat-visible");
        chatContainer.toggleClass("fade-in");
        chatContainer.removeClass("fade-out");
        chatAvatar.hide();
    });

    chatCloseButton.on("click", function() {
        chatContainer.toggleClass("fade-out");
        chatContainer.removeClass("fade-in");
        setTimeout(function() {
            chatContainer.toggleClass("chat-visible");
            chatAvatar.show();
        }, 500);
    });

    function appendMessage(message, isUser, assistantName, showAvatarAndName = true) {
        const messageElement = $("<div>").addClass("message");
        if (isUser) {
            messageElement.addClass("user-message");
        } else {
            messageElement.addClass("assistant-message");
        }
        if (showAvatarAndName) {
            const avatar = $("<div>").addClass("avatar").text(isUser ? "U" : assistantName.charAt(0));
            messageElement.append(avatar);
            const messageContent = $("<div>").addClass("message-content");
            const messageTitle = $("<div>").addClass("message-title").text(isUser ? "You:" : assistantName + ":");
            messageContent.append(messageTitle);
            const messageText = $("<div>").addClass("message-text").html("<pre>" + message + "</pre>");
            messageContent.append(messageText);
            messageElement.append(messageContent);
        } else {
            const messageText = $("<div>").addClass("message-text").html("<pre>" + message + "</pre>");
            messageElement.append(messageText);
        }
        $("#chatBox").append(messageElement);
        scrollToBottom();
    }

    function scrollToBottom() {
        const chatBox = document.getElementById("chatBox");
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function disableInputs() {
        sendButton.prop("disabled", true);
        messageInput.prop("disabled", true);
        faqButtons.prop("disabled", true); // Disable FAQ buttons
    }

    function enableInputs() {
        sendButton.prop("disabled", false);
        messageInput.prop("disabled", false);
        faqButtons.prop("disabled", false); // Enable FAQ buttons
    }

    sendButton.on("click", function() {
        const message = messageInput.val().trim();
        if (message !== "") {
            appendMessage(message, true);
            disableInputs();
            setTimeout(function() {
                const loadingMessage = $("<div>").addClass("message loading-message").text("...");
                $("#chatBox").append(loadingMessage);
                scrollToBottom();
            }, 1000);
            $.ajax({
                url: "chat.php",
                method: "POST",
                data: { message: message },
                success: function(response) {
                    const { response: botResponse, assistantName } = JSON.parse(response);
                    $(".loading-message").remove();
                    appendMessage(botResponse, false, assistantName);
                    scrollToBottom();
                    enableInputs();
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    enableInputs();
                }
            });
            messageInput.val("");
        }
    });

    messageInput.on("keypress", function(event) {
        if (event.key === "Enter") {
            sendButton.click();
        }
    });

    faqButtons.click(function() {
        const faqText = $(this).text();
        if (faqText !== "") {
            appendMessage(faqText, true);
            disableInputs();
            setTimeout(function() {
                const loadingMessage = $("<div>").addClass("message loading-message").text("...");
                $("#chatBox").append(loadingMessage);
                scrollToBottom();
            }, 1000);
            $.ajax({
                url: "chat.php",
                method: "POST",
                data: { message: faqText },
                success: function(response) {
                    const { response: botResponse, assistantName } = JSON.parse(response);
                    $(".loading-message").remove();
                    appendMessage(botResponse, false, assistantName);
                    scrollToBottom();
                    enableInputs();
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    enableInputs();
                }
            });
        }
    });
});