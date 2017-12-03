<?php require_once('./head.php'); ?>
<title>Prisijungimas</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 bg-light">
            <h1>Įveskite prisijungimo email ir slaptažodį</h1><br />
            <h3>Jei neprisimenate ar nežinote prisijungimo duomenu susisiekite su <a href="#">admin</a></h3>
            <br />


            <form>
                <div class="row">

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>

                      <button type="submit" class="btn btn-primary m-3">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
