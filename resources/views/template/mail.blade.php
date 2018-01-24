<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Alvenaria Estrutural</title>
    
        <style type="text/css">
            /* Client-specific Styles */
            #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
            body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
            body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */
    
            /* Reset Styles */
            body{margin:0; padding:0;}
            img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
            table td{border-collapse:collapse;}
            #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
    
            /* Template Styles */
    
            /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */
    
            /**
            * @tab Page
                * @info background color
                * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
                * @theme page
                */
            body, #backgroundTable{
                /*@editable*/ background-color:#EEEEEE;
            }
    
            /**
            * @tab Page
                * @info email border
                * @tip Set the border for your email.
                */
            #templateContainer{
                /*@editable*/ border: 1px solid #BBBBBB;
            }
    
            /**
            * @tab Page
                * @info heading 1
                * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
                * @style heading 1
                */
            h1, .h1{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:34px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }
    
            /**
            * @tab Page
                * @info heading 2
                * @tip Set the styling for all second-level headings in your emails.
                * @style heading 2
                */
            h2, .h2{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:30px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }
    
            /**
            * @tab Page
                * @info heading 3
                * @tip Set the styling for all third-level headings in your emails.
                * @style heading 3
                */
            h3, .h3{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:26px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }
    
            /**
            * @tab Page
                * @info heading 4
                * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
                * @style heading 4
                */
            h4, .h4{
                /*@editable*/ color:#202020;
                display:block;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:22px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }
    
            /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */
    
            /**
            * @tab Header
                * @info header style
                * @tip Set the background color and border for your email's header area.
                * @theme header
                */
            #templateHeader{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border-bottom:0;
            }
    
            /**
            * @tab Header
                * @info header text
                * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
                */
            .headerContent{
                /*@editable*/ color:#202020;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:34px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                /*@editable*/ padding:20px;
                /*@editable*/ text-align:center;
                /*@editable*/ vertical-align:middle;
                /*@editable*/ background-color: #34495e;
            }
    
            /**
            * @tab Header
                * @info header link
                * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
                */
            .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#03a9f4;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }
    
            #headerImage{
                height:auto;
                max-width:600px !important;
            }
    
            /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */
    
            /**
            * @tab Body
                * @info body style
                * @tip Set the background color for your email's body area.
                */
            #templateContainer, .bodyContent{
                /*@editable*/ background-color:#FFFFFF;
            }
    
            /**
            * @tab Body
                * @info body text
                * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
                * @theme main
                */
            .bodyContent div{
                /*@editable*/ color:#505050;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:14px;
                /*@editable*/ line-height:150%;
                /*@editable*/ text-align:left;
            }
    
            /**
            * @tab Body
                * @info body link
                * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
                */
            .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#03a9f4;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }
    
            /**
            * @tab Body
                * @info data table style
                * @tip Set the background color and border for your email's data table.
                */
            .templateDataTable{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border:1px solid #DDDDDD;
            }
    
            /**
            * @tab Body
                * @info data table heading text
                * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
                */
            .dataTableHeading{
                /*@editable*/ background-color:#dceffc;
                /*@editable*/ color:#03a9f4;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:14px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:150%;
                /*@editable*/ text-align:left;
                /*@editable*/ border-left:1px solid #DDDDDD;
            }
    
            /**
            * @tab Body
                * @info data table heading link
                * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
                */
            .dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#FFFFFF;
                /*@editable*/ font-weight:bold;
                /*@editable*/ text-decoration:underline;
            }
    
            /**
            * @tab Body
                * @info data table text
                * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
                */
            .dataTableContent{
                /*@editable*/ color:#202020;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:12px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:150%;
                /*@editable*/ text-align:left;
                /*@editable*/ border-top:1px solid #DDDDDD;
                /*@editable*/ border-left:1px solid #DDDDDD;
            }
    
            .dataTableHeading:first-child, .dataTableContent:first-child {
                /*@editable*/ border-left:0;
            }
    
            /**
            * @tab Body
                * @info data table link
                * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
                */
            .dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#202020;
                /*@editable*/ font-weight:bold;
                /*@editable*/ text-decoration:underline;
            }
    
            /**
            * @tab Body
                * @info button style
                * @tip Set the styling for your email's button. Choose a style that draws attention.
                */
            .templateButton{
                /*@editable*/ background-color:#03a9f4;
                /*@editable*/ border:0;
                border-collapse:separate !important;
                border-bottom: 4px solid #0288d1;
            }
    
            /**
            * @tab Body
                * @info button style
                * @tip Set the styling for your email's button. Choose a style that draws attention.
                */
            .templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#FFFFFF;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:15px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ letter-spacing:-.5px;
                /*@editable*/ line-height:100%;
                text-align:center;
                text-decoration:none;
            }
    
            .bodyContent img{
                display:inline;
                height:auto;
            }
    
            /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */
    
            /**
            * @tab Footer
                * @info footer style
                * @tip Set the background color and top border for your email's footer area.
                * @theme footer
                */
            #templateFooter{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border-top:0;
            }
    
            /**
            * @tab Footer
                * @info footer text
                * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
                * @theme footer
                */
            .footerContent div{
                /*@editable*/ color:#707070;
                /*@editable*/ font-family:Arial;
                /*@editable*/ font-size:12px;
                /*@editable*/ line-height:125%;
                /*@editable*/ text-align:center;
            }
    
            /**
            * @tab Footer
                * @info footer link
                * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
                */
            .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#03a9f4;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:underline;
            }
    
            .footerContent img{
                display:inline;
            }
    
            /**
            * @tab Footer
                * @info utility bar style
                * @tip Set the background color and border for your email's footer utility bar.
                * @theme footer
                */
            #utility{
                /*@editable*/ background-color:#FFFFFF;
                /*@editable*/ border:0;
            }
    
            /**
            * @tab Footer
                * @info utility bar style
                * @tip Set the background color and border for your email's footer utility bar.
                */
            #utility div{
                /*@editable*/ text-align:center;
            }
    
            #monkeyRewards img{
                max-width:190px;
            }
        </style>
    </head>
    
    <body>
        <center>
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
                <tr>
                    <td align="center" valign="top" style="padding-top:20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="800" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="800" id="templateHeader">
                                        <tr>
                                            <td class="headerContent">
    
                                                <!-- // Begin Module: Standard Header Image \\ -->
                                                <img src="data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%C6%00%00%00-%08%06%00%00%00%F5%18%14%1C%00%00%00%06bKGD%00%FF%00%FF%00%FF%A0%BD%A7%93%00%00%00%09pHYs%00%00%0B%13%00%00%0B%13%01%00%9A%9C%18%00%00%00%07tIME%07%DF%09%11%0E02%D7%06%1C%A8%00%00%08%A8IDATx%DA%ED%5D%3DW%DBH%14%BD%C3q%E1.%DE%CE%27n%14%A7%A1%8B%B6K%17%D3%A5%8B%D3%A5%B3%E9%D2%01%BF%00%F8%05%D8%5D%3A%9C.%1DNG%87%E9%E8V%DB%B9%C1Q%C3%1Ew%D1v%EE%DE%16~%82%E1y%24%8D%84%B1%25v%EE9%3E%80-%0D%A3%99w%DF%D7%BC%19%03%0E%0E%0E%0E%0E%0E%0E%0E%0E%05%A1%D6%D5%10%11%91%F6g%04%20%00p%0D%60%A2%94%9A%B8%A1v%F8_%82%D2%F1%9B%88%CE%88%C8s%23%E5%F0%A2-%C6%5D%BB%ED%01%F0%F9%85%D7%B7%B7%C7%96%B7%8E%00%9C%2A%A5B7%FC%0E%2F%82%18w%EDv%07%40%0F%40%07%C0%23%ED%FF%FA%F66OS%11%93c%E0%A6%C0%A1%B2%C4%60B%1C3%21%8C%C8I%8C%18c%00%FBJ%A9%C8M%85C%99P%B3p%97%CE%D3%08%F1Dt%01xD%B4%E7%C8%E1P%26%ECdX%89%BF%9E%91%141%7C%00WD%D4p%D3%E1Pjb%DC%B5%DB%7D%00W%006%25%AC%8E%1C%0E%E5v%A5%98%14%E7%5B%E8%8B%0F%E0%0C%C0~%91%9B%89%C8g%D7L%C7%C0%B9h%D6c%97W%29-%00%CC%01%E0%25f%18k%82%14%FE%96H%11%A3OD%3F%95R%E3%02%F7%1E%1B%88%11%01p%99%2F%3B%A5%E4%3D%81X%60%92%84%00n%5E%822R%1A%29%1A%1CS%14%1A%A0%82Y%29%13%22%00o%F2%0C.%2F%1C%FE2%7C%14%2A%A5%DE8%B9%CF%1C%BF%FES%88a%40%80e%C5Ce%09R%13%1A%D7%2BA%9F%1A%00%0E%01%9C%E4%B4%16%26xD%D4-h%816%25%94%1E%80%03%00%7F%2B%A5F%5B%EAF%C0%DA%3EFG%28%AA%20%E1%BE%3A%CBL%D3%60%81v%89h%AC%94%9AV%D6bpZ%F6%D7S%1AZ%A3%C5%00%80H%29%F5%87%A5%605%B8%EFI%3E%F2D%29%B5WRB%5C%B0%10%01%CB%05%CF%93%92%F4%EDDX%DD%91%C5%1C%F80g0%C7J%A9%A0j%C4%D8%C9%D0%B8%5B%B3%1Al%DEmp%28Hq%C4Z%EE%5E%FB%95%B4F%CB%D3HQm%7F%5C%A9%88%0BE%BF%89%B1%07%80.%115%2BG%0C%8E-%FA%25%EC%DB%27%CB%EBzB%BB%0D%B0%AC%C7%B2q%B5%1C%D6K%909%93c%21%3E%FAXE%8B%D1-i%DF2%FBe%08%1A%BF%F3%CF%A1%B8%B4%EF%D6H6F%8E%05%80%1F%86X%AF%14V%9B%88%1AD%E4e%C9C%0D%C0%87%12%07%A6%9D%8C%BD%1C%07%E2%EF%01ONHDcA.%AB%80%9E%88%AE%12%3E%FAn%F2%B5%99%9C%3D%9B%7B%88%E8Ls%9F%E4%C4%F4%88%C84%17Gi%3E%3A%AFA%1C%C0P%D8%19%C7X%AC0%C6%9B%CA%12%F1%F8%87%A2%3F%EFE%80oz%96%5D%3C%A4%8E%EB%E2%E3%05%80%29%80i%9E%80%9E%88%EAx%A8%02o%8A%CF%E26o%94Rs%CD%7D%9F%D7J%EE%E7%FA%3C%B1F%D2%88%BE%8F%C4%C4%0F%051z%B0%CBtu%12%DE%BFN%89%15l%EF%F1S%AE%F5%12%04%BB%91%12%F0%9E%5BX%D6%0E%BF%CE%88h%7F%83%19%BA%1B%F1%3C%5E%8A%F06%F99%D2b%91%7B%01g%D2%5D%B2%EB%96E%B4%AE%81d%A66%C7z%1FwJN%8C%86el%01%00%A7BkM%F08%CD%E8%E5%08%E8K%0D%26%C5%95%81%14%21%2B%92%81A%A14%00%5Clj%0C%0CZ%BDn%0A%C2%F9%BD%BE%81%14s%9E%BF%80%7F%97J%A4%9F%16%D4%B3%25%FDb%20E%C8mNE%BB%5D%E9J%95%19%EF%12%1E%DA%13%09%83IBY%C2%10%8FW%F2%7B%86%C0%5CN%A8%D2%FE%0FY%08%C0%89n%89%D2%EE%D1%D3%C6l%F1t%B7-O%BA%F6B%28%B4%80%5D%AE%89%81%40%87%22%F9pND%E1%86%B6%1BKw%AAn%E8__%BC%3Fek%10%19%AE%EDj%ED%D5%99%1C%03%8EkL%16%08b%8C.%0D%D7z%9C%1Ch%CA%E0%BB%CChX%C6%16%C3%04A%1Ca5u%5B%E9%14%29k%FC%8E%10%BE%3D%93%A0s%1A%F5%04%AB%F5g%DB%2A%FBi%1A%DC%3C%9D%14%81R%EA%87%29%16%E2g%191qt%A2%99%5CS%99%05%0B%94RcI%8A8%1Ebe%19%3D%8B%C5%F8%E7%ED%DBu%0E%E0ik6%3BIq%23tk%11f%F8%CDC%A11%0FP%B0P%B1%24%90J%21s%A3%97RjDD%3DM%88%B6U%11P7%04%C5zp%7Di%D1%C6%98%AD%60%5D%8B%DB.%85%B5%D0%ADT%94%F5%9CJ%A9%05%11Mt%2B%B3SA%C1%E8%0BKr%9Aq%BDt%9D%FAU%3D%94%81%FB%ED%0BMh%EB%12I%AB%BA%EDl%E4%AEA%AB%2F%2C%5C%D7%85%B4%1Ab%3E%3DC%12%C0%06%D3%2A%C4%18Q%0E%8D%F9N%940%D8%F8%BA%7D%E4%AB%C5%2A%0B%E4%A4%E7%89%13%E4%B5%DBp%29%C3%1479OM%D5T%F4%DF%D3%DA%F6%0CA%BCM%B2%20%B6%1A%00%10%D5x%C0%3A%25%13%80%20%C5%BF%96%0F~X%D0%1D%A9%221%A40%FF%9B%23K%14%89%BC%C0%26%16%3C%9B9H%BE%C8%D1%EE%C2%C6%5D%D3b%08%DB1%9A%E8%AE%D4u%D9f%BF5%9B%25i%C2%DE%BA%82%FA%8A%A6n%1B%29%1A8%AF%D5xV%8B%C1%BE%BE%B5%90f%ADIl%1A5%0Ef%CATK4N%18%E8%8E%B0l%13%8B%F8Bf%40d%10%3E%AA%181%A2%0C%ADk3%06%A9Vy%8Dx%9F%C7%A5%21%A2f%99%C8Qk%CDf%C1%5D%BB%1D%A2%1C%7B1%80%87z%A7%2Ckq%9A3%17%3F%21%A2%03M%EB%FA%16%25%27e%83%14%E6W94x%23G%1C%F7Tk%D10X%A4%C0%40%14%2F%C9%05%CA%40%DD%D6%CD%22%22%AF%C8%D6%DB8%2BuZ%92%89%0F%5B%B3%D98%21%1B%D3%2F%98%8D%D11z%82k%F6%CAB%20%9E%3B%A0%0DS%2C%40%1Ek%F1%DC%16%E3%8BAX%83%0C%0B%B2%9B%A3%FD%DD%94%B6%E69%E2%9CGd%26%A2N%FC%DAa%9F~T%C0_%7D%0E%9C%A6%04%CB%3A%86k%B2FyR%B76B%BF%B6Je%22%EA%13%D1%15%BF%7C%CDG%D7%05%CCg%17%D36%E1%A0c%ED%B1%25%11%D5%89%E8%8BA%18%27%86T%AC%947%9F%D762%FF%87%81%18z%5B%D3%0C%97.%CD%F5%8B%DD%F5%8E%BE%8Eq%B4eRL%98%A0%26%B3%AC%5B%8B%A8%E8%16P%AER%0D2%04%26I%AB%FAi%A5%CA%DA%16%D5u%A1%A7MT%23E%29%9Cg%95P%13%D1%A1%B0%18%E1%BA%17%F7%98%BC_a%5E%9F%B81%CCE%84%D5U%EC%8F%96%CAG%AE%96%2FD%10%1F%8ADK%D7%22Q%A0%2B%BEiM%CB%04%8D%EF%DA%ED%11%B6%B3i%29%82%B6%1A%CDB%E6i.%40C%C4%0A%1D10Q%C6%83%CB%A0%DD%17V%E3%A76%B0%13A%0C%BDL%DCx%BC%0F%0B%C5%05%F2%A5%40%C3%24W%CD%E0%A3%07Z%FFF%1C%2B%F9Z%00~ED%B6%B5R%2BJ%D0%94A%D2%056%C5%AA%C6%7B%BEw%13%9E%3D%C8%20%E0%25%1E%97%98%C7V%C3%A6V%2Av%D1.%13%DA%FD%2A%94%1A%60%AE%952U%E0%DE%3C%3A%BB%96w%F3%5Da%F3%8B%3F%9F%F5%D8%82%17%ECl3e%7BY%F1%86M1%A0%26xJ%10%EA%CA%20%D0%BAK%F6Ns%A1FH.C_%D9%7BND%BF%85%40%0D%B0%5C%9B%E8i%02%60%BA%CF%C3%F2D%17S%FA6~%25%F5c%A5X%F1%19N%09Yp%BF3W%9D%13%CE%03%8Bc%859%0Bl%C3%E0%9E-%B0%DCj0%CF%D9n%C8%ED6%B9%DD%86%89%CC%2B%87%3Ao%81%1C%FB%D2%85%2A%0B147%E4%CC%26%B0WJ%ED%F3F%27%5Bb%D8%3C%E7%9F%A6%8DJ%ACA%2Fr%04%E0%11%96%15%B8%26wu%5D%C4%88O%14%B9%B1%29%EF%10D%EF%E6%B0%B8%11%80%1F%16%FB1%7Cv%CFl3%5E%F7%16n%A5%24%A45%9BEw%ED%F6%DE%06%C8%11%0182%C5%15x%D8W%60%DBNf%FCR%B4%93J%A9%01o%8C9N%18%8F%00%C0P%13%B8%C0%22%5E%89%DB%3Ea%CE%1E%24h%FF%FD%A4%DD%7B%ECj%EC%B1P%7FJ%09%FCC%2C%D7%86%86%29i%CB%A7%AC%1F%84%3C%07%F3%A2%EB%10%BC%E3%EF%1B%12v%DA%89~%DE%D8%9E%3A%A2%94%0A%88h%CA%81u%DAi%8B%F1.%BE%FB%F1I%FD%1A%80%BBv%FB%0C%C5J.l%06%F3sk6%AB%DC%B1%2Ay%E3%9B%9CZ%D3%D3%82%E3%B0%40%1Br%F2%83%AA%1Ez%26%E3%9Au%1C%03%CA%F1%8BN%BAE%12%993%BF%1F%83O%3D%3F%5B%93%F5%888%AB2h%CDf%EELY%87%D2%C2%FA%1B%95%F8%B0%E7%1E%8A%15%1C%C6%84%18%B5f%B3%D0%0D%BB%C3%8B%21%86F%908P%FA%80%F4%C3%80%27%ECW_%9BV%B3%1D%1C%1C%1C%1C%1C%1C%1C%1C%1C%1C%5E%24%FE%03q%1B%00%88%DE%F8%C4N%00%00%00%00IEND%AEB%60%82" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                                <!-- // End Module: Standard Header Image \\ -->
    
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- // Begin Template Body \\ -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="800" id="templateBody">
                                        <tr>
                                            <td align="center" valign="top" class="bodyContent">
                                                <!-- // Begin Module: Standard Content \\ -->
                                                @yield('content')
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>

</html>