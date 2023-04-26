<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('c_r_m_s', function (Blueprint $table) {
            $table->id();
             //Carousel Part 
             $table->string('carouselImage1')->nullable();
             $table->string('carouselImage2')->nullable();
             $table->string('carouselImage3')->nullable();
             $table->text('carousellevel1Heading1')->nullable();
             $table->text('carousellevel1Heading2')->nullable();
             $table->text('carousellevel1Heading3')->nullable();
             $table->text('carousellevel2Heading1')->nullable();
             $table->text('carousellevel2Heading2')->nullable();
             $table->text('carousellevel2Heading3')->nullable();
             $table->longtext('carouselparagraph1')->nullable();
             $table->longtext('carouselparagraph2')->nullable();
             $table->longtext('carouselparagraph3')->nullable();
             
 
             ///About section
             $table->string('aboutusImage1')->nullable();
             $table->string('aboutusImage2')->nullable();
             $table->text('aboutusHeading')->nullable();
             $table->longtext('aboutusParagraph')->nullable();
 
 
             //Project Section
             $table->string('projectImage1')->nullable();
             $table->string('projectImage2')->nullable();
             $table->string('projectImage3')->nullable();
             $table->string('projectImage4')->nullable();
 
 
             //Employee Section
             $table->text('employeeHeading')->nullable();
             $table->longtext('employeeParagraph')->nullable();
             //Emp1
             $table->text('emp1Name')->nullable();
             $table->text('emp1Designation')->nullable();
             $table->string('emp1Image')->nullable();
             $table->text('emp1fbUrl')->nullable();
             $table->text('emp1twitterUrl')->nullable();
             $table->text('emp1linkedinUrl')->nullable();
             //Emp2
             $table->text('emp2Name')->nullable();
             $table->text('emp2Designation')->nullable();
             $table->string('emp2Image')->nullable();
             $table->text('emp2fbUrl')->nullable();
             $table->text('emp2twitterUrl')->nullable();
             $table->text('emp2linkedinUrl')->nullable();
             //Emp3
             $table->text('emp3Name')->nullable();
             $table->text('emp3Designation')->nullable();
             $table->string('emp3Image')->nullable();
             $table->text('emp3fbUrl')->nullable();
             $table->text('emp3twitterUrl')->nullable();
             $table->text('emp3linkedinUrl')->nullable();
             //Emp4
             $table->text('emp4Name')->nullable();
             $table->text('emp4Designation')->nullable();
             $table->string('emp4Image')->nullable();
             $table->text('emp4fbUrl')->nullable();
             $table->text('emp4twitterUrl')->nullable();
             $table->text('emp4linkedinUrl')->nullable();
             //Emp5
             $table->text('emp5Name')->nullable();
             $table->text('emp5Designation')->nullable();
             $table->string('emp5Image')->nullable();
             $table->text('emp5fbUrl')->nullable();
             $table->text('emp5twitterUrl')->nullable();
             $table->text('emp5linkedinUrl')->nullable();
             //Emp6
             $table->text('emp6Name')->nullable();
             $table->text('emp6Designation')->nullable();
             $table->string('emp6Image')->nullable();
             $table->text('emp6fbUrl')->nullable();
             $table->text('emp6twitterUrl')->nullable();
             $table->text('emp6linkedinUrl')->nullable();
 
 
             //Testimonial Section
             //Testimonial 1
             $table->longtext('testimonialContent1')->nullable();
             $table->text('testimonialName1')->nullable();
             $table->string('testimonialImage1')->nullable();
             //Testimonial 2
             $table->longtext('testimonialContent2')->nullable();
             $table->text('testimonialName2')->nullable();
             $table->string('testimonialImage2')->nullable();
             //Testimonial 3
             $table->longtext('testimonialContent3')->nullable();
             $table->text('testimonialName3')->nullable();
             $table->string('testimonialImage3')->nullable();
             //Testimonial 4
             $table->longtext('testimonialContent4')->nullable();
             $table->text('testimonialName4')->nullable();
             $table->string('testimonialImage4')->nullable();

             //Footer
             $table->longtext('address')->nullable();
             $table->text('contactNumber')->nullable();
             $table->text('emailAddress')->nullable();
             $table->string('logo')->nullable();
             $table->longtext('tagLine')->nullable();

             //Social Media Links
             $table->text('dcdesignsFbUrl')->nullable();
             $table->text('dcdesignsTwitterUrl')->nullable();
             $table->text('dcdesignsLinkedInUrl')->nullable();
             $table->text('dcdesignsPinterestUrl')->nullable();
             $table->text('dcdesignsInstagramUrl')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_r_m_s');
    }
};
