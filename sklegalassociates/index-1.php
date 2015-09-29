<?php
$connect = mysql_connect('localhost','root','');

if(!$connect)
{
die('Could not connect!' . mysql_error);
}

mysql_select_db('sk_legal', $connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>S K Legal Associates : Advocate &amp; Legal Consultants</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- 
Urbanic Template 
http://www.templatemo.com/preview/templatemo_395_urbanic 
-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->

<!-- Google Web Font Embed -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body>
<div class="templatemo-top-bar" id="templatemo-top">
  <div class="container">
    <div class="subheader">
      <div id="phone" class="pull-left"> <i class="fa fa-phone fa-lg"></i>+ 91-22-4002 3089</div>
      <div id="email" class="pull-right HideOnMobile"> <i class="fa fa-envelope"></i> sklegal@sklegalassociates.com </div>
    </div>
  </div>
</div>
<div class="templatemo-top-menu">
  <div class="container"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand"><img src="images/logo3.png"  width="70%" height="auto" alt="Urbanic free HTML5 template" title="Urbanic HTML5 Template" /></a> </div>
        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
          <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
            <li class="active"><a href="#templatemo-top">HOME</a></li>
            <li><a href="#wedo">WHAT WE DO</a></li>
            <li><a href="#teammembers">TEAM MEMBERS</a></li>
            <li><a href="#OUR-PARTNERS">OUR PARTNERS</a></li>
            <li><a href="#templatemo-contact">CONTACT</a></li>
            <li><a href="#offices">ASSOCIATE OFFICES</a></li>
            
            
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!--/.container-fluid --> 
    </div>
    <!--/.navbar --> 
  </div>
  <!-- /container --> 
</div>

  <!-- Carousel -->
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    
        
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/law2.jpg" class="img-fluid" alt=""/>
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img src="images/law3.jpg" class="img-fluid"  alt=""/>
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img src="images/law4.jpg" class="img-fluid"  alt=""/>
          <div class="container">
          </div>
        </div>
        </div>
      <a class="" href="#myCarousel" role="button" data-slide="prev">
       <img src="images/arrow-L-48.png" style="position:absolute;top:200px;left:15px;"/>
      </a>
      <a class="" href="#myCarousel" role="button" data-slide="next">
       <img src="images/arrow-R-48.png" style="position:absolute;top:200px;right:15px;"/>
      </a>
    </div><!-- /.carousel -->

</div>
  <!-- /#templatemo-carousel --> 
</div>
<div class="templatemo-welcome" id="templatemo-welcome">
  <div class="container">
    <div class="templatemo-slogan text-center"> <span class="txt_darkgrey">INTRODUCTION </span>
      <p class="txt_slogan"></p>
      <div class="row para">
        <div class="col-sm-12">
          <p>S. K. Legal Associates is a professionally managed firm of Advocates. The firm is committed to provide the best legal services to its clients by understanding and analyzing problem or situation and finding effective and practical, legal and commercial solutions. Our strength is our experience and training, our Advocates have received from their previous association with various highly reputed law firms, both in India and abroad. We believe in our core values of providing legal services of the highest technical and professional standard with a creative and innovative approach, responsive to our clients’ requirements. </p>
          <p> Our office is strategically located in South Bombay, close to High Court, City Civil Court, Bombay Stock Exchange, Office of Security Exchange Board of India, Sub-Registrar of Assurances, Bombay Stamp Office and Reserve Bank of India and also within the periphery of Small Cause Court, Co-Operative Court, and Debt Recovery Tribunal, Bombay.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container todo" id="wedo">
  <div class="row">
    <div class="col-sm-12 text-center control">
      <h1>What we do</h1>
      <p>We are specialized in the following areas of practice and provide a comprehensive range of services across a broad spectrum of transactions:</p>
    </div>
    <div class="col-md-4">
      <div class="templatemo-service-item">
        <div> <span class="templatemo-service-item-header">LITIGATION AND DISPUTE RESOLUTION:<br><br></span> </div>
        <p>Including litigation relating to banking recovery, Infrastructures contracts , enforcement of commercial contracts, recovery of money, shareholders’ disputes, other commercial and corporate matters, media and entertainment, insolvency, probate, public and administrative, property, securities, trusts and debt recovery, Taxes, Arbitration, Company matters.</p>
        <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_1">READ MORE</a> </div>
        <br class="clearfix"/>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-4">
      <div class="templatemo-service-item" >
        <div> <span class="templatemo-service-item-header">REAL ESTATE, DEVELOPMENTS AND PROPERTY LAW:</span> </div>
        <p>Including large scale development projects, SEZ projects, redevelopment of buildings, redevelopment of societies buildings, slum redevelopment projects, regional real estate investments, property and project financing, commercial and residential leasing, purchase and sale of immovable property and drafting of related documentation.</p>
        <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_2">READ MORE</a> </div>
        <br class="clearfix"/>
      </div>
    </div>
    <div class="col-md-4">
      <div class="templatemo-service-item">
        <div> <span class="templatemo-service-item-header">DUE DILIGENCE, TITLE SEARCH/VERIFICATION OF THE PROPERTIES:</span> </div>
        <p>We advise and/ or day to day carry out the due diligence, title search / verification and issue the certificate n the title of the properties as well as give our legal scrutiny report on the title of the properties to various companies, financial intuitions, Banks and real estate companies. We are having the sufficient, competent and knowledgeable staff </p>
        <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_3">READ MORE</a> </div>
        <br class="clearfix"/>
      </div>
      <br class="clearfix"/>
    </div>
    
   
    
    <!--second row -->
    
    <div class="row">
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">INFRASTRUCTURES AND CONTRACT LAW:</span> </div>
          <p>We advise and consult on the various infrastructure projects and drafting the documents including contracts and tender documents for the infrastructure projects and also handle the disputes and litigations arising under the infrastructure projects including arbitrations and court litigations. </p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_4"data-toggle="modal" data-target="#myModal_4">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item" >
          <div> <span class="templatemo-service-item-header">ELECTRICITY LAWS:</span> </div>
          <p>We advising and consulting from the various issues and matters arising under the Electricity Act and Rules framed thereunder including representation before the various tribunals including MERC, APTEL and before the various court of laws including the High Courts and Supreme Court of India.</p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_5">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">TRANSFERABLE DEVELOPMENT RIGHT (TDR):</span> </div>
          <p>We also advice on generation of Transferable Development Right (TDR) of plot of land.<br><br><br><br><br></p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_6">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <br class="clearfix"/>
      </div>
    </div>
    
    <!--forth row -->
    
    <div class="row">
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">MUNICIPAL AND REVENUE LAW:</span> </div>
          <p>We advice on matter relating to Town Planning, Redevelopment, assessment of municipal taxes, Land Under Construction Tax, Land being built upon, Sewerage Charges, Extra Water Charges, and all other related matters. Application for change of Mutation entry, 7/12 Extract, Property Register Card etc. </p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_7">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">CO-OPERATIVE BANK/ SOCIETY LAW:</span> </div>
          <p>We advice on Co-Operative Law including formation of the co-operative Bank or the housing society, transfer of membership of the society, recovery of the dues from the members of the society, expulsion of member, managements etc. <br> <br></p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_8">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">LABOUR AND EMPLOYMENT:</span> </div>
          <p>Including regulatory requirements and litigation relating to employment and employee unions. <br> <br><br> <br><br></p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_9">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <br class="clearfix"/>
      </div>
    </div>
    
    <!--Fifth row -->
    
    <div class="row">
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">ARBITRATION AND CONCILITATION:</span> </div>
          <p>We appear and handle the Arbitration matters/ disputes before the Arbitration Tribunals including in international Arbitration, before the appointed retired judges, Bombay Stock Exchange, National Stock Exchange & Retired Judges and appear before the concerned Courts of law, including the Hon’ble High Courts for the matters under Sections 9, 11, 14, 15, 34 and  37 of the Arbitration and Conciliation Act, 1996 and before the Hon’ble High Courts and Hon’ble Supreme court of India. </p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_10">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item" >
          <div> <span class="templatemo-service-item-header">CRIMINAL LAWS:</span> </div>
          <p>We practice in criminal law including economic offences under Indian Penal Code, Bombay Police Act, M. C. O. C. Act, Foreign Exchange Management Act (FEMA), Maharashtra Regional Town Planning Act, Sec 138 of Negotiable Instrument Act, including application for bail, discharge of accused, making miscellaneous application, revision application, Criminal Writ Petitions. <br><br><br></p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_11">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">CORPORATE AND COMMERCIAL PRACTICE: </span> </div>
          <p>Including corporate advisory, regulatory and compliance, commercial transactions, share and business acquisitions and disposals, corporate reorganization and restructuring, joint ventures, foreign technical and financial collaboration, mergers and acquisitions, buy outs, schemes of arrangement, amalgamation and reconstruction, corporate administration, capital restructuring, private placements, anti-trust regulations and commercial contracts, insurance and exchange control regulations.</p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_12" >READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <br class="clearfix"/>
      </div>
    </div>
    
    <!--sixth row -->
    
    <div class="row">
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">CAPITAL MARKETS, BANKING AND CORPORATE FINANCE: </span> </div>
          <p>Including debt, equity and equity-linked offerings of securities, domestic offerings such as initial public offerings (IPOs), international offerings such as global depository receipts (GDRs) and American depository receipts (ADRs), securities law, structured products and financial institutions regulation, futures, derivatives and ISDA agreements, mergers and acquisitions, takeovers, securities transactions and regulatory issues. </p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_13">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item" >
          <div> <span class="templatemo-service-item-header">INTELLECTUAL PROPERTY LAW:</span> </div>
          <p>We handle law pertaining to copyrights, designs, patents and trademarks and the documentation relating to the same such as franchising and licensing agreements, assignments, marketing rights, etc. We also provide services at the international level such as transfer of intellectual property rights from one country to another as well as in convention countries of the World Trade Organization under the Trade Related Aspects of Intellectual Property Rights Agreement (TRIPS).</p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_14">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="templatemo-service-item">
          <div> <span class="templatemo-service-item-header">INFORMATION TECHNOLOGY, E-BANKING AND e-COMMERCE, </span> </div>
          <p>Including laws relating to internet and cyberspace, electronic banking, cross-border electronic commerce, security and encryption including digital signatures, trusted third parties, certification authorities and public key infrastructure, convergence technology, semi-conductors and hardware design, software services and private equity and venture capital investments in information technology enabled companies </p>
          <div class="text-center"> <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange" data-toggle="modal" data-target="#myModal_15">READ MORE</a> </div>
          <br class="clearfix"/>
        </div>
        <br class="clearfix"/>
      </div>
    </div>
  </div>
</div>


<div id="teammembers"  style="padding-top:50px;">

<div class="container">
<div class="row">
<div class="col-sm-12 text-center"><h1>ASSOCIATED ADVOCATES</h1><p>Associates of the firm collectively have wide-ranging professional experience and they come from good social and academic backgrounds.</p></div>

<div class="col-sm-12"><h1>Team Members</h1></div>

<div class="col-sm-4">
<div class="profile" id="tm-detail-1"><h2>Mr. S.  B.  Pawar, Advocate</h2><p>He is graduated from University of Bombay in Arts (Economic & Politics) and Law. After completion of Law he was associated with Apex Juris, Advocates & Solicitors, one of the growing and reputed Solicitors firm of Mumbai. During the said period he got experience of litigation in civil and criminal courts. He has appeared in various matters in the High Court, D.R.T., Bombay City Civil Court, Special Court, Sessions Court and Magistrate Court and has got experience of property litigation and documentation and various Writs including Public Interest Litigation, Company matters, and matters relating to recovery and eviction proceedings, matters relating to Government and Engineering contracts and Arbitration matters.</p><p> He has been consultant to various Builders & Developers for the purpose of documentation, stamp-duty and registration of documents. He is well versed with Arbitration matters, Property matters (litigations, convincing and documentations), banking matters (Recovery , disputes & documentations), infrastructure projects disputes, Revenue Matters, Consumer matters, Municipal laws, Rent Act, Maharashtra Co-operative Societies Act, Assessment of Property Tax viz. Land Under Construction, Assessment matters etc. His clientele includes some of the leading Developers, Builders, Gov. Contractors and film personalities.</p></div>



<div class="profile" id="tm-detail-2"><h2>Mr. Dilip Annasaheb Taur, Advocate</h2><p> Supreme Court of India, Delhi

In 2003 he has completed his LL.B. from M. P. Law College, Maharashtra and in the year 2005 he has Completed LL.M. (Human Rights) from Mumbai University. 	He had registered with Bar Council of Maharashtra on 14.9.2004 under Enrollment No. MAH/4003/2004.  From 2003 to 2004 he worked for CBI lawyer Mr. Raja Thakare as a Researcher in Telgis Fake Stamp Paper Case, in the Sessions Court 	Bombay, special TADA Court, Special MCOC Court Pune, and High Court, Bombay. 2004 to 2006 handled various matter pertains to Civil, Criminal law, commercial and corporate Law, High Court, Bombay,  briefed to eminent Sr. Counsel like Rafiq Dada, Seervai, Andhyarjuna, Uday Lalit at Bombay High Court & Supreme Court, Research on co-operative Societies Act/RDDB Act., Research on 	Co-operative and corporate Banks in India. 2006 to 2007 he worked with K. Ashar & Co. as full time Advocate.  Represented K. Ashar & co. at Bombay High Court. Since March 2007 started independent practice at Supreme Court of India at Delhi including National/State Consumer redressal forum, FDI, FIPB, ED, DRT, DRAT, BIFR, AAIFR and vice versa.</p><p> Specialization in Arbitration matters. Actively participation in Arbitration and mediation referred by High Court Bombay, India., 	Assisting innovative, effective and speedy methods for the recovery of bad debts (Non Performing Assets -NPA), Research on Arbitration Laws of London, Italy and 	United States of America, Actively participated in documentation work for Indian Client viz. Hindustan Zinc Ltd. in the International Arbitration held at America, Special Research on Land Acquisition matters pertains to SEZ, Assisting innovative, effective and speedy methods for the recovery of bad debts (Non Performing Assets 	-NPA) and assets reconstruction for the farmers. Briefed and assisted eminent Sr. Counsels viz. Mr. Ashok Desai, Mr. Fali Nariman, Mr. Abhishek Manu Singhavi, Mr. Vinod Bobde, Mr. Dr. Rajeev Dhavan, Mr. Arun Jetly, Mr. Uday Lalit, Mr. Shyam Divan, Mr. Harish Salve, Mr. Mukul Rohtagi at Supreme Court of India.  Active member of World Intellectual Property organization.</p>
</div>


<div class="profile" id="tm-detail-3"><h2>Mr. K. Anandavasagan, Advocate</h2><p>He is graduated from University of Madras in Madras in B.Sc.,(Math) and B.L., Law. CAIIB from Indian Institute of Banking and Finance, Mumbai. After completion of Law, enrolled as an Advocate in 1987 and he was associated with Mr. B. Pannerselvan, Sr. Advocate, empanelled with Various Banks and also Government Pleader. Then he was in the Panel advocates for various banks like SBI, Indian Bank, Urban Co-op Bank, Land Mortgage bank etc., He worked in various positions in banks like Law Officer in PNB, Manager Legal in BOB, Sr.Manager in Bank of India, Head of Legal in DHFL and Vice President Legal & Compliance in Matrimony.com & India Property Group and also Integrated Spaces Ltd. He has worked in various states like Tamil Nadu, Jharkhand, Bihar ,Orissa West Bengal & Delhi.</p><p> During that period he got experience of litigation in civil and criminal courts. He has appeared in various matters in the High Court, D.R.Ts, City Civil Court, Special Court, Sessions Court and Magistrate Court and has got experience in Banking and Practice, Property Laws, Due Diligence, litigation and documentation, and matters relating to recovery and eviction proceedings, BIFR, Liquidation, SARFAESI and DRT proceedings. He is expertise in Bank legal opinion & documentation, recovery and civil laws
</p></div>


<div class="profile" id="tm-detail-4"><h2>Mr. Madhukar Dalvi, Advocate</h2><p>In 2004 he has completed his LL.B. from Government Law College, Mumbai. He was enrolled with the Bar Council of Maharashtra and Goa on 31.07.2004 under enrollment No. MAH/3131/2004. From 2003 to 2008 he worked as a Junior Advocate in the Chambers of renowned criminal lawyers Shri. Raja B. Thakare and Shri. Avadhut Chimalker and has worked on important matters such as the Telgi Fake Stamp Paper Case, 7/11 Railway bomb blast case, etc. He has appeared as a Counsel in several criminal matters such as SLP’s in the Apex Court, Criminal Writ Petitions under Article 226 and 227 of the Constitution of India, application under section 482 of Cr PC, Bail Applications and Anticipatory Bail Applications, Revision Applications, Criminal Appeals in the Bombay High Court and various other Courts of Law.</p><p>Has conducted criminal trials from the prosecution as well as from the defense side. Dealt extensively in matters under section 138 of the Negotiable Instruments Act in the Trial Courts and also in Appellate Courts. Briefed and assisted Senior Advocates like Shri. Uday Lalit, Shri. Mukul Rohatgi, Shri. Shirish Gupte, Shri. Harshad Ponda and Shri. Ashok Mundergi.</p></div>

<div class="profile" id="tm-detail-5"><h2>Mr. Mangesh Shelar, Advocate</h2><p>After graduating in B.A. faculty from Mumbai University, took up degree in Law from Mumbai University. He was for a short period in the Chambers of V.P. PATIL. During the said period he got experience of litigation in criminal courts, as well as Civil Court including Property matters and convincing He has appeared in various matters in the High Court, Bombay City Civil Court, Special Court, Session Court and Magistrate Court, has got experience of criminal matters.</p></div>


<div class="profile" id="tm-detail-6"><h2>Mrs. Swati S. Pawar, Advocate</h2><p>After completing her Graduation degree in B.A. faculty from Mumbai University, she took up Law field and gained degree of LL.B. from Mumbai University. During her law course, she has also participated in various competitions like Moot Court, Debate, Research work, various competitions etc. She has also gained knowledge in drafting of various types of documents viz. various types of Conveyances, Agreement to Sale, Development Agreement of Property, Memorandum of Understanding, Lease Deed, Deed of Assignment, Deed of Partnership, Will, Supplementary Agreement, Deed of Cancellation, Deed of Confirmation, Deed of Mortgage, Deed of Rectification, Release Deed and Gift Deed, Power of Attorney, Declaration-cum-Indemnity, Notices and other miscellaneous documents. She has also gained knowledge in investigation of Title of the Property and giving opinion in respect of the property and various Development Project documents thereon. She has appeared before various courts, viz.</p><p> High Court at Bombay, City Civil Courts at Bombay and at Dindoshi, Debts Recovery Tribunal, Co-operative Courts, Small Causes Court, and Competent Authorities and before various Government Tribunals and Authorities. She is experienced in property litigation, Money Suits, Summary Suits, Matrimonial Litigation, Arbitration Proceedings, Company Petitions, drafting Plaints, Petitions, Revision Application, Written Statements, Reply, Affidavits, Rejoinders etc. She has also briefed and assisted eminent Sr. Counsels at Hon’ble High Court Mumbai. </p></div>

<div class="profile" id="tm-detail-7"><h2>Mr. Rajesh Vanzara, Advocate</h2><p>After completion of Law from Mumbai University, he has gained experience of litigation in Criminal Courts as well as Civil Court including Property matters and convincing. He has also worked with an international law firms like Ince & co. and V Ships etc. He has also gained knowledge of Marine Litigation. He has appeared in various matters in the Hon’ble High Court, Bombay City Civil Court, Session Court and Magistrate Court, has got experience of Criminal Matters.</p></div>



<div class="profile" id="tm-detail-8"><h2>Ms. Jharna Kar, Advocate</h2><p>She has completed her LL.B from Mumbai University in the year 1992 and stood First in Thane Law college. She has good 20 years of experience in civil and civil criminal matters. She has appeared before various courts, viz. High Court at Bombay, City Civil Courts at Bombay and at Dindoshi, Debts Recovery Tribunal, Co-operative Courts, Small Causes Court, Metropolitan Magistrate Courts and Competent Authorities and before various Government Tribunals and Authorities.</p><p> She is experienced in property litigation, Money Suits, Summary Suits, Matrimonial Litigation, Arbitration Proceedings, Company Petitions, drafting Plaints, Petitions, Revision Application, Written Statements, Reply, Affidavits, Rejoinders etc. She has also gained knowledge in investigation of Title of the Property and giving opinion thereon.</p></div>

<div class="profile" id="tm-detail-9"><h2>Ms. Kranti Warawadekar, Advocate </h2><p>She perused her LL.B. Degree, from Government Law College, Mumbai. During her law course, she also completed Diploma in Cyber Laws from Asian School of Cyber Law, Pune. Soon after completing her law she worked with Hemant Sahai Associates, Advocates. She has gained knowledge in reviewing drafting, negotiating various agreements/documents such as Finance Documents, Security Documents and issuing opinion regarding validity, legality and enforceability of the Finance Documents and Security Documents. She has gained knowledge in Company law matters (Incorporation of a Company, Drafting of MOA & AOA, and Board Resolutions etc.). </p><p>Also, she has gained knowledge in drafting of various types of Deeds and Documents, Notices and Other miscellaneous documents. She has also gained knowledge in investigation of Title of the Property and issuing opinion in respect of the property and various development project documents thereon. </p></div>



<div class="profile" id="tm-detail-11"><h2>Ms. Raisa Contractor, Associate</h2><p>She has completed her graduation degree in B.S.L., LL.B. from ILS Law College, Pune University. During her law course, she has also participated in various competitions like Moot Court, Elocutions etc. She has also completed a Diploma in Consumer Protection Laws during her course. Immediately after graduation she worked with Kaushal Shah and Associates. She has also gained knowledge in drafting of various types of documents viz. Conveyances, Lease Deed, Deed of Assignment, Deed of Partnership, Release Deed and Gift Deed, Power of Attorney, Notices. She has also gained knowledge in investigation of Title of the Property and giving opinion. She is appearing before various courts, viz. City Civil Courts at Bombay, Co-operative Courts, and Competent Authorities and before various Government Tribunals and Authorities. </p></div>



<div class="profile" id="tm-detail-12"><h2>Ms. Falguni Laheru </h2><p>Advocate, India; Solicitor England and Wales, Member of ILPA UK.</p><p>Membership - Registered ass Lawyer with  Bar Council of Maharashtra and Goa, Registered as Solicitor with  Law Society of England and Wales, Member of Immigration Legal Practitioner's Association  ( ILPA) UK.</p>
<p>Practice Area –  UK Immigration and Nationality Applications. 
</p>

<p>Position-Senior  Solicitor.</p>
<p> Falguni Laheru is a young Solicitor who is making waves in the Immigration and Nationality domain. She has completed her Post graduation Masters in International Law and Human Rights from Mumbai University. She is member and panelist with Immigration Legal Practitioners Association (UK), with experience of working with Legal 500 firm in the UK. </p>
<p>She is the Principal Director and Senior Solicitor at Smart Move2uk a niche Immigration advisory firm that provides UK Immigration advise to Business houses, Corporate and Individuals on citizenship and nationality applications. Her clientele includes business houses like Birla, ICICI Ventures, Infrasoftech, politicians, bollywood celebrities and sport star.</p><p>Her specialist focus area is complex Entry Clearance applications, Investor visa, Entrepreneur visa, Intra Company transfer, registration of employer with UKBA Home Office as sponsor, appeal applications to the First Tier Tribunal, Upper Tribunal (Immigration and Asylum Chamber) Judicial Review Applications,  and has experience of representing clients India, UK,  Singapore, Germany, France, USA, Australia and Japan. </p>
<p>She has experience of working with clients in India and the UK. She has always been praised by clients for providing advice that can be easily understood by clients. She is friendly and solution oriented and has been admired in solving several complex corporate and personal immigration matters. She has established a sound reputation for providing impartial advise and for her knowledge of UK immigration Laws.
She has been interviewed by BBC News, BBC Radio 4 and has express her views with regards to UK Immigration and visa in Rediff and Zee News. 
</p>
</div>

<div class="profile" id="tm-detail-13"><h2>Nikita Jacob</h2><p>She graduated in Law from ILS Law College, Pune. She has a PG diploma in Corporate law as well as a Diploma in Human Rights & Int’l law. She interned with several different law firms and corporate for a cumulative period of 11 months.
Her core areas of interest / strength lies in Corporate-Commercial laws, Dispute Resolution, Conveyance, law relating to Intellectual Property Rights and in Drafting Agreements & Opinions.</p>
<p>Prior to joining SK Legal, she worked as an Advocate in association with Astrea Legal LLP, wherein she researched, drafted and advised on several family and civil law matters independently and still continues to take on cases on a personal basis when she finds the time.
</p></div>


<div class="profile" id="tm-detail-14"><h2>Dhawni Bhatt</h2><p>Coming soon</p></div>


<div class="profile" id="tm-detail-15"><h2>Krutika Pokale</h2><p>She has completed her double Graduation BLS, LL.B., ( 5 year course) in Law from Government Law College, Mumbai, in 2009.  During her college years, she has completed Diploma Course of Cyber Laws and Crimes of Cyber World from Asian School of Cyber Laws, Pune, Maharashtra. </p>
<p>She was working with M/s. Tamhane and Co., Solicitors firm, wherein she acquired knowledge over documentation of real estate projects related SRA, MHADA buildings, Co-operative Housing Societies, Land dealings, Co-operative society formations, preparation of search reports, title certificates, titleverifications. She also handled litigation related to real estate matters at Bombay High Court, City Civil Court, Small Causes Court, Mumbai. 
Thereafter, she has worked with various Builders and Developers viz. Palai Developers, Shree Dham Developers, Ashford Constructions Pvt. Ltd., RNA Corp Pvt. Ltd. for a span for 4 years. She gained experience into non litigation i.e. documentation related to various real estate projects such as Sale Agreements, Development Agreements, Contracts, Deeds, agreements and contracts related to Construction of Residential and Commercial Buildings, Shopping Malls, Business enterprises etc., She has also handled Redevelopments projects of SRA, landlord tenants societies, co-operative housing societies, MHADA societies, under DCR 33(5), 33(7), 33(10). </p>
<p>
She has also handled documentation related to purchase of land projects in other parts of Maharashtra, recording names on 7/12 extracts, mutation entries, search, title reports, title verifications etc. Agreements related to purchase of Collectors’ land, Sanad land, Government land etc. Conveyance Deeds, Unilateral Conveyance Deeds, Scrutiny of Documents related to Housing, personal loan, Builders Agreements, Sale Deeds, Mortgage Deeds, and all other property related documentation.</p>

<p>She has also handled documentation of purchase of Collectors’ land, conversion of land from Industrial purpose to development/residential purpose (I to R).</p> 
<p>Being interested into litigation, she started working independently, and handled several matters related to Real Estate, Proceedings under section 138 of Negotiable Instruments Act, Co-operative Societies and Recovery proceedings, Proceedings under Consumer Protection Act, Proceedings related to revenue and land matters before Revenue Authorities across Mumbai and outside Mumbai, Family matters such as divorce petitions custody petitions, maintenance etc.
</p></div>

</div>






<div class="col-sm-4">

<div class="profile1" id="tm1"><a><h2>Mr. S.  B.  Pawar, Advocate</h2></a></div>

<div class="profile1" id="tm2"><a><h2>Mr. Dilip Annasaheb Taur, Advocate</h2></a></div>


<div class="profile1" id="tm3"><a><h2>Mr. K. Anandavasagan, Advocate</h2></a></div>

<div class="profile1" id="tm4"><a><h2>Mr. Madhukar Dalvi, Advocate</h2></a></div>

<div class="profile1" id="tm5"><a><h2>Mr. Mangesh Shelar, Advocate</h2></a></div>

<div class="profile1" id="tm6"><a><h2>Mrs. Swati S. Pawar, Advocate</h2></a></div>

<div class="profile1" id="tm7"><a><h2>Mr. Rajesh Vanzara, Advocate</h2></a></div>

<div class="profile1" id="tm8"><a><h2>Ms. Jharna Kar, Advocate, </h2></a></div>


</div>


<div class="col-sm-4">



<div class="profile1" id="tm8"><a><h2>Ms. Jharna Kar, Advocate, </h2></a></div>

<div class="profile1" id="tm9"><a><h2>Ms. Kranti Warawadekar, Advocate</h2></a></div>




<div class="profile1" id="tm11"><a><h2>Ms. Raisa Contractor, Associate</h2></a></div>


<div class="profile1" id="tm12"><a><h2>Ms. Falguni Laheru</h2></a></div>

<div class="profile1" id="tm13"><a><h2>Nikita Jacob</h2></a></div>


<div class="profile1" id="tm14"><a><h2>Dhawni Bhatt</h2></a></div>



<div class="profile1" id="tm15"><a><h2>Krutika Pokale</h2></a></div>





</div>


</div>
</div>
</div>


<!-- /#templatemo-Partners -->

<div class="templatemo-partners" id="OUR-PARTNERS" >
  <div class="container">
    <div class="row">
      <div class="templatemo-line-header" >
        <div class="text-center">
          <hr class="team_hr team_hr_left hr_gray"/>
          <span class="txt_darkgrey">OUR PARTNERS</span>
          <hr class="team_hr team_hr_right hr_gray" />
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="container partner">
      <div class="row">
      
      <div class="col-sm-12  text-center"><h2>Banks and Financial Institutions:</h2></div>
     
      
      <?php 
         $sql = ("SELECT id, Name FROM banks_and_financial_institutions ORDER BY listorder ASC");
         $result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
 			 echo('<div class=" col-sm-4"><p>'.$row['Name'].'</p></div>');
			}
         ?>
      </div>
      
      <div class="container partner">
      <div class="row">
      
      <div class="col-sm-12  text-center"><h2>Big Corporate: </h2></div>
      
      <?php 
         $sql = ("SELECT * FROM `big_corporate`");
         $result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
 			 echo('<div class=" col-sm-4"><p>'.$row['Big Corporate'].'</p></div>');
			}
         ?>
      
      
      
      
      
      
      
      
        
      </div></div>
      
      <div class="container partner">
      <div class="row">
      
      <div class="col-sm-12  text-center"><h2>Govt and PSUs:</h2></div>
      
       <?php 
         $sql = ("SELECT * FROM `gov_and_psus`");
         $result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
 			 echo('<div class=" col-sm-4"><p>'.$row['Govt and PSUs'].'</p></div>');
			}
         ?>
      
     
      
      
      
      
     
      
        
      </div></div>
      
      
      
      <div class="container partner">
      <div class="row">
      
      <div class="col-sm-12  text-center"><h2>Real-Estate Companies:</h2></div>
      
      
       <?php 
         $sql = ("SELECT * FROM `real_estate_companies`");
         $result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
 			 echo('<div class=" col-sm-4"><p>'.$row['Real Estate Companies'].'</p></div>');
			}
         ?>
      
      
      
      

      
        
      </div></div>
      
      
      
      
      
      
      
      
      
      
      
    </div>
  </div>
