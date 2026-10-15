<form id="task-form2" name="task-form2">
<input type="hidden" style="padding-left:30px;" class="form-control" id="idbdg" value"" >  
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Cédula de Ciudadanía<span style="color:#f58634;font-family:verdanab">*</span>:
        <label class="fa fa-copyright" style="font-size:17px"></label>
        <input type="text" style="padding-left:30px;font-family:verdana!important" class="form-control" id="Cedulabdg" placeholder="ejemplo: 71986532"  pattern="[0123456789]{6,11}" required></div> 
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Nombre<span style="color:#f58634;font-family:verdanab">*</span>:
        <label class="fa fa-tag"></label>
        <input type="text" style="padding-left:30px;" class="form-control" id="Nombrebdg" value"" required></div>    
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Primer Apellido<span style="color:#f58634;font-family:verdanab">*</span>:
        <label class="fa fa-tags"></label>
        <input type="text" style="padding-left:30px;" class="form-control" id="Apellido1bdg" value"" required></div>     
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Segundo Apellido:
        <label class="fa fa-tags"></label>
        <input type="text" style="padding-left:30px;" class="form-control" id="Apellido2bdg" value"" ></div>     
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Género<span style="color:#f58634;font-family:verdanab">*</span>:
        <select type="text" class="form-control" style="padding-left:6px" id="Generobdg" value"" required>>
            <option></option>         
            <option>Masculino</option>
            <option>Femenino</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Año de nacimiento:
     <?php if ($Out_edad == 0) { ?>
           <input type="hidden" id="Nacimientobdg">
           <select type="text" class="form-control" style="padding-left:6px" id="Anonbdg" >
            <option></option>         
            <option>2005</option>
            <option>2004</option>
            <option>2003</option>
            <option>2002</option>
            <option>2001</option> 
            <option>2000</option> 
            <option>1999</option> 
            <option>1998</option> 
            <option>1997</option> 
            <option>1996</option> 
            <option>1995</option> 
            <option>1994</option> 
            <option>1993</option> 
            <option>1992</option> 
            <option>1991</option> 
            <option>1990</option> 
            <option>1989</option> 
            <option>1988</option> 
            <option>1987</option> 
            <option>1986</option> 
            <option>1985</option>
            <option>1984</option> 
            <option>1983</option> 
            <option>1982</option> 
            <option>1981</option> 
            <option>1980</option> 
            <option>1979</option> 
            <option>1978</option> 
            <option>1977</option> 
            <option>1976</option> 
            <option>1975</option> 
            <option>1974</option> 
            <option>1973</option> 
            <option>1972</option> 
            <option>1971</option> 
            <option>1970</option>
            <option>1969</option> 
            <option>1968</option> 
            <option>1967</option> 
            <option>1966</option> 
            <option>1965</option> 
            <option>1964</option> 
            <option>1963</option> 
            <option>1962</option> 
            <option>1961</option> 
            <option>1960</option> 
            <option>1959</option> 
            <option>1958</option> 
            <option>1957</option> 
            <option>1956</option> 
            <option>1955</option>
            <option>1954</option>
            <option>1953</option>
            <option>1952</option>
            <option>1951</option>
        </select>
          <?php } else { ?>
             <input type="date" class="form-control" style="padding-left:6px;" id="Nacimientobdg" placeholder="" >
             <input type="hidden" id="Anonbdg" value=" ">
        <?php } ?>
        </div>
    </div>
