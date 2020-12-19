<?php
  include"cdb.php";


    if(isset($_POST['clck']))
  {
    $celnum = ($_POST['value']);

    mysqli_query($conn,"UPDATE update_char SET cont_num   = '$celnum' WHERE id = 1 ");


   echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    }


if(isset($_POST['clck1']))
  {
    $head = ($_POST['value1']);

    mysqli_query($conn,"UPDATE update_char SET header   = '$head' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    
    }


 if(isset($_POST['clck2']))
  {
    $heads = ($_POST['value2']);

    mysqli_query($conn,"UPDATE update_char SET slider_title   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    }


     if(isset($_POST['clck3']))
  {
    $heads = ($_POST['value3']);

    mysqli_query($conn,"UPDATE update_char SET slider_firstcont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    }

     if(isset($_POST['clck4']))
  {
    $heads = ($_POST['value4']);

    mysqli_query($conn,"UPDATE update_char SET slider_secondcont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    }

     if(isset($_POST['clck5']))
  {
    $heads = ($_POST['value5']);

    mysqli_query($conn,"UPDATE update_char SET slider2_title   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
    }


                 if(isset($_POST['clck6']))
    {
        $heads = ($_POST['value6']);

        mysqli_query($conn,"UPDATE update_char SET slider2_firstcont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }




                 if(isset($_POST['clck7']))
    {
        $heads = ($_POST['value7']);

        mysqli_query($conn,"UPDATE update_char SET slider2_secondcont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        
    
    


                 if(isset($_POST['clck8']))
    {
        $heads = ($_POST['value8']);

        mysqli_query($conn,"UPDATE update_char SET slider3_title   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        

                 if(isset($_POST['clck9']))
    {
        $heads = ($_POST['value9']);

        mysqli_query($conn,"UPDATE update_char SET slider3_cont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        
        if(isset($_POST['clck10']))
    {
        $heads = ($_POST['value10']);

        mysqli_query($conn,"UPDATE update_char SET infobox   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        
        if(isset($_POST['clck11']))
    {
        $heads = ($_POST['value11']);

        mysqli_query($conn,"UPDATE update_char SET infobox_cont   = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        

         if(isset($_POST['clck12']))
    {
        $heads = ($_POST['value12']);

        mysqli_query($conn,"UPDATE update_char SET infobox2  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
               if(isset($_POST['clck13']))
    {
        $heads = ($_POST['value13']);

        mysqli_query($conn,"UPDATE update_char SET infobox2_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck14']))
    {
        $heads = ($_POST['value14']);

        mysqli_query($conn,"UPDATE update_char SET infobox3  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck15']))
    {
        $heads = ($_POST['value15']);

        mysqli_query($conn,"UPDATE update_char SET infobox3_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
         if(isset($_POST['clck16']))
    {
        $heads = ($_POST['value16']);

        mysqli_query($conn,"UPDATE update_char SET serve_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        if(isset($_POST['clck17']))
    {
        $heads = ($_POST['value17']);

        mysqli_query($conn,"UPDATE update_char SET serve_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck18']))
    {
        $heads = ($_POST['value18']);

        mysqli_query($conn,"UPDATE update_char SET serve2_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        if(isset($_POST['clck19']))
    {
        $heads = ($_POST['value19']);

        mysqli_query($conn,"UPDATE update_char SET serve2_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
  
        if(isset($_POST['clck20']))
    {
        $heads = ($_POST['value20']);

        mysqli_query($conn,"UPDATE update_char SET serve3_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        

                if(isset($_POST['clck21']))
    {
        $heads = ($_POST['value21']);

        mysqli_query($conn,"UPDATE update_char SET serve3_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

           if(isset($_POST['clck22']))
    {
        $heads = ($_POST['value22']);

        mysqli_query($conn,"UPDATE update_char SET serve4_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


     if(isset($_POST['clck23']))
    {
        $heads = ($_POST['value23']);

        mysqli_query($conn,"UPDATE update_char SET serve4_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


        if(isset($_POST['clck24']))
    {
        $heads = ($_POST['value24']);

        mysqli_query($conn,"UPDATE update_char SET serve5_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


        if(isset($_POST['clck25']))
    {
        $heads = ($_POST['value25']);

        mysqli_query($conn,"UPDATE update_char SET serve5_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


        if(isset($_POST['clck26']))
    {
        $heads = ($_POST['value26']);

        mysqli_query($conn,"UPDATE update_char SET serve6_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


if(isset($_POST['clck27']))
    {
        $heads = ($_POST['value27']);

        mysqli_query($conn,"UPDATE update_char SET serve6_cont  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck28']))
    {
        $heads = ($_POST['value28']);

        mysqli_query($conn,"UPDATE update_char SET doc_name  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


        if(isset($_POST['clck29']))
    {
        $heads = ($_POST['value29']);

        mysqli_query($conn,"UPDATE update_char SET doc_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck30']))
    {
        $heads = ($_POST['value30']);

        mysqli_query($conn,"UPDATE update_char SET doc2_name  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck31']))
    {
        $heads = ($_POST['value31']);

        mysqli_query($conn,"UPDATE update_char SET doc2_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

if(isset($_POST['clck32']))
    {
        $heads = ($_POST['value32']);

        mysqli_query($conn,"UPDATE update_char SET doc3_name  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck33']))
    {
        $heads = ($_POST['value33']);

        mysqli_query($conn,"UPDATE update_char SET doc3_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

 if(isset($_POST['clck34']))
    {
        $heads = ($_POST['value34']);

        mysqli_query($conn,"UPDATE update_char SET doc4_name  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        if(isset($_POST['clck35']))
    {
        $heads = ($_POST['value35']);

        mysqli_query($conn,"UPDATE update_char SET doc4_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


if(isset($_POST['clck36']))
    {
        $heads = ($_POST['value36']);

        mysqli_query($conn,"UPDATE update_char SET doc5_name  = '$heads' WHERE id = 1 ");


   echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

        if(isset($_POST['clck37']))
    {
        $heads = ($_POST['value37']);

        mysqli_query($conn,"UPDATE update_char SET doc5_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }

if(isset($_POST['clck38']))
    {
        $heads = ($_POST['value38']);

        mysqli_query($conn,"UPDATE update_char SET doc6_name  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }


if(isset($_POST['clck39']))
    {
        $heads = ($_POST['value39']);

        mysqli_query($conn,"UPDATE update_char SET doc6_title  = '$heads' WHERE id = 1 ");


    echo  "<script>alert('Record updated successfully!');
    window.location.href='HomeUpdate.php';</script>";
        }
        
        
       

?>