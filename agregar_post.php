<DOCTORTYPE.html>
<html lang="es">
<meta charset="uft-8">     
      <head>
      <title>Agregando post</title> 
        <link rel="stylesheet" href="">
          <style>
              *{
                  margin: 0;
                  font-family: 'cabin';
                  padding: 0;
              }
              body{
                  background:#eee;
              }
              
              #caja{
                  width: 600px;
                  height: 600px;
                  background: white;
                  box-sizing: 0 0 2px #ccc;
                  margin: auto;
                  padding: 10px;
                  }
              input[type="text"]{
                  width: 500px;
                  padding: 5px 10px;
                  border:1px solid #ccc;
              }
              
              #descripcion{
                  width: 575px;
                  padding: 5px 10px;
                  border: 1px solid #ccc;
              }
              
              input[type="file"]{
                  display: none; 
              }
              
              label{
                  margin-top: 5px;
                  padding: 5px 10px;
                  border: 1px solid #ccc;
                  display: inline-block;
                  color:gray;
              }
         select{
               -webkit-appearance:none;
                  padding: 5px 10px;
                 border: 1px solid #ccc;
                 text-align: center;
          }
              

textarea#mentions {
  height: 350px;
}

div.card,
.tox div.card {
  width: 240px;
  background: white;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: 0 4px 8px 0 rgba(34, 47, 62, .1);
  padding: 8px;
  font-size: 14px;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}

div.card::after,
.tox div.card::after {
  content: "";
  clear: both;
  display: table;
}

div.card h1,
.tox div.card h1 {
  font-size: 14px;
  font-weight: bold;
  margin: 0 0 8px;
  padding: 0;
  line-height: normal;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}

div.card p,
.tox div.card p {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}

div.card img.avatar,
.tox div.card img.avatar {
  width: 48px;
  height: 48px;
  margin-right: 8px;
  float: left;
}



          </style>
    </head>
      <body>
          <div id="caja">
          <form action="procesar_agregar_post.php" method="post" enctype="multipart/form-data"></form> 
              <input type="text" name="" id="" placeholder="titulo del post">
              <textarea name="descripcion" id="descripcion" placeholder="Descripcion del post"></textarea>
              <label for="imagen">subir imagen</label>
              <input type="file" name="imagen" id="imagen">
              <label for="">categoria</label>
              <select name="categoria" id="">
              <optgroup label="categorias">
                  <option value="programing">programing</option>
                  <option value="web desing">web desing</option>
                  <option value="training">training</option>
                  </optgroup>
              </select>
              <label for="">Contenido Completo del Post</label>
              <textarea name="contenido" id="contenido"></textarea>
          </div>
          
<textarea id="full-featured"><p style="text-align: center; font-size: 15px;"><img title="TinyMCE Logo" src="//www.tiny.cloud/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" />
  </p>
  <h2 style="text-align: center;">Welcome to the TinyMCE Cloud demo!</h2>
  <h5 style="text-align: center;">Note, this includes some "enterprise/premium" features.<br>Visit the <a href="https://www.tiny.cloud/pricing/#demo-enterprise">pricing page</a> to learn more about our premium plugins.</h5>
  <p>Please try out the features provided in this full featured example.</p>

  <h2>Got questions or need help?</h2>
  <ul>
    <li>Our <a class="mceNonEditable" href="//www.tiny.cloud/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
    <li>Have a specific question? Visit the <a class="mceNonEditable" href="https://community.tiny.cloud/forum/">Community Forum</a>.</li>
    <li>We also offer enterprise grade support as part of <a href="https://www.tiny.cloud/pricing">TinyMCE premium subscriptions</a>.</li>
  </ul>

  <h2>A simple table to play with</h2>
  <table style="text-align: center;border-collapse: collapse; width: 100%;">
    <thead>
      <tr>
        <th>Product</th>
        <th>Cost</th>
        <th>Really?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TinyMCE Cloud</td>
        <td>Get started for free</td>
        <td>YES!</td>
      </tr>
      <tr>
        <td>Plupload</td>
        <td>Free</td>
        <td>YES!</td>
      </tr>
    </tbody>
  </table>

  <h2>Found a bug?</h2>
  <p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>

  <h2>Finally ...</h2>
  <p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
  <p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p>
</textarea>

<script src="js/main"></script>

      </body>
</html>