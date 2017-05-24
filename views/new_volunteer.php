    <form class="form-group" action="view.php" method="post">
        <div class="form-content">
            <input type="text" class="formControl" name="name" placeholder="Nom">
            <input type="text" class="formControl" name="firstname" placeholder="Prenom">
        </div>
        <div class="form-content">
            <input type="text" class="formControl" name="password" placeholder="Telephone">
            <input type="email" class="formControl" name="password" placeholder="Email">
        </div>
        <button  class="btn-send" value="connexion"  type="submit">ENVOYER</button><br>
        <p class="continue">Or continue with</p><br>
        <a href="#" class="btn-facebook">FACEBOOK</a><br></br>
        <a href="#" class="btn-google">GOOGLE</a>

    </form>


<style >

    .form-content {
        display: flex;
        justify-content: space-between;
    }
    input {

        border: 1px solid lightgrey!important;
        width: 45%!important;
        height: 35px!important;
        border-radius: 5px!important;
        background-color: lightgrey!important;
        }

    input::placeholder{
        color : black;
    }
            .btn-send {
          color: white;
          text-align: center;
          border-radius: 4px;
          font-weight: bold;
          background: #323232;
          width: 100%;
        }

        .btn-send:hover {
          opacity: 1;
          background: #323232;
          text-decoration: none;
          color: white;
        }

        .btn-facebook {
          color: white;
          text-align: center;
          border-radius: 4px;
          font-weight: bold;
          background: #3B5998;
          margin-top: -5em;
        }

        .btn-facebook:hover {
          opacity: 1;
          background: ##3B5998;
          text-decoration: none;
          color: white;
        }
        .btn-google {
          color: white;
          text-align: center;
          border-radius: 4px;
          font-weight: bold;
          background: #1266F1;
          margin-top: -6em;
        }

        .btn-google:hover {
          opacity: 1;
          background: #1266F1;
          text-decoration: none;
          color: white;
        }

        .formControl {
            width: 100%;
            background-color: rgb(239,239,239);
            border: none;
        }

        .form-group{
          margin-top: -1em;
        }

        .continue {
            color: black;
        }


</style>