</div>
<!-- /#templatemo-Partners -->



<!--Contact starts here -->



<div id="templatemo-contact">
  <div class="container">
    <div class="row">
      <div class="templatemo-line-header head_contact">
        <div class="text-center">
          <hr class="team_hr team_hr_left hr_gray"/>
          <span class="txt_darkgrey">CONTACT US</span>
          <hr class="team_hr team_hr_right hr_gray"/>
        </div>
      </div>
      <div class="col-md-12">
        <div style="margin-bottom:15px;"> <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+77+%2F+79,+Janmabhoomi+Marg&amp;aq=&amp;sll=21.125498,81.914063&amp;sspn=56.068323,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Janmabhoomi+Marg,+Kala+Ghoda,+Fort,+Mumbai,+Maharashtra&amp;ll=18.933515,72.833613&amp;spn=0.001799,0.00284&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
        <div class="clearfix"></div>
       </div>
      <div class="col-md-6 contact_right">
        
        
        <form class="form-horizontal" action="#">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Name..." maxlength="40" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" />
          </div>
          <div class="form-group">
            <textarea  class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-orange pull-right">SEND</button>
        </form>
      </div>
      
      <div class="col-md-6 contact_right">
       <h3>Mumbai </h3>
        <p><i class="fa fa-map-marker fa-lg"></i> Mumbai Office:  201-B, M. B. House, 2nd Floor, 77 / 79, Janmabhoomi Marg, Fort, </p>
        <p> Mumbai - 400 001, INDIA</p></p>
        <p><i class="fa fa-phone fa-lg"></i> + 91-22-4002 3089, 4002 3090  </p>
        <p><i class="fa fa-fax fa-lg"></i> Tele Fax : + 91-22-4002 3098</p>
        <p><i class="fa fa-envelope"></i> Email : sklegal@sklegalassociates.com</p>
        <h3>Delhi </h3>
         <p><i class="fa fa-map-marker fa-lg"></i>  1 FS CS 53, Ansal Plaza, Corporate Office & Suits </p><p>
           Vaishali Sec. 1 GZB UP - 201 010 </p>
        <p><i class="fa fa-phone fa-lg"></i> Phone No : 011-47065888</p>
           <p><i class="fa fa-fax fa-lg"></i> Tele Fax : 011-47051888</p>
           <p><i class="fa fa fa-globe fa-lg"></i> Website:  www.sklegalassociates.com</p>
        
       
      </div>
      
      
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
</div>

