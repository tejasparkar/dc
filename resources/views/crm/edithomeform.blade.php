<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container mt-3 mb-3">
    DCDESIGNS
  </div>
    </nav>

    <div class="container">

    <div class="row mt-3 mb-3">
        <div class="col">
            <h1>Edit Home Page</h1>
        </div>
    </div>
    <form action="/saveHomePage" method="post">
    @csrf
    <div class="row form-group">
    <br>
        <hr>
        <br>
        <h3>CAROUSEL SECTION</h3>
        <div class="col">
            <label>
                Carousel One Heading level 1
                <input type="text" class="form-control" name="carousellevel1Heading1" id="carousellevel1Heading1">
            </label>
        </div>
        <div class="col">
            <label>
                Carousel Two Heading level 1
                <input class="form-control" type="text" name="carousellevel1Heading2" id="carousellevel1Heading1">
            </label>
        </div>
        <div class="col">
            <label>
                Carousel Three Heading level 1
                <input class="form-control" type="text" name="carousellevel1Heading3" id="carousellevel1Heading1">
            </label>
        </div>
        <div class="col">
        <label>
                Carousel One Heading level 2
                <input class="form-control" type="text" name="carousellevel2Heading1" id="carousellevel1Heading1">
            </label>
        </div>
        <div class="col">
        <label>
                Carousel Two Heading level 2
                <input class="form-control" type="text" name="carousellevel2Heading2" id="carousellevel1Heading1">
            </label>
        </div>
        <div class="col">
        <label>
                Carousel Three Heading level 2
                <input class="form-control" type="text" name="carousellevel2Heading3" id="carousellevel1Heading1">
            </label>
        </div>
       
    </div>
    
    <div class="row form-group mt-3">
    <div class="col">
        <label>
                Carousel Image 1
                <input class="form-control" type="file" name="carouselImage1" id="carouselImage1">
        </label>
        </div>
        <div class="col">
        <label>
                Carousel Image 2
                <input class="form-control" type="file" name="carouselImage2" id="carouselImage2">
        </label>
        </div>
        <div class="col">
        <label>
                Carousel Image 3
                <input class="form-control" type="file" name="carouselImage3" id="carouselImage3">
        </label>
        </div>
       
        </div>
        
        <div class="row mt-3">
        <div class="col">
        <label>
                Carousel Paragraph 1</label>
                <textarea   class="form-control ckeditor" type="text" name="carouselparagraph1" id="carouselparagraph1"></textarea>
        
        </div>
        
        </div>
        <div class="row mt-3">
        <div class="col">
        <label>
                Carousel Paragraph 2</label>
                <textarea class="form-control ckeditor" type="text" name="carouselparagraph2" id="carouselparagraph2"></textarea>
        
        </div>     
        </div>

        <div class="row mt-3">
        <div class="col">
        <label></label>
                Carousel Paragraph 3
                <textarea class="form-control ckeditor" type="text" name="carouselparagraph3" id="carouselparagraph3"></textarea>
        
        </div>
        </div>
   
        <hr>
       
    <div class="row mt-3 ">
        <h3>About us Section</h3>
    </div>
    <div class="row mt-3 form-group">
       <div class="col">
       <label for="aboutusHeading">About us Heading</label>
        <input type="text" class="form-control" name="aboutusHeading" id="aboutusHeading">
       </div>
       <div class="col">
        <label for="aboutusImage1">Aboutus Image 1</label>
        <input type="file" name="aboutusImage1" class="form-control" id="aboutusImage1">
       </div>
       <div class="col">
        <label for="aboutusImage2">Aboutus Image 2</label>
        <input type="file" name="aboutusImage2" class="form-control" id="aboutusImage2">
       </div>   
    </div>
    <div class="row mt-3">
        <div class="col">
        <label for="aboutusParagraph">Aboutus Paragraph</label>
        <textarea name="aboutusParagraph" class="form-control ckeditor" id="" cols="30" rows="10"></textarea>    
        </div>
        
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col">
        <h3>Project Section</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="">Residential</label>
            <input type="file" name="projectImage1" class="form-control" id="projectImage1">
        </div>
        <div class="col">
            <label for="">Corporate</label>
            <input type="file" name="projectImage2" class="form-control" id="projectImage2">
        </div>
        <div class="col">
            <label for="">Office</label>
            <input type="file" name="projectImage3" class="form-control" id="projectImage3">
        </div> 
        <div class="col">
            <label for="">Retail</label>
            <input type="file" name="projectImage4" class="form-control" id="projectImage4">
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-12">
            <h3>Team Section</h3>
        </div>
        <div class="col-12">
            <label for="employeeHeading">Team Heading</label>
            <input type="text"class="form-control mt-3" name="employeeHeading" id="">
            <label for="employeeParagraph">Team Paragraph</label>
            <textarea type="text" class="form-control mt-3 ckeditor " name="employeeParagraph" id="employeeParagraph"></textarea>
            <br>
            <h4>Team mate 1</h4>
            <div class="row">
            <div class="col">
                <label for="emp1Name">Emp1 name</label>
                <input type="text" class="form-control" name="emp1Name" id="emp1Name">
            </div>
            <div class="col">
                <label for="emp1Designation">Emp1 Designation</label>
                <input type="text" class="form-control" name="emp1Designation" id="emp1Designation">
            </div>
            <div class="col">
                <label for="emp1Image">Emp1 Image</label>
                <input type="file" class="form-control" name="emp1Image" id="emp1Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp1fbUrl">Emp1 Fb URL</label>
                <input type="text" class="form-control" name="emp1fbUrl" id="emp1fbUrl">
                </div>
                <div class="col">
                <label for="emp1twitterUrl">Emp1 Twitter URL</label>
                <input type="text" class="form-control" name="emp1twitterUrl" id="emp1twitterUrl">
                </div>
                <div class="col">
                <label for="emp1linkedinUrl">Emp1 linkedin URL</label>
                <input type="text" class="form-control" name="emp1linkedinUrl" id="emp1linkedinUrl">
                </div>
            </div>
            <hr>
            <h4>Team mate 2</h4>
            <div class="row">
            <div class="col">
                <label for="emp2Name">Emp2 name</label>
                <input type="text" class="form-control" name="emp2Name" id="emp2Name">
            </div>
            <div class="col">
                <label for="emp2Designation">Emp2 Designation</label>
                <input type="text" class="form-control" name="emp2Designation" id="emp2Designation">
            </div>
            <div class="col">
                <label for="emp2Image">Emp2 Image</label>
                <input type="file" class="form-control" name="emp2Image" id="emp2Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp2fbUrl">Emp2 Fb URL</label>
                <input type="text" class="form-control" name="emp2fbUrl" id="emp2fbUrl">
                </div>
                <div class="col">
                <label for="emp2twitterUrl">Emp2 Twitter URL</label>
                <input type="text" class="form-control" name="emp2twitterUrl" id="emp2twitterUrl">
                </div>
                <div class="col">
                <label for="emp2linkedinUrl">Emp2 linkedin URL</label>
                <input type="text" class="form-control" name="emp2linkedinUrl" id="emp2linkedinUrl">
                </div>
            </div>
            <hr>
            <h4>Team mate 3</h4>
            <div class="row">
            <div class="col">
                <label for="emp3Name">Emp3 name</label>
                <input type="text" class="form-control" name="emp3Name" id="emp3Name">
            </div>
            <div class="col">
                <label for="emp3Designation">Emp3 Designation</label>
                <input type="text" class="form-control" name="emp3Designation" id="emp3Designation">
            </div>
            <div class="col">
                <label for="emp3Image">Emp3 Image</label>
                <input type="file" class="form-control" name="emp3Image" id="emp3Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp3fbUrl">Emp3 Fb URL</label>
                <input type="text" class="form-control" name="emp3fbUrl" id="emp3fbUrl">
                </div>
                <div class="col">
                <label for="emp3twitterUrl">Emp3 Twitter URL</label>
                <input type="text" class="form-control" name="emp3twitterUrl" id="emp3twitterUrl">
                </div>
                <div class="col">
                <label for="emp3linkedinUrl">Emp3 linkedin URL</label>
                <input type="text" class="form-control" name="emp3linkedinUrl" id="emp3linkedinUrl">
                </div>
            </div>
            <hr>
            <h4>Team mate 4</h4>
            <div class="row">
            <div class="col">
                <label for="emp4Name">Emp4 name</label>
                <input type="text" class="form-control" name="emp4Name" id="emp4Name">
            </div>
            <div class="col">
                <label for="emp4Designation">Emp4 Designation</label>
                <input type="text" class="form-control" name="emp4Designation" id="emp4Designation">
            </div>
            <div class="col">
                <label for="emp4Image">Emp4 Image</label>
                <input type="file" class="form-control" name="emp4Image" id="emp4Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp4fbUrl">Emp4 Fb URL</label>
                <input type="text" class="form-control" name="emp4fbUrl" id="emp4fbUrl">
                </div>
                <div class="col">
                <label for="emp4twitterUrl">Emp4 Twitter URL</label>
                <input type="text" class="form-control" name="emp4twitterUrl" id="emp4twitterUrl">
                </div>
                <div class="col">
                <label for="emp4linkedinUrl">Emp4 linkedin URL</label>
                <input type="text" class="form-control" name="emp4linkedinUrl" id="emp4linkedinUrl">
                </div>
            </div>
            <hr>
            <h4>Team mate 5</h4>
            <div class="row">
            <div class="col">
                <label for="emp5Name">Emp5 name</label>
                <input type="text" class="form-control" name="emp5Name" id="emp5Name">
            </div>
            <div class="col">
                <label for="emp5Designation">Emp5 Designation</label>
                <input type="text" class="form-control" name="emp5Designation" id="emp5Designation">
            </div>
            <div class="col">
                <label for="emp5Image">Emp5 Image</label>
                <input type="file" class="form-control" name="emp5Image" id="emp5Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp5fbUrl">Emp5 Fb URL</label>
                <input type="text" class="form-control" name="emp5fbUrl" id="emp5fbUrl">
                </div>
                <div class="col">
                <label for="emp5twitterUrl">Emp5 Twitter URL</label>
                <input type="text" class="form-control" name="emp5twitterUrl" id="emp5twitterUrl">
                </div>
                <div class="col">
                <label for="emp5linkedinUrl">Emp5 linkedin URL</label>
                <input type="text" class="form-control" name="emp5linkedinUrl" id="emp5linkedinUrl">
                </div>
            </div>
            
            <hr>
            <h4>Team mate 6</h4>
            <div class="row">
            <div class="col">
                <label for="emp6Name">Emp6 name</label>
                <input type="text" class="form-control" name="emp6Name" id="emp6Name">
            </div>
            <div class="col">
                <label for="emp6Designation">Emp6 Designation</label>
                <input type="text" class="form-control" name="emp6Designation" id="emp6Designation">
            </div>
            <div class="col">
                <label for="emp6Image">Emp6 Image</label>
                <input type="file" class="form-control" name="emp6Image" id="emp6Image">
            </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="emp6fbUrl">Emp6 Fb URL</label>
                <input type="text" class="form-control" name="emp6fbUrl" id="emp6fbUrl">
                </div>
                <div class="col">
                <label for="emp6twitterUrl">Emp6 Twitter URL</label>
                <input type="text" class="form-control" name="emp6twitterUrl" id="emp6twitterUrl">
                </div>
                <div class="col">
                <label for="emp6linkedinUrl">Emp6 linkedin URL</label>
                <input type="text" class="form-control" name="emp6linkedinUrl" id="emp6linkedinUrl">
                </div>
            </div>  
        </div>
        
    </div>
    
    <div class="row mt-3">
        <div class="col-12">
            <h3>Testimonials / What people says?</h3>
        </div>
            <div class="col-6 mt-3">
            <label for="">Testimonial 1 by </label>
            <input class="form-control" type="text" name="testimonialName1" id="testimonialName1">
            <label for="testimonialImage1">Testimonial 1 person image </label>
            <input class="form-control" type="file" name="testimonialImage1" id="testimonialImage1">
            <label for="testimonialContent1">Testimonial 1 Content</label>
            <textarea type="text" name="testimonialContent1" class="form-control mt-3 ckeditor" id="testimonialContent1" cols="30" rows="10"></textarea>
             </div>
            
             <div class="col-6 mt-3">
            <label for="testimonialName2">Testimonial 2 by </label>
            <input class="form-control" type="text" name="testimonialName2" id="testimonialName2">
            <label for="testimonialImage2">Testimonial 2 person image </label>
            <input class="form-control" type="file" name="testimonialImage2" id="testimonialImage2">
            <label for="testimonialContent2">Testimonial 2 Content</label>
            <textarea type="text" name="testimonialContent2" class="form-control mt-3 ckeditor" id="testimonialContent2" cols="30" rows="10"></textarea>
             </div>

             <br>
             <div class="col-6 mt-3">
            <label for="testimonialName3">Testimonial 3 by </label>
            <input class="form-control" type="text" name="testimonialName3" id="testimonialName3">
            <label for="testimonialImage3">Testimonial 3 person image </label>
            <input class="form-control" type="file" name="testimonialImage3" id="testimonialImage3">
            <label for="testimonialContent3">Testimonial 1 Content</label>
            <textarea type="text" name="testimonialContent3" class="form-control mt-3 ckeditor" id="testimonialContent3" cols="30" rows="10"></textarea>
             </div>
             <div class="col-6 mt-3">
            <label for="testimonialName4">Testimonial 4 by </label>
            <input class="form-control" type="text" name="testimonialName4" id="testimonialName4">
            <label for="testimonialImage4">Testimonial 4 person image </label>
            <input class="form-control" type="file" name="testimonialImage4" id="testimonialImage1">
            <label for="testimonialContent4">Testimonial 4 Content</label>
            <textarea type="text" name="testimonialContent4" class="form-control mt-3 ckeditor" id="testimonialContent4" cols="30" rows="10"></textarea>
             </div>
            

      
       
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <h3>Footer content & Social Media Links</h3>
        </div>
        <div class="col">
            <label for="contactNumber">Contact Number</label>
            <input class="form-control" type="tel" name="contactNumber" id="contactNumber">
        </div>
        <div class="col">
            <label for="emailAddress">Email Address</label>
            <input class="form-control" type="email" name="emailAddress" id="emailAddress">
        </div>
        <div class="col">
            <label for="logo">Company Logo</label>
            <input type="file" class="form-control"  name="logo" id="logo">
        </div>
        <div class="col-12 mb-3">
            <label for="tagLine">Tag Line</label>
            <input type="text" name="tagLine" class="form-control" id="tagLine" >
        </div>
        <div class="col-12 mb-3">
            <label for="address">Address</label>
            <textarea name="address" class="form-control ckeditor" id="address" cols="30" rows="10"></textarea>
        </div>
        
        <div class="col">
            
            <label for="dcdesignsFbUrl">facebook : <i class="fa-brands fa-facebook"></i></label>
            <input type="text" class="form-control"  name="dcdesignsFbUrl" id="dcdesignsFbUrl">
        </div>
        <div class="col">
            <label for="dcdesignsTwitterUrl">Twitter : <i class="fa-brands fa-twitter"></i></label>
            <input type="text" class="form-control"  name="dcdesignsTwitterUrl" id="dcdesignsTwitterUrl">
        </div>
        <div class="col">
            <label for="dcdesignsLinkedInUrl">linkedin : <i class="fa-brands fa-linkedin"></i></label>
            <input type="text" class="form-control"  name="dcdesignsLinkedInUrl" id="dcdesignsLinkedInUrl">
        </div>
        <div class="col">
            <label for="dcdesignsPinterestUrl">pinterest : <i class="fa-brands fa-pinterest"></i></label>
            <input type="text" class="form-control"  name="dcdesignsPinterestUrl" id="dcdesignsPinterestUrl">
        </div>
        <div class="col">
            <label for="dcdesignsInstagramUrl">Instagram : <i class="fa-brands fa-instagram"></i></label>
            <input type="text" class="form-control" name="dcdesignsInstagramUrl" id="dcdesignsInstagramUrl">
        </div>
        
       
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

</div>

        </div>
    </div>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