</div>     
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Estado Civil:
        <select type="text" class="form-control" style="padding-left:6px" id="Civilbdg" value"" >
            <option></option>         
            <option>Soltero(a)</option>
            <option>Casado(a)</option>
            <option>Unión Libre</option> 
            <option>Separado(a)</option> 
            <option>Divorciado(a)</option> 
            <option>Viudo(a)</option> 
            <option>Sacerdote/monja</option> 
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Último nivel de estudios que alcanzó:
        <select type="text" class="form-control" style="padding-left:6px" id="Escolaridadbdg" value"" >
            <option></option>         
            <option>Ninguno</option>
            <option>Primaria incompleta</option>
            <option>Primaria completa</option> 
            <option>Bachillerato incompleto</option> 
            <option>Bachillerato completo</option> 
            <option>Técnico/tecnológico incompleto</option> 
            <option>Tecnológico completo</option>
            <option>Profesional incompleto</option> 
            <option>Profesional completo</option> 
            <option>Carrera militar/policía</option> 
            <option>Post-grado incompleto</option> 
            <option>Post-grado completo</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Ocupación u oficio:
        <input type="text" class="form-control" style="padding-left:6px;" id="Ocupacionbdg" value"" ></div>     
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Departamento de residencia:
        <select type="text" class="form-control" style="padding-left:6px"  onChange="departamentor2(this.form)" id="Departamentorbdg" value"" >
            <option></option>  
            <option>Amazonas</option>
            <option>Antioquia</option>
            <option>Arauca</option>
            <option>Atlántico</option>
            <option>Bolívar</option>
            <option>Boyacá</option>
            <option>Caldas</option>
            <option>Caquetá</option>
            <option>Casanare</option>
            <option>Cauca</option>
            <option>Cesar</option>
            <option>Chocó</option>
            <option>Córdoba</option>
            <option>Cundinamarca</option>
            <option>Guainía</option>
            <option>Guaviare</option>
            <option>Huila</option>
            <option>La Guajira</option>
            <option>Magdalena</option>
            <option>Meta</option>
            <option>Nariño</option>
            <option>Norte de Santander</option>
            <option>Putumayo</option>
            <option>Quindío</option>
            <option>Risaralda</option>
            <option>San Andrés y Providencia</option>
            <option>Santander</option>
            <option>Sucre</option>
            <option>Tolima</option>
            <option>Valle del Cauca</option>
            <option>Vaupés</option>
            <option>Vichada</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Ciudad/municipio de residencia:
        <input type="text" class="form-control" style="padding-left:6px" id="Municipiorbdg"  value"" >
        <!--<select type="text" class="form-control" style="padding-left: 5px" id="Municipiorbdg">
        <option></option>    
        </select>--></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Estrato socio-económico:
        <select type="text" class="form-control" style="padding-left:6px" id="Estratobdg">
            <option></option>         
            <option>Uno</option>
            <option>Dos</option>
            <option>Tres</option> 
            <option>Cuatro</option> 
            <option>Cinco</option> 
            <option>Seis</option> 
            <option>Finca</option> 
            <option>No sabe</option> 
        </select></div>
    </div>