<div class="container">
<div class="row">
<div class="col-sm-12 text-center"><h2>Associate Offices</h2></div></div></div>



<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="container" id="offices">
<div class="row address">


<div class="col-sm-3 text-left"><h4>Pune Office address:</h4>
<p>Mr. Madhukar M. Mokashi, Advocate,</p>
<p>S. No. 16/1A, Ustad Hamid Khan Building,</p>
<p>Near Acharya Society, Warje Naka(old),</p>
<p>Warje, Pune -411058.</p>
<p>Phone:- 020-25231522</p>
<p>Mobile:- 0-9422031063</p>
</div>
<div class="col-sm-3 text-left"><h4>Chennai  Office address:</h4>

<p>Mr. U. Ashok Kumar,</p>  
<p>Mrs. U. Priyadarshini</p>
<p>Advocates</p>
<p>2/784, 1st Street, Kazura Garden,</p>
<p>Neelankarai,</p>
<p>Chennai – 600 041</p>
</div>
<div class="col-sm-3 text-left"><h4>Kolkata  Office address:</h4>

<p>Mr,Soudip Palchoudhary,</p> 
<p>Advocate,</p>
<p>10 K S Roy Road,</p>
<p>Kolkata – 700 001.</p>
</div>

<div class="col-sm-3 text-left"><h4>Bengaluru  Office address:</h4>
<p> 
Mr.K. Prashant Kumar,</p>
<p>Advocate,</p>
<p>739, Cellar Floor,</p>
<p>60th Cross, Near Bhashyam Circle,</p>
<p>5th Block,</p> 
<p>Rajaji Nagar,</p>
<p>Bangalore – 560 010</p>
<p>Email : prashanthkumarkavoor@gmail.com</p>

