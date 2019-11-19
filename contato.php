<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>

<body class='bg-light'>
    <br>
    <p class='h5' style="text-align: center;">Entre em contato com a N.C. Works</p><br>
    <p class='h5' style="text-align: center;">contato@ncworks.com.br</p>
    <p class='h5' style="text-align: center;">
        <div role="form" class="wpcf7" id="wpcf7-f442-p76-o1" lang="pt-BR" dir="ltr">
            <div class="screen-reader-response"></div>
            <form action="" method="post" class="" novalidate="novalidate">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="442" />
                    <input type="hidden" name="_wpcf7_version" value="5.1.4" />
                    <input type="hidden" name="_wpcf7_locale" value="pt_BR" />
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f442-p76-o1" />
                    <input type="hidden" name="_wpcf7_container_post" value="76" />
                </div>
                <p>
                    <center><br />
                        <label> Seu nome (obrigatório)<br />
                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" /></span> </label>
                </p>
                <p><label> Seu e-mail (obrigatório)<br />
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                                size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                aria-required="true" aria-invalid="false" /></span> </label></p>
                <p><label> Assunto<br />
                        <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject"
                                value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span>
                    </label></p>
                <p><label> Sua mensagem<br />
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40"
                                rows="10" class="wpcf7-form-control wpcf7-textarea"
                                aria-invalid="false"></textarea></span> </label><br />
                    <p><input name='btn' type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
                    <p>
                        </center>
                    </p>

        <?php 
            if(isset($_POST["btn"])){
                echo "<script>alert('Mensagem enviada com sucesso!')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php' />";                
                exit;
            }
        ?>
</body>

</html>