</div>    
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Tipo de vivienda:
        <select type="text" class="form-control" style="padding-left:6px" id="Viviendabdg" value"" >
            <option></option>         
            <option>Propia</option>
            <option>En arriendo</option>
            <option>Familiar</option> 
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">N° de personas que de él dependen:
        <select type="text" class="form-control" style="padding-left:6px" id="Dependenciabdg" value"" >
            <option></option>  
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Departamento donde trabaja:
        <select type="text" class="form-control" style="padding-left:6px"  onChange="departamentot2(this.form)" id="Departamentotbdg" value"" >
            <option></option>  
            <option>Amazonas</option>
            <option>Antioquia</option>
            <option>Arauca</option>
            <option>Atlántico</option>
            <option>Bolívar</option>
            <option>Boyacá</option>
            <option>Caldas</option>
            <option>Caquetá</option>
            <option>Casanare</option>
            <option>Cauca</option>
            <option>Cesar</option>
            <option>Chocó</option>
            <option>Córdoba</option>
            <option>Cundinamarca</option>
            <option>Guainía</option>
            <option>Guaviare</option>
            <option>Huila</option>
            <option>La Guajira</option>
            <option>Magdalena</option>
            <option>Meta</option>
            <option>Nariño</option>
            <option>Norte de Santander</option>
            <option>Putumayo</option>
            <option>Quindío</option>
            <option>Risaralda</option>
            <option>San Andrés y Providencia</option>
            <option>Santander</option>
            <option>Sucre</option>
            <option>Tolima</option>
            <option>Valle del Cauca</option>
            <option>Vaupés</option>
            <option>Vichada</option>
        </select></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Ciudad/municipio donde trabaja:
        <input type="text" style="padding-left:6px"  class="form-control" id="Municipiotbdg"  value"" ></div>
        <!--<select type="text" class="form-control" style="padding-left:5px;" id="Municipiotbdg" >
            <option></option>
        </select>-->
    </div>
    <input type="hidden" style="padding-left:6px"  class="form-control" id="Empresabdg"  value"" ></input>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Años de antigüedad en la empresa:
        <select type="text" class="form-control" style="padding-left:6px" id="Añosebdg">
            <option></option>  
            <option>0</option> 
            <option>1</option>
            <option>2</option>
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
            <option>6</option> 
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Cargo que ocupa en la empresa<span style="color:#f58634;font-family:verdanab">*</span>:
        <input type="text" style="padding-left:6px" class="form-control"  id="Cargobdg" value"" required></div>     
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Nivel del cargo que desempeña<span style="color:#f58634;font-family:verdanab">*</span>:
        <select type="text" class="form-control" style="padding-left:6px" id="Nivelbdg" value"" required>>
            <option></option>         
            <option>Jefatura-tiene personas a su cargo</option>
            <option>Profesional, tecnólogo o técnico</option>
            <option>Auxiliar, asistente administrativo o técnico</option> 
            <option>Operario, ayudante o servicios generales</option>   
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Años de antigüedad en el cargo:
        <select type="text" class="form-control" style="padding-left:6px" id="Añoscbdg" value"" >
            <<option></option> 
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
            <option>6</option> 
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Tipo de contrato <span style="color:#007acc;font-family:verdanab">*</span>:
        <select type="text" class="form-control" style="padding-left:6px" id="Tipobdg" value"" >
            <option></option>         
            <option>Temporal de menos de 1 año</option>
            <option>Temporal de 1 año o más</option>
            <option>Término indefinido</option> 
            <option>Cooperado(cooperativa)</option> 
            <option>Prestación de servicios</option> 
            <option>No registra</option> 
        </select></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">N° de horas diarias<span style="color:#007acc;font-family:verdanab">*</span>:
        <select type="text" class="form-control" style="padding-left:6px" id="Horasbdg" value"" >
            <option></option>         
            <option>1</option>
            <option>2</option>
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
            <option>6</option> 
            <option>7</option>         
            <option>8</option>
            <option>9</option>
            <option>10</option> 
            <option>11</option> 
            <option>12</option> 
            <option>13</option> 
            <option>14</option> 
            <option>15</option> 
            <option>16</option> 
            <option>17</option> 
            <option>18</option> 
            <option>19</option> 
            <option>20</option> 
            <option>21</option> 
            <option>22</option> 
            <option>23</option> 
            <option>24</option> 
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Tipo de salario que recibe<span style="color:#007acc;font-family:verdanab">*</span>:
        <select type="text" class="form-control" style="padding-left:6px" id="Salariobdg" value"">
            <option></option>         
            <option>Fijo(diario, semanal, quincenal o mensual)</option>
            <option>Una parte fija y otra variable</option>
            <option>Todo variable(a destajo, por producción, por comisión)</option> 
            <option>Cooperado(cooperativa)</option> 
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Correo electrónico:
        <input type="email" class="form-control" style="padding-left:6px;" id="Emailbdg" required></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Número celular:
        <input type="text" class="form-control" style="padding-left:6px;" id="Celularbdg" required></div>  
    </div>

</div><br> 
<button id="boton_editar_riesgo" type="submit" name="enviar" class="btn btn btn-default btn-block" style="font-size:14px!important;width:270px;height:35px;line-height:1em">Enviar</button><br>                               
</form>