</div>
</div>

<div class="row">

<div class="col-sm-3 text-left"><h4>Hyderabad Office address:</h4>
<p>Mr. Laxminarayana,</p>
<p>Advocate,</p>
<p>Flat No.203, Saikrishna Residency,</p>
<p>Aravindnagar</p>
<p>Domalguda,</p>
<p>Hydrabad – 500 029</p>
<p>Tel: 040 66626496</p>
<p>Email: laxminarayana_adv@yahoo.co.in</p>
</div>

<div class="col-sm-3 text-left"><h4>Kochi Office Address:</h4>

<p>Mr.Abu Mathew,</p>
<p>Advocate,</p>
<p>39/4367-J, 2nd Floor,</p> 
<p>Cherry’s Building,</p>
<p>Manikkiri Building,</p>
<p>Ernakulam South,</p>
<p>Kochi - 16</p>
</div>
 
 
<div class="col-sm-3 text-left"><h4>Kozhikode Office Address:</h4>

<p>Mr. Deepu B.V,</p>
<p>Advocate,</p>
<p>Puthiyedath  Arcade</p> 
<p>Kozhikode</p>
<p>Kerala -673006</p>
<p>Mobile:  +919847345764</p>
</div>



 
<div class="col-sm-3 text-left"><h4>Jaipur Office Address:</h4>

