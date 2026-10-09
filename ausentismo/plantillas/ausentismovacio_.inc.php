<form name="form1" id="task-form">
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Cédula de Ciudadanía:
        <label class="fa fa-copyright"></label>
        <input type="text" style="padding-left:30px;font-family:verdana!important" class="form-control" id="Cedula" placeholder="ejemplo: 71986532"  pattern="[0123456789]{6,11}" ></div> 
    </div>
    <div class="col-md-4" id="registro"> <br> 
        <div style="text-align:left;width:270px!important">Nombre:
        <label class="fa fa-tag"></label>
        <input type="text" style="  padding-left:30px;" class="form-control" id="Nombre" placeholder="" ></div>     
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Primer Apellido:
        <label class="fa fa-tags"></label>
        <input type="text" style="  padding-left:30px;" class="form-control" id="Apellido1" placeholder="" ></div>     
    </div>
</div>
<div class="row">
    <div class="col-md-4" id="registro"> <br> 
        <div style="text-align:left;width:270px!important">Segundo Apellido:
        <label class="fa fa-tags"></label>
        <input type="text" style="  padding-left:30px;" class="form-control" id="Apellido2" placeholder="" ></div>     
    </div>
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Cargo que ocupa en la empresa: <a onclick="cargo1()" style="font-size:18px;color:#3e0080" class="fa fa-id-card-o"></a>
        <input type="text" style="  padding-left:30px;" class="form-control" id="CargoIn" placeholder="" >
        <!--<select type="text" class="form-control" style="padding-left:6px" id="CargoIn" >
            <option></option>
        </select>--></div>   
    </div>
    
    <div class="col-md-4" id="registro"><br>  
        <div style="text-align:left;width:270px!important">Departamento, área o sección:
        <select type="text" class="form-control" style="padding-left:6px" id="SeccionIn" >
            <option></option>
            <option>Administración</option> 
            <option>Alojamiento</option>
            <option>Alimentos y bebidas</option>
            <option>Contraloría</option>
            <option>Domiciliarios</option>
            <option>Operaciones</option>
            <option>Mercadeo</option> 
            <option>Mantenimiento</option>
            <option>Talento Humano</option> 
            <option>Transporte</option> 
        </select></div>
    </div>
</div>     
<div class="row">
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Tipo de contrato:
        <select type="text" class="form-control" style="padding-left:6px" id="ContratoIn" >
            <option></option>         
            <option>Vinculacón</option>
            <option>Prestación de servicios</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Centro de costo:
            <select type="text" class="form-control" style="padding-left:6px" id="CentroIn" >
                <option></option>
            </select>
        </div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Mes del evento:
        <select type="text" class="form-control" style="padding-left:6px" id="MesIn" >
            <option></option>         
            <option>ENERO</option>
            <option>FEBRERO</option>
            <option>MARZO</option> 
            <option>ABRIL</option> 
            <option>MAYO</option> 
            <option>JUNIO</option> 
            <option>JULIO</option> 
            <option>AGOSTO</option> 
            <option>SEPTIEMBRE</option> 
            <option>OCTUBRE</option> 
            <option>NOVIEMBRE</option> 
            <option>DICIEMBRE</option> 
        </select></div>
    </div>
</div>
<div class="row">
     <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Tipo del evento:
        <select type="text" class="form-control" style="padding-left:6px" id="TipoIn" >
            <option></option>
            <option>Accidente común (A.C.)</option> 
            <option>Accidente de trabajo (A.T.)</option>   
            <option>Accidente de trabajo mortal (A.T.M.)</option>
            <option>Ausentismo por causa NO médica</option>
            <option>Enfermedad laboral (E.L.)</option> 
            <option>Enfermedad general (E.G.)</option> 
            <option>Enfermedad por Covid-19</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Fecha de inicio de incapacidad:
            <input type="date" class="form-control" style="padding-left:6px;" id="InicioIn" placeholder=""  >
        </div>
    </div>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Fecha de terminación de incapacidad:
            <input type="date" class="form-control" style="padding-left:6px;" id="TerminacionIn" placeholder="" requiered >
        </div>
    </div>
