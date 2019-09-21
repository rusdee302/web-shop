<?php

require_once('library/tcpdf.php');
 include_once('connect.php');

$pdf=ob_start();
require_once('library/tcpdf.php');
// สร้าง Class ใหม่ขึ้นมา กำหนดให้สืบทอดจาก Class ของ TCPDF
class MindphpTCPDF extends TCPDF
{
    // สร้าง function ชื่อ Header สำหรับปรับแต่งการแสดงผลในส่วนหัวของเอกสาร
    public function Header()
    {
        // สร้างคำสั่ง HTML ในตัวอย่างนี้ สร้างตาราง 2 คอลัมน์ 
        // คอลัมน์แรก สำหรับแสดงรูปภาพ คำสั่ง HTML แสดงรูปภาพและต้องใช้ URL แบบเต็ม
        // คอลัมน์ที่สอง สำหรับแสดงข้อความ

       
        $html = '<table><tr>'
            . '<td width="70"><img src="img/logo.png" width="60" /></td>'
            . '<td width="400" align="center"></td></tr>'
            . '</table><hr />';
        $this->writeHTMLCell('', '', '', '', $html);
    }

    // สร้าง function ชื่อ Footer สำหรับปรับแต่งการแสดงผลในส่วนท้ายของเอกสาร
    public function Footer()
    {
        // กำหนดตำแหน่งที่จะแสดงรูปภาพและข้อความ 15mm นับจากท้ายเอกสาร
        $this->SetY(-15);
        // คำสั่งสำหรับแทรกรูปภาพ กำหนดที่อยู่ไฟล์รูปภาพในเครื่องของเรา
        $this->Image('tcpdf_logo.png');
        
        // สำหรับตัวอักษรที่จะใช้คือ helvetica เป็นตัวหนา และขนาดอักษรคือ 10
        $this->SetFont('helvetica', 'B', 10);
        // คำสั่งสำหรับแสดงข้อความ โดยกำหนด ความกว้าง และ ความสูงของข้อความได้ใน 2 ช่องแรก
        // ช่องที่ 3 คือข้อความที่แสดง ส่วนค่า C คือ กำหนดให้แสดงข้อความตรงกลาง
        $this->Cell('', '', 'By Mindphp.com', 0, false, 'C');
        
        // สำหรับตัวอักษรที่จะใช้คือ helvetica เป็นตัวเอียง และขนาดอักษรคือ 8
        $this->SetFont('helvetica', 'I', 8);
        // คำสั่งสำหรับแสดงข้อความ โดยกำหนด ความกว้าง และ ความสูงของข้อความได้ใน 2 ช่องแรก
        // ช่องที่ 3 คือข้อความที่แสดง $this->getAliasNumPage() คือ หมายเลขหน้าปัจจุบัน และ $this->getAliasNbPages() จำนวนหน้าทั้งหมด
        // ส่วนค่า R คือ กำหนดให้แสดงข้อความชิดขวา
        $this->Cell('', '', 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'R');
    }
}

$pdf = new MindphpTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

$pdf->SetCreator('Mindphp');
$pdf->SetAuthor('Mindphp Developer');
$pdf->SetTitle('Mindphp Example 03');
$pdf->SetSubject('Mindphp Example');
$pdf->SetKeywords('Mindphp, TCPDF, PDF, example, guide');


// กำหนดรูปแบบตัวอักษรให้กับส่วนหัวของเอกสาร 
// freeserif = ชื่อตัวอักษร
// B = กำหนดให้เป็นตัวหนา
// 12 = ขนาดตัวอักษร
$pdf->setHeaderFont(array('angsanaupc', 'B', 12));


$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->AddPage();

// กำหนดรูปแบบตัวอักษรให้กับเนื้อหา
$pdf->SetFont('angsanaupc', '', 14);

// การใช้คำสั่ง Cell()

session_start();
      $mname=$_SESSION['mname'];
      $id_member=$_SESSION['mid'];
      $id_order=$_SESSION['id_order'];
      $date_order=$_SESSION['date_order'];

$html = '';

 $html .= '';

                    $html .= '<table border="0" cellspacing="0" cellpadding="4">  ';
         $html .= '  <tr> '; 
        
        $html .= '   <th width="100%"><h1 align="center"><img src="img/logo.png" width="300%" height="200%"></h1></th>' ; 
                
        $html .= '</tr>';   