<p>Mr.  OM Prakash  Pareek,</p> 
<p>Advocate:</p>
<p>A -9 Gyatri Nagar Sodala</p> 
<p>Jaipur, Rajesthan.</p> 
<p>M- 9314504587</p> 
<p>M- 9782718281</p>
</div>
</div>









 
</div>









<!-- /#templatemo-contact -->

<div class="templatemo-footer" >
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="footer_container">
          <ul class="list-inline">
            <li> <a href="https://www.facebook.com/sklegalassociates.advocates "> <span class="social-icon-fb"></span> </a> </li>
            <li> <a href="https://plus.google.com/100807991705415785660/"> <span class="social-icon-twitter"></span> </a> </li>
            <li> <a href="https://www.linkedin.com/company/s.k.-legal-associates?trk=nav_account_sub_nav_company_admin"> <span class="social-icon-linkedin"></span> </a> </li>
          </ul>
          <div class="height30"></div>
          <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
          <div class="height30"></div>
        </div>
        <div class="footer_bottom_content"> Copyright All rights reserved © 2015 </div>
      </div>
    </div>
  </div>
</div>




<!--first modal -->

<div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">LITIGATION AND DISPUTE RESOLUTION:</h4>
            </div>
            <div class="modal-body">
             <p>Including litigation relating to banking recovery, Infrastructures contracts , enforcement of commercial contracts, recovery of money, shareholders’ disputes, other commercial and corporate matters, media and entertainment, insolvency, probate, public and administrative, property, securities, trusts and debt recovery, Taxes, Arbitration, Company matters. We also advise on settlement negotiation and alternative forms of dispute resolution. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>



