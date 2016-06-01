<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#topSection">
                        <img alt="Brand" src="images/iconCharod32x32.png" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#sobreNosSection">Sobre Nós</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="jumbotron" id="topSection">
            <div class="container">
                <div class="ca_zone ca_zone1"><!--Product-->
                    <div class="ca_wrap ca_wrap1">
                        <a href="#sobreNosSection">
                            <img class="bigbanner" id="sobreNos" src="images/bannerSobreNos.png" >
                        </a>
                        <img style="display:none" class="bigbanner" id="idCidada" src="images/bannerIdentidadeCidada.png" >
                    </div>
                </div>
            </div>
        </div>

        <section class="darkSection" id="sobreNosSection" >
            <h1> Sobre Nós </h1>
            <h2>Missão</h2>
            <h3>Proporcionar maior conforto para as pessoas através da tecnologia com a geração de valores para nossos clientes e os stakeholders.</h3>
            </br></br>
            <h2>Visão</h2>
            <h3>Oferecer um serviço de excelência e inovação para empresas e governos.</h3>
            </br></br>
            <h2>Valores</h2>
            <h3>Conquistar a <b>confiança</b> dos clientes </br>
                <b>Comprometimento</b> com os resultados diante de clientes e stakeholders </br>
                Oferecer <b>transparência</b> através de comunicação clara e contínuos feedbacks</br>
                <b>Responsabilidade</b> nas conduções e decições, e assim contribuir para uma sociedade melhor</br></h3>

        </section>

        <section class="TransparentSection" id="contato">
            <form>
                <h1> Entre em Contato </h1></br>
                <label for="inputEmail" class="col-lg-2 control-label" > Nome </label>
                <div class="col-lg-6">
                    <input type="text" class="form-control input-sm"/>
                </div></br></br></br>
                <label for="inputEmail" class="col-lg-2 control-label" > Email </label>
                <div class="col-lg-4">
                    <input type="text" class="form-control input-sm"/>
                </div></br></br></br>
                <label for="inputEmail" class="col-lg-2 control-label" > Motivo do Contato </label>
                <div class="col-lg-4">
                    <select class="form-control" >
                        <option>Informaçao</option>
                        <option>Sugestao</option>
                        <option>Reclamaçao</option>
                        <option>Elogio</option>
                    </select>
                </div></br></br></br>

                <label for="inputEmail" class="col-lg-2 control-label" > Mensagem </label>
                <div class="col-lg-10">
                    <textarea rows="3" class="form-control input-sm"></textarea>
                </div>
                </br></br></br></br></br>
                <button type="submit" class="btn btn-primary btn-lg" >Enviar </button>
            </form>
        </section>
        </br></br></br></br>
        <div class="footerSection">
            <footer>
                <div class="col-1g-12">
                    <p>Made by Uenes Ferreira. Contact him at ueneslucio@gmail.com </p>
                    <p>Charod Soluções</p>
                    <p>Entre em contato: charod@charod.com.br</p>
                </div>
            </footer>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>
