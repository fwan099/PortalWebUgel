<?php 
require "../../config.php";
require "../layouts/header.php";

require "../../controlador/convocatoriasauxiliarC.php";
require "../../modelo/convocatoriasauxiliarM.php";
 ?>

 <!-- Maquetado de la parte del contenido del modulo-->

 <style type="text/css">
    tbody td:nth-child(2){
        text-align: left;
    }
     tbody td{
        text-align: center;
     }
     
     .dataTables_length{
	display: none !important;
	opacity: ;

}
.dataTables_filter{
	margin-top: 10px;
	margin-right: 18px;
}
 </style>
 <section class="main-gestion-inst">
        <div class="items-box">
            <div class="title-box">
                <span>CONVOCATORIAS AUXILIAR</span>
                
            </div>
            <div class="comunicados-content convocatoria">
                    <table  width="auto" class="table table-responsive" id="auxiliartt" >
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">N°</th>
                                <th>Convocatoria</th>
                                <th>Bases</th>
                                <th>Evaluacion Preliminar de  CV </th>
                                <th>Absolucion de Reclamos</th>
                                <th>Evaluacion Final de CV</th>
                                <th>Resultado Entrevista</th>
                                <th>Resultado Final</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--
                            <tr>
                                <td>1</td>
                                <td><p class="text-info">CAS Nº 116-2021 COORDINADOR/A DE INNOVACIÒN Y SOPORTE TECNOLÒGICO</p></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><a href="" ><i class="fas fa-file-pdf"></i></a></td>
                                <td><p class="text-danger"><b>Vigente</b></p></td>
                            </tr> -->
                             <?php 

                            $convocatorias = new ConvocatoriasAuxiliarC();
                            $convocatorias->MostrarConvocatoriasAuxiliarC();


                             ?>

                            
                        </tbody>
                    </table>
                    <div>
                    
                        
                    </div>

                    
                </div>
        </div>
        
    </section>

   <!-- Fin del Maquetado de la parte del contenido del modulo-->


<?php 
  require "../layouts/footer.php";

?>