<!--second modal -->
<div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">REAL ESTATE, DEVELOPMENTS AND PROPERTY LAW:</h4>
            </div>
            <div class="modal-body">
             <p>Including large scale development projects, SEZ projects, redevelopment of buildings, redevelopment of societies buildings, slum redevelopment projects, regional real estate investments, property and project financing, commercial and residential leasing, purchase and sale of immovable property and drafting of related documentation. We also draft documents relating to title, lease, mortgage deed, development agreement, partition, family arrangements, transfer of tenancy, mortgage of tenancy and lease. We have considerable experience in providing comprehensive and innovative advice on regulatory requirements, including payment of stamp duty and registration of documents.</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>

<!--third modal -->
<div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">DUE DILIGENCE, TITLE SEARCH/VERIFICATION OF THE PROPERTIES:</h4>
            </div>
            <div class="modal-body">
             <p>We advise and/ or day to day carry out the due diligence, title search / verification and issue the certificate n the title of the properties as well as give our legal scrutiny report on the title of the properties to various companies, financial intuitions, Banks and real estate companies. We are having the sufficient, competent and knowledgeable staff for the aforesaid work including the trained Advocate, Title Search Clerks/ Title Search Investigator and we are providing our best professional service for the aforesaid professional work to various organization, Bank/ companies, including DCB, DHFL, AHFCL, Mahanagar Gas Ltd., Ultra Tech Cement, ABG Group and many other financial institutions including to co-operative Banks.</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>


