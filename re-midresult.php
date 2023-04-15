<?php
session_start();
include('config.php');
if (!isset($_SESSION['Enno']) )
{
    header("Location: part.php");
    exit();
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
                            if(isset($_SESSION['Enno'])) {
                                $Enrollment = $_SESSION['Enno'];
                                $query = "SELECT * FROM `re-mid` WHERE Enno = '$Enrollment' ";
                                $result = $conn->query($query);

                                if($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                     echo '<title>'.$row["Name"].'</title>';
                                }
                            }
                        ?>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/result.css">

</head>
<body style="overflow: hidden;">

    <!-- header section starts  -->

    <header class="header" data-aos="fade-down">
        <section class="flex">
            <a href="index.html" class="logo">Bhagwan Mahavir Polytechnic.</a>

            <nav class="navbar">
                <a href=" index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">contact</a>
                
                <?php
                if(isset($_SESSION['Enno'])== true) { 
                    echo '<a href="result.php">Result</a>'; 
                    echo '<a href="logout.php">Logout</a>';
                } else {
                    echo '<a href=" index.php">Login</a>';
                }
                ?>
                
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
    </header>
    <!-- header section ends -->

    <!-- home section starts  -->
    <div class="container home" data-aos="zoom-out">

        <section class="flex" data-aos="zoom-in" data-aos-delay="600">
            <form action="" method="post">
                <!-- <img class="img1" src="images/BMU.png"> -->
                <!-- Page -->
                <form action="">
                    <div class="txt">
                        <?php 
                            if(isset($_SESSION['Enno'])) {
                                $Enrollment = $_SESSION['Enno'];
                                $query = "SELECT * FROM `re-mid` WHERE Enno = '$Enrollment' ";
                                $result = $conn->query($query);

                                if($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();

                                    echo '<center>';
                                    echo '<h4 style="background-color:white;border-radius:.5rem;"> <marquee width="100%" direction="left" height="25px" style="color:red; font-size: 1.7rem; margin-top:2.2rem;">Website is Under Development. </marquee></h4>';
                                    echo '</center>';
                                    echo '<br>';
                                    echo '<br>';
                                    echo '<h3>ReMid Exam Result</h3>';
                                    echo ' <p>Name : - </p><br>';
                                    echo '<h4 class="title">'.$row["Name"].'</h4>';
                                    echo '<p>Enrollment No : - </p><br>';
                                    echo '<h4 class="title">'.$row["Enno"].'</h4>';
                                    echo '<p>Department : - </p><br>';
                                    echo '<h4 class="title">'.$row["dept"].'</h4>';
                                    echo '<br>';
                                    echo '<br>';
                                    echo '<hr color="red" size="5"><br><br>';
                                    echo '</div>';
                                    echo '<div class="text">';
                                    echo '<h4 class><label class="t5">Mobile App Development-Theory :</h3>';
                                    echo '<h4 class="t3">'.$row["marks1"].'</h4>';
                                    echo '</label> <br>';
                                    echo '<h4 class><label class="t5">PHP With Laravel-Theory :</h3>';
                                    echo '<h4 class="t3">'.$row["marks2"].'</h4>';
                                    echo '</label> <br>';
                                    echo '<h4 class><label class="t5">Elements Of Power System - Theory :</h3>';
                                    echo '<h4 class="t3">'.$row["marks3"].'</h4>';
                                    echo '</label> <br>';
                                    echo '<h4 class><label class="t5">Intellectual Property Rights-Theory :</h3>';
                                    echo '<h4 class="t3">'.$row["marks4"].'</h4>';
                                    echo '</label> <br>';

                                    $name=$row["Name"];
                                    $enno=$row["Enno"];
                                    $dept=$row["dept"];
                                    $marks=[$row["marks1"],$row["marks2"],$row["marks3"],$row["marks4"]];
                                    $code=[$row["sub1"],$row["sub2"],$row["sub3"],$row["sub4"]];

                                    $json_marks= json_encode($marks);
                                    $json_code= json_encode($code);
                                    // $json_marks= json_encode($marks);
                              } 
                            }
                        ?>
                       <p>If You can See Full Result Than ! 👇👇👇<br><br> <button onclick="generatorpdf()" style="display: block; border-radius: .5rem; padding: 1.2rem 3rem; background: var(--main-color); color: var(--black);cursor: pointer; text-align: center; width: 100%; font-size: 1.8rem;margin-top: 1rem; transition: .2s linear;">Download PDF</button></p>
                        
                    </div>
                </form>
            </form>

        </section>
    </div>

    <!-- home section ends -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    
    <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
    <script>

        const sub =["Mobile App Development-Theory","PHP With Laravel-Theory","Elements Of Power System - Theory","Intellectual Property Rights-Theory"];
        const code = JSON.parse('<?php echo $json_code; ?>');
        const marks = JSON.parse('<?php echo $json_marks; ?>');
        var POF=[];
       
        for (let i = 0; i < marks.length; i++) {
            if(marks[i]>=8){
                POF[i]="Pass";
            } else if (marks[i]<8 || marks[i]=="AB"){
                POF[i]="Fail";
            } else {
                POF[i]="Pending";
            }
        }
        for (let i = 0; i < POF.length; i++) {
            if(POF[i]=="Pass"){
                continue;
            }else if(POF[i]=="Pending"){
                continue;
            }else {
                var War1=" Notice";
                var War ="If You are Fail in the ReMid Exam Than Call Your Parents and Meet With faculties. ";
             
            }
        }
        const name1 ='<?php echo $name;?>'
        const enno= '<?php echo 'Enrollment No : - ' .$enno; ?>'
        const dept= '<?php echo 'Department : - ' .$dept; ?>'
        var OutputType = {
        Save: "save",
        Base64: "base64",
        DataURL: "dataurl",
        ArrayBuffer: "arraybuffer"
    };

    function generatorpdf(){
        var pdfObject = jsPDFInvoiceTemplate.default(props);
        console.log("object created: ", pdfObject);
    }

    var props = {
        outputType: OutputType.Save,
        returnJsPDFDocObject: true,
        fileName: "ReMid-result",
        orientationLandscape: false,
        compress: true,
        logo: {
        src: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNpg9N-wglWt0wZZFi_vD0UiHjshDPeoNegHAlYUsAbBDdWUvFggRHdrldDkPsxuCj0S8&usqp=CAU",
        type: 'PNG', //optional, when src= data:uri (nodejs case)
        width: 35, //aspect ratio = width/height
        height: 35,
        margin: {
            top: -5, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
        },
        stamp: {
            inAllPages: true, //by default = false, just in the last page
            src: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNpg9N-wglWt0wZZFi_vD0UiHjshDPeoNegHAlYUsAbBDdWUvFggRHdrldDkPsxuCj0S8&usqp=CAU",
            type: 'JPG', //optional, when src= data:uri (nodejs case)
            width: 20, //aspect ratio = width/height
            height: 20,
            margin: {
                top: 0, //negative or positive num, from the current position
                left: 0 //negative or positive num, from the current position
            }
        },
        business: {
            name: "B.M. Polytechnic",
            address: "BMEF Campus VIP Road, Bharthana Road, Vesu, Surat, Gujarat 395007",
            phone: "9033950546",
            email: "jay.shah@bmusurat.ac.in",
            email_1: "cms.bmusurat.ac.in",
        },
        contact: {
        name:name1 ,
        padding:30,
        address: enno,

        },
        invoice: {
            label: "Invoice #: ",
            headerBorder: false,
            tableBodyBorder: false,
            header: [
              {
                title: "#", 
                style: { 
                  width: 10 
                } 
              },
              { 
                title: "Subject-code",
                style: {
                  width: 90
                } 
              },  
            //   { 
            //     title: "Subject",
            //     style: {
            //       width: 80
            //     } 
            //   }, 
              { 
                title: "marks",
                style: {
                  width: 20
                } 
              }, 
              { title: "out of",
              style:{
                width: 20
              }
                },
              {title : "Pass OR Fail"}
            ],
            table: Array.from(Array(4), (item, index)=>([
                index + 1,
                code[index],
                // sub[index],
                marks[index],
                20,
                POF[index],
            ])),
            additionalRows: [{
                col1: 'Total:',
                col2: '145,250.50',
                col3: 'ALL',
                style: {
                    fontSize: 14 //optional, default 12
                }
            },
            {
                col1: 'VAT:',
                col2: '20',
                col3: '%',
                style: {
                    fontSize: 10 //optional, default 12
                }
            },
            {
                col1: 'SubTotal:',
                col2: '116,199.90',
                col3: 'ALL',
                style: {
                    fontSize: 10 //optional, default 12
                }
            }],
            invDescLabel: War1,
            invDesc: War,
                    },
        footer: {
            text: "The Result is created on a computer and is valid without the signature and stamp.",
        },
        
        pageEnable: true,
        pageLabel: "Page ",
    };

    </script> 

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>