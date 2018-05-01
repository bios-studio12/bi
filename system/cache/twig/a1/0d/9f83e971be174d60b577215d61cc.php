<?php

/* cetaksp.php */
class __TwigTemplate_a10d9f83e971be174d60b577215d61cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
ob_start();
?>
<!-- Favicon -->
    
<style type=\"text/Css\">
<!--
.test1
{
    border: solid 1px #FF0000;
    background: #FFFFFF;
    border-collapse: collapse;
}
div.special { margin: auto; width:95%; border:1px solid #000000; padding: 2px; }
div.special table { width:100%; border:1px solid #000000; font-size:10px; border-collapse:collapse; }
.topLeftRight     { border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;}
.topLeftBottom    { border-top:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000; }
.topLeft          { border-top:1px solid #000; border-left:1px solid #000; }
.bottomLeft       { border-bottom:1px solid #000; border-left:1px solid #000; }
.topRight         { border-top:1px solid #000; border-right:1px solid #000; }
.bottomRight      { border-bottom:1px solid #000; border-right:1px solid #000; }
.topRightBottom   { border-top:1px solid #000; border-bottom:1px solid #000; border-right:1px solid #000; }
.over  { text-decoration: overline; }
-->
</style>
    <table>
        <tr>
            <th rowspan=\"2\"><img src=\"<?php echo base_url().'assets/img/favicon.jpg';?>\" style=\"width: 50px\"></th>
            
        </tr>
        <th align=\"justify\"><?php echo \$data[0]->NamaApotik ?></th>
        
        <tr>
            <th><?php echo \$data[0]->Alamat ?></th>
            <th></th>
            <th></th>
        </tr>
        </table><hr>
    <table cellspacing=\"0\" style=\"width: 100%;\">
        <tr>
            <td>
                <table cellspacing=\"0\" style=\"width: 100%; border: solid 0px #000000; \">
                    <tr>
                        <td width=\"100%\" colspan=\"2\" align=\"center\">
                            <span style=\"font-size: 15pt; font-weight: bold;\">Surat Pesanan<br></span>
                        </td>                        
                    </tr>
                    <tr>
                        <td style=\"width: 70%; font-size: 10pt;\">                            
                            <b>No.Pesanan: <?php echo \$data[0]->NoSP?></b><br>
                            <b>Tanggal: <?php echo \$data[0]->TglOrder ?></b><br>
                            <b>Salesman: <?php echo \$data[0]->Salesman ?></b><br>
                            <br>
                           
                        </td>
                        <td style=\"width: 30%; font-size: 8pt; border: solid 0px #000000;\">
                            
                            <b>Kepada Yth:</b><br>
                            <b><?php echo \$data[0]->NamaPelanggan ?></b><br>
                            <b><?php echo \$data[0]->Alamat ?></b><br>
                        </td>
                    </tr>
                </table>
               
            </td>
            
        </tr>
        <tr>
            <td style=\"width:0%;\">
                <table cellspacing=\"0\" style=\"padding: 1px; width: 100%; border: solid 2px #000000; font-size: 11pt; \">

                    <tr>
                        <th style=\"width: 5%; border: solid 1px #000000; background: gray; color: black;\">No.</th>
                        <th style=\"width: 27%; border: solid 1px #000000; background: gray; color: black;\">No.Order</th>
                        <th style=\"width: 13%; border: solid 1px #000000; background: gray; color: black;\">Kode Barang</th>
                        <th style=\"width: 27%; border: solid 1px #000000; background: gray; color: black;\">Nama Barang</th>
                        <th style=\"width: 10%; border: solid 1px #000000; background: gray; color: black;\">Satuan</th>
                        <th style=\"width: 5%; border: solid 1px #000000; background: gray; color: black;\">Qty</th>
                        <th style=\"width: 13%; border: solid 1px #000000; background: gray; color: black;\">Value</th>
                    </tr>
                    <?php 
                    \$i = 1;
                    \$total = 0;
                     foreach (\$data as \$row)  { 
                    \$total =  \$total + \$row->Total;


                   ?>
                    <tr>
                        <td style=\"width: 5%; border: solid 1px #000000;\"><?php echo \$i ?></td>
                        <td style=\"width: 27%; border: solid 1px #000000;\"><?php echo \$row->NoOrder ?></td>
                        <td style=\"width: 13%; border: solid 1px #000000;\"><?php echo \$row->KodeProduk ?></td>
                        <td style=\"width: 27%; border: solid 1px #000000;\"><?php echo \$row->NamaProduk ?></td>
                        <td style=\"width: 10%; border: solid 1px #000000;\"><?php echo \$row->Satuan ?></td>
                        <td style=\"width: 5%; border: solid 1px #000000;\"><?php echo \$row->Qty ?></td>
                        <td style=\"width: 13%; border: solid 1px #000000; text-align: right;\"><?php echo number_format(\$row->Total) ?></td>
                    </tr>
                    <?php \$i++; } ?>
                </table>
                <div align=\"right\">
                    <?php echo \"<b>Total:\".number_format(\$total).\"</b>\"?>
                </div>
                <br>
                <table cellspacing=\"0\" style=\"width: 100%;  text-align: center; font-size: 10pt\">
                    <tr>
                        
                        <td style=\"width: 30%\">Penerima Pesanan,<br>Penanggung Jawab</td>
                        <td style=\"width: 40%\">Pemesanan,<br>Apoteker Penanggung Jawab</td>
                        <td style=\"width: 30%\">Mengetahui,<br>Penanggung Jawab</td>
                    </tr>
                    <tr>
                        <td style=\"width: 30%\"><br><br><br><br><br><p class=\"over\" width=\"50%\">      Cap & Nama      </p></td>
                        <td style=\"width: 40%\"><br><br><br><br><br><p class=\"over\" width=\"50%\">      Cap & Nama      </p></td>
                        <td style=\"width: 30%\"><br><br><br><br><br><p class=\"over\" width=\"50%\">      Cap & Nama      </p></td>
                    </tr>
                   
                </table>
            </td>
            
            <td style=\"width: 4%\"></td>
        </tr>
    </table>
<?php
\$filename=\"berita.pdf\"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
\$content = ob_get_clean();
ob_end_clean();
    require_once(getcwd().'/assets/3rdparty/html2pdf/html2pdf.class.php');
    try
    {
        \$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
        \$html2pdf->setDefaultFont('Arial');
        \$html2pdf->writeHTML(\$content);
        \$html2pdf->Output(\$filename);
    }
    catch(HTML2PDF_exception \$e) { echo \$e; }
?>";
    }

    public function getTemplateName()
    {
        return "cetaksp.php";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