<!--forth modal -->

<div class="modal fade" id="myModal_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">INFRASTRUCTURES AND CONTRACT LAW:</h4>
            </div>
            <div class="modal-body">
             <p>We advise and consult on the various infrastructure projects and drafting the documents including contracts and tender documents for the infrastructure projects and also handle the disputes and litigations arising under the infrastructure projects including arbitrations and court litigations. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>



<!--fith modal -->

<div class="modal fade" id="myModal_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">ELECTRICITY LAWS:</h4>
            </div>
            <div class="modal-body">
             <p>We advising and consulting from the various issues and matters arising under the Electricity Act and Rules framed thereunder including representation before the various tribunals including MERC, APTEL and before the various court of laws including the High Courts and Supreme Court of India.</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>




<!--sixth modal -->

<div class="modal fade" id="myModal_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">TRANSFERABLE DEVELOPMENT RIGHT (TDR):</h4>
            </div>
            <div class="modal-body">
             <p>We also advice on generation of Transferable Development Right (TDR) of plot of land.</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
    <!--seventh modal -->  
      
      
<div class="modal fade" id="myModal_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">MUNICIPAL AND REVENUE LAW:</h4>
            </div>
            <div class="modal-body">
             <p>We advice on matter relating to Town Planning, Redevelopment, assessment of municipal taxes, Land Under Construction Tax, Land being built upon, Sewerage Charges, Extra Water Charges, and all other related matters. Application for change of Mutation entry, 7/12 Extract, Property Register Card etc.c</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>

<!--eight modal -->
<div class="modal fade" id="myModal_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">CO-OPERATIVE BANK/ SOCIETY LAW:</h4>
            </div>
            <div class="modal-body">
             <p>We advice on Co-Operative Law including formation of the co-operative Bank or the housing society, transfer of membership of the society, recovery of the dues from the members of the society, expulsion of member, managements etc.  </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>



<!--ninth modal -->

<div class="modal fade" id="myModal_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">LABOUR AND EMPLOYMENT:</h4>
            </div>
            <div class="modal-body">
             <p>Including regulatory requirements and litigation relating to employment and employee unions.</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>




<!--tenth modal -->

<div class="modal fade" id="myModal_10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">ARBITRATION AND CONCILITATION:</h4>
            </div>
            <div class="modal-body">
             <p>We appear and handle the Arbitration matters/ disputes before the Arbitration Tribunals including in international Arbitration, before the appointed retired judges, Bombay Stock Exchange, National Stock Exchange & Retired Judges and appear before the concerned Courts of law, including the Hon’ble High Courts for the matters under Sections 9, 11, 14, 15, 34 and  37 of the Arbitration and Conciliation Act, 1996 and before the Hon’ble High Courts and Hon’ble Supreme court of India. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>



<!--eleventh modal -->

<div class="modal fade" id="myModal_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">CRIMINAL LAWS:</h4>
            </div>
            <div class="modal-body">
             <p>We practice in criminal law including economic offences under Indian Penal Code, Bombay Police Act, M. C. O. C. Act, Foreign Exchange Management Act (FEMA), Maharashtra Regional Town Planning Act, Sec 138 of Negotiable Instrument Act, including application for bail, discharge of accused, making miscellaneous application, revision application, Criminal Writ Petitions.  </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>




<!--twelve modal -->


<div class="modal fade" id="myModal_12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">CORPORATE AND COMMERCIAL PRACTICE: </h4>
            </div>
            <div class="modal-body">
             <p>Including corporate advisory, regulatory and compliance, commercial transactions, share and business acquisitions and disposals, corporate reorganization and restructuring, joint ventures, foreign technical and financial collaboration, mergers and acquisitions, buy outs, schemes of arrangement, amalgamation and reconstruction, corporate administration, capital restructuring, private placements, anti-trust regulations and commercial contracts, insurance and exchange control regulations. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
      <!--thirteen modal -->
      