$sql = "SELECT * FROM `member`  WHERE id_member='$id_member' ";
           $result = $con->query($sql);

           
            if($result->num_rows > 0)
            {
              
              while($row = $result->fetch_assoc())
              {
               
                $name_member = $row["name_member"];
                $lastname_member = $row["lastname_member"];
                $phone_member = $row["phone_member"];
                $address_member = $row["address_member"];
                $email_member = $row["email_member"];
              
              
               

         
              
               $html .= '';

                    $html .= '<table border="0" cellspacing="0" cellpadding="4">  ';
         $html .= '  <tr> '; 
         $html .= '  <th width="70%"><b>ชื่อลูกค้า : '.$name_member.'<br>ที่อยู่ : '.$address_member.'<br>เบอร์โทร : '.$phone_member.'<br>email : '.$email_member.'<br></b></th> ';
   
        $html .= '   <th width="30%"><b align="right"><br><br>เลขที่บิล :'.$id_order.'<br>วันที่ออกบิล :'.$date_order.'</b></th>' ; 
                
        $html .= '</tr>';  


            $html .= '</table>';
               
               } 

         }



         $html .= '<table width="100%" cellspacing="2" bgcolor="#CCCCCC">  ';
         $html .= '  <tr> '; 
         $html .= '  <th width="50%" bgcolor="#99CCFF"><h4 align="center">สินค้า</h4></th> ';
         $html .= '  <th width="10%" bgcolor="#99CCFF"><h4 align="center">ราคา</h4></th> '; 
         $html .= '  <th width="10%" bgcolor="#99CCFF"><h4 align="center">จำนวน</h4></th>'; 
         $html .= '   <th width="30%" bgcolor="#99CCFF"><h4 align="center">ราคารวม</h4></th>' ; 
                
        $html .= '</tr>';
      

       
        mysqli_query($con, "SET NAMES UTF8");
         $sql = "SELECT * FROM `detail_bill` INNER JOIN product ON detail_bill.id_product=product.id_product WHERE id_member='$id_member' ";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {     

     
                      
                 $html .= ' <tr bgcolor="#FFFFFF"> '; 

                      $html .= '    <td width="50%">&nbsp;&nbsp;'.$row["name_product"].'</td>' ;
                      $html .= '     <td align="center" width="10%">&nbsp;&nbsp;'.$row["price_product"].'</td>';
                      $html .= '    <td align="center" width="10%">&nbsp;&nbsp;'.$row["qty_product"].'</td>' ;
                      $html .= '    <td align="center" width="30%">&nbsp;&nbsp;'.$row["amounts"].'</td>';
                          

 
                    $html .= ' </tr> ';
                         
      } 

  

        $sql = "SELECT sum(qty_product) as qty_product  FROM `detail_bill`  WHERE id_member='$id_member' ";
           $result = $con->query($sql);

           
            if($result->num_rows > 0)
            {
              
              while($row = $result->fetch_assoc())
              {
               
                $qty_product = $row["qty_product"];
              
            

               
                 //   $html .= '<b>สรุปยอด</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
              
                 // $html .= 'จำนวนสินค้า : '.$qty_product.'  <br>';
                  $_SESSION['qty_product'] = $row['qty_product'];
                  $qty=$_SESSION['qty_product'];

         
               
               } 

         }

      $sql = "SELECT * FROM `bill_product`  WHERE id_member='$id_member' and id_order='$id_order'";
           $result = $con->query($sql);

           
            if($result->num_rows > 0)
            {
              
              while($row = $result->fetch_assoc())
              {
               
                $id_oeder = $row["id_order"];
                $shipping = $row["shipping"];
                $total_price = $row["total_price"];
                $date_order = $row["date_order"];

                $summ=$shipping + $total_price;

               
                 
                 // $html .= 'ยอดรวมสินค้าที่ซื้อ : '.$total_price.'  <br>';
                 //    $html .= 'ค่าจัดส่ง : '.$shipping.'  <br>';

                 //     $html .= 'ยอดรวมทั้งหมด : '.$summ.'  <br>';
                 // $html .= '<h5 width="1000" align="left">เลขที่ใบสร็จ : '.$id_oeder.'</h5><br>';

               
         $html .= '  <tr bgcolor="#EAF4FF"> '; 
         $html .= '  <th width="60%"><b>&nbsp;&nbsp;สรุปยอด</b><br><b>&nbsp;&nbsp;ราคารวมพร้อมค่าจัดส่ง (ราคาจัดส่ง '. $shipping .' บาท )</b></th> ';
         
         $html .= '  <th width="10%"><b align="center">'.$qty.'</b></th>'; 
        $html .= '   <th width="30%"><b align="center">'.$total_price.'</b><br><hr><b align="center">'.$summ.'</b></th>' ; 
                
        $html .= '</tr>';
      
       
               } 

         }

          
           $html .= '</table>';



          // $sql = "SELECT * FROM `detail_bill` INNER JOIN product ON detail_bill.id_product=product.id_product WHERE id_member='$id_member' order by name_product";
          //   $result = $con->query($sql);
            
          //   if($result->num_rows > 0)
          //   {
          //     while($row = $result->fetch_assoc())
          //     {
          //       $name_product = $row['name_product'];
          //       $price_product = $row['price_product'];
          //       $amounts = $row['amounts'];
          //       $img_product = $row['img_product'];

          
          //       $mpdf = new mPDF();

          //                           $html .= '<tr>'
                                      
          //                             $html .= '<td><img src="images/product/'.$img_product.'" height="50" width="50"></td>'
          //                             $html .= '<td>'.$name_product.'</td>'
          //                             $html .= '<td>'.$price_product.'</td>';
          //                              $html .=  '</td>'.$amounts. '</td>';
                                      
                                   
                               
                    
          //                           $html .= '</tr>';
  
          //    } 

          //  }



// $html .= '<table border="1" width="720" cellpadding="10"><tr>';




  
  

// $html .= '<td>';
// $html .= '<b>PHP ยินดีต้อนรับสู่ MIND PHP.COM</b>';


// $html .= '</td>';
// $html .= '</tr></table>';
// การใช้คำสั่ง writeHTML()
  

$pdf->writeHTML($html);

// การใช้คำสั่ง writeHTMLCell()
// $pdf->writeHTMLCell(50, '', '', 150, 'writeHTMLCell()<br /><img src="http://www.mindphp.com/images/info/mindphp.png" width="150" />', 1);
// $pdf->writeHTMLCell(50, '', 145, 150, 'writeHTMLCell()<br /><img src="http://www.mindphp.com/images/info/mindphp.png" width="150" />', 1);
// $pdf->writeHTMLCell(50, '', 80, 200, 'writeHTMLCell()<br /><img src="http://www.mindphp.com/images/info/mindphp.png" width="150" />', 1);

$pdf->Output('mindphp04.pdf', 'I'); 