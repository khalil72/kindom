<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css"/>

  <style>
* {
  box-sizing: border-box;
}

body {
  font-family:poppins , system-ui ;
}

main {

  width: min(70ch, 100vw - 2rem);

  margin-top: max(8vh, 2rem);
  margin-right: auto;
  margin-left: auto;


}

h2 {

  font-size: 18px;


}

.tagline {
  line-height: 0;
  font-size: 16px;
  justify-content: space-between;
  line-height: 12px;
   margin: 0px;
}




a {
  color: blue;
}

.headingwelcome{
    color:red;
    word-spacing: 1px;
    letter-spacing: 1px;
    font-weight: 900;
    font-size: 30px;
    line-height: 5px;

}

.Enquiry{
    color:rgb(27, 27, 27);
    word-spacing: 0px;
    letter-spacing: 0px;
    font-weight: 700;
    font-size: 16px;
    line-height: 30px;
}


.yourproject{
    font-size: 14px;
    line-height: 20px;
    text-align: justify;
}

.inner-content{
    font-size: 14px;
    line-height: 20px;
    text-align: justify;
}
.hiCustomer{
    line-height: 100px;
    font-size:36px;
}
.valued{
    line-height: 10px;
}

.regards{
    color:#535353;
    word-spacing: 0px;
    letter-spacing: 0px;
    font-weight: 550;
    font-size: 14px;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 0px;
}

.support{
    color:#535353;
    word-spacing: 0px;
    letter-spacing: 0px;
    font-weight: 550;
    font-size: 14px;
    line-height: 30px;
    text-align: justify;
    margin-top: 0px;
}
.imgs{
width: 25px;
height: 25px;
}
.getourapp{
    font-size: 15px;
    font-weight: 400;
    margin: 0px !important;
}
.getourappicon{

    width: auto;
    height: 35px;
}

.footerContent{
    color:#535353;
    word-spacing: 0px;
    letter-spacing: 0px;
    font-weight: 550;
    font-size: 13px;
    line-height: 15px;
    text-align: center;
    font-size: 10px;

}
@media screen and (min-width: 300px) {

    .headingwelcome {
    color: red;
    word-spacing: 1px;
    letter-spacing: 1px;
    font-weight: 900;
    font-size: 22px;
    line-height: 0px;

}
.tagline {
    line-height: 0;
    font-size: 12px;
    justify-content: space-between;
    line-height: 19px;
}

}

p.icons {
    margin: 0px !important;
}

p.LetsConnect {
    margin: 0px !important;
    font-size: 15px;
    font-weight: 400;
}

.btn-class {
    background-color: #fc2929 !important;
    color: white !important;
    text-decoration: none;
    padding: 4px 9px;
    cursor: pointer;
    font-weight: 600;
}

.msg-box {
border: 1px solid #dbdcdc;
    padding: 23px;
    background-color: #fbfbfb;
    width: 500px;
}

    </style>
</head>
<body>
<main class="outer">
    @php
        use App\CompanyProfile;
        $company_profile = CompanyProfile::first();
    @endphp
        <a href="https://property051.com/" target="_blank"><img src="{{ asset('front/logos/'.$company_profile->logo) }}" width="180px" class="logoheight" style="margin-left: 61px; margin-top: 31px;"/></a>
        <p class="tagline">Islamabad's 1st Real Estate Digital Marketplace </p>
        <br/>
        <h2 class="headingwelcome">Welcome to Property051</h2>
</main>

