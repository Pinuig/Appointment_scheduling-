document.getElementById("emailForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const too = document.getElementById("too").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "send_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("response").innerHTML = xhr.responseText;
        }
    };

    xhr.send("too=${too}&subject=${subject}&message=${message}");
});