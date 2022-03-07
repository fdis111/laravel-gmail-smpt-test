<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Newsletter</h1>
            <div class="mt-5">
                <textarea name="md-editor" id="md-editor" cols="30" rows="10"></textarea>
            </div>
            <button disabled class="btn btn-primary" id="submit-button">Publier</button>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
        <script>
            const mdInput = document.getElementById("md-editor");
            const simplemde = new SimpleMDE({element: mdInput});
            const submitButton = document.getElementById("submit-button");

            simplemde.codemirror.on("change", function(){
                if (simplemde.value().length > 50) {
                    submitButton.disabled = false
                }
            });

            submitButton.addEventListener("click", () =>{
                axios.post("/", {
                    newsletter:simplemde.value()
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                })
            })

        </script>
    </body>
</html>
