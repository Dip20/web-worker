// Message handler to receive messages from the main script
onmessage = function (event) {
    // console.log('input', event.data);

    input_date = event.data;

    let result;

    // Use the Fetch API to make an HTTP request
    fetch('server.php', {
        method: 'POST',
        body: JSON.stringify(input_date),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            result = data;

            // Send a result back to the main script
            postMessage(result);
        })
        .catch(error => {
            result = error;

            // Send an error back to the main script
            postMessage('Task encountered an error: ' + result);
        });
};