<div class="modal fade" id="myModal_13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">CAPITAL MARKETS, BANKING AND CORPORATE FINANCE: </h4>
            </div>
            <div class="modal-body">
             <p>Including debt, equity and equity-linked offerings of securities, domestic offerings such as initial public offerings (IPOs), international offerings such as global depository receipts (GDRs) and American depository receipts (ADRs), securities law, structured products and financial institutions regulation, futures, derivatives and ISDA agreements, mergers and acquisitions, takeovers, securities transactions and regulatory issues. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
      
     <!--forteen modal -->
      
      
      
<div class="modal fade" id="myModal_14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">INTELLECTUAL PROPERTY LAW:</h4>
            </div>
            <div class="modal-body">
             <p>We handle law pertaining to copyrights, designs, patents and trademarks and the documentation relating to the same such as franchising and licensing agreements, assignments, marketing rights, etc. We also provide services at the international level such as transfer of intellectual property rights from one country to another as well as in convention countries of the World Trade Organization under the Trade Related Aspects of Intellectual Property Rights Agreement (TRIPS). Protection of undisclosed and confidential information as well as traditional knowledge and its documentation is one more aspect where we provide legal guidance. We also look after the law pertaining to geographical indications and its repercussions on our Indian industry and the means to protect the same under the international scenario as well as its registration. We prosecute on behalf of and defend our clients’ intellectual property rights in India for the protection against piracy and infringement or breach of any agreement, make urgent court applications for injunction as well as search and seizure. Our non-contentious work includes registration of designs, patents, copyrights and trademarks and drafting and negotiation of documentation relating to intellectual property. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
     <!--fifteen modal --> 
      

<div class="modal fade" id="myModal_15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">INFORMATION TECHNOLOGY, E-BANKING AND e-COMMERCE, </h4>
            </div>
            <div class="modal-body">
             <p>Including laws relating to internet and cyberspace, electronic banking, cross-border electronic commerce, security and encryption including digital signatures, trusted third parties, certification authorities and public key infrastructure, convergence technology, semi-conductors and hardware design, software services and private equity and venture capital investments in information technology enabled companies and information exchange in diverse fields like biotechnology, healthcare, pharmaceuticals, computers, telecommunications, banking, media and entertainment, on-line contracts and agreements with service providers. software license agreement, software development agreement, Website Transfer Agreement etc.


</p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
      
    <!--sixteen modal -->
      
      
      
      
      <div class="modal fade" id="myModal_16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">INTELLECTUAL PROPERTY LAW:</h4>
            </div>
            <div class="modal-body">
             <p>We handle law pertaining to copyrights, designs, patents and trademarks and the documentation relating to the same such as franchising and licensing agreements, assignments, marketing rights, etc. We also provide services at the international level such as transfer of intellectual property rights from one country to another as well as in convention countries of the World Trade Organization under the Trade Related Aspects of Intellectual Property Rights Agreement (TRIPS). Protection of undisclosed and confidential information as well as traditional knowledge and its documentation is one more aspect where we provide legal guidance. We also look after the law pertaining to geographical indications and its repercussions on our Indian industry and the means to protect the same under the international scenario as well as its registration. We prosecute on behalf of and defend our clients’ intellectual property rights in India for the protection against piracy and infringement or breach of any agreement, make urgent court applications for injunction as well as search and seizure. Our non-contentious work includes registration of designs, patents, copyrights and trademarks and drafting and negotiation of documentation relating to intellectual property. </p>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
      
      
      

<!-- -->


<!-- DISCLAIMER -->
<div class="modal fade" id="DISCLAIMER" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DISCLAIMER</h4>
      </div>
      <div class="modal-body">
        <p>By accessing this website, the User expressly acknowledges that:

» This website will not be construed as an advertisement, personal communication, solicitation, invitation or inducement of any nature whatsoever, by the firm, its partner or associates, to promote its services or solicit clients.

» The User intends to obtain information made available on this website solely for his/her personal information and use.

» The User is accessing this website out of his own volition and that the firm will not be liable for the consequences of any reliance placed on the information made available on this website, its use, transmission, distribution or dissemination in any manner.
</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal">ACCEPT            </button>
      </div>
    </div>
  </div>
</div>

<!-- -->





<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js"  type="text/javascript"></script> 
<script src="js/stickUp.min.js"  type="text/javascript"></script> 
<script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script> 
<script src="js/templatemo_script.js"  type="text/javascript"></script> 



<script>


$(document).ready(function(e) {
	
	
	  $(window).load(function(){
        $('#DISCLAIMER').modal('show');
    });
	

	
	
 $('#tm-detail-1').show();
$('#tm1').click(function(){
	$('.profile').hide();
    $('#tm-detail-1').show();

 });


$('#tm2').click(function(){
	$('.profile').hide();
    $('#tm-detail-2').show();
 });



$('#tm3').click(function(){
	$('.profile').hide();
    $('#tm-detail-3').show();
 });

$('#tm4').click(function(){
	$('.profile').hide();
    $('#tm-detail-4').show();
 });



$('#tm5').click(function(){
	$('.profile').hide();
    $('#tm-detail-5').show();
 });

$('#tm6').click(function(){
	$('.profile').hide();
    $('#tm-detail-6').show();
 });


$('#tm7').click(function(){
	$('.profile').hide();
    $('#tm-detail-7').show();
 });



$('#tm8').click(function(){
	$('.profile').hide();
    $('#tm-detail-8').show();
 });
	
	

$('#tm9').click(function(){
	$('.profile').hide();
    $('#tm-detail-9').show();
 });
	

$('#tm10').click(function(){
	$('.profile').hide();
    $('#tm-detail-10').show();
 });	
	


$('#tm11').click(function(){
	$('.profile').hide();
    $('#tm-detail-11').show();
 });



$('#tm12').click(function(){
	$('.profile').hide();
    $('#tm-detail-12').show();
 });

	



$('#tm13').click(function(){
	$('.profile').hide();
    $('#tm-detail-13').show();
 });


$('#tm14').click(function(){
	$('.profile').hide();
    $('#tm-detail-14').show();
 });




$('#tm15').click(function(){
	$('.profile').hide();
    $('#tm-detail-15').show();
 });






	
});







</script>







</body>
</html>