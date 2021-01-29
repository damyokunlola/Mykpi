<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/mystyle.css">

    <title>verify Mail Page</title>
</head>

<body>
    <div class="container">

        <form id="loginform">
            <div class="align-items-center">

                <div id="enter-email">
                    <div class="col-auto">
                        <label class="" for="email" class="font-weight-bold">Office Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                            </div>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter office email (name@miratechnologiesng.com)">
                        </div>
                        <br>
                    </div>

                    </br>
                    <div class="col-auto float-left">
                        <button type="button" id="emailsubmit" class="btn btn-primary mb-2">Submit</button>
                        <p id="message"></p>
                    </div>
                </div>
                </br>

                <div id="tokendiv" class="hide">
                    <div id="enter-token" class="col-auto d-none">
                        <label class="" for="token" class="font-weight-bold">Token</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                            </div>
                            <input type="text" class="form-control" id="token" placeholder="Enter token sent to office email">
                        </div>
                        <br>
                    </div>


                    <br>
                    <div class="col-auto float-left">
                        <button type="button" id="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>


                </br>
                </br>
        </form>
        <script>
            const submit = document.getElementById("emailsubmit");







            async function checkmail() {

                const form = document.getElementById("loginform");
                const formdata = new FormData(form);
                const res = await fetch("../implement/verifytoken.php", {
                    method: "POST",
                    headers: new Headers(),
                    body: formdata
                });
                const result = res.json;
                if (result.status = 'true') {

                    document.getElementById("enter-email").classList.add("hide");
                    document.getElementById("tokendiv").classList.remove("hide");
                    // hello();

                } else {

                    alert("Email does not exist");

                }

            }

            submit.addEventListener("click", e => {
                checkmail();
            })





            // function hello() {
            //     const emailss = document.querySelector('#enter-email');
            //     const tokendiv = document.getElementById("tokendiv");

            //     emailss.classList.add("hide");
            //     tokendiv.classList.remove("hide");

            // }
        </script>
</body>

</html>