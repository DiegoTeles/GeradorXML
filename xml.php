<?php
date_default_timezone_set('America/Sao_Paulo');

if (isset($_POST['ok'])) {

header('Content-Type: application/xml');
header('Content-Disposition: attachment; filename="downloaded.xml"');

// Get nos valores dos campos especificos para gerar o ID dinamico
    $incremento = 00000;
    $id = "ID";

    $final = $id . $_POST['tpInsc'] . $_POST['nrInsc'] . date("YmdHis") . ++$incremento;

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');

// A first element
    xmlwriter_start_element($xw, 'eSocial');
    // Attribute 'att1' for element 'tag1'
    xmlwriter_start_attribute($xw, 'xmlns');
    xmlwriter_text($xw, $_POST['evtContratAvNP']);
    xmlwriter_end_attribute($xw);
    xmlwriter_start_element($xw, 'evtContratAvNP');
// Attribute 'att1' for element 'tag1'
    xmlwriter_start_attribute($xw, 'ID');
    xmlwriter_text($xw, $final);
    xmlwriter_end_attribute($xw);

    xmlwriter_start_element($xw, 'ideEvento');
// Start a child element
    xmlwriter_start_element($xw, 'indRetif');
    xmlwriter_text($xw, $_POST['indRetif']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'nrRecibo');
    xmlwriter_text($xw, $_POST['nrRecibo']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'indApuracao');
    xmlwriter_text($xw, $_POST['indApuracao']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'perApur');
    xmlwriter_text($xw, $_POST['perApur']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'tpAmb');
    xmlwriter_text($xw, $_POST['tpAmb']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'procEmi');
    xmlwriter_text($xw, $_POST['procEmi']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'verProc');
    xmlwriter_text($xw, $_POST['verProc']);
    xmlwriter_end_element($xw);

    xmlwriter_end_element($xw); 
    // A first element
    xmlwriter_start_element($xw, 'ideEmpregador');

// Start a child element
    xmlwriter_start_element($xw, 'tpInsc');
    xmlwriter_text($xw, $_POST['tpInsc']);
    xmlwriter_end_element($xw);  

    // Start a child element
    xmlwriter_start_element($xw, 'nrInsc');
    xmlwriter_text($xw, $_POST['nrInsc']);
    xmlwriter_end_element($xw);

    xmlwriter_end_element($xw);

    // A first element
    xmlwriter_start_element($xw, 'remunAvNP');

    // Start a child element
    xmlwriter_start_element($xw, 'tpInsc');
    xmlwriter_text($xw, $_POST['tpInsc']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'nrInsc');
    xmlwriter_text($xw, $_POST['nrInsc']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'codLotacao');
    xmlwriter_text($xw, $_POST['codLotacao']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'vrBcCp00');
    xmlwriter_text($xw, $_POST['vrBcCp00']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'vrBcCp15');
    xmlwriter_text($xw, $_POST['vrBcCp15']);
    xmlwriter_end_element($xw);  
// Start a child element
    xmlwriter_start_element($xw, 'vrBcCp20');
    xmlwriter_text($xw, $_POST['vrBcCp20']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'vrBcCp25');
    xmlwriter_text($xw, $_POST['vrBcCp25']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'vrBcCp13');
    xmlwriter_text($xw, $_POST['vrBcCp13']);
    xmlwriter_end_element($xw);  
    // Start a child element
    xmlwriter_start_element($xw, 'vrBcFgts');
    xmlwriter_text($xw, $_POST['vrBcFgts']);
    xmlwriter_end_element($xw);  
 // Start a child element
    xmlwriter_start_element($xw, 'vrDescCP');
    xmlwriter_text($xw, $_POST['vrDescCP']);
    xmlwriter_end_element($xw); 

    xmlwriter_end_document($xw);
    xmlwriter_end_document($xw);
echo xmlwriter_output_memory($xw);


}else{
?>

<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XML - Generator</title>

<!-- Mask -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.mask.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    
   

<script type="text/javascript">

      $('.mask').mask("#.##0,00", { reverse: true });
//    $('.mask').mask("#.##0,00", { reverse: true });
//    $("#xmlForm").validate();

    // adciona e remove atributo disabled do campo input

    $(document).ready(function() {
    $('#nrRecibo').attr('disabled','disabled');        
    $('select[name="indRetif"]').on('change',function(){
    var op = $(this).val();
        if(op == "2"){           
        $('#nrRecibo').removeAttr('disabled');          
         }else{
         $('#nrRecibo').attr('disabled','disabled'); 
        }  

      });
    });
    </script>
</head>
<body>


<form class="xmlForm" id="xmlForm" action="xml.php" method="post">

   <table>  

   <tr>
        <div style="display: none"; visibility:hidden;>
        <td>eSocial:</td>
        <td>
            <input type="text" name="evtContratAvNP" class="evtContratAvNP" id="evtContratAvNP" value="http://www.esocial.gov.br/schema/evt/evtContratAvNP/v02_04_01"  maxlength="36" required  />
        </td>
        </div>
    </tr>
    <!-- <tr>

        <td>Id:</td>
        <td>
            <input type="text" name="Id" class="Id" id="Id" value="<?php echo $final ?>" /> 
        </td>
    </tr> -->
        <!-- <tr>
            <td>
    
                Original / Retificação:
            </td>

    <tr> -->
        <!-- <td>ideEvento:</td>
        <td>
            <input type="text" name="ideEvento" class="ideEvento" id="ideEvento"  />
        </td>
    </tr> -->
    <tr>
     <td>Original / Retificação:</td>
            <td>
                <select size="1" name="indRetif" id="indRetif" class="indRetif"  maxlength="1" required>
                    <option value="1">1 - Arquivo original</option>
                    <option value="2">2 - Arquivo de retificação</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Número do recibo do arquivo a ser retificado:</td>
            <td>
                <input type="text" name="nrRecibo" class="nrRecibo" value="" id="nrRecibo" maxlength="40" required />
            </td>
        </tr>
        <tr>
            <td>Período de apuração:</td>
            <td>
                <input type="text" name="indApuracao" class="indApuracao" value="Mensal" id="indApuracao"  maxlength="1" required/>
    
            </td>
        </tr>
        <tr>
            <td>Mês/ano:</td>
            <td>
                <input type="month" name="perApur" class="perApur" value="" id="perApur" maxlength="7" required />
    
            </td>
        </tr>
        <tr>
            <td>Identificação do ambiente:</td>
            <td>
                <select size="1" name="tpAmb" id="tpAmb" class="tpAmb"  maxlength="1" required>
                    <option value="1">1 - Produção</option>
                    <option value="2">2 - Produção restrita</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Processo de emissão do evento:</td>
            <td>
                <select size="1" name="procEmi" id="procEmi" class="procEmi" maxlength="1" required >
                    <option value="1">1- Aplicativo do empregador</option>
                    <option value="2">2 - Aplicativo governamental</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Versão:</td>
            <td>
                <input type="text" name="verProc" class="verProc" id="verProc" value="1.0" maxlength="20" required />
    
            </td>
        </tr>

<tr>
           <tr>
            <td>ideEmpregador</td>
            <td>
                <input type="text" name="ideEmpregador" class="ideEmpregador" id="ideEmpregador"/>
    
            </td>
        </tr>

        <tr>
            <td>Tipo de inscrição:</td>
            <td>
                <select size="1" name="tpInsc" id="tpInsc" class="tpInsc" maxlength="1" required>
                    <option value="1">1- CNPJ</option>
                    <option value="2">2 - CPF</option>
                    <option value="3">3 - CAEPF</option>
                    <option value="4">4 - CNO</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Número da Inscrição:</td>
            <td>
                <input type="text" name="nrInsc" class="nrInsc" id="nrInsc"  maxlength="15" required />
    
            </td>
        </tr>

         <td>remunAvNP:</td>
            <td>
                <input type="text" name="remunAvNP" class="remunAvNP" id="remunAvNP"  />
    
            </td>
        </tr>
        <tr>
            <td>Tipo de inscrição:</td>
            <td>
                <select size="1" name="tpInsc" id="tpInsc" class="tpInsc" maxlength="1" required>
                    <option value="1">1- CNPJ</option>
                    <option value="2">2 - CAEPF</option>
                    <option value="3">3 - CNO</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Número de inscrição do estabelecimento do contribuinte:</td>
            <td>
                <input type="text" name="nrInsc" class="nrInsc" id="nrInsc" maxlength="15" required />
    
            </td>
        </tr>
        <tr>
            <td>Código da Lotação:</td>
            <td>
                <input type="text" name="codLotacao" class="codLotacao" id="codLotacao" maxlength="30" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo contribuição previdenciária sobre a remuneração
                <br> dos trabalhadores avulsos não portuários R$:</td>
            <td>
                <input type="text" name="vrBcCp00" class="mask" id="vrBcCp00" maxlength="14" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo contribuição adicional para o financiamento dos benefícios de
                <br>aposentadoria especial após 15 anos de contribuição R$:</td>
            <td>
                <input type="text" name="vrBcCp15" class="mask" id="vrBcCp15" maxlength="14" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo contribuição adicional para o financiamento dos benefícios de
                <br>aposentadoria especial após 20 anos de contribuição R$:</td>
            <td>
                <input type="text" name="vrBcCp20" class="mask" id="vrBcCp20" maxlength="14" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo contribuição adicional para o financiamento dos benefícios de
                <br>aposentadoria especial após 25 anos de contribuição R$
            </td>
            <td>
                <input type="text" name="vrBcCp25" class="mask" id="vrBcCp25" maxlength="14" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo contribuição previdenciária sobre o 13° salário dos
                <br>trabalhadores avulsos não portuários contratados R$</td>
            <td>
                <input type="text" name="vrBcCp13" class="mask" id="vrBcCp13" maxlength="14" required />
    
            </td>
        </tr>
        <tr>
            <td>Valor da base de cálculo FGTS sobre a remuneração dos trabalhadores avulsos não portuários contratado R$:</td>
            <td>
                <input type="text" name="vrBcFgts" class="mask" id="vrBcFgts" maxlength="14" required />
    
            </td>
        </tr>
    
        <tr>
            <td>Valor total da contribuição descontada dos trabalhadores avulsos não portuários R$:</td>
            <td>
                <input type="text" name="vrDescCP" class="mask" id="vrDescCP"  maxlength="14" required/>
            </td>
        </tr>

        <tr>
            <td>
            <div id="plugin_usuarios_msg"></div>
            <div id="plugin_usuarios_carrega" style="display:none">Carregando...</div>
            
            
            <input type="submit" name="ok" class="bt_acao" value="Gerar XML"/>
            
            </td>
        </tr>
    
    </table>

    </form>

</body>
</html>

<?php
}
?>