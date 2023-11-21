<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Hello world
    </h1>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const worker = new Worker('worker.js');
        // Send a message to the worker
        worker.postMessage({
            "start_date": "2022-03-01",
            "end_date": "2023-03-31"
        });

        // Message handler to receive messages from the worker
        worker.onmessage = function(event) {
            console.log('message', event.data);
        };
    </script>
</body>

</html>