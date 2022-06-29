<?php 
require "../../config.php";
require "../layouts/header.php";

require "../../controlador/comunicadossC.php";
require "../../modelo/comunicadossM.php";

 ?>
<style type="text/css">
    .comunicados-content .tr{
        height: initial !important;
    }
    .comunicados-content {
    padding: 0 8px;
    min-height: 100% !important;
    }
</style>
 <section class="main-gestion-inst">
        <div class="items-box">
            <div class="title-box">
                <span>TODOS LOS COMUNICADOS</span>
                
            </div>
            <div class="comunicados-content">
                    <table  width="auto" class="table table-responsive" id="tb" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Titulo</th>
                                <th>Fecha</th>
                                
                            </tr>
                        </thead>
                        <tbody id="developers">
                            <!--<tr>
                                <td>1</td>
                                <td><a href="">OFICIO MULT N° 0106-2021 UGEL YUNGUYO Comunico prohibición de reuniones y fiestas de promoción</a></td>
                                <td>2022-05-04</td>
                            </tr>-->

                            <?php 

                            $comunicados = new ComunicadosC();
                            $comunicados->MostrarComunicadosC();


                             ?>
                        </tbody >
                    </table>
                    <div>
                    
                        
                    </div>

                    
                </div>
        </div>
        
    </section>
 




 <?php 
  require "../layouts/footer.php";

?>