</div>
<div class="row"> 
    <input type="hidden" class="form-control" style="padding-left:6px" id="DiasIn"></input>
    <input type="hidden" class="form-control" style="padding-left:6px" id="TotalIn"></input>
    <div class="col-md-4" id="registro"><br>
        <div style="text-align:left;width:270px!important">Prórroga: (opcional)
        <select type="text" class="form-control" style="padding-left:6px" id="ProrrogaIn">
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
            <option>49</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>59</option>
            <option>50</option>
            <option>51</option>
            <option>52</option>
            <option>53</option>
            <option>54</option>
            <option>55</option>
            <option>56</option>
            <option>57</option>
            <option>58</option>
            <option>59</option>
            <option>60</option>
            <option>61</option>
            <option>62</option>
            <option>63</option>
            <option>64</option>
            <option>65</option>
            <option>66</option>
            <option>67</option>
            <option>68</option>
            <option>69</option>
            <option>70</option>
            <option>71</option>
            <option>72</option>
            <option>73</option>
            <option>74</option>
            <option>75</option>
            <option>76</option>
            <option>77</option>
            <option>78</option>
            <option>79</option>
            <option>80</option>
            <option>81</option>
            <option>82</option>
            <option>83</option>
            <option>84</option>
            <option>85</option>
            <option>86</option>
            <option>87</option>
            <option>88</option>
            <option>89</option>
            <option>90</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br> 
        <div style="text-align:left;width:270px!important">Días cargados: (opcional)
        <select type="text" class="form-control" style="padding-left:6px" id="CargadosIn">
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
            <option>49</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>59</option>
            <option>50</option>
            <option>51</option>
            <option>52</option>
            <option>53</option>
            <option>54</option>
            <option>55</option>
            <option>56</option>
            <option>57</option>
            <option>58</option>
            <option>59</option>
            <option>60</option>
            <option>61</option>
            <option>62</option>
            <option>63</option>
            <option>64</option>
            <option>65</option>
            <option>66</option>
            <option>67</option>
            <option>68</option>
            <option>69</option>
            <option>70</option>
            <option>71</option>
            <option>72</option>
            <option>73</option>
            <option>74</option>
            <option>75</option>
            <option>76</option>
            <option>77</option>
            <option>78</option>
            <option>79</option>
            <option>80</option>
            <option>81</option>
            <option>82</option>
            <option>83</option>
            <option>84</option>
            <option>85</option>
            <option>86</option>
            <option>87</option>
            <option>88</option>
            <option>89</option>
            <option>90</option>
        </select></div>
    </div>
    <div class="col-md-4" id="registro"><br> 
        <div style="text-align:left;width:270px!important">Salario base:
        <input type="text" class="form-control" style="padding-left:6px;" id="Salariob" placeholder="Ejemplo: 877803,00" ></div>     
    </div>
</div>
<div class="row"><br> 
    <div style="text-align:left;padding-left:0.8em"><p style="color:#453969;font-family:verdanabi;text-align:left;font-size:13px">Escriba con mayúscula y sin punto, un sólo código por registro.</p></div>
    <div class="col-md-4" id="registro">
        <div style="text-align:left;width:270px!important">Código diagnóstico:
            <textarea id="CodigoIn" rows="1"  maxlength="4" placeholder="ejemplo: M100"></textarea>
        </div>
    </div>
    <div class="col-md-8" id="registro">
        <div style="text-align:left;padding:0.4em">Diagnóstico:
            <p style="width:264px!important;font-size:16px;color:#333333;line-height:1em;font-family:Narrow;letter-spacing:2px;position:absolute"><span id="CodigoOff"></span></p>
        </div>
    </div>
</div>

<input type="hidden" class="form-control" style="padding-left:6px;" id="Salariobd" placeholder="Ejemplo: 29260,00"></input>     
<div><br><button id="boton" type="submit" name="enviar" class="btn btn btn-default btn-block" style="font-size:14px!important;width:270px;height:35px;line-height:1em">Enviar</button><br></div>                              
</form>
