<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap"
     rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insighter</title>
    <link rel="icon" type="image/png" href="/images/Insighter.png">

    <style>
       body {
                animation: scroll 30s linear infinite;
                background-image: url('images/alula.png');
                background-position: center center;
                background-size: cover;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                height: 100vh;
                perspective-origin: 50% 50%
            }
        @keyframes scroll {
            0% {
                background-image: url('images/alula.png');
            }
            50% {
                background-image: url('images/theline.png');
            }
            100% {
                background-image: url('images/alula.png');
            }
        }
        @keyframes slideInFromTop {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }
        .text-element {
            animation: slideInFromTop 2s;
            }
       
        label {
            color: white;
            }
        .translate {
            opacity: 0.5;
            }
        .lead{
            font-weight: 100;
            font-size: 18px;
        }
        .display-2 {
  font-family: 'League Spartan', sans-serif;
}


    </style>
</head>
<body>
   
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            

                <div class="col-md-5 text-center text-md-start my-5">
                  <h1>
                    <div class="display-2 ">Insighter</div>
                    <div class="display-5 fs-2">Unlock insights, improve leisure</div>
                  </h1>
                  <p class="lead my-2 text-muted">Your feedback is valuable in helping us To improve your leisure . Please take a few minutes to fill out our survey.</p>
                  <a href="#sidebar" data-bs-toggle="offcanvas" aria-controls="sidebar" class="btn btn-secondary btn-lg mb-3">more info</a>
                  <!-- open sidebar / offcanvas -->

                
                </div>
                
            <div class="col-md-6 bg-dark text-element ">
                
                <form class="my-3" action="{{ route('submit-survey') }}" method="POST">
                @csrf
                <div class="row ">
                    <div class="col-md-12">
                        <label  class=" lang lead" key="emotions" for="emotions">What was your emotional experience during this activity? </label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="row ">
                        <div class="row ">
                        
                        <div class="btn-group " >
                            <input type="radio" class="btn-check" name="emotions" id="Happiness" value="Happiness" autocomplete="off" checked>
                            <label class=" lang btn btn-sm btn-outline-light" key="Enjoyed" for="Happiness">
                                <span>Enjoyed</span>
                            </label>
                            <input type="radio" class="btn-check" name="emotions" id="Engagement" value="Engagement" autocomplete="off">
                            <label class=" lang btn btn-sm btn-outline-light" key="Interested" for="Engagement">
                                <span>Interested</span>
                            </label>
                            <input type="radio" class="btn-check" name="emotions" id="Disconnection"value="Disconnection" autocomplete="off">
                            <label class=" lang btn btn-sm btn-outline-light" key="Uninterested" for="Disconnection">
                                <span>Uninterested</span>
                            </label>
                            <input type="radio" class="btn-check" name="emotions" id="Aversion" value="Aversion" autocomplete="off">
                            <label class=" lang btn btn-sm btn-outline-light" key="Unenjoyed" for="Aversion">
                                <span>Unenjoyed</span>
                            </label>
                            <input type="radio" class="btn-check" name="emotions" id="Excitement" value="Excitement" autocomplete="off">
                            <label class=" lang btn btn-sm btn-outline-light" key="Excited" for="Excitement">
                                <span>Excited</span>
                            </label>
                            <input type="radio" class="btn-check" name="emotions" id="Annoyance" value="Annoyance" autocomplete="off">
                            <label class=" lang btn btn-sm btn-outline-light" key="Annoyed" for="Annoyance">
                                <span>Annoyed</span>
                            </label>
                            
                        </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <label  class="lang lead " key="age" for="age"> How old are you? </label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="btn-group " >
                                <input type="radio" class="btn-check" name="age" id="age1" value="Under age 14" autocomplete="off" checked>
                                <label class="lang btn btn-sm btn-outline-light" key="14 years and under" for="age1">
                                    <img src="images/children.png" alt="Button 1" style="width:20px;height:20px">
                                    <span> 14 years and under</span>
                                </label>
                                <input type="radio" class="btn-check" name="age" id="age2" value="Age 15-24" autocomplete="off">
                                <label class="lang btn btn-sm btn-outline-light" key="15-24 years" for="age2">
                                    <img src="images/teenagers.png" alt="Button 2" style="width:20px;height:20px">
                                    <span>15-24 years</span>
                                </label>
                                <input type="radio" class="btn-check" name="age" id="age3"value="Age 25-64" autocomplete="off">
                                <label class="lang btn btn-sm btn-outline-light" key="25-64 years" for="age3">
                                    <img src="images/Adults.png" alt="Button 3" style="width:20px;height:20px">
                                    <span>25-64 years</span>
                                </label>
                                <input type="radio" class="btn-check" name="age" id="age4" value="Age 65 and older" autocomplete="off">
                                <label class="lang btn btn-sm btn-outline-light" key="65 years and over" for="age4">
                                    <img src="images/Older adults.png" alt="Button 4" style="width:20px;height:20px">
                                    <span>65 years and over</span>
                                </label>
                            </div>                            
                        </div>
                </div></div>   

                <div class="row">
                <div class="col-md-6 ">
              
                    <div class="row">  
                        <label class=" lang lead p-2" key="gender" for="gender">What is your gender?</label> 
                    </div>

                    <div class="row justify-content-md-center">
                            <div class="btn-group " >
                                <input type="radio" class="btn-check" name="gender" value="Male" id="gender1" autocomplete="off" checked>
                                <label class="lang btn btn-sm btn-outline-light" key="Male" for="gender1">Male</label>
                                <input type="radio" class="btn-check" name="gender" value="Female" id="gender2" autocomplete="off">
                                <label class=" lang btn btn-sm btn-outline-light" key="Female" for="gender2">Female</label>
                                <input type="radio" class="btn-check" name="gender" value="Other" id="gender3" autocomplete="off">
                                <label class=" lang btn btn-sm btn-outline-light" key="Other" for="gender3">Other</label>
                            </div>
                        </div>
                    <div class="row">   
                        <label class="lang lead ml-2 p-2 " key="income range" for="income_range">What is your income level?</label>
                    </div>
                    <div class="row justify-content-md-center">  

                        <div class="btn-group " role="group" aria-label="Income Range">    
                                <input type="radio" class="btn-check" name="income_range" value="Low" id="income_range1" autocomplete="off" checked>
                                <label class="lang btn btn-sm btn-outline-light" key="Low" for="income_range1">Low</label>

                                <input type="radio" class="btn-check" name="income_range" value="Moderate" id="income_range2" autocomplete="off" >
                                <label class="lang btn btn-sm btn-outline-light" key="Moderate" for="income_range2">Moderate</label>
                        
                        
                                <input type="radio" class="btn-check" name="income_range" value="High" id="income_range3" autocomplete="off" >
                                <label class="lang btn btn-sm btn-outline-light"  key="High" for="income_range3">High</label>
                    </div>
                </div>

                <div class="row">
                    <label class=" lang lead ml-2 p-2" key="education level" for="education_level">What is your education level?</label>
                </div>

                <div class="row">
                    
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="education_level" value="Primary" id="primary" autocomplete="off" checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Primary" for="primary">Primary</label>
                            <input type="radio" class="btn-check" name="education_level" value="Secondary" id="secondary" autocomplete="off">
                            <label class="lang btn btn-sm btn-outline-light" key="Secondary" for="secondary">Secondary</label>
                            <input type="radio" class="btn-check" name="education_level" value="Tertiary" id="tertiary" autocomplete="off">
                            <label class="lang btn btn-sm btn-outline-light" key="Tertiary" for="tertiary">Tertiary</label>
                            <input type="radio" class="btn-check" name="education_level" value="Other" id="other2" autocomplete="off" >
                            <label class="lang btn btn-sm btn-outline-light" key="Other" for="other2">Other</label>
                        </div>
                </div>

                <div class="row">     
                    <label class="lang lead ml-2 p-2" key="physical disability" for="physical_disability">Do you have a disability?</label> 
                </div>
                <div class="row">
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="physical_disability" id="Yes" autocomplete="off" value="Yes" checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Yes" for="Yes">Yes</label>
                            <input type="radio" class="btn-check" name="physical_disability" id="No" autocomplete="off" value="No">
                            <label class="lang btn btn-sm btn-outline-light" key="No" for="No">No</label>
                        </div>
                    </div>
                    
 

                
                <div class="row">
                        <label class=" lang lead ml-2 p-2" key="visit with" for="visit_with">Who did accompanied you this visit?</label> 
                </div>
                
                <div class="row">
                    
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="visit_with" value="Alone" id="alone" autocomplete="off"  checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Alone" for="alone">Alone</label>
                            <input type="radio" class="btn-check" name="visit_with" value="Friends" id="friends" autocomplete="off" >
                            <label class="lang btn btn-sm btn-outline-light" key="Friends" for="friends">Friends</label>
                            <input type="radio" class="btn-check" name="visit_with" value="Family" id="family" autocomplete="off">
                            <label class="lang btn btn-sm btn-outline-light" key="Family" for="family">Family</label>
                            <input type="radio" class="btn-check" name="visit_with" value="Other" id="other3" autocomplete="off" >
                            <label class="lang btn btn-sm btn-outline-light" key="Other" for="other3">Other</label>
                        </div>
                    </div>

                    <div class="row">
                        <label class=" lang lead ml-2 p-2" key="Service Quality Rating" for="service_quality_rating">Rate the quality of the service:</label>
                    </div>
                    <div class="row">
                    
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="service_quality_rating" id="poor5" autocomplete="off" value="Poor" checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Poor" for="poor5">Poor</label>
                            <input type="radio" class="btn-check" name="service_quality_rating" id="fair5" autocomplete="off" value="Fair">
                            <label class="lang btn btn-sm btn-outline-light" key="Fair" for="fair5">Fair</label>
                            <input type="radio" class="btn-check" name="service_quality_rating" id="good5" autocomplete="off" value="Good">
                            <label class="lang btn btn-sm btn-outline-light" key="Good" for="good5">Good</label>
                        </div>
                </div>
                
           
            
                    
                </div>



                <div class="col-md-6">
                    


                    <div class="row">  
                        <label class="lang lead ml-2 p-2" key="visit again" for="visit_again">Would you visit again?</label>
                    </div>

                    <div class="row">
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="visit_again" id="yes2" autocomplete="off" value="Yes" checked>
                                <label class="lang btn btn-sm btn-outline-light" key="Yes"  for="yes2">Yes</label>
                                <input type="radio" class="btn-check" name="visit_again" id="no2" autocomplete="off" value="No">
                                <label class="lang btn btn-sm btn-outline-light" key="No" for="no2">No</label>
                            </div>
                    </div> 

                    <div class="row">  
                        <label class="lang lead ml-2 p-2" key="budget range" for="budget_range"> What is your leisure budget range?</label>
                    </div>

                    <div class="row">
                        <div class="btn-group">
                            <input type="radio" class="btn-check" name="budget_range" value="$0-$100" id="low2" autocomplete="off"  checked>
                            <label class="btn btn-sm btn-outline-light" for="low2">$0-$100</label>
                            <input type="radio" class="btn-check" name="budget_range" value="$100-$500" id="moderate2" autocomplete="off" >
                            <label class="btn btn-sm btn-outline-light" for="moderate2">$100-$500</label>
                            <input type="radio" class="btn-check" name="budget_range" value="$500-$1000" id="high2" autocomplete="off" >
                            <label class="btn btn-sm btn-outline-light" for="high2">$500-$1000</label>
                            
                    </div>
                    </div>              





                <div class="row">
                    <label class="lang lead ml-2 p-2"  key="organization rating" for="organization_rating"> Rate the level of arrangement:</label>
                </div> 

                <div class="row">
                    <div class="btn-group">
                        <input type="radio" class="btn-check" name="organization_rating" id="poor" autocomplete="off" value="Poor" checked>
                        <label class="lang btn btn-sm btn-outline-light" key="Poor" for="poor">Poor</label>
                        <input type="radio" class="btn-check" name="organization_rating" id="fair" autocomplete="off" value="Fair">
                        <label class="lang btn btn-sm btn-outline-light"  key="Fair" for="fair">Fair</label>
                        <input type="radio" class="btn-check" name="organization_rating" id="good" autocomplete="off" value="Good">
                        <label class="lang btn btn-sm btn-outline-light"  key="Good" for="good">Good</label>
                    </div>
                </div>
            
            


        

                <div class="row">   
                    <label class="lang lead ml-2 p-2" key="cost rating" for="cost_rating">Rate the cost:</label> 
                </div>

                <div class="row">
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="cost_rating" id="Affordable" autocomplete="off" value="Affordable" checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Affordable" for="Affordable">Affordable</label>
                            <input type="radio" class="btn-check" name="cost_rating" id="Moderate" autocomplete="off" value="Moderate">
                            <label class="lang btn btn-sm btn-outline-light" key="Moderate" for="Moderate">Moderate</label>
                            <input type="radio" class="btn-check" name="cost_rating" id="Expensive" autocomplete="off" value="Expensive">
                            <label class="lang btn btn-sm btn-outline-light" key="Expensive" for="Expensive">Expensive</label>
                        </div>
                    </div> 


                <div class="row">
                    <label class="lang lead ml-2 p-2" key="cleanliness rating" for="cleanliness_rating">Rate the level of cleanliness:</label>
                </div> 

                <div class="row"> 
                    <div class="btn-group ">
                        <input type="radio" class="btn-check" name="cleanliness_rating" id="poor3" autocomplete="off" value="Poor" checked>
                        <label class="lang btn btn-sm btn-outline-light" key="Poor" for="poor3">Poor</label>
                        <input type="radio" class="btn-check" name="cleanliness_rating" id="fair3" autocomplete="off" value="Fair">
                        <label class="lang btn btn-sm btn-outline-light" key="Fair" for="fair3">Fair</label>
                        <input type="radio" class="btn-check" name="cleanliness_rating" id="good3" autocomplete="off" value="Good">
                        <label class="lang btn btn-sm btn-outline-light" key="Good" for="good3">Good</label>
                    </div>
                </div>

            





                <div class="row">  
                    <label class="lang lead ml-2 p-2" key="staff friendliness rating" for="staff_friendliness_rating">Rate the Staff :</label>   
                </div>

                <div class="row">
                        <div class="btn-group ">
                            <input type="radio" class="btn-check" name="staff_friendliness_rating" id="poor4" autocomplete="off" value="Poor" checked>
                            <label class="lang btn btn-sm btn-outline-light" key="Poor" for="poor4">Poor</label>
                            <input type="radio" class="btn-check" name="staff_friendliness_rating" id="fair4" autocomplete="off" value="Fair">
                            <label class="lang btn btn-sm btn-outline-light" key="Fair" for="fair4">Fair</label>
                            <input type="radio" class="btn-check" name="staff_friendliness_rating" id="good4" autocomplete="off" value="Good">
                            <label class="lang btn btn-sm btn-outline-light" key="Good" for="good4">Good</label>
                        </div>
                    </div>
                
                



           
              


                

            </div>
            
        </div>

                <div class="col d-flex justify-content-center mt-5">
                    <input class=" d-block btn-ligh" style="width: 200px; " type="submit" value="Submit">
                  </div>
               

                </form>

                
                
            
      </div>
      <div class="row">
        <div class="col">
        <button class="translate btn btn-secondary btn-sm my-2" id="en">English</button>
        <button class="translate btn btn-secondary btn-sm my-2" id="ar">عربي</button>
        </div> 
    </div> 
    </div>
       <!-- side panel / offcanvas -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebar-label">Insighter</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>is a 3-app system that integrates survey answers with machine-learning based emotional analysis results captured from
         CCTV cameras during the lesiure expiernce to finally produce a Dashboards that provides a complete picture of customers' 
         experiences.  With Insighter, you can easily access valuable insights and make data-driven decisions to enhance leisure 
         activities for your customers. Unlock the potential of your leisure services with Insighter today!</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/multiple language.js"></script>

</body>
</html>






