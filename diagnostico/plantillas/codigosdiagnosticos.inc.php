<table id="basic-table3" style="display:none">
    <thead>
        <tr>
          <th>PRINCIPALES DIAGNÓSTICOS</th>
          <th>No. DE PACIENTES</th>
          <th>PORCENTAJE</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($M000 > 0) { ?>
        <tr>
            <td>Artritis y poliartritis estafilococica</td>
            <td><?php echo $M000 ?></td>
            <td><?php echo $M000_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M001 > 0) { ?>
        <tr>
            <td>Artritis y poliartritis neumococica</td>
            <td><?php echo $M001 ?></td>
            <td><?php echo $M001_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M002 > 0) { ?>
        <tr>
            <td>Otras artritis y poliartritis estreptococicas</td>
            <td><?php echo $M002 ?></td>
            <td><?php echo $M002_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M008 > 0) { ?>
        <tr>
            <td>Artritis y poliartritis debidas a otros agentes bacterianos especificados</td>
            <td><?php echo $M008 ?></td>
            <td><?php echo $M008_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M009 > 0) { ?>
        <tr>
            <td>Artritis piogena, no especificada</td>
            <td><?php echo $M009 ?></td>
            <td><?php echo $M009_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M010 > 0) { ?>
        <tr>
            <td>Artritis meningococica</td>
            <td><?php echo $M010 ?></td>
            <td><?php echo $M010_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M011 > 0) { ?>
        <tr>
            <td>Artritis tuberculosa</td>
            <td><?php echo $M011 ?></td>
            <td><?php echo $M011_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M012 > 0) { ?>
        <tr>
            <td>Artritis en la enfermedad de Lyme</td>
            <td><?php echo $M012 ?></td>
            <td><?php echo $M012_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M013 > 0) { ?>
        <tr>
            <td>Artritis en otras enfermedades bacterianas clasificadas en otra parte</td>
            <td><?php echo $M013 ?></td>
            <td><?php echo $M013_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M014 > 0) { ?>
        <tr>
            <td>Artritis en rubeola</td>
            <td><?php echo $M014 ?></td>
            <td><?php echo $M014_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M015 > 0) { ?>
        <tr>
            <td>Artritis en otras enfermedades virales clasificadas en otra parte</td>
            <td><?php echo $M015 ?></td>
            <td><?php echo $M015_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M016 > 0) { ?>
        <tr>
            <td>Artritis en micosis</td>
            <td><?php echo $M016 ?></td>
            <td><?php echo $M016_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M018 > 0) { ?>
        <tr>
            <td>Artritis en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $M018 ?></td>
            <td><?php echo $M018_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M020 > 0) { ?>
        <tr>
            <td>Artropatia consecutiva a derivacion intestinal</td>
            <td><?php echo $M020 ?></td>
            <td><?php echo $M020_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M021 > 0) { ?>
        <tr>
            <td>Artropatia postdisenterica</td>
            <td><?php echo $M021 ?></td>
            <td><?php echo $M021_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M022 > 0) { ?>
        <tr>
            <td>Artropatia postinmunizacion</td>
            <td><?php echo $M022 ?></td>
            <td><?php echo $M022_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M023 > 0) { ?>
        <tr>
            <td>Enfermedad de Reiter</td>
            <td><?php echo $M023 ?></td>
            <td><?php echo $M023_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M028 > 0) { ?>
        <tr>
            <td>Otras artropatias reactivas</td>
            <td><?php echo $M028 ?></td>
            <td><?php echo $M028_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M029 > 0) { ?>
        <tr>
            <td>Artropatia reactiva, no especificada</td>
            <td><?php echo $M029 ?></td>
            <td><?php echo $M029_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M030 > 0) { ?>
        <tr>
            <td>Artritis postmeningococica</td>
            <td><?php echo $M030 ?></td>
            <td><?php echo $M030_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M031 > 0) { ?>
        <tr>
            <td>Artropatia postinfecciosa en sifilis</td>
            <td><?php echo $M031 ?></td>
            <td><?php echo $M031_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M032 > 0) { ?>
        <tr>
            <td>Otras artropatias postinfecciosas en enfermedades clasificadas en otra parte</td>
            <td><?php echo $M032 ?></td>
            <td><?php echo $M032_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M036 > 0) { ?>
        <tr>
            <td>Artropatia reactiva en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M036 ?></td>
            <td><?php echo $M036_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M050 > 0) { ?>
        <tr>
            <td>Sindrome de Felty</td>
            <td><?php echo $M050 ?></td>
            <td><?php echo $M050_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M051 > 0) { ?>
        <tr>
            <td>Enfermedad reumatoide del pulmon</td>
            <td><?php echo $M051 ?></td>
            <td><?php echo $M051_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M052 > 0) { ?>
        <tr>
            <td>Vasculitis reumatoide</td>
            <td><?php echo $M052 ?></td>
            <td><?php echo $M052_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M053 > 0) { ?>
        <tr>
            <td>Artritis reumatoide con compromiso de otros organos o sistemas</td>
            <td><?php echo $M053 ?></td>
            <td><?php echo $M053_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M058 > 0) { ?>
        <tr>
            <td>Otras artritis reumatoideas seropositivas</td>
            <td><?php echo $M058 ?></td>
            <td><?php echo $M058_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M059 > 0) { ?>
        <tr>
            <td>Artritis reumatoidea seropositiva, sin otra especificacion</td>
            <td><?php echo $M059 ?></td>
            <td><?php echo $M059_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M060 > 0) { ?>
        <tr>
            <td>Artritis reumatoide seronegativa</td>
            <td><?php echo $M060 ?></td>
            <td><?php echo $M060_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M061 > 0) { ?>
        <tr>
            <td>Bursitis reumatoide</td>
            <td><?php echo $M061 ?></td>
            <td><?php echo $M061_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M062 > 0) { ?>
        <tr>
            <td>Bursitis reumatoide</td>
            <td><?php echo $M062 ?></td>
            <td><?php echo $M062_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M063 > 0) { ?>
        <tr>
            <td>Nodulo reumatoide</td>
            <td><?php echo $M063 ?></td>
            <td><?php echo $M063_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M064 > 0) { ?>
        <tr>
            <td>Poliartropatia inflamatoria</td>
            <td><?php echo $M064 ?></td>
            <td><?php echo $M064_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M068 > 0) { ?>
        <tr>
            <td>Otras artritis reumatoides especificadas</td>
            <td><?php echo $M068 ?></td>
            <td><?php echo $M068_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M069 > 0) { ?>
        <tr>
            <td>Artritis reumatoide, no especificada</td>
            <td><?php echo $M069 ?></td>
            <td><?php echo $M069_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M070 > 0) { ?>
        <tr>
            <td>Artropatia psoriasica interfalangica distal</td>
            <td><?php echo $M070 ?></td>
            <td><?php echo $M070_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M071 > 0) { ?>
        <tr>
            <td>Artritis mutilante</td>
            <td><?php echo $M071 ?></td>
            <td><?php echo $M071_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M072 > 0) { ?>
        <tr>
            <td>Espondilitis psoriasica</td>
            <td><?php echo $M072 ?></td>
            <td><?php echo $M072_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M073 > 0) { ?>
        <tr>
            <td>Otras artropatias psoriasicas</td>
            <td><?php echo $M073 ?></td>
            <td><?php echo $M073_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M074 > 0) { ?>
        <tr>
            <td>Artropatia en la enfermedad de Crohn [enteritis regional]</td>
            <td><?php echo $M074 ?></td>
            <td><?php echo $M074_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M075 > 0) { ?>
        <tr>
            <td>Artropatia en la colitis ulcerativa</td>
            <td><?php echo $M075 ?></td>
            <td><?php echo $M075_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M076 > 0) { ?>
        <tr>
            <td>Otras artropatias enteropaticas</td>
            <td><?php echo $M076 ?></td>
            <td><?php echo $M076_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M080 > 0) { ?>
        <tr>
            <td>Artritis reumatoide juvenil</td>
            <td><?php echo $M080 ?></td>
            <td><?php echo $M080_porcentaje_t ?> %</td>
        </tr>
        
        <?php } if ($M080 > 0) { ?>
        <tr>
            <td>Artritis reumatoide juvenil</td>
            <td><?php echo $M080 ?></td>
            <td><?php echo $M080_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M081 > 0) { ?>
        <tr>
            <td>Espondilitis anquilosante juvenil</td>
            <td><?php echo $M081 ?></td>
            <td><?php echo $M081_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M082 > 0) { ?>
        <tr>
            <td>Artritis juvenil de comienzo generalizado</td>
            <td><?php echo $M082 ?></td>
            <td><?php echo $M082_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M083 > 0) { ?>
        <tr>
            <td>Poliartritis juvenil (seronegativa)</td>
            <td><?php echo $M083 ?></td>
            <td><?php echo $M083_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M084 > 0) { ?>
        <tr>
            <td>Artritis juvenil pauciarticular</td>
            <td><?php echo $M084 ?></td>
            <td><?php echo $M084_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M088 > 0) { ?>
        <tr>
            <td>Otras artritis juveniles</td>
            <td><?php echo $M088 ?></td>
            <td><?php echo $M088_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M089 > 0) { ?>
        <tr>
            <td>Artritis juvenil, no especificada</td>
            <td><?php echo $M089 ?></td>
            <td><?php echo $M089_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M090 > 0) { ?>
        <tr>
            <td>Artritis juvenil en la psoriasis</td>
            <td><?php echo $M090 ?></td>
            <td><?php echo $M090_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M091 > 0) { ?>
        <tr>
            <td>Artritis juvenil en la enfermedad de Crohn [enteritis regional]</td>
            <td><?php echo $M091 ?></td>
            <td><?php echo $M091_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M092 > 0) { ?>
        <tr>
            <td>Artritis juvenil en la colitis ulcerativa</td>
            <td><?php echo $M092 ?></td>
            <td><?php echo $M092_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M098 > 0) { ?>
        <tr>
            <td>Artritis juvenil en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M098 ?></td>
            <td><?php echo $M098_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M100 > 0) { ?>
        <tr>
            <td>Gota idiopatica</td>
            <td><?php echo $M100 ?></td>
            <td><?php echo $M100_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M101 > 0) { ?>
        <tr>
            <td>Gota saturnina</td>
            <td><?php echo $M101 ?></td>
            <td><?php echo $M101_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M102 > 0) { ?>
        <tr>
            <td>Gota inducida por drogas</td>
            <td><?php echo $M102 ?></td>
            <td><?php echo $M102_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M103 > 0) { ?>
        <tr>
            <td>Gota debida a alteracion de la funcion renal</td>
            <td><?php echo $M103 ?></td>
            <td><?php echo $M103_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M104 > 0) { ?>
        <tr>
            <td>Otras gotas secundarias</td>
            <td><?php echo $M104 ?></td>
            <td><?php echo $M104_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M109 > 0) { ?>
        <tr>
            <td>Gota, no especificada</td>
            <td><?php echo $M109 ?></td>
            <td><?php echo $M109_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M110 > 0) { ?>
        <tr>
            <td>Enfermedad por deposito de hidroxiapatita</td>
            <td><?php echo $M110 ?></td>
            <td><?php echo $M110_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M111 > 0) { ?>
        <tr>
            <td>Condrocalcinosis familiar</td>
            <td><?php echo $M111 ?></td>
            <td><?php echo $M111_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M112 > 0) { ?>
        <tr>
            <td>Otras condrocalcinosis</td>
            <td><?php echo $M112 ?></td>
            <td><?php echo $M112_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M118 > 0) { ?>
        <tr>
            <td>Otras artropatias por cristales, especificadas</td>
            <td><?php echo $M118 ?></td>
            <td><?php echo $M118_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M119 > 0) { ?>
        <tr>
            <td>Artropatia por cristales, no especificada</td>
            <td><?php echo $M119 ?></td>
            <td><?php echo $M119_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M120 > 0) { ?>
        <tr>
            <td>Artropatia postraumatica cronica [de Jaccoud]</td>
            <td><?php echo $M120 ?></td>
            <td><?php echo $M120_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M121 > 0) { ?>
        <tr>
            <td>Enfermedad de Kaschin-Beck</td>
            <td><?php echo $M121 ?></td>
            <td><?php echo $M121_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M122 > 0) { ?>
        <tr>
            <td>Sinovitis vellonodular (pigmentada)</td>
            <td><?php echo $M122 ?></td>
            <td><?php echo $M122_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M123 > 0) { ?>
        <tr>
            <td>Reumatismo palindromico</td>
            <td><?php echo $M123 ?></td>
            <td><?php echo $M123_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M124 > 0) { ?>
        <tr>
            <td>Hidrartrosis intermitente</td>
            <td><?php echo $M124 ?></td>
            <td><?php echo $M124_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M125 > 0) { ?>
        <tr>
            <td>Artropatia traumatica</td>
            <td><?php echo $M125 ?></td>
            <td><?php echo $M125_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M128 > 0) { ?>
        <tr>
            <td>Otras artropatias especificas, no clasificadas en otra parte</td>
            <td><?php echo $M128 ?></td>
            <td><?php echo $M128_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M130 > 0) { ?>
        <tr>
            <td>Poliartritis, no especificada</td>
            <td><?php echo $M130 ?></td>
            <td><?php echo $M130_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M131 > 0) { ?>
        <tr>
            <td>Monoartritis, no clasificada en otra parte</td>
            <td><?php echo $M131 ?></td>
            <td><?php echo $M131_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M138 > 0) { ?>
        <tr>
            <td>Otras artritis especificadas</td>
            <td><?php echo $M138 ?></td>
            <td><?php echo $M138_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M139 > 0) { ?>
        <tr>
            <td>Artritis, no especificada</td>
            <td><?php echo $M139 ?></td>
            <td><?php echo $M139_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M140 > 0) { ?>
        <tr>
            <td>Artropatia gotosa debida a defectos enzimaticos y a otros trastornos hereditarios, clasificados en otra parte</td>
            <td><?php echo $M140 ?></td>
            <td><?php echo $M140_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M141 > 0) { ?>
        <tr>
            <td>Artropatia por cristales en otros trastornos metabolicos</td>
            <td><?php echo $M141 ?></td>
            <td><?php echo $M141_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M142 > 0) { ?>
        <tr>
            <td>Artropatia diabetica</td>
            <td><?php echo $M142 ?></td>
            <td><?php echo $M142_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M143 > 0) { ?>
        <tr>
            <td>Dermatoartritis lipoide</td>
            <td><?php echo $M143 ?></td>
            <td><?php echo $M143_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M144 > 0) { ?>
        <tr>
            <td>Artropatia en la amiloidosis</td>
            <td><?php echo $M144 ?></td>
            <td><?php echo $M144_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M145 > 0) { ?>
        <tr>
            <td>Artropatia en otros trastornos endocrinos, metabolicos y nutricionales</td>
            <td><?php echo $M145 ?></td>
            <td><?php echo $M145_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M146 > 0) { ?>
        <tr>
            <td>Artropatia neuropatica</td>
            <td><?php echo $M146 ?></td>
            <td><?php echo $M146_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M148 > 0) { ?>
        <tr>
            <td>Artropatia en otras enfermedades especificadas, clasificadas en otra parte</td>
            <td><?php echo $M148 ?></td>
            <td><?php echo $M148_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M150 > 0) { ?>
        <tr>
            <td>(Osteo)artrosis primaria generalizada</td>
            <td><?php echo $M150 ?></td>
            <td><?php echo $M150_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M151 > 0) { ?>
        <tr>
            <td>Nodulos de Heberden (con artropatia)</td>
            <td><?php echo $M151 ?></td>
            <td><?php echo $M151_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M152 > 0) { ?>
        <tr>
            <td>Nodulos de Bouchard (con artropatia)</td>
            <td><?php echo $M152 ?></td>
            <td><?php echo $M152_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M153 > 0) { ?>
        <tr>
            <td>Artrosis secundaria multiple</td>
            <td><?php echo $M153 ?></td>
            <td><?php echo $M153_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M154 > 0) { ?>
        <tr>
            <td>(Osteo)artrosis erosiva</td>
            <td><?php echo $M154 ?></td>
            <td><?php echo $M154_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M158 > 0) { ?>
        <tr>
            <td>Otras poliartrosis</td>
            <td><?php echo $M158 ?></td>
            <td><?php echo $M158_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($M159 > 0) { ?>
        <tr>
            <td>Poliartrosis, no especificada</td>
            <td><?php echo $M159 ?></td>
            <td><?php echo $M159_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($M160 > 0) { ?>
        <tr>
            <td>Coxartrosis primaria, bilateral</td>
            <td><?php echo $M160 ?></td>
            <td><?php echo $M160_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M161 > 0) { ?>
        <tr>
            <td>Otras coxartrosis primarias</td>
            <td><?php echo $M161 ?></td>
            <td><?php echo $M161_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M162 > 0) { ?>
        <tr>
            <td>Coxartrosis a consecuencia de displasia, bilateral</td>
            <td><?php echo $M162 ?></td>
            <td><?php echo $M162_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M163 > 0) { ?>
        <tr>
            <td>Otras coxartrosis displasicas</td>
            <td><?php echo $M163 ?></td>
            <td><?php echo $M163_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M164 > 0) { ?>
        <tr>
            <td>Coxartrosis postraumatica, bilateral</td>
            <td><?php echo $M164 ?></td>
            <td><?php echo $M164_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M165 > 0) { ?>
        <tr>
            <td>Otra coxartrosis postraumatica</td>
            <td><?php echo $M165 ?></td>
            <td><?php echo $M165_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M166 > 0) { ?>
        <tr>
            <td>Otra coxartrosis secundaria, bilateral</td>
            <td><?php echo $M166 ?></td>
            <td><?php echo $M166_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M167 > 0) { ?>
        <tr>
            <td>Otras coxartrosis secundarias</td>
            <td><?php echo $M167 ?></td>
            <td><?php echo $M167_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M169 > 0) { ?>
        <tr>
            <td>Coxartrosis, no especificada</td>
            <td><?php echo $M169 ?></td>
            <td><?php echo $M169_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M170 > 0) { ?>
        <tr>
            <td>Gonartrosis primaria, bilateral</td>
            <td><?php echo $M170 ?></td>
            <td><?php echo $M170_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M171 > 0) { ?>
        <tr>
            <td>Otras gonartrosis primarias</td>
            <td><?php echo $M171 ?></td>
            <td><?php echo $M171_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M172 > 0) { ?>
        <tr>
            <td>Gonartrosis postraumatica, bilateral</td>
            <td><?php echo $M172 ?></td>
            <td><?php echo $M172_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M173 > 0) { ?>
        <tr>
            <td>Otras gonartrosis postraumaticas</td>
            <td><?php echo $M173 ?></td>
            <td><?php echo $M173_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M174 > 0) { ?>
        <tr>
            <td>Otras gonartrosis secundarias, bilaterales</td>
            <td><?php echo $M174 ?></td>
            <td><?php echo $M174_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M175 > 0) { ?>
        <tr>
            <td>Otras gonartrosis secundarias</td>
            <td><?php echo $M175 ?></td>
            <td><?php echo $M175_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M179 > 0) { ?>
        <tr>
            <td>Gonartrosis, no especificada</td>
            <td><?php echo $M179 ?></td>
            <td><?php echo $M179_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M180 > 0) { ?>
        <tr>
            <td></td>
            <td><?php echo $M180 ?></td>
            <td><?php echo $M180_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M180 > 0) { ?>
        <tr>
            <td>Artrosis primaria de la primera articulacion carpometacarpiana, bilateral</td>
            <td><?php echo $M180 ?></td>
            <td><?php echo $M180_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M181 > 0) { ?>
        <tr>
            <td>Otras artrosis primarias de la primera articulacion carpometacarpiana</td>
            <td><?php echo $M181 ?></td>
            <td><?php echo $M181_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M182 > 0) { ?>
        <tr>
            <td>Artrosis postraumatica de la primera articulacion carpometacarpiana, bilateral</td>
            <td><?php echo $M182 ?></td>
            <td><?php echo $M182_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M183 > 0) { ?>
        <tr>
            <td>Otras artrosis postraumaticas de la primera articulacion carpometacarpiana</td>
            <td><?php echo $M183 ?></td>
            <td><?php echo $M183_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M184 > 0) { ?>
        <tr>
            <td>Otras artrosis secundarias de la primera articulacion carpometacarpiana, bilaterales</td>
            <td><?php echo $M184 ?></td>
            <td><?php echo $M184_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M185 > 0) { ?>
        <tr>
            <td>Otras artrosis secundarias de la primera articulacion carpometacarpiana</td>
            <td><?php echo $M185 ?></td>
            <td><?php echo $M185_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M189 > 0) { ?>
        <tr>
            <td>Artrosis de la primera articulacion carpometacarpiana, sin otra especificacion</td>
            <td><?php echo $M189 ?></td>
            <td><?php echo $M189_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M190 > 0) { ?>
        <tr>
            <td>Artrosis primaria de otras articulaciones</td>
            <td><?php echo $M190 ?></td>
            <td><?php echo $M190_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M191 > 0) { ?>
        <tr>
            <td>Artrosis postraumatica de otras articulaciones</td>
            <td><?php echo $M191 ?></td>
            <td><?php echo $M191_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M192 > 0) { ?>
        <tr>
            <td>Otras artrosis secundarias</td>
            <td><?php echo $M192 ?></td>
            <td><?php echo $M192_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M198 > 0) { ?>
        <tr>
            <td>Otras artrosis especificadas</td>
            <td><?php echo $M198 ?></td>
            <td><?php echo $M198_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M199 > 0) { ?>
        <tr>
            <td>Artrosis, no especificada</td>
            <td><?php echo $M199 ?></td>
            <td><?php echo $M199_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M200 > 0) { ?>
        <tr>
            <td>Deformidad de dedo(s) de la mano</td>
            <td><?php echo $M200 ?></td>
            <td><?php echo $M200_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M201 > 0) { ?>
        <tr>
            <td>Hallux valgus (adquirido)</td>
            <td><?php echo $M201 ?></td>
            <td><?php echo $M201_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M202 > 0) { ?>
        <tr>
            <td>Hallux rigidus</td>
            <td><?php echo $M202 ?></td>
            <td><?php echo $M202_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M2 > 0) { ?>
        <tr>
            <td>Otras deformidades del hallux (adquiridas)</td>
            <td><?php echo $M203 ?></td>
            <td><?php echo $M203_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M204 > 0) { ?>
        <tr>
            <td>Otro(s) dedo(s) del pie en martillo (adquiridos)</td>
            <td><?php echo $M204 ?></td>
            <td><?php echo $M204_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M205 > 0) { ?>
        <tr>
            <td>Otras deformidades (adquiridas) del (de los) dedo(s) del pie</td>
            <td><?php echo $M205 ?></td>
            <td><?php echo $M205_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M206 > 0) { ?>
        <tr>
            <td>Deformidades adquiridas de los dedos del pie, no especificadas</td>
            <td><?php echo $M206 ?></td>
            <td><?php echo $M206_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M210 > 0) { ?>
        <tr>
            <td>Deformidad en valgo, no clasificada en otra parte</td>
            <td><?php echo $M210 ?></td>
            <td><?php echo $M210_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M211 > 0) { ?>
        <tr>
            <td>Deformidad en varo, no clasificada en otra parte</td>
            <td><?php echo $M211 ?></td>
            <td><?php echo $M211_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M212 > 0) { ?>
        <tr>
            <td>Deformidad en flexion</td>
            <td><?php echo $M212 ?></td>
            <td><?php echo $M212_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M213 > 0) { ?>
        <tr>
            <td>Muneca o pie en pendulo (adquirido)</td>
            <td><?php echo $M213 ?></td>
            <td><?php echo $M213_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M214 > 0) { ?>
        <tr>
            <td>Pie plano [pes planus] (adquirido)</td>
            <td><?php echo $M214 ?></td>
            <td><?php echo $M214_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M215 > 0) { ?>
        <tr>
            <td>Mano o pie en garra o en talipes, pie equinovaro o zambo adquiridos</td>
            <td><?php echo $M215 ?></td>
            <td><?php echo $M215_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M216 > 0) { ?>
        <tr>
            <td>Otras deformidades adquiridas del tobillo y del pie</td>
            <td><?php echo $M216 ?></td>
            <td><?php echo $M216_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M217 > 0) { ?>
        <tr>
            <td>Longitud desigual de los miembros (adquirida)</td>
            <td><?php echo $M217 ?></td>
            <td><?php echo $M217_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M218 > 0) { ?>
        <tr>
            <td>Otras deformidades adquiridas de los miembros, especificadas</td>
            <td><?php echo $M218 ?></td>
            <td><?php echo $M218_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M219 > 0) { ?>
        <tr>
            <td>Deformidad adquirida del miembro, no especificada</td>
            <td><?php echo $M219 ?></td>
            <td><?php echo $M219_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M220 > 0) { ?>
        <tr>
            <td>Luxacion recidivante de la rotula</td>
            <td><?php echo $M220 ?></td>
            <td><?php echo $M220_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M221 > 0) { ?>
        <tr>
            <td>Subluxacion recidivante de la rotula</td>
            <td><?php echo $M221 ?></td>
            <td><?php echo $M221_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M222 > 0) { ?>
        <tr>
            <td>Trastornos rotulofemorales</td>
            <td><?php echo $M222 ?></td>
            <td><?php echo $M222_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M223 > 0) { ?>
        <tr>
            <td>Otros desarreglos de la rotula</td>
            <td><?php echo $M223 ?></td>
            <td><?php echo $M223_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M224 > 0) { ?>
        <tr>
            <td>Condromalacia de la rotula</td>
            <td><?php echo $M224 ?></td>
            <td><?php echo $M224_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M228 > 0) { ?>
        <tr>
            <td>Otros trastornos de la rotula</td>
            <td><?php echo $M228 ?></td>
            <td><?php echo $M228_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M229 > 0) { ?>
        <tr>
            <td>Trastorno de la rotula, no especificado</td>
            <td><?php echo $M229 ?></td>
            <td><?php echo $M229_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M230 > 0) { ?>
        <tr>
            <td>Menisco quistico</td>
            <td><?php echo $M230 ?></td>
            <td><?php echo $M230_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M231 > 0) { ?>
        <tr>
            <td>Menisco discoide (congenito)</td>
            <td><?php echo $M231 ?></td>
            <td><?php echo $M231_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M232 > 0) { ?>
        <tr>
            <td>Trastorno de menisco debido a desgarro o lesion antigua</td>
            <td><?php echo $M232 ?></td>
            <td><?php echo $M232_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M233 > 0) { ?>
        <tr>
            <td>Otros trastornos de los meniscos</td>
            <td><?php echo $M233 ?></td>
            <td><?php echo $M233_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M234 > 0) { ?>
        <tr>
            <td>Cuerpo flotante en la rodilla</td>
            <td><?php echo $M234 ?></td>
            <td><?php echo $M234_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M235 > 0) { ?>
        <tr>
            <td>Inestabilidad cronica de la rodilla</td>
            <td><?php echo $M235 ?></td>
            <td><?php echo $M235_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M236 > 0) { ?>
        <tr>
            <td>Otra ruptura espontanea del (de los) ligamento(s) de la rodilla</td>
            <td><?php echo $M236 ?></td>
            <td><?php echo $M236_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M238 > 0) { ?>
        <tr>
            <td>Otros trastornos internos de la rodilla</td>
            <td><?php echo $M238 ?></td>
            <td><?php echo $M238_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M239 > 0) { ?>
        <tr>
            <td>Trastorno interno de la rodilla, no especificado</td>
            <td><?php echo $M239 ?></td>
            <td><?php echo $M239_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M240 > 0) { ?>
        <tr>
            <td>Cuerpo flotante articular</td>
            <td><?php echo $M240 ?></td>
            <td><?php echo $M240_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M241 > 0) { ?>
        <tr>
            <td>Otros trastornos del cartilago articular</td>
            <td><?php echo $M241 ?></td>
            <td><?php echo $M241_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M242 > 0) { ?>
        <tr>
            <td>Trastorno del ligamento</td>
            <td><?php echo $M242 ?></td>
            <td><?php echo $M242_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M243 > 0) { ?>
        <tr>
            <td>Luxacion y subluxacion patologica de la articulacion, no clasificada en otra parte</td>
            <td><?php echo $M243 ?></td>
            <td><?php echo $M243_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M244 > 0) { ?>
        <tr>
            <td>Luxacion y subluxacion recidivante de la articulacion</td>
            <td><?php echo $M244 ?></td>
            <td><?php echo $M244_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M245 > 0) { ?>
        <tr>
            <td>Contractura articular</td>
            <td><?php echo $M245 ?></td>
            <td><?php echo $M245_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M246 > 0) { ?>
        <tr>
            <td>Anquilosis articular</td>
            <td><?php echo $M246 ?></td>
            <td><?php echo $M246_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M247 > 0) { ?>
        <tr>
            <td>Protrusion de acetabulo</td>
            <td><?php echo $M247 ?></td>
            <td><?php echo $M247_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M248 > 0) { ?>
        <tr>
            <td>Otras lesiones articulares especificas, no clasificadas en otra parte</td>
            <td><?php echo $M248 ?></td>
            <td><?php echo $M248_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M249 > 0) { ?>
        <tr>
            <td>Desarreglo articular, no especificado</td>
            <td><?php echo $M249 ?></td>
            <td><?php echo $M249_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M250 > 0) { ?>
        <tr>
            <td>Hemartrosis</td>
            <td><?php echo $M250 ?></td>
            <td><?php echo $M250_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M251 > 0) { ?>
        <tr>
            <td>Fistula articular</td>
            <td><?php echo $M251 ?></td>
            <td><?php echo $M251_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M252 > 0) { ?>
        <tr>
            <td>Articulacion inestable</td>
            <td><?php echo $M252 ?></td>
            <td><?php echo $M252_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M253 > 0) { ?>
        <tr>
            <td>Otras inestabilidades articulares</td>
            <td><?php echo $M253 ?></td>
            <td><?php echo $M253_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M254 > 0) { ?>
        <tr>
            <td>Derrame articular</td>
            <td><?php echo $M254 ?></td>
            <td><?php echo $M254_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M255 > 0) { ?>
        <tr>
            <td>Dolor en articulacion</td>
            <td><?php echo $M255 ?></td>
            <td><?php echo $M255_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M256 > 0) { ?>
        <tr>
            <td>Rigidez articular, no clasificada en otra parte</td>
            <td><?php echo $M256 ?></td>
            <td><?php echo $M256_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M257 > 0) { ?>
        <tr>
            <td>Osteofito</td>
            <td><?php echo $M257 ?></td>
            <td><?php echo $M257_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M258 > 0) { ?>
        <tr>
            <td>Otros trastornos articulares especificados</td>
            <td><?php echo $M258 ?></td>
            <td><?php echo $M258_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M259 > 0) { ?>
        <tr>
            <td>Trastorno articular, no especificado</td>
            <td><?php echo $M259 ?></td>
            <td><?php echo $M259_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M300 > 0) { ?>
        <tr>
            <td>Poliarteritis nudosa</td>
            <td><?php echo $M300 ?></td>
            <td><?php echo $M300_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M301 > 0) { ?>
        <tr>
            <td>Poliarteritis con compromiso pulmonar [Churg-Strauss]</td>
            <td><?php echo $M301 ?></td>
            <td><?php echo $M301_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M302 > 0) { ?>
        <tr>
            <td>Poliarteritis juvenil</td>
            <td><?php echo $M302 ?></td>
            <td><?php echo $M302_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M303 > 0) { ?>
        <tr>
            <td>Sindrome mucocutaneo linfonodular [Kawasaki]</td>
            <td><?php echo $M303 ?></td>
            <td><?php echo $M303_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M308 > 0) { ?>
        <tr>
            <td>Otras afecciones relacionadas con la poliarteritis nudosa</td>
            <td><?php echo $M308 ?></td>
            <td><?php echo $M308_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M310 > 0) { ?>
        <tr>
            <td>Angiitis debida a hipersensibilidad</td>
            <td><?php echo $M310 ?></td>
            <td><?php echo $M310_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M311 > 0) { ?>
        <tr>
            <td>Microangiopatia trombotica</td>
            <td><?php echo $M311 ?></td>
            <td><?php echo $M311_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M312 > 0) { ?>
        <tr>
            <td>Granuloma letal de la linea media</td>
            <td><?php echo $M312 ?></td>
            <td><?php echo $M312_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M313 > 0) { ?>
        <tr>
            <td>Granulomatosis de Wegener</td>
            <td><?php echo $M313 ?></td>
            <td><?php echo $M313_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M314 > 0) { ?>
        <tr>
            <td>Sindrome del cayado de la aorta [Takayasu]</td>
            <td><?php echo $M314 ?></td>
            <td><?php echo $M314_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M315 > 0) { ?>
        <tr>
            <td>Arteritis de celulas gigantes con polimialgia reumatica</td>
            <td><?php echo $M315 ?></td>
            <td><?php echo $M315_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M316 > 0) { ?>
        <tr>
            <td>Otras arteritis de celulas gigantes</td>
            <td><?php echo $M316 ?></td>
            <td><?php echo $M316_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M317 > 0) { ?>
        <tr>
            <td>Poliangiitis microscopica</td>
            <td><?php echo $M317 ?></td>
            <td><?php echo $M317_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M318 > 0) { ?>
        <tr>
            <td>Otras vasculopatias necrotizantes especificadas</td>
            <td><?php echo $M318 ?></td>
            <td><?php echo $M318_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M319 > 0) { ?>
        <tr>
            <td>Vasculopatia necrotizante, no especificada</td>
            <td><?php echo $M319 ?></td>
            <td><?php echo $M319_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M320 > 0) { ?>
        <tr>
            <td>Lupus eritematoso sistemico, inducido por drogas</td>
            <td><?php echo $M320 ?></td>
            <td><?php echo $M320_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M321 > 0) { ?>
        <tr>
            <td>Lupus eritematoso sistemico con compromiso de organos o sistemas</td>
            <td><?php echo $M321 ?></td>
            <td><?php echo $M321_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M328 > 0) { ?>
        <tr>
            <td>Otras formas de lupus eritematoso sistemico</td>
            <td><?php echo $M328 ?></td>
            <td><?php echo $M328_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M329 > 0) { ?>
        <tr>
            <td>Lupus eritematoso sistemico, sin otra especificacion</td>
            <td><?php echo $M329 ?></td>
            <td><?php echo $M329_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M330 > 0) { ?>
        <tr>
            <td>Dermatomiositis juvenil</td>
            <td><?php echo $M330 ?></td>
            <td><?php echo $M330_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M331 > 0) { ?>
        <tr>
            <td>Otras dermatomiositis</td>
            <td><?php echo $M331 ?></td>
            <td><?php echo $M331_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($M332 > 0) { ?>
        <tr>
            <td>Polimiositis</td>
            <td><?php echo $M332 ?></td>
            <td><?php echo $M332_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M339 > 0) { ?>
        <tr>
            <td>Dermatopolimiositis, no especificada</td>
            <td><?php echo $M339 ?></td>
            <td><?php echo $M339_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M340 > 0) { ?>
        <tr>
            <td>Esclerosis sistemica progresiva</td>
            <td><?php echo $M340 ?></td>
            <td><?php echo $M340_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M341 > 0) { ?>
        <tr>
            <td>Sindrome CR(E)ST</td>
            <td><?php echo $M341 ?></td>
            <td><?php echo $M341_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M342 > 0) { ?>
        <tr>
            <td>Esclerosis sistemica inducida por drogas o productos quimicos</td>
            <td><?php echo $M342 ?></td>
            <td><?php echo $M342_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M348 > 0) { ?>
        <tr>
            <td>Otras formas de esclerosis sistemica</td>
            <td><?php echo $M348 ?></td>
            <td><?php echo $M348_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M349 > 0) { ?>
        <tr>
            <td>Esclerosis sistemica, no especificada</td>
            <td><?php echo $M349 ?></td>
            <td><?php echo $M349_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M350 > 0) { ?>
        <tr>
            <td>Sindrome seco [Sj”gren]</td>
            <td><?php echo $M350 ?></td>
            <td><?php echo $M350_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M351 > 0) { ?>
        <tr>
            <td>Otros sindromes superpuestos</td>
            <td><?php echo $M351 ?></td>
            <td><?php echo $M351_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M352 > 0) { ?>
        <tr>
            <td>Enfermedad de Behcet</td>
            <td><?php echo $M352 ?></td>
            <td><?php echo $M352_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M353 > 0) { ?>
        <tr>
            <td>Polimialgia reumatica</td>
            <td><?php echo $M353 ?></td>
            <td><?php echo $M353_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M354 > 0) { ?>
        <tr>
            <td>Fascitis difusa (eosinofilica)</td>
            <td><?php echo $M354 ?></td>
            <td><?php echo $M354_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M355 > 0) { ?>
        <tr>
            <td>Fibrosclerosis multifocal</td>
            <td><?php echo $M355 ?></td>
            <td><?php echo $M355_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M356 > 0) { ?>
        <tr>
            <td>Paniculitis recidivante [Weber-Christian]</td>
            <td><?php echo $M356 ?></td>
            <td><?php echo $M356_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M357 > 0) { ?>
        <tr>
            <td>Sindrome de hipermovilidad</td>
            <td><?php echo $M357 ?></td>
            <td><?php echo $M357_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M358 > 0) { ?>
        <tr>
            <td>Otras enfermedades especificadas con compromiso sistemico del tejido conjuntivo</td>
            <td><?php echo $M358 ?></td>
            <td><?php echo $M358_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M359 > 0) { ?>
        <tr>
            <td>Compromiso sistemico del tejido conjuntivo, no especificado</td>
            <td><?php echo $M359 ?></td>
            <td><?php echo $M359_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M360 > 0) { ?>
        <tr>
            <td>Dermato(poli)miositis en enfermedad neoplasica</td>
            <td><?php echo $M360 ?></td>
            <td><?php echo $M360_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M361 > 0) { ?>
        <tr>
            <td>Artropatia en enfermedad neoplasica</td>
            <td><?php echo $M361 ?></td>
            <td><?php echo $M361_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M362 > 0) { ?>
        <tr>
            <td>Artropatia hemofilica</td>
            <td><?php echo $M362 ?></td>
            <td><?php echo $M362_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M363 > 0) { ?>
        <tr>
            <td>Artropatia en otros trastornos de la sangre</td>
            <td><?php echo $M363 ?></td>
            <td><?php echo $M363_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M364 > 0) { ?>
        <tr>
            <td>Artropatia en reacciones de hipersensibilidad clasificadas en otra parte</td>
            <td><?php echo $M364 ?></td>
            <td><?php echo $M364_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M368 > 0) { ?>
        <tr>
            <td>Trastornos sistemicos del tejido conjuntivo en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M368 ?></td>
            <td><?php echo $M368_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M401 > 0) { ?>
        <tr>
            <td>Otras cifosis secundarias</td>
            <td><?php echo $M401 ?></td>
            <td><?php echo $M401_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M402 > 0) { ?>
        <tr>
            <td>Otras cifosis y las no especificadas</td>
            <td><?php echo $M402 ?></td>
            <td><?php echo $M402_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M403 > 0) { ?>
        <tr>
            <td>Sindrome de espalda plana</td>
            <td><?php echo $M403 ?></td>
            <td><?php echo $M403_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M404 > 0) { ?>
        <tr>
            <td>Otras lordosis</td>
            <td><?php echo $M404 ?></td>
            <td><?php echo $M404_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M405 > 0) { ?>
        <tr>
            <td>Lordosis, no especificada</td>
            <td><?php echo $M405 ?></td>
            <td><?php echo $M405_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M410 > 0) { ?>
        <tr>
            <td>Escoliosis idiopatica infantil</td>
            <td><?php echo $M410 ?></td>
            <td><?php echo $M410_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M411 > 0) { ?>
        <tr>
            <td>Escoliosis idiopatica juvenil</td>
            <td><?php echo $M411 ?></td>
            <td><?php echo $M411_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M412 > 0) { ?>
        <tr>
            <td>Otras escoliosis idiopaticas</td>
            <td><?php echo $M412 ?></td>
            <td><?php echo $M412_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M413 > 0) { ?>
        <tr>
            <td>Escoliosis toracogenica</td>
            <td><?php echo $M413 ?></td>
            <td><?php echo $M413_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M414 > 0) { ?>
        <tr>
            <td>Escoliosis neuromuscular</td>
            <td><?php echo $M414 ?></td>
            <td><?php echo $M414_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M415 > 0) { ?>
        <tr>
            <td>Otras escoliosis secundarias</td>
            <td><?php echo $M415 ?></td>
            <td><?php echo $M415_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M418 > 0) { ?>
        <tr>
            <td>Otras formas de escoliosis</td>
            <td><?php echo $M418 ?></td>
            <td><?php echo $M418_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M419 > 0) { ?>
        <tr>
            <td>Escoliosis, no especificada</td>
            <td><?php echo $M419 ?></td>
            <td><?php echo $M419_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M420 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la columna vertebral</td>
            <td><?php echo $M420 ?></td>
            <td><?php echo $M420_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M421 > 0) { ?>
        <tr>
            <td>Osteocondrosis de la columna vertebral del adulto</td>
            <td><?php echo $M421 ?></td>
            <td><?php echo $M421_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M429 > 0) { ?>
        <tr>
            <td>Osteocondrosis vertebral, no especificada</td>
            <td><?php echo $M429 ?></td>
            <td><?php echo $M429_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M430 > 0) { ?>
        <tr>
            <td>Espondilolisis</td>
            <td><?php echo $M430 ?></td>
            <td><?php echo $M430_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M431 > 0) { ?>
        <tr>
            <td>Espondilolistesis</td>
            <td><?php echo $M431 ?></td>
            <td><?php echo $M431_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M432 > 0) { ?>
        <tr>
            <td>Otras fusiones de la columna vertebral</td>
            <td><?php echo $M432 ?></td>
            <td><?php echo $M432_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M433 > 0) { ?>
        <tr>
            <td>Subluxacion atlanto-axoidea recurrente, con mielopatia</td>
            <td><?php echo $M433 ?></td>
            <td><?php echo $M433_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M434 > 0) { ?>
        <tr>
            <td>Otras subluxaciones atlanto-axoideas recurrentes</td>
            <td><?php echo $M434 ?></td>
            <td><?php echo $M434_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M435 > 0) { ?>
        <tr>
            <td>Otras subluxaciones vertebrales recurrentes</td>
            <td><?php echo $M435 ?></td>
            <td><?php echo $M435_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M436 > 0) { ?>
        <tr>
            <td>Torticolis</td>
            <td><?php echo $M436 ?></td>
            <td><?php echo $M436_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M438 > 0) { ?>
        <tr>
            <td>Otras dorsopatias deformantes de la columna vertebral especificadas</td>
            <td><?php echo $M438 ?></td>
            <td><?php echo $M438_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M439 > 0) { ?>
        <tr>
            <td>Dorsopatia deformante, no especificada</td>
            <td><?php echo $M439 ?></td>
            <td><?php echo $M439_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M450 > 0) { ?>
        <tr>
            <td>Espondilitis anquilosante</td>
            <td><?php echo $M450 ?></td>
            <td><?php echo $M450_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M460 > 0) { ?>
        <tr>
            <td>Entesopatia vertebral</td>
            <td><?php echo $M460 ?></td>
            <td><?php echo $M460_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M461 > 0) { ?>
        <tr>
            <td>Sacroiliitis, no clasificada en otra parte</td>
            <td><?php echo $M461 ?></td>
            <td><?php echo $M461_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M462 > 0) { ?>
        <tr>
            <td>Osteomielitis de vertebra</td>
            <td><?php echo $M462 ?></td>
            <td><?php echo $M462_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M463 > 0) { ?>
        <tr>
            <td>Infeccion de disco intervertebral (piogena)</td>
            <td><?php echo $M463 ?></td>
            <td><?php echo $M463_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M464 > 0) { ?>
        <tr>
            <td>Discitis, no especificada</td>
            <td><?php echo $M464 ?></td>
            <td><?php echo $M464_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M465 > 0) { ?>
        <tr>
            <td>Otras espondilopatias infecciosas</td>
            <td><?php echo $M465 ?></td>
            <td><?php echo $M465_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M468 > 0) { ?>
        <tr>
            <td>Otras espondilopatias inflamatorias especificadas</td>
            <td><?php echo $M468 ?></td>
            <td><?php echo $M468_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M469 > 0) { ?>
        <tr>
            <td>Espondilopatia inflamatoria, no especificada</td>
            <td><?php echo $M469 ?></td>
            <td><?php echo $M469_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M470 > 0) { ?>
        <tr>
            <td>Sindromes de compresion de la arteria espinal o vertebral anterior</td>
            <td><?php echo $M470 ?></td>
            <td><?php echo $M470_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M471 > 0) { ?>
        <tr>
            <td>Otras espondilosis con mielopatia</td>
            <td><?php echo $M471 ?></td>
            <td><?php echo $M471_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M472 > 0) { ?>
        <tr>
            <td>Otras espondilosis con radiculopatia</td>
            <td><?php echo $M472 ?></td>
            <td><?php echo $M472_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M478 > 0) { ?>
        <tr>
            <td>Otras espondilosis</td>
            <td><?php echo $M478 ?></td>
            <td><?php echo $M478_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M479 > 0) { ?>
        <tr>
            <td>Espondilosis, no especificada</td>
            <td><?php echo $M479 ?></td>
            <td><?php echo $M479_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M480 > 0) { ?>
        <tr>
            <td>Estenosis espinal</td>
            <td><?php echo $M480 ?></td>
            <td><?php echo $M480_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M481 > 0) { ?>
        <tr>
            <td>Hiperostosis anquilosante [Forestier]</td>
            <td><?php echo $M481 ?></td>
            <td><?php echo $M481_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M482 > 0) { ?>
        <tr>
            <td>Espondilopatia interespinosa (vertebras "en beso")</td>
            <td><?php echo $M482 ?></td>
            <td><?php echo $M482_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M483 > 0) { ?>
        <tr>
            <td>Espondilopatia traumatica</td>
            <td><?php echo $M483 ?></td>
            <td><?php echo $M483_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M484 > 0) { ?>
        <tr>
            <td>Fractura de vertebra por fatiga</td>
            <td><?php echo $M484 ?></td>
            <td><?php echo $M484_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M485 > 0) { ?>
        <tr>
            <td>Vertebra colapsada, no clasificada en otra parte</td>
            <td><?php echo $M485 ?></td>
            <td><?php echo $M485_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M488 > 0) { ?>
        <tr>
            <td>Otras espondilopatias especificadas</td>
            <td><?php echo $M488 ?></td>
            <td><?php echo $M488_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M489 > 0) { ?>
        <tr>
            <td>Espondilopatia, no especificada</td>
            <td><?php echo $M489 ?></td>
            <td><?php echo $M489_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M490 > 0) { ?>
        <tr>
            <td>Tuberculosis de la columna vertebral</td>
            <td><?php echo $M490 ?></td>
            <td><?php echo $M490_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M491 > 0) { ?>
        <tr>
            <td>Espondilitis por brucelosis</td>
            <td><?php echo $M491 ?></td>
            <td><?php echo $M491_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M492 > 0) { ?>
        <tr>
            <td>Espondilitis por enterobacterias</td>
            <td><?php echo $M492 ?></td>
            <td><?php echo $M492_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M493 > 0) { ?>
        <tr>
            <td>Espondilopatia en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $M493 ?></td>
            <td><?php echo $M493_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M494 > 0) { ?>
        <tr>
            <td>Espondilopatia neuropatica</td>
            <td><?php echo $M494 ?></td>
            <td><?php echo $M494_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M495 > 0) { ?>
        <tr>
            <td>Vertebra colapsada en enfermedades clasificadas en otra parte</td>
            <td><?php echo $M495 ?></td>
            <td><?php echo $M495_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M498 > 0) { ?>
        <tr>
            <td>Espondilopatia en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M498 ?></td>
            <td><?php echo $M498_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M500 > 0) { ?>
        <tr>
            <td>Trastorno de disco cervical con mielopatia</td>
            <td><?php echo $M500 ?></td>
            <td><?php echo $M500_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M501 > 0) { ?>
        <tr>
            <td>Trastorno de disco cervical con radiculopatia</td>
            <td><?php echo $M501 ?></td>
            <td><?php echo $M501_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M502 > 0) { ?>
        <tr>
            <td>Otros desplazamientos de disco cervical</td>
            <td><?php echo $M502 ?></td>
            <td><?php echo $M502_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M503 > 0) { ?>
        <tr>
            <td>Otras degeneraciones de disco cervical</td>
            <td><?php echo $M503 ?></td>
            <td><?php echo $M503_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M508 > 0) { ?>
        <tr>
            <td>Otros trastornos de disco cervical</td>
            <td><?php echo $M508 ?></td>
            <td><?php echo $M508_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M509 > 0) { ?>
        <tr>
            <td>Trastorno de disco cervical, no especificado</td>
            <td><?php echo $M509 ?></td>
            <td><?php echo $M509_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M510 > 0) { ?>
        <tr>
            <td>Trastornos de discos intervertebrales lumbares y otros, con mielopatia</td>
            <td><?php echo $M510 ?></td>
            <td><?php echo $M510_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M511 > 0) { ?>
        <tr>
            <td>Trastornos de disco lumbar y otros, con radiculopatia</td>
            <td><?php echo $M511 ?></td>
            <td><?php echo $M511_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M512 > 0) { ?>
        <tr>
            <td>Otros desplazamientos especificados de disco intervertebral </td>
            <td><?php echo $M512 ?></td>
            <td><?php echo $M512_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M513 > 0) { ?>
        <tr>
            <td>Otras degeneraciones especificadas de disco intervertebral</td>
            <td><?php echo $M513 ?></td>
            <td><?php echo $M513_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M514 > 0) { ?>
        <tr>
            <td>Nodulos de Schmorl</td>
            <td><?php echo $M514 ?></td>
            <td><?php echo $M514_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M518 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de los discos intervertebrales</td>
            <td><?php echo $M518 ?></td>
            <td><?php echo $M518_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M519 > 0) { ?>
        <tr>
            <td>Trastorno de los discos intervertebrales, no especificado</td>
            <td><?php echo $M519 ?></td>
            <td><?php echo $M519_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M530 > 0) { ?>
        <tr>
            <td>Sindrome cervicocraneal</td>
            <td><?php echo $M530 ?></td>
            <td><?php echo $M530_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M531 > 0) { ?>
        <tr>
            <td>Sindrome cervicobraquial</td>
            <td><?php echo $M531 ?></td>
            <td><?php echo $M531_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M532 > 0) { ?>
        <tr>
            <td>Inestabilidad de la columna vertebral</td>
            <td><?php echo $M532 ?></td>
            <td><?php echo $M532_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M533 > 0) { ?>
        <tr>
            <td>Trastornos sacrococcigeos, no clasificados en otra parte</td>
            <td><?php echo $M533 ?></td>
            <td><?php echo $M533_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M538 > 0) { ?>
        <tr>
            <td>Otras dorsopatias especificadas</td>
            <td><?php echo $M538 ?></td>
            <td><?php echo $M538_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M539 > 0) { ?>
        <tr>
            <td>Dorsopatia, no especificada</td>
            <td><?php echo $M539 ?></td>
            <td><?php echo $M539_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M540 > 0) { ?>
        <tr>
            <td>Paniculitis que afecta regiones del cuello y de la espalda</td>
            <td><?php echo $M540 ?></td>
            <td><?php echo $M540_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M541 > 0) { ?>
        <tr>
            <td>Radiculopatia</td>
            <td><?php echo $M541 ?></td>
            <td><?php echo $M541_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M542 > 0) { ?>
        <tr>
            <td>Cervicalgia</td>
            <td><?php echo $M542 ?></td>
            <td><?php echo $M542_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M543 > 0) { ?>
        <tr>
            <td>Ciatica</td>
            <td><?php echo $M543 ?></td>
            <td><?php echo $M543_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M544 > 0) { ?>
        <tr>
            <td>Lumbago con ciatica</td>
            <td><?php echo $M544 ?></td>
            <td><?php echo $M544_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M545 > 0) { ?>
        <tr>
            <td>Lumbago no especificado</td>
            <td><?php echo $M545 ?></td>
            <td><?php echo $M545_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M546 > 0) { ?>
        <tr>
            <td>Dolor en la columna dorsal</td>
            <td><?php echo $M546 ?></td>
            <td><?php echo $M546_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M548 > 0) { ?>
        <tr>
            <td>Otras dorsalgias</td>
            <td><?php echo $M548 ?></td>
            <td><?php echo $M548_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M549 > 0) { ?>
        <tr>
            <td>Dorsalgia, no especificada</td>
            <td><?php echo $M549 ?></td>
            <td><?php echo $M549_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M600 > 0) { ?>
        <tr>
            <td>Miositis infecciosa</td>
            <td><?php echo $M600 ?></td>
            <td><?php echo $M600_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M601 > 0) { ?>
        <tr>
            <td>Miositis intersticial</td>
            <td><?php echo $M601 ?></td>
            <td><?php echo $M601_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M602 > 0) { ?>
        <tr>
            <td>Granuloma por cuerpo extrano en tejido blando, no clasificado en otra parte</td>
            <td><?php echo $M602 ?></td>
            <td><?php echo $M602_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M608 > 0) { ?>
        <tr>
            <td>Otras miositis</td>
            <td><?php echo $M608 ?></td>
            <td><?php echo $M608_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M609 > 0) { ?>
        <tr>
            <td>Miositis, no especificada</td>
            <td><?php echo $M609 ?></td>
            <td><?php echo $M609_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M610 > 0) { ?>
        <tr>
            <td>Miositis osificante traumatica</td>
            <td><?php echo $M610 ?></td>
            <td><?php echo $M610_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M611 > 0) { ?>
        <tr>
            <td>Miositis osificante progresiva</td>
            <td><?php echo $M611 ?></td>
            <td><?php echo $M611_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M612 > 0) { ?>
        <tr>
            <td>Calcificacion y osificacion paralitica del musculo</td>
            <td><?php echo $M612 ?></td>
            <td><?php echo $M612_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M613 > 0) { ?>
        <tr>
            <td>Calcificacion y osificacion de los musculos asociadas con quemaduras</td>
            <td><?php echo $M613 ?></td>
            <td><?php echo $M613_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M614 > 0) { ?>
        <tr>
            <td>Otras calcificaciones del musculo</td>
            <td><?php echo $M614 ?></td>
            <td><?php echo $M614_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M615 > 0) { ?>
        <tr>
            <td>Otras osificaciones del musculo</td>
            <td><?php echo $M615 ?></td>
            <td><?php echo $M615_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M619 > 0) { ?>
        <tr>
            <td>Calcificacion y osificacion del musculo, no especificada</td>
            <td><?php echo $M619 ?></td>
            <td><?php echo $M619_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M620 > 0) { ?>
        <tr>
            <td>Diastasis del musculo</td>
            <td><?php echo $M620 ?></td>
            <td><?php echo $M620_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M621 > 0) { ?>
        <tr>
            <td>Otros desgarros (no traumaticos) del musculo</td>
            <td><?php echo $M621 ?></td>
            <td><?php echo $M621_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M622 > 0) { ?>
        <tr>
            <td>Infarto isquemico del musculo</td>
            <td><?php echo $M622 ?></td>
            <td><?php echo $M622_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M623 > 0) { ?>
        <tr>
            <td>Sindrome de inmovilidad (paraplejico)</td>
            <td><?php echo $M623 ?></td>
            <td><?php echo $M623_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M624 > 0) { ?>
        <tr>
            <td>Contractura muscular</td>
            <td><?php echo $M624 ?></td>
            <td><?php echo $M624_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M625 > 0) { ?>
        <tr>
            <td>Atrofia y desgaste musculares, no clasificados en otra parte</td>
            <td><?php echo $M625 ?></td>
            <td><?php echo $M625_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M626 > 0) { ?>
        <tr>
            <td>Distension muscular</td>
            <td><?php echo $M626 ?></td>
            <td><?php echo $M626_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M628 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de los musculos</td>
            <td><?php echo $M628 ?></td>
            <td><?php echo $M628_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M629 > 0) { ?>
        <tr>
            <td>Trastorno muscular, no especificado</td>
            <td><?php echo $M629 ?></td>
            <td><?php echo $M629_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M630 > 0) { ?>
        <tr>
            <td>Miositis en enfermedades bacterianas clasificadas en otra parte</td>
            <td><?php echo $M630 ?></td>
            <td><?php echo $M630_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M631 > 0) { ?>
        <tr>
            <td>Miositis en infecciones por protozoarios y parasitos clasificados en otra parte</td>
            <td><?php echo $M631 ?></td>
            <td><?php echo $M631_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M632 > 0) { ?>
        <tr>
            <td>Miositis en otras enfermedades infecciosas clasificadas en otra parte</td>
            <td><?php echo $M632 ?></td>
            <td><?php echo $M632_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M633 > 0) { ?>
        <tr>
            <td>Miositis en sarcoidosis</td>
            <td><?php echo $M633 ?></td>
            <td><?php echo $M633_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M638 > 0) { ?>
        <tr>
            <td>Otros trastornos de los musculos en enfermedades clasificadas en otra parte</td>
            <td><?php echo $M638 ?></td>
            <td><?php echo $M638_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M650 > 0) { ?>
        <tr>
            <td>Absceso de vaina tendinosa</td>
            <td><?php echo $M650 ?></td>
            <td><?php echo $M650_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M651 > 0) { ?>
        <tr>
            <td>Otras (teno)sinovitis infecciosas</td>
            <td><?php echo $M651 ?></td>
            <td><?php echo $M651_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M652 > 0) { ?>
        <tr>
            <td>Tendinitis calcificada</td>
            <td><?php echo $M652 ?></td>
            <td><?php echo $M652_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M653 > 0) { ?>
        <tr>
            <td>Dedo en gatillo</td>
            <td><?php echo $M653 ?></td>
            <td><?php echo $M653_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M654 > 0) { ?>
        <tr>
            <td>Tenosinovitis de estiloides radial [de Quervain]</td>
            <td><?php echo $M654 ?></td>
            <td><?php echo $M654_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M658 > 0) { ?>
        <tr>
            <td>Otras sinovitis y tenosinovitis</td>
            <td><?php echo $M658 ?></td>
            <td><?php echo $M658_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M659 > 0) { ?>
        <tr>
            <td>Sinovitis y tenosinovitis, no especificada</td>
            <td><?php echo $M659 ?></td>
            <td><?php echo $M659_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M660 > 0) { ?>
        <tr>
            <td>Ruptura de quiste sinovial popliteo</td>
            <td><?php echo $M660 ?></td>
            <td><?php echo $M660_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M661 > 0) { ?>
        <tr>
            <td>Ruptura de la sinovia</td>
            <td><?php echo $M661 ?></td>
            <td><?php echo $M661_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M662 > 0) { ?>
        <tr>
            <td>Ruptura espontanea de tendones extensores</td>
            <td><?php echo $M662 ?></td>
            <td><?php echo $M662_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M663 > 0) { ?>
        <tr>
            <td>Ruptura espontanea de tendones flexores</td>
            <td><?php echo $M663 ?></td>
            <td><?php echo $M663_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M664 > 0) { ?>
        <tr>
            <td>Ruptura espontanea de otros tendones</td>
            <td><?php echo $M664 ?></td>
            <td><?php echo $M664_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M665 > 0) { ?>
        <tr>
            <td>Ruptura espontanea de tendon no especificado</td>
            <td><?php echo $M665 ?></td>
            <td><?php echo $M665_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M670 > 0) { ?>
        <tr>
            <td>Acortamiento del tendon de Aquiles (adquirido)</td>
            <td><?php echo $M670 ?></td>
            <td><?php echo $M670_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M671 > 0) { ?>
        <tr>
            <td>Otras contracturas de tendon (vaina)</td>
            <td><?php echo $M671 ?></td>
            <td><?php echo $M671_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M672 > 0) { ?>
        <tr>
            <td>Hipertrofia sinovial, no clasificada en otra parte</td>
            <td><?php echo $M672 ?></td>
            <td><?php echo $M672_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M673 > 0) { ?>
        <tr>
            <td>Sinovitis transitoria</td>
            <td><?php echo $M673 ?></td>
            <td><?php echo $M673_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M674 > 0) { ?>
        <tr>
            <td>Ganglion</td>
            <td><?php echo $M674 ?></td>
            <td><?php echo $M674_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M678 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la sinovia y del tendon</td>
            <td><?php echo $M678 ?></td>
            <td><?php echo $M678_porcentaje_t ?> %</td>
            
        </tr>
         <?php } if ($M679 > 0) { ?>
        <tr>
            <td>Trastorno sinovial y tendinoso, no especificado</td>
            <td><?php echo $M679 ?></td>
            <td><?php echo $M679_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M680 > 0) { ?>
        <tr>
            <td>Sinovitis y tenosinovitis en enfermedades bacterianas clasificadas en otra parte</td>
            <td><?php echo $M680 ?></td>
            <td><?php echo $M680_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M688 > 0) { ?>
        <tr>
            <td>Otros trastornos sinoviales y tendinosos en enfermedades clasificadas en otra parte</td>
            <td><?php echo $M688 ?></td>
            <td><?php echo $M688_porcentaje_t ?> %</td>
            
        </tr>
        <?php } if ($M700 > 0) { ?>
        <tr>
            <td>Sinovitis crepitante cronica de la mano y de la muneca</td>
            <td><?php echo $M700 ?></td>
            <td><?php echo $M700_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M701 > 0) { ?>
        <tr>
            <td>Bursitis de la mano</td>
            <td><?php echo $M701 ?></td>
            <td><?php echo $M701_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M702 > 0) { ?>
        <tr>
            <td>Bursitis del olecranon</td>
            <td><?php echo $M702 ?></td>
            <td><?php echo $M702_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M703 > 0) { ?>
        <tr>
            <td>Otras bursitis del codo</td>
            <td><?php echo $M703 ?></td>
            <td><?php echo $M703_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M704 > 0) { ?>
        <tr>
            <td>Otras bursitis prerrotulianas</td>
            <td><?php echo $M704 ?></td>
            <td><?php echo $M704_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M705 > 0) { ?>
        <tr>
            <td>Otras bursitis de la rodilla</td>
            <td><?php echo $M705 ?></td>
            <td><?php echo $M705_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M706 > 0) { ?>
        <tr>
            <td>Bursitis del trocanter</td>
            <td><?php echo $M706 ?></td>
            <td><?php echo $M706_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M707 > 0) { ?>
        <tr>
            <td>Otras bursitis de la cadera</td>
            <td><?php echo $M707 ?></td>
            <td><?php echo $M707_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M708 > 0) { ?>
        <tr>
            <td>Otros trastornos de los tejidos blandos relacionados con el uso, el uso excesivo y la presion</td>
            <td><?php echo $M708 ?></td>
            <td><?php echo $M708_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M709 > 0) { ?>
        <tr>
            <td>Trastorno no especificado de los tejidos blandos relacionado con el uso, el uso excesivo y la presión</td>
            <td><?php echo $M709 ?></td>
            <td><?php echo $M709_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M710 > 0) { ?>
        <tr>
            <td>Absceso de la bolsa sinovial</td>
            <td><?php echo $M710 ?></td>
            <td><?php echo $M710_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M711 > 0) { ?>
        <tr>
            <td>Otras bursitis infecciosas</td>
            <td><?php echo $M711 ?></td>
            <td><?php echo $M711_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M712 > 0) { ?>
        <tr>
            <td>Quiste sinovial del hueco popliteo [de Baker]</td>
            <td><?php echo $M712 ?></td>
            <td><?php echo $M712_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M713 > 0) { ?>
        <tr>
            <td>Otros quistes de la bolsa serosa</td>
            <td><?php echo $M713 ?></td>
            <td><?php echo $M713_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M714 > 0) { ?>
        <tr>
            <td>Deposito de calcio  en la bolsa serosa</td>
            <td><?php echo $M714 ?></td>
            <td><?php echo $M714_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M715 > 0) { ?>
        <tr>
            <td>Otras bursitis, no clasificadas en otra parte</td>
            <td><?php echo $M715 ?></td>
            <td><?php echo $M715_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M718 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la bolsa serosa</td>
            <td><?php echo $M718 ?></td>
            <td><?php echo $M718_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($M719 > 0) { ?>
        <tr>
            <td>Bursopatia, no especificada</td>
            <td><?php echo $M719 ?></td>
            <td><?php echo $M719_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M720 > 0) { ?>
        <tr>
            <td>Fibromatosis de la aponeurosis palmar [Dupuytren]</td>
            <td><?php echo $M720 ?></td>
            <td><?php echo $M720_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M721 > 0) { ?>
        <tr>
            <td>Nodulos interfalangicos</td>
            <td><?php echo $M721 ?></td>
            <td><?php echo $M721_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M722 > 0) { ?>
        <tr>
            <td>Fibromatosis de la aponeurosis plantar</td>
            <td><?php echo $M722 ?></td>
            <td><?php echo $M722_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M724 > 0) { ?>
        <tr>
            <td>Fibromatosis seudosarcomatosa</td>
            <td><?php echo $M724 ?></td>
            <td><?php echo $M724_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M726 > 0) { ?>
        <tr>
            <td>Fascitis necrotizante</td>
            <td><?php echo $M726 ?></td>
            <td><?php echo $M726_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M728 > 0) { ?>
        <tr>
            <td>Otros trastornos fibroblasticos</td>
            <td><?php echo $M728 ?></td>
            <td><?php echo $M728_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M729 > 0) { ?>
        <tr>
            <td>Trastorno fibroblastico, no especificado</td>
            <td><?php echo $M729 ?></td>
            <td><?php echo $M729_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M730 > 0) { ?>
        <tr>
            <td>Bursitis gonococica</td>
            <td><?php echo $M730 ?></td>
            <td><?php echo $M730_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M731 > 0) { ?>
        <tr>
            <td>Bursitis sifilitica</td>
            <td><?php echo $M731 ?></td>
            <td><?php echo $M731_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M738 > 0) { ?>
        <tr>
            <td>Otros trastornos de los tejidos blandos en enfermedades clasificadas en otra parte</td>
            <td><?php echo $M738 ?></td>
            <td><?php echo $M738_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M750 > 0) { ?>
        <tr>
            <td>Capsulitis adhesiva del hombro</td>
            <td><?php echo $M750 ?></td>
            <td><?php echo $M750_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M751 > 0) { ?>
        <tr>
            <td>Sindrome del manguito rotatorio</td>
            <td><?php echo $M751 ?></td>
            <td><?php echo $M751_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M752 > 0) { ?>
        <tr>
            <td>Tendinitis del biceps</td>
            <td><?php echo $M752 ?></td>
            <td><?php echo $M752_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M753 > 0) { ?>
        <tr>
            <td>Tendinitis calcificante del hombro</td>
            <td><?php echo $M753 ?></td>
            <td><?php echo $M753_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M754 > 0) { ?>
        <tr>
            <td>Sindrome de abduccion dolorosa del hombro</td>
            <td><?php echo $M754 ?></td>
            <td><?php echo $M754_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M755 > 0) { ?>
        <tr>
            <td>Bursitis del hombro</td>
            <td><?php echo $M755 ?></td>
            <td><?php echo $M755_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M758 > 0) { ?>
        <tr>
            <td>Otras lesiones del hombro</td>
            <td><?php echo $M758 ?></td>
            <td><?php echo $M758_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M759 > 0) { ?>
        <tr>
            <td>Lesion del hombro, no especificada</td>
            <td><?php echo $M759 ?></td>
            <td><?php echo $M759_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M760 > 0) { ?>
        <tr>
            <td>Tendinitis del gluteo</td>
            <td><?php echo $M760 ?></td>
            <td><?php echo $M760_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M761 > 0) { ?>
        <tr>
            <td>Tendinitis del psoas</td>
            <td><?php echo $M761 ?></td>
            <td><?php echo $M761_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M762 > 0) { ?>
        <tr>
            <td>Espolon de la cresta iliaca</td>
            <td><?php echo $M762 ?></td>
            <td><?php echo $M762_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M763 > 0) { ?>
        <tr>
            <td>Sindrome del tendon del tensor de la fascia lata</td>
            <td><?php echo $M763 ?></td>
            <td><?php echo $M763_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M764 > 0) { ?>
        <tr>
            <td>Bursitis tibial colateral [Pellegrini-Stieda]</td>
            <td><?php echo $M764 ?></td>
            <td><?php echo $M764_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M765 > 0) { ?>
        <tr>
            <td>Tendinitis rotuliana</td>
            <td><?php echo $M765 ?></td>
            <td><?php echo $M765_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M766 > 0) { ?>
        <tr>
            <td>Tendinitis aquiliana</td>
            <td><?php echo $M766 ?></td>
            <td><?php echo $M766_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M767 > 0) { ?>
        <tr>
            <td>Tendinitis peroneal</td>
            <td><?php echo $M767 ?></td>
            <td><?php echo $M767_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M768 > 0) { ?>
        <tr>
            <td>Otras entesopatias del miembro inferior, excluido el pie</td>
            <td><?php echo $M768 ?></td>
            <td><?php echo $M768_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M769 > 0) { ?>
        <tr>
            <td>Entesopatia del miembro inferior, no especificada</td>
            <td><?php echo $M769 ?></td>
            <td><?php echo $M769_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M770 > 0) { ?>
        <tr>
            <td>Epicondilitis media</td>
            <td><?php echo $M770 ?></td>
            <td><?php echo $M770_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M771 > 0) { ?>
        <tr>
            <td>Epicondilitis lateral</td>
            <td><?php echo $M771 ?></td>
            <td><?php echo $M771_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M772 > 0) { ?>
        <tr>
            <td>Periartritis de la muneca</td>
            <td><?php echo $M772 ?></td>
            <td><?php echo $M772_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M773 > 0) { ?>
        <tr>
            <td>Espolon calcaneo</td>
            <td><?php echo $M773 ?></td>
            <td><?php echo $M773_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M774 > 0) { ?>
        <tr>
            <td>Metatarsalgia</td>
            <td><?php echo $M774 ?></td>
            <td><?php echo $M774_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M775 > 0) { ?>
        <tr>
            <td>Otras entesopatias del pie</td>
            <td><?php echo $M775 ?></td>
            <td><?php echo $M775_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M778 > 0) { ?>
        <tr>
            <td>Otras entesopatias, no clasificadas en otra parte</td>
            <td><?php echo $M778 ?></td>
            <td><?php echo $M778_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M779 > 0) { ?>
        <tr>
            <td>Entesopatia, no especificada</td>
            <td><?php echo $M779 ?></td>
            <td><?php echo $M779_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M790 > 0) { ?>
        <tr>
            <td>Reumatismo, no especificado</td>
            <td><?php echo $M790 ?></td>
            <td><?php echo $M790_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M791 > 0) { ?>
        <tr>
            <td>Mialgia</td>
            <td><?php echo $M791 ?></td>
            <td><?php echo $M791_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M792 > 0) { ?>
        <tr>
            <td>Neuralgia y neuritis, no especificadas</td>
            <td><?php echo $M792 ?></td>
            <td><?php echo $M792_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M793 > 0) { ?>
        <tr>
            <td>Paniculitis, no especificada</td>
            <td><?php echo $M793 ?></td>
            <td><?php echo $M793_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M794 > 0) { ?>
        <tr>
            <td>Hipertrofia de paquete adiposo (infrarrotuliano)</td>
            <td><?php echo $M794 ?></td>
            <td><?php echo $M794_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M795 > 0) { ?>
        <tr>
            <td>Cuerpo extrano residual en tejido blando</td>
            <td><?php echo $M795 ?></td>
            <td><?php echo $M795_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M796 > 0) { ?>
        <tr>
            <td>Dolor en miembro</td>
            <td><?php echo $M796 ?></td>
            <td><?php echo $M796_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M797 > 0) { ?>
        <tr>
            <td>Fibromialgia</td>
            <td><?php echo $M797 ?></td>
            <td><?php echo $M797_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M798 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de los tejidos blandos</td>
            <td><?php echo $M798 ?></td>
            <td><?php echo $M798_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M799 > 0) { ?>
        <tr>
            <td>Trastorno de los tejidos blandos, no especificado</td>
            <td><?php echo $M799 ?></td>
            <td><?php echo $M799_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M800 > 0) { ?>
        <tr>
            <td>Osteoporosis postmenopausica, con fractura patologica</td>
            <td><?php echo $M800 ?></td>
            <td><?php echo $M800_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M801 > 0) { ?>
        <tr>
            <td>Osteoporosis postooforectomia, con fractura patologica</td>
            <td><?php echo $M801 ?></td>
            <td><?php echo $M801_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M802 > 0) { ?>
        <tr>
            <td>Osteoporosis por desuso, con fractura patologica</td>
            <td><?php echo $M802 ?></td>
            <td><?php echo $M802_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M803 > 0) { ?>
        <tr>
            <td>Osteoporosis por malabsorcion postquirurgica, con fractura patologica</td>
            <td><?php echo $M803 ?></td>
            <td><?php echo $M803_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M804 > 0) { ?>
        <tr>
            <td>Osteoporosis inducida por drogas, con fractura patologica</td>
            <td><?php echo $M804 ?></td>
            <td><?php echo $M804_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M805 > 0) { ?>
        <tr>
            <td>Osteoporosis idiopatica, con fractura patologica</td>
            <td><?php echo $M805 ?></td>
            <td><?php echo $M805_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M808 > 0) { ?>
        <tr>
            <td>Otras osteoporosis, con fractura patologica</td>
            <td><?php echo $M808 ?></td>
            <td><?php echo $M808_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M809 > 0) { ?>
        <tr>
            <td>Osteoporosis no especificada, con fractura patologica</td>
            <td><?php echo $M809 ?></td>
            <td><?php echo $M809_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M810 > 0) { ?>
        <tr>
            <td>Osteoporosis postmenopausica, sin fractura patologica</td>
            <td><?php echo $M810 ?></td>
            <td><?php echo $M810_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M811 > 0) { ?>
        <tr>
            <td>Osteoporosis postooforectomia, sin fractura patologica</td>
            <td><?php echo $M811 ?></td>
            <td><?php echo $M811_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M812 > 0) { ?>
        <tr>
            <td>Osteoporosis por desuso, sin fractura patologica</td>
            <td><?php echo $M812 ?></td>
            <td><?php echo $M812_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M813 > 0) { ?>
        <tr>
            <td>Osteoporosis por malabsorcion postquirurgica, sin fractura patologica</td>
            <td><?php echo $M813 ?></td>
            <td><?php echo $M813_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M814 > 0) { ?>
        <tr>
            <td>Osteoporosis inducida por drogas, sin fractura patologica</td>
            <td><?php echo $M814 ?></td>
            <td><?php echo $M814_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M815 > 0) { ?>
        <tr>
            <td>Osteoporosis idiopatica, sin fractura patologica</td>
            <td><?php echo $M815 ?></td>
            <td><?php echo $M815_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M816 > 0) { ?>
        <tr>
            <td>Osteoporosis localizada [Lequesne], sin fractura patologica</td>
            <td><?php echo $M816 ?></td>
            <td><?php echo $M816_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M818 > 0) { ?>
        <tr>
            <td>Otras osteoporosis, sin fractura patologica</td>
            <td><?php echo $M818 ?></td>
            <td><?php echo $M818_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M819 > 0) { ?>
        <tr>
            <td>Osteoporosis no especificada, sin fractura patologica</td>
            <td><?php echo $M819 ?></td>
            <td><?php echo $M819_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M820 > 0) { ?>
        <tr>
            <td>Osteoporosis en mielomatosis multiple</td>
            <td><?php echo $M820 ?></td>
            <td><?php echo $M820_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M821 > 0) { ?>
        <tr>
            <td>Osteoporosis en trastornos endocrinos</td>
            <td><?php echo $M821 ?></td>
            <td><?php echo $M821_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M828 > 0) { ?>
        <tr>
            <td>Osteoporosis en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M828 ?></td>
            <td><?php echo $M828_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M830 > 0) { ?>
        <tr>
            <td>Osteomalacia puerperal</td>
            <td><?php echo $M830 ?></td>
            <td><?php echo $M830_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M831 > 0) { ?>
        <tr>
            <td>Osteomalacia senil</td>
            <td><?php echo $M831 ?></td>
            <td><?php echo $M831_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M832 > 0) { ?>
        <tr>
            <td>Osteomalacia del adulto debida a malabsorcion</td>
            <td><?php echo $M832 ?></td>
            <td><?php echo $M832_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M833 > 0) { ?>
        <tr>
            <td>Osteomalacia del adulto debida a desnutricion</td>
            <td><?php echo $M833 ?></td>
            <td><?php echo $M833_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M834 > 0) { ?>
        <tr>
            <td>Enfermedad de los huesos por aluminio</td>
            <td><?php echo $M834 ?></td>
            <td><?php echo $M834_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M835 > 0) { ?>
        <tr>
            <td>Otras osteomalacias del adulto inducidas por drogas</td>
            <td><?php echo $M835 ?></td>
            <td><?php echo $M835_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M838 > 0) { ?>
        <tr>
            <td>Otras osteomalacias del adulto</td>
            <td><?php echo $M838 ?></td>
            <td><?php echo $M838_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M839 > 0) { ?>
        <tr>
            <td>Osteomalacia del adulto, no especificada</td>
            <td><?php echo $M839 ?></td>
            <td><?php echo $M839_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M840 > 0) { ?>
        <tr>
            <td>Consolidacion defectuosa de fractura</td>
            <td><?php echo $M840 ?></td>
            <td><?php echo $M840_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M841 > 0) { ?>
        <tr>
            <td>Falta de consolidacion de fractura [seudoartrosis]</td>
            <td><?php echo $M841 ?></td>
            <td><?php echo $M841_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M842 > 0) { ?>
        <tr>
            <td>Consolidacion retardada de fractura</td>
            <td><?php echo $M842 ?></td>
            <td><?php echo $M842_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M843 > 0) { ?>
        <tr>
            <td>Fractura por tension, no clasificada en otra parte</td>
            <td><?php echo $M843 ?></td>
            <td><?php echo $M843_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M844 > 0) { ?>
        <tr>
            <td>Fractura patologica, no clasificada en otra parte</td>
            <td><?php echo $M844 ?></td>
            <td><?php echo $M844_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M848 > 0) { ?>
        <tr>
            <td>Otros trastornos de la continuidad del hueso</td>
            <td><?php echo $M848 ?></td>
            <td><?php echo $M848_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M849 > 0) { ?>
        <tr>
            <td>Trastorno de la continuidad del hueso, no especificado</td>
            <td><?php echo $M849 ?></td>
            <td><?php echo $M849_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M850 > 0) { ?>
        <tr>
            <td>Displasia fibrosa (monostotica)</td>
            <td><?php echo $M850 ?></td>
            <td><?php echo $M850_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M851 > 0) { ?>
        <tr>
            <td>Fluorosis del esqueleto</td>
            <td><?php echo $M851 ?></td>
            <td><?php echo $M851_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M852 > 0) { ?>
        <tr>
            <td>Hiperostosis del craneo</td>
            <td><?php echo $M852 ?></td>
            <td><?php echo $M852_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M853 > 0) { ?>
        <tr>
            <td>Osteitis condensante</td>
            <td><?php echo $M853 ?></td>
            <td><?php echo $M853_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M854 > 0) { ?>
        <tr>
            <td>Quiste oseo solitario</td>
            <td><?php echo $M854 ?></td>
            <td><?php echo $M854_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M855 > 0) { ?>
        <tr>
            <td>Quiste oseo aneurismatico</td>
            <td><?php echo $M855 ?></td>
            <td><?php echo $M855_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M856 > 0) { ?>
        <tr>
            <td>Otros quistes oseos</td>
            <td><?php echo $M856 ?></td>
            <td><?php echo $M856_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M858 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la densidad y de la estructura oseas</td>
            <td><?php echo $M858 ?></td>
            <td><?php echo $M858_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M859 > 0) { ?>
        <tr>
            <td>Trastorno de la densidad y de la estructura oseas, no especificado</td>
            <td><?php echo $M859 ?></td>
            <td><?php echo $M859_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M860 > 0) { ?>
        <tr>
            <td>Osteomielitis hematogena aguda</td>
            <td><?php echo $M860 ?></td>
            <td><?php echo $M860_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M861 > 0) { ?>
        <tr>
            <td>Otras osteomielitis agudas</td>
            <td><?php echo $M861 ?></td>
            <td><?php echo $M861_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M862 > 0) { ?>
        <tr>
            <td>Osteomielitis subaguda</td>
            <td><?php echo $M862 ?></td>
            <td><?php echo $M862_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M863 > 0) { ?>
        <tr>
            <td>Osteomielitis multifocal cronica</td>
            <td><?php echo $M863 ?></td>
            <td><?php echo $M863_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M864 > 0) { ?>
        <tr>
            <td>Osteomielitis cronica con drenaje del seno</td>
            <td><?php echo $M864 ?></td>
            <td><?php echo $M864_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M865 > 0) { ?>
        <tr>
            <td>Otras osteomielitis hematogenas cronicas</td>
            <td><?php echo $M865 ?></td>
            <td><?php echo $M865_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M866 > 0) { ?>
        <tr>
            <td>Otras osteomielitis cronicas</td>
            <td><?php echo $M866 ?></td>
            <td><?php echo $M866_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M868 > 0) { ?>
        <tr>
            <td>Otras osteomielitis</td>
            <td><?php echo $M868 ?></td>
            <td><?php echo $M868_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M869 > 0) { ?>
        <tr>
            <td>Osteomielitis, no especificada</td>
            <td><?php echo $M869 ?></td>
            <td><?php echo $M869_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M870 > 0) { ?>
        <tr>
            <td>Necrosis aseptica idiopatica osea</td>
            <td><?php echo $M870 ?></td>
            <td><?php echo $M870_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M871 > 0) { ?>
        <tr>
            <td>Osteonecrosis debida a drogas</td>
            <td><?php echo $M871 ?></td>
            <td><?php echo $M871_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M872 > 0) { ?>
        <tr>
            <td>Osteonecrosis debida a traumatismo previo</td>
            <td><?php echo $M872 ?></td>
            <td><?php echo $M872_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M873 > 0) { ?>
        <tr>
            <td>Otras osteonecrosis secundarias</td>
            <td><?php echo $M873 ?></td>
            <td><?php echo $M873_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M878 > 0) { ?>
        <tr>
            <td>Otras osteonecrosis</td>
            <td><?php echo $M878 ?></td>
            <td><?php echo $M878_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M879 > 0) { ?>
        <tr>
            <td>Osteonecrosis, no especificada</td>
            <td><?php echo $M879 ?></td>
            <td><?php echo $M879_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M880 > 0) { ?>
        <tr>
            <td>Enfermedad de Paget del craneo</td>
            <td><?php echo $M880 ?></td>
            <td><?php echo $M880_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M888 > 0) { ?>
        <tr>
            <td>Enfermedad de Paget de otros huesos</td>
            <td><?php echo $M888 ?></td>
            <td><?php echo $M888_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M889 > 0) { ?>
        <tr>
            <td>Enfermedad osea de Paget, huesos no especificados</td>
            <td><?php echo $M889 ?></td>
            <td><?php echo $M889_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M890 > 0) { ?>
        <tr>
            <td>Algoneurodistrofia</td>
            <td><?php echo $M890 ?></td>
            <td><?php echo $M890_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M891 > 0) { ?>
        <tr>
            <td>Detencion del crecimiento epifisario</td>
            <td><?php echo $M891 ?></td>
            <td><?php echo $M891_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M892 > 0) { ?>
        <tr>
            <td>Otros trastornos del desarrollo y crecimiento oseo</td>
            <td><?php echo $M892 ?></td>
            <td><?php echo $M892_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M893 > 0) { ?>
        <tr>
            <td>Hipertrofia del hueso</td>
            <td><?php echo $M893 ?></td>
            <td><?php echo $M893_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M894 > 0) { ?>
        <tr>
            <td>Otras osteoartropatias hipertroficas</td>
            <td><?php echo $M894 ?></td>
            <td><?php echo $M894_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M895 > 0) { ?>
        <tr>
            <td>Osteolisis</td>
            <td><?php echo $M895 ?></td>
            <td><?php echo $M895_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M896 > 0) { ?>
        <tr>
            <td>Osteopatia a consecuencia de poliomielitis</td>
            <td><?php echo $M896 ?></td>
            <td><?php echo $M896_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M898 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados del hueso</td>
            <td><?php echo $M898 ?></td>
            <td><?php echo $M898_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M899 > 0) { ?>
        <tr>
            <td>Trastorno del hueso, no especificado</td>
            <td><?php echo $M899 ?></td>
            <td><?php echo $M899_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M900 > 0) { ?>
        <tr>
            <td>Tuberculosis osea</td>
            <td><?php echo $M900 ?></td>
            <td><?php echo $M900_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M901 > 0) { ?>
        <tr>
            <td>Periostitis en otras enfermedades infecciosas clasificadas en otra parte</td>
            <td><?php echo $M901 ?></td>
            <td><?php echo $M901_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M902 > 0) { ?>
        <tr>
            <td>Osteopatia en otras enfermedades infecciosas clasificadas en otra parte</td>
            <td><?php echo $M902 ?></td>
            <td><?php echo $M902_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M903 > 0) { ?>
        <tr>
            <td>Osteonecrosis en la enfermedad causada por descompresion</td>
            <td><?php echo $M903 ?></td>
            <td><?php echo $M903_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M904 > 0) { ?>
        <tr>
            <td>Osteonecrosis debida a hemoglobinopatia</td>
            <td><?php echo $M904 ?></td>
            <td><?php echo $M904_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M905 > 0) { ?>
        <tr>
            <td>Osteonecrosis en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M905 ?></td>
            <td><?php echo $M905_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M906 > 0) { ?>
        <tr>
            <td>Osteitis deformante en enfermedad neoplasica</td>
            <td><?php echo $M906 ?></td>
            <td><?php echo $M906_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M907 > 0) { ?>
        <tr>
            <td>Fractura osea en enfermedad neoplasica</td>
            <td><?php echo $M907 ?></td>
            <td><?php echo $M907_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M908 > 0) { ?>
        <tr>
            <td>Osteopatia en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $M908 ?></td>
            <td><?php echo $M908_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M910 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la pelvis</td>
            <td><?php echo $M910 ?></td>
            <td><?php echo $M910_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M911 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la cabeza del femur [Legg-Calve-Perthes]</td>
            <td><?php echo $M911 ?></td>
            <td><?php echo $M911_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M912 > 0) { ?>
        <tr>
            <td>Coxa plana</td>
            <td><?php echo $M912 ?></td>
            <td><?php echo $M912_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M913 > 0) { ?>
        <tr>
            <td>Pseudocoxalgia</td>
            <td><?php echo $M913 ?></td>
            <td><?php echo $M913_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M918 > 0) { ?>
        <tr>
            <td>Otras osteocondrosis juveniles de la cadera y de la pelvis</td>
            <td><?php echo $M918 ?></td>
            <td><?php echo $M918_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M919 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la cadera y de la pelvis, sin otra especificacion</td>
            <td><?php echo $M919 ?></td>
            <td><?php echo $M919_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M920 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil del humero</td>
            <td><?php echo $M920 ?></td>
            <td><?php echo $M920_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M921 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil del cubito y del radio</td>
            <td><?php echo $M921 ?></td>
            <td><?php echo $M921_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M922 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la mano</td>
            <td><?php echo $M922 ?></td>
            <td><?php echo $M922_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M923 > 0) { ?>
        <tr>
            <td>Otras osteocondrosis juveniles del miembro superior</td>
            <td><?php echo $M923 ?></td>
            <td><?php echo $M923_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M924 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la rotula</td>
            <td><?php echo $M924 ?></td>
            <td><?php echo $M924_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M925 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil de la tibia y del perone</td>
            <td><?php echo $M925 ?></td>
            <td><?php echo $M925_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M926 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil del tarso</td>
            <td><?php echo $M926 ?></td>
            <td><?php echo $M926_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M927 > 0) { ?>
        <tr>
            <td>Otras osteocondrosis juveniles especificadas</td>
            <td><?php echo $M927 ?></td>
            <td><?php echo $M927_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M928 > 0) { ?>
        <tr>
            <td>Otras osteocondrosis juveniles especificadas</td>
            <td><?php echo $M928 ?></td>
            <td><?php echo $M928_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M929 > 0) { ?>
        <tr>
            <td>Osteocondrosis juvenil, no especificada</td>
            <td><?php echo $M929 ?></td>
            <td><?php echo $M929_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M930 > 0) { ?>
        <tr>
            <td>Deslizamiento de la epifisis femoral superior (no traumatico)</td>
            <td><?php echo $M930 ?></td>
            <td><?php echo $M930_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M931 > 0) { ?>
        <tr>
            <td>Enfermedad de Kienb”ck del adulto</td>
            <td><?php echo $M931 ?></td>
            <td><?php echo $M931_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M932 > 0) { ?>
        <tr>
            <td>Osteocondritis disecante</td>
            <td><?php echo $M932 ?></td>
            <td><?php echo $M932_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M938 > 0) { ?>
        <tr>
            <td>Otras osteocondropatias especificadas</td>
            <td><?php echo $M938 ?></td>
            <td><?php echo $M938_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M939 > 0) { ?>
        <tr>
            <td>Osteocondropatia, no especificada</td>
            <td><?php echo $M939 ?></td>
            <td><?php echo $M939_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M940 > 0) { ?>
        <tr>
            <td>Sindrome de la articulacion condrocostal [Tietze]</td>
            <td><?php echo $M940 ?></td>
            <td><?php echo $M940_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M941 > 0) { ?>
        <tr>
            <td>Policondritis recidivante</td>
            <td><?php echo $M941 ?></td>
            <td><?php echo $M941_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M942 > 0) { ?>
        <tr>
            <td>Condromalacia</td>
            <td><?php echo $M942 ?></td>
            <td><?php echo $M942_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M943 > 0) { ?>
        <tr>
            <td>Condrolisis</td>
            <td><?php echo $M943 ?></td>
            <td><?php echo $M943_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M948 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados del cartilago</td>
            <td><?php echo $M948 ?></td>
            <td><?php echo $M948_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M949 > 0) { ?>
        <tr>
            <td>Trastorno del cartilago, no especificado</td>
            <td><?php echo $M949 ?></td>
            <td><?php echo $M949_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M950 > 0) { ?>
        <tr>
            <td>Deformidad adquirida de la nariz</td>
            <td><?php echo $M950 ?></td>
            <td><?php echo $M950_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M951 > 0) { ?>
        <tr>
            <td>Oreja en coliflor</td>
            <td><?php echo $M951 ?></td>
            <td><?php echo $M951_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M952 > 0) { ?>
        <tr>
            <td>Otras deformidades adquiridas de la cabeza</td>
            <td><?php echo $M952 ?></td>
            <td><?php echo $M952_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M953 > 0) { ?>
        <tr>
            <td>Deformidad adquirida del cuello</td>
            <td><?php echo $M953 ?></td>
            <td><?php echo $M953_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M954 > 0) { ?>
        <tr>
            <td>Deformidad adquirida de costillas y torax</td>
            <td><?php echo $M954 ?></td>
            <td><?php echo $M954_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M955 > 0) { ?>
        <tr>
            <td>Deformidad adquirida de la pelvis</td>
            <td><?php echo $M955 ?></td>
            <td><?php echo $M955_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M958 > 0) { ?>
        <tr>
            <td>Otras deformidades adquiridas especificadas del sistema osteomuscular</td>
            <td><?php echo $M958 ?></td>
            <td><?php echo $M958_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M959 > 0) { ?>
        <tr>
            <td>Deformidad adquirida del sistema osteomuscular, no especificada</td>
            <td><?php echo $M959 ?></td>
            <td><?php echo $M959_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M960 > 0) { ?>
        <tr>
            <td>Seudoartrosis consecutiva a fusion o artrodesis</td>
            <td><?php echo $M960 ?></td>
            <td><?php echo $M960_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M961 > 0) { ?>
        <tr>
            <td>Sindrome postlaminectomia, no clasificado en otra parte</td>
            <td><?php echo $M961 ?></td>
            <td><?php echo $M961_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M962 > 0) { ?>
        <tr>
            <td>Cifosis postradiacion</td>
            <td><?php echo $M962 ?></td>
            <td><?php echo $M962_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M963 > 0) { ?>
        <tr>
            <td>Cifosis postlaminectomia</td>
            <td><?php echo $M963 ?></td>
            <td><?php echo $M963_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M964 > 0) { ?>
        <tr>
            <td>Lordosis postquirurgica</td>
            <td><?php echo $M964 ?></td>
            <td><?php echo $M964_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M965 > 0) { ?>
        <tr>
            <td>Escoliosis postrradiacion</td>
            <td><?php echo $M965 ?></td>
            <td><?php echo $M965_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M966 > 0) { ?>
        <tr>
            <td>Fractura de hueso posterior a insercion o implante ortopedico, protesis articular o placa osea</td>
            <td><?php echo $M966 ?></td>
            <td><?php echo $M966_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M968 > 0) { ?>
        <tr>
            <td>Otros trastornos osteomusculares consecutivos a procedimientos</td>
            <td><?php echo $M968 ?></td>
            <td><?php echo $M968_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M969 > 0) { ?>
        <tr>
            <td>Trastornos osteomusculares no especificados consecutivos a procedimientos</td>
            <td><?php echo $M969 ?></td>
            <td><?php echo $M969_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M990 > 0) { ?>
        <tr>
            <td>Disfuncion segmental o somatica</td>
            <td><?php echo $M990 ?></td>
            <td><?php echo $M990_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M991 > 0) { ?>
        <tr>
            <td>Complejo de subluxacion (vertebral)</td>
            <td><?php echo $M991 ?></td>
            <td><?php echo $M991_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M992 > 0) { ?>
        <tr>
            <td>Subluxacion con estenosis del canal neural</td>
            <td><?php echo $M992 ?></td>
            <td><?php echo $M992_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M993 > 0) { ?>
        <tr>
            <td>Estenosis osea del canal neural</td>
            <td><?php echo $M993 ?></td>
            <td><?php echo $M993_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M994 > 0) { ?>
        <tr>
            <td>Estenosis del canal neural por tejido conjuntivo</td>
            <td><?php echo $M994 ?></td>
            <td><?php echo $M994_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M995 > 0) { ?>
        <tr>
            <td>Estenosis del canal neural por disco intervertebral</td>
            <td><?php echo $M995 ?></td>
            <td><?php echo $M995_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M996 > 0) { ?>
        <tr>
            <td>Estenosis osea y subluxacion de los agujeros intervertebrales</td>
            <td><?php echo $M996 ?></td>
            <td><?php echo $M996_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M997 > 0) { ?>
        <tr>
            <td>Estenosis de los agujeros intervertebrales por tejido conjuntivo o por disco intervertebral</td>
            <td><?php echo $M997 ?></td>
            <td><?php echo $M997_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M998 > 0) { ?>
        <tr>
            <td>Otras lesiones biomecanicas</td>
            <td><?php echo $M998 ?></td>
            <td><?php echo $M998_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($M999 > 0) { ?>
        <tr>
            <td>Lesion biomecanica, no especificada</td>
            <td><?php echo $M999 ?></td>
            <td><?php echo $M999_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M00 > 0) { ?>
        <tr>
            <td>Artritis Piogena</td>
            <td><?php echo $M00 ?></td>
            <td><?php echo $M00_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M01 > 0) { ?>
        <tr>
            <td>Infecciones Directas De La Articulacion En Enfermedades Infecciosas Y Parasitarias Clasificadas En Otra Parte</td>
            <td><?php echo $M01 ?></td>
            <td><?php echo $M01_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M02 > 0) { ?>
        <tr>
            <td>Artropatias Reactivas</td>
            <td><?php echo $M02 ?></td>
            <td><?php echo $M02_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M03 > 0) { ?>
        <tr>
            <td>Artropatias Posinfecciosas Y Reactivas En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M03 ?></td>
            <td><?php echo $M03_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M05 > 0) { ?>
        <tr>
            <td>Artritis Reumatoide Seropositiva</td>
            <td><?php echo $M05 ?></td>
            <td><?php echo $M05_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M06 > 0) { ?>
        <tr>
            <td>Otras Artritis Reumatoides</td>
            <td><?php echo $M06 ?></td>
            <td><?php echo $M06_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M07 > 0) { ?>
        <tr>
            <td>Artropatias Psoriasicas Y Enteropaticas</td>
            <td><?php echo $M07 ?></td>
            <td><?php echo $M07_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M08 > 0) { ?>
        <tr>
            <td>Artritis Juvenil</td>
            <td><?php echo $M08 ?></td>
            <td><?php echo $M08_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M09 > 0) { ?>
        <tr>
            <td>Artritis Juvenil En Enfermedades Clasificadas En  Otra Parte</td>
            <td><?php echo $M09 ?></td>
            <td><?php echo $M09_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M10 > 0) { ?>
        <tr>
            <td>Gota</td>
            <td><?php echo $M10 ?></td>
            <td><?php echo $M10_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M11 > 0) { ?>
        <tr>
            <td>Otras Artropatias Por Cristales</td>
            <td><?php echo $M11 ?></td>
            <td><?php echo $M11_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M12 > 0) { ?>
        <tr>
            <td>Otras Artropatias Especificas</td>
            <td><?php echo $M12 ?></td>
            <td><?php echo $M12_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M13 > 0) { ?>
        <tr>
            <td>Otras Artritis</td>
            <td><?php echo $M13 ?></td>
            <td><?php echo $M13_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M14 > 0) { ?>
        <tr>
            <td>Artropatia En Otras Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M14 ?></td>
            <td><?php echo $M14_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M15 > 0) { ?>
        <tr>
            <td>Poliartrosis</td>
            <td><?php echo $M15 ?></td>
            <td><?php echo $M15_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M16 > 0) { ?>
        <tr>
            <td>Coxartrosis [Artrosis De La Cadera]</td>
            <td><?php echo $M16 ?></td>
            <td><?php echo $M16_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M17 > 0) { ?>
        <tr>
            <td>Gonartrosis [Artrosis De La Rodilla]</td>
            <td><?php echo $M17 ?></td>
            <td><?php echo $M17_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M18 > 0) { ?>
        <tr>
            <td>Artrosis De La Primera Articulacion Carpometacarpiana</td>
            <td><?php echo $M18 ?></td>
            <td><?php echo $M18_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M19 > 0) { ?>
        <tr>
            <td>Otras Artrosis</td>
            <td><?php echo $M19 ?></td>
            <td><?php echo $M19_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M20 > 0) { ?>
        <tr>
            <td>Deformidades Adquiridas De Los Dedos De La Mano Y Del Pie</td>
            <td><?php echo $M20 ?></td>
            <td><?php echo $M20_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M21 > 0) { ?>
        <tr>
            <td>Otras Deformidades Adquiridas De Los Miembros</td>
            <td><?php echo $M21 ?></td>
            <td><?php echo $M21_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M22 > 0) { ?>
        <tr>
            <td>Trastornos De La Rotula</td>
            <td><?php echo $M22 ?></td>
            <td><?php echo $M22_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M23 > 0) { ?>
        <tr>
            <td>Trastorno Interno De La Rodilla</td>
            <td><?php echo $M23 ?></td>
            <td><?php echo $M23_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M24 > 0) { ?>
        <tr>
            <td>Otros Trastornos Articulares Especificos</td>
            <td><?php echo $M24 ?></td>
            <td><?php echo $M24_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M25 > 0) { ?>
        <tr>
            <td>Otros Trastornos Articulares, No Clasificadas En Otra Parte</td>
            <td><?php echo $M25 ?></td>
            <td><?php echo $M25_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M30 > 0) { ?>
        <tr>
            <td>Poliarteritis Nudosa Y Afecciones Relacionadas</td>
            <td><?php echo $M30 ?></td>
            <td><?php echo $M30_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M31 > 0) { ?>
        <tr>
            <td>Otras Vasculopatias Necrotizantes</td>
            <td><?php echo $M31 ?></td>
            <td><?php echo $M31_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M32 > 0) { ?>
        <tr>
            <td>Lupus Eritematoso Sistemico</td>
            <td><?php echo $M32 ?></td>
            <td><?php echo $M32_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M33 > 0) { ?>
        <tr>
            <td>Dermatopolimiositis</td>
            <td><?php echo $M33 ?></td>
            <td><?php echo $M33_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M34 > 0) { ?>
        <tr>
            <td>Esclerosis Sistemica</td>
            <td><?php echo $M34 ?></td>
            <td><?php echo $M34_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M35 > 0) { ?>
        <tr>
            <td>Otro Compromiso Sistemico Del Tejido Conjuntivo</td>
            <td><?php echo $M35 ?></td>
            <td><?php echo $M35_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M36 > 0) { ?>
        <tr>
            <td>Trastornos Sistematicos Del Tejido Conjuntivo En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M36 ?></td>
            <td><?php echo $M36_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M40 > 0) { ?>
        <tr>
            <td>Cifosis Y Lordosis</td>
            <td><?php echo $M40 ?></td>
            <td><?php echo $M40_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M41 > 0) { ?>
        <tr>
            <td>Escoliosis</td>
            <td><?php echo $M41 ?></td>
            <td><?php echo $M41_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M42 > 0) { ?>
        <tr>
            <td>Osteocondrosis De La Columna Vertebral</td>
            <td><?php echo $M42 ?></td>
            <td><?php echo $M42_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M43 > 0) { ?>
        <tr>
            <td>Otras Dorsopatias Deformantes</td>
            <td><?php echo $M43 ?></td>
            <td><?php echo $M43_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M45 > 0) { ?>
        <tr>
            <td>Espondilitis Anquilosante</td>
            <td><?php echo $M45 ?></td>
            <td><?php echo $M45_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M46 > 0) { ?>
        <tr>
            <td>Otras Espondilopatias Inflamatorias</td>
            <td><?php echo $M46 ?></td>
            <td><?php echo $M46_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M47 > 0) { ?>
        <tr>
            <td>Espondilosis</td>
            <td><?php echo $M47 ?></td>
            <td><?php echo $M47_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M48 > 0) { ?>
        <tr>
            <td>Otras Espondilopatias</td>
            <td><?php echo $M48 ?></td>
            <td><?php echo $M48_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M49 > 0) { ?>
        <tr>
            <td>Espondilopatias En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M49 ?></td>
            <td><?php echo $M49_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M50 > 0) { ?>
        <tr>
            <td>Trastornos De Disco Cervical</td>
            <td><?php echo $M50 ?></td>
            <td><?php echo $M50_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M51 > 0) { ?>
        <tr>
            <td>Otros Trastornos De Los Discos Intervertebrales</td>
            <td><?php echo $M51 ?></td>
            <td><?php echo $M51_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M53 > 0) { ?>
        <tr>
            <td>Otras Dorsopatias, No Clasificadas En Otra Parte</td>
            <td><?php echo $M53 ?></td>
            <td><?php echo $M53_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M54 > 0) { ?>
        <tr>
            <td>Dorsalgia</td>
            <td><?php echo $M54 ?></td>
            <td><?php echo $M54_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M60 > 0) { ?>
        <tr>
            <td>Miositis</td>
            <td><?php echo $M60 ?></td>
            <td><?php echo $M60_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M61 > 0) { ?>
        <tr>
            <td>Calcificacion Y Osificacion Del Musculo</td>
            <td><?php echo $M61 ?></td>
            <td><?php echo $M61_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M62 > 0) { ?>
        <tr>
            <td>Otros Trastornos De Los Musculos</td>
            <td><?php echo $M62 ?></td>
            <td><?php echo $M62_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M63 > 0) { ?>
        <tr>
            <td>Trastornos De Los Musculos En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M63 ?></td>
            <td><?php echo $M63_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M65 > 0) { ?>
        <tr>
            <td>Sinovitis Y Tenosinovitis</td>
            <td><?php echo $M65 ?></td>
            <td><?php echo $M65_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M66 > 0) { ?>
        <tr>
            <td>Ruptura Espontanea De La Sinovia Y Del Tendon</td>
            <td><?php echo $M66 ?></td>
            <td><?php echo $M66_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M67 > 0) { ?>
        <tr>
            <td>Otros Trastornos De La Sinovia Y Del Tendon</td>
            <td><?php echo $M67 ?></td>
            <td><?php echo $M67_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M68 > 0) { ?>
        <tr>
            <td>Trastornos De Los Tendones Y De La Sinovia En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M68 ?></td>
            <td><?php echo $M68_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M70 > 0) { ?>
        <tr>
            <td>Trastornos De Los Tejido Blandos Relacionados Con El Uso, El Uso Excesivo Y La Presion</td>
            <td><?php echo $M70 ?></td>
            <td><?php echo $M70_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M71 > 0) { ?>
        <tr>
            <td>Otras Bursopatias</td>
            <td><?php echo $M71 ?></td>
            <td><?php echo $M71_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M72 > 0) { ?>
        <tr>
            <td>Trastornos Fibroblasticos</td>
            <td><?php echo $M72 ?></td>
            <td><?php echo $M72_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M73 > 0) { ?>
        <tr>
            <td>Trastornos De Los Tejidos Blandos En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M73 ?></td>
            <td><?php echo $M73_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M75 > 0) { ?>
        <tr>
            <td>Lesiones Del Hombro</td>
            <td><?php echo $M75 ?></td>
            <td><?php echo $M75_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M76 > 0) { ?>
        <tr>
            <td>Entesopatias Del Miembro Inferior, Excluido El Pie</td>
            <td><?php echo $M76 ?></td>
            <td><?php echo $M76_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M77 > 0) { ?>
        <tr>
            <td>Otras Entesopatias</td>
            <td><?php echo $M77 ?></td>
            <td><?php echo $M77_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M79 > 0) { ?>
        <tr>
            <td>Otros Trastornos De Los Tejidos Blandos, No Clasificados En Otra Parte</td>
            <td><?php echo $M79 ?></td>
            <td><?php echo $M79_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M80 > 0) { ?>
        <tr>
            <td>Osteoporosis Con Fractura Patologica</td>
            <td><?php echo $M80 ?></td>
            <td><?php echo $M80_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M81 > 0) { ?>
        <tr>
            <td>Osteoporosis Sin Fractura Patologica</td>
            <td><?php echo $M81 ?></td>
            <td><?php echo $M81_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M82 > 0) { ?>
        <tr>
            <td>Osteoporosis En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M82 ?></td>
            <td><?php echo $M82_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M83 > 0) { ?>
        <tr>
            <td>Osteomalacia Del Adulto</td>
            <td><?php echo $M83 ?></td>
            <td><?php echo $M83_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M84 > 0) { ?>
        <tr>
            <td>Trastornos De La Continuidad Del Hueso</td>
            <td><?php echo $M84 ?></td>
            <td><?php echo $M84_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M85 > 0) { ?>
        <tr>
            <td>Otros Trastornos De La Densidad Y De La Estructura Oseas</td>
            <td><?php echo $M85 ?></td>
            <td><?php echo $M85_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M86 > 0) { ?>
        <tr>
            <td>Osteomielitis</td>
            <td><?php echo $M86 ?></td>
            <td><?php echo $M86_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M87 > 0) { ?>
        <tr>
            <td>Osteonecrosis</td>
            <td><?php echo $M87 ?></td>
            <td><?php echo $M87_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M88 > 0) { ?>
        <tr>
            <td>Enfermedades De Paget De Los Huesos [Osteitis Deformante]</td>
            <td><?php echo $M88 ?></td>
            <td><?php echo $M88_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M89 > 0) { ?>
        <tr>
            <td>Otros Trastornos Del Hueso</td>
            <td><?php echo $M89 ?></td>
            <td><?php echo $M89_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M90 > 0) { ?>
        <tr>
            <td>Osteopatias En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $M90 ?></td>
            <td><?php echo $M90_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M91 > 0) { ?>
        <tr>
            <td>Osteocondrosis Juvenil De La Cadera Y De La Pelvis</td>
            <td><?php echo $M91 ?></td>
            <td><?php echo $M91_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M92 > 0) { ?>
        <tr>
            <td>Otras Osteocondrosis Juveniles</td>
            <td><?php echo $M92 ?></td>
            <td><?php echo $M92_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M93 > 0) { ?>
        <tr>
            <td>Otras Osteocondropatias</td>
            <td><?php echo $M93 ?></td>
            <td><?php echo $M93_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M94 > 0) { ?>
        <tr>
            <td>Otros Trastornos Del Cartilago</td>
            <td><?php echo $M94 ?></td>
            <td><?php echo $M94_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M95 > 0) { ?>
        <tr>
            <td>Otras Deformidades Adquiridas Del Sistema Osteomuscular Y Del Tejido Conjuntivo</td>
            <td><?php echo $M95 ?></td>
            <td><?php echo $M95_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M96 > 0) { ?>
        <tr>
            <td>Trastornos Osteomusculares Consecutivos A Procedimientos, No Clasificados En Otra Parte</td>
            <td><?php echo $M96 ?></td>
            <td><?php echo $M96_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($M99 > 0) { ?>
        <tr>
            <td>Lesiones Biomecanicas, No Clasificadas En Otra Parte</td>
            <td><?php echo $M99 ?></td>
            <td><?php echo $M99_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($S000 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del cuero cabelludo</td>
                <td><?php echo $S000 ?></td>
                <td><?php echo $S000_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S001 > 0) { ?>
            <tr>
                <td>Contusion de los parpados y de la region periocular</td>
                <td><?php echo $S001 ?></td>
                <td><?php echo $S001_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S002 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales del parpado y de la region periocular</td>
                <td><?php echo $S002 ?></td>
                <td><?php echo $S002_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S003 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de la nariz</td>
                <td><?php echo $S003 ?></td>
                <td><?php echo $S003_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S004 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del oido</td>
                <td><?php echo $S004 ?></td>
                <td><?php echo $S004_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S005 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del labio y de la cavidad bucal</td>
                <td><?php echo $S005 ?></td>
                <td><?php echo $S005_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S007 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples de la cabeza</td>
                <td><?php echo $S007 ?></td>
                <td><?php echo $S007_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S008 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de otras partes de la cabeza</td>
                <td><?php echo $S008 ?></td>
                <td><?php echo $S008_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S009 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de la cabeza, parte no especificada</td>
                <td><?php echo $S009 ?></td>
                <td><?php echo $S009_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S010 > 0) { ?>
            <tr>
                <td>Herida del cuero cabelludo</td>
                <td><?php echo $S010 ?></td>
                <td><?php echo $S010_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S011 > 0) { ?>
            <tr>
                <td>Herida del parpado y de la region periocular</td>
                <td><?php echo $S011 ?></td>
                <td><?php echo $S011_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S012 > 0) { ?>
            <tr>
                <td>Herida de la nariz</td>
                <td><?php echo $S012 ?></td>
                <td><?php echo $S012_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S013 > 0) { ?>
            <tr>
                <td>Herida del oido</td>
                <td><?php echo $S013 ?></td>
                <td><?php echo $S013_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S014 > 0) { ?>
            <tr>
                <td>Herida de la mejilla y de la region temporomandibular</td>
                <td><?php echo $S014 ?></td>
                <td><?php echo $S014_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S015 > 0) { ?>
            <tr>
                <td>Herida del labio y de la cavidad bucal</td>
                <td><?php echo $S015 ?></td>
                <td><?php echo $S015_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S017 > 0) { ?>
            <tr>
                <td>Heridas multiples de la cabeza</td>
                <td><?php echo $S017 ?></td>
                <td><?php echo $S017_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S018 > 0) { ?>
            <tr>
                <td>Herida de otras partes de la cabeza</td>
                <td><?php echo $S018 ?></td>
                <td><?php echo $S018_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S019 > 0) { ?>
            <tr>
                <td>Herida de la cabeza, parte no especificada</td>
                <td><?php echo $S019 ?></td>
                <td><?php echo $S019_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S020 > 0) { ?>
            <tr>
                <td>Fractura de la boveda del craneo</td>
                <td><?php echo $S020 ?></td>
                <td><?php echo $S020_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S021 > 0) { ?>
            <tr>
                <td>Fractura de la base del craneo</td>
                <td><?php echo $S021 ?></td>
                <td><?php echo $S021_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S022 > 0) { ?>
            <tr>
                <td>Fractura de los huesos de la nariz</td>
                <td><?php echo $S022 ?></td>
                <td><?php echo $S022_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S023 > 0) { ?>
            <tr>
                <td>Fractura del suelo de la orbita</td>
                <td><?php echo $S023 ?></td>
                <td><?php echo $S023_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S024 > 0) { ?>
            <tr>
                <td>Fractura del malar y del hueso maxilar superior</td>
                <td><?php echo $S024 ?></td>
                <td><?php echo $S024_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S025 > 0) { ?>
            <tr>
                <td>Fractura de los dientes</td>
                <td><?php echo $S025 ?></td>
                <td><?php echo $S025_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S26 > 0) { ?>
            <tr>
                <td>Fractura del maxilar inferior</td>
                <td><?php echo $S26 ?></td>
                <td><?php echo $S26_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S027 > 0) { ?>
            <tr>
                <td>Fracturas multiples que comprometen el craneo y los huesos de la cara</td>
                <td><?php echo $S027 ?></td>
                <td><?php echo $S027_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S028 > 0) { ?>
            <tr>
                <td>Fractura de otros huesos del craneo y de la cara</td>
                <td><?php echo $S028 ?></td>
                <td><?php echo $S028_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S029 > 0) { ?>
            <tr>
                <td>Fractura del craneo y de los huesos de la cara, parte no especificada</td>
                <td><?php echo $S029 ?></td>
                <td><?php echo $S029_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S030 > 0) { ?>
            <tr>
                <td>Luxacion del maxilar</td>
                <td><?php echo $S030 ?></td>
                <td><?php echo $S030_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S031 > 0) { ?>
            <tr>
                <td>Luxacion del cartilago septal de la nariz</td>
                <td><?php echo $S031 ?></td>
                <td><?php echo $S031_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S032 > 0) { ?>
            <tr>
                <td>Luxacion de diente</td>
                <td><?php echo $S032 ?></td>
                <td><?php echo $S032_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S033 > 0) { ?>
            <tr>
                <td>Luxacion de otras partes y de las no especificadas de la cabeza</td>
                <td><?php echo $S033 ?></td>
                <td><?php echo $S033_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S034 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras del maxilar</td>
                <td><?php echo $S034 ?></td>
                <td><?php echo $S034_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S035 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de articulaciones y ligamentos de otras partes y las no especificadas de la cabeza</td>
                <td><?php echo $S035 ?></td>
                <td><?php echo $S035_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S040 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio optico [II par] y de las vias opticas</td>
                <td><?php echo $S040 ?></td>
                <td><?php echo $S040_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S041 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio motor ocular comun [III par]</td>
                <td><?php echo $S041 ?></td>
                <td><?php echo $S041_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S042 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio patetico [IV par]</td>
                <td><?php echo $S042 ?></td>
                <td><?php echo $S042_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S043 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio trigemino [V par]</td>
                <td><?php echo $S043 ?></td>
                <td><?php echo $S043_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S044 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio motor ocular externo [VI par]</td>
                <td><?php echo $S044 ?></td>
                <td><?php echo $S044_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S045 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio facial [VII par]</td>
                <td><?php echo $S045 ?></td>
                <td><?php echo $S045_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S046 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio acustico [VIII par]</td>
                <td><?php echo $S046 ?></td>
                <td><?php echo $S046_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S047 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio espinal [XI par]</td>
                <td><?php echo $S047 ?></td>
                <td><?php echo $S047_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S048 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios craneales</td>
                <td><?php echo $S048 ?></td>
                <td><?php echo $S048_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S049 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios craneales, no espec} ificado</td>
                <td><?php echo $S049 ?></td>
                <td><?php echo $S049_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S050 > 0) { ?>
            <tr>
                <td>Traumatismo de la conjuntiva y abrasion corneal sin mencion de cuerpo extrano</td>
                <td><?php echo $S050 ?></td>
                <td><?php echo $S050_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S051 > 0) { ?>
            <tr>
                <td>Contusion del globo ocular y del tejido orbitario</td>
                <td><?php echo $S051 ?></td>
                <td><?php echo $S051_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S052 > 0) { ?>
            <tr>
                <td>Laceracion y ruptura ocular con prolapso o perdida del tejido intraocular</td>
                <td><?php echo $S052 ?></td>
                <td><?php echo $S052_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S053 > 0) { ?>
            <tr>
                <td>Laceracion ocular sin prolapso o perdida del tejido intraocular</td>
                <td><?php echo $S053 ?></td>
                <td><?php echo $S053_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S054 > 0) { ?>
            <tr>
                <td>Herida penetrante de la orbita con o sin cuerpo extrano</td>
                <td><?php echo $S054 ?></td>
                <td><?php echo $S054_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S055 > 0) { ?>
            <tr>
                <td>Herida penetrante del globo ocular con cuerpo extrano</td>
                <td><?php echo $S055 ?></td>
                <td><?php echo $S055_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S056 > 0) { ?>
            <tr>
                <td>Herida penetrante del globo ocular sin cuerpo extrano</td>
                <td><?php echo $S056 ?></td>
                <td><?php echo $S056_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S057 > 0) { ?>
            <tr>
                <td>Avulsion de ojo</td>
                <td><?php echo $S057 ?></td>
                <td><?php echo $S057_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S058 > 0) { ?>
            <tr>
                <td>Otros traumatismos del ojo y de la orbita</td>
                <td><?php echo $S058 ?></td>
                <td><?php echo $S058_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S059 > 0) { ?>
            <tr>
                <td>Traumatismo del ojo y de la orbita, no espec} ificado</td>
                <td><?php echo $S059 ?></td>
                <td><?php echo $S059_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S060 > 0) { ?>
            <tr>
                <td>Concusion</td>
                <td><?php echo $S060 ?></td>
                <td><?php echo $S060_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S061 > 0) { ?>
            <tr>
                <td>Edema cerebral traumatico</td>
                <td><?php echo $S061 ?></td>
                <td><?php echo $S061_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S062 > 0) { ?>
            <tr>
                <td>Traumatismo cerebral d} ifuso</td>
                <td><?php echo $S062 ?></td>
                <td><?php echo $S062_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S063 > 0) { ?>
            <tr>
                <td>Traumatismo cerebral focal</td>
                <td><?php echo $S063 ?></td>
                <td><?php echo $S063_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S064 > 0) { ?>
            <tr>
                <td>Hemorragia epidural</td>
                <td><?php echo $S064 ?></td>
                <td><?php echo $S064_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S065 > 0) { ?>
            <tr>
                <td>Hemorragia subdural traumatica</td>
                <td><?php echo $S065 ?></td>
                <td><?php echo $S065_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S066 > 0) { ?>
            <tr>
                <td>Hemorragia subaracnoidea traumatica</td>
                <td><?php echo $S066 ?></td>
                <td><?php echo $S066_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S067 > 0) { ?>
            <tr>
                <td>Traumatismo intracraneal con coma prolongado</td>
                <td><?php echo $S067 ?></td>
                <td><?php echo $S067_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S068 > 0) { ?>
            <tr>
                <td>Otros traumatismos intracraneales</td>
                <td><?php echo $S068 ?></td>
                <td><?php echo $S068_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S069 > 0) { ?>
            <tr>
                <td>Traumatismo intracraneal, no espec} ificado</td>
                <td><?php echo $S069 ?></td>
                <td><?php echo $S069_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S070 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la cara</td>
                <td><?php echo $S070 ?></td>
                <td><?php echo $S070_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S071 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del craneo</td>
                <td><?php echo $S071 ?></td>
                <td><?php echo $S071_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S078 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes de la cabeza</td>
                <td><?php echo $S078 ?></td>
                <td><?php echo $S078_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S079 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la cabeza, parte no especificada</td>
                <td><?php echo $S079 ?></td>
                <td><?php echo $S079_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S080 > 0) { ?>
            <tr>
                <td>Avulsion del cuero cabelludo</td>
                <td><?php echo $S080 ?></td>
                <td><?php echo $S080_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S081 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de la oreja</td>
                <td><?php echo $S081 ?></td>
                <td><?php echo $S081_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S088 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de otras partes de la cabeza</td>
                <td><?php echo $S088 ?></td>
                <td><?php echo $S088_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S089 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de parte no especificada de la cabeza</td>
                <td><?php echo $S089 ?></td>
                <td><?php echo $S089_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S090 > 0) { ?>
            <tr>
                <td>Traumatismo de los vasos sanguineos de la cabeza no clas} ificados en otra parte</td>
                <td><?php echo $S090 ?></td>
                <td><?php echo $S090_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S091 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculos de la cabeza</td>
                <td><?php echo $S091 ?></td>
                <td><?php echo $S091_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S092 > 0) { ?>
            <tr>
                <td>Ruptura traumatica del timpano del oido</td>
                <td><?php echo $S092 ?></td>
                <td><?php echo $S092_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S097 > 0) { ?>
            <tr>
                <td>Traumatismos multiples de la cabeza</td>
                <td><?php echo $S097 ?></td>
                <td><?php echo $S097_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S098 > 0) { ?>
            <tr>
                <td>Otros traumatismos de la cabeza, espec} ificados</td>
                <td><?php echo $S098 ?></td>
                <td><?php echo $S098_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S099 > 0) { ?>
            <tr>
                <td>Traumatismo de la cabeza, no espec} ificado</td>
                <td><?php echo $S099 ?></td>
                <td><?php echo $S099_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S100 > 0) { ?>
            <tr>
                <td>Contusion de la garganta</td>
                <td><?php echo $S100 ?></td>
                <td><?php echo $S100_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S101 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales y los no especificados de la garganta</td>
                <td><?php echo $S101 ?></td>
                <td><?php echo $S101_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S107 > 0) { ?>
            <tr>
                <td>Traumatismo superficial multiple del cuello</td>
                <td><?php echo $S107 ?></td>
                <td><?php echo $S107_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S108 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de otras partes del cuello</td>
                <td><?php echo $S108 ?></td>
                <td><?php echo $S108_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S109 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del cuello, parte no especificada</td>
                <td><?php echo $S109 ?></td>
                <td><?php echo $S109_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S110 > 0) { ?>
            <tr>
                <td>Herida que compromete la laringe y la traquea</td>
                <td><?php echo $S110 ?></td>
                <td><?php echo $S110_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S111 > 0) { ?>
            <tr>
                <td>Herida que compromete la glandula tiroides</td>
                <td><?php echo $S111 ?></td>
                <td><?php echo $S111_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S112 > 0) { ?>
            <tr>
                <td>Herida que compromete la faringe y el esofago cervical</td>
                <td><?php echo $S112 ?></td>
                <td><?php echo $S112_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S117 > 0) { ?>
            <tr>
                <td>Heridas multiples del cuello</td>
                <td><?php echo $S117 ?></td>
                <td><?php echo $S117_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S118 > 0) { ?>
            <tr>
                <td>Heridas de otras partes del cuello</td>
                <td><?php echo $S118 ?></td>
                <td><?php echo $S118_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S119 > 0) { ?>
            <tr>
                <td>Herida de cuello, parte no especificada</td>
                <td><?php echo $S119 ?></td>
                <td><?php echo $S119_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S120 > 0) { ?>
            <tr>
                <td>Fractura de la primera vertebra cervical</td>
                <td><?php echo $S120 ?></td>
                <td><?php echo $S120_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S121 > 0) { ?>
            <tr>
                <td>Fractura de la segunda vertebra cervical</td>
                <td><?php echo $S121 ?></td>
                <td><?php echo $S121_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S122 > 0) { ?>
            <tr>
                <td>Fractura de otras vertebras cervicales especificadas</td>
                <td><?php echo $S122 ?></td>
                <td><?php echo $S122_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S127 > 0) { ?>
            <tr>
                <td>Fracturas multiples de columna cervical</td>
                <td><?php echo $S127 ?></td>
                <td><?php echo $S127_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S128 > 0) { ?>
            <tr>
                <td>Fractura de otras partes del cuello</td>
                <td><?php echo $S128 ?></td>
                <td><?php echo $S128_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S129 > 0) { ?>
            <tr>
                <td>Fractura del cuello, parte no especificada</td>
                <td><?php echo $S129 ?></td>
                <td><?php echo $S129_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S130 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de disco cervical intervertebral</td>
                <td><?php echo $S130 ?></td>
                <td><?php echo $S130_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S131 > 0) { ?>
            <tr>
                <td>Luxacion de vertebra cervical</td>
                <td><?php echo $S131 ?></td>
                <td><?php echo $S131_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S132 > 0) { ?>
            <tr>
                <td>Luxaciones de otras partes y de las no especificadas del cuello</td>
                <td><?php echo $S132 ?></td>
                <td><?php echo $S132_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S133 > 0) { ?>
            <tr>
                <td>Luxaciones multiples del cuello</td>
                <td><?php echo $S133 ?></td>
                <td><?php echo $S133_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S134 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la columna cervical</td>
                <td><?php echo $S134 ?></td>
                <td><?php echo $S134_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S135 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la region tiroidea</td>
                <td><?php echo $S135 ?></td>
                <td><?php echo $S135_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S136 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de articulaciones y ligamentos de otros sitios especificados y de los no especificados del cuello</td>
                <td><?php echo $S136 ?></td>
                <td><?php echo $S136_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S140 > 0) { ?>
            <tr>
                <td>Concusion y edema de la medula espinal cervical</td>
                <td><?php echo $S140 ?></td>
                <td><?php echo $S140_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S141 > 0) { ?>
            <tr>
                <td>Otros traumatismos de la medula espinal cervical y los no especificados</td>
                <td><?php echo $S141 ?></td>
                <td><?php echo $S141_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S142 > 0) { ?>
            <tr>
                <td>Traumatismo de raiz nerviosa de columna cervical</td>
                <td><?php echo $S142 ?></td>
                <td><?php echo $S142_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S143 > 0) { ?>
            <tr>
                <td>Traumatismo del plexo braquial</td>
                <td><?php echo $S143 ?></td>
                <td><?php echo $S143_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S144 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios perifericos del cuello</td>
                <td><?php echo $S144 ?></td>
                <td><?php echo $S144_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S145 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios cervicales simpaticos</td>
                <td><?php echo $S145 ?></td>
                <td><?php echo $S145_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S146 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios y de los no especificados del cuello</td>
                <td><?php echo $S146 ?></td>
                <td><?php echo $S146_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S150 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria carotida</td>
                <td><?php echo $S150 ?></td>
                <td><?php echo $S150_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S151 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria vertebral</td>
                <td><?php echo $S151 ?></td>
                <td><?php echo $S151_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S152 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena yugular externa</td>
                <td><?php echo $S152 ?></td>
                <td><?php echo $S152_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S153 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena yugular interna</td>
                <td><?php echo $S153 ?></td>
                <td><?php echo $S153_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S157 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel del cuello</td>
                <td><?php echo $S157 ?></td>
                <td><?php echo $S157_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S158 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel del cuello</td>
                <td><?php echo $S158 ?></td>
                <td><?php echo $S158_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S159 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos no especificados a nivel del cuello</td>
                <td><?php echo $S159 ?></td>
                <td><?php echo $S159_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S16X > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculos a nivel del cuello</td>
                <td><?php echo $S16X ?></td>
                <td><?php echo $S16X_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S170 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la laringe y de la traquea</td>
                <td><?php echo $S170 ?></td>
                <td><?php echo $S170_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S178 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes del cuello</td>
                <td><?php echo $S178 ?></td>
                <td><?php echo $S178_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S179 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del cuello, parte no especificada</td>
                <td><?php echo $S179 ?></td>
                <td><?php echo $S179_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S18X > 0) { ?>
            <tr>
                <td>Amputacion traumatica a nivel del cuello</td>
                <td><?php echo $S18X ?></td>
                <td><?php echo $S18X_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S197 > 0) { ?>
            <tr>
                <td>Traumatismos multiples del cuello</td>
                <td><?php echo $S197 ?></td>
                <td><?php echo $S197_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S198 > 0) { ?>
            <tr>
                <td>Otros traumatismos del cuello, especificados</td>
                <td><?php echo $S198 ?></td>
                <td><?php echo $S198_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S199 > 0) { ?>
            <tr>
                <td>Traumatismo del cuello, no especificado</td>
                <td><?php echo $S199 ?></td>
                <td><?php echo $S199_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S200 > 0) { ?>
            <tr>
                <td>Contusion de la mama</td>
                <td><?php echo $S200 ?></td>
                <td><?php echo $S200_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S201 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales y los no especificados de la mama</td>
                <td><?php echo $S201 ?></td>
                <td><?php echo $S201_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S202 > 0) { ?>
            <tr>
                <td>Contusion del torax</td>
                <td><?php echo $S202 ?></td>
                <td><?php echo $S202_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S203 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales de la pared anterior del torax</td>
                <td><?php echo $S203 ?></td>
                <td><?php echo $S203_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S204 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales de la pared posterior del torax</td>
                <td><?php echo $S204 ?></td>
                <td><?php echo $S204_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S207 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples del torax</td>
                <td><?php echo $S207 ?></td>
                <td><?php echo $S207_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S208 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de otras partes y de las no especificadas del torax</td>
                <td><?php echo $S208 ?></td>
                <td><?php echo $S208_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S210 > 0) { ?>
            <tr>
                <td>Herida de la mama</td>
                <td><?php echo $S210 ?></td>
                <td><?php echo $S210_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S211 > 0) { ?>
            <tr>
                <td>Herida de la pared anterior del torax</td>
                <td><?php echo $S211 ?></td>
                <td><?php echo $S211_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S212 > 0) { ?>
            <tr>
                <td>Herida de la pared posterior del torax</td>
                <td><?php echo $S212 ?></td>
                <td><?php echo $S212_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S217 > 0) { ?>
            <tr>
                <td>Herida multiple de la pared toracica</td>
                <td><?php echo $S217 ?></td>
                <td><?php echo $S217_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S218 > 0) { ?>
            <tr>
                <td>Herida de otras partes del torax</td>
                <td><?php echo $S218 ?></td>
                <td><?php echo $S218_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S219 > 0) { ?>
            <tr>
                <td>Herida del torax, parte no especificada</td>
                <td><?php echo $S219 ?></td>
                <td><?php echo $S219_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S220 > 0) { ?>
            <tr>
                <td>Fractura de vertebra toracica</td>
                <td><?php echo $S220 ?></td>
                <td><?php echo $S220_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S221 > 0) { ?>
            <tr>
                <td>Fracturas multiples de columna toracica</td>
                <td><?php echo $S221 ?></td>
                <td><?php echo $S221_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S222 > 0) { ?>
            <tr>
                <td>Fractura del esternon</td>
                <td><?php echo $S222 ?></td>
                <td><?php echo $S222_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S223 > 0) { ?>
            <tr>
                <td>Fractura de costilla</td>
                <td><?php echo $S223 ?></td>
                <td><?php echo $S223_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S224 > 0) { ?>
            <tr>
                <td>Fracturas multiples de costillas</td>
                <td><?php echo $S224 ?></td>
                <td><?php echo $S224_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S225 > 0) { ?>
            <tr>
                <td>Torax azotado</td>
                <td><?php echo $S225 ?></td>
                <td><?php echo $S225_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S228 > 0) { ?>
            <tr>
                <td>Fractura de otras partes del torax oseo</td>
                <td><?php echo $S228 ?></td>
                <td><?php echo $S228_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S229 > 0) { ?>
            <tr>
                <td>Fractura del torax oseo, parte no especificada</td>
                <td><?php echo $S229 ?></td>
                <td><?php echo $S229_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S230 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de disco intervertebral toracico</td>
                <td><?php echo $S230 ?></td>
                <td><?php echo $S230_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S231 > 0) { ?>
            <tr>
                <td>Luxacion de vertebra toracica</td>
                <td><?php echo $S231 ?></td>
                <td><?php echo $S231_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S232 > 0) { ?>
            <tr>
                <td>Luxacion de otras partes y de las no especificadas del torax</td>
                <td><?php echo $S232 ?></td>
                <td><?php echo $S232_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S233 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de columna toracica</td>
                <td><?php echo $S233 ?></td>
                <td><?php echo $S233_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S234 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de costillas y esternon</td>
                <td><?php echo $S234 ?></td>
                <td><?php echo $S234_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S235 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otras partes y de las no especificadas del torax</td>
                <td><?php echo $S235 ?></td>
                <td><?php echo $S235_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S240 > 0) { ?>
            <tr>
                <td>Concusion y edema de la medula espinal toracica</td>
                <td><?php echo $S240 ?></td>
                <td><?php echo $S240_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S241 > 0) { ?>
            <tr>
                <td>Otros traumatismos y los no especificados de la medula espinal toracica</td>
                <td><?php echo $S241 ?></td>
                <td><?php echo $S241_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S242 > 0) { ?>
            <tr>
                <td>Traumatismo de raices nerviosas de la columna toracica</td>
                <td><?php echo $S242 ?></td>
                <td><?php echo $S242_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S243 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios perifericos del torax</td>
                <td><?php echo $S243 ?></td>
                <td><?php echo $S243_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S244 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios simpaticos toracicos</td>
                <td><?php echo $S244 ?></td>
                <td><?php echo $S244_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S245 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios del torax</td>
                <td><?php echo $S245 ?></td>
                <td><?php echo $S245_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S246 > 0) { ?>
            <tr>
                <td>VZTraumatismo de nervio no especificado del torax</td>
                <td><?php echo $S246 ?></td>
                <td><?php echo $S246_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S250 > 0) { ?>
            <tr>
                <td>Traumatismo de la aorta toracica</td>
                <td><?php echo $S250 ?></td>
                <td><?php echo $S250_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S251 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria innominada o subclavia</td>
                <td><?php echo $S251 ?></td>
                <td><?php echo $S251_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S252 > 0) { ?>
            <tr>
                <td>Traumatismo de vena cava superior</td>
                <td><?php echo $S252 ?></td>
                <td><?php echo $S252_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S253 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena innominada o subclavia</td>
                <td><?php echo $S253 ?></td>
                <td><?php echo $S253_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S254 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos pulmonares</td>
                <td><?php echo $S254 ?></td>
                <td><?php echo $S254_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S255 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos intercostales</td>
                <td><?php echo $S255 ?></td>
                <td><?php echo $S255_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S257 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos del torax</td>
                <td><?php echo $S257 ?></td>
                <td><?php echo $S257_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S258 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos del torax</td>
                <td><?php echo $S258 ?></td>
                <td><?php echo $S258_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S259 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos no especificados del torax</td>
                <td><?php echo $S259 ?></td>
                <td><?php echo $S259_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S260 > 0) { ?>
            <tr>
                <td>Traumatismo del corazon con hemopericardio</td>
                <td><?php echo $S260 ?></td>
                <td><?php echo $S260_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S268 > 0) { ?>
            <tr>
                <td>Otros traumatismos del corazon</td>
                <td><?php echo $S268 ?></td>
                <td><?php echo $S268_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S269 > 0) { ?>
            <tr>
                <td>Traumatismo del corazon, no especificado</td>
                <td><?php echo $S269 ?></td>
                <td><?php echo $S269_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S270 > 0) { ?>
            <tr>
                <td>Neumotorax traumatico</td>
                <td><?php echo $S270 ?></td>
                <td><?php echo $S270_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S271 > 0) { ?>
            <tr>
                <td>Hemotorax traumatico</td>
                <td><?php echo $S271 ?></td>
                <td><?php echo $S271_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S272 > 0) { ?>
            <tr>
                <td>Hemoneumotorax traumatico</td>
                <td><?php echo $S272 ?></td>
                <td><?php echo $S272_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S273 > 0) { ?>
            <tr>
                <td>Otros traumatismos del pulmon</td>
                <td><?php echo $S273 ?></td>
                <td><?php echo $S273_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S274 > 0) { ?>
            <tr>
                <td>Traumatismo de los bronquios</td>
                <td><?php echo $S274 ?></td>
                <td><?php echo $S274_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S275 > 0) { ?>
            <tr>
                <td>Traumatismo de la traquea toracica</td>
                <td><?php echo $S275 ?></td>
                <td><?php echo $S275_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S276 > 0) { ?>
            <tr>
                <td>Traumatismo de la pleura</td>
                <td><?php echo $S276 ?></td>
                <td><?php echo $S276_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S277 > 0) { ?>
            <tr>
                <td>Traumatismos multiples de organos intratoracicos</td>
                <td><?php echo $S277 ?></td>
                <td><?php echo $S277_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S278 > 0) { ?>
            <tr>
                <td>Traumatismo de otros organos intratoracicos, especificados</td>
                <td><?php echo $S278 ?></td>
                <td><?php echo $S278_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S279 > 0) { ?>
            <tr>
                <td>Traumatismo de organo intratoracico, no especificado</td>
                <td><?php echo $S279 ?></td>
                <td><?php echo $S279_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S280 > 0) { ?>
            <tr>
                <td>Aplastamiento del torax</td>
                <td><?php echo $S280 ?></td>
                <td><?php echo $S280_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S281 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de parte del torax</td>
                <td><?php echo $S281 ?></td>
                <td><?php echo $S281_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S290 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculos a nivel del torax</td>
                <td><?php echo $S290 ?></td>
                <td><?php echo $S290_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S297 > 0) { ?>
            <tr>
                <td>Traumatismos multiples del torax</td>
                <td><?php echo $S297 ?></td>
                <td><?php echo $S297_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S298 > 0) { ?>
            <tr>
                <td>Otros traumatismos del torax, especificados</td>
                <td><?php echo $S298 ?></td>
                <td><?php echo $S298_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S299 > 0) { ?>
            <tr>
                <td>Traumatismo del torax, no especificado</td>
                <td><?php echo $S299 ?></td>
                <td><?php echo $S299_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S300 > 0) { ?>
            <tr>
                <td>Contusion de la region lumbosacra y de la pelvi</td>
                <td><?php echo $S300 ?></td>
                <td><?php echo $S300_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S301 > 0) { ?>
            <tr>
                <td>Contusion de la pared abdominal</td>
                <td><?php echo $S301 ?></td>
                <td><?php echo $S301_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S302 > 0) { ?>
            <tr>
                <td>Contusion de organos genitales externos</td>
                <td><?php echo $S302 ?></td>
                <td><?php echo $S302_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S307 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S307 ?></td>
                <td><?php echo $S307_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S308 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S308 ?></td>
                <td><?php echo $S308_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S309 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del abdomen, de la region lumbosacra y de la pelvis, parte no especificada</td>
                <td><?php echo $S309 ?></td>
                <td><?php echo $S309_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S310 > 0) { ?>
            <tr>
                <td>Herida de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S310 ?></td>
                <td><?php echo $S310_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S311 > 0) { ?>
            <tr>
                <td>Herida de la pared abdominal</td>
                <td><?php echo $S311 ?></td>
                <td><?php echo $S311_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S312 > 0) { ?>
            <tr>
                <td>Herida del pene</td>
                <td><?php echo $S312 ?></td>
                <td><?php echo $S312_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S313 > 0) { ?>
            <tr>
                <td>Herida del escroto y de los testiculos</td>
                <td><?php echo $S313 ?></td>
                <td><?php echo $S313_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S314 > 0) { ?>
            <tr>
                <td>Herida de la vagina y de la vulva</td>
                <td><?php echo $S314 ?></td>
                <td><?php echo $S314_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S315 > 0) { ?>
            <tr>
                <td>Herida de otros organos genitales externos y de los no especificados</td>
                <td><?php echo $S315 ?></td>
                <td><?php echo $S315_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S317 > 0) { ?>
            <tr>
                <td>Heridas multiples del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S317 ?></td>
                <td><?php echo $S317_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S318 > 0) { ?>
            <tr>
                <td>Heridas de otras partes y de las no especificadas del abdomen</td>
                <td><?php echo $S318 ?></td>
                <td><?php echo $S318_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S320 > 0) { ?>
            <tr>
                <td>Fractura de vertebra lumbar</td>
                <td><?php echo $S320 ?></td>
                <td><?php echo $S320_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S321 > 0) { ?>
            <tr>
                <td>Fractura del sacro</td>
                <td><?php echo $S321 ?></td>
                <td><?php echo $S321_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S322 > 0) { ?>
            <tr>
                <td>Fractura del coccix</td>
                <td><?php echo $S322 ?></td>
                <td><?php echo $S322_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S323 > 0) { ?>
            <tr>
                <td>Fractura del hueso iliaco</td>
                <td><?php echo $S323 ?></td>
                <td><?php echo $S323_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S324 > 0) { ?>
            <tr>
                <td>Fractura del acetabulo</td>
                <td><?php echo $S324 ?></td>
                <td><?php echo $S324_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S325 > 0) { ?>
            <tr>
                <td>Fractura del pubis</td>
                <td><?php echo $S325 ?></td>
                <td><?php echo $S325_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S327 > 0) { ?>
            <tr>
                <td>Fracturas multiples de la columna lumbar y de la pelvis</td>
                <td><?php echo $S327 ?></td>
                <td><?php echo $S327_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S328 > 0) { ?>
            <tr>
                <td>Fractura de otras partes y de las no especificadas de la columna lumbar y de la pelvis</td>
                <td><?php echo $S328 ?></td>
                <td><?php echo $S328_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S330 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de disco intervertebral lumbar</td>
                <td><?php echo $S330 ?></td>
                <td><?php echo $S330_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S331 > 0) { ?>
            <tr>
                <td>Luxacion de vertebra lumbar</td>
                <td><?php echo $S331 ?></td>
                <td><?php echo $S331_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S332 > 0) { ?>
            <tr>
                <td>Luxacion de articulacion sacrococcigea y sacroiliaca</td>
                <td><?php echo $S332 ?></td>
                <td><?php echo $S332_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S333 > 0) { ?>
            <tr>
                <td>Luxacion de otras partes y de las no especificadas de la columna lumbar y de la pelvis</td>
                <td><?php echo $S333 ?></td>
                <td><?php echo $S333_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S334 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de la sinfisis del pubis</td>
                <td><?php echo $S334 ?></td>
                <td><?php echo $S334_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S335 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la columna lumbar</td>
                <td><?php echo $S335 ?></td>
                <td><?php echo $S335_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S336 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la articulacion sacroiliaca</td>
                <td><?php echo $S336 ?></td>
                <td><?php echo $S336_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S337 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otras partes y de la no especificadas de la columna lumbar y de la pelvis</td>
                <td><?php echo $S337 ?></td>
                <td><?php echo $S337_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S340 > 0) { ?>
            <tr>
                <td>Concusion y edema de la medula espinal lumbar</td>
                <td><?php echo $S340 ?></td>
                <td><?php echo $S340_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S341 > 0) { ?>
            <tr>
                <td>Otro traumatismo de la medula espinal lumbar</td>
                <td><?php echo $S341 ?></td>
                <td><?php echo $S341_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S342 > 0) { ?>
            <tr>
                <td>Traumatismo de raiz nerviosa de la columna lumbar y sacra</td>
                <td><?php echo $S342 ?></td>
                <td><?php echo $S342_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S343 > 0) { ?>
            <tr>
                <td>Traumatismo de la cola de caballo</td>
                <td><?php echo $S343 ?></td>
                <td><?php echo $S343_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S344 > 0) { ?>
            <tr>
                <td>Traumatismo del plexo lumbosacro</td>
                <td><?php echo $S344 ?></td>
                <td><?php echo $S344_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S345 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios(s) simpatico(s) lumbar(es),sacro(s) y pelvico(s)</td>
                <td><?php echo $S345 ?></td>
                <td><?php echo $S345_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S346 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio(s) periferico(s) del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S346 ?></td>
                <td><?php echo $S346_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S348 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel del abdomen, de la region lumbosacra y de la pelvis y de los no especificados</td>
                <td><?php echo $S348 ?></td>
                <td><?php echo $S348_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S350 > 0) { ?>
            <tr>
                <td>Traumatismo de la aorta abdominal</td>
                <td><?php echo $S350 ?></td>
                <td><?php echo $S350_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S351 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena cava inferior</td>
                <td><?php echo $S351 ?></td>
                <td><?php echo $S351_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S352 > 0) { ?>
            <tr>
                <td>Traumatismo de arterias celiacas y mesentericas</td>
                <td><?php echo $S352 ?></td>
                <td><?php echo $S352_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S353 > 0) { ?>
            <tr>
                <td>Traumatismo de venas porta y esplenica</td>
                <td><?php echo $S353 ?></td>
                <td><?php echo $S353_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S354 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos renales</td>
                <td><?php echo $S354 ?></td>
                <td><?php echo $S354_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S355 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos iliacos</td>
                <td><?php echo $S355 ?></td>
                <td><?php echo $S355_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S357 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S357 ?></td>
                <td><?php echo $S357_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S358 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S358 ?></td>
                <td><?php echo $S358_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S359 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos no especificados a nivel del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S359 ?></td>
                <td><?php echo $S359_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S360 > 0) { ?>
            <tr>
                <td>Traumatismo del bazo</td>
                <td><?php echo $S360 ?></td>
                <td><?php echo $S360_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S361 > 0) { ?>
            <tr>
                <td>Traumatismo del higado y de la vesicula biliar</td>
                <td><?php echo $S361 ?></td>
                <td><?php echo $S361_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S362 > 0) { ?>
            <tr>
                <td>Traumatismo del pancreas</td>
                <td><?php echo $S362 ?></td>
                <td><?php echo $S362_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S363 > 0) { ?>
            <tr>
                <td>Traumatismo del estomago</td>
                <td><?php echo $S363 ?></td>
                <td><?php echo $S363_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S364 > 0) { ?>
            <tr>
                <td>Traumatismo del intestino delgado</td>
                <td><?php echo $S364 ?></td>
                <td><?php echo $S364_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S365 > 0) { ?>
            <tr>
                <td>Traumatismo del colon</td>
                <td><?php echo $S365 ?></td>
                <td><?php echo $S365_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S366 > 0) { ?>
            <tr>
                <td>Traumatismo del recto</td>
                <td><?php echo $S366 ?></td>
                <td><?php echo $S366_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S367 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples organos intraabdominales</td>
                <td><?php echo $S367 ?></td>
                <td><?php echo $S367_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S368 > 0) { ?>
            <tr>
                <td>Traumatismo de otros organos intraabdominales</td>
                <td><?php echo $S368 ?></td>
                <td><?php echo $S368_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S369 > 0) { ?>
            <tr>
                <td>Traumatismo de organo intraabdominal no especificado</td>
                <td><?php echo $S369 ?></td>
                <td><?php echo $S369_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S370 > 0) { ?>
            <tr>
                <td>Traumatismo del rinon</td>
                <td><?php echo $S370 ?></td>
                <td><?php echo $S370_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S371 > 0) { ?>
            <tr>
                <td>Traumatismo del ureter</td>
                <td><?php echo $S371 ?></td>
                <td><?php echo $S371_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S372 > 0) { ?>
            <tr>
                <td>Traumatismo de la vejiga</td>
                <td><?php echo $S372 ?></td>
                <td><?php echo $S372_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S373 > 0) { ?>
            <tr>
                <td>Traumatismo de la uretra</td>
                <td><?php echo $S373 ?></td>
                <td><?php echo $S373_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S374 > 0) { ?>
            <tr>
                <td>Traumatismo del ovario</td>
                <td><?php echo $S374 ?></td>
                <td><?php echo $S374_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S375 > 0) { ?>
            <tr>
                <td>Traumatismo de la trompa de Falopio</td>
                <td><?php echo $S375 ?></td>
                <td><?php echo $S375_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S376 > 0) { ?>
            <tr>
                <td>Traumatismo del utero</td>
                <td><?php echo $S376 ?></td>
                <td><?php echo $S376_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S377 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples organos pelvicos</td>
                <td><?php echo $S377 ?></td>
                <td><?php echo $S377_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S378 > 0) { ?>
            <tr>
                <td>Traumatismo de otros organos pelvicos</td>
                <td><?php echo $S378 ?></td>
                <td><?php echo $S378_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S379 > 0) { ?>
            <tr>
                <td>Traumatismo de organo pelvico no especificado</td>
                <td><?php echo $S379 ?></td>
                <td><?php echo $S379_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S380 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de organos genitales externos</td>
                <td><?php echo $S380 ?></td>
                <td><?php echo $S380_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S381 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes y de las no especificadas del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S381 ?></td>
                <td><?php echo $S381_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S382 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de organos genitales externos</td>
                <td><?php echo $S382 ?></td>
                <td><?php echo $S382_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S383 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de otras partes y de las no especificadas del abdomen, region lumbosacra y pelvis</td>
                <td><?php echo $S383 ?></td>
                <td><?php echo $S383_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S390 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y de musculos del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S390 ?></td>
                <td><?php echo $S390_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S396 > 0) { ?>
            <tr>
                <td>Traumatismo de organo(s) intraabdominal(es) con organo(s) pelvico(s)</td>
                <td><?php echo $S396 ?></td>
                <td><?php echo $S396_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S397 > 0) { ?>
            <tr>
                <td>Otros traumatismos multiples del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S397 ?></td>
                <td><?php echo $S397_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S398 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S398 ?></td>
                <td><?php echo $S398_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S399 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $S399 ?></td>
                <td><?php echo $S399_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S400 > 0) { ?>
            <tr>
                <td>Contusion del hombro y del brazo</td>
                <td><?php echo $S400 ?></td>
                <td><?php echo $S400_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S407 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples del hombro y del brazo</td>
                <td><?php echo $S407 ?></td>
                <td><?php echo $S407_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S408 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales del hombro y del brazo</td>
                <td><?php echo $S408 ?></td>
                <td><?php echo $S408_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S409 > 0) { ?>
            <tr>
                <td>Traumatismo superficial no especificado del hombro y del brazo</td>
                <td><?php echo $S409 ?></td>
                <td><?php echo $S409_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S410 > 0) { ?>
            <tr>
                <td>Herida del hombro</td>
                <td><?php echo $S410 ?></td>
                <td><?php echo $S410_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S411 > 0) { ?>
            <tr>
                <td>Herida del brazo</td>
                <td><?php echo $S411 ?></td>
                <td><?php echo $S411_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S417 > 0) { ?>
            <tr>
                <td>Heridas multiples del hombro y del brazo</td>
                <td><?php echo $S417 ?></td>
                <td><?php echo $S417_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S418 > 0) { ?>
            <tr>
                <td>Herida de otras partes y de las no especificadas del hombro y del brazo</td>
                <td><?php echo $S418 ?></td>
                <td><?php echo $S418_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S420 > 0) { ?>
            <tr>
                <td>Fractura de la clavicula</td>
                <td><?php echo $S420 ?></td>
                <td><?php echo $S420_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S421 > 0) { ?>
            <tr>
                <td>Fractura del omoplato</td>
                <td><?php echo $S421 ?></td>
                <td><?php echo $S421_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S422 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis superior del humero</td>
                <td><?php echo $S422 ?></td>
                <td><?php echo $S422_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S423 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis del humero</td>
                <td><?php echo $S423 ?></td>
                <td><?php echo $S423_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S424 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis inferior del humero</td>
                <td><?php echo $S424 ?></td>
                <td><?php echo $S424_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S427 > 0) { ?>
            <tr>
                <td>Fracturas multiples de la clavicula, del omoplato y del humero</td>
                <td><?php echo $S427 ?></td>
                <td><?php echo $S427_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S428 > 0) { ?>
            <tr>
                <td>Fractura de otras partes del hombro y del brazo</td>
                <td><?php echo $S428 ?></td>
                <td><?php echo $S428_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S429 > 0) { ?>
            <tr>
                <td>Fractura del hombro y del brazo, parte no especificada</td>
                <td><?php echo $S429 ?></td>
                <td><?php echo $S429_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S430 > 0) { ?>
            <tr>
                <td>Luxacion de la articulacion del hombro</td>
                <td><?php echo $S430 ?></td>
                <td><?php echo $S430_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S431 > 0) { ?>
            <tr>
                <td>Luxacion de la articulacion acromioclavicular</td>
                <td><?php echo $S431 ?></td>
                <td><?php echo $S431_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S432 > 0) { ?>
            <tr>
                <td>Luxacion de la articulacion esternoclavicular</td>
                <td><?php echo $S432 ?></td>
                <td><?php echo $S432_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S433 > 0) { ?>
            <tr>
                <td>Luxacion de otras partes de la cintura escapular y de las no especificadas</td>
                <td><?php echo $S433 ?></td>
                <td><?php echo $S433_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S434 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la articulacion del hombro</td>
                <td><?php echo $S434 ?></td>
                <td><?php echo $S434_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S435 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la articulacion acromioclavicular</td>
                <td><?php echo $S435 ?></td>
                <td><?php echo $S435_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S436 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la articulacion esternoclavicular</td>
                <td><?php echo $S436 ?></td>
                <td><?php echo $S436_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S437 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otras partes y de las no especificadas de la cintura escapular</td>
                <td><?php echo $S437 ?></td>
                <td><?php echo $S437_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S440 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio cubital a nivel del brazo</td>
                <td><?php echo $S440 ?></td>
                <td><?php echo $S440_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S441 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio mediano a nivel del brazo</td>
                <td><?php echo $S441 ?></td>
                <td><?php echo $S441_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S442 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio radial a nivel del brazo</td>
                <td><?php echo $S442 ?></td>
                <td><?php echo $S442_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S443 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio axilar</td>
                <td><?php echo $S443 ?></td>
                <td><?php echo $S443_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S444 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio musculocutaneo</td>
                <td><?php echo $S444 ?></td>
                <td><?php echo $S444_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S445 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio sensitivo cutaneo a nivel del hombro y del brazo</td>
                <td><?php echo $S445 ?></td>
                <td><?php echo $S445_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S447 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples nervios a nivel del hombro y del brazo</td>
                <td><?php echo $S447 ?></td>
                <td><?php echo $S447_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S448 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel del hombro y del brazo</td>
                <td><?php echo $S448 ?></td>
                <td><?php echo $S448_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S449 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel del hombro y del brazo</td>
                <td><?php echo $S449 ?></td>
                <td><?php echo $S449_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S450 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria axilar</td>
                <td><?php echo $S450 ?></td>
                <td><?php echo $S450_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S451 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria braquial</td>
                <td><?php echo $S451 ?></td>
                <td><?php echo $S451_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S452 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena axilar o braquial</td>
                <td><?php echo $S452 ?></td>
                <td><?php echo $S452_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S453 > 0) { ?>
            <tr>
                <td>Traumatismo de vena superficial a nivel del hombro y del brazo</td>
                <td><?php echo $S453 ?></td>
                <td><?php echo $S453_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S457 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel del hombro y del brazo</td>
                <td><?php echo $S457 ?></td>
                <td><?php echo $S457_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S458 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel del hombro y del brazo</td>
                <td><?php echo $S458 ?></td>
                <td><?php echo $S458_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S459 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado a nivel del hombro y del brazo</td>
                <td><?php echo $S459 ?></td>
                <td><?php echo $S459_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S460 > 0) { ?>
            <tr>
                <td>Traumatismo del musculo(s) y tendon(es) del manguito rotatorio del hombro</td>
                <td><?php echo $S460 ?></td>
                <td><?php echo $S460_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S461 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo de la cabeza larga del biceps</td>
                <td><?php echo $S461 ?></td>
                <td><?php echo $S461_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S462 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo de otras partes del biceps</td>
                <td><?php echo $S462 ?></td>
                <td><?php echo $S462_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S463 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo del triceps</td>
                <td><?php echo $S463 ?></td>
                <td><?php echo $S463_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S467 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos a nivel del hombro y del brazo</td>
                <td><?php echo $S467 ?></td>
                <td><?php echo $S467_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S468 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos a nivel del hombro y del brazo</td>
                <td><?php echo $S468 ?></td>
                <td><?php echo $S468_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S469 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculo no especificado, a nivel del hombro y del brazo</td>
                <td><?php echo $S469 ?></td>
                <td><?php echo $S469_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S47X > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del hombro y del brazo</td>
                <td><?php echo $S47X ?></td>
                <td><?php echo $S47X_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S480 > 0) { ?>
            <tr>
                <td>Amputacion traumatica en la articulacion del hombro</td>
                <td><?php echo $S480 ?></td>
                <td><?php echo $S480_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S481 > 0) { ?>
            <tr>
                <td>Amputacion traumatica a nivel entre el hombro y el codo</td>
                <td><?php echo $S481 ?></td>
                <td><?php echo $S481_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S489 > 0) { ?>
            <tr>
                <td>Amputacion traumatica del hombro y del brazo, nivel no especificado</td>
                <td><?php echo $S489 ?></td>
                <td><?php echo $S489_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S497 > 0) { ?>
            <tr>
                <td>Traumatismos multiples del hombro y del brazo</td>
                <td><?php echo $S497 ?></td>
                <td><?php echo $S497_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S498 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados del hombro y del brazo</td>
                <td><?php echo $S498 ?></td>
                <td><?php echo $S498_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S499 > 0) { ?>
            <tr>
                <td>Traumatismos no especificados del hombro y del brazo</td>
                <td><?php echo $S499 ?></td>
                <td><?php echo $S499_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S500 > 0) { ?>
            <tr>
                <td>Contusion del codo</td>
                <td><?php echo $S500 ?></td>
                <td><?php echo $S500_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S501 > 0) { ?>
            <tr>
                <td>Contusion de otras partes del antebrazo y de las no especificadas</td>
                <td><?php echo $S501 ?></td>
                <td><?php echo $S501_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S507 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples del antebrazo</td>
                <td><?php echo $S507 ?></td>
                <td><?php echo $S507_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S508 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales del antebrazo</td>
                <td><?php echo $S508 ?></td>
                <td><?php echo $S508_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S509 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del antebrazo, no especificado</td>
                <td><?php echo $S509 ?></td>
                <td><?php echo $S509_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S510 > 0) { ?>
            <tr>
                <td>Herida del codo</td>
                <td><?php echo $S510 ?></td>
                <td><?php echo $S510_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S517 > 0) { ?>
            <tr>
                <td>Heridas multiples del antebrazo</td>
                <td><?php echo $S517 ?></td>
                <td><?php echo $S517_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S518 > 0) { ?>
            <tr>
                <td>Herida de otras partes del antebrazo</td>
                <td><?php echo $S518 ?></td>
                <td><?php echo $S518_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S519 > 0) { ?>
            <tr>
                <td>Herida del antebrazo, parte no especificada</td>
                <td><?php echo $S519 ?></td>
                <td><?php echo $S519_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S520 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis superior del cubito</td>
                <td><?php echo $S520 ?></td>
                <td><?php echo $S520_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S521 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis superior del radio</td>
                <td><?php echo $S521 ?></td>
                <td><?php echo $S521_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S522 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis del cubito</td>
                <td><?php echo $S522 ?></td>
                <td><?php echo $S522_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S523 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis del radio</td>
                <td><?php echo $S523 ?></td>
                <td><?php echo $S523_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S524 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis del cubito y del radio</td>
                <td><?php echo $S524 ?></td>
                <td><?php echo $S524_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S525 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis inferior del radio</td>
                <td><?php echo $S525 ?></td>
                <td><?php echo $S525_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S526 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis inferior del cubito y del radio</td>
                <td><?php echo $S526 ?></td>
                <td><?php echo $S526_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S527 > 0) { ?>
            <tr>
                <td>Fracturas multiples del antebrazo</td>
                <td><?php echo $S527 ?></td>
                <td><?php echo $S527_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S528 > 0) { ?>
            <tr>
                <td>Fractura de otras partes del antebrazo</td>
                <td><?php echo $S528 ?></td>
                <td><?php echo $S528_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S529 > 0) { ?>
            <tr>
                <td>Fractura del antebrazo, parte no especificada</td>
                <td><?php echo $S529 ?></td>
                <td><?php echo $S529_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S530 > 0) { ?>
            <tr>
                <td>Luxacion de la cabeza del radio</td>
                <td><?php echo $S530 ?></td>
                <td><?php echo $S530_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S531 > 0) { ?>
            <tr>
                <td>Luxacion del codo, no especificada</td>
                <td><?php echo $S531 ?></td>
                <td><?php echo $S531_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S532 > 0) { ?>
            <tr>
                <td>Ruptura traumatica del ligamento lateral del radio</td>
                <td><?php echo $S532 ?></td>
                <td><?php echo $S532_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S533 > 0) { ?>
            <tr>
                <td>Ruptura traumatica del ligamento lateral del cubito</td>
                <td><?php echo $S533 ?></td>
                <td><?php echo $S533_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S534 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras del codo</td>
                <td><?php echo $S534 ?></td>
                <td><?php echo $S534_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S540 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio cubital a nivel del antebrazo</td>
                <td><?php echo $S540 ?></td>
                <td><?php echo $S540_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S541 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio mediano a nivel del antebrazo</td>
                <td><?php echo $S541 ?></td>
                <td><?php echo $S541_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S542 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio radial a nivel del antebrazo</td>
                <td><?php echo $S542 ?></td>
                <td><?php echo $S542_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S543 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio sensorial cutaneo a nivel del antebrazo</td>
                <td><?php echo $S543 ?></td>
                <td><?php echo $S543_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S547 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples nervios a nivel del antebrazo</td>
                <td><?php echo $S547 ?></td>
                <td><?php echo $S547_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S548 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel del antebrazo</td>
                <td><?php echo $S548 ?></td>
                <td><?php echo $S548_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S549 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel del antebrazo</td>
                <td><?php echo $S549 ?></td>
                <td><?php echo $S549_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S550 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria cubital a nivel del antebrazo</td>
                <td><?php echo $S550 ?></td>
                <td><?php echo $S550_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S551 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria radial a nivel del antebrazo</td>
                <td><?php echo $S551 ?></td>
                <td><?php echo $S551_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S552 > 0) { ?>
            <tr>
                <td>Traumatismo de vena a nivel del antebrazo</td>
                <td><?php echo $S552 ?></td>
                <td><?php echo $S552_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S557 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel del antebrazo</td>
                <td><?php echo $S557 ?></td>
                <td><?php echo $S557_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S558 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel del antebrazo</td>
                <td><?php echo $S558 ?></td>
                <td><?php echo $S558_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S559 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado a nivel del antebrazo</td>
                <td><?php echo $S559 ?></td>
                <td><?php echo $S559_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S560 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo flexor del pulgar a nivel del antebrazo</td>
                <td><?php echo $S560 ?></td>
                <td><?php echo $S560_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S561 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo flexor de otro(s) dedo(s) a nivel del antebrazo</td>
                <td><?php echo $S561 ?></td>
                <td><?php echo $S561_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S562 > 0) { ?>
            <tr>
                <td>Traumatismo de otro tendon y musculo flexor a nivel del antebrazo</td>
                <td><?php echo $S562 ?></td>
                <td><?php echo $S562_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S563 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos abductores y extensores del pulgar a nivel del antebrazo</td>
                <td><?php echo $S563 ?></td>
                <td><?php echo $S563_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S564 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo extensor de otro(s) dedo(s) a nivel del antebrazo</td>
                <td><?php echo $S564 ?></td>
                <td><?php echo $S564_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S565 > 0) { ?>
            <tr>
                <td>Traumatismo de otro tendon y musculo extensor a nivel del antebrazo</td>
                <td><?php echo $S565 ?></td>
                <td><?php echo $S565_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S567 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos a nivel del antebrazo</td>
                <td><?php echo $S567 ?></td>
                <td><?php echo $S567_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S568 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos y de los no especificados, a nivel del antebrazo</td>
                <td><?php echo $S568 ?></td>
                <td><?php echo $S568_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S570 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del codo</td>
                <td><?php echo $S570 ?></td>
                <td><?php echo $S570_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S578 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes del antebrazo</td>
                <td><?php echo $S578 ?></td>
                <td><?php echo $S578_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S579 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del antebrazo, parte no especificada</td>
                <td><?php echo $S579 ?></td>
                <td><?php echo $S579_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S580 > 0) { ?>
            <tr>
                <td>Amputacion traumatica a nivel del codo</td>
                <td><?php echo $S580 ?></td>
                <td><?php echo $S580_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S581 > 0) { ?>
            <tr>
                <td>Amputacion traumatica nivel entre el codo y la muneca</td>
                <td><?php echo $S581 ?></td>
                <td><?php echo $S581_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S589 > 0) { ?>
            <tr>
                <td>Amputacion traumatica del antebrazo, nivel no especificado</td>
                <td><?php echo $S589 ?></td>
                <td><?php echo $S589_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S597 > 0) { ?>
            <tr>
                <td>Otros Traumatismos multiples del antebrazo</td>
                <td><?php echo $S597 ?></td>
                <td><?php echo $S597_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S598 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados del antebrazo</td>
                <td><?php echo $S598 ?></td>
                <td><?php echo $S598_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S599 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado del antebrazo</td>
                <td><?php echo $S599 ?></td>
                <td><?php echo $S599_porcentaje_t ?> %</td>
            </tr>       
       <?php } if ($S600 > 0) { ?>
            <tr>
                <td>Contusion de dedo(s) de la mano, sin dano de la(s) una(s)</td>
                <td><?php echo $S600 ?></td>
                <td><?php echo $S600_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S601 > 0) { ?>
            <tr>
                <td>Contusion de dedo(s) de la mano con dano de la(s) una(s)</td>
                <td><?php echo $S601 ?></td>
                <td><?php echo $S601_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S602 > 0) { ?>
            <tr>
                <td>Contusion de otras partes de la muneca y de la mano</td>
                <td><?php echo $S602 ?></td>
                <td><?php echo $S602_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S607 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples de la muneca y de la mano</td>
                <td><?php echo $S607 ?></td>
                <td><?php echo $S607_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S608 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales de la muneca y de la mano</td>
                <td><?php echo $S608 ?></td>
                <td><?php echo $S608_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S609 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de la muneca y de la mano, no especificado</td>
                <td><?php echo $S609 ?></td>
                <td><?php echo $S609_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S610 > 0) { ?>
            <tr>
                <td>Herida de dedo(s) de la mano, sin dano de la(s) una(s)</td>
                <td><?php echo $S610 ?></td>
                <td><?php echo $S610_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S611 > 0) { ?>
            <tr>
                <td>Herida de dedo(s) de la mano, con dano de la(s) una(s)</td>
                <td><?php echo $S611 ?></td>
                <td><?php echo $S611_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S617 > 0) { ?>
            <tr>
                <td>Heridas multiples de la muneca y de la mano</td>
                <td><?php echo $S617 ?></td>
                <td><?php echo $S617_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S618 > 0) { ?>
            <tr>
                <td>Herida de otras partes de la muneca y de la mano</td>
                <td><?php echo $S618 ?></td>
                <td><?php echo $S618_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S619 > 0) { ?>
            <tr>
                <td>Herida de la muneca y de la mano, parte no especificada</td>
                <td><?php echo $S619 ?></td>
                <td><?php echo $S619_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S620 > 0) { ?>
            <tr>
                <td>Fractura del hueso escafoides [navicular] de la mano</td>
                <td><?php echo $S620 ?></td>
                <td><?php echo $S620_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S621 > 0) { ?>
            <tr>
                <td>Fractura de otro(s) hueso(s) del carpo</td>
                <td><?php echo $S621 ?></td>
                <td><?php echo $S621_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S622 > 0) { ?>
            <tr>
                <td>ractura del primer metacarpiano</td>
                <td><?php echo $S622 ?></td>
                <td><?php echo $S622_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S623 > 0) { ?>
            <tr>
                <td>Fractura de otros huesos metacarpianos</td>
                <td><?php echo $S623 ?></td>
                <td><?php echo $S623_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S624 > 0) { ?>
            <tr>
                <td>Fracturas multiples de huesos metacarpianos</td>
                <td><?php echo $S624 ?></td>
                <td><?php echo $S624_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S625 > 0) { ?>
            <tr>
                <td>Fractura del pulgar</td>
                <td><?php echo $S625 ?></td>
                <td><?php echo $S625_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S626 > 0) { ?>
            <tr>
                <td>Fractura de otro dedo de la mano</td>
                <td><?php echo $S626 ?></td>
                <td><?php echo $S626_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S627 > 0) { ?>
            <tr>
                <td>Fracturas multiples de los dedos de la mano</td>
                <td><?php echo $S627 ?></td>
                <td><?php echo $S627_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S628 > 0) { ?>
            <tr>
                <td>Fractura de otras partes y de las no especificadas de la muneca y de la mano</td>
                <td><?php echo $S628 ?></td>
                <td><?php echo $S628_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S630 > 0) { ?>
            <tr>
                <td>Luxacion de la muneca</td>
                <td><?php echo $S630 ?></td>
                <td><?php echo $S630_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S631 > 0) { ?>
            <tr>
                <td>Luxacion de dedos de la mano</td>
                <td><?php echo $S631 ?></td>
                <td><?php echo $S631_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S632 > 0) { ?>
            <tr>
                <td>Luxaciones multiples de dedos de la mano</td>
                <td><?php echo $S632 ?></td>
                <td><?php echo $S632_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S633 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de ligamentos de la muneca y del carpo</td>
                <td><?php echo $S633 ?></td>
                <td><?php echo $S633_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S634 > 0) { ?>
            <tr>
                <td>Ruptura traumatica de ligamentos del dedo de la mano en la(s) articulacion(es) metacarpofalangica e interfalangica</td>
                <td><?php echo $S634 ?></td>
                <td><?php echo $S634_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S635 > 0) { ?>
            <tr>
                <td>Esguince y torcedura de la muneca</td>
                <td><?php echo $S635 ?></td>
                <td><?php echo $S635_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S636 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de dedo(s) de la mano</td>
                <td><?php echo $S636 ?></td>
                <td><?php echo $S636_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S637 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otras partes y de las no especificadas de la muneca y de la mano</td>
                <td><?php echo $S637 ?></td>
                <td><?php echo $S637_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S640 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio cubital a nivel de la muneca y de la mano</td>
                <td><?php echo $S640 ?></td>
                <td><?php echo $S640_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S641 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio mediano a nivel de la muneca y de la mano</td>
                <td><?php echo $S641 ?></td>
                <td><?php echo $S641_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S642 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio radial a nivel de la muneca y de la mano</td>
                <td><?php echo $S642 ?></td>
                <td><?php echo $S642_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S643 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio digital del pulgar</td>
                <td><?php echo $S643 ?></td>
                <td><?php echo $S643_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S644 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio digital de otro dedo</td>
                <td><?php echo $S644 ?></td>
                <td><?php echo $S644_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S647 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples nervios a nivel de la muneca y de la mano</td>
                <td><?php echo $S647 ?></td>
                <td><?php echo $S647_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S648 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel de la muneca y de la mano</td>
                <td><?php echo $S648 ?></td>
                <td><?php echo $S648_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S649 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel de la muneca y de la mano</td>
                <td><?php echo $S649 ?></td>
                <td><?php echo $S649_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S650 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria cubital a nivel de la muneca y de la mano</td>
                <td><?php echo $S650 ?></td>
                <td><?php echo $S650_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S651 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria radial a nivel de la muneca y de la mano</td>
                <td><?php echo $S651 ?></td>
                <td><?php echo $S651_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S652 > 0) { ?>
            <tr>
                <td>Traumatismo del arco palmar superficial</td>
                <td><?php echo $S652 ?></td>
                <td><?php echo $S652_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S653 > 0) { ?>
            <tr>
                <td>Traumatismo del arco palmar profundo</td>
                <td><?php echo $S653 ?></td>
                <td><?php echo $S653_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S654 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso(s) sanguineo(s) del pulgar</td>
                <td><?php echo $S654 ?></td>
                <td><?php echo $S654_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S655 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso(s) sanguineo(s) de otro dedo</td>
                <td><?php echo $S655 ?></td>
                <td><?php echo $S655_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S657 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel de la muneca y de la mano</td>
                <td><?php echo $S657 ?></td>
                <td><?php echo $S657_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S658 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel de la muneca y de la mano</td>
                <td><?php echo $S658 ?></td>
                <td><?php echo $S658_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S659 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado, a nivel de la muneca y de la mano</td>
                <td><?php echo $S659 ?></td>
                <td><?php echo $S659_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S660 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo flexor largo del pulgar a nivel de la muneca y de la mano</td>
                <td><?php echo $S660 ?></td>
                <td><?php echo $S660_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S661 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo flexor de otro dedo a nivel de la muneca y de la mano</td>
                <td><?php echo $S661 ?></td>
                <td><?php echo $S661_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S662 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo extensor del pulgar a nivel de la muneca y de la mano</td>
                <td><?php echo $S662 ?></td>
                <td><?php echo $S662_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S663 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo extensor de otro(s) dedo(s) a nivel de la muneca y de la mano</td>
                <td><?php echo $S663 ?></td>
                <td><?php echo $S663_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S664 > 0) { ?>
            <tr>
                <td>Traumatismo del musculo y tendon intrinseco del pulgar a nivel de la muneca y de la mano</td>
                <td><?php echo $S664 ?></td>
                <td><?php echo $S664_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S665 > 0) { ?>
            <tr>
                <td>Traumatismo del musculo y tendon intrinseco de otro(s) dedo(s) a nivel de la muneca y de la mano</td>
                <td><?php echo $S665 ?></td>
                <td><?php echo $S665_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S666 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos flexores a nivel de la muneca y de la mano</td>
                <td><?php echo $S666 ?></td>
                <td><?php echo $S666_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S667 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos extensores a nivel de la muneca y de la mano</td>
                <td><?php echo $S667 ?></td>
                <td><?php echo $S667_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S668 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos a nivel de la muneca y de la mano</td>
                <td><?php echo $S668 ?></td>
                <td><?php echo $S668_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S669 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculo no especificado, a nivel de la muneca y de la mano</td>
                <td><?php echo $S669 ?></td>
                <td><?php echo $S669_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S670 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del pulgar y otro(s) dedo(s)</td>
                <td><?php echo $S670 ?></td>
                <td><?php echo $S670_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S678 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes y de las no especificadas de la muneca y de la mano</td>
                <td><?php echo $S678 ?></td>
                <td><?php echo $S678_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S680 > 0) { ?>
            <tr>
                <td>Amputacion traumatica del pulgar (completa) (parcial)</td>
                <td><?php echo $S680 ?></td>
                <td><?php echo $S680_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S681 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de otro dedo unico (completa) (parcial)</td>
                <td><?php echo $S681 ?></td>
                <td><?php echo $S681_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S682 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de dos o mas dedos solamente (completa) (parcial)</td>
                <td><?php echo $S682 ?></td>
                <td><?php echo $S682_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S683 > 0) { ?>
            <tr>
                <td>Amputacion traumatica combinada (de parte) de dedo(s) con otras partes de la muneca y de la mano</td>
                <td><?php echo $S683 ?></td>
                <td><?php echo $S683_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S684 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de la mano a nivel de la muneca</td>
                <td><?php echo $S684 ?></td>
                <td><?php echo $S684_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S688 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de otras partes de la muneca y de la mano</td>
                <td><?php echo $S688 ?></td>
                <td><?php echo $S688_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S689 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de la muneca y de la mano, nivel no especificado</td>
                <td><?php echo $S689 ?></td>
                <td><?php echo $S689_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S697 > 0) { ?>
            <tr>
                <td>Otros traumatismos multiples de la muneca y de la mano</td>
                <td><?php echo $S697 ?></td>
                <td><?php echo $S697_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S698 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados de la muneca y de la mano</td>
                <td><?php echo $S698 ?></td>
                <td><?php echo $S698_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S699 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado de la muneca y de la mano</td>
                <td><?php echo $S699 ?></td>
                <td><?php echo $S699_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S700 > 0) { ?>
            <tr>
                <td>Contusion de la cadera</td>
                <td><?php echo $S700 ?></td>
                <td><?php echo $S700_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S701 > 0) { ?>
            <tr>
                <td>Contusion del muslo</td>
                <td><?php echo $S701 ?></td>
                <td><?php echo $S701_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S707 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples de la cadera y del muslo</td>
                <td><?php echo $S707 ?></td>
                <td><?php echo $S707_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S708 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales de la cadera y del muslo</td>
                <td><?php echo $S708 ?></td>
                <td><?php echo $S708_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S709 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de la cadera y del muslo, no especificado</td>
                <td><?php echo $S709 ?></td>
                <td><?php echo $S709_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S710 > 0) { ?>
            <tr>
                <td>Herida de la cadera</td>
                <td><?php echo $S710 ?></td>
                <td><?php echo $S710_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S711 > 0) { ?>
            <tr>
                <td>Herida del muslo</td>
                <td><?php echo $S711 ?></td>
                <td><?php echo $S711_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S717 > 0) { ?>
            <tr>
                <td>Heridas multiples de la cadera y del muslo</td>
                <td><?php echo $S717 ?></td>
                <td><?php echo $S717_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S718 > 0) { ?>
            <tr>
                <td>Herida de otras partes y de las no especificadas de la cintura pelvica</td>
                <td><?php echo $S718 ?></td>
                <td><?php echo $S718_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S720 > 0) { ?>
            <tr>
                <td>Fractura del cuello de femur</td>
                <td><?php echo $S720 ?></td>
                <td><?php echo $S720_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S721 > 0) { ?>
            <tr>
                <td>Fractura pertrocanteriana</td>
                <td><?php echo $S721 ?></td>
                <td><?php echo $S721_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S722 > 0) { ?>
            <tr>
                <td>Fractura subtrocanteriana</td>
                <td><?php echo $S722 ?></td>
                <td><?php echo $S722_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S723 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis del femur</td>
                <td><?php echo $S723 ?></td>
                <td><?php echo $S723_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S724 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis inferior del femur</td>
                <td><?php echo $S724 ?></td>
                <td><?php echo $S724_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S727 > 0) { ?>
            <tr>
                <td>Fracturas multiples del femur</td>
                <td><?php echo $S727 ?></td>
                <td><?php echo $S727_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S728 > 0) { ?>
            <tr>
                <td>Fracturas de otras partes del femur</td>
                <td><?php echo $S728 ?></td>
                <td><?php echo $S728_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S729 > 0) { ?>
            <tr>
                <td>Fractura del femur, parte no especificada</td>
                <td><?php echo $S729 ?></td>
                <td><?php echo $S729_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S730 > 0) { ?>
            <tr>
                <td>Luxacion de la cadera</td>
                <td><?php echo $S730 ?></td>
                <td><?php echo $S730_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S731 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de la cadera</td>
                <td><?php echo $S731 ?></td>
                <td><?php echo $S731_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S740 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio ciatico a nivel de la cadera y del muslo</td>
                <td><?php echo $S740 ?></td>
                <td><?php echo $S740_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S741 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio femorocutaneo a nivel de la cadera y del muslo</td>
                <td><?php echo $S741 ?></td>
                <td><?php echo $S741_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S742 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio sensorial cutaneo a nivel de la cadera y del muslo</td>
                <td><?php echo $S742 ?></td>
                <td><?php echo $S742_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S747 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios multiples a nivel de la cadera y del muslo</td>
                <td><?php echo $S747 ?></td>
                <td><?php echo $S747_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S747 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel de la cadera y del muslo</td>
                <td><?php echo $S747 ?></td>
                <td><?php echo $S747_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S748 > 0) { ?>
            <tr>
                <td></td>
                <td><?php echo $S748 ?></td>
                <td><?php echo $S748_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S749 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel de la cadera y del muslo</td>
                <td><?php echo $S749 ?></td>
                <td><?php echo $S749_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S750 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria femoral</td>
                <td><?php echo $S750 ?></td>
                <td><?php echo $S750_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S751 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena femoral a nivel de la cadera y del muslo</td>
                <td><?php echo $S751 ?></td>
                <td><?php echo $S751_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S752 > 0) { ?>
            <tr>
                <td>Traumatismo de la gran vena safena a nivel de la cadera y del muslo</td>
                <td><?php echo $S752 ?></td>
                <td><?php echo $S752_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S757 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel de la cadera y del muslo</td>
                <td><?php echo $S757 ?></td>
                <td><?php echo $S757_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S758 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel de la cadera y del muslo</td>
                <td><?php echo $S758 ?></td>
                <td><?php echo $S758_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S759 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado a nivel de la cadera y del muslo</td>
                <td><?php echo $S759 ?></td>
                <td><?php echo $S759_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S760 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo de la cadera</td>
                <td><?php echo $S760 ?></td>
                <td><?php echo $S760_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S761 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo cuadriceps</td>
                <td><?php echo $S761 ?></td>
                <td><?php echo $S761_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S762 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo aductor mayor del muslo</td>
                <td><?php echo $S762 ?></td>
                <td><?php echo $S762_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S763 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculo del grupo muscular posterior a nivel del muslo</td>
                <td><?php echo $S763 ?></td>
                <td><?php echo $S763_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S764 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos y los no especificados a nivel del muslo</td>
                <td><?php echo $S764 ?></td>
                <td><?php echo $S764_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S767 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos a nivel de la cadera y del muslo</td>
                <td><?php echo $S767 ?></td>
                <td><?php echo $S767_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S770 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la cadera</td>
                <td><?php echo $S770 ?></td>
                <td><?php echo $S770_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S771 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del muslo</td>
                <td><?php echo $S771 ?></td>
                <td><?php echo $S771_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S772 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la cadera con el muslo</td>
                <td><?php echo $S772 ?></td>
                <td><?php echo $S772_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S780 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de la articulacion de la cadera</td>
                <td><?php echo $S780 ?></td>
                <td><?php echo $S780_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S781 > 0) { ?>
            <tr>
                <td>Amputacion traumatica en algun nivel entre la cadera y la rodilla</td>
                <td><?php echo $S781 ?></td>
                <td><?php echo $S781_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S789 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de cadera y muslo, nivel no especificado</td>
                <td><?php echo $S789 ?></td>
                <td><?php echo $S789_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S797 > 0) { ?>
            <tr>
                <td>Traumatismos multiples de la cadera y del muslo</td>
                <td><?php echo $S797 ?></td>
                <td><?php echo $S797_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S798 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados de la cadera y del muslo</td>
                <td><?php echo $S798 ?></td>
                <td><?php echo $S798_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S799 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado de la cadera y del muslo</td>
                <td><?php echo $S799 ?></td>
                <td><?php echo $S799_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S800 > 0) { ?>
            <tr>
                <td>Contusion de la rodilla</td>
                <td><?php echo $S800 ?></td>
                <td><?php echo $S800_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S801 > 0) { ?>
            <tr>
                <td>Contusion de otras partes y las no especificadas de la pierna</td>
                <td><?php echo $S801 ?></td>
                <td><?php echo $S801_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S807 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples de la pierna</td>
                <td><?php echo $S807 ?></td>
                <td><?php echo $S807_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S808 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales de la pierna</td>
                <td><?php echo $S808 ?></td>
                <td><?php echo $S808_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S809 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de la pierna, no especificado</td>
                <td><?php echo $S809 ?></td>
                <td><?php echo $S809_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S810 > 0) { ?>
            <tr>
                <td>Herida de la rodilla</td>
                <td><?php echo $S810 ?></td>
                <td><?php echo $S810_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S817 > 0) { ?>
            <tr>
                <td>Heridas multiples de la pierna</td>
                <td><?php echo $S817 ?></td>
                <td><?php echo $S817_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S818 > 0) { ?>
            <tr>
                <td>Herida de otras partes de la pierna</td>
                <td><?php echo $S818 ?></td>
                <td><?php echo $S818_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S819 > 0) { ?>
            <tr>
                <td>Herida de la pierna, parte no especificada</td>
                <td><?php echo $S819 ?></td>
                <td><?php echo $S819_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S820 > 0) { ?>
            <tr>
                <td>Fractura de la rotula</td>
                <td><?php echo $S820 ?></td>
                <td><?php echo $S820_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S821 > 0) { ?>
            <tr>
                <td>Fractura de la epifisis superior de la tibia</td>
                <td><?php echo $S821 ?></td>
                <td><?php echo $S821_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S822 > 0) { ?>
            <tr>
                <td>Fractura de la diafisis de la tibia</td>
                <td><?php echo $S822 ?></td>
                <td><?php echo $S822_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S823 > 0) { ?>
            <tr>
                <td>ractura de la epifisis inferior de la tibia</td>
                <td><?php echo $S823 ?></td>
                <td><?php echo $S823_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S824 > 0) { ?>
            <tr>
                <td>Fractura del perone solamente</td>
                <td><?php echo $S824 ?></td>
                <td><?php echo $S824_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S825 > 0) { ?>
            <tr>
                <td>Fractura del maleolo interno</td>
                <td><?php echo $S825 ?></td>
                <td><?php echo $S825_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S826 > 0) { ?>
            <tr>
                <td>Fractura del maleolo externo</td>
                <td><?php echo $S826 ?></td>
                <td><?php echo $S826_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S827 > 0) { ?>
            <tr>
                <td>Fracturas multiples de la pierna</td>
                <td><?php echo $S827 ?></td>
                <td><?php echo $S827_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S828 > 0) { ?>
            <tr>
                <td>Fractura de otras partes de la pierna</td>
                <td><?php echo $S828 ?></td>
                <td><?php echo $S828_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S829 > 0) { ?>
            <tr>
                <td>Fractura de la pierna, parte no especificada</td>
                <td><?php echo $S829 ?></td>
                <td><?php echo $S829_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S830 > 0) { ?>
            <tr>
                <td>Luxacion de la rotula</td>
                <td><?php echo $S830 ?></td>
                <td><?php echo $S830_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S831 > 0) { ?>
            <tr>
                <td>Luxacion de la rodilla</td>
                <td><?php echo $S831 ?></td>
                <td><?php echo $S831_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S832 > 0) { ?>
            <tr>
                <td>Desgarro de meniscos, presente</td>
                <td><?php echo $S832 ?></td>
                <td><?php echo $S832_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S833 > 0) { ?>
            <tr>
                <td>Desgarro del cartilago articular de la rodilla, presente</td>
                <td><?php echo $S833 ?></td>
                <td><?php echo $S833_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S834 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras que comprometen los ligamentos laterales (externo) (interno) de la rodilla</td>
                <td><?php echo $S834 ?></td>
                <td><?php echo $S834_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S835 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras que comprometen el ligamento cruzado (anterior) (posterior) de la rodilla</td>
                <td><?php echo $S835 ?></td>
                <td><?php echo $S835_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S836 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otras partes y las no especificadas de la rodilla</td>
                <td><?php echo $S836 ?></td>
                <td><?php echo $S836_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S837 > 0) { ?>
            <tr>
                <td>Traumatismo de estructuras multiples de la rodilla</td>
                <td><?php echo $S837 ?></td>
                <td><?php echo $S837_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S840 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio tibial a nivel de la pierna</td>
                <td><?php echo $S840 ?></td>
                <td><?php echo $S840_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S841 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio peroneo a nivel de la pierna</td>
                <td><?php echo $S841 ?></td>
                <td><?php echo $S841_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S842 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio sensorial cutaneo a nivel de la pierna</td>
                <td><?php echo $S842 ?></td>
                <td><?php echo $S842_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S847 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios multiples a nivel de la pierna</td>
                <td><?php echo $S847 ?></td>
                <td><?php echo $S847_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S848 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel de la pierna</td>
                <td><?php echo $S848 ?></td>
                <td><?php echo $S848_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S849 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel de la pierna</td>
                <td><?php echo $S849 ?></td>
                <td><?php echo $S849_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S850 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria poplitea</td>
                <td><?php echo $S850 ?></td>
                <td><?php echo $S850_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S851 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria tibial (anterior) (posterior)</td>
                <td><?php echo $S851 ?></td>
                <td><?php echo $S851_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S852 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria peronea</td>
                <td><?php echo $S852 ?></td>
                <td><?php echo $S852_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S853 > 0) { ?>
            <tr>
                <td>Traumatismo de la gran vena safena a nivel de la pierna</td>
                <td><?php echo $S853 ?></td>
                <td><?php echo $S853_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S854 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena safena externa a nivel de la pierna</td>
                <td><?php echo $S854 ?></td>
                <td><?php echo $S854_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S855 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena poplitea</td>
                <td><?php echo $S855 ?></td>
                <td><?php echo $S855_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S857 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos multiples a nivel de la pierna</td>
                <td><?php echo $S857 ?></td>
                <td><?php echo $S857_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S858 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel de la pierna</td>
                <td><?php echo $S858 ?></td>
                <td><?php echo $S858_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S859 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado a nivel de la pierna</td>
                <td><?php echo $S859 ?></td>
                <td><?php echo $S859_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S860 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon de Aquiles</td>
                <td><?php echo $S860 ?></td>
                <td><?php echo $S860_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S861 > 0) { ?>
            <tr>
                <td>Traumatismo de otro(s) tendon(es) y musculo(s) del grupo muscular posterior a nivel de la pierna</td>
                <td><?php echo $S861 ?></td>
                <td><?php echo $S861_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S862 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon(es) y musculo(s) del grupo muscular anterior a nivel de la pierna</td>
                <td><?php echo $S862 ?></td>
                <td><?php echo $S862_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S863 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon(es) y musculo(s) del grupo muscular peroneo a nivel de la pierna</td>
                <td><?php echo $S863 ?></td>
                <td><?php echo $S863_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S867 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos a nivel de la pierna</td>
                <td><?php echo $S867 ?></td>
                <td><?php echo $S867_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S868 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos a nivel de la pierna</td>
                <td><?php echo $S868 ?></td>
                <td><?php echo $S868_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S869 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculo no especificado a nivel de la pierna</td>
                <td><?php echo $S869 ?></td>
                <td><?php echo $S869_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S870 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de la rodilla</td>
                <td><?php echo $S870 ?></td>
                <td><?php echo $S870_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S878 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes y de las no especificadas de la pierna</td>
                <td><?php echo $S878 ?></td>
                <td><?php echo $S878_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S880 > 0) { ?>
            <tr>
                <td>Amputacion traumatica a nivel de la rodilla</td>
                <td><?php echo $S880 ?></td>
                <td><?php echo $S880_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S881 > 0) { ?>
            <tr>
                <td>Amputacion traumatica en algun nivel entre la rodilla y el tobillo</td>
                <td><?php echo $S881 ?></td>
                <td><?php echo $S881_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S889 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de la pierna, nivel no especificado</td>
                <td><?php echo $S889 ?></td>
                <td><?php echo $S889_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S897 > 0) { ?>
            <tr>
                <td>Traumatismos multiples de la pierna</td>
                <td><?php echo $S897 ?></td>
                <td><?php echo $S897_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S898 > 0) { ?>
            <tr>
                <td>Otros traumatismos de la pierna, especificados</td>
                <td><?php echo $S898 ?></td>
                <td><?php echo $S898_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S899 > 0) { ?>
            <tr>
                <td>Traumatismo de la pierna, no especificado</td>
                <td><?php echo $S899 ?></td>
                <td><?php echo $S899_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S900 > 0) { ?>
            <tr>
                <td>Contusion del tobillo</td>
                <td><?php echo $S900 ?></td>
                <td><?php echo $S900_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S901 > 0) { ?>
            <tr>
                <td>Contusion de dedo(s) del pie sin dano de la(s) una(s)</td>
                <td><?php echo $S901 ?></td>
                <td><?php echo $S901_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S902 > 0) { ?>
            <tr>
                <td>Contusion de dedo(s) del pie con dano de la(s) una(s</td>
                <td><?php echo $S902 ?></td>
                <td><?php echo $S902_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S903 > 0) { ?>
            <tr>
                <td>Contusion de otras partes y de las no especificadas del pie</td>
                <td><?php echo $S903 ?></td>
                <td><?php echo $S903_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S907 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples del pie y del tobillo</td>
                <td><?php echo $S907 ?></td>
                <td><?php echo $S907_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S908 > 0) { ?>
            <tr>
                <td>Otros traumatismos superficiales del pie y del tobillo</td>
                <td><?php echo $S908 ?></td>
                <td><?php echo $S908_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S909 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del pie y del tobillo, no especificado</td>
                <td><?php echo $S909 ?></td>
                <td><?php echo $S909_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S910 > 0) { ?>
            <tr>
                <td>Herida del tobillo</td>
                <td><?php echo $S910 ?></td>
                <td><?php echo $S910_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S911 > 0) { ?>
            <tr>
                <td>Herida de dedo(s) del pie sin dano(s) de la(s) una(s)</td>
                <td><?php echo $S911 ?></td>
                <td><?php echo $S911_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S912 > 0) { ?>
            <tr>
                <td>Herida de dedo(s) del pie con dano(s) de la(s) una(s)</td>
                <td><?php echo $S912 ?></td>
                <td><?php echo $S912_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S913 > 0) { ?>
            <tr>
                <td>Herida de otras partes del pie</td>
                <td><?php echo $S913 ?></td>
                <td><?php echo $S913_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S917 > 0) { ?>
            <tr>
                <td>Heridas multiples del tobillo y del pie</td>
                <td><?php echo $S917 ?></td>
                <td><?php echo $S917_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S920 > 0) { ?>
            <tr>
                <td>Fractura del calcaneo</td>
                <td><?php echo $S920 ?></td>
                <td><?php echo $S920_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S921 > 0) { ?>
            <tr>
                <td>Fractura del astragalo</td>
                <td><?php echo $S921 ?></td>
                <td><?php echo $S921_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S922 > 0) { ?>
            <tr>
                <td>Fractura de otro(s) hueso(s) del tarso</td>
                <td><?php echo $S922 ?></td>
                <td><?php echo $S922_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S923 > 0) { ?>
            <tr>
                <td>Fractura de hueso del metatarso</td>
                <td><?php echo $S923 ?></td>
                <td><?php echo $S923_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S924 > 0) { ?>
            <tr>
                <td>Fractura de los huesos del dedo gordo del pie</td>
                <td><?php echo $S924 ?></td>
                <td><?php echo $S924_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S925 > 0) { ?>
            <tr>
                <td>Fractura de los huesos de otro(s) dedo(s) del pie</td>
                <td><?php echo $S925 ?></td>
                <td><?php echo $S925_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S927 > 0) { ?>
            <tr>
                <td>Fracturas multiples del pie</td>
                <td><?php echo $S927 ?></td>
                <td><?php echo $S927_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S929 > 0) { ?>
            <tr>
                <td>Fractura del pie, no especificada</td>
                <td><?php echo $S929 ?></td>
                <td><?php echo $S929_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S930 > 0) { ?>
            <tr>
                <td>Luxacion de la articulacion del tobillo</td>
                <td><?php echo $S930 ?></td>
                <td><?php echo $S930_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S931 > 0) { ?>
            <tr>
                <td>Luxacion de dedo(s) del pie</td>
                <td><?php echo $S931 ?></td>
                <td><?php echo $S931_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S932 > 0) { ?>
            <tr>
                <td>Ruptura de ligamentos a nivel del tobillo y del pie</td>
                <td><?php echo $S932 ?></td>
                <td><?php echo $S932_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S933 > 0) { ?>
            <tr>
                <td>Luxacion de otros sitios y los no especificados del pie</td>
                <td><?php echo $S933 ?></td>
                <td><?php echo $S933_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S934 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras del tobillo</td>
                <td><?php echo $S934 ?></td>
                <td><?php echo $S934_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S935 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de dedo(s) del pie</td>
                <td><?php echo $S935 ?></td>
                <td><?php echo $S935_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S936 > 0) { ?>
            <tr>
                <td>Esguinces y torceduras de otros sitios y los no especificados del pie</td>
                <td><?php echo $S936 ?></td>
                <td><?php echo $S936_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S940 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio plantar externo</td>
                <td><?php echo $S940 ?></td>
                <td><?php echo $S940_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S941 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio plantar interno</td>
                <td><?php echo $S941 ?></td>
                <td><?php echo $S941_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S942 > 0) { ?>
            <tr>
                <td>Traumatismo del nervio peroneal profundo a nivel del pie y del tobillo</td>
                <td><?php echo $S942 ?></td>
                <td><?php echo $S942_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S943 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio sensorial cutaneo a nivel del pie y del tobillo</td>
                <td><?php echo $S943 ?></td>
                <td><?php echo $S943_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S947 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples nervios a nivel del pie y del tobillo</td>
                <td><?php echo $S947 ?></td>
                <td><?php echo $S947_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S948 > 0) { ?>
            <tr>
                <td>Traumatismo de otros nervios a nivel del pie y del tobillo</td>
                <td><?php echo $S948 ?></td>
                <td><?php echo $S948_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S949 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado a nivel del pie y del tobillo</td>
                <td><?php echo $S949 ?></td>
                <td><?php echo $S949_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S950 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria dorsal del pie</td>
                <td><?php echo $S950 ?></td>
                <td><?php echo $S950_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S951 > 0) { ?>
            <tr>
                <td>Traumatismo de la arteria plantar del pie</td>
                <td><?php echo $S951 ?></td>
                <td><?php echo $S951_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S952 > 0) { ?>
            <tr>
                <td>Traumatismo de la vena dorsal del pie</td>
                <td><?php echo $S952 ?></td>
                <td><?php echo $S952_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S957 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples vasos sanguineos a nivel del pie y del tobillo</td>
                <td><?php echo $S957 ?></td>
                <td><?php echo $S957_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S958 > 0) { ?>
            <tr>
                <td>Traumatismo de otros vasos sanguineos a nivel del pie y del tobillo</td>
                <td><?php echo $S958 ?></td>
                <td><?php echo $S958_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S959 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso sanguineo no especificado a nivel de pie y del tobillo</td>
                <td><?php echo $S959 ?></td>
                <td><?php echo $S959_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S960 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo del flexor largo del dedo a nivel del pie y del tobillo</td>
                <td><?php echo $S960 ?></td>
                <td><?php echo $S960_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S961 > 0) { ?>
            <tr>
                <td>Traumatismo del tendon y musculo del extensor largo del (de los) dedo(s) a nivel del pie y del tobillo</td>
                <td><?php echo $S961 ?></td>
                <td><?php echo $S961_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S962 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos intrinsecos a nivel del pie y del tobillo</td>
                <td><?php echo $S962 ?></td>
                <td><?php echo $S962_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S967 > 0) { ?>
            <tr>
                <td>Traumatismo de multiples tendones y musculos a nivel del pie y del tobillo</td>
                <td><?php echo $S967 ?></td>
                <td><?php echo $S967_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S968 > 0) { ?>
            <tr>
                <td>Traumatismo de otros tendones y musculos a nivel del pie y del tobillo</td>
                <td><?php echo $S968 ?></td>
                <td><?php echo $S968_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S969 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos no especificados a nivel del pie y del tobillo</td>
                <td><?php echo $S969 ?></td>
                <td><?php echo $S969_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S970 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento del tobillo</td>
                <td><?php echo $S970 ?></td>
                <td><?php echo $S970_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S971 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de dedo(s) del pie</td>
                <td><?php echo $S971 ?></td>
                <td><?php echo $S971_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S978 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento de otras partes del pie y del tobillo</td>
                <td><?php echo $S978 ?></td>
                <td><?php echo $S978_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S980 > 0) { ?>
            <tr>
                <td>Amputacion traumatica del pie a nivel del tobillo</td>
                <td><?php echo $S980 ?></td>
                <td><?php echo $S980_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S981 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de un dedo del pie</td>
                <td><?php echo $S981 ?></td>
                <td><?php echo $S981_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S982 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de dos a mas dedos del pie</td>
                <td><?php echo $S982 ?></td>
                <td><?php echo $S982_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S983 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de otras partes del pie</td>
                <td><?php echo $S983 ?></td>
                <td><?php echo $S983_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S984 > 0) { ?>
            <tr>
                <td>Amputacion del pie, nivel no especificado</td>
                <td><?php echo $S984 ?></td>
                <td><?php echo $S984_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S997 > 0) { ?>
            <tr>
                <td>Otros traumatismos multiples del pie y del tobillo</td>
                <td><?php echo $S997 ?></td>
                <td><?php echo $S997_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S998 > 0) { ?>
            <tr>
                <td>Otros traumatismos del pie y del tobillo, especificados</td>
                <td><?php echo $S998 ?></td>
                <td><?php echo $S998_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S999 > 0) { ?>
            <tr>
                <td>Traumatismo del pie y del tobillo, no especificado</td>
                <td><?php echo $S999 ?></td>
                <td><?php echo $S999_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S00 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial De La Cabeza</td>
                <td><?php echo $S00 ?></td>
                <td><?php echo $S00_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S01 > 0) { ?>
            <tr>
                <td>Herida De La Cabeza</td>
                <td><?php echo $S01 ?></td>
                <td><?php echo $S01_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S02 > 0) { ?>
            <tr>
                <td>Fractura De Huesos Del Craneo Y De La Cara</td>
                <td><?php echo $S02 ?></td>
                <td><?php echo $S02_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S03 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y De Ligamentos De La Cabeza</td>
                <td><?php echo $S03 ?></td>
                <td><?php echo $S03_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S04 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios Craneales</td>
                <td><?php echo $S04 ?></td>
                <td><?php echo $S04_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S05 > 0) { ?>
            <tr>
                <td>Traumatismo Del Ojo Y De La Orbita</td>
                <td><?php echo $S05 ?></td>
                <td><?php echo $S05_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S06 > 0) { ?>
            <tr>
                <td>Traumatismo Intracraneal</td>
                <td><?php echo $S06 ?></td>
                <td><?php echo $S06_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S07 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento De La Cabeza</td>
                <td><?php echo $S07 ?></td>
                <td><?php echo $S07_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S08 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica De Parte De La Cabeza</td>
                <td><?php echo $S08 ?></td>
                <td><?php echo $S08_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S09 > 0) { ?>
            <tr>
                <td>Otros Traumatismo Y Los No Especificados De La Cabeza</td>
                <td><?php echo $S09 ?></td>
                <td><?php echo $S09_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S10 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Cuello</td>
                <td><?php echo $S10 ?></td>
                <td><?php echo $S10_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S11 > 0) { ?>
            <tr>
                <td>Herida Del Cuello</td>
                <td><?php echo $S11 ?></td>
                <td><?php echo $S11_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S12 > 0) { ?>
            <tr>
                <td>Fractura Del Cuello</td>
                <td><?php echo $S12 ?></td>
                <td><?php echo $S12_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S13 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y De Ligamentos Del Cuello</td>
                <td><?php echo $S13 ?></td>
                <td><?php echo $S13_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S14 > 0) { ?>
            <tr>
                <td>Traumatismo De La Medula Espinal Y De Nervios A Nivel Del Cuello</td>
                <td><?php echo $S14 ?></td>
                <td><?php echo $S14_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S15 > 0) { ?>
            <tr>
                <td>Traumatismo De Vasos Sanguineos A Nivel Del Cuello</td>
                <td><?php echo $S15 ?></td>
                <td><?php echo $S15_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S16 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculos A Nivel Del Cuello</td>
                <td><?php echo $S16 ?></td>
                <td><?php echo $S16_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S17 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Del Cuello</td>
                <td><?php echo $S17 ?></td>
                <td><?php echo $S17_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S18 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica A Nivel Del Cuello</td>
                <td><?php echo $S18 ?></td>
                <td><?php echo $S18_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S19 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados Del Cuello</td>
                <td><?php echo $S19 ?></td>
                <td><?php echo $S19_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S20 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Torax</td>
                <td><?php echo $S20 ?></td>
                <td><?php echo $S20_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S21 > 0) { ?>
            <tr>
                <td>Herida Del Torax</td>
                <td><?php echo $S21 ?></td>
                <td><?php echo $S21_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S22 > 0) { ?>
            <tr>
                <td>Fractura De Las Costillas, Del Esternon Y De La Columna Toracica [Dorsal]</td>
                <td><?php echo $S22 ?></td>
                <td><?php echo $S22_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S23 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos Del Torax</td>
                <td><?php echo $S23 ?></td>
                <td><?php echo $S23_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S24 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios Y De La Medula Espinal A Nivel De Torax</td>
                <td><?php echo $S24 ?></td>
                <td><?php echo $S24_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S25 > 0) { ?>
            <tr>
                <td>Traumatismo De Los Vasos Sanguineos Del Torax</td>
                <td><?php echo $S25 ?></td>
                <td><?php echo $S25_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S26 > 0) { ?>
            <tr>
                <td>Traumatismo Del Corazon</td>
                <td><?php echo $S26 ?></td>
                <td><?php echo $S26_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S27 > 0) { ?>
            <tr>
                <td>Traumatismo De Otros Organos Intratoracicos Y De Los No Especificados</td>
                <td><?php echo $S27 ?></td>
                <td><?php echo $S27_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S28 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Del Torax Y Amputacion Traumatica De Parte Del Torax</td>
                <td><?php echo $S28 ?></td>
                <td><?php echo $S28_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S29 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados Del Torax</td>
                <td><?php echo $S29 ?></td>
                <td><?php echo $S29_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S30 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S30 ?></td>
                <td><?php echo $S30_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S31 > 0) { ?>
            <tr>
                <td>Herida Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S31 ?></td>
                <td><?php echo $S31_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S32 > 0) { ?>
            <tr>
                <td>Fractura De La Columna Lumbar Y De La Pelvis</td>
                <td><?php echo $S32 ?></td>
                <td><?php echo $S32_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S33 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos De La Columna Lumbar Y De La Pelvis</td>
                <td><?php echo $S33 ?></td>
                <td><?php echo $S33_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S34 > 0) { ?>
            <tr>
                <td>Traumatismode Los Nervios Y De La Medula Espinal Lumbar, A Nivel Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S34 ?></td>
                <td><?php echo $S34_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S35 > 0) { ?>
            <tr>
                <td>Traumatismo De Los Vasos Sanguineos A Nivel Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S35 ?></td>
                <td><?php echo $S35_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S36 > 0) { ?>
            <tr>
                <td>Traumatismo De Organos Intraabdominales</td>
                <td><?php echo $S36 ?></td>
                <td><?php echo $S36_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S37 > 0) { ?>
            <tr>
                <td>Traumatismo Del Aparato Urinario Y De Los Organos Pelvicos</td>
                <td><?php echo $S37 ?></td>
                <td><?php echo $S37_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S38 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Y Amputacion Traumatica De Parte Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S38 ?></td>
                <td><?php echo $S38_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S39 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados Del Abdomen, De La Region Lumbosacra Y De La Pelvis</td>
                <td><?php echo $S39 ?></td>
                <td><?php echo $S39_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S40 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Hombro Y Del Brazo</td>
                <td><?php echo $S40 ?></td>
                <td><?php echo $S40_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S41 > 0) { ?>
            <tr>
                <td>Herida Del Hombro Y Del Brazo</td>
                <td><?php echo $S41 ?></td>
                <td><?php echo $S41_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S42 > 0) { ?>
            <tr>
                <td>Fractura Del Hombro Y Del Brazo</td>
                <td><?php echo $S42 ?></td>
                <td><?php echo $S42_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S43 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos De La Cintura Escapular</td>
                <td><?php echo $S43 ?></td>
                <td><?php echo $S43_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S44 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios A Nivel Del Hombro Y Del Brazo</td>
                <td><?php echo $S44 ?></td>
                <td><?php echo $S44_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S45 > 0) { ?>
            <tr>
                <td>Traumatismo De Vasos Sanguineos A Nivel Del Hombro Y Del Brazo</td>
                <td><?php echo $S45 ?></td>
                <td><?php echo $S45_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S46 > 0) { ?>
            <tr>
                <td>Traumatismo Tendon Y Musculo A Nivel Del Hombro Y Del Brazo</td>
                <td><?php echo $S46 ?></td>
                <td><?php echo $S46_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S47 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Del Hombro Y Del Brazo</td>
                <td><?php echo $S47 ?></td>
                <td><?php echo $S47_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S48 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica Del Hombro Y Del Brazo</td>
                <td><?php echo $S48 ?></td>
                <td><?php echo $S48_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S49 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados Del Hombro Y Del Brazo</td>
                <td><?php echo $S49 ?></td>
                <td><?php echo $S49_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S50 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Antebrazo Y Del Codo</td>
                <td><?php echo $S50 ?></td>
                <td><?php echo $S50_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S51 > 0) { ?>
            <tr>
                <td>Herida Del Antebrazo Y Del Codo</td>
                <td><?php echo $S51 ?></td>
                <td><?php echo $S51_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S52 > 0) { ?>
            <tr>
                <td>Fractura Del Antebrazo</td>
                <td><?php echo $S52 ?></td>
                <td><?php echo $S52_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S53 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos Del Codo</td>
                <td><?php echo $S53 ?></td>
                <td><?php echo $S53_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S54 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios A Nivel Del Antebrazo</td>
                <td><?php echo $S54 ?></td>
                <td><?php echo $S54_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S55 > 0) { ?>
            <tr>
                <td>Traumatismo De Los Vasos Sanguineos A Nivel Del Antebrazo</td>
                <td><?php echo $S55 ?></td>
                <td><?php echo $S55_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S56 > 0) { ?>
            <tr>
                <td>Traumatismo Del Tendon Y Musculo A Nivel Del Antebrazo</td>
                <td><?php echo $S56 ?></td>
                <td><?php echo $S56_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S57 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Del Antebrazo</td>
                <td><?php echo $S57 ?></td>
                <td><?php echo $S57_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S58 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica Del Antebrazo</td>
                <td><?php echo $S58 ?></td>
                <td><?php echo $S58_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S59 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados Del Antebrazo</td>
                <td><?php echo $S59 ?></td>
                <td><?php echo $S59_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S60 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial De La Muneca Y De La Mano</td>
                <td><?php echo $S60 ?></td>
                <td><?php echo $S60_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S61 > 0) { ?>
            <tr>
                <td>Herida De La Muneca Y De La ManoHerida De La Muneca Y De La Mano</td>
                <td><?php echo $S61 ?></td>
                <td><?php echo $S61_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S62 > 0) { ?>
            <tr>
                <td>Fractura A Nivel De La Muneca Y De La Mano</td>
                <td><?php echo $S62 ?></td>
                <td><?php echo $S62_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S63 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos A Nivel De La Muneca Y De La Mano</td>
                <td><?php echo $S63 ?></td>
                <td><?php echo $S63_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S64 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios A Nivel De La Muneca Y De La Mano</td>
                <td><?php echo $S64 ?></td>
                <td><?php echo $S64_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S65 > 0) { ?>
            <tr>
                <td>Traumatismo De Los Vasos Sanguineos A Nivel De La Muneca Y De La Mano</td>
                <td><?php echo $S65 ?></td>
                <td><?php echo $S65_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S66 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculo A Nivel De La Muneca Y De La Mano</td>
                <td><?php echo $S66 ?></td>
                <td><?php echo $S66_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S67 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento De La Muneca Y De La Mano</td>
                <td><?php echo $S67 ?></td>
                <td><?php echo $S67_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S68 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica De La Muneca Y De La Mano</td>
                <td><?php echo $S68 ?></td>
                <td><?php echo $S68_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S69 > 0) { ?>
            <tr>
                <td>Otros Traumatismo Y No Especificados De La Muneca Y De La Mano</td>
                <td><?php echo $S69 ?></td>
                <td><?php echo $S69_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S70 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial De La Cadera Y Del Muslo</td>
                <td><?php echo $S70 ?></td>
                <td><?php echo $S70_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S71 > 0) { ?>
            <tr>
                <td>Herida De La Cadera Y Del Muslo</td>
                <td><?php echo $S71 ?></td>
                <td><?php echo $S71_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S72 > 0) { ?>
            <tr>
                <td>Fractura Del Femur</td>
                <td><?php echo $S72 ?></td>
                <td><?php echo $S72_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S73 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De La Articulacion Y De Los Ligamentos De La Cadera</td>
                <td><?php echo $S73 ?></td>
                <td><?php echo $S73_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S74 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios A Nivel De La Cadera Y Del Muslo</td>
                <td><?php echo $S74 ?></td>
                <td><?php echo $S74_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S75 > 0) { ?>
            <tr>
                <td>Traumatismo De Vasos Sanguineos A De La Nivel Cadera Y Del Muslo</td>
                <td><?php echo $S75 ?></td>
                <td><?php echo $S75_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S76 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculo A Nivel De La Cadera Y Del Muslo</td>
                <td><?php echo $S76 ?></td>
                <td><?php echo $S76_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S77 > 0) { ?>
            <tr>
                <td>Traumatismo Aplastamiento De La Cadera Y Del Muslo</td>
                <td><?php echo $S77 ?></td>
                <td><?php echo $S77_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S78 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica De La Cadera Y Del Muslo</td>
                <td><?php echo $S78 ?></td>
                <td><?php echo $S78_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S79 > 0) { ?>
            <tr>
                <td>Otros Traumatismo Y Los No Especificados De La Cadera Y Del Muslo</td>
                <td><?php echo $S79 ?></td>
                <td><?php echo $S79_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S80 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial De La Pierna</td>
                <td><?php echo $S80 ?></td>
                <td><?php echo $S80_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S81 > 0) { ?>
            <tr>
                <td>Herida De La Pierna</td>
                <td><?php echo $S81 ?></td>
                <td><?php echo $S81_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S82 > 0) { ?>
            <tr>
                <td>Fractura Pierna, Inclusive El Tobillo</td>
                <td><?php echo $S82 ?></td>
                <td><?php echo $S82_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S83 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos De La Rodilla</td>
                <td><?php echo $S83 ?></td>
                <td><?php echo $S83_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S84 > 0) { ?>
            <tr>
                <td>Traumatismo De Nervios A Nivel De La Pierna</td>
                <td><?php echo $S84 ?></td>
                <td><?php echo $S84_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S85 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculo A Nivel De La Pierna</td>
                <td><?php echo $S85 ?></td>
                <td><?php echo $S85_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S86 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculo A Nivel De La Pierna</td>
                <td><?php echo $S86 ?></td>
                <td><?php echo $S86_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S87 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento De La Pierna</td>
                <td><?php echo $S87 ?></td>
                <td><?php echo $S87_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S88 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica De La Pierna</td>
                <td><?php echo $S88 ?></td>
                <td><?php echo $S88_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S89 > 0) { ?>
            <tr>
                <td>Otros Traumatismos Y Los No Especificados De La Pierna</td>
                <td><?php echo $S89 ?></td>
                <td><?php echo $S89_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S90 > 0) { ?>
            <tr>
                <td>Traumatismo Superficial Del Tobillo Y Del Pie</td>
                <td><?php echo $S90 ?></td>
                <td><?php echo $S90_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S91 > 0) { ?>
            <tr>
                <td>Herida Del Tobillo Y Del Pie</td>
                <td><?php echo $S91 ?></td>
                <td><?php echo $S91_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S92 > 0) { ?>
            <tr>
                <td>Fractura Del Pie, Excepto Del Tobillo</td>
                <td><?php echo $S92 ?></td>
                <td><?php echo $S92_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S93 > 0) { ?>
            <tr>
                <td>Luxacion, Esguince Y Torcedura De Articulaciones Y Ligamentos Del Tobillo Y Del Pie</td>
                <td><?php echo $S93 ?></td>
                <td><?php echo $S93_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S94 > 0) { ?>
            <tr>
                <td>Traumatismo Nervioso A Nivel Del Pie Y Del Tobillo</td>
                <td><?php echo $S94 ?></td>
                <td><?php echo $S94_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S95 > 0) { ?>
            <tr>
                <td>Traumatismo De Vasos Sanguineos A Nivel Del Tobillo Y Del Pie</td>
                <td><?php echo $S95 ?></td>
                <td><?php echo $S95_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S96 > 0) { ?>
            <tr>
                <td>Traumatismo De Tendon Y Musculo A Nivel Del Tobillo Y Del Pie</td>
                <td><?php echo $S96 ?></td>
                <td><?php echo $S96_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S97 > 0) { ?>
            <tr>
                <td>Traumatismo Por Aplastamiento Del Pie Y Del Tobillo</td>
                <td><?php echo $S97 ?></td>
                <td><?php echo $S97_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($S98 > 0) { ?>
            <tr>
                <td>Amputacion Traumatica Del Pie Y Del Tobillo</td>
                <td><?php echo $S98 ?></td>
                <td><?php echo $S98_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($S99 > 0) { ?>
            <tr>
                <td>Otros Traumatismo Y Los No Especificados Del Tobillo Y Del Pie</td>
                <td><?php echo $S99 ?></td>
                <td><?php echo $S99_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T000 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan la cabeza con el cuello</td>
                <td><?php echo $T000 ?></td>
                <td><?php echo $T000_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T001 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan el torax con el abdomen, la region lumbosacra y la pelvis</td>
                <td><?php echo $T001 ?></td>
                <td><?php echo $T001_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T002 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan multiples regiones del(os) miembro(s) superior(es)</td>
                <td><?php echo $T002 ?></td>
                <td><?php echo $T002_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T003 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan multiples regiones del(de los) miembro(s) inferior(es)</td>
                <td><?php echo $T003 ?></td>
                <td><?php echo $T003_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T006 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan multiples regiones del (de los) miembro(s) superior(es) con miembro(s) inferior(es)</td>
                <td><?php echo $T006 ?></td>
                <td><?php echo $T006_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T008 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales que afectan otras combinaciones de regiones del cuerpo</td>
                <td><?php echo $T008 ?></td>
                <td><?php echo $T008_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T009 > 0) { ?>
            <tr>
                <td>Traumatismos superficiales multiples, no especificados</td>
                <td><?php echo $T009 ?></td>
                <td><?php echo $T009_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T010 > 0) { ?>
            <tr>
                <td>Heridas que afectan la cabeza con el cuello</td>
                <td><?php echo $T010 ?></td>
                <td><?php echo $T010_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T011 > 0) { ?>
            <tr>
                <td>Heridas que afectan el torax con el abdomen, la region lumbosacra y la pelvis</td>
                <td><?php echo $T011 ?></td>
                <td><?php echo $T011_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T012 > 0) { ?>
            <tr>
                <td>Heridas que afectan multiples regiones del (de los) miembro(s) superior(es)</td>
                <td><?php echo $T012 ?></td>
                <td><?php echo $T012_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T013 > 0) { ?>
            <tr>
                <td>Heridas que afectan multiples regiones del (de los) miembro(s) inferior(es)</td>
                <td><?php echo $T013 ?></td>
                <td><?php echo $T013_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T016 > 0) { ?>
            <tr>
                <td>Heridas que afectan multiples regiones del (de los) miembro(s) superior(es) con miembro(s) inferior(es)</td>
                <td><?php echo $T016 ?></td>
                <td><?php echo $T016_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T018 > 0) { ?>
            <tr>
                <td>Heridas que afectan otras combinaciones de las regiones del cuerpo</td>
                <td><?php echo $T018 ?></td>
                <td><?php echo $T018_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T019 > 0) { ?>
            <tr>
                <td>Heridas multiples, no especificadas</td>
                <td><?php echo $T019 ?></td>
                <td><?php echo $T019_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T020 > 0) { ?>
            <tr>
                <td>Fracturas que afectan la cabeza con el cuello</td>
                <td><?php echo $T020 ?></td>
                <td><?php echo $T020_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T021 > 0) { ?>
            <tr>
                <td>Fracturas que afectan el torax con la region lumbosacra y la pelvis</td>
                <td><?php echo $T021 ?></td>
                <td><?php echo $T021_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T022 > 0) { ?>
            <tr>
                <td>Fracturas que afectan multiples regiones de un miembro superior</td>
                <td><?php echo $T022 ?></td>
                <td><?php echo $T022_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T023 > 0) { ?>
            <tr>
                <td>Fracturas que afectan multiples regiones de un miembro inferior</td>
                <td><?php echo $T023 ?></td>
                <td><?php echo $T023_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T024 > 0) { ?>
            <tr>
                <td>Fracturas que afectan multiples regiones de ambos miembros superiores</td>
                <td><?php echo $T024 ?></td>
                <td><?php echo $T024_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T025 > 0) { ?>
            <tr>
                <td>Fracturas que afectan multiples regiones de ambos miembros inferiores</td>
                <td><?php echo $T025 ?></td>
                <td><?php echo $T025_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T026 > 0) { ?>
            <tr>
                <td>Fracturas que afectan multiples regiones de miembro(s) superior(es) con miembro(s) inferior(es)</td>
                <td><?php echo $T026 ?></td>
                <td><?php echo $T026_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T027 > 0) { ?>
            <tr>
                <td>Fracturas que afectan el torax con la region lumbosacra y la pelvis con miembro(s)</td>
                <td><?php echo $T027 ?></td>
                <td><?php echo $T027_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T028 > 0) { ?>
            <tr>
                <td>Fracturas que afectan otras combinaciones de las regiones del cuerpo</td>
                <td><?php echo $T028 ?></td>
                <td><?php echo $T028_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T029 > 0) { ?>
            <tr>
                <td>Fracturas multiples, no especificadas</td>
                <td><?php echo $T029 ?></td>
                <td><?php echo $T029_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T030 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces que afectan la cabeza con el cuello</td>
                <td><?php echo $T030 ?></td>
                <td><?php echo $T030_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T031 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces que afectan el torax con la region lumbosacra y la pelvis</td>
                <td><?php echo $T031 ?></td>
                <td><?php echo $T031_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T032 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces que afectan multiples regiones del (de los) miembros(s) superior(es)</td>
                <td><?php echo $T032 ?></td>
                <td><?php echo $T032_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T033 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces que afectan multiples regiones del (de los) miembro(s) inferior(es)</td>
                <td><?php echo $T033 ?></td>
                <td><?php echo $T033_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T034 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras esguinces que afectan  multiples regiones del (de los) miembro(s) superior(es) con miembro(s) inferior(es)</td>
                <td><?php echo $T034 ?></td>
                <td><?php echo $T034_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T038 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces que afectan otras combinaciones de regiones del cuerpo</td>
                <td><?php echo $T038 ?></td>
                <td><?php echo $T038_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T039 > 0) { ?>
            <tr>
                <td>Luxaciones, torceduras y esguinces multiples, no especificado</td>
                <td><?php echo $T039 ?></td>
                <td><?php echo $T039_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T040 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afectan la cabeza con el cuello</td>
                <td><?php echo $T040 ?></td>
                <td><?php echo $T040_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T041 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afectan el torax con el abdomen, la region lumbosacra y la pelvis</td>
                <td><?php echo $T041 ?></td>
                <td><?php echo $T041_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T042 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afectan multiples regiones del (de los) miembro(s) superior(es)</td>
                <td><?php echo $T042 ?></td>
                <td><?php echo $T042_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T043 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afectan multiples regiones del (de los) miembro(s) inferior(es)</td>
                <td><?php echo $T043 ?></td>
                <td><?php echo $T043_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T044 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afecta multiples regiones del (de los) miembro(s) superior(es) con miembro(s) inferior(es)</td>
                <td><?php echo $T044 ?></td>
                <td><?php echo $T044_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T047 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento del torax, del abdomen, de la region lumbosacra y de la pelvis con miembro(s)</td>
                <td><?php echo $T047 ?></td>
                <td><?php echo $T047_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T048 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento que afectan otras combinaciones de regiones del cuerpo</td>
                <td><?php echo $T048 ?></td>
                <td><?php echo $T048_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T049 > 0) { ?>
            <tr>
                <td>Traumatismos por aplastamiento multiple, no especificados</td>
                <td><?php echo $T049 ?></td>
                <td><?php echo $T049_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T050 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de ambas manos</td>
                <td><?php echo $T050 ?></td>
                <td><?php echo $T050_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T051 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de una mano y el otro brazo [cualquier nivel, excepto mano]</td>
                <td><?php echo $T051 ?></td>
                <td><?php echo $T051_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T052 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de ambos brazos [cualquier nivel]</td>
                <td><?php echo $T052 ?></td>
                <td><?php echo $T052_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T053 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de ambos pies</td>
                <td><?php echo $T053 ?></td>
                <td><?php echo $T053_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T054 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de un pie y la otra pierna [cualquier nivel, excepto pie]</td>
                <td><?php echo $T054 ?></td>
                <td><?php echo $T054_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T055 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de ambas piernas [cualquier nivel]</td>
                <td><?php echo $T055 ?></td>
                <td><?php echo $T055_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T056 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de miembros superior(es) e inferior(es), cualquier combinacion [cualquier nivel]</td>
                <td><?php echo $T056 ?></td>
                <td><?php echo $T056_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T058 > 0) { ?>
            <tr>
                <td>Amputacion traumatica que afecta otras combinaciones de regiones del cuerpo</td>
                <td><?php echo $T058 ?></td>
                <td><?php echo $T058_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T059 > 0) { ?>
            <tr>
                <td>Amputaciones traumaticas multiples, no especificadas</td>
                <td><?php echo $T059 ?></td>
                <td><?php echo $T059_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T060 > 0) { ?>
            <tr>
                <td>Traumatismos del encefalo y de nervios craneales con traumatismo de nervios y medula espinal a nivel del cuello</td>
                <td><?php echo $T060 ?></td>
                <td><?php echo $T060_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T061 > 0) { ?>
            <tr>
                <td>Traumatismos de nervios y medula espinal que afectan otras multiples regiones del cuerpo</td>
                <td><?php echo $T061 ?></td>
                <td><?php echo $T061_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T062 > 0) { ?>
            <tr>
                <td>Traumatismos de nervios que afectan multiples regiones del cuerpo</td>
                <td><?php echo $T062 ?></td>
                <td><?php echo $T062_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T063 > 0) { ?>
            <tr>
                <td>Traumatismos de vasos sanguineos que afectan multiples regiones del cuerpo</td>
                <td><?php echo $T063 ?></td>
                <td><?php echo $T063_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T064 > 0) { ?>
            <tr>
                <td>Traumatismos de tendones y musculos que afectan multiples regiones del cuerpo</td>
                <td><?php echo $T064 ?></td>
                <td><?php echo $T064_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T065 > 0) { ?>
            <tr>
                <td>Traumatismos de organos intratoracicos con organos intraabdominales y pelvicos</td>
                <td><?php echo $T065 ?></td>
                <td><?php echo $T065_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T068 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados que afectan multiples regiones del cuerpo</td>
                <td><?php echo $T068 ?></td>
                <td><?php echo $T068_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T07X > 0) { ?>
            <tr>
                <td>Traumatismos multiples, no especificados</td>
                <td><?php echo $T07X ?></td>
                <td><?php echo $T07X_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T08X > 0) { ?>
            <tr>
                <td>Fractura de la columna vertebral, nivel no especificado</td>
                <td><?php echo $T08X ?></td>
                <td><?php echo $T08X_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T090 > 0) { ?>
            <tr>
                <td>Traumatismo superficial del tronco, nivel no especificado</td>
                <td><?php echo $T090 ?></td>
                <td><?php echo $T090_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T091 > 0) { ?>
            <tr>
                <td>Herida del tronco, nivel no especificado</td>
                <td><?php echo $T091 ?></td>
                <td><?php echo $T091_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T092 > 0) { ?>
            <tr>
                <td>Luxacion, esguince o torcedura de articulacion y ligamentos del tronco, no especificado</td>
                <td><?php echo $T092 ?></td>
                <td><?php echo $T092_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T093 > 0) { ?>
            <tr>
                <td>Traumatismo de la medula espinal, nivel no especificado</td>
                <td><?php echo $T093 ?></td>
                <td><?php echo $T093_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T094 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios, raiz de nervio espinal y plexos del tronco no especificados</td>
                <td><?php echo $T094 ?></td>
                <td><?php echo $T094_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T095 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos del tronco no especificados</td>
                <td><?php echo $T095 ?></td>
                <td><?php echo $T095_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T096 > 0) { ?>
            <tr>
                <td>Amputacion traumatica del tronco, nivel no especificado</td>
                <td><?php echo $T096 ?></td>
                <td><?php echo $T096_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T098 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados del tronco, nivel no especificado</td>
                <td><?php echo $T098 ?></td>
                <td><?php echo $T098_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T099 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado del tronco, nivel no especificado</td>
                <td><?php echo $T099 ?></td>
                <td><?php echo $T099_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T10X > 0) { ?>
            <tr>
                <td>Fractura de miembro superior, nivel no especificado</td>
                <td><?php echo $T10X ?></td>
                <td><?php echo $T10X_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T110 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de miembro superior, nivel no especificado</td>
                <td><?php echo $T110 ?></td>
                <td><?php echo $T110_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T111 > 0) { ?>
            <tr>
                <td>Herida de miembro superior, nivel no especificado</td>
                <td><?php echo $T111 ?></td>
                <td><?php echo $T111_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T112 > 0) { ?>
            <tr>
                <td>Luxacion, esguince o torcedura de articulacion o ligamento no especificado de miembro superior, nivel no especificado</td>
                <td><?php echo $T112 ?></td>
                <td><?php echo $T112_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T113 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio no especificado de miembro superior, nivel no especificado</td>
                <td><?php echo $T113 ?></td>
                <td><?php echo $T113_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T114 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos no especificados de miembro superior, nivel no especificado</td>
                <td><?php echo $T114 ?></td>
                <td><?php echo $T114_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T115 > 0) { ?>
            <tr>
                <td>Traumatismo de tendon y musculo no especificados de miembro superior, nivel no especificado</td>
                <td><?php echo $T115 ?></td>
                <td><?php echo $T115_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($t116 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de miembro superior, nivel no especificado</td>
                <td><?php echo $t116 ?></td>
                <td><?php echo $t116_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($t118 > 0) { ?>
            <tr>
                <td>vzOtros traumatismos especificados de miembro superior, nivel no especificado</td>
                <td><?php echo $t118 ?></td>
                <td><?php echo $t118_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($t119 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado de miembro superior, nivel no especificado</td>
                <td><?php echo $t119 ?></td>
                <td><?php echo $t119_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T12X > 0) { ?>
            <tr>
                <td>Fractura de miembro inferior, nivel no especificado</td>
                <td><?php echo $T12X ?></td>
                <td><?php echo $T12X_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T130 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de miembro inferior, nivel no especificado.</td>
                <td><?php echo $T130 ?></td>
                <td><?php echo $T130_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T131 > 0) { ?>
            <tr>
                <td>Herida de miembro inferior, nivel no especificado</td>
                <td><?php echo $T131 ?></td>
                <td><?php echo $T131_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T132 > 0) { ?>
            <tr>
                <td>Luxacion, esguince o torcedura de articulacion y ligamentos no especificados de miembro inferior, nivel no especificado</td>
                <td><?php echo $T132 ?></td>
                <td><?php echo $T132_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T133 > 0) { ?>
            <tr>
                <td>Traumatismo de nervios no especificados de miembro inferior, nivel no especificado</td>
                <td><?php echo $T133 ?></td>
                <td><?php echo $T133_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T134 > 0) { ?>
            <tr>
                <td>Traumatismo de vasos sanguineos no especificados de miembro inferior, nivel no especificado</td>
                <td><?php echo $T134 ?></td>
                <td><?php echo $T134_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T135 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos no especificados de miembro inferior, nivel no especificado</td>
                <td><?php echo $T135 ?></td>
                <td><?php echo $T135_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T136 > 0) { ?>
            <tr>
                <td>Amputacion traumatica de miembro inferior, nivel no especificado</td>
                <td><?php echo $T136 ?></td>
                <td><?php echo $T136_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T138 > 0) { ?>
            <tr>
                <td>Otros traumatismos especificados de miembro inferior, nivel no especificado</td>
                <td><?php echo $T138 ?></td>
                <td><?php echo $T138_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T139 > 0) { ?>
            <tr>
                <td>Traumatismo no especificado de miembro inferior, nivel no especificado</td>
                <td><?php echo $T139 ?></td>
                <td><?php echo $T139_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T140 > 0) { ?>
            <tr>
                <td>Traumatismo superficial de region no especificada del cuerpo</td>
                <td><?php echo $T140 ?></td>
                <td><?php echo $T140_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T141 > 0) { ?>
            <tr>
                <td>Herida de region no especificada del cuerpo</td>
                <td><?php echo $T141 ?></td>
                <td><?php echo $T141_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T142 > 0) { ?>
            <tr>
                <td>Fractura de region no especificada del cuerpo</td>
                <td><?php echo $T142 ?></td>
                <td><?php echo $T142_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T143 > 0) { ?>
            <tr>
                <td>Luxacion, esguince y torcedura de region no especificada del cuerpo</td>
                <td><?php echo $T143 ?></td>
                <td><?php echo $T143_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T144 > 0) { ?>
            <tr>
                <td>Traumatismo de nervio(s) de region no especificada del cuerpo</td>
                <td><?php echo $T144 ?></td>
                <td><?php echo $T144_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T145 > 0) { ?>
            <tr>
                <td>Traumatismo de vaso(s) sanguineo(s) de region no especificada del cuerpo</td>
                <td><?php echo $T145 ?></td>
                <td><?php echo $T145_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T146 > 0) { ?>
            <tr>
                <td>Traumatismo de tendones y musculos de region no especificada del cuerpo</td>
                <td><?php echo $T146 ?></td>
                <td><?php echo $T146_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T147 > 0) { ?>
            <tr>
                <td>Traumatismo por aplastamiento y amputacion traumatica de regiones no especificadas del cuerpo</td>
                <td><?php echo $T147 ?></td>
                <td><?php echo $T147_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T148 > 0) { ?>
            <tr>
                <td>Otros traumatismos de region no especificada del cuerpo</td>
                <td><?php echo $T148 ?></td>
                <td><?php echo $T148_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T149 > 0) { ?>
            <tr>
                <td>Traumatismo, no especificado</td>
                <td><?php echo $T149 ?></td>
                <td><?php echo $T149_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T220 > 0) { ?>
            <tr>
                <td>Quemadura del hombro y miembro superior, grado no especificado, excepto de la muneca y de la mano</td>
                <td><?php echo $T220 ?></td>
                <td><?php echo $T220_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T221 > 0) { ?>
            <tr>
                <td>Quemadura del hombro y miembro superior, de primer grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T221 ?></td>
                <td><?php echo $T221_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T222 > 0) { ?>
            <tr>
                <td>Quemadura del hombro y miembro superior, de segundo grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T222 ?></td>
                <td><?php echo $T222_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T223 > 0) { ?>
            <tr>
                <td>Quemadura del hombro y miembro superior, de tercer grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T223 ?></td>
                <td><?php echo $T223_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T224 > 0) { ?>
            <tr>
                <td>Corrosion del hombro y miembro superior, grado no especificado, excepto de la muneca y de la mano</td>
                <td><?php echo $T224 ?></td>
                <td><?php echo $T224_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T225 > 0) { ?>
            <tr>
                <td>Corrosion del hombro y miembro superior, de primer grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T225 ?></td>
                <td><?php echo $T225_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T226 > 0) { ?>
            <tr>
                <td>Corrosion del hombro y miembro superior, de segundo grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T226 ?></td>
                <td><?php echo $T226_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T227 > 0) { ?>
            <tr>
                <td>Corrosion del hombro y miembro superior, de tercer grado, excepto de la muneca y de la mano</td>
                <td><?php echo $T227 ?></td>
                <td><?php echo $T227_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T230 > 0) { ?>
            <tr>
                <td>Quemadura de la muneca y de la mano, grado no especificado</td>
                <td><?php echo $T230 ?></td>
                <td><?php echo $T230_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T231 > 0) { ?>
            <tr>
                <td>Quemadura de la muneca y de la mano, de primer grado</td>
                <td><?php echo $T231 ?></td>
                <td><?php echo $T231_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T232 > 0) { ?>
            <tr>
                <td>Quemadura de la muneca y de la mano, de segundo grado</td>
                <td><?php echo $T232 ?></td>
                <td><?php echo $T232_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T233 > 0) { ?>
            <tr>
                <td>Quemadura de la muneca y de la mano, de tercer grado</td>
                <td><?php echo $T233 ?></td>
                <td><?php echo $T233_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T234 > 0) { ?>
            <tr>
                <td>Corrosion de la muneca y de la mano, grado no especificado</td>
                <td><?php echo $T234 ?></td>
                <td><?php echo $T234_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T235 > 0) { ?>
            <tr>
                <td>Corrosion de la muneca y de la mano, de primer grado</td>
                <td><?php echo $T235 ?></td>
                <td><?php echo $T235_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T236 > 0) { ?>
            <tr>
                <td>Corrosion de la muneca y de la mano, de segundo grado</td>
                <td><?php echo $T236 ?></td>
                <td><?php echo $T236_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T237 > 0) { ?>
            <tr>
                <td>Corrosion de la muneca y de la mano, de tercer grado</td>
                <td><?php echo $T237 ?></td>
                <td><?php echo $T237_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T240 > 0) { ?>
            <tr>
                <td>Quemadura de la cadera y miembro inferior, grado no especificado, excepto tobillo y pie</td>
                <td><?php echo $T240 ?></td>
                <td><?php echo $T240_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T241 > 0) { ?>
            <tr>
                <td>Quemadura de la cadera y miembro inferior, de primer grado, excepto tobillo y pie</td>
                <td><?php echo $T241 ?></td>
                <td><?php echo $T241_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T242 > 0) { ?>
            <tr>
                <td>Quemadura de la cadera y miembro inferior, de segundo grado , excepto tobillo y pie</td>
                <td><?php echo $T242 ?></td>
                <td><?php echo $T242_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T243 > 0) { ?>
            <tr>
                <td>Quemadura de la cadera y miembro inferior, de tercer grado, excepto tobillo y pie</td>
                <td><?php echo $T243 ?></td>
                <td><?php echo $T243_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T244 > 0) { ?>
            <tr>
                <td>Corrosion de la cadera y miembro inferior, grado no especificado, excepto tobillo y pie</td>
                <td><?php echo $T244 ?></td>
                <td><?php echo $T244_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T245 > 0) { ?>
            <tr>
                <td>Corrosion de la cadera y miembro inferior, de primer grado, excepto tobillo y pie</td>
                <td><?php echo $T245 ?></td>
                <td><?php echo $T245_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T246 > 0) { ?>
            <tr>
                <td>Corrosion de la cadera y miembro inferior, de segundo grado, excepto tobillo y pie</td>
                <td><?php echo $T246 ?></td>
                <td><?php echo $T246_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T247 > 0) { ?>
            <tr>
                <td>Corrosion de la cadera y miembro inferior, de tercer grado, excepto tobillo y pie</td>
                <td><?php echo $T247 ?></td>
                <td><?php echo $T247_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T250 > 0) { ?>
            <tr>
                <td>Quemadura del tobillo y del pie, grado no especificado</td>
                <td><?php echo $T250 ?></td>
                <td><?php echo $T250_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T251 > 0) { ?>
            <tr>
                <td>Quemadura del tobillo y del pie, de primer grado</td>
                <td><?php echo $T251 ?></td>
                <td><?php echo $T251_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T252 > 0) { ?>
            <tr>
                <td>Quemadura del tobillo y del pie, de segundo grado</td>
                <td><?php echo $T252 ?></td>
                <td><?php echo $T252_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T253 > 0) { ?>
            <tr>
                <td>Quemadura del tobillo y del pie, de tercer grado</td>
                <td><?php echo $T253 ?></td>
                <td><?php echo $T253_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T254 > 0) { ?>
            <tr>
                <td>Corrosion del tobillo y del pie, grado no especificado</td>
                <td><?php echo $T254 ?></td>
                <td><?php echo $T254_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T255 > 0) { ?>
            <tr>
                <td>Corrosion del tobillo y del pie, de primer grado</td>
                <td><?php echo $T255 ?></td>
                <td><?php echo $T255_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T256 > 0) { ?>
            <tr>
                <td>Corrosion del tobillo y del pie, de segundo grado</td>
                <td><?php echo $T256 ?></td>
                <td><?php echo $T256_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T257 > 0) { ?>
            <tr>
                <td>Corrosion del tobillo y del pie, de tercer grado</td>
                <td><?php echo $T257 ?></td>
                <td><?php echo $T257_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T260 > 0) { ?>
            <tr>
                <td>Quemadura del parpado y area periocular</td>
                <td><?php echo $T260 ?></td>
                <td><?php echo $T260_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T261 > 0) { ?>
            <tr>
                <td>Quemadura de la cornea y saco conjuntiva</td>
                <td><?php echo $T261 ?></td>
                <td><?php echo $T261_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T262 > 0) { ?>
            <tr>
                <td>Quemadura con ruptura y destruccion resultantes del globo ocular</td>
                <td><?php echo $T262 ?></td>
                <td><?php echo $T262_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T263 > 0) { ?>
            <tr>
                <td>Quemadura de otras partes del ojo y sus anexos</td>
                <td><?php echo $T263 ?></td>
                <td><?php echo $T263_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T264 > 0) { ?>
            <tr>
                <td>Quemadura del ojo y anexos, parte no especificada</td>
                <td><?php echo $T264 ?></td>
                <td><?php echo $T264_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T265 > 0) { ?>
            <tr>
                <td>Corrosion del parpado y area periocular</td>
                <td><?php echo $T265 ?></td>
                <td><?php echo $T265_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T266 > 0) { ?>
            <tr>
                <td>Corrosion de la cornea y saco conjuntival</td>
                <td><?php echo $T266 ?></td>
                <td><?php echo $T266_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T267 > 0) { ?>
            <tr>
                <td>Corrosion con ruptura y destruccion resultantes del globo ocular</td>
                <td><?php echo $T267 ?></td>
                <td><?php echo $T267_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T268 > 0) { ?>
            <tr>
                <td>Corrosion de otras partes del ojo y sus anexos</td>
                <td><?php echo $T268 ?></td>
                <td><?php echo $T268_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T269 > 0) { ?>
            <tr>
                <td>Corrosion del ojo y sus anexos, parte no especificada</td>
                <td><?php echo $T269 ?></td>
                <td><?php echo $T269_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T270 > 0) { ?>
            <tr>
                <td>Quemadura de la laringe y de la traquea</td>
                <td><?php echo $T270 ?></td>
                <td><?php echo $T270_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T271 > 0) { ?>
            <tr>
                <td>Quemadura que afecta la laringe y la traquea con el pulmon</td>
                <td><?php echo $T271 ?></td>
                <td><?php echo $T271_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T272 > 0) { ?>
            <tr>
                <td>Quemadura de otras partes de las vias respiratorias</td>
                <td><?php echo $T272 ?></td>
                <td><?php echo $T272_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T273 > 0) { ?>
            <tr>
                <td>Quemadura de las vias respiratorias, parte no especificada</td>
                <td><?php echo $T273 ?></td>
                <td><?php echo $T273_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T274 > 0) { ?>
            <tr>
                <td>Corrosion de la laringe y de la traquea</td>
                <td><?php echo $T274 ?></td>
                <td><?php echo $T274_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T275 > 0) { ?>
            <tr>
                <td>Corrosion que afecta la laringe y la traquea con el pulmon</td>
                <td><?php echo $T275 ?></td>
                <td><?php echo $T275_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T276 > 0) { ?>
            <tr>
                <td>Corrosion de otras partes de las vias respiratorias</td>
                <td><?php echo $T276 ?></td>
                <td><?php echo $T276_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T277 > 0) { ?>
            <tr>
                <td>Corrosion de las vias respiratorias, parte no especificada</td>
                <td><?php echo $T277 ?></td>
                <td><?php echo $T277_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T280 > 0) { ?>
            <tr>
                <td>Quemadura de la boca y de la faringe</td>
                <td><?php echo $T280 ?></td>
                <td><?php echo $T280_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T281 > 0) { ?>
            <tr>
                <td>Quemadura del esofago</td>
                <td><?php echo $T281 ?></td>
                <td><?php echo $T281_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T282 > 0) { ?>
            <tr>
                <td>Quemadura de otras partes del tubo digestivo</td>
                <td><?php echo $T282 ?></td>
                <td><?php echo $T282_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T283 > 0) { ?>
            <tr>
                <td>Quemadura de organos genitourinarios internos</td>
                <td><?php echo $T283 ?></td>
                <td><?php echo $T283_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T284 > 0) { ?>
            <tr>
                <td>Quemadura de otros organos internos y de los no especificados</td>
                <td><?php echo $T284 ?></td>
                <td><?php echo $T284_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T285 > 0) { ?>
            <tr>
                <td>Corrosion de la boca y de la faringe</td>
                <td><?php echo $T285 ?></td>
                <td><?php echo $T285_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T286 > 0) { ?>
            <tr>
                <td>Corrosion del esofago</td>
                <td><?php echo $T286 ?></td>
                <td><?php echo $T286_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T287 > 0) { ?>
            <tr>
                <td>Corrosion de otras partes del tubo digestivo</td>
                <td><?php echo $T287 ?></td>
                <td><?php echo $T287_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T288 > 0) { ?>
            <tr>
                <td>Corrosion de organos genitourinarios internos</td>
                <td><?php echo $T288 ?></td>
                <td><?php echo $T288_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T289 > 0) { ?>
            <tr>
                <td>Corrosion de otros organos internos y de los no especificados</td>
                <td><?php echo $T289 ?></td>
                <td><?php echo $T289_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T290 > 0) { ?>
            <tr>
                <td>Quemaduras de multiples regiones, grado no especificado</td>
                <td><?php echo $T290 ?></td>
                <td><?php echo $T290_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T291 > 0) { ?>
            <tr>
                <td>Quemaduras de multiples regiones, mencionadas como de no mas de primer grado</td>
                <td><?php echo $T291 ?></td>
                <td><?php echo $T291_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T292 > 0) { ?>
            <tr>
                <td>Quemaduras de multiples regiones, mencionadas como de no mas de segundo grado</td>
                <td><?php echo $T292 ?></td>
                <td><?php echo $T292_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T293 > 0) { ?>
            <tr>
                <td>Quemaduras multiples, con mencion al menos de una Quemadura de tercer grado</td>
                <td><?php echo $T293 ?></td>
                <td><?php echo $T293_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T294 > 0) { ?>
            <tr>
                <td>Corrosiones de multiples regiones, grado no especificado</td>
                <td><?php echo $T294 ?></td>
                <td><?php echo $T294_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T295 > 0) { ?>
            <tr>
                <td>Corrosiones multiples, mencionadas como de no mas de primer grado</td>
                <td><?php echo $T295 ?></td>
                <td><?php echo $T295_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T296 > 0) { ?>
            <tr>
                <td>Corrosiones multiples, mencionadas como de no mas de segundo grado</td>
                <td><?php echo $T296 ?></td>
                <td><?php echo $T296_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T297 > 0) { ?>
            <tr>
                <td>Corrosiones multiples, con mencion al menos de una corrosion de tercer grado</td>
                <td><?php echo $T297 ?></td>
                <td><?php echo $T297_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T300 > 0) { ?>
            <tr>
                <td>Quemadura de region del cuerpo y grado no especificados</td>
                <td><?php echo $T300 ?></td>
                <td><?php echo $T300_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T301 > 0) { ?>
            <tr>
                <td>Quemadura de primer grado, region del cuerpo no especificada</td>
                <td><?php echo $T301 ?></td>
                <td><?php echo $T301_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T302 > 0) { ?>
            <tr>
                <td>Quemadura de segundo grado, region del cuerpo no especificada</td>
                <td><?php echo $T302 ?></td>
                <td><?php echo $T302_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T303 > 0) { ?>
            <tr>
                <td>Quemadura de tercer grado, region del cuerpo no especificada</td>
                <td><?php echo $T303 ?></td>
                <td><?php echo $T303_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T304 > 0) { ?>
            <tr>
                <td>Corrosion de region del cuerpo y grado no especificados</td>
                <td><?php echo $T304 ?></td>
                <td><?php echo $T304_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T305 > 0) { ?>
            <tr>
                <td>Corrosion de primer grado, region del cuerpo no especificada</td>
                <td><?php echo $T305 ?></td>
                <td><?php echo $T305_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T306 > 0) { ?>
            <tr>
                <td>Corrosion de segundo grado, region del cuerpo no especificada</td>
                <td><?php echo $T306 ?></td>
                <td><?php echo $T306_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T307 > 0) { ?>
            <tr>
                <td>Corrosion de tercer grado, region del cuerpo no especificada</td>
                <td><?php echo $T307 ?></td>
                <td><?php echo $T307_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T310 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan menos del 10% de la superficie del cuerpo</td>
                <td><?php echo $T310 ?></td>
                <td><?php echo $T310_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T311 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 10 al 19% de la superficie del cuerpo</td>
                <td><?php echo $T311 ?></td>
                <td><?php echo $T311_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T312 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 20 al 29% de la superficie del cuerpo</td>
                <td><?php echo $T312 ?></td>
                <td><?php echo $T312_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T313 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 30 al 39% de la superficie del cuerpo</td>
                <td><?php echo $T313 ?></td>
                <td><?php echo $T313_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T314 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 40 al 49% de la superficie del cuerpo</td>
                <td><?php echo $T314 ?></td>
                <td><?php echo $T314_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T315 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 50 al 59% de la superficie del cuerpo</td>
                <td><?php echo $T315 ?></td>
                <td><?php echo $T315_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T316 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 60 al 69% de la superficie del cuerpo</td>
                <td><?php echo $T316 ?></td>
                <td><?php echo $T316_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T317 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 70 al 79% de la superficie del cuerpo</td>
                <td><?php echo $T317 ?></td>
                <td><?php echo $T317_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T318 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan del 80 al 89% de la superficie del cuerpo</td>
                <td><?php echo $T318 ?></td>
                <td><?php echo $T318_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T319 > 0) { ?>
            <tr>
                <td>Quemaduras que afectan el 90% o mas de la superficie del cuerpo</td>
                <td><?php echo $T319 ?></td>
                <td><?php echo $T319_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T320 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan menos del 10% de la superficie del cuerpo</td>
                <td><?php echo $T320 ?></td>
                <td><?php echo $T320_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T321 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 10 al 19% de la superficie del cuerpo</td>
                <td><?php echo $T321 ?></td>
                <td><?php echo $T321_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T322 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 20 al 29% de la superficie del cuerpo</td>
                <td><?php echo $T322 ?></td>
                <td><?php echo $T322_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T323 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 30 al 39% de la superficie del cuerpo</td>
                <td><?php echo $T323 ?></td>
                <td><?php echo $T323_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T324 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 40 al 49% de la superficie del cuerpo</td>
                <td><?php echo $T324 ?></td>
                <td><?php echo $T324_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T325 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 50 al 59% de la superficie del cuerpo</td>
                <td><?php echo $T325 ?></td>
                <td><?php echo $T325_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T326 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 60 al 69% de la superficie del cuerpo</td>
                <td><?php echo $T326 ?></td>
                <td><?php echo $T326_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T327 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 70 al 79% de la superficie del cuerpo</td>
                <td><?php echo $T327 ?></td>
                <td><?php echo $T327_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T328 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan del 80 al 89% de la superficie del cuerpo</td>
                <td><?php echo $T328 ?></td>
                <td><?php echo $T328_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T329 > 0) { ?>
            <tr>
                <td>Corrosiones que afectan el 90% o mas de la superficie del cuerpo</td>
                <td><?php echo $T329 ?></td>
                <td><?php echo $T329_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T330 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de la cabeza</td>
                <td><?php echo $T330 ?></td>
                <td><?php echo $T330_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T331 > 0) { ?>
            <tr>
                <td>Congelamiento superficial del cuello</td>
                <td><?php echo $T331 ?></td>
                <td><?php echo $T331_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T332 > 0) { ?>
            <tr>
                <td>Congelamiento superficial del torax</td>
                <td><?php echo $T332 ?></td>
                <td><?php echo $T332_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T333 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de la pared abdominal, region lumbosacra y pelvis</td>
                <td><?php echo $T333 ?></td>
                <td><?php echo $T333_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T334 > 0) { ?>
            <tr>
                <td>Congelamiento superficial del brazo</td>
                <td><?php echo $T334 ?></td>
                <td><?php echo $T334_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T335 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de la muneca y de la mano</td>
                <td><?php echo $T335 ?></td>
                <td><?php echo $T335_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T336 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de la cadera y del muslo</td>
                <td><?php echo $T336 ?></td>
                <td><?php echo $T336_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T337 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de la rodilla y de la pierna</td>
                <td><?php echo $T337 ?></td>
                <td><?php echo $T337_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T338 > 0) { ?>
            <tr>
                <td>Congelamiento superficial del tobillo y del pie</td>
                <td><?php echo $T338 ?></td>
                <td><?php echo $T338_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T339 > 0) { ?>
            <tr>
                <td>Congelamiento superficial de otros sitios y de los no especificados</td>
                <td><?php echo $T339 ?></td>
                <td><?php echo $T339_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T340 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de la cabeza</td>
                <td><?php echo $T340 ?></td>
                <td><?php echo $T340_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T341 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular del cuello</td>
                <td><?php echo $T341 ?></td>
                <td><?php echo $T341_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T342 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular del torax</td>
                <td><?php echo $T342 ?></td>
                <td><?php echo $T342_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T343 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de la pared abdominal, region lumbosacra y pelvis</td>
                <td><?php echo $T343 ?></td>
                <td><?php echo $T343_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T344 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular del brazo</td>
                <td><?php echo $T344 ?></td>
                <td><?php echo $T344_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T345 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de la muneca y de la mano</td>
                <td><?php echo $T345 ?></td>
                <td><?php echo $T345_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T346 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de la cadera y del muslo</td>
                <td><?php echo $T346 ?></td>
                <td><?php echo $T346_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T347 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de la rodilla y de la pierna</td>
                <td><?php echo $T347 ?></td>
                <td><?php echo $T347_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T348 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular del tobillo y del pie</td>
                <td><?php echo $T348 ?></td>
                <td><?php echo $T348_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T349 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular de otros sitios y de los no especificados</td>
                <td><?php echo $T349 ?></td>
                <td><?php echo $T349_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T350 > 0) { ?>
            <tr>
                <td>Congelamiento superficial que afecta multiples regiones del cuerpo</td>
                <td><?php echo $T350 ?></td>
                <td><?php echo $T350_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T351 > 0) { ?>
            <tr>
                <td>Congelamiento con necrosis tisular que afecta multiples regiones del cuerpo</td>
                <td><?php echo $T351 ?></td>
                <td><?php echo $T351_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T352 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado de la cabeza y del cuello</td>
                <td><?php echo $T352 ?></td>
                <td><?php echo $T352_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T353 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado del torax, del abdomen, de la region lumbosacra y de la pelvis</td>
                <td><?php echo $T353 ?></td>
                <td><?php echo $T353_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T354 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado del miembro superior</td>
                <td><?php echo $T354 ?></td>
                <td><?php echo $T354_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T355 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado del miembro inferior</td>
                <td><?php echo $T355 ?></td>
                <td><?php echo $T355_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T356 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado que afecta multiples regiones del cuerpo</td>
                <td><?php echo $T356 ?></td>
                <td><?php echo $T356_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T357 > 0) { ?>
            <tr>
                <td>Congelamiento no especificado, de sitio no especificado</td>
                <td><?php echo $T357 ?></td>
                <td><?php echo $T357_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T900 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo superficial de la cabeza</td>
                <td><?php echo $T900 ?></td>
                <td><?php echo $T900_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T901 > 0) { ?>
            <tr>
                <td>Secuelas de herida de la cabeza</td>
                <td><?php echo $T901 ?></td>
                <td><?php echo $T901_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T902 > 0) { ?>
            <tr>
                <td>Secuelas de fractura del craneo y de huesos faciales</td>
                <td><?php echo $T902 ?></td>
                <td><?php echo $T902_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T903 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de nervios craneales</td>
                <td><?php echo $T903 ?></td>
                <td><?php echo $T903_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T904 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo del ojo y de la orbita</td>
                <td><?php echo $T904 ?></td>
                <td><?php echo $T904_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T905 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo intracraneal</td>
                <td><?php echo $T905 ?></td>
                <td><?php echo $T905_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T908 > 0) { ?>
            <tr>
                <td>Secuelas de otros traumatismos especificados de la cabeza</td>
                <td><?php echo $T908 ?></td>
                <td><?php echo $T908_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T909 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo no especificado de la cabeza</td>
                <td><?php echo $T909 ?></td>
                <td><?php echo $T909_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T910 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo superficial y de heridas del cuello y del tronco</td>
                <td><?php echo $T910 ?></td>
                <td><?php echo $T910_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T911 > 0) { ?>
            <tr>
                <td>Secuelas de fractura de la columna vertebral</td>
                <td><?php echo $T911 ?></td>
                <td><?php echo $T911_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T912 > 0) { ?>
            <tr>
                <td>Secuelas de otra fractura del torax y de la pelvis</td>
                <td><?php echo $T912 ?></td>
                <td><?php echo $T912_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T913 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de la medula espinal</td>
                <td><?php echo $T913 ?></td>
                <td><?php echo $T913_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T914 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de organos intratoracicos</td>
                <td><?php echo $T914 ?></td>
                <td><?php echo $T914_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T915 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de organos intraabdominales y pelvicos</td>
                <td><?php echo $T915 ?></td>
                <td><?php echo $T915_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T918 > 0) { ?>
            <tr>
                <td>Secuelas de otros traumatismos especificados del cuello y del tronco</td>
                <td><?php echo $T918 ?></td>
                <td><?php echo $T918_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T919 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo no especificado del cuello y del tronco</td>
                <td><?php echo $T919 ?></td>
                <td><?php echo $T919_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T920 > 0) { ?>
            <tr>
                <td>Secuelas de herida de miembro superior</td>
                <td><?php echo $T920 ?></td>
                <td><?php echo $T920_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T921 > 0) { ?>
            <tr>
                <td>Secuelas de fractura del brazo</td>
                <td><?php echo $T921 ?></td>
                <td><?php echo $T921_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T922 > 0) { ?>
            <tr>
                <td>Secuelas de fractura de la muneca y de la mano</td>
                <td><?php echo $T922 ?></td>
                <td><?php echo $T922_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T923 > 0) { ?>
            <tr>
                <td>Secuelas de luxacion, torcedura y esquince de miembro superior</td>
                <td><?php echo $T923 ?></td>
                <td><?php echo $T923_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T924 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de nervio de miembro superio</td>
                <td><?php echo $T924 ?></td>
                <td><?php echo $T924_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T925 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de tendon y musculo de miembro superior</td>
                <td><?php echo $T925 ?></td>
                <td><?php echo $T925_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T926 > 0) { ?>
            <tr>
                <td>Secuelas de aplastamiento y amputacion traumaticas de miembro superior</td>
                <td><?php echo $T926 ?></td>
                <td><?php echo $T926_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T928 > 0) { ?>
            <tr>
                <td>Secuelas de otros traumatismos especificados de miembro superior</td>
                <td><?php echo $T928 ?></td>
                <td><?php echo $T928_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T929 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo no especificado de miembro superior</td>
                <td><?php echo $T929 ?></td>
                <td><?php echo $T929_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T930 > 0) { ?>
            <tr>
                <td>Secuelas de herida de miembro inferior</td>
                <td><?php echo $T930 ?></td>
                <td><?php echo $T930_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T931 > 0) { ?>
            <tr>
                <td>Secuelas de fractura del femur</td>
                <td><?php echo $T931 ?></td>
                <td><?php echo $T931_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T932 > 0) { ?>
            <tr>
                <td>Secuelas de otras fracturas de miembro inferior</td>
                <td><?php echo $T932 ?></td>
                <td><?php echo $T932_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T933 > 0) { ?>
            <tr>
                <td>Secuelas de luxacion, torcedura y esguince de miembro inferior</td>
                <td><?php echo $T933 ?></td>
                <td><?php echo $T933_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T934 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de nervio de miembro inferior</td>
                <td><?php echo $T934 ?></td>
                <td><?php echo $T934_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T935 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo de tendon y musculo de miembro inferior</td>
                <td><?php echo $T935 ?></td>
                <td><?php echo $T935_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T936 > 0) { ?>
            <tr>
                <td>Secuelas de aplastamiento y amputacion traumaticas de miembro inferior</td>
                <td><?php echo $T936 ?></td>
                <td><?php echo $T936_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T938 > 0) { ?>
            <tr>
                <td>Secuelas de otros traumatismos especificados de miembro inferior</td>
                <td><?php echo $T938 ?></td>
                <td><?php echo $T938_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T939 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismo no especificado de miembro inferior</td>
                <td><?php echo $T939 ?></td>
                <td><?php echo $T939_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T940 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismos que afectan  multiples regiones del cuerpo</td>
                <td><?php echo $T940 ?></td>
                <td><?php echo $T940_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T941 > 0) { ?>
            <tr>
                <td>Secuelas de traumatismos de regiones no especificadas del cuerpo</td>
                <td><?php echo $T941 ?></td>
                <td><?php echo $T941_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T950 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura, corrosion y congelamiento de la cabeza y del cuello</td>
                <td><?php echo $T950 ?></td>
                <td><?php echo $T950_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T951 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura, corrosion y congelamiento del tronco</td>
                <td><?php echo $T951 ?></td>
                <td><?php echo $T951_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T952 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura, corrosion y congelamiento de miembro superior</td>
                <td><?php echo $T952 ?></td>
                <td><?php echo $T952_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T953 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura, corrosion y congelamiento de miembro inferior</td>
                <td><?php echo $T953 ?></td>
                <td><?php echo $T953_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T954 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura y corrosion clasificables solo de acuerdo con la extension de la superficie del cuerpo afectada</td>
                <td><?php echo $T954 ?></td>
                <td><?php echo $T954_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T958 > 0) { ?>
            <tr>
                <td>Secuelas de otras quemaduras, corrosiones y congelamientos especificados</td>
                <td><?php echo $T958 ?></td>
                <td><?php echo $T958_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T959 > 0) { ?>
            <tr>
                <td>Secuelas de quemadura, corrosion y congelamiento no especificados</td>
                <td><?php echo $T959 ?></td>
                <td><?php echo $T959_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T96X > 0) { ?>
            <tr>
                <td>Secuelas de envenenamientos por drogas, medicamentos y sustancias biologicas</td>
                <td><?php echo $T96X ?></td>
                <td><?php echo $T96X_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T97X > 0) { ?>
            <tr>
                <td>Secuelas de efectos  toxicos de sustancias de procedencia principalmente no medicinal</td>
                <td><?php echo $T97X ?></td>
                <td><?php echo $T97X_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T980 > 0) { ?>
            <tr>
                <td>Secuelas de efectos de cuerpos extranos que penetran en orificios naturales</td>
                <td><?php echo $T980 ?></td>
                <td><?php echo $T980_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T981 > 0) { ?>
            <tr>
                <td>Secuelas de otros efectos y los no especificados de causas externas</td>
                <td><?php echo $T981 ?></td>
                <td><?php echo $T981_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($T982 > 0) { ?>
            <tr>
                <td>Secuelas de ciertas complicaciones precoces de los traumatismos</td>
                <td><?php echo $T982 ?></td>
                <td><?php echo $T982_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($T983 > 0) { ?>
            <tr>
                <td>Secuelas de complicaciones de la atencion medica y quirurgica, no clasificadas en otras parte</td>
                <td><?php echo $T983 ?></td>
                <td><?php echo $T983_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K400 > 0) { ?>
            <tr>
                <td>Hernia inguinal bilateral con obstruccion, sin gangrena</td>
                <td><?php echo $K400 ?></td>
                <td><?php echo $K400_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K401 > 0) { ?>
            <tr>
                <td>Hernia inguinal bilateral, con gangrena</td>
                <td><?php echo $K401 ?></td>
                <td><?php echo $K401_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K402 > 0) { ?>
            <tr>
                <td>Hernia inguinal bilateral, sin obstruccion ni gangrena</td>
                <td><?php echo $K402 ?></td>
                <td><?php echo $K402_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K403 > 0) { ?>
            <tr>
                <td>Hernia inguinal unilateral o no especificada, con obstruccion, sin gangrena</td>
                <td><?php echo $K403 ?></td>
                <td><?php echo $K403_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K404 > 0) { ?>
            <tr>
                <td>Hernia inguinal unilateral o no especificada, con gangrena</td>
                <td><?php echo $K404 ?></td>
                <td><?php echo $K404_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K409 > 0) { ?>
            <tr>
                <td>Hernia inguinal unilateral o no especificada, sin obstruccion ni gangrena</td>
                <td><?php echo $K409 ?></td>
                <td><?php echo $K409_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K410 > 0) { ?>
            <tr>
                <td>Hernia femoral bilateral, con obstruccion, sin gangrena</td>
                <td><?php echo $K410 ?></td>
                <td><?php echo $K410_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K411 > 0) { ?>
            <tr>
                <td>Hernia femoral bilateral, con gangrena</td>
                <td><?php echo $K411 ?></td>
                <td><?php echo $K411_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K412 > 0) { ?>
            <tr>
                <td>Hernia femoral bilateral, sin obstruccion ni gangrena</td>
                <td><?php echo $K412 ?></td>
                <td><?php echo $K412_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K413 > 0) { ?>
            <tr>
                <td>Hernia femoral unilateral o no especificada, con obstruccion, sin gangrena</td>
                <td><?php echo $K413 ?></td>
                <td><?php echo $K413_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K414 > 0) { ?>
            <tr>
                <td>Hernia femoral unilateral o no especificada, con gangrena</td>
                <td><?php echo $K414 ?></td>
                <td><?php echo $K414_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K419 > 0) { ?>
            <tr>
                <td>Hernia femoral unilateral o no especificada, sin obstruccion ni gangrena</td>
                <td><?php echo $K419 ?></td>
                <td><?php echo $K419_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K420 > 0) { ?>
            <tr>
                <td>Hernia umbilical con obstruccion, sin gangrena</td>
                <td><?php echo $K420 ?></td>
                <td><?php echo $K420_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K421 > 0) { ?>
            <tr>
                <td>Hernia umbilical con gangrena</td>
                <td><?php echo $K421 ?></td>
                <td><?php echo $K421_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K429 > 0) { ?>
            <tr>
                <td>Hernia umbilical sin obstruccion ni gangrena</td>
                <td><?php echo $K429 ?></td>
                <td><?php echo $K429_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K430 > 0) { ?>
            <tr>
                <td>Hernia incisional con obstruccion, sin gangrena</td>
                <td><?php echo $K430 ?></td>
                <td><?php echo $K430_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K431 > 0) { ?>
            <tr>
                <td>Hernia incisional con gangrena</td>
                <td><?php echo $K431 ?></td>
                <td><?php echo $K431_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K432 > 0) { ?>
            <tr>
                <td>Hernia incisional sin obstrucción o gangrena</td>
                <td><?php echo $K432 ?></td>
                <td><?php echo $K432_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K433 > 0) { ?>
            <tr>
                <td>Hernia paraestomal con obstrucción, sin gangrena</td>
                <td><?php echo $K433 ?></td>
                <td><?php echo $K433_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K434 > 0) { ?>
            <tr>
                <td>Hernia paraestomal con gangrena</td>
                <td><?php echo $K434 ?></td>
                <td><?php echo $K434_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K435 > 0) { ?>
            <tr>
                <td>Hernia paraestomal sin obstrucción o gangrena</td>
                <td><?php echo $K435 ?></td>
                <td><?php echo $K435_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K436 > 0) { ?>
            <tr>
                <td>Otras hernias ventrales y las no especificadas con obstrucción, sin gangrena</td>
                <td><?php echo $K436 ?></td>
                <td><?php echo $K436_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K437 > 0) { ?>
            <tr>
                <td>Otras hernias ventrales y las no especificadas con gangrena</td>
                <td><?php echo $K437 ?></td>
                <td><?php echo $K437_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K439 > 0) { ?>
            <tr>
                <td>Otras hernias ventrales y las no especificadas sin obstruccion o gangrena</td>
                <td><?php echo $K439 ?></td>
                <td><?php echo $K439_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K440 > 0) { ?>
            <tr>
                <td>Hernia diafragmatica con obstruccion, sin gangrena</td>
                <td><?php echo $K440 ?></td>
                <td><?php echo $K440_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K441 > 0) { ?>
            <tr>
                <td>Hernia diafragmatica con gangrena</td>
                <td><?php echo $K441 ?></td>
                <td><?php echo $K441_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K449 > 0) { ?>
            <tr>
                <td>Hernia diafragmatica sin obstruccion ni gangrena</td>
                <td><?php echo $K449 ?></td>
                <td><?php echo $K449_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K450 > 0) { ?>
            <tr>
                <td>Otras hernias de la cavidad abdominal especificadas, con obstruccion, sin gangrena</td>
                <td><?php echo $K450 ?></td>
                <td><?php echo $K450_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K451 > 0) { ?>
            <tr>
                <td>Otras hernias de la cavidad abdominal especificadas, con gangrena</td>
                <td><?php echo $K451 ?></td>
                <td><?php echo $K451_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K458 > 0) { ?>
            <tr>
                <td>Otras hernias de la cavidad abdominal especificadas, sin obstruccion ni gangrena</td>
                <td><?php echo $K458 ?></td>
                <td><?php echo $K458_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K460 > 0) { ?>
            <tr>
                <td>Hernia abdominal no especificada, con obstruccion, sin gangrena</td>
                <td><?php echo $K460 ?></td>
                <td><?php echo $K460_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K461 > 0) { ?>
            <tr>
                <td>Hernia abdominal no especificada, con gangrena</td>
                <td><?php echo $K461 ?></td>
                <td><?php echo $K461_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K469 > 0) { ?>
            <tr>
                <td>Hernia abdominal no especificada, sin obstruccion ni gangrena</td>
                <td><?php echo $K469 ?></td>
                <td><?php echo $K469_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K40 > 0) { ?>
            <tr>
                <td>Hernia Inguinal</td>
                <td><?php echo $K40 ?></td>
                <td><?php echo $K40_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K41 > 0) { ?>
            <tr>
                <td>Hernia Femoral</td>
                <td><?php echo $K41 ?></td>
                <td><?php echo $K41_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K42 > 0) { ?>
            <tr>
                <td>Hernia Umbilical</td>
                <td><?php echo $K42 ?></td>
                <td><?php echo $K42_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K43 > 0) { ?>
            <tr>
                <td>Hernia Ventral</td>
                <td><?php echo $K43 ?></td>
                <td><?php echo $K43_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K44 > 0) { ?>
            <tr>
                <td>Hernia Diafragmatica</td>
                <td><?php echo $K44 ?></td>
                <td><?php echo $K44_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($K45 > 0) { ?>
            <tr>
                <td>Otras Hernias De La Cavidad Abdominal</td>
                <td><?php echo $K45 ?></td>
                <td><?php echo $K45_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($K46 > 0) { ?>
            <tr>
                <td>Hernia No Especificada De La Cavidad Abdominal</td>
                <td><?php echo $K46 ?></td>
                <td><?php echo $K46_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q182 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q182 ?></td>
                <td><?php echo $Q182_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q183 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q183 ?></td>
                <td><?php echo $Q183_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q184 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q184 ?></td>
                <td><?php echo $Q184_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q185 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q185 ?></td>
                <td><?php echo $Q185_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q186 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q186 ?></td>
                <td><?php echo $Q186_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q187 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q187 ?></td>
                <td><?php echo $Q187_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q188 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q188 ?></td>
                <td><?php echo $Q188_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q189 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q189 ?></td>
                <td><?php echo $Q189_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q650 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q650 ?></td>
                <td><?php echo $Q650_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q651 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, bilateral</td>
                <td><?php echo $Q652 ?></td>
                <td><?php echo $Q652_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q652 > 0) { ?>
            <tr>
                <td>Luxacion congenita de la cadera, no especificada</td>
                <td><?php echo $Q652 ?></td>
                <td><?php echo $Q652_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q653 > 0) { ?>
            <tr>
                <td>Subluxacion congenita de la cadera, unilateral</td>
                <td><?php echo $Q653 ?></td>
                <td><?php echo $Q653_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q654 > 0) { ?>
            <tr>
                <td>Subluxacion congenita de la cadera, bilateral</td>
                <td><?php echo $Q654 ?></td>
                <td><?php echo $Q654_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q655 > 0) { ?>
            <tr>
                <td>Subluxacion congenita de la cadera, no especificada</td>
                <td><?php echo $Q655 ?></td>
                <td><?php echo $Q655_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q656 > 0) { ?>
            <tr>
                <td>Cadera inestable</td>
                <td><?php echo $Q656 ?></td>
                <td><?php echo $Q656_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q658 > 0) { ?>
            <tr>
                <td>Otras deformidades congenitas de la cadera</td>
                <td><?php echo $Q658 ?></td>
                <td><?php echo $Q658_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q659 > 0) { ?>
            <tr>
                <td>Deformidad congenita de la cadera, no especificada</td>
                <td><?php echo $Q659 ?></td>
                <td><?php echo $Q659_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q660 > 0) { ?>
            <tr>
                <td>Talipes equinovarus</td>
                <td><?php echo $Q660 ?></td>
                <td><?php echo $Q660_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q661 > 0) { ?>
            <tr>
                <td>Talipes calcaneovarus</td>
                <td><?php echo $Q661 ?></td>
                <td><?php echo $Q661_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q662 > 0) { ?>
            <tr>
                <td>Metatarsus varus</td>
                <td><?php echo $Q662 ?></td>
                <td><?php echo $Q662_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q663 > 0) { ?>
            <tr>
                <td>Otras deformidades varus congenitas de los pies</td>
                <td><?php echo $Q663 ?></td>
                <td><?php echo $Q663_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q664 > 0) { ?>
            <tr>
                <td>Talipes calcaneovalgus</td>
                <td><?php echo $Q664 ?></td>
                <td><?php echo $Q664_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q665 > 0) { ?>
            <tr>
                <td>Pie plano congenito</td>
                <td><?php echo $Q665 ?></td>
                <td><?php echo $Q665_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q666 > 0) { ?>
            <tr>
                <td>Otras deformidades valgus congenitas de los pies</td>
                <td><?php echo $Q666 ?></td>
                <td><?php echo $Q666_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q667 > 0) { ?>
            <tr>
                <td>Pie cavus</td>
                <td><?php echo $Q667 ?></td>
                <td><?php echo $Q667_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q668 > 0) { ?>
            <tr>
                <td>Otras deformidades congenitas de los pies</td>
                <td><?php echo $Q668 ?></td>
                <td><?php echo $Q668_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q669 > 0) { ?>
            <tr>
                <td>Deformidad congenita de los pies, no especificada</td>
                <td><?php echo $Q669 ?></td>
                <td><?php echo $Q669_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q670 > 0) { ?>
            <tr>
                <td>Asimetria facial</td>
                <td><?php echo $Q670 ?></td>
                <td><?php echo $Q670_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q671 > 0) { ?>
            <tr>
                <td>Facies comprimida</td>
                <td><?php echo $Q671 ?></td>
                <td><?php echo $Q671_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q672 > 0) { ?>
            <tr>
                <td>Dolicocefalia</td>
                <td><?php echo $Q672 ?></td>
                <td><?php echo $Q672_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q673 > 0) { ?>
            <tr>
                <td>Plagiocefalia</td>
                <td><?php echo $Q673 ?></td>
                <td><?php echo $Q673_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q674 > 0) { ?>
            <tr>
                <td>Otras deformidades congenitas del craneo, de la cara y de la mandibula</td>
                <td><?php echo $Q674 ?></td>
                <td><?php echo $Q674_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q675 > 0) { ?>
            <tr>
                <td>Deformidad congenita de la columna vertebral</td>
                <td><?php echo $Q675 ?></td>
                <td><?php echo $Q675_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q676 > 0) { ?>
            <tr>
                <td>Torax excavado</td>
                <td><?php echo $Q676 ?></td>
                <td><?php echo $Q676_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q677 > 0) { ?>
            <tr>
                <td>Torax en quilla</td>
                <td><?php echo $Q677 ?></td>
                <td><?php echo $Q677_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q678 > 0) { ?>
            <tr>
                <td>Otras deformidades congenitas del torax</td>
                <td><?php echo $Q678 ?></td>
                <td><?php echo $Q678_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q680 > 0) { ?>
            <tr>
                <td>Deformidad congenita del musculo esternocleidomastoideo</td>
                <td><?php echo $Q680 ?></td>
                <td><?php echo $Q680_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q681 > 0) { ?>
            <tr>
                <td>Deformidad congenita de la mano</td>
                <td><?php echo $Q681 ?></td>
                <td><?php echo $Q681_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q682 > 0) { ?>
            <tr>
                <td>Deformidad congenita de la rodilla</td>
                <td><?php echo $Q682 ?></td>
                <td><?php echo $Q682_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q683 > 0) { ?>
            <tr>
                <td>Curvatura congenita del femur</td>
                <td><?php echo $Q683 ?></td>
                <td><?php echo $Q683_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q684 > 0) { ?>
            <tr>
                <td>Curvatura congenita de la tibia y del perone</td>
                <td><?php echo $Q684 ?></td>
                <td><?php echo $Q684_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q685 > 0) { ?>
            <tr>
                <td>Curvatura congenita de hueso(s) largo(s) del miembro inferior, sin otra espec} ificacion</td>
                <td><?php echo $Q685 ?></td>
                <td><?php echo $Q685_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q688 > 0) { ?>
            <tr>
                <td>Otras deformidades congenitas osteomusculares, especificadas</td>
                <td><?php echo $Q688 ?></td>
                <td><?php echo $Q688_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q690 > 0) { ?>
            <tr>
                <td>Dedo(s) supernumerario(s) de la mano</td>
                <td><?php echo $Q690 ?></td>
                <td><?php echo $Q690_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q691 > 0) { ?>
            <tr>
                <td>Pulgar(es) supernumerario(s)</td>
                <td><?php echo $Q691 ?></td>
                <td><?php echo $Q691_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q692 > 0) { ?>
            <tr>
                <td>Dedo(s) supernumerario(s) del pie</td>
                <td><?php echo $Q692 ?></td>
                <td><?php echo $Q692_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q699 > 0) { ?>
            <tr>
                <td>Polidactilia, no especificada</td>
                <td><?php echo $Q699 ?></td>
                <td><?php echo $Q699_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q700 > 0) { ?>
            <tr>
                <td>Fusion de los dedos de la mano</td>
                <td><?php echo $Q700 ?></td>
                <td><?php echo $Q700_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q701 > 0) { ?>
            <tr>
                <td>Membrana interdigital de la mano</td>
                <td><?php echo $Q701 ?></td>
                <td><?php echo $Q701_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q702 > 0) { ?>
            <tr>
                <td>Fusion de los dedos del pie</td>
                <td><?php echo $Q702 ?></td>
                <td><?php echo $Q702_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q703 > 0) { ?>
            <tr>
                <td>Membrana interdigital del pie</td>
                <td><?php echo $Q703 ?></td>
                <td><?php echo $Q703_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q704 > 0) { ?>
            <tr>
                <td>Polisindactilia</td>
                <td><?php echo $Q704 ?></td>
                <td><?php echo $Q704_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q709 > 0) { ?>
            <tr>
                <td>Sindactilia, no especificada</td>
                <td><?php echo $Q709 ?></td>
                <td><?php echo $Q709_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q710 > 0) { ?>
            <tr>
                <td></td>
                <td><?php echo $Q710 ?></td>
                <td><?php echo $Q710_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q711 > 0) { ?>
            <tr>
                <td>Ausencia congenita del brazo y del antebrazo con presencia de la mano</td>
                <td><?php echo $Q711 ?></td>
                <td><?php echo $Q711_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q712 > 0) { ?>
            <tr>
                <td>Ausencia congenita del antebrazo y de la mano</td>
                <td><?php echo $Q712 ?></td>
                <td><?php echo $Q712_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q713 > 0) { ?>
            <tr>
                <td>Ausencia congenita de la mano y el (los) dedo(s)</td>
                <td><?php echo $Q713 ?></td>
                <td><?php echo $Q713_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q714 > 0) { ?>
            <tr>
                <td>Defecto por reduccion longitudinal del radio</td>
                <td><?php echo $Q714 ?></td>
                <td><?php echo $Q714_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q715 > 0) { ?>
            <tr>
                <td>Defecto por reduccion longitudinal del cubito</td>
                <td><?php echo $Q715 ?></td>
                <td><?php echo $Q715_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q716 > 0) { ?>
            <tr>
                <td>Mano en pinza de langosta</td>
                <td><?php echo $Q716 ?></td>
                <td><?php echo $Q716_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q718 > 0) { ?>
            <tr>
                <td>Otros defectos por reduccion del (de los) miembro(s) superior(es)</td>
                <td><?php echo $Q718 ?></td>
                <td><?php echo $Q718_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q719 > 0) { ?>
            <tr>
                <td>Defecto por reduccion del miembro superior, no espec} ificado</td>
                <td><?php echo $Q719 ?></td>
                <td><?php echo $Q719_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q720 > 0) { ?>
            <tr>
                <td>Ausencia congenita completa del (de los) miembro(s) inferior(es)</td>
                <td><?php echo $Q720 ?></td>
                <td><?php echo $Q720_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q721 > 0) { ?>
            <tr>
                <td>Ausencia congenita del muslo y de la pierna con presencia del pie</td>
                <td><?php echo $Q721 ?></td>
                <td><?php echo $Q721_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q722 > 0) { ?>
            <tr>
                <td>Ausencia congenita de la pierna y del pie</td>
                <td><?php echo $Q722 ?></td>
                <td><?php echo $Q722_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q723 > 0) { ?>
            <tr>
                <td>Ausencia congenita del pie y dedo(s) del pie</td>
                <td><?php echo $Q723 ?></td>
                <td><?php echo $Q723_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q724 > 0) { ?>
            <tr>
                <td>Defecto por reduccion longitudinal del femur</td>
                <td><?php echo $Q724 ?></td>
                <td><?php echo $Q724_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q725 > 0) { ?>
            <tr>
                <td>Defecto por reduccion longitudinal de la tibia</td>
                <td><?php echo $Q725 ?></td>
                <td><?php echo $Q725_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q726 > 0) { ?>
            <tr>
                <td>Defecto por reduccion longitudinal del perone</td>
                <td><?php echo $Q726 ?></td>
                <td><?php echo $Q726_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q727 > 0) { ?>
            <tr>
                <td>Pie hendido</td>
                <td><?php echo $Q727 ?></td>
                <td><?php echo $Q727_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q728 > 0) { ?>
            <tr>
                <td>Otros defectos por reduccion del (de los) miembro(s) inferior(es)</td>
                <td><?php echo $Q728 ?></td>
                <td><?php echo $Q728_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q729 > 0) { ?>
            <tr>
                <td>Defecto por reduccion del miembro inferior, no espec} ificado</td>
                <td><?php echo $Q729 ?></td>
                <td><?php echo $Q729_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q730 > 0) { ?>
            <tr>
                <td>Ausencia completa de miembro(s) no espec} ificado(s)</td>
                <td><?php echo $Q730 ?></td>
                <td><?php echo $Q730_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q731 > 0) { ?>
            <tr>
                <td>Focomelia, miembro(s) no espec} ificado(s)</td>
                <td><?php echo $Q731 ?></td>
                <td><?php echo $Q731_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q738 > 0) { ?>
            <tr>
                <td>Otros defectos por reduccion de miembro(s) no espec} ificado(s)</td>
                <td><?php echo $Q738 ?></td>
                <td><?php echo $Q738_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q740 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas del (de los) miembro(s) superior(es), incluida la cintura escapular</td>
                <td><?php echo $Q740 ?></td>
                <td><?php echo $Q740_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q741 > 0) { ?>
            <tr>
                <td>Malformacion congenita de la rodilla</td>
                <td><?php echo $Q741 ?></td>
                <td><?php echo $Q741_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q742 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas del (de los) miembro(s) inferior(es), incluida la cintura pelviana</td>
                <td><?php echo $Q742 ?></td>
                <td><?php echo $Q742_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q743 > 0) { ?>
            <tr>
                <td>Artrogriposis multiple congenita</td>
                <td><?php echo $Q743 ?></td>
                <td><?php echo $Q743_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q748 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas especificadas del (de los) miembro(s)</td>
                <td><?php echo $Q748 ?></td>
                <td><?php echo $Q748_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q749 > 0) { ?>
            <tr>
                <td>Malformacion congenita de miembro(s), no especificada</td>
                <td><?php echo $Q749 ?></td>
                <td><?php echo $Q749_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q750 > 0) { ?>
            <tr>
                <td>Craneosinostosis</td>
                <td><?php echo $Q750 ?></td>
                <td><?php echo $Q750_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q751 > 0) { ?>
            <tr>
                <td>Disostosis craneofacial</td>
                <td><?php echo $Q751 ?></td>
                <td><?php echo $Q751_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q752 > 0) { ?>
            <tr>
                <td>Hipertelorismo</td>
                <td><?php echo $Q752 ?></td>
                <td><?php echo $Q752_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q753 > 0) { ?>
            <tr>
                <td>Macrocefalia</td>
                <td><?php echo $Q753 ?></td>
                <td><?php echo $Q753_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q754 > 0) { ?>
            <tr>
                <td>Disostosis maxilofacial</td>
                <td><?php echo $Q754 ?></td>
                <td><?php echo $Q754_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q755 > 0) { ?>
            <tr>
                <td>Disostosis oculomaxilar</td>
                <td><?php echo $Q755 ?></td>
                <td><?php echo $Q755_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q758 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas especificadas de los huesos del craneo y de la cara</td>
                <td><?php echo $Q758 ?></td>
                <td><?php echo $Q758_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q759 > 0) { ?>
            <tr>
                <td>Malformacion congenita no especificada de los huesos del craneo y de la cara</td>
                <td><?php echo $Q759 ?></td>
                <td><?php echo $Q759_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q760 > 0) { ?>
            <tr>
                <td>Espina b} ifida oculta</td>
                <td><?php echo $Q760 ?></td>
                <td><?php echo $Q760_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q761 > 0) { ?>
            <tr>
                <td>Sindrome de Klippel-Feil</td>
                <td><?php echo $Q761 ?></td>
                <td><?php echo $Q761_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q762 > 0) { ?>
            <tr>
                <td>Espondilolistesis congenita</td>
                <td><?php echo $Q762 ?></td>
                <td><?php echo $Q762_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q763 > 0) { ?>
            <tr>
                <td>Escoliosis congenita debida a malformacion congenita osea</td>
                <td><?php echo $Q763 ?></td>
                <td><?php echo $Q763_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q764 > 0) { ?>
            <tr>
                <td>Otra malformacion congenita de la columna vertebral, no asociada con escoliosis</td>
                <td><?php echo $Q764 ?></td>
                <td><?php echo $Q764_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q765 > 0) { ?>
            <tr>
                <td>Costilla cervical</td>
                <td><?php echo $Q765 ?></td>
                <td><?php echo $Q765_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q766 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de las costillas</td>
                <td><?php echo $Q766 ?></td>
                <td><?php echo $Q766_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q767 > 0) { ?>
            <tr>
                <td>Malformacion congenita del esternon</td>
                <td><?php echo $Q767 ?></td>
                <td><?php echo $Q767_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q768 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas del torax oseo</td>
                <td><?php echo $Q768 ?></td>
                <td><?php echo $Q768_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q769 > 0) { ?>
            <tr>
                <td>Malformacion congenita del torax oseo, no especificada</td>
                <td><?php echo $Q769 ?></td>
                <td><?php echo $Q769_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q770 > 0) { ?>
            <tr>
                <td>Acondrogenesis</td>
                <td><?php echo $Q770 ?></td>
                <td><?php echo $Q770_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q771 > 0) { ?>
            <tr>
                <td>Enanismo tanatoforico</td>
                <td><?php echo $Q771 ?></td>
                <td><?php echo $Q771_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q772 > 0) { ?>
            <tr>
                <td>Sindrome de costilla corta</td>
                <td><?php echo $Q772 ?></td>
                <td><?php echo $Q772_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q773 > 0) { ?>
            <tr>
                <td>Condrodisplasia punctata</td>
                <td><?php echo $Q773 ?></td>
                <td><?php echo $Q773_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q774 > 0) { ?>
            <tr>
                <td>Acondroplasia</td>
                <td><?php echo $Q774 ?></td>
                <td><?php echo $Q774_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q775 > 0) { ?>
            <tr>
                <td>Displasia distrofica</td>
                <td><?php echo $Q775 ?></td>
                <td><?php echo $Q775_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q776 > 0) { ?>
            <tr>
                <td>Displasia condroectodermica</td>
                <td><?php echo $Q776 ?></td>
                <td><?php echo $Q776_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q777 > 0) { ?>
            <tr>
                <td>Displasia espondiloep} ifisaria</td>
                <td><?php echo $Q777 ?></td>
                <td><?php echo $Q777_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q778 > 0) { ?>
            <tr>
                <td>Otras osteocondrodisplasias con defectos del crecimiento de los huesos largos y de la columna vertebral</td>
                <td><?php echo $Q778 ?></td>
                <td><?php echo $Q778_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q779 > 0) { ?>
            <tr>
                <td>Osteocondrodisplasia con defectos del crecimiento de los huesos largos y de la columna vertebral, sin otra espec} ificacion</td>
                <td><?php echo $Q779 ?></td>
                <td><?php echo $Q779_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q780 > 0) { ?>
            <tr>
                <td>Osteogenesis imperfecta</td>
                <td><?php echo $Q780 ?></td>
                <td><?php echo $Q780_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q781 > 0) { ?>
            <tr>
                <td>Displasia poliostotica fibrosa</td>
                <td><?php echo $Q781 ?></td>
                <td><?php echo $Q781_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q782 > 0) { ?>
            <tr>
                <td>Osteopetrosis</td>
                <td><?php echo $Q782 ?></td>
                <td><?php echo $Q782_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q783 > 0) { ?>
            <tr>
                <td>Displasia diafisaria progresiva</td>
                <td><?php echo $Q783 ?></td>
                <td><?php echo $Q783_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q784 > 0) { ?>
            <tr>
                <td>Encondromatosis</td>
                <td><?php echo $Q784 ?></td>
                <td><?php echo $Q784_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q785 > 0) { ?>
            <tr>
                <td>Displasia metafisaria</td>
                <td><?php echo $Q785 ?></td>
                <td><?php echo $Q785_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q786 > 0) { ?>
            <tr>
                <td>Exostosis congenita multiple</td>
                <td><?php echo $Q786 ?></td>
                <td><?php echo $Q786_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q788 > 0) { ?>
            <tr>
                <td>Otras osteocondrodisplasias especificadas</td>
                <td><?php echo $Q788 ?></td>
                <td><?php echo $Q788_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q789 > 0) { ?>
            <tr>
                <td>Osteocondrodisplasia, no especificada</td>
                <td><?php echo $Q789 ?></td>
                <td><?php echo $Q789_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q790 > 0) { ?>
            <tr>
                <td>Hernia diafragmatica congenita</td>
                <td><?php echo $Q790 ?></td>
                <td><?php echo $Q790_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q791 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas del diafragma</td>
                <td><?php echo $Q791 ?></td>
                <td><?php echo $Q791_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q792 > 0) { ?>
            <tr>
                <td>Exonfalos</td>
                <td><?php echo $Q792 ?></td>
                <td><?php echo $Q792_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q793 > 0) { ?>
            <tr>
                <td>Gastrosquisis</td>
                <td><?php echo $Q793 ?></td>
                <td><?php echo $Q793_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q794 > 0) { ?>
            <tr>
                <td>Sindrome del abdomen en ciruela pasa</td>
                <td><?php echo $Q794 ?></td>
                <td><?php echo $Q794_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q795 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de la pared abdominal</td>
                <td><?php echo $Q795 ?></td>
                <td><?php echo $Q795_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q796 > 0) { ?>
            <tr>
                <td>Sindrome de Ehlers-Danlos</td>
                <td><?php echo $Q796 ?></td>
                <td><?php echo $Q796_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q798 > 0) { ?>
            <tr>
                <td>Q799</td>
                <td><?php echo $Q798 ?></td>
                <td><?php echo $Q798_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q799 > 0) { ?>
            <tr>
                <td>Malformacion congenita del sistema osteomuscular, no especificada</td>
                <td><?php echo $Q799 ?></td>
                <td><?php echo $Q799_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q800 > 0) { ?>
            <tr>
                <td>Ictiosis vulgar</td>
                <td><?php echo $Q800 ?></td>
                <td><?php echo $Q800_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q801 > 0) { ?>
            <tr>
                <td>Ictiosis ligada al cromosoma X</td>
                <td><?php echo $Q801 ?></td>
                <td><?php echo $Q801_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q802 > 0) { ?>
            <tr>
                <td>Ictiosis lamelar</td>
                <td><?php echo $Q802 ?></td>
                <td><?php echo $Q802_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q803 > 0) { ?>
            <tr>
                <td>Eritrodermia ictios} iforme vesicular congenita</td>
                <td><?php echo $Q803 ?></td>
                <td><?php echo $Q803_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q804 > 0) { ?>
            <tr>
                <td>Feto arlequin</td>
                <td><?php echo $Q804 ?></td>
                <td><?php echo $Q804_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q808 > 0) { ?>
            <tr>
                <td>Otras ictiosis congenitas</td>
                <td><?php echo $Q808 ?></td>
                <td><?php echo $Q808_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q809 > 0) { ?>
            <tr>
                <td>Ictiosis congenita, no especificada</td>
                <td><?php echo $Q809 ?></td>
                <td><?php echo $Q809_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q810 > 0) { ?>
            <tr>
                <td>Epidermolisis bullosa simple</td>
                <td><?php echo $Q810 ?></td>
                <td><?php echo $Q810_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q811 > 0) { ?>
            <tr>
                <td>Epidermolisis bullosa letal</td>
                <td><?php echo $Q811 ?></td>
                <td><?php echo $Q811_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q812 > 0) { ?>
            <tr>
                <td>Epidermolisis bullosa distrofica</td>
                <td><?php echo $Q812 ?></td>
                <td><?php echo $Q812_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q818 > 0) { ?>
            <tr>
                <td>Otras epidermolisis bullosas</td>
                <td><?php echo $Q818 ?></td>
                <td><?php echo $Q818_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q819 > 0) { ?>
            <tr>
                <td>Epidermolisis bullosa, no especificada</td>
                <td><?php echo $Q819 ?></td>
                <td><?php echo $Q819_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q820 > 0) { ?>
            <tr>
                <td>Linfedema hereditario</td>
                <td><?php echo $Q820 ?></td>
                <td><?php echo $Q820_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q821 > 0) { ?>
            <tr>
                <td>Xeroderma pigmentoso</td>
                <td><?php echo $Q821 ?></td>
                <td><?php echo $Q821_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q822 > 0) { ?>
            <tr>
                <td>Mastocitosis</td>
                <td><?php echo $Q822 ?></td>
                <td><?php echo $Q822_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q823 > 0) { ?>
            <tr>
                <td>Incontinencia pigmentaria</td>
                <td><?php echo $Q823 ?></td>
                <td><?php echo $Q823_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q824 > 0) { ?>
            <tr>
                <td>Displasia ectodermica (anhidrotica)</td>
                <td><?php echo $Q824 ?></td>
                <td><?php echo $Q824_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q825 > 0) { ?>
            <tr>
                <td>Nevo no neoplasico, congenito</td>
                <td><?php echo $Q825 ?></td>
                <td><?php echo $Q825_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q828 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de la piel, especificadas</td>
                <td><?php echo $Q828 ?></td>
                <td><?php echo $Q828_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q829 > 0) { ?>
            <tr>
                <td>Malformacion congenita de la piel, no especificada</td>
                <td><?php echo $Q829 ?></td>
                <td><?php echo $Q829_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q830 > 0) { ?>
            <tr>
                <td>Ausencia congenita de la mama con ausencia del pezon</td>
                <td><?php echo $Q830 ?></td>
                <td><?php echo $Q830_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q831 > 0) { ?>
            <tr>
                <td>Mama supernumeraria</td>
                <td><?php echo $Q831 ?></td>
                <td><?php echo $Q831_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q832 > 0) { ?>
            <tr>
                <td>Ausencia del pezon</td>
                <td><?php echo $Q832 ?></td>
                <td><?php echo $Q832_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q833 > 0) { ?>
            <tr>
                <td>Pezon supernumerario</td>
                <td><?php echo $Q833 ?></td>
                <td><?php echo $Q833_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q838 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de la mama</td>
                <td><?php echo $Q838 ?></td>
                <td><?php echo $Q838_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q839 > 0) { ?>
            <tr>
                <td>Malformacion congenita de la mama, no especificada</td>
                <td><?php echo $Q839 ?></td>
                <td><?php echo $Q839_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q840 > 0) { ?>
            <tr>
                <td>Alopecia congenita</td>
                <td><?php echo $Q840 ?></td>
                <td><?php echo $Q840_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q841 > 0) { ?>
            <tr>
                <td>Alteraciones morfologicas congenitas del pelo, no clas} ificadas en otra parte</td>
                <td><?php echo $Q841 ?></td>
                <td><?php echo $Q841_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q842 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas del pelo</td>
                <td><?php echo $Q842 ?></td>
                <td><?php echo Q842_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q843 > 0) { ?>
            <tr>
                <td>Anoniquia</td>
                <td><?php echo $Q843 ?></td>
                <td><?php echo $Q843_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q844 > 0) { ?>
            <tr>
                <td>Leuconiquia congenita</td>
                <td><?php echo $Q844 ?></td>
                <td><?php echo $Q844_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q845 > 0) { ?>
            <tr>
                <td>Agrandamiento e hipertrofia de las unas</td>
                <td><?php echo $Q845 ?></td>
                <td><?php echo $Q845_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q846 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de las unas</td>
                <td><?php echo $Q846 ?></td>
                <td><?php echo $Q846_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q848 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas de las faneras, especificadas</td>
                <td><?php echo $Q848 ?></td>
                <td><?php echo $Q848_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q849 > 0) { ?>
            <tr>
                <td>Malformacion congenita de las faneras, no especificada</td>
                <td><?php echo $Q849 ?></td>
                <td><?php echo $Q849_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q850 > 0) { ?>
            <tr>
                <td>Neurofibromatosis (no maligna)</td>
                <td><?php echo $Q850 ?></td>
                <td><?php echo $Q850_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q851 > 0) { ?>
            <tr>
                <td>Esclerosis tuberosa</td>
                <td><?php echo $Q851 ?></td>
                <td><?php echo $Q851_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q858 > 0) { ?>
            <tr>
                <td>Otras facomatosis, no clas} ificadas en otra parte</td>
                <td><?php echo $Q858 ?></td>
                <td><?php echo $Q858_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q859 > 0) { ?>
            <tr>
                <td>Facomatosis, no especificada</td>
                <td><?php echo $Q859 ?></td>
                <td><?php echo $Q859_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q860 > 0) { ?>
            <tr>
                <td>Sindrome fetal (dismorfico) debido al alcohol</td>
                <td><?php echo $Q860 ?></td>
                <td><?php echo $Q860_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q861 > 0) { ?>
            <tr>
                <td>Sindrome de hidantoina fetal</td>
                <td><?php echo $Q861 ?></td>
                <td><?php echo $Q861_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q862 > 0) { ?>
            <tr>
                <td>Dismorfismo debido a warfarina</td>
                <td><?php echo $Q862 ?></td>
                <td><?php echo $Q862_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q868 > 0) { ?>
            <tr>
                <td>Otros sindromes de malformaciones congenitas debidos a causas exogenas conocidas</td>
                <td><?php echo $Q868 ?></td>
                <td><?php echo $Q868_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q870 > 0) { ?>
            <tr>
                <td>Sindromes de malformaciones congenitas que afectan principalmente la apariencia facial</td>
                <td><?php echo $Q870 ?></td>
                <td><?php echo $Q870_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q871 > 0) { ?>
            <tr>
                <td>Sindromes de malformaciones congenitas asociadas principalmente con estatura baja</td>
                <td><?php echo $Q871 ?></td>
                <td><?php echo $Q871_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q872 > 0) { ?>
            <tr>
                <td>Sindromes de malformaciones congenitas que afectan principalmente los miembros</td>
                <td><?php echo $Q872 ?></td>
                <td><?php echo $Q872_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q873 > 0) { ?>
            <tr>
                <td>Sindromes de malformaciones congenitas con exceso de crecimiento precoz</td>
                <td><?php echo $Q873 ?></td>
                <td><?php echo $Q873_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q874 > 0) { ?>
            <tr>
                <td>Sindrome de Marfan</td>
                <td><?php echo $Q874 ?></td>
                <td><?php echo $Q874_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q875 > 0) { ?>
            <tr>
                <td>Otros sindromes de malformaciones congenitas con otros cambios esqueleticos</td>
                <td><?php echo $Q875 ?></td>
                <td><?php echo $Q875_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q878 > 0) { ?>
            <tr>
                <td>Otros sindromes de malformaciones congenitas espec} ificados, no clas} ificados en otra parte</td>
                <td><?php echo $Q878 ?></td>
                <td><?php echo $Q878_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q890 > 0) { ?>
            <tr>
                <td>Malformaciones congenitas del bazo</td>
                <td><?php echo $Q890 ?></td>
                <td><?php echo $Q890_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q891 > 0) { ?>
            <tr>
                <td>Malformaciones congenitas de la glandula suprarrenal</td>
                <td><?php echo $Q891 ?></td>
                <td><?php echo $Q891_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q892 > 0) { ?>
            <tr>
                <td>Malformaciones congenitas de otras glandulas endocrinas</td>
                <td><?php echo $Q892 ?></td>
                <td><?php echo $Q892_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q893 > 0) { ?>
            <tr>
                <td>Situs inversus</td>
                <td><?php echo $Q893 ?></td>
                <td><?php echo $Q893_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q894 > 0) { ?>
            <tr>
                <td>Gemelos siameses</td>
                <td><?php echo $Q894 ?></td>
                <td><?php echo $Q894_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q897 > 0) { ?>
            <tr>
                <td>Malformaciones congenitas multiples, no clas} ificadas en otra parte</td>
                <td><?php echo $Q897 ?></td>
                <td><?php echo $Q897_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q898 > 0) { ?>
            <tr>
                <td>Otras malformaciones congenitas, especificadas</td>
                <td><?php echo $Q898 ?></td>
                <td><?php echo $Q898_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q899 > 0) { ?>
            <tr>
                <td>Malformacion congenita, no especificada</td>
                <td><?php echo $Q899 ?></td>
                <td><?php echo $Q899_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q18 > 0) { ?>
            <tr>
                <td>Otras Malformaciones Congenitas De La Cara Y Del Cuello</td>
                <td><?php echo $Q18 ?></td>
                <td><?php echo $Q18_porcentaje_t ?> %</td>
            </tr>    
        <?php } if ($Q65 > 0) { ?>
            <tr>
                <td>Deformidades Congenitas De La Cadera</td>
                <td><?php echo $Q65 ?></td>
                <td><?php echo $Q65_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q66 > 0) { ?>
            <tr>
                <td>Deformidades Congenitas De Los Pies</td>
                <td><?php echo $Q66 ?></td>
                <td><?php echo $Q66_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q67 > 0) { ?>
            <tr>
                <td>Deformidades Osteomusculares Congenitas De La Cabeza, De La Cara, De La Columna Vertebral Y Del Torax</td>
                <td><?php echo $Q67 ?></td>
                <td><?php echo $Q67_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q68 > 0) { ?>
            <tr>
                <td>Otras Deformidades Osteomusculares Congenitas</td>
                <td><?php echo $Q68 ?></td>
                <td><?php echo $Q68_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q69 > 0) { ?>
            <tr>
                <td>Polidactilia</td>
                <td><?php echo $Q69 ?></td>
                <td><?php echo $Q69_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q70 > 0) { ?>
            <tr>
                <td>Sindactilia</td>
                <td><?php echo $Q70 ?></td>
                <td><?php echo $Q70_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q71 > 0) { ?>
            <tr>
                <td>Defectos Por Reduccion Del Miembro Superior</td>
                <td><?php echo $Q71 ?></td>
                <td><?php echo $Q71_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q72 > 0) { ?>
            <tr>
                <td>Defectos Por Reduccion Del Miembro Inferior</td>
                <td><?php echo $Q72 ?></td>
                <td><?php echo $Q72_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q73 > 0) { ?>
            <tr>
                <td>Otras Anomalias Congenitas Del (De Los) Miembro(S)</td>
                <td><?php echo $Q73 ?></td>
                <td><?php echo $Q73_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q74 > 0) { ?>
            <tr>
                <td>Otras Anomalias Congenitas Del (De Los) Miembro(S)</td>
                <td><?php echo $Q74 ?></td>
                <td><?php echo $Q74_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q75 > 0) { ?>
            <tr>
                <td>Otras Malformaciones Congenitas De Los Huesos Del Craneo Y De La Cara</td>
                <td><?php echo $Q75 ?></td>
                <td><?php echo $Q75_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q76 > 0) { ?>
            <tr>
                <td>Malformaciones Congenitas De La Columna Vertebral Y Torax Oseo</td>
                <td><?php echo $Q76 ?></td>
                <td><?php echo $Q76_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q77 > 0) { ?>
            <tr>
                <td>Osteocondrodisplasia Con Defecto Del Crecimiento De Los Huesos Largos Y De La Columna Vertebral</td>
                <td><?php echo $Q77 ?></td>
                <td><?php echo $Q77_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q78 > 0) { ?>
            <tr>
                <td>Otras Osteocondrodisplasias</td>
                <td><?php echo $Q78 ?></td>
                <td><?php echo $Q78_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q79 > 0) { ?>
            <tr>
                <td>Malformaciones Congenitas Del Sistema Osteomuscular, No Clas} ificadas En Otra Parte</td>
                <td><?php echo $Q79 ?></td>
                <td><?php echo $Q79_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q80 > 0) { ?>
            <tr>
                <td>Ictiosis Congenita</td>
                <td><?php echo $Q80 ?></td>
                <td><?php echo $Q80_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q81 > 0) { ?>
            <tr>
                <td>Epidermolisis Bullosa</td>
                <td><?php echo $Q81 ?></td>
                <td><?php echo $Q81_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q82 > 0) { ?>
            <tr>
                <td>Otras Malformaciones Congenitas De La Pie</td>
                <td><?php echo $Q82 ?></td>
                <td><?php echo $Q82_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q83 > 0) { ?>
            <tr>
                <td>Malformaciones Congenitas De La Mama</td>
                <td><?php echo $Q83 ?></td>
                <td><?php echo $Q83_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q84 > 0) { ?>
            <tr>
                <td>Otras Malformaciones Congenitas De Las Faneras</td>
                <td><?php echo $Q84 ?></td>
                <td><?php echo $Q84_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q85 > 0) { ?>
            <tr>
                <td>Facomatosis, No Clas} ificadas En Otra Parte</td>
                <td><?php echo $Q85 ?></td>
                <td><?php echo $Q85_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q86 > 0) { ?>
            <tr>
                <td>Sindromes De Malformaciones Congenitas Debidos A Causas Exogenas Conocidas No Clas} ificadas En Otra Parte</td>
                <td><?php echo $Q86 ?></td>
                <td><?php echo $Q86_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($Q87 > 0) { ?>
            <tr>
                <td>Otros Sindromes De Malformaciones Congenitas Espec} ificados Que Afectan Multiples Sistemas</td>
                <td><?php echo $Q87 ?></td>
                <td><?php echo $Q87_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($Q89 > 0) { ?>
            <tr>
                <td>Otras Malformaciones Congenitas, No Clas} ificadas En Otra Parte</td>
                <td><?php echo $Q89 ?></td>
                <td><?php echo $Q89_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W230 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, vivienda</td>
                <td><?php echo $W230 ?></td>
                <td><?php echo $W230_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W231 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, institucion residencial</td>
                <td><?php echo $W231 ?></td>
                <td><?php echo $W231_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W232 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W232 ?></td>
                <td><?php echo $W232_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W233 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, areas de deporte y atletismo</td>
                <td><?php echo $W233 ?></td>
                <td><?php echo $W233_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W234 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, calles y carreteras</td>
                <td><?php echo $W234 ?></td>
                <td><?php echo $W234_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W235 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, comercio y area de servicios</td>
                <td><?php echo $W235 ?></td>
                <td><?php echo $W235_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W236 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, area industrial y de la construccion</td>
                <td><?php echo $W236 ?></td>
                <td><?php echo $W236_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W237 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, granja</td>
                <td><?php echo $W237 ?></td>
                <td><?php echo $W237_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W238 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, otro lugar espec} ificado</td>
                <td><?php echo $W238 ?></td>
                <td><?php echo $W238_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W239 > 0) { ?>
            <tr>
                <td>Atrapado, aplastado, trabado o apretado en o entre objetos, lugar no espec} ificado</td>
                <td><?php echo $W239 ?></td>
                <td><?php echo $W239_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W240 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, vivienda</td>
                <td><?php echo $W240 ?></td>
                <td><?php echo $W240_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W241 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, institucion residencia</td>
                <td><?php echo $W241 ?></td>
                <td><?php echo $W241_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W242 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, escuelas, otras instituciones y areas administrativas  publicas</td>
                <td><?php echo $W242 ?></td>
                <td><?php echo $W242_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W243 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, areas de deporte y atletismo</td>
                <td><?php echo $W243 ?></td>
                <td><?php echo $W243_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W244 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, calles y carreteras</td>
                <td><?php echo $W244 ?></td>
                <td><?php echo $W244_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W245 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, comercio y area de servicios</td>
                <td><?php echo $W245 ?></td>
                <td><?php echo $W245_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W246 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, area industrial y de la construccion</td>
                <td><?php echo $W246 ?></td>
                <td><?php echo $W246_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W247 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, granja</td>
                <td><?php echo $W247 ?></td>
                <td><?php echo $W247_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W248 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, otro lugar espec} ificado</td>
                <td><?php echo $W248 ?></td>
                <td><?php echo $W248_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W249 > 0) { ?>
            <tr>
                <td>Contacto traumatico con dispositivos de elevacion y transmision, no clas} ificados en otra parte, lugar no espec} ificado</td>
                <td><?php echo $W249 ?></td>
                <td><?php echo $W249_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W250 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, vivienda</td>
                <td><?php echo $W250 ?></td>
                <td><?php echo $W250_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W251 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, institucion residencial</td>
                <td><?php echo $W251 ?></td>
                <td><?php echo $W251_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W252 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W252 ?></td>
                <td><?php echo $W252_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W253 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, areas de deporte y atletismo</td>
                <td><?php echo $W253 ?></td>
                <td><?php echo $W253_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W254 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, calles y carreteras</td>
                <td><?php echo $W254 ?></td>
                <td><?php echo $W254_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W255 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, comercio y area de servicios</td>
                <td><?php echo $W255 ?></td>
                <td><?php echo $W255_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W256 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, area industrial y de la construccion</td>
                <td><?php echo $W256 ?></td>
                <td><?php echo $W256_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W257 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, granja</td>
                <td><?php echo $W257 ?></td>
                <td><?php echo $W257_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W258 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, otro lugar espec} ificado</td>
                <td><?php echo $W258 ?></td>
                <td><?php echo $W258_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W259 > 0) { ?>
            <tr>
                <td>Contacto traumatico con vidrio cortante, lugar no espec} ificado</td>
                <td><?php echo $W259 ?></td>
                <td><?php echo $W259_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W260 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada o daga</td>
                <td><?php echo $W260 ?></td>
                <td><?php echo $W260_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W261 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, institucion residencial</td>
                <td><?php echo $W261 ?></td>
                <td><?php echo $W261_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W262 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W262 ?></td>
                <td><?php echo $W262_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W263 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, areas de deporte y atletismo</td>
                <td><?php echo $W263 ?></td>
                <td><?php echo $W263_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W264 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, calles y carreteras</td>
                <td><?php echo $W264 ?></td>
                <td><?php echo $W264_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W265 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, comercio y area de servicios</td>
                <td><?php echo $W265 ?></td>
                <td><?php echo $W265_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W266 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, area industrial y de la construccion</td>
                <td><?php echo $W266 ?></td>
                <td><?php echo $W266_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W267 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cuchillo, espada, daga o punal, granja</td>
                <td><?php echo $W267 ?></td>
                <td><?php echo $W267_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W268 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otro(s) objeto(s) afilado(s) en otra parte</td>
                <td><?php echo $W268 ?></td>
                <td><?php echo $W268_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W269 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otros objetos puntiagudos no espec} ificados</td>
                <td><?php echo $W269 ?></td>
                <td><?php echo $W269_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W270 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, vivienda</td>
                <td><?php echo $W270 ?></td>
                <td><?php echo $W270_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W271 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, institucion residencial</td>
                <td><?php echo $W271 ?></td>
                <td><?php echo $W271_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W272 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W272 ?></td>
                <td><?php echo $W272_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W273 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, areas de deporte y atletismo</td>
                <td><?php echo $W273 ?></td>
                <td><?php echo $W273_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W274 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, calles y carretera</td>
                <td><?php echo $W274 ?></td>
                <td><?php echo $W274_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W275 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, comercio y area de servicios</td>
                <td><?php echo $W275 ?></td>
                <td><?php echo $W275_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W276 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, area industrial y de la construccion</td>
                <td><?php echo $W276 ?></td>
                <td><?php echo $W276_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W277 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, granja</td>
                <td><?php echo $W277 ?></td>
                <td><?php echo $W277_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W278 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, otro lugar espec} ificado</td>
                <td><?php echo $W278 ?></td>
                <td><?php echo $W278_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W279 > 0) { ?>
            <tr>
                <td>Contacto traumatico con herramientas manuales sin motor, lugar no espec} ificado</td>
                <td><?php echo $W279 ?></td>
                <td><?php echo $W279_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W280 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, vivienda</td>
                <td><?php echo $W280 ?></td>
                <td><?php echo $W280_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W281 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, institucion residencial</td>
                <td><?php echo $W281 ?></td>
                <td><?php echo $W281_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W282 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W282 ?></td>
                <td><?php echo $W282_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W283 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, areas de deporte y atletismo</td>
                <td><?php echo $W283 ?></td>
                <td><?php echo $W283_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W284 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, calles y carreteras</td>
                <td><?php echo $W284 ?></td>
                <td><?php echo $W284_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W285 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, comercio y area de servicios</td>
                <td><?php echo $W285 ?></td>
                <td><?php echo $W285_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W286 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, area industrial y de la construccion</td>
                <td><?php echo $W286 ?></td>
                <td><?php echo $W286_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W287 > 0) { ?>
            <tr>
                <td></td>
                <td><?php echo $W287 ?></td>
                <td><?php echo $W287_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W288 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, otro lugar espec} ificado</td>
                <td><?php echo $W288 ?></td>
                <td><?php echo $W288_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W289 > 0) { ?>
            <tr>
                <td>Contacto traumatico con cortadora de cesped, con motor, lugar no espec} ificado</td>
                <td><?php echo $W289 ?></td>
                <td><?php echo $W289_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W290 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, vivienda</td>
                <td><?php echo $W290 ?></td>
                <td><?php echo $W290_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W291 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, institucion residencial</td>
                <td><?php echo $W291 ?></td>
                <td><?php echo $W291_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W292 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, escuelas, otras instituciones y areas administrativas  publicas</td>
                <td><?php echo $W292 ?></td>
                <td><?php echo $W292_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W293 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, areas de deporte y atletismo</td>
                <td><?php echo $W293 ?></td>
                <td><?php echo $W293_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W294 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, calles y carreteras</td>
                <td><?php echo $W294 ?></td>
                <td><?php echo $W294_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W295 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, comercio y area de servicios</td>
                <td><?php echo $W295 ?></td>
                <td><?php echo $W295_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W296 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, area industrial y de la construccion</td>
                <td><?php echo $W296 ?></td>
                <td><?php echo $W296_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W297 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, granja</td>
                <td><?php echo $W297 ?></td>
                <td><?php echo $W297_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W298 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, otro lugar espec} ificado</td>
                <td><?php echo $W298 ?></td>
                <td><?php echo $W298_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W299 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras herramientas manuales y artefactos del hogar, con motor, lugar no espec} ificado</td>
                <td><?php echo $W299 ?></td>
                <td><?php echo $W299_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W300 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, vivienda</td>
                <td><?php echo $W300 ?></td>
                <td><?php echo $W300_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W301 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, institucion residencial</td>
                <td><?php echo $W301 ?></td>
                <td><?php echo $W301_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W302 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, escuelas, otras instituciones y areas administrativas publicas</td>
                <td><?php echo $W302 ?></td>
                <td><?php echo $W302_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W303 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, areas de deporte y atletismo</td>
                <td><?php echo $W303 ?></td>
                <td><?php echo $W303_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W304 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, calles y carreteras</td>
                <td><?php echo $W304 ?></td>
                <td><?php echo $W304_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W305 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, comercio y area de servicios</td>
                <td><?php echo $W305 ?></td>
                <td><?php echo $W305_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W306 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, area industrial y de la construccion</td>
                <td><?php echo $W306 ?></td>
                <td><?php echo $W306_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W307 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, granja</td>
                <td><?php echo $W307 ?></td>
                <td><?php echo $W307_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W308 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, otro lugar espec} ificado</td>
                <td><?php echo $W308 ?></td>
                <td><?php echo $W308_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W309 > 0) { ?>
            <tr>
                <td>Contacto traumatico con maquinaria agricola, lugar no espec} ificado</td>
                <td><?php echo $W309 ?></td>
                <td><?php echo $W309_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W310 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, vivienda</td>
                <td><?php echo $W310 ?></td>
                <td><?php echo $W310_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W311 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, institucion residencial</td>
                <td><?php echo $W311 ?></td>
                <td><?php echo $W311_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W312 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, escuelas, otras instituciones y areas administrativas  publicas</td>
                <td><?php echo $W312 ?></td>
                <td><?php echo $W312_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W313 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, areas de deporte y atletismo</td>
                <td><?php echo $W313 ?></td>
                <td><?php echo $W313_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W314 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, calles y carreteras</td>
                <td><?php echo $W314 ?></td>
                <td><?php echo $W314_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W315 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, comercio y area de servicios</td>
                <td><?php echo $W315 ?></td>
                <td><?php echo $W315_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W316 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, area industrial y de la construccion</td>
                <td><?php echo $W316 ?></td>
                <td><?php echo $W316_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W317 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, granja</td>
                <td><?php echo $W317 ?></td>
                <td><?php echo $W317_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W318 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, otro lugar espec} ificado</td>
                <td><?php echo $W318 ?></td>
                <td><?php echo $W318_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W319 > 0) { ?>
            <tr>
                <td>Contacto traumatico con otras maquinarias, y las no especificadas, lugar no espec} ificado</td>
                <td><?php echo $W319 ?></td>
                <td><?php echo $W319_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W23 > 0) { ?>
            <tr>
                <td>Atrapado, Aplastado, Trabado O Apretado En O Entre Objetos</td>
                <td><?php echo $W23 ?></td>
                <td><?php echo $W23_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W24 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Dispositivos De Elevacion Y Transmision, No Clas} ificadas En Otra Parte</td>
                <td><?php echo $W24 ?></td>
                <td><?php echo $W24_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W25 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Vidrio Cortante</td>
                <td><?php echo $W25 ?></td>
                <td><?php echo $W25_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W26 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Cuchillo, Espada, Daga O Puñal</td>
                <td><?php echo $W26 ?></td>
                <td><?php echo $W26_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W27 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Herramientas Manuales Sin Motor</td>
                <td><?php echo $W27 ?></td>
                <td><?php echo $W27_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W28 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Cortadora De Cesped, Con Motor</td>
                <td><?php echo $W28 ?></td>
                <td><?php echo $W28_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($W29 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Otras Herramientas Manuales Y Artefactos De Hogar, Con Motor</td>
                <td><?php echo $W29 ?></td>
                <td><?php echo $W29_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W30 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Maquinaria Agricola</td>
                <td><?php echo $W30 ?></td>
                <td><?php echo $W30_porcentaje_t ?> %</td>
            </tr>
        <?php } if ($W31 > 0) { ?>
            <tr>
                <td>Contacto Traumatico Con Otras Maquinarias, Y Las No especificadas</td>
                <td><?php echo $W31 ?></td>
                <td><?php echo $W31_porcentaje_t ?> %</td>
            </tr>
         <?php } if ($CIE10_M  > 0) { ?>
            <tr>
                <td>TOTAL</td>
                <td><?php echo $CIE10_M ?></td>
                <td> <?php echo $CIE10_M_porcentaje_T ?> %</td> 
            </tr>
       <?php } ?>
     <tbody>
</table>
<table id="basic-table4" style="display:none">
    <thead>
        <tr>
          <th>PRINCIPALES DIAGNÓSTICOS</th>
          <th>No. DE PACIENTES</th>
          <th>PORCENTAJE</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($E000 > 0) { ?>
        <tr>
            <td>Sindrome congenito de deficiencia de yodo, tipo neurologico</td>
            <td><?php echo $E000 ?></td>
            <td><?php echo $E000_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E001 > 0) { ?>
        <tr>
            <td>Sindrome de deficiencia congenita de yodo, tipo mixedematoso</td>
            <td><?php echo $E001 ?></td>
            <td><?php echo $E001_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E002 > 0) { ?>
        <tr>
            <td>Sindrome congenito de deficiencia de yodo, tipo mixto</td>
            <td><?php echo $E002 ?></td>
            <td><?php echo $E002_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E009 > 0) { ?>
        <tr>
            <td>Sindrome congenito de deficiencia de yodo, no especificado</td>
            <td><?php echo $E009 ?></td>
            <td><?php echo $E009_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E010 > 0) { ?>
        <tr>
            <td>Bocio difuso (endemico) relacionado con deficiencia de yodo</td>
            <td><?php echo $E010 ?></td>
            <td><?php echo $E010_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E011 > 0) { ?>
        <tr>
            <td>Bocio multinodular (endemico) relacionado con deficiencia de yodo</td>
            <td><?php echo $E011 ?></td>
            <td><?php echo $E011_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E012 > 0) { ?>
        <tr>
            <td>Bocio (endemico) relacionado con deficiencia de yodo, no especificado</td>
            <td><?php echo $E012 ?></td>
            <td><?php echo $E012_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E018 > 0) { ?>
        <tr>
            <td>Otros trastornos de la tiroides relacionados con deficiencia de yodo y afecciones similares</td>
            <td><?php echo $E018 ?></td>
            <td><?php echo $E018_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E02X > 0) { ?>
        <tr>
            <td>Hipotiroidismo subclinico por deficiencia de yodo</td>
            <td><?php echo $E02X ?></td>
            <td><?php echo $E02X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E030 > 0) { ?>
        <tr>
            <td>Hipotiroidismo congenito con bocio difuso</td>
            <td><?php echo $E030 ?></td>
            <td><?php echo $E030_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E031 > 0) { ?>
        <tr>
            <td>Hipotiroidismo congenito sin bocio</td>
            <td><?php echo $E031 ?></td>
            <td><?php echo $E031_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E032 > 0) { ?>
        <tr>
            <td>Hipotiroidismo debido a medicamentos y a otras sustancias exogenas</td>
            <td><?php echo $E032 ?></td>
            <td><?php echo $E032_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E033 > 0) { ?>
        <tr>
            <td>Hipotiroidismo postinfeccioso</td>
            <td><?php echo $E033 ?></td>
            <td><?php echo $E033_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E034 > 0) { ?>
        <tr>
            <td>Atrofia de tiroides (adquirida)</td>
            <td><?php echo $E034 ?></td>
            <td><?php echo $E034_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E035 > 0) { ?>
        <tr>
            <td>Coma mixedematoso</td>
            <td><?php echo $E035 ?></td>
            <td><?php echo $E035_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E038 > 0) { ?>
        <tr>
            <td>Otros hipotiroidismos especificados</td>
            <td><?php echo $E038 ?></td>
            <td><?php echo $E038_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E039 > 0) { ?>
        <tr>
            <td>Hipotiroidismo, no especificado</td>
            <td><?php echo $E039 ?></td>
            <td><?php echo $E039_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E040 > 0) { ?>
        <tr>
            <td>Bocio difuso no toxico</td>
            <td><?php echo $E040 ?></td>
            <td><?php echo $E040_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E041 > 0) { ?>
        <tr>
            <td>Nodulo tiroideo solitario no toxico</td>
            <td><?php echo $E041 ?></td>
            <td><?php echo $E041_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E042 > 0) { ?>
        <tr>
            <td>Bocio multinodular no toxico</td>
            <td><?php echo $E042 ?></td>
            <td><?php echo $E042_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E048 > 0) { ?>
        <tr>
            <td>Otros bocios no toxicos especificados</td>
            <td><?php echo $E048 ?></td>
            <td><?php echo $E048_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E049 > 0) { ?>
        <tr>
            <td>Bocio no toxico, no especificado</td>
            <td><?php echo $E049 ?></td>
            <td><?php echo $E049_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E050 > 0) { ?>
        <tr>
            <td>Tirotoxicosis con bocio difuso</td>
            <td><?php echo $E050 ?></td>
            <td><?php echo $E050_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E051 > 0) { ?>
        <tr>
            <td>Tirotoxicosis con nodulo solitario tiroideo toxico</td>
            <td><?php echo $E051 ?></td>
            <td><?php echo $E051_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E052 > 0) { ?>
        <tr>
            <td>Tirotoxicosis con bocio multinodular toxico</td>
            <td><?php echo $E052 ?></td>
            <td><?php echo $E052_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E053 > 0) { ?>
        <tr>
            <td>Tirotoxicosis por tejido tiroideo ectopico</td>
            <td><?php echo $E053 ?></td>
            <td><?php echo $E053_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E054 > 0) { ?>
        <tr>
            <td>Tirotoxicosis facticia</td>
            <td><?php echo $E054 ?></td>
            <td><?php echo $E054_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E055 > 0) { ?>
        <tr>
            <td>Crisis o tormenta tirotoxica</td>
            <td><?php echo $E055 ?></td>
            <td><?php echo $E055_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E058 > 0) { ?>
        <tr>
            <td>Otras tirotoxicosis</td>
            <td><?php echo $E058 ?></td>
            <td><?php echo $E058_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E059 > 0) { ?>
        <tr>
            <td>Tirotoxicosis, no especificada</td>
            <td><?php echo $E059 ?></td>
            <td><?php echo $E059_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E060 > 0) { ?>
        <tr>
            <td>Tiroiditis aguda</td>
            <td><?php echo $E060 ?></td>
            <td><?php echo $E060_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E061 > 0) { ?>
        <tr>
            <td>Tiroiditis subaguda</td>
            <td><?php echo $E061 ?></td>
            <td><?php echo $E061_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E062 > 0) { ?>
        <tr>
            <td>Tiroiditis cronica con tirotoxicosis transitoria</td>
            <td><?php echo $E062 ?></td>
            <td><?php echo $E062_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E063 > 0) { ?>
        <tr>
            <td>Tiroiditis autoinmune</td>
            <td><?php echo $E063 ?></td>
            <td><?php echo $E063_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E064 > 0) { ?>
        <tr>
            <td>Tiroiditis inducida por drogas</td>
            <td><?php echo $E064 ?></td>
            <td><?php echo $E064_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E065 > 0) { ?>
        <tr>
            <td>Otras tiroiditis cronicas</td>
            <td><?php echo $E065 ?></td>
            <td><?php echo $E065_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E069 > 0) { ?>
        <tr>
            <td>Tiroiditis, no especificada</td>
            <td><?php echo $E069 ?></td>
            <td><?php echo $E069_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E070 > 0) { ?>
        <tr>
            <td>Hipersecrecion de calcitonina</td>
            <td><?php echo $E070 ?></td>
            <td><?php echo $E070_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E071 > 0) { ?>
        <tr>
            <td>Bocio dishormogenetico</td>
            <td><?php echo $E071 ?></td>
            <td><?php echo $E071_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E078 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la glandula tiroides</td>
            <td><?php echo $E078 ?></td>
            <td><?php echo $E078_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E079 > 0) { ?>
        <tr>
            <td>Trastorno de la glandula tiroides, no especificado</td>
            <td><?php echo $E079 ?></td>
            <td><?php echo $E079_porcentaje_t ?> %</td>
        </tr>
        
        <?php } if ($E100 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con coma</td>
            <td><?php echo $E100 ?></td>
            <td><?php echo $E100_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E102 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con cetoacidosis</td>
            <td><?php echo $E102 ?></td>
            <td><?php echo $E102_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E103 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con complicaciones oftalmicas</td>
            <td><?php echo $E103 ?></td>
            <td><?php echo $E103_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E104 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con complicaciones neurologicas</td>
            <td><?php echo $E104 ?></td>
            <td><?php echo $E104_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E105 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con complicaciones circulatorias perifericas</td>
            <td><?php echo $E105 ?></td>
            <td><?php echo $E105_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E106 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con otras complicaciones especificadas</td>
            <td><?php echo $E106 ?></td>
            <td><?php echo $E106_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E107 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con complicaciones multiples</td>
            <td><?php echo $E107 ?></td>
            <td><?php echo $E107_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E108 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, con complicaciones no especificadas</td>
            <td><?php echo $E108 ?></td>
            <td><?php echo $E108_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E109 > 0) { ?>
        <tr>
            <td>Diabetes mellitus insulinodependiente, sin mencion de complicacion</td>
            <td><?php echo $E109 ?></td>
            <td><?php echo $E109_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E110 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con coma</td>
            <td><?php echo $E110 ?></td>
            <td><?php echo $E110_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E111 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con cetoacidosis</td>
            <td><?php echo $E111 ?></td>
            <td><?php echo $E111_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E112 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones renales</td>
            <td><?php echo $E112 ?></td>
            <td><?php echo $E112_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E113 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones oftalmicas</td>
            <td><?php echo $E113 ?></td>
            <td><?php echo $E113_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E114 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones neurologicas</td>
            <td><?php echo $E114 ?></td>
            <td><?php echo $E114_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E115 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones circulatorias perifericas</td>
            <td><?php echo $E115 ?></td>
            <td><?php echo $E115_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E116 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con otras complicaciones especificadas</td>
            <td><?php echo $E116 ?></td>
            <td><?php echo $E116_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E117 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones multiples</td>
            <td><?php echo $E117 ?></td>
            <td><?php echo $E117_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E118 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, con complicaciones no especificadas</td>
            <td><?php echo $E118 ?></td>
            <td><?php echo $E118_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E119 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no insulinodependiente, sin mencion de complicacion</td>
            <td><?php echo $E119 ?></td>
            <td><?php echo $E119_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E120 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con coma</td>
            <td><?php echo $E120 ?></td>
            <td><?php echo $E120_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E121 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con cetoacidosis</td>
            <td><?php echo $E121 ?></td>
            <td><?php echo $E121_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E122 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones renales</td>
            <td><?php echo $E122 ?></td>
            <td><?php echo $E122_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E123 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones oftalmicas</td>
            <td><?php echo $E123 ?></td>
            <td><?php echo $E123_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E124 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones neurologicas</td>
            <td><?php echo $E124 ?></td>
            <td><?php echo $E124_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E125 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones circulatorias perifericas</td>
            <td><?php echo $E125 ?></td>
            <td><?php echo $E125_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E126 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con otras complicaciones especificadas</td>
            <td><?php echo $E126 ?></td>
            <td><?php echo $E126_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E127 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones multiples</td>
            <td><?php echo $E127 ?></td>
            <td><?php echo $E127_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E128 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, con complicaciones no especificadas</td>
            <td><?php echo $E128 ?></td>
            <td><?php echo $E128_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E129 > 0) { ?>
        <tr>
            <td>Diabetes mellitus asociada con desnutricion, sin mencion de complicacion</td>
            <td><?php echo $E129 ?></td>
            <td><?php echo $E129_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E130 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con coma</td>
            <td><?php echo $E130 ?></td>
            <td><?php echo $E130_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E131 > 0) { ?>
        <tr>
            <td>Otras Diabetes mellitus especificadas, con cetoacidosis</td>
            <td><?php echo $E131 ?></td>
            <td><?php echo $E131_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E132 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones renales</td>
            <td><?php echo $E132 ?></td>
            <td><?php echo $E132_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E133 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones oftalmicas</td>
            <td><?php echo $E133 ?></td>
            <td><?php echo $E133_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E134 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones neurologicas</td>
            <td><?php echo $E134 ?></td>
            <td><?php echo $E134_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E135 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones circulatorias perifericas</td>
            <td><?php echo $E135 ?></td>
            <td><?php echo $E135_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E136 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con otras complicaciones especificadas</td>
            <td><?php echo $E136 ?></td>
            <td><?php echo $E136_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E137 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones multiples</td>
            <td><?php echo $E137 ?></td>
            <td><?php echo $E137_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E138 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, con complicaciones no especificadas</td>
            <td><?php echo $E138 ?></td>
            <td><?php echo $E138_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E139 > 0) { ?>
        <tr>
            <td>Otras diabetes mellitus especificadas, sin mencion de complicacion</td>
            <td><?php echo $E139 ?></td>
            <td><?php echo $E139_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E140 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con coma</td>
            <td><?php echo $E140 ?></td>
            <td><?php echo $E140_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E141 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con cetoacidosis</td>
            <td><?php echo $E141 ?></td>
            <td><?php echo $E141_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E142 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones renales</td>
            <td><?php echo $E142 ?></td>
            <td><?php echo $E142_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E143 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones oftalmicas</td>
            <td><?php echo $E143 ?></td>
            <td><?php echo $E143_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E144 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones neurologicas</td>
            <td><?php echo $E144 ?></td>
            <td><?php echo $E144_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E145 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones circulatorias perifericas</td>
            <td><?php echo $E145 ?></td>
            <td><?php echo $E145_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E146 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con otras complicaciones especificadas</td>
            <td><?php echo $E146 ?></td>
            <td><?php echo $E146_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E147 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones multiples</td>
            <td><?php echo $E147 ?></td>
            <td><?php echo $E147_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E148 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, con complicaciones no especificadas</td>
            <td><?php echo $E148 ?></td>
            <td><?php echo $E148_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E149 > 0) { ?>
        <tr>
            <td>Diabetes mellitus no especificada, sin mencion de complicacion</td>
            <td><?php echo $E149 ?></td>
            <td><?php echo $E149_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E15X > 0) { ?>
        <tr>
            <td>Coma hipoglicemico no diabetico</td>
            <td><?php echo $E15X ?></td>
            <td><?php echo $E15X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E160 > 0) { ?>
        <tr>
            <td>Hipoglicemia sin coma, inducida por drogas</td>
            <td><?php echo $E160 ?></td>
            <td><?php echo $E160_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E161 > 0) { ?>
        <tr>
            <td>Otras hipoglicemias</td>
            <td><?php echo $E161 ?></td>
            <td><?php echo $E161_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E162 > 0) { ?>
        <tr>
            <td>Hipoglicemia, no especificada</td>
            <td><?php echo $E162 ?></td>
            <td><?php echo $E162_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E163 > 0) { ?>
        <tr>
            <td>Secrecion exagerada del glucagon</td>
            <td><?php echo $E163 ?></td>
            <td><?php echo $E163_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E164 > 0) { ?>
        <tr>
            <td>Secrecion anormal de gastrina</td>
            <td><?php echo $E164 ?></td>
            <td><?php echo $E164_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E168 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la secrecion interna del pancreas</td>
            <td><?php echo $E168 ?></td>
            <td><?php echo $E168_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E169 > 0) { ?>
        <tr>
            <td>Trastornos de la secrecion interna del pancreas, sin otra especificacion</td>
            <td><?php echo $E169 ?></td>
            <td><?php echo $E169_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E200 > 0) { ?>
        <tr>
            <td>Hipoparatiroidismo idiopatico</td>
            <td><?php echo $E200 ?></td>
            <td><?php echo $E200_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E201 > 0) { ?>
        <tr>
            <td>Pseudohipoparatiroidismo</td>
            <td><?php echo $E201 ?></td>
            <td><?php echo $E201_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E208 > 0) { ?>
        <tr>
            <td>Otros tipos de hipoparatiroidismo</td>
            <td><?php echo $E208 ?></td>
            <td><?php echo $E208_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E209 > 0) { ?>
        <tr>
            <td>Hipoparatiroidismo, no especificado</td>
            <td><?php echo $E209 ?></td>
            <td><?php echo $E209_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E210 > 0) { ?>
        <tr>
            <td>Hiperparatiroidismo primario</td>
            <td><?php echo $E210 ?></td>
            <td><?php echo $E210_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E211 > 0) { ?>
        <tr>
            <td>Hiperparatiroidismo secundario no clasificado en otra parte</td>
            <td><?php echo $E211 ?></td>
            <td><?php echo $E211_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E212 > 0) { ?>
        <tr>
            <td>Otros tipos de hiperparatiroidismo</td>
            <td><?php echo $E212 ?></td>
            <td><?php echo $E212_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E213 > 0) { ?>
        <tr>
            <td>Hiperparatiroidismo, sin otra especificacion</td>
            <td><?php echo $E213 ?></td>
            <td><?php echo $E213_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E214 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la glandula paratiroides</td>
            <td><?php echo $E214 ?></td>
            <td><?php echo $E214_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E215 > 0) { ?>
        <tr>
            <td>Trastorno de la glandula paratiroides, no especificado</td>
            <td><?php echo $E215 ?></td>
            <td><?php echo $E215_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E220 > 0) { ?>
        <tr>
            <td>Acromegalia y gigantismo hipofisario</td>
            <td><?php echo $E220 ?></td>
            <td><?php echo $E220_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E221 > 0) { ?>
        <tr>
            <td>Hiperprolactinemia</td>
            <td><?php echo $E221 ?></td>
            <td><?php echo $E221_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E222 > 0) { ?>
        <tr>
            <td>Sindrome de secrecion inapropiada de hormona anitidiuretica</td>
            <td><?php echo $E222 ?></td>
            <td><?php echo $E222_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E228 > 0) { ?>
        <tr>
            <td>Otras hiperfunciones de la glandula hipofisis</td>
            <td><?php echo $E228 ?></td>
            <td><?php echo $E228_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E229 > 0) { ?>
        <tr>
            <td>Hiperfuncion de la glandula hipofisis, no especificada</td>
            <td><?php echo $E229 ?></td>
            <td><?php echo $E229_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E230 > 0) { ?>
        <tr>
            <td>Hipopituitarismo</td>
            <td><?php echo $E230 ?></td>
            <td><?php echo $E230_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E231 > 0) { ?>
        <tr>
            <td>Hipopituitarismo inducido por drogas</td>
            <td><?php echo $E231 ?></td>
            <td><?php echo $E231_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E232 > 0) { ?>
        <tr>
            <td>Diabetes insipida</td>
            <td><?php echo $E232 ?></td>
            <td><?php echo $E232_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E233 > 0) { ?>
        <tr>
            <td>Disfuncion hipotalamica, no clasificada en otra parte</td>
            <td><?php echo $E233 ?></td>
            <td><?php echo $E233_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E236 > 0) { ?>
        <tr>
            <td>Otros trastornos de la glandula hipofisis</td>
            <td><?php echo $E236 ?></td>
            <td><?php echo $E236_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E237 > 0) { ?>
        <tr>
            <td>Trastorno de la glandula hipofisis, no especificado</td>
            <td><?php echo $E237 ?></td>
            <td><?php echo $E237_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E240 > 0) { ?>
        <tr>
            <td>Enfermedad de Cushing dependiente de la hipofisis</td>
            <td><?php echo $E240 ?></td>
            <td><?php echo $E240_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E241 > 0) { ?>
        <tr>
            <td>Sindrome de Nelson</td>
            <td><?php echo $E241 ?></td>
            <td><?php echo $E241_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E242 > 0) { ?>
        <tr>
            <td>Sindrome de Cushing inducido por drogas</td>
            <td><?php echo $E242 ?></td>
            <td><?php echo $E242_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E243 > 0) { ?>
        <tr>
            <td>Sindrome de ACTH ectopico</td>
            <td><?php echo $E243 ?></td>
            <td><?php echo $E243_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E244 > 0) { ?>
        <tr>
            <td>Sindrome de seudo-Cushing inducido por alcohol</td>
            <td><?php echo $E244 ?></td>
            <td><?php echo $E244_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E248 > 0) { ?>
        <tr>
            <td>Otros tipos de sindrome de Cushing</td>
            <td><?php echo $E248 ?></td>
            <td><?php echo $E248_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E249 > 0) { ?>
        <tr>
            <td>Sindrome de Cushing, no especificado</td>
            <td><?php echo $E249 ?></td>
            <td><?php echo $E249_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E250 > 0) { ?>
        <tr>
            <td>Trastornos adrenogenitales congenitos con deficiencia enzimatica</td>
            <td><?php echo $E250 ?></td>
            <td><?php echo $E250_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E258 > 0) { ?>
        <tr>
            <td>Otros trastornos adrenogenitales</td>
            <td><?php echo $E258 ?></td>
            <td><?php echo $E258_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E259 > 0) { ?>
        <tr>
            <td>Trastorno adrenogenital, no especificado</td>
            <td><?php echo $E259 ?></td>
            <td><?php echo $E259_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E260 > 0) { ?>
        <tr>
            <td>Hiperaldosteronismo primario</td>
            <td><?php echo $E260 ?></td>
            <td><?php echo $E260_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E261 > 0) { ?>
        <tr>
            <td>Hiperaldosteronismo secundario</td>
            <td><?php echo $E261 ?></td>
            <td><?php echo $E261_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E268 > 0) { ?>
        <tr>
            <td>Otros tipos de hiperaldosteronismo</td>
            <td><?php echo $E268 ?></td>
            <td><?php echo $E268_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E269 > 0) { ?>
        <tr>
            <td>Hiperaldosteronismo, no especificado</td>
            <td><?php echo $E269 ?></td>
            <td><?php echo $E269_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E270 > 0) { ?>
        <tr>
            <td>Otra hiperactividad corticosuprarrenal</td>
            <td><?php echo $E270 ?></td>
            <td><?php echo $E270_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E271 > 0) { ?>
        <tr>
            <td>Insuficiencia corticosuprarrenal primaria</td>
            <td><?php echo $E271 ?></td>
            <td><?php echo $E271_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E272 > 0) { ?>
        <tr>
            <td>Crisis addisoniana</td>
            <td><?php echo $E272 ?></td>
            <td><?php echo $E272_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E273 > 0) { ?>
        <tr>
            <td>Insuficiencia corticosuprarrenal inducida por drogas</td>
            <td><?php echo $E273 ?></td>
            <td><?php echo $E273_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E274 > 0) { ?>
        <tr>
            <td>Otras insuficiencias corticosuprarrenales y las no especificadas</td>
            <td><?php echo $E274 ?></td>
            <td><?php echo $E274_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E275 > 0) { ?>
        <tr>
            <td>Hiperfuncion de la medula suprarrenal</td>
            <td><?php echo $E275 ?></td>
            <td><?php echo $E275_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E278 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados de la glandula suprarrenal</td>
            <td><?php echo $E278 ?></td>
            <td><?php echo $E278_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E279 > 0) { ?>
        <tr>
            <td>Trastorno de la glandula suprarrenal, no especificado</td>
            <td><?php echo $E279 ?></td>
            <td><?php echo $E279_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E280 > 0) { ?>
        <tr>
            <td>Exceso de estrogenos</td>
            <td><?php echo $E280 ?></td>
            <td><?php echo $E280_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E281 > 0) { ?>
        <tr>
            <td>Exceso de androgenos</td>
            <td><?php echo $E281 ?></td>
            <td><?php echo $E281_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E282 > 0) { ?>
        <tr>
            <td>Sindrome de ovario poliquistico</td>
            <td><?php echo $E282 ?></td>
            <td><?php echo $E282_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E283 > 0) { ?>
        <tr>
            <td>Insuficiencia ovarica primaria</td>
            <td><?php echo $E283 ?></td>
            <td><?php echo $E283_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E288 > 0) { ?>
        <tr>
            <td>Otras disfunciones ovaricas</td>
            <td><?php echo $E288 ?></td>
            <td><?php echo $E288_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E289 > 0) { ?>
        <tr>
            <td>Disfuncion ovarica, no especificada</td>
            <td><?php echo $E289 ?></td>
            <td><?php echo $E289_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E290 > 0) { ?>
        <tr>
            <td>Hiperfuncion testicular</td>
            <td><?php echo $E290 ?></td>
            <td><?php echo $E290_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E291 > 0) { ?>
        <tr>
            <td>Hipofuncion testicular</td>
            <td><?php echo $E291 ?></td>
            <td><?php echo $E291_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E298 > 0) { ?>
        <tr>
            <td>Otras disfunciones testiculares</td>
            <td><?php echo $E298 ?></td>
            <td><?php echo $E298_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E299 > 0) { ?>
        <tr>
            <td>Disfuncion testicular, no especificada</td>
            <td><?php echo $E299 ?></td>
            <td><?php echo $E299_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E300 > 0) { ?>
        <tr>
            <td>Pubertad retardada</td>
            <td><?php echo $E300 ?></td>
            <td><?php echo $E300_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E301 > 0) { ?>
        <tr>
            <td>Pubertad precoz</td>
            <td><?php echo $E301 ?></td>
            <td><?php echo $E301_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E308 > 0) { ?>
        <tr>
            <td>Otros trastornos de la pubertad</td>
            <td><?php echo $E308 ?></td>
            <td><?php echo $E308_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E309 > 0) { ?>
        <tr>
            <td>Trastorno de la pubertad, no especificado</td>
            <td><?php echo $E309 ?></td>
            <td><?php echo $E309_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E310 > 0) { ?>
        <tr>
            <td>Insuficiencia poliglandular autoinmune</td>
            <td><?php echo $E310 ?></td>
            <td><?php echo $E310_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E311 > 0) { ?>
        <tr>
            <td>Hiperfuncion poliglandular</td>
            <td><?php echo $E311 ?></td>
            <td><?php echo $E311_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E318 > 0) { ?>
        <tr>
            <td>Otras disfunciones poliglandulares</td>
            <td><?php echo $E318 ?></td>
            <td><?php echo $E318_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E319 > 0) { ?>
        <tr>
            <td>Disfuncion poliglandular, no especificada</td>
            <td><?php echo $E319 ?></td>
            <td><?php echo $E319_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E320 > 0) { ?>
        <tr>
            <td>Hiperplasia persistente del timo</td>
            <td><?php echo $E320 ?></td>
            <td><?php echo $E320_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E321 > 0) { ?>
        <tr>
            <td>Absceso del timo</td>
            <td><?php echo $E321 ?></td>
            <td><?php echo $E321_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E328 > 0) { ?>
        <tr>
            <td>Otras enfermedades del timo</td>
            <td><?php echo $E328 ?></td>
            <td><?php echo $E328_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E329 > 0) { ?>
        <tr>
            <td>Enfermedad del timo, no especificada</td>
            <td><?php echo $E329 ?></td>
            <td><?php echo $E329_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E340 > 0) { ?>
        <tr>
            <td>Sindrome carcinoide</td>
            <td><?php echo $E340 ?></td>
            <td><?php echo $E340_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E341 > 0) { ?>
        <tr>
            <td>Otras hipersecreciones de hormonas intestinales</td>
            <td><?php echo $E341 ?></td>
            <td><?php echo $E341_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E342 > 0) { ?>
        <tr>
            <td>Secrecion hormonal ectopica, no clasificada en otra parte</td>
            <td><?php echo $E342 ?></td>
            <td><?php echo $E342_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E343 > 0) { ?>
        <tr>
            <td>Enanismo, no clasificado en otra parte</td>
            <td><?php echo $E343 ?></td>
            <td><?php echo $E343_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E344 > 0) { ?>
        <tr>
            <td>Estatura alta constitucional</td>
            <td><?php echo $E344 ?></td>
            <td><?php echo $E344_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E345 > 0) { ?>
        <tr>
            <td>Sindrome de resistencia androgenica</td>
            <td><?php echo $E345 ?></td>
            <td><?php echo $E345_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E348 > 0) { ?>
        <tr>
            <td>Otros trastornos endocrinos especificados</td>
            <td><?php echo $E348 ?></td>
            <td><?php echo $E348_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E349 > 0) { ?>
        <tr>
            <td>Trastorno endocrino, no especificado</td>
            <td><?php echo $E349 ?></td>
            <td><?php echo $E349_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E350 > 0) { ?>
        <tr>
            <td>Trastornos de la glandula tiroides en enfermedades clasificadas en otra parte</td>
            <td><?php echo $E350 ?></td>
            <td><?php echo $E350_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E351 > 0) { ?>
        <tr>
            <td>Trastornos de las glandulas suprarrenales en enfermedades clasificadas en otra parte</td>
            <td><?php echo $E351 ?></td>
            <td><?php echo $E351_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E358 > 0) { ?>
        <tr>
            <td>Trastornos de otras glandulas endocrinas en enfermedades clasificadas en otra parte</td>
            <td><?php echo $E358 ?></td>
            <td><?php echo $E358_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E40X > 0) { ?>
        <tr>
            <td>Kwashiorkor</td>
            <td><?php echo $E40X ?></td>
            <td><?php echo $E40X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E41X > 0) { ?>
        <tr>
            <td>Marasmo nutricional</td>
            <td><?php echo $E41X ?></td>
            <td><?php echo $E41X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E42X > 0) { ?>
        <tr>
            <td>Kwashiorkor marasmatico</td>
            <td><?php echo $E42X ?></td>
            <td><?php echo $E42X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E43X > 0) { ?>
        <tr>
            <td>Desnutricion proteicocalorica severa, no especificada</td>
            <td><?php echo $E43X ?></td>
            <td><?php echo $E43X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E440 > 0) { ?>
        <tr>
            <td>Desnutricion proteicocalorica moderada</td>
            <td><?php echo $E440 ?></td>
            <td><?php echo $E440_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E441 > 0) { ?>
        <tr>
            <td>Desnutricion proteicocalorica leve</td>
            <td><?php echo $E441 ?></td>
            <td><?php echo $E441_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E45X > 0) { ?>
        <tr>
            <td>Retardo del desarrollo debido a desnutricion proteicocalorica</td>
            <td><?php echo $E45X ?></td>
            <td><?php echo $E45X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E46X > 0) { ?>
        <tr>
            <td>Desnutricion proteicocalorica, no especificada</td>
            <td><?php echo $E46X ?></td>
            <td><?php echo $E46X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E500 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con xerosis conjuntival</td>
            <td><?php echo $E500 ?></td>
            <td><?php echo $E500_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E501 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con mancha de Bitot y xerosis conjuntival</td>
            <td><?php echo $E501 ?></td>
            <td><?php echo $E501_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E502 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con xerosis corneal</td>
            <td><?php echo $E502 ?></td>
            <td><?php echo $E502_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E503 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con ulceracion corneal y xerosis</td>
            <td><?php echo $E503 ?></td>
            <td><?php echo $E503_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E504 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con queratomalacia</td>
            <td><?php echo $E504 ?></td>
            <td><?php echo $E504_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E505 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con ceguera nocturna</td>
            <td><?php echo $E505 ?></td>
            <td><?php echo $E505_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E506 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A con cicatrices xeroftalmicas de la cornea</td>
            <td><?php echo $E506 ?></td>
            <td><?php echo $E506_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E507 > 0) { ?>
        <tr>
            <td>Otras manifestaciones oculares de deficiencia de vitamina A</td>
            <td><?php echo $E507 ?></td>
            <td><?php echo $E507_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E508 > 0) { ?>
        <tr>
            <td>Otras manifestaciones de deficiencia de vitamina A</td>
            <td><?php echo $E508 ?></td>
            <td><?php echo $E508_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E509 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina A, no especificada</td>
            <td><?php echo $E509 ?></td>
            <td><?php echo $E509_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E511 > 0) { ?>
        <tr>
            <td>Beriberi</td>
            <td><?php echo $E511 ?></td>
            <td><?php echo $E511_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E512 > 0) { ?>
        <tr>
            <td>Encefalopatia de Wernicke</td>
            <td><?php echo $E512 ?></td>
            <td><?php echo $E512_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E518 > 0) { ?>
        <tr>
            <td>Otras manifestaciones de la deficiencia de tiamina</td>
            <td><?php echo $E518 ?></td>
            <td><?php echo $E518_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E519 > 0) { ?>
        <tr>
            <td>Deficiencia de tiamina, no especificada</td>
            <td><?php echo $E519 ?></td>
            <td><?php echo $E519_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E52X > 0) { ?>
        <tr>
            <td>Deficiencia de niacina [pelagra]</td>
            <td><?php echo $E52X ?></td>
            <td><?php echo $E52X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E530 > 0) { ?>
        <tr>
            <td>Deficiencia de riboflavina</td>
            <td><?php echo $E530 ?></td>
            <td><?php echo $E530_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E531 > 0) { ?>
        <tr>
            <td>Deficiencia de piridoxina</td>
            <td><?php echo $E531 ?></td>
            <td><?php echo $E531_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E538 > 0) { ?>
        <tr>
            <td>Deficiencia de otras vitaminas del grupo B</td>
            <td><?php echo $E538 ?></td>
            <td><?php echo $E538_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E539 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina B, no especificada</td>
            <td><?php echo $E539 ?></td>
            <td><?php echo $E539_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E54X > 0) { ?>
        <tr>
            <td>Deficiencia de acido ascorbico</td>
            <td><?php echo $E54X ?></td>
            <td><?php echo $E54X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E550 > 0) { ?>
        <tr>
            <td>Raquitismo activo</td>
            <td><?php echo $E550 ?></td>
            <td><?php echo $E550_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E559 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina D, no especificada</td>
            <td><?php echo $E559 ?></td>
            <td><?php echo $E559_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E560 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina E</td>
            <td><?php echo $E560 ?></td>
            <td><?php echo $E560_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E561 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina K</td>
            <td><?php echo $E561 ?></td>
            <td><?php echo $E561_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E568 > 0) { ?>
        <tr>
            <td>Deficiencia de otras vitaminas</td>
            <td><?php echo $E568 ?></td>
            <td><?php echo $E568_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E569 > 0) { ?>
        <tr>
            <td>Deficiencia de vitamina, no especificada</td>
            <td><?php echo $E569 ?></td>
            <td><?php echo $E569_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E58X > 0) { ?>
        <tr>
            <td>Deficiencia dietetica de calcio</td>
            <td><?php echo $E58X ?></td>
            <td><?php echo $E58X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E59X > 0) { ?>
        <tr>
            <td>Deficiencia dietetica de selenio</td>
            <td><?php echo $E59X ?></td>
            <td><?php echo $E59X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E60X > 0) { ?>
        <tr>
            <td>Deficiencia dietetica de zinc</td>
            <td><?php echo $E60X ?></td>
            <td><?php echo $E60X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E610 > 0) { ?>
        <tr>
            <td>Deficiencia de cobre</td>
            <td><?php echo $E610 ?></td>
            <td><?php echo $E610_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E611 > 0) { ?>
        <tr>
            <td>Deficiencia de hierro</td>
            <td><?php echo $E611 ?></td>
            <td><?php echo $E611_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E612 > 0) { ?>
        <tr>
            <td>Deficiencia de magnesio</td>
            <td><?php echo $E612 ?></td>
            <td><?php echo $E612_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E613 > 0) { ?>
        <tr>
            <td>Deficiencia de manganeso</td>
            <td><?php echo $E613 ?></td>
            <td><?php echo $E613_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E614 > 0) { ?>
        <tr>
            <td>Deficiencia de cromo</td>
            <td><?php echo $E614 ?></td>
            <td><?php echo $E614_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E615 > 0) { ?>
        <tr>
            <td>Deficiencia de molibdeno</td>
            <td><?php echo $E615 ?></td>
            <td><?php echo $E615_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E616 > 0) { ?>
        <tr>
            <td>Deficiencia de vanadio</td>
            <td><?php echo $E616 ?></td>
            <td><?php echo $E616_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E617 > 0) { ?>
        <tr>
            <td>Deficiencia de multiples elementos nutricionales</td>
            <td><?php echo $E617 ?></td>
            <td><?php echo $E617_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E618 > 0) { ?>
        <tr>
            <td>Deficiencia de otros elementos nutricionales especificados</td>
            <td><?php echo $E618 ?></td>
            <td><?php echo $E618_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E619 > 0) { ?>
        <tr>
            <td>Deficiencia de otro elemento nutricional, no especificado</td>
            <td><?php echo $E619 ?></td>
            <td><?php echo $E619_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E630 > 0) { ?>
        <tr>
            <td>Deficiencia de acidos grasos esenciales [AGE]</td>
            <td><?php echo $E630 ?></td>
            <td><?php echo $E630_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E631 > 0) { ?>
        <tr>
            <td>Desequilibrio de los constituyentes en la dieta</td>
            <td><?php echo $E631 ?></td>
            <td><?php echo $E631_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E638 > 0) { ?>
        <tr>
            <td>Otras deficiencias nutricionales especificadas</td>
            <td><?php echo $E638 ?></td>
            <td><?php echo $E638_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E639 > 0) { ?>
        <tr>
            <td>Deficiencia nutricional, no especificada</td>
            <td><?php echo $E639 ?></td>
            <td><?php echo $E639_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E640 > 0) { ?>
        <tr>
            <td>Secuelas de la desnutricion proteicocalorica</td>
            <td><?php echo $E640 ?></td>
            <td><?php echo $E640_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E641 > 0) { ?>
        <tr>
            <td>Secuelas de la deficiencia de vitamina A</td>
            <td><?php echo $E641 ?></td>
            <td><?php echo $E641_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E642 > 0) { ?>
        <tr>
            <td>Secuelas de la deficiencia de vitamina C</td>
            <td><?php echo $E642 ?></td>
            <td><?php echo $E642_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E643 > 0) { ?>
        <tr>
            <td>Secuelas del raquitismo</td>
            <td><?php echo $E643 ?></td>
            <td><?php echo $E643_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E648 > 0) { ?>
        <tr>
            <td>Secuelas de otras deficiencias nutricionales</td>
            <td><?php echo $E648 ?></td>
            <td><?php echo $E648_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E649 > 0) { ?>
        <tr>
            <td>Secuelas de la deficiencia nutricional no especificada</td>
            <td><?php echo $E649 ?></td>
            <td><?php echo $E649_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E65X > 0) { ?>
        <tr>
            <td>Adiposidad localizada</td>
            <td><?php echo $E65X ?></td>
            <td><?php echo $E65X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($Obesidad0 > 0) { ?>
        <tr>
            <td>Obesidad</td>
            <td><?php echo $Obesidad0 ?></td>
            <td><?php echo $Obesidad0_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E670 > 0) { ?>
        <tr>
            <td>Hipervitaminosis A</td>
            <td><?php echo $E670 ?></td>
            <td><?php echo $E670_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E671 > 0) { ?>
        <tr>
            <td>Hipercarotinemia</td>
            <td><?php echo $E671 ?></td>
            <td><?php echo $E671_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E672 > 0) { ?>
        <tr>
            <td>Sindrome de megavitamina B6</td>
            <td><?php echo $E672 ?></td>
            <td><?php echo $E672_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E673 > 0) { ?>
        <tr>
            <td>Hipervitaminosis D</td>
            <td><?php echo $E673 ?></td>
            <td><?php echo $E673_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E678 > 0) { ?>
        <tr>
            <td>Otros tipos de hiperalimentacion especificados</td>
            <td><?php echo $E678 ?></td>
            <td><?php echo $E678_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E68X > 0) { ?>
        <tr>
            <td>Secuelas de hiperalimentacion</td>
            <td><?php echo $E68X ?></td>
            <td><?php echo $E68X_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E700 > 0) { ?>
        <tr>
            <td>Fenilcetonuria</td>
            <td><?php echo $E700 ?></td>
            <td><?php echo $E700_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E701 > 0) { ?>
        <tr>
            <td>Otras hiperfenilalaninemias</td>
            <td><?php echo $E701 ?></td>
            <td><?php echo $E701_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E702 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de la tirosina</td>
            <td><?php echo $E702 ?></td>
            <td><?php echo $E702_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E703 > 0) { ?>
        <tr>
            <td>Albinismo</td>
            <td><?php echo $E703 ?></td>
            <td><?php echo $E703_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E708 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de los aminoacidos aromaticos</td>
            <td><?php echo $E708 ?></td>
            <td><?php echo $E708_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E709 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de los aminoacidos aromaticos, no especificado</td>
            <td><?php echo $E709 ?></td>
            <td><?php echo $E709_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E710 > 0) { ?>
        <tr>
            <td>Enfermedad de la orina en jarabe de arce</td>
            <td><?php echo $E710 ?></td>
            <td><?php echo $E710_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E711 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de los aminoacidos de cadena ramificada</td>
            <td><?php echo $E711 ?></td>
            <td><?php echo $E711_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E712 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de los aminoacidos de cadena ramificada, no especificados</td>
            <td><?php echo $E712 ?></td>
            <td><?php echo $E712_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E713 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de los acidos grasos</td>
            <td><?php echo $E713 ?></td>
            <td><?php echo $E713_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E720 > 0) { ?>
        <tr>
            <td>Trastornos del transporte de los aminoacidos</td>
            <td><?php echo $E720 ?></td>
            <td><?php echo $E720_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E721 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de los aminoacidos azufrados</td>
            <td><?php echo $E721 ?></td>
            <td><?php echo $E721_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E722 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del ciclo de la urea</td>
            <td><?php echo $E722 ?></td>
            <td><?php echo $E722_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E723 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de la lisina y la hidroxilisina</td>
            <td><?php echo $E723 ?></td>
            <td><?php echo $E723_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E724 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de la ornitina</td>
            <td><?php echo $E724 ?></td>
            <td><?php echo $E724_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E725 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de la glicina</td>
            <td><?php echo $E725 ?></td>
            <td><?php echo $E725_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E728 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados del metabolismo de los aminoacidos</td>
            <td><?php echo $E728 ?></td>
            <td><?php echo $E728_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E729 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de los aminoacidos, no especificado</td>
            <td><?php echo $E729 ?></td>
            <td><?php echo $E729_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E730 > 0) { ?>
        <tr>
            <td>Deficiencia congenita de lactasa</td>
            <td><?php echo $E730 ?></td>
            <td><?php echo $E730_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E731 > 0) { ?>
        <tr>
            <td>Deficiencia secundaria de lactasa</td>
            <td><?php echo $E731 ?></td>
            <td><?php echo $E731_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E738 > 0) { ?>
        <tr>
            <td>Otros tipos de intolerancia a la lactosa</td>
            <td><?php echo $E738 ?></td>
            <td><?php echo $E738_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E739 > 0) { ?>
        <tr>
            <td>Intolerancia a la lactosa, no especificada</td>
            <td><?php echo $E739 ?></td>
            <td><?php echo $E739_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E740 > 0) { ?>
        <tr>
            <td>Enfermedad del almacenamiento de glucogeno</td>
            <td><?php echo $E740 ?></td>
            <td><?php echo $E740_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E741 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de la fructosa</td>
            <td><?php echo $E741 ?></td>
            <td><?php echo $E741_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E742 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de la galactosa</td>
            <td><?php echo $E742 ?></td>
            <td><?php echo $E742_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E743 > 0) { ?>
        <tr>
            <td>Otros trastornos de la absorcion intestinal de carbohidratos</td>
            <td><?php echo $E743 ?></td>
            <td><?php echo $E743_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E744 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del piruvato y de la gluconeogenesis</td>
            <td><?php echo $E744 ?></td>
            <td><?php echo $E744_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E748 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados del metabolismo de los carbohidratos</td>
            <td><?php echo $E748 ?></td>
            <td><?php echo $E748_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E749 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de los carbohidratos, no especificado</td>
            <td><?php echo $E749 ?></td>
            <td><?php echo $E749_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E750 > 0) { ?>
        <tr>
            <td>Gangliosidosis GM2</td>
            <td><?php echo $E750 ?></td>
            <td><?php echo $E750_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E751 > 0) { ?>
        <tr>
            <td>Otras gangliosidosis</td>
            <td><?php echo $E751 ?></td>
            <td><?php echo $E751_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E752 > 0) { ?>
        <tr>
            <td>Otras esfingolipidosis</td>
            <td><?php echo $E752 ?></td>
            <td><?php echo $E752_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E753 > 0) { ?>
        <tr>
            <td>Esfingolipidosis, no especificada</td>
            <td><?php echo $E753 ?></td>
            <td><?php echo $E753_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E754 > 0) { ?>
        <tr>
            <td>Lipofuscinosis ceroide neuronal</td>
            <td><?php echo $E754 ?></td>
            <td><?php echo $E754_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E755 > 0) { ?>
        <tr>
            <td>Otros trastornos del almacenamiento de lipidos</td>
            <td><?php echo $E755 ?></td>
            <td><?php echo $E755_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E756 > 0) { ?>
        <tr>
            <td>Trastorno del almacenamiento de lipidos, no especificado</td>
            <td><?php echo $E756 ?></td>
            <td><?php echo $E756_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E760 > 0) { ?>
        <tr>
            <td>Mucopolisacaridosis tipo I</td>
            <td><?php echo $E760 ?></td>
            <td><?php echo $E760_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E761 > 0) { ?>
        <tr>
            <td>Mucopolisacaridosis tipo II</td>
            <td><?php echo $E761 ?></td>
            <td><?php echo $E761_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E762 > 0) { ?>
        <tr>
            <td>Otras mucopolisacaridosis</td>
            <td><?php echo $E762 ?></td>
            <td><?php echo $E762_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E763 > 0) { ?>
        <tr>
            <td>Mucopolisacaridosis no especificada</td>
            <td><?php echo $E763 ?></td>
            <td><?php echo $E763_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E768 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de los glucosaminoglicanos</td>
            <td><?php echo $E768 ?></td>
            <td><?php echo $E768_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E769 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de los glucosaminoglicanos, no especificado</td>
            <td><?php echo $E769 ?></td>
            <td><?php echo $E769_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E770 > 0) { ?>
        <tr>
            <td>Defectos en la modificacion postraslacional de enzimas lisosomales</td>
            <td><?php echo $E770 ?></td>
            <td><?php echo $E770_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E771 > 0) { ?>
        <tr>
            <td>Defectos de la degradacion de glucoproteinas</td>
            <td><?php echo $E771 ?></td>
            <td><?php echo $E771_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E778 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de las glucoproteinas</td>
            <td><?php echo $E778 ?></td>
            <td><?php echo $E778_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E779 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de las glucoproteinas, no especificado</td>
            <td><?php echo $E779 ?></td>
            <td><?php echo $E779_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E780 > 0) { ?>
        <tr>
            <td>Hipercolesterolemia pura</td>
            <td><?php echo $E780 ?></td>
            <td><?php echo $E780_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E781 > 0) { ?>
        <tr>
            <td>Hipergliceridemia pura</td>
            <td><?php echo $E781 ?></td>
            <td><?php echo $E781_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E782 > 0) { ?>
        <tr>
            <td>Hiperlipidemia mixta</td>
            <td><?php echo $E782 ?></td>
            <td><?php echo $E782_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E783 > 0) { ?>
        <tr>
            <td>Hiperquilomicronemia</td>
            <td><?php echo $E783 ?></td>
            <td><?php echo $E783_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E784 > 0) { ?>
        <tr>
            <td>Otra hiperlipidemia</td>
            <td><?php echo $E784 ?></td>
            <td><?php echo $E784_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E785 > 0) { ?>
        <tr>
            <td>Hiperlipidemia no especificada</td>
            <td><?php echo $E785 ?></td>
            <td><?php echo $E785_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E786 > 0) { ?>
        <tr>
            <td>Deficiencia de lipoproteinas</td>
            <td><?php echo $E786 ?></td>
            <td><?php echo $E786_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E788 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de las lipoproteinas</td>
            <td><?php echo $E788 ?></td>
            <td><?php echo $E788_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E789 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de las lipoproteinas, no especificado</td>
            <td><?php echo $E789 ?></td>
            <td><?php echo $E789_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E790 > 0) { ?>
        <tr>
            <td>Hiperuricemia sin signos de artritis inflamatoria y enfermedad tofacea</td>
            <td><?php echo $E790 ?></td>
            <td><?php echo $E790_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E791 > 0) { ?>
        <tr>
            <td>Sindrome de Lesch-Nyhan</td>
            <td><?php echo $E791 ?></td>
            <td><?php echo $E791_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E798 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de las purinas y de las pirimidinas</td>
            <td><?php echo $E798 ?></td>
            <td><?php echo $E798_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E799 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de las purinas y de las pirimidinas, no especificado</td>
            <td><?php echo $E799 ?></td>
            <td><?php echo $E799_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E800 > 0) { ?>
        <tr>
            <td>Porfiria eritropoyetica hereditaria</td>
            <td><?php echo $E800 ?></td>
            <td><?php echo $E800_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E801 > 0) { ?>
        <tr>
            <td>Porfiria cutanea tardia</td>
            <td><?php echo $E801 ?></td>
            <td><?php echo $E801_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E802 > 0) { ?>
        <tr>
            <td>Otras porfirias</td>
            <td><?php echo $E802 ?></td>
            <td><?php echo $E802_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E803 > 0) { ?>
        <tr>
            <td>Defectos de catalasa y peroxidasa</td>
            <td><?php echo $E803 ?></td>
            <td><?php echo $E803_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E804 > 0) { ?>
        <tr>
            <td>Sindrome de Gilbert</td>
            <td><?php echo $E804 ?></td>
            <td><?php echo $E804_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E805 > 0) { ?>
        <tr>
            <td>Sindrome de Crigler-Najjar</td>
            <td><?php echo $E805 ?></td>
            <td><?php echo $E805_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E806 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de la bilirrubina</td>
            <td><?php echo $E806 ?></td>
            <td><?php echo $E806_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E807 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de la bilirrubina, no especificado</td>
            <td><?php echo $E807 ?></td>
            <td><?php echo $E807_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E830 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del cobre</td>
            <td><?php echo $E830 ?></td>
            <td><?php echo $E830_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E831 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del hierro</td>
            <td><?php echo $E831 ?></td>
            <td><?php echo $E831_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E832 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del zinc</td>
            <td><?php echo $E832 ?></td>
            <td><?php echo $E832_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E833 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del fosforo y fosfatasa</td>
            <td><?php echo $E833 ?></td>
            <td><?php echo $E833_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E834 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del magnesio</td>
            <td><?php echo $E834 ?></td>
            <td><?php echo $E834_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E835 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo del calcio</td>
            <td><?php echo $E835 ?></td>
            <td><?php echo $E835_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E838 > 0) { ?>
        <tr>
            <td>Otros trastornos del metabolismo de los minerales</td>
            <td><?php echo $E838 ?></td>
            <td><?php echo $E838_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E839 > 0) { ?>
        <tr>
            <td>Trastorno del metabolismo de los minerales, no especificado</td>
            <td><?php echo $E839 ?></td>
            <td><?php echo $E839_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E840 > 0) { ?>
        <tr>
            <td>Fibrosis quistica con manifestaciones pulmonares</td>
            <td><?php echo $E840 ?></td>
            <td><?php echo $E840_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E841 > 0) { ?>
        <tr>
            <td>Fibrosis quistica con manifestaciones intestinales</td>
            <td><?php echo $E841 ?></td>
            <td><?php echo $E841_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E848 > 0) { ?>
        <tr>
            <td>Fibrosis quistica con otras manifestaciones</td>
            <td><?php echo $E848 ?></td>
            <td><?php echo $E848_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E849 > 0) { ?>
        <tr>
            <td>Fibrosis quistica, sin otra especificacion</td>
            <td><?php echo $E849 ?></td>
            <td><?php echo $E849_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E850 > 0) { ?>
        <tr>
            <td>Amiloidosis heredofamiliar no neuropatica</td>
            <td><?php echo $E850 ?></td>
            <td><?php echo $E850_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E851 > 0) { ?>
        <tr>
            <td>Amiloidosis heredofamiliar neuropatica</td>
            <td><?php echo $E851 ?></td>
            <td><?php echo $E851_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E852 > 0) { ?>
        <tr>
            <td>Amiloidosis heredofamiliar no especificada</td>
            <td><?php echo $E852 ?></td>
            <td><?php echo $E852_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E853 > 0) { ?>
        <tr>
            <td>Amiloidosis sistemica secundaria</td>
            <td><?php echo $E853 ?></td>
            <td><?php echo $E853_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E854 > 0) { ?>
        <tr>
            <td>Amiloidosis limitada a un organo</td>
            <td><?php echo $E854 ?></td>
            <td><?php echo $E854_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E858 > 0) { ?>
        <tr>
            <td>Otras amiloidosis</td>
            <td><?php echo $E858 ?></td>
            <td><?php echo $E858_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E859 > 0) { ?>
        <tr>
            <td>Amiloidosis, no especificada</td>
            <td><?php echo $E859 ?></td>
            <td><?php echo $E859_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E86X > 0) { ?>
        <tr>
            <td>Deplecion del volumen</td>
            <td><?php echo $E86X ?></td>
            <td><?php echo $E86X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E870 > 0) { ?>
        <tr>
            <td>Hiperosmolaridad e hipernatremia</td>
            <td><?php echo $E870 ?></td>
            <td><?php echo $E870_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E871 > 0) { ?>
        <tr>
            <td>Hiposmolaridad e hiponatremia</td>
            <td><?php echo $E871 ?></td>
            <td><?php echo $E871_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E872 > 0) { ?>
        <tr>
            <td>Acidosis</td>
            <td><?php echo $E872 ?></td>
            <td><?php echo $E872_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E873 > 0) { ?>
        <tr>
            <td>Alcalosis</td>
            <td><?php echo $E873 ?></td>
            <td><?php echo $E873_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E874 > 0) { ?>
        <tr>
            <td>Trastornos mixtos del balance acido-basico</td>
            <td><?php echo $E874 ?></td>
            <td><?php echo $E874_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E875 > 0) { ?>
        <tr>
            <td>Hiperpotasemia</td>
            <td><?php echo $E875 ?></td>
            <td><?php echo $E875_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E876 > 0) { ?>
        <tr>
            <td>Hipopotasmia</td>
            <td><?php echo $E876 ?></td>
            <td><?php echo $E876_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E877 > 0) { ?>
        <tr>
            <td>Sobrecarga de liquidos</td>
            <td><?php echo $E877 ?></td>
            <td><?php echo $E877_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E878 > 0) { ?>
        <tr>
            <td>Otros trastornos del equilibrio de los electrolitos y de los liquidos, no clasificados en otra parte</td>
            <td><?php echo $E878 ?></td>
            <td><?php echo $E878_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E880 > 0) { ?>
        <tr>
            <td>Trastornos del metabolismo de las proteinas plasmaticas, no clasificados en otra parte</td>
            <td><?php echo $E880 ?></td>
            <td><?php echo $E880_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E881 > 0) { ?>
        <tr>
            <td>Lipodistrofia, no clasificada en otra parte</td>
            <td><?php echo $E881 ?></td>
            <td><?php echo $E881_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E882 > 0) { ?>
        <tr>
            <td>Lipomatosis, no clasificada en otra parte</td>
            <td><?php echo $E882 ?></td>
            <td><?php echo $E882_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E883 > 0) { ?>
        <tr>
            <td>Síndrome de lisis tumoral</td>
            <td><?php echo $E883 ?></td>
            <td><?php echo $E883_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E888 > 0) { ?>
        <tr>
            <td>Otros trastornos especificados del metabolismo</td>
            <td><?php echo $E888 ?></td>
            <td><?php echo $E888_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E889 > 0) { ?>
        <tr>
            <td>Trastorno metabolico, no especificado</td>
            <td><?php echo $E889 ?></td>
            <td><?php echo $E889_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E890 > 0) { ?>
        <tr>
            <td>Hipotiroidismo consecutivo a procedimientos</td>
            <td><?php echo $E890 ?></td>
            <td><?php echo $E890_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E891 > 0) { ?>
        <tr>
            <td>Hipoinsulinemia consecutiva a procedimientos</td>
            <td><?php echo $E891 ?></td>
            <td><?php echo $E891_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E892 > 0) { ?>
        <tr>
            <td>Hipoparatiroidismo consecutivo a procedimientos</td>
            <td><?php echo $E892 ?></td>
            <td><?php echo $E892_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E893 > 0) { ?>
        <tr>
            <td>Hipopituitarismo consecutivo a procedimientos</td>
            <td><?php echo $E893 ?></td>
            <td><?php echo $E893_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E894 > 0) { ?>
        <tr>
            <td>Insuficiencia ovarica consecutiva a procedimientos</td>
            <td><?php echo $E894 ?></td>
            <td><?php echo $E894_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E895 > 0) { ?>
        <tr>
            <td>Hipofuncion testicular consecutiva a procedimientos</td>
            <td><?php echo $E895 ?></td>
            <td><?php echo $E895_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($E896 > 0) { ?>
        <tr>
            <td>Hipofuncion adrenocortical [medula suprarrenal] consecutiva a procedimientos</td>
            <td><?php echo $E896 ?></td>
            <td><?php echo $E896_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E898 > 0) { ?>
        <tr>
            <td>Otros trastornos metabolicos y endocrinos consecutivos a procedimientos</td>
            <td><?php echo $E898 ?></td>
            <td><?php echo $E898_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E899 > 0) { ?>
        <tr>
            <td>Trastorno endocrino y metabolico consecutivo a procedimientos, no especificado</td>
            <td><?php echo $E899 ?></td>
            <td><?php echo $E899_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($E90X > 0) { ?>
         <tr>
            <td>Trastornos nutricionales y metabolicos en enfermedades clasificadas en otra parte</td>
            <td><?php echo $E90X ?></td>
            <td><?php echo $E90X_porcentaje_t ?> %</td>
        </tr>  
        <?php } if ($E00 > 0) { ?>
         <tr>
            <td>Sindrome Congenito De Deficiencia De Yodo</td>
            <td><?php echo $E00 ?></td>
            <td><?php echo $E00_porcentaje_t ?> %</td>
        </tr>  
         <?php } if ($E01 > 0) { ?>
         <tr>
            <td>Trastornos Tiroideos Vinculados A Deficiencia De Yodo Y Afecciones Relacionadas </td>
            <td><?php echo $E01 ?></td>
            <td><?php echo $E01_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E02 > 0) { ?>
         <tr>
            <td>Hipotiroidismo Subclinico Por Deficiencia De Yodo</td>
            <td><?php echo $E02 ?></td>
            <td><?php echo $E02_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E03 > 0) { ?>
         <tr>
            <td>Otros Hipotiroidismos</td>
            <td><?php echo $E03 ?></td>
            <td><?php echo $E03_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E04 > 0) { ?>
         <tr>
            <td>Otros Bocios No Toxicos</td>
            <td><?php echo $E04 ?></td>
            <td><?php echo $E04_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E05 > 0) { ?>
         <tr>
            <td>Tirotoxicosis [ Hipertiroidismo ]</td>
            <td><?php echo $E05 ?></td>
            <td><?php echo $E05_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E06 > 0) { ?>
         <tr>
            <td>Tiroiditis</td>
            <td><?php echo $E06 ?></td>
            <td><?php echo $E06_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E07 > 0) { ?>
         <tr>
            <td>Otros Trastornos Tiroideos</td>
            <td><?php echo $E07 ?></td>
            <td><?php echo $E07_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E10 > 0) { ?>
         <tr>
            <td>Diabetes Mellitus Insulinodependiente</td>
            <td><?php echo $E10 ?></td>
            <td><?php echo $E10_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E11 > 0) { ?>
         <tr>
            <td>Diabetes Mellitus No Insulinodependiente</td>
            <td><?php echo $E11 ?></td>
            <td><?php echo $E11_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E12 > 0) { ?>
         <tr>
            <td>Diabetes Mellitus Asociada Con Desnutricion</td>
            <td><?php echo $E12 ?></td>
            <td><?php echo $E12_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E13 > 0) { ?>
         <tr>
            <td>Otras Diabetes Mellitus Especificadas</td>
            <td><?php echo $E13 ?></td>
            <td><?php echo $E13_porcentaje_t ?> %</td>
        </tr>  
         <?php } if ($E14 > 0) { ?>
         <tr>
            <td>Diabetes Mellitus No Especificada</td>
            <td><?php echo $E14 ?></td>
            <td><?php echo $E14_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E15 > 0) { ?>
         <tr>
            <td>Coma Hipoglicemico No Diabetico</td>
            <td><?php echo $E15 ?></td>
            <td><?php echo $E15_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E16 > 0) { ?>
         <tr>
            <td>Otros Trastornos De La Secrecion Interna Del Pancreas</td>
            <td><?php echo $E16 ?></td>
            <td><?php echo $E16_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E20 > 0) { ?>
         <tr>
            <td>Hipoparatiroidismo</td>
            <td><?php echo $E20 ?></td>
            <td><?php echo $E20_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E21 > 0) { ?>
         <tr>
            <td>Hiperparatiroidismo Y Otros Trastornos De La Glandula Paratiroides</td>
            <td><?php echo $E21 ?></td>
            <td><?php echo $E21_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E22 > 0) { ?>
         <tr>
            <td>Hiperfuncion De La Glandula Hipofisis</td>
            <td><?php echo $E22 ?></td>
            <td><?php echo $E22_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E23 > 0) { ?>
         <tr>
            <td>Hipofuncion Y Otros Trastornos De La Glandula Hipofisis</td>
            <td><?php echo $E23 ?></td>
            <td><?php echo $E23_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E24 > 0) { ?>
         <tr>
            <td>Sindrome De Cushing</td>
            <td><?php echo $E24 ?></td>
            <td><?php echo $E24_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E25 > 0) { ?>
         <tr>
            <td>Trastornos Adrenogenitales</td>
            <td><?php echo $E25 ?></td>
            <td><?php echo $E25_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E26 > 0) { ?>
         <tr>
            <td>Hiperaldosteronismo</td>
            <td><?php echo $E26 ?></td>
            <td><?php echo $E26_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E27 > 0) { ?>
         <tr>
            <td>Otros Trastornos De La Glandula Suprarrenal</td>
            <td><?php echo $E27 ?></td>
            <td><?php echo $E27_porcentaje_t ?> %</td>
        </tr>  
         <?php } if ($E28 > 0) { ?>
         <tr>
            <td>Disfuncion Ovarica</td>
            <td><?php echo $E28 ?></td>
            <td><?php echo $E28_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E29 > 0) { ?>
         <tr>
            <td>Disfuncion Testicular</td>
            <td><?php echo $E29 ?></td>
            <td><?php echo $E29_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E30 > 0) { ?>
         <tr>
            <td>Trastornos De La Pubertad No Clasificados En Otra Parte</td>
            <td><?php echo $E30 ?></td>
            <td><?php echo $E30_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E31 > 0) { ?>
         <tr>
            <td>Disfuncion Poliglandular</td>
            <td><?php echo $E31 ?></td>
            <td><?php echo $E31_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E32 > 0) { ?>
         <tr>
            <td>Enfermedades Del Timo</td>
            <td><?php echo $E32 ?></td>
            <td><?php echo $E32_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E34 > 0) { ?>
         <tr>
            <td>Otros Trastornos Endocrinos</td>
            <td><?php echo $E34 ?></td>
            <td><?php echo $E34_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E35 > 0) { ?>
         <tr>
            <td></td>
            <td><?php echo $E35 ?></td>
            <td><?php echo $E35_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E35 > 0) { ?>
         <tr>
            <td>Trastornos Endocrinos En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $E35 ?></td>
            <td><?php echo $E35_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E40 > 0) { ?>
         <tr>
            <td>Kwashiorkor</td>
            <td><?php echo $E40 ?></td>
            <td><?php echo $E40_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E41 > 0) { ?>
         <tr>
            <td>Marasmo Nutricional</td>
            <td><?php echo $E41 ?></td>
            <td><?php echo $E41_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E42 > 0) { ?>
         <tr>
            <td>Kwashiorkor Marasmatico</td>
            <td><?php echo $E42 ?></td>
            <td><?php echo $E42_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E43 > 0) { ?>
         <tr>
            <td>Desnutricion Proteicocalorica Severa No Especificada</td>
            <td><?php echo $E43 ?></td>
            <td><?php echo $E43_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E44 > 0) { ?>
         <tr>
            <td>Desnutricion Proteicocalorica De Grado Moderado Y Leve</td>
            <td><?php echo $E44 ?></td>
            <td><?php echo $E44_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E45 > 0) { ?>
         <tr>
            <td>Retardo Del Desarrollo Debido A Desnutricion Proteicocalorica</td>
            <td><?php echo $E45 ?></td>
            <td><?php echo $E45_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E46 > 0) { ?>
         <tr>
            <td>Desnutricion Proteicocalorica No Especificada</td>
            <td><?php echo $E46 ?></td>
            <td><?php echo $E46_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E50 > 0) { ?>
         <tr>
            <td>Deficiencia De Vitamina A</td>
            <td><?php echo $E50 ?></td>
            <td><?php echo $E50_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E51 > 0) { ?>
         <tr>
            <td>Deficiencia De Tiamina</td>
            <td><?php echo $E51 ?></td>
            <td><?php echo $E51_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E52 > 0) { ?>
         <tr>
            <td>Deficiencia De Niacina</td>
            <td><?php echo $E52 ?></td>
            <td><?php echo $E52_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E53 > 0) { ?>
         <tr>
            <td>Deficiencia De Otras Vitaminas Del Grupo B</td>
            <td><?php echo $E53 ?></td>
            <td><?php echo $E53_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E54 > 0) { ?>
         <tr>
            <td>Deficiencia De Acido Ascorbico</td>
            <td><?php echo $E54 ?></td>
            <td><?php echo $E54_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E55 > 0) { ?>
         <tr>
            <td>Deficiencia De Vitamina D</td>
            <td><?php echo $E55 ?></td>
            <td><?php echo $E55_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E56 > 0) { ?>
         <tr>
            <td>Otras Deficiencias De Vitaminas</td>
            <td><?php echo $E56 ?></td>
            <td><?php echo $E56_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E58 > 0) { ?>
         <tr>
            <td>Deficiencia Dietetica De Calcio</td>
            <td><?php echo $E58 ?></td>
            <td><?php echo $E58_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E59 > 0) { ?>
         <tr>
            <td>Deficiencia Dietetica De Selenio</td>
            <td><?php echo $E59 ?></td>
            <td><?php echo $E59_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E60 > 0) { ?>
         <tr>
            <td>Deficiencia Dietetica De Zinc</td>
            <td><?php echo $E60 ?></td>
            <td><?php echo $E60_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E61 > 0) { ?>
         <tr>
            <td>Deficiencia De Otros Elementos Nutricionales</td>
            <td><?php echo $E61 ?></td>
            <td><?php echo $E61_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E63 > 0) { ?>
         <tr>
            <td>Otras Deficiencias Nutricionales</td>
            <td><?php echo $E63 ?></td>
            <td><?php echo $E63_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E64 > 0) { ?>
         <tr>
            <td>Secuelas De La Desnutricion Y De Otras Deficiencias Nutricionales</td>
            <td><?php echo $E64 ?></td>
            <td><?php echo $E64_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E65 > 0) { ?>
         <tr>
            <td>Adiposidad Localizada</td>
            <td><?php echo $E65 ?></td>
            <td><?php echo $E65_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E66 > 0) { ?>
         <tr>
            <td>Obesidad</td>
            <td><?php echo $E66 ?></td>
            <td><?php echo $E66_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E67 > 0) { ?>
         <tr>
            <td>Otros Tipos De Hiperalimentacion</td>
            <td><?php echo $E67 ?></td>
            <td><?php echo $E67_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E68 > 0) { ?>
         <tr>
            <td>Secuelas De Hiperalimentacion</td>
            <td><?php echo $E68 ?></td>
            <td><?php echo $E68_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E70 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Los Aminoacidos Aromaticos</td>
            <td><?php echo $E70 ?></td>
            <td><?php echo $E70_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E71 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Los Aminoacidos De Cadena Ramificada Y De Los Acidos Grasos</td>
            <td><?php echo $E71 ?></td>
            <td><?php echo $E71_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E72 > 0) { ?>
         <tr>
            <td>Otros Trastornos Del Metabolismo De Los Aminoacidos</td>
            <td><?php echo $E72 ?></td>
            <td><?php echo $E72_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E73 > 0) { ?>
         <tr>
            <td>Intolerancia A La Lactosa</td>
            <td><?php echo $E73 ?></td>
            <td><?php echo $E73_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E74 > 0) { ?>
         <tr>
            <td>Otros Trastornos Del Metabolismo De Los Carbohidratos</td>
            <td><?php echo $E74 ?></td>
            <td><?php echo $E74_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E75 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Los Esfingolipidos Y Otros Trastornos Por Almacenamiento De Lipidos</td>
            <td><?php echo $E75 ?></td>
            <td><?php echo $E75_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E76 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Los Glucosaminoglicanos</td>
            <td><?php echo $E76 ?></td>
            <td><?php echo $E76_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E77 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Las Glucoproteinas</td>
            <td><?php echo $E77 ?></td>
            <td><?php echo $E77_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E78 > 0) { ?>
         <tr>
            <td>Trastornosdel Metabolismo De Las Lipoproteinas Y Otras Lipidemias</td>
            <td><?php echo $E78 ?></td>
            <td><?php echo $E78_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E79 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Las Purinas Y De Las Pirimidinas</td>
            <td><?php echo $E79 ?></td>
            <td><?php echo $E79_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E80 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Las Porfirinas Y De La Bilirrubina</td>
            <td><?php echo $E80 ?></td>
            <td><?php echo $E80_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E83 > 0) { ?>
         <tr>
            <td>Trastornos Del Metabolismo De Los Minerales</td>
            <td><?php echo $E83 ?></td>
            <td><?php echo $E83_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E84 > 0) { ?>
         <tr>
            <td>Fibrosis Quistica</td>
            <td><?php echo $E84 ?></td>
            <td><?php echo $E84_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E85 > 0) { ?>
         <tr>
            <td>Amiloidosis</td>
            <td><?php echo $E85 ?></td>
            <td><?php echo $E85_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E86 > 0) { ?>
         <tr>
            <td>Deplecion Del Volumen</td>
            <td><?php echo $E86 ?></td>
            <td><?php echo $E86_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E87 > 0) { ?>
         <tr>
            <td>Otros Trastornos De Los Liquidos, De Los Electrolitos Y Del Equilibrio Acido-Basico</td>
            <td><?php echo $E87 ?></td>
            <td><?php echo $E87_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($E88 > 0) { ?>
         <tr>
            <td>Otros Trastornos Metabolicos</td>
            <td><?php echo $E88 ?></td>
            <td><?php echo $E88_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E89 > 0) { ?>
         <tr>
            <td>Trastornos Endocrinos y Metabolicos Consecutivos A Procedimientos No Clasificados En Otra Parte</td>
            <td><?php echo $E89 ?></td>
            <td><?php echo $E89_porcentaje_t ?> %</td>
        </tr> 
         <?php } if ($E90 > 0) { ?>
         <tr>
            <td>Trastornos Nutricionales Y Metabolicos En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $E90 ?></td>
            <td><?php echo $E90_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I00X > 0) { ?>
         <tr>
            <td>Fiebre reumatica sin mencion de complicacion cardiaca</td>
            <td><?php echo $I00X ?></td>
            <td><?php echo $I00X_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I010 > 0) { ?>
         <tr>
            <td>Pericarditis reumatica aguda</td>
            <td><?php echo $I010 ?></td>
            <td><?php echo $I010_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I011 > 0) { ?>
         <tr>
            <td>Endocarditis reumatica aguda</td>
            <td><?php echo $I011 ?></td>
            <td><?php echo $I011_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I012 > 0) { ?>
         <tr>
            <td>Miocarditis reumatica aguda</td>
            <td><?php echo $I012 ?></td>
            <td><?php echo $I012_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I018 > 0) { ?>
         <tr>
            <td>Otras enfermedades reumaticas agudas del corazon</td>
            <td><?php echo $I018 ?></td>
            <td><?php echo $I018_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I019 > 0) { ?>
         <tr>
            <td>Enfermedad reumatica aguda del corazon, no especificada</td>
            <td><?php echo $I019 ?></td>
            <td><?php echo $I019_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I020 > 0) { ?>
         <tr>
            <td>Corea reumatica con complicacion cardiaca</td>
            <td><?php echo $I020 ?></td>
            <td><?php echo $I020_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I029 > 0) { ?>
         <tr>
            <td>Corea reumatica sin mencion de complicacion cardiaca</td>
            <td><?php echo $I029 ?></td>
            <td><?php echo $I029_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I050 > 0) { ?>
         <tr>
            <td>Estenosis mitral</td>
            <td><?php echo $I050 ?></td>
            <td><?php echo $I050_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I051 > 0) { ?>
         <tr>
            <td>Insuficiencia mitral reumatica</td>
            <td><?php echo $I051 ?></td>
            <td><?php echo $I051_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I052 > 0) { ?>
         <tr>
            <td>Estenosis mitral con insuficiencia</td>
            <td><?php echo $I052 ?></td>
            <td><?php echo $I052_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I058 > 0) { ?>
         <tr>
            <td>Otras enfermedades de la valvula mitral</td>
            <td><?php echo $I058 ?></td>
            <td><?php echo $I058_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I059 > 0) { ?>
         <tr>
            <td>Enfermedad valvular mitral, no especificada</td>
            <td><?php echo $I059 ?></td>
            <td><?php echo $I059_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I060 > 0) { ?>
         <tr>
            <td>Estenosis aortica reumatica</td>
            <td><?php echo $I060 ?></td>
            <td><?php echo $I060_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I061 > 0) { ?>
         <tr>
            <td>Insuficiencia aortica reumatica</td>
            <td><?php echo $I061 ?></td>
            <td><?php echo $I061_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I062 > 0) { ?>
         <tr>
            <td>Estenosis aortica reumatica con insuficiencia</td>
            <td><?php echo $I062 ?></td>
            <td><?php echo $I062_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I068 > 0) { ?>
         <tr>
            <td>Otras enfermedades reumaticas de la valvula aortica</td>
            <td><?php echo $I068 ?></td>
            <td><?php echo $I068_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I069 > 0) { ?>
         <tr>
            <td>Enfermedad valvular aortica reumatica, no especificada</td>
            <td><?php echo $I069 ?></td>
            <td><?php echo $I069_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I070 > 0) { ?>
         <tr>
            <td>Estenosis tricuspide</td>
            <td><?php echo $I070 ?></td>
            <td><?php echo $I070_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I071 > 0) { ?>
         <tr>
            <td>Insuficiencia tricuspide</td>
            <td><?php echo $I071 ?></td>
            <td><?php echo $I071_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I072 > 0) { ?>
         <tr>
            <td>Estenosis e insuficiencia tricuspide</td>
            <td><?php echo $I072 ?></td>
            <td><?php echo $I072_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I078 > 0) { ?>
         <tr>
            <td>Otras enfermedades de la valvula tricuspide</td>
            <td><?php echo $I078 ?></td>
            <td><?php echo $I078_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I079 > 0) { ?>
         <tr>
            <td>Enfermedad de la valvula tricuspide, no especificada</td>
            <td><?php echo $I079 ?></td>
            <td><?php echo $I079_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I080 > 0) { ?>
         <tr>
            <td>Trastornos de las valvulas mitral y aortica</td>
            <td><?php echo $I080 ?></td>
            <td><?php echo $I080_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I081 > 0) { ?>
         <tr>
            <td>Trastornos de las valvulas mitral y tricuspide</td>
            <td><?php echo $I081 ?></td>
            <td><?php echo $I081_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I082 > 0) { ?>
         <tr>
            <td>Trastornos de las valvulas aortica y tricuspide</td>
            <td><?php echo $I082 ?></td>
            <td><?php echo $I082_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I083 > 0) { ?>
         <tr>
            <td>Trastornos combinados de las valvulas mitral, tricuspide y aortica</td>
            <td><?php echo $I083 ?></td>
            <td><?php echo $I083_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I088 > 0) { ?>
         <tr>
            <td>Otras enfermedades de multiples valvulas</td>
            <td><?php echo $I088 ?></td>
            <td><?php echo $I088_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I089 > 0) { ?>
         <tr>
            <td>Enfermedad de multiples valvulas, no especificada</td>
            <td><?php echo $I089 ?></td>
            <td><?php echo $I089_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I090 > 0) { ?>
         <tr>
            <td>Miocarditis reumatica</td>
            <td><?php echo $I090 ?></td>
            <td><?php echo $I090_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I091 > 0) { ?>
         <tr>
            <td>Enfermedades reumaticas del endocardio, valvula no especificada</td>
            <td><?php echo $I091 ?></td>
            <td><?php echo $I091_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I092 > 0) { ?>
         <tr>
            <td>Pericarditis reumatica cronica</td>
            <td><?php echo $I092 ?></td>
            <td><?php echo $I092_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I098 > 0) { ?>
         <tr>
            <td>Otras enfermedades reumaticas especificadas del corazon</td>
            <td><?php echo $I098 ?></td>
            <td><?php echo $I098_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I099 > 0) { ?>
         <tr>
            <td>Enfermedad reumatica del corazon, no especificada</td>
            <td><?php echo $I099 ?></td>
            <td><?php echo $I099_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I10X > 0) { ?>
         <tr>
            <td>Hipertension esencial (primaria)</td>
            <td><?php echo $I10X ?></td>
            <td><?php echo $I10X_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I110 > 0) { ?>
         <tr>
            <td>Enfermedad cardiaca hipertensiva con insuficiencia cardiaca (congestiva)</td>
            <td><?php echo $I110 ?></td>
            <td><?php echo $I110_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I119 > 0) { ?>
         <tr>
            <td>Enfermedad cardiaca hipertensiva sin insuficiencia cardiaca (congestiva)</td>
            <td><?php echo $I119 ?></td>
            <td><?php echo $I119_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I120 > 0) { ?>
         <tr>
            <td>Enfermedad renal hipertensiva con insuficiencia renal</td>
            <td><?php echo $I120 ?></td>
            <td><?php echo $I120_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I129 > 0) { ?>
         <tr>
            <td>Enfermedad renal hipertensiva sin insuficiencia renal</td>
            <td><?php echo $I129 ?></td>
            <td><?php echo $I129_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I130 > 0) { ?>
         <tr>
            <td>Enfermedad cardiorrenal hipertensiva con insuficiencia cardiaca (congestiva)</td>
            <td><?php echo $I130 ?></td>
            <td><?php echo $I130_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I131 > 0) { ?>
         <tr>
            <td>Enfermedad cardiorrenal hipertensiva con insuficiencia renal</td>
            <td><?php echo $I131 ?></td>
            <td><?php echo $I131_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I132 > 0) { ?>
         <tr>
            <td>Enfermedad cardiorrenal hipertensiva con insuficiencia cardiaca (congestiva) e insuficiencia renal </td>
            <td><?php echo $I132 ?></td>
            <td><?php echo $I132_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I139 > 0) { ?>
         <tr>
            <td>Enfermedad cardiorrenal hipertensiva, no especificada</td>
            <td><?php echo $I139 ?></td>
            <td><?php echo $I139_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I150 > 0) { ?>
         <tr>
            <td>Hipertension renovascular</td>
            <td><?php echo $I150 ?></td>
            <td><?php echo $I150_porcentaje_t ?> %</td>
        </tr> 
        </tr> 
        <?php } if ($I151 > 0) { ?>
         <tr>
            <td>Hipertension secundaria a otros trastornos renales</td>
            <td><?php echo $I151 ?></td>
            <td><?php echo $I151_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I152 > 0) { ?>
         <tr>
            <td>Hipertension secundaria  a trastornos endocrinos</td>
            <td><?php echo $I152 ?></td>
            <td><?php echo $I152_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I158 > 0) { ?>
         <tr>
            <td>otros tipos de hipertension secundaria</td>
            <td><?php echo $I158 ?></td>
            <td><?php echo $I158_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I159 > 0) { ?>
         <tr>
            <td>Hipertension secundaria, no especificada</td>
            <td><?php echo $I159 ?></td>
            <td><?php echo $I159_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I200 > 0) { ?>
         <tr>
            <td>Angina inestable</td>
            <td><?php echo $I200 ?></td>
            <td><?php echo $I200_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I201 > 0) { ?>
         <tr>
            <td>Angina de pecho con espasmo documentado</td>
            <td><?php echo $I201 ?></td>
            <td><?php echo $I201_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I208 > 0) { ?>
         <tr>
            <td>Otras formas especificadas de angina de pecho</td>
            <td><?php echo $I208 ?></td>
            <td><?php echo $I208_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I209 > 0) { ?>
         <tr>
            <td>Angina de pecho, no especificada</td>
            <td><?php echo $I209 ?></td>
            <td><?php echo $I209_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I210 > 0) { ?>
         <tr>
            <td>Infarto transmural agudo del miocardio de la pared anterior</td>
            <td><?php echo $I210 ?></td>
            <td><?php echo $I210_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I211 > 0) { ?>
         <tr>
            <td>Infarto transmural agudo del miocardio de la pared inferior</td>
            <td><?php echo $I211 ?></td>
            <td><?php echo $I211_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I212 > 0) { ?>
         <tr>
            <td>Infarto agudo transmural del miocardio de otros sitios</td>
            <td><?php echo $I212 ?></td>
            <td><?php echo $I212_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I213 > 0) { ?>
         <tr>
            <td>Infarto transmural agudo del miocardio, de sitio no especificado</td>
            <td><?php echo $I213 ?></td>
            <td><?php echo $I213_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I214 > 0) { ?>
         <tr>
            <td>Infarto subendocardico agudo del miocardio</td>
            <td><?php echo $I214 ?></td>
            <td><?php echo $I214_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I219 > 0) { ?>
         <tr>
            <td>Infarto agudo del miocardio, sin otra especificacion</td>
            <td><?php echo $I219 ?></td>
            <td><?php echo $I219_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I220 > 0) { ?>
         <tr>
            <td>Infarto subsecuente del miocardio de la pared anterior</td>
            <td><?php echo $I220 ?></td>
            <td><?php echo $I220_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I221 > 0) { ?>
         <tr>
            <td>Infarto subsecuente del miocardio de la pared inferior</td>
            <td><?php echo $I221 ?></td>
            <td><?php echo $I221_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I228 > 0) { ?>
         <tr>
            <td>Infarto subsecuente del miocardio de otros sitios</td>
            <td><?php echo $I228 ?></td>
            <td><?php echo $I228_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I229 > 0) { ?>
         <tr>
            <td>Infarto subsecuente del miocardio, de parte no especificada</td>
            <td><?php echo $I229 ?></td>
            <td><?php echo $I229_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I230 > 0) { ?>
         <tr>
            <td>Hemopericardio como complicacion presente posterior al infarto agudo del miocardio</td>
            <td><?php echo $I230 ?></td>
            <td><?php echo $I230_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I231 > 0) { ?>
         <tr>
            <td>Defecto del tabique auricular como complicacion presente posterior al infarto del miocardio</td>
            <td><?php echo $I231 ?></td>
            <td><?php echo $I231_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I232 > 0) { ?>
         <tr>
            <td>Defecto del tabique ventricular como complicacion presente posterior al infarto del miocardio</td>
            <td><?php echo $I232 ?></td>
            <td><?php echo $I232_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I233 > 0) { ?>
         <tr>
            <td>Ruptura de la pared cardiaca sin hemopericardio como complicacion presente posterior al infarto agudo del miocardio</td>
            <td><?php echo $I233 ?></td>
            <td><?php echo $I233_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I234 > 0) { ?>
         <tr>
            <td>Ruptura de las cuerdas tendinosas como complicacion presente posterior al infarto agudo del miocardio</td>
            <td><?php echo $I234 ?></td>
            <td><?php echo $I234_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I235 > 0) { ?>
         <tr>
            <td>Ruptura de musculo papilar como complicacion presente posterior al infarto agudo del miocardio</td>
            <td><?php echo $I235 ?></td>
            <td><?php echo $I235_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I236 > 0) { ?>
         <tr>
            <td>Trombosis de la auricula, apendice  auricular y ventriculo como complicacion presente posterior al infarto agudo del miocardio</td>
            <td><?php echo $I236 ?></td>
            <td><?php echo $I236_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I238 > 0) { ?>
         <tr>
            <td>Otras complicaciones presentes posteriores al infarto agudo del miocardio</td>
            <td><?php echo $I238 ?></td>
            <td><?php echo $I238_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I240 > 0) { ?>
         <tr>
            <td>Trombosis coronaria que no resulta en infarto del miocardio</td>
            <td><?php echo $I240 ?></td>
            <td><?php echo $I240_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I241 > 0) { ?>
         <tr>
            <td>Sindrome de Dressler</td>
            <td><?php echo $I241 ?></td>
            <td><?php echo $I2_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I248 > 0) { ?>
         <tr>
            <td>Otras formas de enfermedad isquemica aguda del corazon</td>
            <td><?php echo $I248 ?></td>
            <td><?php echo $I248_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I249 > 0) { ?>
         <tr>
            <td>Enfermedad isquemica aguda del corazon, no especificada</td>
            <td><?php echo $I249 ?></td>
            <td><?php echo $I249_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I250 > 0) { ?>
         <tr>
            <td>Enfermedad cardiovascular aterosclerotica, asi descrita</td>
            <td><?php echo $I250 ?></td>
            <td><?php echo $I250_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I251 > 0) { ?>
         <tr>
            <td>Enfermedad aterosclerotica del corazon</td>
            <td><?php echo $I251 ?></td>
            <td><?php echo $I512_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I252 > 0) { ?>
         <tr>
            <td>Infarto antiguo del miocardio</td>
            <td><?php echo $I252 ?></td>
            <td><?php echo $I252_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I253 > 0) { ?>
         <tr>
            <td>Aneurisma cardiaco</td>
            <td><?php echo $I253 ?></td>
            <td><?php echo $I253_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I254 > 0) { ?>
         <tr>
            <td>Aneurisma de arteria coronaria</td>
            <td><?php echo $I254 ?></td>
            <td><?php echo $I254_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I255 > 0) { ?>
         <tr>
            <td>Cardiomiopatia isquemica</td>
            <td><?php echo $I255 ?></td>
            <td><?php echo $I255_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I256 > 0) { ?>
         <tr>
            <td>Isquemia silente del miocardio</td>
            <td><?php echo $I256 ?></td>
            <td><?php echo $I256_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I258 > 0) { ?>
         <tr>
            <td>Otras formas de enfermedad isquemica cronica del corazon</td>
            <td><?php echo $I258 ?></td>
            <td><?php echo $I258_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I259 > 0) { ?>
         <tr>
            <td>Enfermedad isquemica cronica del corazon, no especificada</td>
            <td><?php echo $I259 ?></td>
            <td><?php echo $I259_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I260 > 0) { ?>
         <tr>
            <td>Embolia pulmonar con mencion de corazon pulmonar agudo</td>
            <td><?php echo $I260 ?></td>
            <td><?php echo $I260_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I269 > 0) { ?>
         <tr>
            <td>Embolia pulmonar sin mencion de corazon pulmonar agudo</td>
            <td><?php echo $I269 ?></td>
            <td><?php echo $I269_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I270 > 0) { ?>
         <tr>
            <td>Hipertension pulmonar primaria</td>
            <td><?php echo $I270 ?></td>
            <td><?php echo $I270_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I271 > 0) { ?>
         <tr>
            <td>Enfermedad cifoscoliotica del corazon</td>
            <td><?php echo $I271 ?></td>
            <td><?php echo $I271_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I272 > 0) { ?>
         <tr>
            <td>Otras hipertensiones pulmonares secundarias</td>
            <td><?php echo $I272 ?></td>
            <td><?php echo $I272_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I278 > 0) { ?>
         <tr>
            <td>Otras enfermedades cardiopulmonares especificadas</td>
            <td><?php echo $I278 ?></td>
            <td><?php echo $I278_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I279 > 0) { ?>
         <tr>
            <td>Enfermedad pulmonar del corazon, no especificada</td>
            <td><?php echo $I279 ?></td>
            <td><?php echo $I279_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I280 > 0) { ?>
         <tr>
            <td>Fistula arteriovenosa de los vasos pulmonares</td>
            <td><?php echo $I280 ?></td>
            <td><?php echo $I280_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I281 > 0) { ?>
         <tr>
            <td>Aneurisma de la arteria pulmonar</td>
            <td><?php echo $I281 ?></td>
            <td><?php echo $I281_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I288 > 0) { ?>
         <tr>
            <td>Otras enfermedades especificadas de los vasos pulmonares</td>
            <td><?php echo $I288 ?></td>
            <td><?php echo $I288_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I289 > 0) { ?>
         <tr>
            <td>Enfermedad de los vasos pulmonares, no especificada</td>
            <td><?php echo $I289 ?></td>
            <td><?php echo $I289_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I300 > 0) { ?>
         <tr>
            <td>Pericarditis idiopatica aguda inespecifica</td>
            <td><?php echo $I300 ?></td>
            <td><?php echo $I300_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I301 > 0) { ?>
         <tr>
            <td>Pericarditis infecciosa</td>
            <td><?php echo $I301 ?></td>
            <td><?php echo $I301_porcentaje_t ?> %</td>
        </tr>
        
         <?php } if ($I308 > 0) { ?>
         <tr>
            <td>Otras formas de pericarditis aguda</td>
            <td><?php echo $I308 ?></td>
            <td><?php echo $I308_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I309 > 0) { ?>
         <tr>
            <td>Pericarditis aguda, no especificada</td>
            <td><?php echo $I309 ?></td>
            <td><?php echo $I309_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I310 > 0) { ?>
         <tr>
            <td>Pericarditis cronica adhesiva</td>
            <td><?php echo $I310 ?></td>
            <td><?php echo $I310_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I311 > 0) { ?>
         <tr>
            <td>Pericarditis constrictiva cronica</td>
            <td><?php echo $I311 ?></td>
            <td><?php echo $I311_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I312 > 0) { ?>
         <tr>
            <td>Hemopericardio, no clasificado en otra parte</td>
            <td><?php echo $I312 ?></td>
            <td><?php echo $I312_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I313 > 0) { ?>
         <tr>
            <td>Derrame pericardico (no inflamatorio)</td>
            <td><?php echo $I313 ?></td>
            <td><?php echo $I313_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I318 > 0) { ?>
         <tr>
            <td>Otras enfermedades especificadas del pericardio</td>
            <td><?php echo $I318 ?></td>
            <td><?php echo $I318_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I319 > 0) { ?>
         <tr>
            <td>Enfermedad del pericardio, no especificada</td>
            <td><?php echo $I319 ?></td>
            <td><?php echo $I319_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I320 > 0) { ?>
         <tr>
            <td>Pericarditis en enfermedades bacterianas clasificadas en otra parte</td>
            <td><?php echo $I320 ?></td>
            <td><?php echo $I320_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I321 > 0) { ?>
         <tr>
            <td>Pericarditis en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I321 ?></td>
            <td><?php echo $I321_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I328 > 0) { ?>
         <tr>
            <td>Pericarditis en otras enfermedades clasificadas en otras parte</td>
            <td><?php echo $I328 ?></td>
            <td><?php echo $I328_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I330 > 0) { ?>
         <tr>
            <td>Endocarditis infecciosa aguda y subaguda</td>
            <td><?php echo $I330 ?></td>
            <td><?php echo $I330_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I339 > 0) { ?>
         <tr>
            <td>Endocarditis aguda, no especificada</td>
            <td><?php echo $I339 ?></td>
            <td><?php echo $I339_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I340 > 0) { ?>
         <tr>
            <td>Insuficiencia (de la valvula) mitral</td>
            <td><?php echo $I340 ?></td>
            <td><?php echo $I340_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I341 > 0) { ?>
         <tr>
            <td>Prolapso (de la valvula) mitral</td>
            <td><?php echo $I341 ?></td>
            <td><?php echo $I341_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I342 > 0) { ?>
         <tr>
            <td>Estenosis (de la valvula) mitral, no reumatica</td>
            <td><?php echo $I342 ?></td>
            <td><?php echo $I342_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I348 > 0) { ?>
         <tr>
            <td>Otros trastornos no reumaticos de la valvula mitral</td>
            <td><?php echo $I348 ?></td>
            <td><?php echo $I348_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I349 > 0) { ?>
         <tr>
            <td>Trastorno mitral no reumatico, no especificado</td>
            <td><?php echo $I349 ?></td>
            <td><?php echo $I349_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I350 > 0) { ?>
         <tr>
            <td>Estenosis (de la valvula) aortica</td>
            <td><?php echo $I350 ?></td>
            <td><?php echo $I350_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I351 > 0) { ?>
         <tr>
            <td>Insuficiencia (de la valvula) aortica</td>
            <td><?php echo $I351 ?></td>
            <td><?php echo $I351_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I352 > 0) { ?>
         <tr>
            <td>Estenosis (de la valvula) aortica con insuficiencia</td>
            <td><?php echo $I352 ?></td>
            <td><?php echo $I352_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I358 > 0) { ?>
         <tr>
            <td>Otros trastornos de la valvula aortica</td>
            <td><?php echo $I358 ?></td>
            <td><?php echo $I358_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I359 > 0) { ?>
         <tr>
            <td>Trastorno de la valvula aortica, no especificado</td>
            <td><?php echo $I359 ?></td>
            <td><?php echo $I359_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I360 > 0) { ?>
         <tr>
            <td>Estenosis no reumatica (de la valvula) tricuspide</td>
            <td><?php echo $I360 ?></td>
            <td><?php echo $I360_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I361 > 0) { ?>
         <tr>
            <td>Insuficiencia no reumatica (de la valvula) tricuspide</td>
            <td><?php echo $I361 ?></td>
            <td><?php echo $I361_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I362 > 0) { ?>
         <tr>
            <td>Estenosis con insuficiencia no reumatica (de la valvula) tricuspide</td>
            <td><?php echo $I362 ?></td>
            <td><?php echo $I362_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I368 > 0) { ?>
         <tr>
            <td>Otros trastornos no reumaticos de la valvula tricuspide</td>
            <td><?php echo $I368 ?></td>
            <td><?php echo $I368_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I369 > 0) { ?>
         <tr>
            <td>Trastorno no reumatico de la valvula tricuspide, no especificado</td>
            <td><?php echo $I369 ?></td>
            <td><?php echo $I369_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I370 > 0) { ?>
         <tr>
            <td>Estenosis de la valvula pulmonar</td>
            <td><?php echo $I370 ?></td>
            <td><?php echo $I370_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I371 > 0) { ?>
         <tr>
            <td>Insuficiencia de la valvula pulmonar</td>
            <td><?php echo $I371 ?></td>
            <td><?php echo $I371_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I372 > 0) { ?>
         <tr>
            <td>Estenosis de la valvula pulmonar con insuficiencia</td>
            <td><?php echo $I372 ?></td>
            <td><?php echo $I372_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I378 > 0) { ?>
         <tr>
            <td>Otros trastornos de la valvula pulmonar</td>
            <td><?php echo $I378 ?></td>
            <td><?php echo $I378_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I379 > 0) { ?>
         <tr>
            <td>Trastorno de la valvula pulmonar, no especificado</td>
            <td><?php echo $I379 ?></td>
            <td><?php echo $I379_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I38X > 0) { ?>
         <tr>
            <td>Endocarditis, valvula no especificada</td>
            <td><?php echo $I38X ?></td>
            <td><?php echo $I38X_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I390 > 0) { ?>
         <tr>
            <td>Trastornos de la valvula mitral en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I390 ?></td>
            <td><?php echo $I390_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I391 > 0) { ?>
         <tr>
            <td>Trastornos de la valvula aortica en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I391 ?></td>
            <td><?php echo $I391_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I392 > 0) { ?>
         <tr>
            <td>Trastornos de la valvula tricuspide en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I392 ?></td>
            <td><?php echo $I392_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I393 > 0) { ?>
         <tr>
            <td>Trastornos de la valvula pulmonar en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I393 ?></td>
            <td><?php echo $I393_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I394 > 0) { ?>
         <tr>
            <td>Trastornos valvulares multiples en enfermedades clasificadas en otras parte</td>
            <td><?php echo $I394 ?></td>
            <td><?php echo $I394_porcentaje_t ?> %</td>
        </tr> 
        <?php } if ($I398 > 0) { ?>
         <tr>
            <td>Endocarditis, valvula no especificada, en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I398 ?></td>
            <td><?php echo $I398_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I400 > 0) { ?>
         <tr>
            <td>Miocarditis infecciosa</td>
            <td><?php echo $I400 ?></td>
            <td><?php echo $I400_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I401 > 0) { ?>
         <tr>
            <td>Miocarditis aislada</td>
            <td><?php echo $I401 ?></td>
            <td><?php echo $I401_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I408 > 0) { ?>
         <tr>
            <td>Otras miocarditis agudas</td>
            <td><?php echo $I408 ?></td>
            <td><?php echo $I408_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I409 > 0) { ?>
         <tr>
            <td>Miocarditis aguda, no especificada</td>
            <td><?php echo $I409 ?></td>
            <td><?php echo $I409_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I410 > 0) { ?>
         <tr>
            <td></td>
            <td>Miocarditis en enfermedades bacterianas clasificadas en otra parte<?php echo $I410 ?></td>
            <td><?php echo $I410_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I411 > 0) { ?>
         <tr>
            <td>Miocarditis en enfermedades virales clasificadas en otra parte</td>
            <td><?php echo $I411 ?></td>
            <td><?php echo $I411_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I412 > 0) { ?>
         <tr>
            <td>Miocarditis en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I412 ?></td>
            <td><?php echo $I412_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I418 > 0) { ?>
         <tr>
            <td>Miocarditis en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $I418 ?></td>
            <td><?php echo $I418_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I420 > 0) { ?>
         <tr>
            <td>Cardiomiopatia dilatada</td>
            <td><?php echo $I420 ?></td>
            <td><?php echo $I420_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I421 > 0) { ?>
         <tr>
            <td>Cardiomiopatia hipertrofica obstructiva</td>
            <td><?php echo $I421 ?></td>
            <td><?php echo $I421_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I422 > 0) { ?>
         <tr>
            <td>Otras cardiomiopatias hipertroficas</td>
            <td><?php echo $I422 ?></td>
            <td><?php echo $I422_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I423 > 0) { ?>
         <tr>
            <td>Enfermedad endomiocardica (eosinofilica)</td>
            <td><?php echo $I423 ?></td>
            <td><?php echo $I423_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I424 > 0) { ?>
         <tr>
            <td>Fibroelastosis endocardica</td>
            <td><?php echo $I424 ?></td>
            <td><?php echo $I424_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I425 > 0) { ?>
         <tr>
            <td>Otras cardiomiopatias restrictivas</td>
            <td><?php echo $I425 ?></td>
            <td><?php echo $I425_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I426 > 0) { ?>
         <tr>
            <td>Cardiomiopatia alcoholica</td>
            <td><?php echo $I426 ?></td>
            <td><?php echo $I426_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I427 > 0) { ?>
         <tr>
            <td>Cardiomiopatia debida a drogas y otros agentes externos</td>
            <td><?php echo $I427 ?></td>
            <td><?php echo $I427_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I428 > 0) { ?>
         <tr>
            <td>Otras cardiomiopatias</td>
            <td><?php echo $I428 ?></td>
            <td><?php echo $I428_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I429 > 0) { ?>
         <tr>
            <td>Cardiomiopatia, no especificada</td>
            <td><?php echo $I429 ?></td>
            <td><?php echo $I429_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I430 > 0) { ?>
         <tr>
            <td>Cardiomiopatia en enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I430 ?></td>
            <td><?php echo $I430_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I431 > 0) { ?>
         <tr>
            <td>Cardiomiopatia en enfermedades metabolicas</td>
            <td><?php echo $I431 ?></td>
            <td><?php echo $I431_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I432 > 0) { ?>
         <tr>
            <td>Cardiomiopatia en enfermedades nutricionales</td>
            <td><?php echo $I432 ?></td>
            <td><?php echo $I432_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I438 > 0) { ?>
         <tr>
            <td>Cardiomiopatia en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $I438 ?></td>
            <td><?php echo $I438_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I440 > 0) { ?>
         <tr>
            <td>Bloqueo auriculoventricular de primer grado</td>
            <td><?php echo $I440 ?></td>
            <td><?php echo $I440_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I441 > 0) { ?>
         <tr>
            <td>Bloqueo auriculoventricular de segundo grado</td>
            <td><?php echo $I441 ?></td>
            <td><?php echo $I441_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I442 > 0) { ?>
         <tr>
            <td>Bloqueo auriculoventricular completo</td>
            <td><?php echo $I442 ?></td>
            <td><?php echo $I442_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I443 > 0) { ?>
         <tr>
            <td>Otros tipos de bloqueo auriculoventricular y los no especificados</td>
            <td><?php echo $I443 ?></td>
            <td><?php echo $I443_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I444 > 0) { ?>
         <tr>
            <td>Bloqueo fascicular anterior izquierdo</td>
            <td><?php echo $I444 ?></td>
            <td><?php echo $I444_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I445 > 0) { ?>
         <tr>
            <td>Bloqueo fascicular posterior izquierdo</td>
            <td><?php echo $I445 ?></td>
            <td><?php echo $I445_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I446 > 0) { ?>
         <tr>
            <td>Otros tipos de bloqueo fascicular y los no especificados</td>
            <td><?php echo $I446 ?></td>
            <td><?php echo $I446_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I447 > 0) { ?>
         <tr>
            <td>Bloqueo de rama izquierda del haz, sin otra especificacion</td>
            <td><?php echo $I447 ?></td>
            <td><?php echo $I447_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I450 > 0) { ?>
         <tr>
            <td>Bloqueo fascicular derecho</td>
            <td><?php echo $I450 ?></td>
            <td><?php echo $I450_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I451 > 0) { ?>
         <tr>
            <td>Otros tipos de bloqueo de rama derecha del haz y los no especificados</td>
            <td><?php echo $I451 ?></td>
            <td><?php echo $I451_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I452 > 0) { ?>
         <tr>
            <td>Bloqueo bifascicular</td>
            <td><?php echo $I452 ?></td>
            <td><?php echo $I452_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I453 > 0) { ?>
         <tr>
            <td>Bloqueo trifascicular</td>
            <td><?php echo $I453 ?></td>
            <td><?php echo $I453_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I454 > 0) { ?>
         <tr>
            <td>Bloqueo intraventricular no especificado</td>
            <td><?php echo $I454 ?></td>
            <td><?php echo $I454_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I455 > 0) { ?>
         <tr>
            <td>Otros tipos especificados de bloqueo del corazon</td>
            <td><?php echo $I455 ?></td>
            <td><?php echo $I455_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I456 > 0) { ?>
         <tr>
            <td>Sindrome de preexcitacion</td>
            <td><?php echo $I456 ?></td>
            <td><?php echo $I456_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I458 > 0) { ?>
         <tr>
            <td>Otros trastornos especificados de la conduccion</td>
            <td><?php echo $I458 ?></td>
            <td><?php echo $I458_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I459 > 0) { ?>
         <tr>
            <td>Trastorno de la conduccion, no especificado</td>
            <td><?php echo $I459 ?></td>
            <td><?php echo $I459_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I460 > 0) { ?>
         <tr>
            <td>Paro cardiaco con resucitacion exitosa</td>
            <td><?php echo $I460 ?></td>
            <td><?php echo $I460_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I461 > 0) { ?>
         <tr>
            <td>Muerte cardiaca subita, asi descrita</td>
            <td><?php echo $I461 ?></td>
            <td><?php echo $I461_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I469 > 0) { ?>
         <tr>
            <td>Paro cardiaco, no especificado</td>
            <td><?php echo $I469 ?></td>
            <td><?php echo $I469_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I470 > 0) { ?>
         <tr>
            <td>Arritmia por reentrada ventricular</td>
            <td><?php echo $I470 ?></td>
            <td><?php echo $I470_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I471 > 0) { ?>
         <tr>
            <td>Taquicardia supraventricular</td>
            <td><?php echo $I471 ?></td>
            <td><?php echo $I471_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I472 > 0) { ?>
         <tr>
            <td>Taquicardia ventricular</td>
            <td><?php echo $I472 ?></td>
            <td><?php echo $I472_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I479 > 0) { ?>
         <tr>
            <td>Taquicardia paroxistica, no especificada</td>
            <td><?php echo $I479 ?></td>
            <td><?php echo $I479_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I480 > 0) { ?>
         <tr>
            <td>Fibrilación auricular paroxística</td>
            <td><?php echo $I480 ?></td>
            <td><?php echo $I480_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I481 > 0) { ?>
         <tr>
            <td>Fibrilación auricular persistente</td>
            <td><?php echo $I481 ?></td>
            <td><?php echo $I481_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I482 > 0) { ?>
         <tr>
            <td>Fibrilación auricular crónica</td>
            <td><?php echo $I482 ?></td>
            <td><?php echo $I482_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I483 > 0) { ?>
         <tr>
            <td>Aleteo auricular típico</td>
            <td><?php echo $I483 ?></td>
            <td><?php echo $I483_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I484 > 0) { ?>
         <tr>
            <td>Aleteo auricular atípico</td>
            <td><?php echo $I484 ?></td>
            <td><?php echo $I484_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I489 > 0) { ?>
         <tr>
            <td>Fibrilación y aleteo auricular, no especificado</td>
            <td><?php echo $I489 ?></td>
            <td><?php echo $I489_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I490 > 0) { ?>
         <tr>
            <td>Fibrilacion y aleteo ventricular</td>
            <td><?php echo $I490 ?></td>
            <td><?php echo $I490_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I491 > 0) { ?>
         <tr>
            <td>Despolarizacion auricular prematura</td>
            <td><?php echo $I491 ?></td>
            <td><?php echo $I491_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I492 > 0) { ?>
         <tr>
            <td>Despolarizacion prematura nodal</td>
            <td><?php echo $I492 ?></td>
            <td><?php echo $I492_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I493 > 0) { ?>
         <tr>
            <td>Despolarizacion ventricular prematura</td>
            <td><?php echo $I493 ?></td>
            <td><?php echo $I493_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I494 > 0) { ?>
         <tr>
            <td>Otros tipos de despolarizacion prematura y los no especificados</td>
            <td><?php echo $I494 ?></td>
            <td><?php echo $I494_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I495 > 0) { ?>
         <tr>
            <td>Sindrome del seno enfermo</td>
            <td><?php echo $I495 ?></td>
            <td><?php echo $I495_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I498 > 0) { ?>
         <tr>
            <td>Otras arritmias cardiacas especificadas</td>
            <td><?php echo $I498 ?></td>
            <td><?php echo $I498_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I499 > 0) { ?>
         <tr>
            <td>Arritmia cardiaca, no especificada</td>
            <td><?php echo $I499 ?></td>
            <td><?php echo $I499_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I500 > 0) { ?>
         <tr>
            <td>Insuficiencia cardiaca congestiva</td>
            <td><?php echo $I500 ?></td>
            <td><?php echo $I500_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I501 > 0) { ?>
         <tr>
            <td>Insuficiencia ventricular izquierda</td>
            <td><?php echo $I501 ?></td>
            <td><?php echo $I501_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I509 > 0) { ?>
         <tr>
            <td>Insuficiencia cardiaca, no especificada</td>
            <td><?php echo $I509 ?></td>
            <td><?php echo $I509_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I510 > 0) { ?>
         <tr>
            <td>Defecto del tabique cardiaco, adquirido</td>
            <td><?php echo $I510 ?></td>
            <td><?php echo $I510_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I511 > 0) { ?>
         <tr>
            <td>Ruptura de cuerda tendinosa, no clasificada en otra parte</td>
            <td><?php echo $I511 ?></td>
            <td><?php echo $I511_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I512 > 0) { ?>
         <tr>
            <td>Ruptura de musculo papilar, no clasificada en otra parte</td>
            <td><?php echo $I512 ?></td>
            <td><?php echo $I512_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I513 > 0) { ?>
         <tr>
            <td>Trombosis intracardiaca, no clasificada en otra parte</td>
            <td><?php echo $I513 ?></td>
            <td><?php echo $I513_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I514 > 0) { ?>
         <tr>
            <td>Miocarditis, no especificada</td>
            <td><?php echo $I514 ?></td>
            <td><?php echo $I514_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I515 > 0) { ?>
         <tr>
            <td>Degeneracion miocardica</td>
            <td><?php echo $I515 ?></td>
            <td><?php echo $I515_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I516 > 0) { ?>
         <tr>
            <td>Enfermedad cardiovascular, no especificada</td>
            <td><?php echo $I516 ?></td>
            <td><?php echo $I516_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I517 > 0) { ?>
         <tr>
            <td>Cardiomegalia</td>
            <td><?php echo $I517 ?></td>
            <td><?php echo $I517_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I518 > 0) { ?>
         <tr>
            <td>Otras enfermedades cardiacas mal definidas</td>
            <td><?php echo $I518 ?></td>
            <td><?php echo $I518_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I519 > 0) { ?>
         <tr>
            <td>Enfermedad cardiaca, no especificada</td>
            <td><?php echo $I519 ?></td>
            <td><?php echo $I519_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I520 > 0) { ?>
         <tr>
            <td>Otros trastornos cardiacos en enfermedades bacterianas clasificadas en otra parte</td>
            <td><?php echo $I520 ?></td>
            <td><?php echo $I520_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I521 > 0) { ?>
         <tr>
            <td>Otros trastornos cardiacos en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I521 ?></td>
            <td><?php echo $I521_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I528 > 0) { ?>
         <tr>
            <td>Otros trastornos cardiacos en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $I528 ?></td>
            <td><?php echo $I528_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I600 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de sifon y bifurcacion carotidea</td>
            <td><?php echo $I600 ?></td>
            <td><?php echo $I600_porcentaje_t ?> %</td>
        </tr>   
         <?php } if ($I601 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria cerebral media</td>
            <td><?php echo $I601 ?></td>
            <td><?php echo $I601_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I602 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria comunicante anterior</td>
            <td><?php echo $I602 ?></td>
            <td><?php echo $I602_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I603 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria comunicante posterior</td>
            <td><?php echo $I603 ?></td>
            <td><?php echo $I603_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I604 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria basilar</td>
            <td><?php echo $I604 ?></td>
            <td><?php echo $I604_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I605 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria vertebral</td>
            <td><?php echo $I605 ?></td>
            <td><?php echo $I605_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I606 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de otras arterias intracraneales</td>
            <td><?php echo $I606 ?></td>
            <td><?php echo $I606_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I607 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea de arteria intracraneal no especificada</td>
            <td><?php echo $I607 ?></td>
            <td><?php echo $I607_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I608 > 0) { ?>
         <tr>
            <td>Otras hemorragias subaracnoideas</td>
            <td><?php echo $I608 ?></td>
            <td><?php echo $I608_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I609 > 0) { ?>
         <tr>
            <td>Hemorragia subaracnoidea, no especificada</td>
            <td><?php echo $I609 ?></td>
            <td><?php echo $I609_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I610 > 0) { ?>
         <tr>
            <td>Hemorragia intracerebral en hemisferio, subcortical</td>
            <td><?php echo $I610 ?></td>
            <td><?php echo $I610_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I611 > 0) { ?>
         <tr>
            <td>Hemorragia intracerebral en hemisferio, cortical</td>
            <td><?php echo $I611 ?></td>
            <td><?php echo $I611_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I612 > 0) { ?>
         <tr>
            <td>Hemorragia intracerebral en hemisferio, no especificada</td>
            <td><?php echo $I612 ?></td>
            <td><?php echo $I612_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I613 > 0) { ?>
         <tr>
            <td>Hemorragia intraencefalica en tallo cerebral</td>
            <td><?php echo $I613 ?></td>
            <td><?php echo $I613_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I614 > 0) { ?>
         <tr>
            <td>Hemorragia intraencefalica en cerebelo</td>
            <td><?php echo $I614 ?></td>
            <td><?php echo $I614_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I615 > 0) { ?>
         <tr>
            <td>Hemorragia intraencefalica, intraventricular</td>
            <td><?php echo $I615 ?></td>
            <td><?php echo $I615_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I616 > 0) { ?>
         <tr>
            <td>Hemorragia intraencefalica de localizaciones multiples</td>
            <td><?php echo $I616 ?></td>
            <td><?php echo $I616_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I618 > 0) { ?>
         <tr>
            <td>Otras hemorragias intraencefalicas</td>
            <td><?php echo $I618 ?></td>
            <td><?php echo $I618_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I619 > 0) { ?>
         <tr>
            <td>Hemorragia intraencefalica, no especificada</td>
            <td><?php echo $I619 ?></td>
            <td><?php echo $I619_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I620 > 0) { ?>
         <tr>
            <td>Hemorragia subdural (aguda) (no traumatica)</td>
            <td><?php echo $I620 ?></td>
            <td><?php echo $I620_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I621 > 0) { ?>
         <tr>
            <td>Hemorragia extradural no traumatica</td>
            <td><?php echo $I621 ?></td>
            <td><?php echo $I621_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I629 > 0) { ?>
         <tr>
            <td>Hemorragia intracraneal (no traumatica), no especificada</td>
            <td><?php echo $I629 ?></td>
            <td><?php echo $I629_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I630 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a trombosis de arterias precerebrales</td>
            <td><?php echo $I630 ?></td>
            <td><?php echo $I630_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I631 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a embolia de arterias precerebrales</td>
            <td><?php echo $I631 ?></td>
            <td><?php echo $I631_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I632 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a oclusion o estenosis no especificada de arterias precerebrales</td>
            <td><?php echo $I632 ?></td>
            <td><?php echo $I632_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I633 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a trombosis de arterias cerebrales</td>
            <td><?php echo $I633 ?></td>
            <td><?php echo $I633_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I634 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a embolia de arterias cerebrales</td>
            <td><?php echo $I634 ?></td>
            <td><?php echo $I634_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I635 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a oclusion o estenosis no especificada de arterias cerebrales</td>
            <td><?php echo $I635 ?></td>
            <td><?php echo $I635_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I636 > 0) { ?>
         <tr>
            <td>Infarto cerebral debido a trombosis de venas cerebrales, no piogeno</td>
            <td><?php echo $I636 ?></td>
            <td><?php echo $I636_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I638 > 0) { ?>
         <tr>
            <td>Otros Infartos cerebrales</td>
            <td><?php echo $I638 ?></td>
            <td><?php echo $I638_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I639 > 0) { ?>
         <tr>
            <td>Infarto cerebral, no especificado</td>
            <td><?php echo $I639 ?></td>
            <td><?php echo $I639_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I64X > 0) { ?>
         <tr>
            <td>Accidente vascular encefalico agudo, no especificado como hemorragico o isquemico</td>
            <td><?php echo $I64X ?></td>
            <td><?php echo $I64X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I650 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arteria vertebral</td>
            <td><?php echo $I650 ?></td>
            <td><?php echo $I650_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I651 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arteria basilar</td>
            <td><?php echo $I651 ?></td>
            <td><?php echo $I651_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I652 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arteria carotida</td>
            <td><?php echo $I652 ?></td>
            <td><?php echo $I652_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I653 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis multiple bilateral de arterias precerebrales</td>
            <td><?php echo $I653 ?></td>
            <td><?php echo $I653_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I658 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de otras arterias precerebrales</td>
            <td><?php echo $I658 ?></td>
            <td><?php echo $I658_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I659 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arteria precerebral no especificada</td>
            <td><?php echo $I659 ?></td>
            <td><?php echo $I659_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I660 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de la arteria cerebral media</td>
            <td><?php echo $I660 ?></td>
            <td><?php echo $I660_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I661 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de la arteria cerebral anterior</td>
            <td><?php echo $I661 ?></td>
            <td><?php echo $I661_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I662 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de la arteria cerebral posterior</td>
            <td><?php echo $I662 ?></td>
            <td><?php echo $I662_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I663 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arterias cerebelosas</td>
            <td><?php echo $I663 ?></td>
            <td><?php echo $I663_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I664 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis multiple bilateral de arterias cerebrales</td>
            <td><?php echo $I664 ?></td>
            <td><?php echo $I664_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I668 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de otras arterias cerebrales</td>
            <td><?php echo $I668 ?></td>
            <td><?php echo $I668_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I669 > 0) { ?>
         <tr>
            <td>Oclusion y estenosis de arteria cerebral no especificada</td>
            <td><?php echo $I669 ?></td>
            <td><?php echo $I669_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I670 > 0) { ?>
         <tr>
            <td>Diseccion de arterias cerebrales, sin ruptura</td>
            <td><?php echo $I670 ?></td>
            <td><?php echo $I670_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I671 > 0) { ?>
         <tr>
            <td>Aneurisma cerebral, sin ruptura</td>
            <td><?php echo $I671 ?></td>
            <td><?php echo $I671_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I672 > 0) { ?>
         <tr>
            <td>Aterosclerosis cerebral</td>
            <td><?php echo $I672 ?></td>
            <td><?php echo $I672_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I673 > 0) { ?>
         <tr>
            <td>Leucoencefalopatia vascular progresiva</td>
            <td><?php echo $I673 ?></td>
            <td><?php echo $I673_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I674 > 0) { ?>
         <tr>
            <td>Encefalopatia hipertensiva</td>
            <td><?php echo $I674 ?></td>
            <td><?php echo $I674_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I675 > 0) { ?>
         <tr>
            <td>Enfermedad de Moyamoya</td>
            <td><?php echo $I675 ?></td>
            <td><?php echo $I675_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I676 > 0) { ?>
         <tr>
            <td>Trombosis apiogena del sistema venoso intracraneal</td>
            <td><?php echo $I676 ?></td>
            <td><?php echo $I676_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I677 > 0) { ?>
         <tr>
            <td>Arteritis cerebral, no clasificada en otra parte</td>
            <td><?php echo $I677 ?></td>
            <td><?php echo $I677_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I678 > 0) { ?>
         <tr>
            <td>Otras enfermedades cerebrovasculares especificadas</td>
            <td><?php echo $I678 ?></td>
            <td><?php echo $I678_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I679 > 0) { ?>
         <tr>
            <td>Enfermedad cerebrovascular, no especificada</td>
            <td><?php echo $I679 ?></td>
            <td><?php echo $I679_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I680 > 0) { ?>
         <tr>
            <td>Angiopatia cerebral amiloide</td>
            <td><?php echo $I680 ?></td>
            <td><?php echo $I680_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I681 > 0) { ?>
         <tr>
            <td>Arteritis cerebral en enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I681 ?></td>
            <td><?php echo $I681_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I682 > 0) { ?>
         <tr>
            <td>Arteritis cerebral en otras enfermedades clasificadas en otra parte</td>
            <td><?php echo $I682 ?></td>
            <td><?php echo $I682_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I688 > 0) { ?>
         <tr>
            <td>Otros trastornos cerebrovasculares en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I688 ?></td>
            <td><?php echo $I688_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I690 > 0) { ?>
         <tr>
            <td>Secuelas de hemorragia subaracnoidea</td>
            <td><?php echo $I690 ?></td>
            <td><?php echo $I690_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I691 > 0) { ?>
         <tr>
            <td>Secuelas de hemorragia intraencefalica</td>
            <td><?php echo $I691 ?></td>
            <td><?php echo $I691_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I692 > 0) { ?>
         <tr>
            <td>Secuelas de otras hemorragias intracraneales no traumaticas</td>
            <td><?php echo $I692 ?></td>
            <td><?php echo $I692_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I693 > 0) { ?>
         <tr>
            <td>Secuelas de infarto cerebral</td>
            <td><?php echo $I693 ?></td>
            <td><?php echo $I693_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I694 > 0) { ?>
         <tr>
            <td>Secuelas de accidente vascular encefalico, no especificado como hemorragico o isquemico</td>
            <td><?php echo $I694 ?></td>
            <td><?php echo $I694_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I698 > 0) { ?>
         <tr>
            <td>Secuelas de otras enfermedades cerebrovasculares y de las no especificadas </td>
            <td><?php echo $I698 ?></td>
            <td><?php echo $I698_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I700 > 0) { ?>
         <tr>
            <td>Aterosclerosis de la aorta</td>
            <td><?php echo $I700 ?></td>
            <td><?php echo $I700_porcentaje_t ?> %</td>
        </tr>
       <?php } if ($I701 > 0) { ?>
         <tr>
            <td>Aterosclerosis de la arteria renal</td>
            <td><?php echo $I701 ?></td>
            <td><?php echo $I701_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I702 > 0) { ?>
         <tr>
            <td>Aterosclerosis de las arterias de los miembros</td>
            <td><?php echo $I702 ?></td>
            <td><?php echo $I702_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I708 > 0) { ?>
         <tr>
            <td>Aterosclerosis de otras arterias</td>
            <td><?php echo $I708 ?></td>
            <td><?php echo $I708_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I709 > 0) { ?>
         <tr>
            <td>Aterosclerosis generalizada y la no especificada</td>
            <td><?php echo $I709 ?></td>
            <td><?php echo $I709_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I710 > 0) { ?>
         <tr>
            <td>Diseccion de aorta (cualquier parte)</td>
            <td><?php echo $I710 ?></td>
            <td><?php echo $I710_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I711 > 0) { ?>
         <tr>
            <td>Ruptura de aneurisma de la aorta toracica</td>
            <td><?php echo $I711 ?></td>
            <td><?php echo $I711_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I712 > 0) { ?>
         <tr>
            <td>Aneurisma de la aorta toracica, sin mencion de ruptura</td>
            <td><?php echo $I712 ?></td>
            <td><?php echo $I712_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I713 > 0) { ?>
         <tr>
            <td>Ruptura de aneurisma de la aorta abdominal</td>
            <td><?php echo $I713 ?></td>
            <td><?php echo $I713_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I714 > 0) { ?>
         <tr>
            <td>Aneurisma de la aorta abdominal, sin mencion de ruptura</td>
            <td><?php echo $I714 ?></td>
            <td><?php echo $I714_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I715 > 0) { ?>
         <tr>
            <td>Ruptura de aneurisma de la aorta toracoabdominal</td>
            <td><?php echo $I715 ?></td>
            <td><?php echo $I715_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I716 > 0) { ?>
         <tr>
            <td>Aneurisma de la aorta toracoabdominal, sin mencion de ruptura</td>
            <td><?php echo $I716 ?></td>
            <td><?php echo $I716_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I718 > 0) { ?>
         <tr>
            <td>Ruptura de aneurisma aortico, sitio no especificado</td>
            <td><?php echo $I718 ?></td>
            <td><?php echo $I718_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I719 > 0) { ?>
         <tr>
            <td>Aneurisma de la aorta, sitio no especificado, sin mencion de ruptura</td>
            <td><?php echo $I719 ?></td>
            <td><?php echo $I719_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I720 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de la arteria carotida</td>
            <td><?php echo $I720 ?></td>
            <td><?php echo $I720_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I721 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de arteria del miembro superior</td>
            <td><?php echo $I721 ?></td>
            <td><?php echo $I721_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I722 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de arteria renal</td>
            <td><?php echo $I722 ?></td>
            <td><?php echo $I722_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I723 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de arteria iliaca</td>
            <td><?php echo $I723 ?></td>
            <td><?php echo $I723_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I724 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de arteria del miembro inferior</td>
            <td><?php echo $I724 ?></td>
            <td><?php echo $I724_porcentaje_t ?> %</td>
        </tr>
       <?php } if ($I725 > 0) { ?>
         <tr>
            <td>Aneurisma y disección de otras arterias precerebrales</td>
            <td><?php echo $I725 ?></td>
            <td><?php echo $I725_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I726 > 0) { ?>
         <tr>
            <td>Aneurisma y disección de arteria vertebral</td>
            <td><?php echo $I726 ?></td>
            <td><?php echo $I726_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I728 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de otras arterias especificadas</td>
            <td><?php echo $I728 ?></td>
            <td><?php echo $I728_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I729 > 0) { ?>
         <tr>
            <td>Aneurisma y diseccion de sitio no especificado</td>
            <td><?php echo $I729 ?></td>
            <td><?php echo $I729_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I730 > 0) { ?>
         <tr>
            <td>Sindrome de Raynaud</td>
            <td><?php echo $I730 ?></td>
            <td><?php echo $I730_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I731 > 0) { ?>
         <tr>
            <td>Tromboangeitis obliterante [Buerger]</td>
            <td><?php echo $I731 ?></td>
            <td><?php echo $I731_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I738 > 0) { ?>
         <tr>
            <td>Otras enfermedades vasculares perifericas especificadas</td>
            <td><?php echo $I738 ?></td>
            <td><?php echo $I738_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I739 > 0) { ?>
         <tr>
            <td>Enfermedad vascular periferica, no especificada</td>
            <td><?php echo $I739 ?></td>
            <td><?php echo $I739_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I740 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de la aorta abdominal</td>
            <td><?php echo $I740 ?></td>
            <td><?php echo $I740_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I741 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de otras porciones y las no especificadas de la aorta</td>
            <td><?php echo $I741 ?></td>
            <td><?php echo $I741_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I742 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de arterias de los miembros superiores</td>
            <td><?php echo $I742 ?></td>
            <td><?php echo $I742_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I743 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de arterias de los miembros inferiores</td>
            <td><?php echo $I743 ?></td>
            <td><?php echo $I743_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I744 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de arterias de los miembros, no especificadas</td>
            <td><?php echo $I744 ?></td>
            <td><?php echo $I744_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I745 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de arteria iliaca</td>
            <td><?php echo $I745 ?></td>
            <td><?php echo $I745_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I748 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de otras arterias</td>
            <td><?php echo $I748 ?></td>
            <td><?php echo $I748_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I749 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de arteria no especificada</td>
            <td><?php echo $I749 ?></td>
            <td><?php echo $I749_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I770 > 0) { ?>
         <tr>
            <td>Fistula arteriovenosa, adquirida</td>
            <td><?php echo $I770 ?></td>
            <td><?php echo $I770_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I771 > 0) { ?>
         <tr>
            <td>Estrechez arterial</td>
            <td><?php echo $I771 ?></td>
            <td><?php echo $I771_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I772 > 0) { ?>
         <tr>
            <td>Ruptura arterial</td>
            <td><?php echo $I772 ?></td>
            <td><?php echo $I772_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I773 > 0) { ?>
         <tr>
            <td>Displasia fibromuscular arterial</td>
            <td><?php echo $I773 ?></td>
            <td><?php echo $I773_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I774 > 0) { ?>
         <tr>
            <td>Sindrome de compresion del tronco celiaco</td>
            <td><?php echo $I774 ?></td>
            <td><?php echo $I774_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I775 > 0) { ?>
         <tr>
            <td>Necrosis arterial</td>
            <td><?php echo $I775 ?></td>
            <td><?php echo $I775_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I776 > 0) { ?>
         <tr>
            <td>Arteritis, no especificada</td>
            <td><?php echo $I776 ?></td>
            <td><?php echo $I776_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I778 > 0) { ?>
         <tr>
            <td>Otros trastornos especificados de arterias y arteriolas</td>
            <td><?php echo $I778 ?></td>
            <td><?php echo $I778_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I779 > 0) { ?>
         <tr>
            <td>Trastorno de arterias y arteriolas, no especificado</td>
            <td><?php echo $I779 ?></td>
            <td><?php echo $I779_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I780 > 0) { ?>
         <tr>
            <td>Telangiectasia hemorragica hereditaria</td>
            <td><?php echo $I780 ?></td>
            <td><?php echo $I780_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I781 > 0) { ?>
         <tr>
            <td>Nevo, no neoplasico</td>
            <td><?php echo $I781 ?></td>
            <td><?php echo $I781_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I788 > 0) { ?>
         <tr>
            <td>Otras enfermedades de los capilares</td>
            <td><?php echo $I788 ?></td>
            <td><?php echo $I788_88porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I789 > 0) { ?>
         <tr>
            <td>Enfermedad de los vasos capilares, no especificada</td>
            <td><?php echo $I789 ?></td>
            <td><?php echo $I789_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I790 > 0) { ?>
         <tr>
            <td>Aneurisma de la aorta en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I790 ?></td>
            <td><?php echo $I790_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I791 > 0) { ?>
         <tr>
            <td>Aortitis en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I791 ?></td>
            <td><?php echo $I791_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I792 > 0) { ?>
         <tr>
            <td>Angiopatia periferica en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I792 ?></td>
            <td><?php echo $I792_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I798 > 0) { ?>
         <tr>
            <td>Otros trastornos de arterias, arteriolas y vasos capilares  en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I798 ?></td>
            <td><?php echo $I798_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I800 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de vasos superficiales de los miembros inferiores</td>
            <td><?php echo $I800 ?></td>
            <td><?php echo $I800_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I801 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de la vena femoral</td>
            <td><?php echo $I801 ?></td>
            <td><?php echo $I801_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I802 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de otros vasos profundos de los miembros inferiores</td>
            <td><?php echo $I802 ?></td>
            <td><?php echo $I802_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I803 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de los miembros inferiores, no especificada</td>
            <td><?php echo $I803 ?></td>
            <td><?php echo $I803_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I808 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de otros sitios</td>
            <td><?php echo $I808 ?></td>
            <td><?php echo $I808_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I809 > 0) { ?>
         <tr>
            <td>Flebitis y tromboflebitis de sitio no especificado</td>
            <td><?php echo $I809 ?></td>
            <td><?php echo $I809_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I81X > 0) { ?>
         <tr>
            <td>Trombosis de la vena porta</td>
            <td><?php echo $I81X ?></td>
            <td><?php echo $I81X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I820 > 0) { ?>
         <tr>
            <td>Sindrome de Budd-Chiari</td>
            <td><?php echo $I820 ?></td>
            <td><?php echo $I820_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I821 > 0) { ?>
         <tr>
            <td>Tromboflebitis migratoria</td>
            <td><?php echo $I821 ?></td>
            <td><?php echo $I821_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I822 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de vena cava</td>
            <td><?php echo $I822 ?></td>
            <td><?php echo $I822_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I823 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de vena renal</td>
            <td><?php echo $I823 ?></td>
            <td><?php echo $I823_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I828 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de otras venas especificadas</td>
            <td><?php echo $I828 ?></td>
            <td><?php echo $I828_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I829 > 0) { ?>
         <tr>
            <td>Embolia y trombosis de vena no especificada</td>
            <td><?php echo $I829 ?></td>
            <td><?php echo $I829_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I830 > 0) { ?>
         <tr>
            <td>Venas varicosas de los miembros inferiores con ulcera</td>
            <td><?php echo $I830 ?></td>
            <td><?php echo $I830_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I831 > 0) { ?>
         <tr>
            <td>Venas varicosas de los miembros inferiores con inflamacion</td>
            <td><?php echo $I831 ?></td>
            <td><?php echo $I831_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I832 > 0) { ?>
         <tr>
            <td>Venas varicosas de los miembros inferiores con ulcera e inflamacion</td>
            <td><?php echo $I832 ?></td>
            <td><?php echo $I832_porcentaje_t ?> %</td>
        </tr32>
         <?php } if ($I839 > 0) { ?>
         <tr>
            <td>Venas varicosas de los miembros inferiores sin ulcera ni inflamacion</td>
            <td><?php echo $I839 ?></td>
            <td><?php echo $I839_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I850 > 0) { ?>
         <tr>
            <td>Varices esofagicas con hemorragia</td>
            <td><?php echo $I850 ?></td>
            <td><?php echo $I850_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I859 > 0) { ?>
         <tr>
            <td>Varices esofagicas sin hemorragia</td>
            <td><?php echo $I859 ?></td>
            <td><?php echo $I859_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I860 > 0) { ?>
         <tr>
            <td>Varices sublinguales</td>
            <td><?php echo $I860 ?></td>
            <td><?php echo $I860_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I861 > 0) { ?>
         <tr>
            <td>Varices escrotales</td>
            <td><?php echo $I861 ?></td>
            <td><?php echo $I861_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I862 > 0) { ?>
         <tr>
            <td>Varices pelvicas</td>
            <td><?php echo $I862 ?></td>
            <td><?php echo $I862_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I863 > 0) { ?>
         <tr>
            <td>Varices de la vulva</td>
            <td><?php echo $I863 ?></td>
            <td><?php echo $I863_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I864 > 0) { ?>
         <tr>
            <td>Varices gastricas</td>
            <td><?php echo $I864 ?></td>
            <td><?php echo $I864_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I868 > 0) { ?>
         <tr>
            <td>Varices en otros sitios especificados</td>
            <td><?php echo $I868 ?></td>
            <td><?php echo $I868_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I870 > 0) { ?>
         <tr>
            <td>Sindrome postrombotico</td>
            <td><?php echo $I870 ?></td>
            <td><?php echo $I870_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I871 > 0) { ?>
         <tr>
            <td>Compresion de vena</td>
            <td><?php echo $I871 ?></td>
            <td><?php echo $I871_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I872 > 0) { ?>
         <tr>
            <td>Insuficiencia venosa (cronica) (periferica)</td>
            <td><?php echo $I872 ?></td>
            <td><?php echo $I872_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I878 > 0) { ?>
         <tr>
            <td>Otros trastornos venosos especificados</td>
            <td><?php echo $I878 ?></td>
            <td><?php echo $I878_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I879 > 0) { ?>
         <tr>
            <td>Trastorno venoso, no especificado</td>
            <td><?php echo $I879 ?></td>
            <td><?php echo $I879_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I880 > 0) { ?>
         <tr>
            <td>Linfadenitis mesenterica inespecifica</td>
            <td><?php echo $I880 ?></td>
            <td><?php echo $I880_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I881 > 0) { ?>
         <tr>
            <td>Linfadenitis cronica, excepto la mesenterica</td>
            <td><?php echo $I881 ?></td>
            <td><?php echo $I881_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I888 > 0) { ?>
         <tr>
            <td>Otras linfadenitis inespecificas</td>
            <td><?php echo $I888 ?></td>
            <td><?php echo $I888_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I889 > 0) { ?>
         <tr>
            <td>Linfadenitis inespecifica no especificada</td>
            <td><?php echo $I889 ?></td>
            <td><?php echo $I889_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I890 > 0) { ?>
         <tr>
            <td>Linfedema, no clasificado en otra parte</td>
            <td><?php echo $I890 ?></td>
            <td><?php echo $I890_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I891 > 0) { ?>
         <tr>
            <td>Linfangitis</td>
            <td><?php echo $I891 ?></td>
            <td><?php echo $I891_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I898 > 0) { ?>
         <tr>
            <td>Otros trastornos especificados no infecciosos de los vasos y ganglios linfaticos</td>
            <td><?php echo $I898 ?></td>
            <td><?php echo $I898_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I899 > 0) { ?>
         <tr>
            <td>Trastorno no infeccioso de vasos y ganglios linfaticos, no especificado</td>
            <td><?php echo $I899 ?></td>
            <td><?php echo $I899_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I950 > 0) { ?>
         <tr>
            <td>Hipotension idiopatica</td>
            <td><?php echo $I950 ?></td>
            <td><?php echo $I950_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I951 > 0) { ?>
         <tr>
            <td>Hipotension ortostatica</td>
            <td><?php echo $I951 ?></td>
            <td><?php echo $I951_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I952 > 0) { ?>
         <tr>
            <td>Hipotension debida a drogas</td>
            <td><?php echo $I952 ?></td>
            <td><?php echo $I952_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I958 > 0) { ?>
         <tr>
            <td>Otros tipos de hipotension</td>
            <td><?php echo $I958 ?></td>
            <td><?php echo $I958_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I959 > 0) { ?>
         <tr>
            <td>Hipotension, no especificada</td>
            <td><?php echo $I959 ?></td>
            <td><?php echo $I959_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I970 > 0) { ?>
         <tr>
            <td>Sindrome de postcardiotomia</td>
            <td><?php echo $I970 ?></td>
            <td><?php echo $I970_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I971 > 0) { ?>
         <tr>
            <td>Otras alteraciones funcionales consecutivas a cirugia cardiaca</td>
            <td><?php echo $I971 ?></td>
            <td><?php echo $I971_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I972 > 0) { ?>
         <tr>
            <td>Sindrome de linfedema postmastectomia</td>
            <td><?php echo $I972 ?></td>
            <td><?php echo $I972_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I978 > 0) { ?>
         <tr>
            <td>Otros trastornos del sistema circulatorio consecutivos a procedimientos, no clasificados en otra parte</td>
            <td><?php echo $I978 ?></td>
            <td><?php echo $I978_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I979 > 0) { ?>
         <tr>
            <td>Trastorno no especificado del sistema circulatorio consecutivo a procedimientos</td>
            <td><?php echo $I979 ?></td>
            <td><?php echo $I979_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I980 > 0) { ?>
         <tr>
            <td>Sifilis cardiovascular</td>
            <td><?php echo $I980 ?></td>
            <td><?php echo $I980_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I981 > 0) { ?>
         <tr>
            <td>Trastornos cardiovasculares en otras enfermedades infecciosas y parasitarias clasificadas en otra parte</td>
            <td><?php echo $I981 ?></td>
            <td><?php echo $I981_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I982 > 0) { ?>
         <tr>
            <td>Varices esofagicas sin hemorragia en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I982 ?></td>
            <td><?php echo $I982_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I983 > 0) { ?>
         <tr>
            <td>Várices esofágicas con hemorragia en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I983 ?></td>
            <td><?php echo $I983_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I988 > 0) { ?>
         <tr>
            <td>Otros trastornos especificados del aparato circulatorio en enfermedades clasificadas en otra parte</td>
            <td><?php echo $I988 ?></td>
            <td><?php echo $I988_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I99X > 0) { ?>
         <tr>
            <td>Otros trastornos y los no especificados del sistema circulatorio</td>
            <td><?php echo $I99X ?></td>
            <td><?php echo $I99X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I00 > 0) { ?>
         <tr>
            <td>Fiebre Reumatica Sin Mencion De Complicacion Cardiaca</td>
            <td><?php echo $I00 ?></td>
            <td><?php echo $I00_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I01 > 0) { ?>
         <tr>
            <td>Fiebre Reumatica Con Complicacion Cardiaca</td>
            <td><?php echo $I01 ?></td>
            <td><?php echo $I01_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I02 > 0) { ?>
         <tr>
            <td>Corea Reumatica</td>
            <td><?php echo $I02 ?></td>
            <td><?php echo $I02_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I05 > 0) { ?>
         <tr>
            <td>Enfermedades Reumaticas De La Valvula Mitral</td>
            <td><?php echo $I05 ?></td>
            <td><?php echo $I05_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I06 > 0) { ?>
         <tr>
            <td>Enfermedades Reumaticas De La Valvula Aortica</td>
            <td><?php echo $I06 ?></td>
            <td><?php echo $I06_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I07 > 0) { ?>
         <tr>
            <td>Enfermedades Reumaticas De La Valvula Tricuspide</td>
            <td><?php echo $I07 ?></td>
            <td><?php echo $I07_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I08 > 0) { ?>
         <tr>
            <td>Enfermedades Valvulares Multiples</td>
            <td><?php echo $I08 ?></td>
            <td><?php echo $I08_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I09 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Reumaticas Del Corazon</td>
            <td><?php echo $I09 ?></td>
            <td><?php echo $I09_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I10 > 0) { ?>
         <tr>
            <td>Hipertension esencial (primaria)</td>
            <td><?php echo $I10 ?></td>
            <td><?php echo $I10_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I11 > 0) { ?>
         <tr>
            <td>Enfermedad Cardiaca Hipertensiva</td>
            <td><?php echo $I11 ?></td>
            <td><?php echo $I11_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I12 > 0) { ?>
         <tr>
            <td>Enfermedad Renal Hipertensiva</td>
            <td><?php echo $I12 ?></td>
            <td><?php echo $I12_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I13 > 0) { ?>
         <tr>
            <td>Enfermedad Cardiorrenal Hipertensiva</td>
            <td><?php echo $I13 ?></td>
            <td><?php echo $I13_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I15 > 0) { ?>
         <tr>
            <td>Hipertension Secundaria</td>
            <td><?php echo $I15 ?></td>
            <td><?php echo $I15_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I20 > 0) { ?>
         <tr>
            <td>Angina De Pecho</td>
            <td><?php echo $I20 ?></td>
            <td><?php echo $I20_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I21 > 0) { ?>
         <tr>
            <td>Infarto Agudo Del Miocardio</td>
            <td><?php echo $I21 ?></td>
            <td><?php echo $I21_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I22 > 0) { ?>
         <tr>
            <td>Infarto Subsecuente Del Miocardio</td>
            <td><?php echo $I22 ?></td>
            <td><?php echo $I22_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I23 > 0) { ?>
         <tr>
            <td>Ciertas Complicaciones Presentes Posteriores Al Infarto Agudo Del Miocardio</td>
            <td><?php echo $I23 ?></td>
            <td><?php echo $I23_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I24 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Isquemicas Agudas Del Corazon</td>
            <td><?php echo $I24 ?></td>
            <td><?php echo $I24_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I25 > 0) { ?>
         <tr>
            <td>Enfermedad Isquemica Cronica Del Corazon</td>
            <td><?php echo $I25 ?></td>
            <td><?php echo $I25_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I26 > 0) { ?>
         <tr>
            <td>Embolia Pulmonar</td>
            <td><?php echo $I26 ?></td>
            <td><?php echo $I26_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I27 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Cardiopulmonares</td>
            <td><?php echo $I27 ?></td>
            <td><?php echo $I27_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I28 > 0) { ?>
         <tr>
            <td>Otras Enfermedades De Los Vasos Pulmonares</td>
            <td><?php echo $I28 ?></td>
            <td><?php echo $I28_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I30 > 0) { ?>
         <tr>
            <td>Pericarditis Aguda</td>
            <td><?php echo $I30 ?></td>
            <td><?php echo $I30_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I31 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Del Pericardio</td>
            <td><?php echo $I31 ?></td>
            <td><?php echo $I31_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I32 > 0) { ?>
         <tr>
            <td>Pericarditis En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I32 ?></td>
            <td><?php echo $I32_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I33 > 0) { ?>
         <tr>
            <td>Endocarditis Aguda Y Subaguda</td>
            <td><?php echo $I33 ?></td>
            <td><?php echo $I33_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I34 > 0) { ?>
         <tr>
            <td>Trastornos No Reumaticos De La Valvula Mitral</td>
            <td><?php echo $I34 ?></td>
            <td><?php echo $I34_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I35 > 0) { ?>
         <tr>
            <td>Trastornos No Reumaticos De La Valvula Aortica</td>
            <td><?php echo $I35 ?></td>
            <td><?php echo $I35_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I36 > 0) { ?>
         <tr>
            <td>Trastornos No Reumaticos De La Valvula Tricuspide</td>
            <td><?php echo $I36 ?></td>
            <td><?php echo $I36_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I37 > 0) { ?>
         <tr>
            <td>Trastornos De La Valvula Pulmonar</td>
            <td><?php echo $I37 ?></td>
            <td><?php echo $I37_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I38 > 0) { ?>
         <tr>
            <td>Endocarditis, Valvula No Especificada</td>
            <td><?php echo $I38 ?></td>
            <td><?php echo $I38_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I39 > 0) { ?>
         <tr>
            <td>Endocarditis Y Trastornos Valvulares En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I39 ?></td>
            <td><?php echo $I39_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I40 > 0) { ?>
         <tr>
            <td>Miocarditis Aguda</td>
            <td><?php echo $I40 ?></td>
            <td><?php echo $I40_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I41 > 0) { ?>
         <tr>
            <td>Miocarditis En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I41 ?></td>
            <td><?php echo $I41_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I42 > 0) { ?>
         <tr>
            <td>Cardiomiopatia</td>
            <td><?php echo $I42 ?></td>
            <td><?php echo $I42_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I43 > 0) { ?>
         <tr>
            <td>Cardiomiopatia En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I43 ?></td>
            <td><?php echo $I43_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I44 > 0) { ?>
         <tr>
            <td>Bloqueo Auriculoventricular Y De Rama Izquierda Del Haz</td>
            <td><?php echo $I44 ?></td>
            <td><?php echo $I44_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I45 > 0) { ?>
         <tr>
            <td>Otros Trastornos De La Conduccion</td>
            <td><?php echo $I45 ?></td>
            <td><?php echo $I45_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I46 > 0) { ?>
         <tr>
            <td>Paro Cardiaco</td>
            <td><?php echo $I46 ?></td>
            <td><?php echo $I46_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I47 > 0) { ?>
         <tr>
            <td>Taquicardia Paroxistica</td>
            <td><?php echo $I47 ?></td>
            <td><?php echo $I47_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I48 > 0) { ?>
         <tr>
            <td>Fibrilacion Y Aleteo Auricular</td>
            <td><?php echo $I48 ?></td>
            <td><?php echo $I48_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I49 > 0) { ?>
         <tr>
            <td>Otras Arritmias Cardiacas</td>
            <td><?php echo $I49 ?></td>
            <td><?php echo $I49_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I50 > 0) { ?>
         <tr>
            <td>Insuficiencia Cardiaca</td>
            <td><?php echo $I50 ?></td>
            <td><?php echo $I50_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($I51 > 0) { ?>
         <tr>
            <td>Complicaciones Y Descripciones Mal Definidas En Enfermedades Cardiacas</td>
            <td><?php echo $I51 ?></td>
            <td><?php echo $I51_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I52 > 0) { ?>
         <tr>
            <td>Otros Trastornos Cardiacos En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I52 ?></td>
            <td><?php echo $I52_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I60 > 0) { ?>
         <tr>
            <td>Hemorragia Subaracnoidea</td>
            <td><?php echo $I60 ?></td>
            <td><?php echo $I60_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I61 > 0) { ?>
         <tr>
            <td>Hemorragia Intraencefalica</td>
            <td><?php echo $I61 ?></td>
            <td><?php echo $I61_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I62 > 0) { ?>
         <tr>
            <td>Otras Hemorragias Intracraneales No Traumaticas</td>
            <td><?php echo $I62 ?></td>
            <td><?php echo $I62_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I63 > 0) { ?>
         <tr>
            <td>Infarto Cerebral</td>
            <td><?php echo $I63 ?></td>
            <td><?php echo $I63_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I64 > 0) { ?>
         <tr>
            <td>Accidente Vascular Encefalico Agudo No Especificado Como Hemorragico O Isquemico</td>
            <td><?php echo $I64 ?></td>
            <td><?php echo $I64_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I65 > 0) { ?>
         <tr>
            <td>Oclusion Y Estenosis En Arterias Precerebrales Sin Ocasionar Infarto Cerebral</td>
            <td><?php echo $I65 ?></td>
            <td><?php echo $I65_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I66 > 0) { ?>
         <tr>
            <td>Oclusion Y Estenosis En Arterias Cerebrales Sin Ocasionar Infarto Cerebral</td>
            <td><?php echo $I66 ?></td>
            <td><?php echo $I66_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I67 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Cerebrovasculares</td>
            <td><?php echo $I67 ?></td>
            <td><?php echo $I67_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I68 > 0) { ?>
         <tr>
            <td>Trastornos Cerebrovasculares En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I68 ?></td>
            <td><?php echo $I68_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I69 > 0) { ?>
         <tr>
            <td>Secuelas De Enfermedades Cerebrovascular</td>
            <td><?php echo $I69 ?></td>
            <td><?php echo $I69_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I71 > 0) { ?>
         <tr>
            <td>Aneurisma Y Diseccion Aorticos</td>
            <td><?php echo $I71 ?></td>
            <td><?php echo $I71_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I72 > 0) { ?>
         <tr>
            <td>Otros Aneurismas Y Aneurismas Disecantes</td>
            <td><?php echo $I72 ?></td>
            <td><?php echo $I72_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I73 > 0) { ?>
         <tr>
            <td>Otras Enfermedades Vasculares Perifericas</td>
            <td><?php echo $I73 ?></td>
            <td><?php echo $I73_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I74 > 0) { ?>
         <tr>
            <td>Embolia Y Trombosis Arteriales</td>
            <td><?php echo $I74 ?></td>
            <td><?php echo $I74_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I77 > 0) { ?>
         <tr>
            <td>Otros Trastornos Arteriales O Arteriolares</td>
            <td><?php echo $I77 ?></td>
            <td><?php echo $I77_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I78 > 0) { ?>
         <tr>
            <td>Enfermedades De Los Vasos Capilares</td>
            <td><?php echo $I78 ?></td>
            <td><?php echo $I78_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I79 > 0) { ?>
         <tr>
            <td>Trastornos De Las Arterias, De Las Arteriolas Y De Los Vasos Capilares En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I79 ?></td>
            <td><?php echo $I79_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I80 > 0) { ?>
         <tr>
            <td>Flebitis Y Tromboflebitis</td>
            <td><?php echo $I80 ?></td>
            <td><?php echo $I80_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I81 > 0) { ?>
         <tr>
            <td>Trombosis De La Vena Porta</td>
            <td><?php echo $I81 ?></td>
            <td><?php echo $I81_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I82 > 0) { ?>
         <tr>
            <td>Otras Embolias Y Trombosis Venosas</td>
            <td><?php echo $I82 ?></td>
            <td><?php echo $I82_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I83 > 0) { ?>
         <tr>
            <td>Venas Varicosas De Los Miembros Inferiores</td>
            <td><?php echo $I83 ?></td>
            <td><?php echo $I83_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I85 > 0) { ?>
         <tr>
            <td>Varices Esofagicas</td>
            <td><?php echo $I85 ?></td>
            <td><?php echo $I85_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I86 > 0) { ?>
         <tr>
            <td>Varices De Otros Sitios</td>
            <td><?php echo $I86 ?></td>
            <td><?php echo $I86_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I87 > 0) { ?>
         <tr>
            <td>Otros Trastornos De Las Venas</td>
            <td><?php echo $I87 ?></td>
            <td><?php echo $I87_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I88 > 0) { ?>
         <tr>
            <td>Linfadenitis Inespecifica</td>
            <td><?php echo $I88 ?></td>
            <td><?php echo $I88_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I89 > 0) { ?>
         <tr>
            <td>Otros Trastornos No Infecciosos De Los Vasos Y Ganglios Linfaticos</td>
            <td><?php echo $I89 ?></td>
            <td><?php echo $I89_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I95 > 0) { ?>
         <tr>
            <td>Hipotension</td>
            <td><?php echo $I95 ?></td>
            <td><?php echo $I95_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I97 > 0) { ?>
         <tr>
            <td>Trastornos Del Sistema Circulatorio Consecutivos A Procedimientos No Clasificados En Otra Parte</td>
            <td><?php echo $I97 ?></td>
            <td><?php echo $I97_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I98 > 0) { ?>
         <tr>
            <td>Otros Trastornos Del Sistema Circulatorio En Enfermedades Clasificadas En Otra Parte</td>
            <td><?php echo $I98 ?></td>
            <td><?php echo $I98_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($I99 > 0) { ?>
         <tr>
            <td>Otros Trastornos Y Los No Especificados Del Sistema Circulatorio</td>
            <td><?php echo $I99 ?></td>
            <td><?php echo $I99_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q201 > 0) { ?>
         <tr>
            <td>Transposicion de los grandes vasos en ventriculo derecho</td>
            <td><?php echo $Q201 ?></td>
            <td><?php echo $Q201_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q202 > 0) { ?>
         <tr>
            <td>Transposicion de los grandes vasos en ventriculo izquierdo</td>
            <td><?php echo $Q202 ?></td>
            <td><?php echo $Q202_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q203 > 0) { ?>
         <tr>
            <td>Discordancia de la conexion ventriculoarterial</td>
            <td><?php echo $Q203 ?></td>
            <td><?php echo $Q203_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q204 > 0) { ?>
         <tr>
            <td>Ventriculo con doble entrada</td>
            <td><?php echo $Q204 ?></td>
            <td><?php echo $Q204_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q205 > 0) { ?>
         <tr>
            <td>Discordancia de la conexion auriculoventricular</td>
            <td><?php echo $Q205 ?></td>
            <td><?php echo $Q205_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q206 > 0) { ?>
         <tr>
            <td>Isomerismo de los apendices auriculares</td>
            <td><?php echo $Q206 ?></td>
            <td><?php echo $Q206_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q208 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de las camaras cardiacas y sus conexione</td>
            <td><?php echo $Q208 ?></td>
            <td><?php echo $Q208_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q209 > 0) { ?>
         <tr>
            <td>Malformacion congenita de las camaras cardiacas y sus conexiones, no especificada</td>
            <td><?php echo $Q209 ?></td>
            <td><?php echo $Q209_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q210 > 0) { ?>
         <tr>
            <td>Defecto del tabique ventricular</td>
            <td><?php echo $Q210 ?></td>
            <td><?php echo $Q210_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q211 > 0) { ?>
         <tr>
            <td>Defecto del tabique auricular</td>
            <td><?php echo $Q211 ?></td>
            <td><?php echo $Q211_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q212 > 0) { ?>
         <tr>
            <td>Defecto del tabique auriculoventricular</td>
            <td><?php echo $Q212 ?></td>
            <td><?php echo $Q212_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q213 > 0) { ?>
         <tr>
            <td>Tetralogia de Fallot</td>
            <td><?php echo $Q213 ?></td>
            <td><?php echo $Q213_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q214 > 0) { ?>
         <tr>
            <td>Defecto del tabique aortopulmonar</td>
            <td><?php echo $Q214 ?></td>
            <td><?php echo $Q214_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q218 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de los tabiques cardiacos</td>
            <td><?php echo $Q218 ?></td>
            <td><?php echo $Q218_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q219 > 0) { ?>
         <tr>
            <td>Malformacion congenita del tabique cardiaco, no especificada</td>
            <td><?php echo $Q219 ?></td>
            <td><?php echo $Q219_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q220 > 0) { ?>
         <tr>
            <td>Atresia de la valvula pulmonar</td>
            <td><?php echo $Q220 ?></td>
            <td><?php echo $Q220_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q221 > 0) { ?>
         <tr>
            <td>Estenosis congenita de la valvula pulmonar</td>
            <td><?php echo $Q221 ?></td>
            <td><?php echo $Q221_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q222 > 0) { ?>
         <tr>
            <td>Insuficiencia congenita de la valvula pulmonar</td>
            <td><?php echo $Q222 ?></td>
            <td><?php echo $Q222_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q223 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de la valvula pulmonar</td>
            <td><?php echo $Q223 ?></td>
            <td><?php echo $Q223_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q224 > 0) { ?>
         <tr>
            <td>Estenosis congenita de la valvula tricuspide</td>
            <td><?php echo $Q224 ?></td>
            <td><?php echo $Q224_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q225 > 0) { ?>
         <tr>
            <td>Anomalia de Ebstein</td>
            <td><?php echo $Q225 ?></td>
            <td><?php echo $Q225_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q226 > 0) { ?>
         <tr>
            <td>Sindrome de hipoplasia del corazon derecho</td>
            <td><?php echo $Q226 ?></td>
            <td><?php echo $Q226_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q228 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de la valvula tricuspide</td>
            <td><?php echo $Q228 ?></td>
            <td><?php echo $Q228_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q229 > 0) { ?>
         <tr>
            <td>Malformacion congenita de la valvula tricuspide, no especificada</td>
            <td><?php echo $Q229 ?></td>
            <td><?php echo $Q229_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q230 > 0) { ?>
         <tr>
            <td>Estenosis congenita de la valvula aortica</td>
            <td><?php echo $Q230 ?></td>
            <td><?php echo $Q230_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q231 > 0) { ?>
         <tr>
            <td>Insuficiencia congenita de la valvula aortica</td>
            <td><?php echo $Q231 ?></td>
            <td><?php echo $Q231_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q232 > 0) { ?>
         <tr>
            <td>Estenosis mitral congenita</td>
            <td><?php echo $Q232 ?></td>
            <td><?php echo $Q232_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q233 > 0) { ?>
         <tr>
            <td>Insuficiencia mitral congenita</td>
            <td><?php echo $Q233 ?></td>
            <td><?php echo $Q233_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q234 > 0) { ?>
         <tr>
            <td>Sindrome de hipoplasia del corazon izquierdo</td>
            <td><?php echo $Q234 ?></td>
            <td><?php echo $Q234_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q238 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de las valvulas aortica y mitral</td>
            <td><?php echo $Q238 ?></td>
            <td><?php echo $Q238_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q239 > 0) { ?>
         <tr>
            <td>Malformacion congenita de las valvulas aortica y mitral, no especificada</td>
            <td><?php echo $Q239 ?></td>
            <td><?php echo $Q239_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q240 > 0) { ?>
         <tr>
            <td>Dextrocardia</td>
            <td><?php echo $Q240 ?></td>
            <td><?php echo $Q240_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q241 > 0) { ?>
         <tr>
            <td>Levocardia</td>
            <td><?php echo $Q241 ?></td>
            <td><?php echo $Q241_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q242 > 0) { ?>
         <tr>
            <td>Corazon triauricular</td>
            <td><?php echo $Q242 ?></td>
            <td><?php echo $Q242_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q243 > 0) { ?>
         <tr>
            <td>Estenosis del infundibulo pulmonar</td>
            <td><?php echo $Q243 ?></td>
            <td><?php echo $Q243_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q244 > 0) { ?>
         <tr>
            <td>Estenosis subaortica congenita</td>
            <td><?php echo $Q244 ?></td>
            <td><?php echo $Q244_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q245 > 0) { ?>
         <tr>
            <td>Malformacion de los vasos coronarios</td>
            <td><?php echo $Q245 ?></td>
            <td><?php echo $Q245_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q246 > 0) { ?>
         <tr>
            <td>Bloqueo cardiaco congenito</td>
            <td><?php echo $Q246 ?></td>
            <td><?php echo $Q246_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q248 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas del corazon, especificadas</td>
            <td><?php echo $Q248 ?></td>
            <td><?php echo $Q248_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q249 > 0) { ?>
         <tr>
            <td>Malformacion congenita del corazon, no especificada</td>
            <td><?php echo $Q249 ?></td>
            <td><?php echo $Q249_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q250 > 0) { ?>
         <tr>
            <td>Conducto arterioso persistente</td>
            <td><?php echo $Q250 ?></td>
            <td><?php echo $Q250_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q251 > 0) { ?>
         <tr>
            <td>Coartacion de la aorta</td>
            <td><?php echo $Q251 ?></td>
            <td><?php echo $Q251_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q252 > 0) { ?>
         <tr>
            <td>Atresia de la aorta</td>
            <td><?php echo $Q252 ?></td>
            <td><?php echo $Q252_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q253 > 0) { ?>
         <tr>
            <td>Estenosis de la aorta</td>
            <td><?php echo $Q253 ?></td>
            <td><?php echo $Q253_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q254 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de la aorta</td>
            <td><?php echo $Q254 ?></td>
            <td><?php echo $Q254_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q255 > 0) { ?>
         <tr>
            <td>Atresia de la arteria pulmonar</td>
            <td><?php echo $Q255 ?></td>
            <td><?php echo $Q255_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q256 > 0) { ?>
         <tr>
            <td>Estenosis de la arteria pulmonar</td>
            <td><?php echo $Q256 ?></td>
            <td><?php echo $Q256_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q257 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de la arteria pulmonar</td>
            <td><?php echo $Q257 ?></td>
            <td><?php echo $Q257_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q258 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de las grandes arterias</td>
            <td><?php echo $Q258 ?></td>
            <td><?php echo $Q258_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q259 > 0) { ?>
         <tr>
            <td>Malformacion congenita de las grandes arterias, no especificada</td>
            <td><?php echo $Q259 ?></td>
            <td><?php echo $Q259_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q260 > 0) { ?>
         <tr>
            <td>Estenosis congenita de la vena cava</td>
            <td><?php echo $Q260 ?></td>
            <td><?php echo $Q260_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q261 > 0) { ?>
         <tr>
            <td>Persistencia de la vena cava superior izquierda</td>
            <td><?php echo $Q261 ?></td>
            <td><?php echo $Q261_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q262 > 0) { ?>
         <tr>
            <td>Conexion anomala total de las venas pulmonares</td>
            <td><?php echo $Q262 ?></td>
            <td><?php echo $Q262_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q263 > 0) { ?>
         <tr>
            <td>Conexion anomala parcial de las venas pulmonares</td>
            <td><?php echo $Q263 ?></td>
            <td><?php echo $Q263_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q264 > 0) { ?>
         <tr>
            <td>Conexion anomala de las venas pulmonares, sin otra especificacion</td>
            <td><?php echo $Q264 ?></td>
            <td><?php echo $Q264_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q265 > 0) { ?>
         <tr>
            <td>Conexion anomala de la vena porta</td>
            <td><?php echo $Q265 ?></td>
            <td><?php echo $Q265_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q266 > 0) { ?>
         <tr>
            <td>Fistula arteria hepatica-vena porta</td>
            <td><?php echo $Q266 ?></td>
            <td><?php echo $Q266_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q268 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de las grandes venas</td>
            <td><?php echo $Q268 ?></td>
            <td><?php echo $Q268_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q269 > 0) { ?>
         <tr>
            <td>Malformacion congenita de las grandes venas, no especificada</td>
            <td><?php echo $Q269 ?></td>
            <td><?php echo $Q269_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q270 > 0) { ?>
         <tr>
            <td>Ausencia e hipoplasia congenita de la arteria umbilical</td>
            <td><?php echo $Q270 ?></td>
            <td><?php echo $Q270_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q271 > 0) { ?>
         <tr>
            <td>Estenosis congenita de la arteria renal</td>
            <td><?php echo $Q271 ?></td>
            <td><?php echo $Q271_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q272 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas de la arteria renal</td>
            <td><?php echo $Q272 ?></td>
            <td><?php echo $Q272_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q273 > 0) { ?>
         <tr>
            <td>Malformacion arteriovenosa periferica</td>
            <td><?php echo $Q273 ?></td>
            <td><?php echo $Q273_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q274 > 0) { ?>
         <tr>
            <td>Flebectasia congenita</td>
            <td><?php echo $Q274 ?></td>
            <td><?php echo $Q274_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q278 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas del sistema vascular periferico, especificadas</td>
            <td><?php echo $Q278 ?></td>
            <td><?php echo $Q278_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q279 > 0) { ?>
         <tr>
            <td>Malformacion congenita del sistema vascular periferico, no especificada</td>
            <td><?php echo $Q279 ?></td>
            <td><?php echo $Q279_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q280 > 0) { ?>
         <tr>
            <td>Malformacion arteriovenosa de los vasos precerebrales</td>
            <td><?php echo $Q280 ?></td>
            <td><?php echo $Q280_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q281 > 0) { ?>
         <tr>
            <td>Otras malformaciones de los vasos precerebrales</td>
            <td><?php echo $Q281 ?></td>
            <td><?php echo $Q281_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q282 > 0) { ?>
         <tr>
            <td>Malformacion arteriovenosa de los vasos cerebrales</td>
            <td><?php echo $Q282 ?></td>
            <td><?php echo $Q282_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q283 > 0) { ?>
         <tr>
            <td>Otras malformaciones de los vasos cerebrales</td>
            <td><?php echo $Q283 ?></td>
            <td><?php echo $Q283_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q288 > 0) { ?>
         <tr>
            <td>Otras malformaciones congenitas del sistema circulatorio, especificadas</td>
            <td><?php echo $Q288 ?></td>
            <td><?php echo $Q288_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q289 > 0) { ?>
         <tr>
            <td>Malformacion congenita del sistema circulatorio, no especificada</td>
            <td><?php echo $Q289 ?></td>
            <td><?php echo $Q289_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q20 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Las Camaras Cardiacas Y Sus Conexiones</td>
            <td><?php echo $Q20 ?></td>
            <td><?php echo $Q20_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q21 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Los Tabiques Cardiacos</td>
            <td><?php echo $Q21 ?></td>
            <td><?php echo $Q21_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q22 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Las Valvulas Pulmonar Y Tricuspide</td>
            <td><?php echo $Q22 ?></td>
            <td><?php echo $Q22_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q23 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Las Valvulas Aortica Y Mitral</td>
            <td><?php echo $Q23 ?></td>
            <td><?php echo $Q23_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q24 > 0) { ?>
         <tr>
            <td>Otras Malformaciones Congenitas Del Corazon</td>
            <td><?php echo $Q24 ?></td>
            <td><?php echo $Q24_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q25 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Las Grandes Arterias</td>
            <td><?php echo $Q25 ?></td>
            <td><?php echo $Q25_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q26 > 0) { ?>
         <tr>
            <td>Malformaciones Congenitas De Las Grandes Venas</td>
            <td><?php echo $Q26 ?></td>
            <td><?php echo $Q26_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q27 > 0) { ?>
         <tr>
            <td>Otras Malformaciones Congenitas Del Sistema Vascular Periferico</td>
            <td><?php echo $Q27 ?></td>
            <td><?php echo $Q27_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($Q28 > 0) { ?>
         <tr>
            <td>Otras Malformaciones Congenitas Del Sistema Circulatorio</td>
            <td><?php echo $Q28 ?></td>
            <td><?php echo $Q28_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R000 > 0) { ?>
         <tr>
            <td>Taquicardia, no especificada</td>
            <td><?php echo $R000 ?></td>
            <td><?php echo $R000_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R001 > 0) { ?>
         <tr>
            <td>Bradicardia, no especificada</td>
            <td><?php echo $R001 ?></td>
            <td><?php echo $R001_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R002 > 0) { ?>
         <tr>
            <td>Palpitaciones</td>
            <td><?php echo $R002 ?></td>
            <td><?php echo $R002_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R008 > 0) { ?>
         <tr>
            <td>Otras anormalidades del latido cardiaco y las no especificadas</td>
            <td><?php echo $R008 ?></td>
            <td><?php echo $R008_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R010 > 0) { ?>
         <tr>
            <td>Soplos cardiacos benignos o inocentes</td>
            <td><?php echo $R010 ?></td>
            <td><?php echo $R010_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R011 > 0) { ?>
         <tr>
            <td>Soplo cardiaco, no especificado</td>
            <td><?php echo $R011 ?></td>
            <td><?php echo $R011_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R012 > 0) { ?>
         <tr>
            <td>Otros sonidos cardiacos</td>
            <td><?php echo $R012 ?></td>
            <td><?php echo $R012_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R02X > 0) { ?>
         <tr>
            <td>Gangrena, no clasificada en otra parte</td>
            <td><?php echo $R02X ?></td>
            <td><?php echo $R02X_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R030 > 0) { ?>
         <tr>
            <td>Lectura elevada de la presion sanguinea, sin diagnostico de hipertension</td>
            <td><?php echo $R030 ?></td>
            <td><?php echo $R030_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R031 > 0) { ?>
         <tr>
            <td>Lectura de presion baja no especifica</td>
            <td><?php echo $R031 ?></td>
            <td><?php echo $R031_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R072 > 0) { ?>
         <tr>
            <td>Dolor precordial</td>
            <td><?php echo $R072 ?></td>
            <td><?php echo $R072_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R073 > 0) { ?>
         <tr>
            <td>Otros dolores en el pecho</td>
            <td><?php echo $R073 ?></td>
            <td><?php echo $R073_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R790 > 0) { ?>
         <tr>
            <td>Nivel anormal de mineral en la sangre</td>
            <td><?php echo $R790 ?></td>
            <td><?php echo $R790_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R799 > 0) { ?>
         <tr>
            <td>Hallazgo anormal en la quimica sanguinea, sin otra especificacion</td>
            <td><?php echo $R799 ?></td>
            <td><?php echo $R799_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R00 > 0) { ?>
         <tr>
            <td>Anormalidades Del Latido Cardiaco</td>
            <td><?php echo $R00 ?></td>
            <td><?php echo $R00_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R01 > 0) { ?>
         <tr>
            <td>Soplos Y Otros Sonidos Cardiacos</td>
            <td><?php echo $R01 ?></td>
            <td><?php echo $R01_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R02 > 0) { ?>
         <tr>
            <td>Gangrena, No Clasificada En Otra Parte</td>
            <td><?php echo $R02 ?></td>
            <td><?php echo $R02_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R03 > 0) { ?>
         <tr>
            <td>Lectura De Presion Sanguinea Anormal, Sin Diagnostico</td>
            <td><?php echo $R03 ?></td>
            <td><?php echo $R03_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R07 > 0) { ?>
         <tr>
            <td>Dolor De Garganta Y En El Pecho</td>
            <td><?php echo $R07 ?></td>
            <td><?php echo $R07_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R73 > 0) { ?>
         <tr>
            <td>Nivel Elevado De Glucosa En Sangre</td>
            <td><?php echo $R73 ?></td>
            <td><?php echo $R73_porcentaje_t ?> %</td>
        </tr>
         <?php } if ($R79 > 0) { ?>
         <tr>
            <td>Otros Hallazgos Anormales En La Quimica Sanguinea</td>
            <td><?php echo $R79 ?></td>
            <td><?php echo $R79_porcentaje_t ?> %</td>
        </tr>
        <?php } if ($CIE10_EI  > 0) { ?>
            <tr>
                <td>TOTAL</td>
                <td><?php echo $CIE10_EI ?></td>
                <td> <?php echo $CIE10_EI_porcentaje_T ?> %</td> 
            </tr>
       <?php } ?>
    </tbody>
</table>