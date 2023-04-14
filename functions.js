$(document).ready(function(){
    $("#1").click(function(){
        $(this).attr("clicked","true");
        $("#2").attr("clicked","false");
        $("#3").attr("clicked","false");
        $( location ).attr("href", "le_tue_liste.php");
                           
                            
                    });
                    $("#2").click(function(){
                        $(this).attr("clicked","true");
                        $("#1").attr("clicked","false");
                        $("#3").attr("clicked","false");
                        $( location ).attr("href", "le_tue_liste.php");
                            $_SESSION["gruppo"] = $gruppo2;
                           
                    });
                    $("#3").click(function(){
                        $( location ).attr("href", "le_tue_liste.php");
                        $(this).attr("clicked","true");
                        $("#2").attr("clicked","false");
                        $("#1").attr("clicked","false");
                            $_SESSION["gruppo"] = $gruppo1;
                            
                    });
            });