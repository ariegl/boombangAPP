<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('components/headerDoc.php');
    ?>
    <link rel="stylesheet" href="css/styles.css">
    <title>BoomBang SPA example</title>
</head>
<body>
    <section id="home">
        <header>
            <?php require_once('components/navBarIndex.php');?>
        </header>
        <div class="homeBody">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="imgCloud" src="img/spa/cloud.png" alt="">
                        <img class="kekoBienvenida" src="img/spa/rastaFly.png" alt="">
                    </div>
                    <div class="col-6 container-welcome d-flex justify-content-center align-items-center">
                        <div class="container section-welcome d-flex flex-wrap justify-content-center align-items-center">
                            <h1 class="text-white text-center p-3">Bienvenido a BoomBang!!</h1>
                            <p class="text-white text-justify pr-3 pl-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae quo nemo dolores, modi laborum blanditiis eveniet omnis voluptates magni laudantium earum minus, quibusdam cumque quis aut repellat! Inventore, impedit et!<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, eum ratione. Laudantium obcaecati eius at delectus dolor necessitatibus, porro voluptatem et id aut quasi quos, placeat in eligendi ducimus quia!</p>
                            <div class="container-fluid d-flex justify-content-end">
                                <a href="#about"><input class="btn btn-dark mb-3 p-2" type="button" value="crear una cuenta"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id ="about">
        <div class="row">
            <div class="col">
                <div class="container aboutTextContainer d-flex justify-content-start align-items-center flex-wrap">
                    <h1>Crea islas a tu estilo!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eveniet dolores labore quia, ex cum dolorem quam, porro quis nostrum error doloremque esse quidem, est perspiciatis sequi nisi vero facere?<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi et quis, deleniti magnam reprehenderit voluptas molestias voluptatibus odio enim. Provident magnam illum voluptatibus dolor vitae eveniet facilis, dicta voluptatum numquam!</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-wrap">
                <div class="container containerImgAbout">
                    <div id="sliderIslas" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/spa/iceberg.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/spa/background.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/spa/isla_volcan.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#sliderIslas" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#sliderIslas" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center flex-wrap">
                <div class="container containerImgAbout">
                    <div id="sliderAreas" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/spa/aquarium.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/spa/cienega.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/spa/tarantula.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#sliderAreas" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#sliderAreas" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="col">
                <div class="container aboutTextContainer d-flex justify-content-start align-items-center flex-wrap">
                    <h1>Visita areas divertidas!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eveniet dolores labore quia, ex cum dolorem quam, porro quis nostrum error doloremque esse quidem, est perspiciatis sequi nisi vero facere?<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi et quis, deleniti magnam reprehenderit voluptas molestias voluptatibus odio enim. Provident magnam illum voluptatibus dolor vitae eveniet facilis, dicta voluptatum numquam!<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis sunt magni eligendi molestias saepe optio libero quam doloremque dignissimos accusamus enim, iste inventore sint possimus nemo, dolorem molestiae accusantium nostrum.</p>
                </div>
            </div>
        </div>
    </section>
    <section id ="credits">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col d-flex justify-content-center align-items-center flex-wrap">
                <img src="img/spa/dinos.png" alt="">
            </div>
            <div class="col">
                <h1>Obten creditos<h3>para comprar objetos!</h3><h4>y decorar tus islas</h4></h1>  
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab reiciendis sunt nam, iusto maiores optio accusantium maxime quam accusamus culpa enim illo? Recusandae neque totam doloremque in, rerum explicabo.<br><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id voluptates, ad doloremque tempore autem veniam inventore voluptatem cupiditate, sequi quis accusantium molestiae perferendis tempora facere non optio. Ratione, ut est.</p>
                <input type="button" class="btn btn-primary" value="comprar creditos">
            </div>
        </div>
    </section>
    <section id ="contact" class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col">
                <div class="container">
                    <h1>contactanos</h1>
                    <form action="#">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <input type="button" value="enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <img src="img/spa/seta.png" alt="">
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        var nubes = document.querySelectorAll('.imgCloud');
        var aux = 0;
        var ban = 0;
        var aux_cloud_x = 0;
        var aleatorio_tamano = 0;

        for(var i = 0; i< nubes.length; i++){
            var nube = nubes[i];
            ban = 0;
    

            aleatorio_tamano = Math.floor(Math.random()*450) + 100;
            console.log('antes del bucle: '+aleatorio_tamano);

            while(ban != 1){
                if(aleatorio_tamano > (aux_cloud_x+100)){
                    aux_cloud_x = aleatorio_tamano;
                    ban = 1;
                    console.log('el tamaño es:'+aleatorio_tamano);
                }
                else{
                    if(aux_cloud_x > 420){ // 420 es el tamaño maximo para la burbuja nube
                        aux_cloud_x = 0;
                    }
                    aleatorio_tamano = Math.floor(Math.random()*450) + 100;
                }
            }

            nube.style.width = ""+aleatorio_tamano+"px";
            console.log('aux cloud X:'+aux_cloud_x);
            
            random_position_cloud_x = Math.floor(Math.random()*500)+150;
            random_position_cloud_x += random_position_cloud_x + (aux_cloud_x-200);

            random_position_cloud_y = Math.floor(Math.random()*500)+150;


            random_lado_position_x = Math.floor(Math.random()*2)+1;


            if(aux < 2){
                if(random_lado_position_x>1){
                    if(random_position_cloud_x > 500){
                        random_position_cloud_x = Math.floor(Math.random()*400)+150;
                        nube.style.transform = "translateX(-"+random_position_cloud_x+"px)";
                    }
                    else{
                        nube.style.transform = "translateX("+random_position_cloud_x+"px)";
                    }
                }else{
                    if(random_position_cloud_x > 500){
                        random_position_cloud_x = Math.floor(Math.random()*400)+150;
                        nube.style.transform = "translateX("+random_position_cloud_x+"px)";
                    }
                    else{
                        nube.style.transform = "translateX(-"+random_position_cloud_x+"px)";
                    }
                }
            }
            

            if(aux > 2){
                ban = 0;
                while(ban != 1){
                    if(random_position_cloud_x > 400){
                        random_position_cloud_x = Math.floor(Math.random()*200)+150;
                    }
                    else{
                        nube.style.transform = "translateY(+"+random_position_cloud_x+"px)";
                        console.log('position Y');
                        aux = 0;
                        ban = 1;
                    }
                }
            }

            aux += 1;
            console.log('aux:'+aux);
        }
    </script>
    <script>
        function selectMenu(){
            //CAMBIAR TEMA SELECCIONADO
            document.querySelectorAll('.menuItem').forEach(function(item){
                item.classList.remove('active');
            });

            //INDICAR TEMA ESCOGIDO
            event.target.classList.add('active');
        }

    </script>
</body>
</html>